<?php

namespace app\controllers;

use Yii;
use app\models\TramitesLicenciaConstruccion;
use app\models\TramitesLicenciaConstruccionSearch;
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
 * TramitesLicenciaConstruccionController implements the CRUD actions for TramitesLicenciaConstruccion model.
 */
class TramitesLicenciaConstruccionController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesLicenciaConstruccion();
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

    function mssql_escape($data) {
        if(is_numeric($data))
          return $data;
       // print_r($data);
        $unpacked = unpack('H*hex', $data);
        //print_r($unpacked);
        //print_r(pack('H*', $unpacked['hex']));
        return   $unpacked['hex'];
    }
    

    /**
     * Lists all TramitesLicenciaConstruccion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $tramites = TramitesLicenciaConstruccion::find()->where(['tipoTramiteid' => '1'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesLicenciaConstruccion model.
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

        if (($model = TramitesLicenciaConstruccion::findOne($id)) === null)  
            $model = new TramitesLicenciaConstruccion(); 
        //print_r($model->encabezadoImagen);
        if(empty($model->encabezadoImagen))
            $encabezado = new TramitesLicenciaConstruccion();
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

    private function cancelarSalvar($transaction,$mensaje)
    {
        $transaction->rollBack();
        return $mensaje;
    }

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

        $id=Yii::$app->request->post()['TramitesLicenciaConstruccion']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesLicenciaConstruccion::findOne($id)) === null)  
            $model = new TramitesLicenciaConstruccion(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        if( $model->estatusId!=3 || $pasoIndex>3){
            $model->estatusId=1;
            $model->observaciones="";
        }


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
            $creacion=strtotime($model->fechaCreacion);
            $encabezado->fechaRegistro= date('d-m-Y H:i:s',$creacion);

            $carga=strtotime($model->fechaModificacion);
            $encabezado->fechaCarga= date('d-m-Y H:i:s',$carga);
            if(!$encabezado->save())
               return $this->cancelarSalvar($transaction,'Error al Salvar EncabezadoImagenes');

        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2CopiaEscritura','Copia Escritura');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
           
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2PlanoManzanero','Plano Manzanero');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2CasaHabitacionAlineamientoNumeroOficial','CasaHabitacion Alineamiento NumeroOficial');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2CasaHabitacionCroquis','Casa Habitacion Croquis');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2CasaHabitacionPredial','Casa Habitacion Predial');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2CasaHabitacionEscrituras','Casa Habitacion Escrituras');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionCasaHabitacionAlineamiento','Construccion Casa Habitacion Alineamiento');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionCasaHabitacionPlano','Construccion Casa Habitacion Plano');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionCasaHabitacionPredial','Construccion Casa Habitacion Predial');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionCasaHabitacionEscrituras','Construccion Casa Habitacion Escrituras');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionCasaHabitacionBitacora','Construccion Casa Habitacion Bitacora');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2Solicitud','Solicitud');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionCasaHabitacionSolicitud','Construccion Casa Habitacion Solicitud');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionCasaHabitacionProyecto','Construccion Casa Habitacion Proyecto');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionLocalAlineamiento','Construccion Local Alineamiento');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionLocalPlano','Construccion Local Plano');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionLocalLicencia','Construccion Local Licencia');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionLocalPredial','Construccion Local Predial');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

           
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionLocalEscrituras','Construccion Local Escrituras');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionLocalSolicitud','Construccion Local Solicitud');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionLocalBitacora','Construccion Local Bitacora');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ConstruccionLocalProyecto','Construccion Local Proyecto');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2BardasAlineamiento','Bardas Alineamiento');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2BardasMarcarBarda','Bardas Marcar Barda');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2BardasPredial','Bardas Predial');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2BardasEscrituras','Bardas Escrituras');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2BardasAltura','Bardas Altura');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2RemodelacionAlineamiento','Remodelacion Alineamiento');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2RemodelacionCroquis','Remodelacion Croquis');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2RemodelacionPresupuesto','Remodelacion Presupuesto');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2RemodelacionPredial','Remodelacion Predial');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2RemodelacionEscrituras','Remodelacion Escrituras');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2RemodelacionLicencia','Remodelacion Licencia');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2BanquetasPredial','Banquetas Predial');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'Banquetas Croquis','Banquetas Croquis');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ProrrogaPermiso','Prorroga Permiso');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ProrrogaRecibo','Prorroga Recibo');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ProrrogaPlano','Prorroga Plano');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ProrrogaSolicitud','Prorroga Solicitud');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2PermisoSolicitud','Permiso Solicitud');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2DemolicionEscrituras','Demolicion Escrituras');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2DemolicionPredial','Demolicion Predial');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2DemolicionPlano','Demolicion Plano');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3Resolutivo','Resolutivo');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);

            
        }
        if($pasoIndex==5){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5Licencia','Licencia');
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
     * Creates a new TramitesLicenciaConstruccion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesLicenciaConstruccion();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesLicenciaConstruccion model.
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
     * Deletes an existing TramitesLicenciaConstruccion model.
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
     * Finds the TramitesLicenciaConstruccion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesLicenciaConstruccion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesLicenciaConstruccion::findOne($id)) !== null) {
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
