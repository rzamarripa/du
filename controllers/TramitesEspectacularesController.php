<?php

namespace app\controllers;

use Yii;
use app\models\TramitesEspectaculares;
use app\models\TramitesEspectacularesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\USUARIOS;
use app\models\PasosTramite;
use app\models\EncabezadoImagenes;
use yii\filters\AccessControl; 
use yii\web\UploadedFile;
use app\models\Imagenes;
use app\models\Tramites;
/**
 * TramitesEspectacularesController implements the CRUD actions for TramitesEspectaculares model.
 */
class TramitesEspectacularesController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesEspectaculares();
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
                        'actions' => ['index','view','imprimir','view-imagen','filtro'],
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
     * Lists all TramitesEspectaculares models.
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
        $Tramites = TramitesEspectaculares::find()->where(['tipoTramiteid' => '2006'])->all();
       
        return $this->render('index',['Tramites'=>$Tramites]);
    }

    /**
     * Displays a single TramitesEspectaculares model.
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

        if (($model = TramitesEspectaculares::findOne($id)) === null)  
            $model = new TramitesEspectaculares(); 
        //print_r($model->encabezadoImagen);
        if(empty($model->encabezadoImagen))
            $encabezado = new EncabezadoImagenes();
        else
            $encabezado = $model->encabezadoImagen;

        $imagenes = Imagenes::find()
            ->where(['encabezado_id' => $encabezado->id, 'tipoDocumento'=>$tipoDocumento])
            ->orderBy('consecutivo')
            ->all();
        /*$idm=null;
        foreach ($encabezado->imagenes as $imagen) {
           // print_r($imagen);
            if($imagen->tipoDocumento==$tipoDocumento)
                $idm=$imagen;
        }
        header("Content-Type: image/jpeg");
        echo pack("H*",$idm->imagen);*/
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
                    if($iterArchivos==0)
                        $connection=Yii::$app->db;
                        $connection ->createCommand()
                        ->delete('Imagenes', "encabezado_id = {$encabezado->id} and tipoDocumento ='{$tipoDocumento}'")
                        ->execute();

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
        
        $id=Yii::$app->request->post()['TramitesEspectaculares']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesEspectaculares::findOne($id)) === null)  
            $model = new TramitesEspectaculares(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        $model->estatusId=1;
        $model->observaciones="";


        $model->__salvando = 1;  
        if(empty($model->encabezadoImagen))
                $encabezado = new EncabezadoImagenes();
            else
                $encabezado = $model->encabezadoImagen;
            $encabezado->tramite_id=$model->id;
            $encabezado->claveCatastral= "";
            $encabezado->nombreSolicitante= "";
            $encabezado->nombrePropietario= "";
            $encabezado->fechaRegistro= $model->fechaCreacion;
            $encabezado->fechaCarga= $model->fechaModificacion;
            if(!$encabezado->save())
               return $this->cancelarSalvar($transaction,'Error al Salvar EncabezadoImagenes');

        \Yii::$app->response->format = 'json'; 

        
         if($pasoIndex==2){
            
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2Memoria','Memoria');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }

        if($pasoIndex==2){
            
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2Poliza','Poliza');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }

        if($pasoIndex==2){
            
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2Propiedad','Propiedad');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }

         if($pasoIndex==2){
            
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2PagoImpuesto','Pago de Impuesto');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }

         if($pasoIndex==2){
            
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2CartaAutorizacion','Carta de Autorizacion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }


        if($pasoIndex==2){
            
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2CartaCompromiso','Carta de Compromiso');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }

        if($pasoIndex==2){
            
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2LicenciaConstruccion','Licencia de Construccion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }

         if($pasoIndex==4){
            
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p4ReciboPago','Recibo de Pago');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
    
        if($pasoIndex==6){
            $model->estatusId=2;
               $error=$this->salvarArchivos($transaction,$model,$encabezado,'p6Permiso','Permiso de Espectaculares');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
                 
                
        if ($model->load(Yii::$app->request->post()) ) { 
            
            if($datos=$model->salvarPaso($pasoIndex)) { 
                $model->__salvando = 0; 
                $transaction->commit(); 
                return $datos; 
            } 

            $transaction->rollBack();
        } 
         
        return null; 
    } 


    /**
     * Creates a new TramitesEspectaculares model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesEspectaculares();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesEspectaculares model.
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
     * Deletes an existing TramitesEspectaculares model.
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
     * Finds the TramitesEspectaculares model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesEspectaculares the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesEspectaculares::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionFiltro()
      {  
        $model = new Tramites();
        $fechaInicial = date("d-m-Y", strtotime($_GET["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y 23:59:00", strtotime($_GET["filtro"]["fechaFinal"]));
        $formato = 'fechaCreacion >= "' . $fechaInicial . '" and fechaCreacion <= "' . $fechaFinal . '"'; 

        $Tramites = Tramites::find()->where('fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->all();
        echo count($Tramites);
        return $this->render('index',['Tramites'=>$Tramites,'model'=>$model,]);
      }
}
