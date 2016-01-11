<?php

namespace app\controllers;

use Yii;
use app\models\TramitesAperturaCepas;
use app\models\TramitesAperturaCepasSearch;
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
 * TramitesAperturaCepasController implements the CRUD actions for TramitesAperturaCepas model.
 */
class TramitesAperturaCepasController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesAperturaCepas();
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
     * Lists all TramitesAperturaCepas models.
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
        $tramites = TramitesAperturaCepas::find()->where(['tipoTramiteid' => '3014'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesAperturaCepas model.
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

    //Esta funcion la llevan todos los controladores, cuidado con el modelo
    public function actionViewImagen()
    {
        $consecutivo=1;
        $tipoDocumento=$_POST['tipoDocumento'];
        $id=$_POST['id'];
        if(isset($_POST['consecutivo']))
            $consecutivo=$_POST['consecutivo'];

        if (($model = TramitesAperturaCepas::findOne($id)) === null)  
            $model = new TramitesAperturaCepas(); 
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
        
        $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
        $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
        $tipoDocumento = utf8_decode($tipoDocumento);
        $tipoDocumento = strtr($tipoDocumento, utf8_decode($originales), $modificadas);

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
        
        $id=Yii::$app->request->post()['TramitesAperturaCepas']['id']; 

        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesAperturaCepas::findOne($id)) === null)  
            $model = new TramitesAperturaCepas(); 
        
 
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
            $encabezado->nombreSolicitante= $model->p1NombrePropietarios;
            $encabezado->nombrePropietario= $model->p1NombrePropietarios;
            $encabezado->fechaRegistro= $model->fechaCreacion;
            $encabezado->fechaCarga= $model->fechaModificacion;
            
             if(!$encabezado->save())
               return $this->cancelarSalvar($transaction,'Error al Salvar EncabezadoImagenes'); 
         
        \Yii::$app->response->format = 'json'; 

        if($pasoIndex==1){

            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p1DirectorResponsable','Director Responsable');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

        }
        if($pasoIndex==1){

            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p1PlanoTrayectoria','Plano Trayectoria');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

        }
        if($pasoIndex==1){

            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p1ProgramaObra','Programa Obra');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

        }
        if($pasoIndex==1){

            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p1PresupuestoObra','Presupuesto Obra');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

        }
        if($pasoIndex==1){

            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p1AnuenciaVecinos','Anuencia Vecinos');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);            

        }
        if($pasoIndex==1){

            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p1Fianza','Fianza');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);            

        }
        if($pasoIndex==1){

            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p1Pago','Pago');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);            

        }
        if($pasoIndex==2){

            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2Expediente','Expediente');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);            

        }
        if($pasoIndex==3){

            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3Resolutivo','Resolucion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);            

        }
        if($pasoIndex==3){

            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3Pago','Pago');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);            

        }
        if($pasoIndex==5){

            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5AperturasCepas','Aperturas Cepas');
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
     * Creates a new TramitesAperturaCepas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesAperturaCepas();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesAperturaCepas model.
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
     * Deletes an existing TramitesAperturaCepas model.
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
     * Finds the TramitesAperturaCepas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesAperturaCepas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesAperturaCepas::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
