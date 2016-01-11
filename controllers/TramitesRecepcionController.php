<?php

namespace app\controllers;

use Yii;
use app\models\TramitesRecepcion;
use app\models\TramitesRecepcionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\USUARIOS;
use app\models\PasosTramite;
use app\models\EncabezadoImagenes;
use yii\filters\AccessControl; 
use yii\web\UploadedFile;
use app\models\Imagenes;

/**
 * TramitesRecepcionController implements the CRUD actions for TramitesRecepcion model.
 */
class TramitesRecepcionController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesRecepcion();
            $this->__tipoTramite = $model->tipoDeTramite();
        }
        return $this->__tipoTramite;
    }
    public function behaviors()
    {
        $permisos = USUARIOS::permisosTramite($this->tipoDeTramite());
        return [
                 
            'access' => [
                'class' => AccessControl::className(),
                
                'rules' => [
                    [
                        'actions' => ['index','view','imprimir','view-imagen'],
                        'allow' =>$permisos[USUARIOS::$LEER],
                        
                    ],
                    [
                        'actions' => ['salvar','create'],
                        'allow' => $permisos[USUARIOS::$CREAR],
                        
                    ],
                    [
                        'actions' => ['update','atras'],
                        'allow' => $permisos[USUARIOS::$ACTUALIZAR],
                        
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => $permisos[USUARIOS::$BORRAR],
                        
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TramitesRecepcion models.
     * @return mixed
     */
    function mssql_escape($data) {
        if(is_numeric($data))
          return $data;
       // print_r($data);
        $unpacked = unpack('H*hex', $data);
        //print_r($unpacked);
        //print_r(pack('H*', $unpacked['hex']));
        return   $unpacked['hex'];
    }
    
    public function actionIndex()
    {
        $tramites = TramitesRecepcion::find()->where(['tipoTramiteid' => '2009'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesRecepcion model.
     * @param integer $id
     * @return mixed
     */
 
    public function actionImprimir($id) 
    { 
        $pdf = Yii::$app->pdf; 
        $pdf->content = $this->renderpartial('_imprimir',['model' => $this->findModel($id)]); 
        return $pdf->render(); 
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


     public function actionViewImagen()
    {
        $consecutivo=1;
        $tipoDocumento=$_POST['tipoDocumento'];
        $id=$_POST['id'];
        if(isset($_POST['consecutivo']))
            $consecutivo=$_POST['consecutivo'];

        if (($model = TramitesRecepcion::findOne($id)) === null)  
            $model = new TramitesRecepcion(); 
        //print_r($model->encabezadoImagen);
        if(empty($model->encabezadoImagen))
            $encabezado = new EncabezadoImagenes();
        else
            $encabezado = $model->encabezadoImagen;

        $imagenes = Imagenes::find()
            ->where(['encabezado_id' => $encabezado->id, 'tipoDocumento'=>$tipoDocumento])
            ->orderBy('consecutivo')
            ->all();
            
        $totalImagenes=  count($imagenes);
       
        $imagen = $imagenes[$consecutivo-1];

        return $this->renderAjax('visor', ['model'=>$encabezado,'totalImagenes'=>$totalImagenes,
            'imagen' => $imagen,'consecutivo' =>$consecutivo,'id'=>$id,'tipoDocumento'=>$tipoDocumento]);
    }

    //Esta funcion la llevan todos los controladores
    private function salvarImagen($encabezado,$tipoDocumento,$documento,$consecutivo){
        $idm=null;
        
        $idm= new Imagenes();
                    //print_r($idm);
        $ext = end((explode(".", $documento->name)));
        $content=file_get_contents($documento->tempName);
        $idm->imagen = $this->mssql_escape($content);//$content;
        $idm->encabezado_id = $encabezado->id;
        $idm->consecutivo = intval($consecutivo);
        $idm->tipoDocumento=$tipoDocumento;
        $idm->save();
        //print_r($idm);
        return strval($idm->id);
    }
                 
    private function cancelarSalvar($transaction,$mensaje)
    {
        $transaction->rollBack();
        return $mensaje;
    }
    private function salvarArchivos($transaction,$model,$encabezado,$atributo,$tipoDocumento)
    {
            try {
                $iterArchivos=0;
                $archivo = UploadedFile::getInstance($model, $atributo.'['.$iterArchivos.']');
                while(!empty($archivo)){
                    if($iterArchivos==0){
                        $connection=Yii::$app->db;
                        $connection ->createCommand()
                        ->delete('Imagenes', "encabezado_id = {$encabezado->id} and tipoDocumento ='{$tipoDocumento}'")
                        ->execute();
                    }

                    $iterArchivos++;
                    if(!$this->salvarImagen($encabezado,$tipoDocumento,$archivo,$iterArchivos))
                        return $this->cancelarSalvar($transaction,'Error al Salvar '.$tipoDocumento);
                    $archivo = UploadedFile::getInstance($model, $atributo.'['.$iterArchivos.']');
                    
                }
            } 
            catch (yii\base\Exception $e) {
                return $this->cancelarSalvar($transaction,$e);
            }
            catch(Exception $e){
                return $this->cancelarSalvar($transaction,$e);
            }
            if($iterArchivos>0)
                $model[$atributo]=strval($iterArchivos);
            return "OK";

    }        

    public function actionSalvar() { 
        $transaction = Yii::$app->db->beginTransaction();
        $id=Yii::$app->request->post()['TramitesRecepcion']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesRecepcion::findOne($id)) === null)  
            $model = new TramitesRecepcion(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        $model->estatusId=1;
        $model->observaciones="";


        $model->__salvando = 1;  
        if(empty($model->encabezadoImagen))
                $encabezado = new EncabezadoImagenes();
            else
                $encabezado = $model->encabezadoImagen;
            $encabezado->tramite_id=$model->id;
            $encabezado->claveCatastral= $model->p1ClaveCatastralPredio;
            $encabezado->nombreSolicitante= $model->p1NombreSolicitante;
            $encabezado->nombrePropietario= $model->p1NombrePropietarios;
            $encabezado->fechaRegistro= $model->fechaCreacion;
            $encabezado->fechaCarga= $model->fechaModificacion;
            $encabezado->save(); 

            if(!$encabezado->save())
               return $this->cancelarSalvar($transaction,'Error al Salvar EncabezadoImagenes');
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5SolicitudPresidenteMuni','Solicitud');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3CertificadoCabildo','Certificado de cabildo');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5PlanoLotificacion','Plano Lotificacion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5RecepcionJapac','Recepcion de Japac');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3ActaRecepcion','Acta de Recepcion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3MemoriaTecno','Memoria');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3PlanoAgua','Plano de Agua');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3PlanoAlcantarillado','Plano Alcantarillado');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5RecepcionCfe','Recepcion CFE');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3ActaRecepcionCfe','Acta de Recepcion CFE');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3CartaCompromiso','Carta Compromiso');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3MemoriaTecnoCfe','Memoria Tecno CFE');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3PlanoCfe','Plano CFE');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5RecepcionAlumbrado','Recepcion de Alumbrado');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3OficioRecepcion','Oficio de Recepcion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3MemoriaTecnoAlumbrado','Memoria Tecno Alumbrado');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3PlanoAlumbrado','Plano Alumbrado');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5RecepcionCivil','Recepcion Civil');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3ActaTecnica','Acta Tecnica');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3MemoriaTecnoCivil','Memoria Tecno Civil');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5PlanoObras','Plano Obras');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3Donaciones','Donaciones');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3EscriturasPublica','Escritura Publica');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5PlanoPoligono','Plano Poligono');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==5){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p7Recepcion','Recepcion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2Expediente','Expediente');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
                 
                
        if ($model->load(Yii::$app->request->post()) ) { 
                    
            if($datos=$model->salvarPaso($pasoIndex)) { 
                $transaction->commit();
                $model->__salvando = 0;  
                return $datos; 
            } 
            $transaction->rollBack();
        } 
         
        return null; 
    } 


    /**
     * Creates a new TramitesRecepcion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesRecepcion();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesRecepcion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        return $this->render('update', [
                'model' => $model,
            ]);
    }
    public function actionAtras()
    {
        \Yii::$app->response->format = 'json'; 
         
        $id=Yii::$app->request->post()['id']; 
        $model = $this->findModel($id);
        $model->__salvando=1;
        $model->observaciones = Yii::$app->request->post()['observacion']; 
        $pasos=PasosTramite::find()->where(['tipoTramiteId'=>$this->tipoDeTramite()])->orderBy('secuencia')->all();
        $pasoIndex = Yii::$app->request->post()['pasoatras']; 
        for ($i=0; $i <$pasoIndex ; $i++) { 
            $paso = $pasos[$i];
        }
        $model->pasoActualId=$paso->id;
        $model->estatusId=3;
        $model->save();
        $model->__salvando=0;
        return $model;


    }


    /**
     * Deletes an existing TramitesRecepcion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TramitesRecepcion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesRecepcion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesRecepcion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
