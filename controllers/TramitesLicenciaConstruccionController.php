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
                        'actions' => ['index','view','imprimir'],
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
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2CasaHabitacionAlineamientoNumeroOficial','Plano Manzanero');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
            try {
                $var_p2CasaHabitacionAlineamientoNumeroOficial = UploadedFile::getInstance($model, 'p2CasaHabitacionAlineamientoNumeroOficial');
                if(!empty($var_p2CasaHabitacionAlineamientoNumeroOficial )){
                    $ext = end((explode(".", $var_p2CasaHabitacionAlineamientoNumeroOficial->name)));
                    $model->p2CasaHabitacionAlineamientoNumeroOficial = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2CasaHabitacionAlineamientoNumeroOficial;
                    $var_p2CasaHabitacionAlineamientoNumeroOficial->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2CasaHabitacionCroquis = UploadedFile::getInstance($model, 'p2CasaHabitacionCroquis');
                if(!empty($var_p2CasaHabitacionCroquis )){
                    $ext = end((explode(".", $var_p2CasaHabitacionCroquis->name)));
                    $model->p2CasaHabitacionCroquis = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2CasaHabitacionCroquis;
                    $var_p2CasaHabitacionCroquis->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2CasaHabitacionPredial = UploadedFile::getInstance($model, 'p2CasaHabitacionPredial');
                if(!empty($var_p2CasaHabitacionPredial )){
                    $ext = end((explode(".", $var_p2CasaHabitacionPredial->name)));
                    $model->p2CasaHabitacionPredial = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2CasaHabitacionPredial;
                    $var_p2CasaHabitacionPredial->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2CasaHabitacionEscrituras = UploadedFile::getInstance($model, 'p2CasaHabitacionEscrituras');
                if(!empty($var_p2CasaHabitacionEscrituras )){
                    $ext = end((explode(".", $var_p2CasaHabitacionEscrituras->name)));
                    $model->p2CasaHabitacionEscrituras = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2CasaHabitacionEscrituras;
                    $var_p2CasaHabitacionEscrituras->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionCasaHabitacionAlineamiento = UploadedFile::getInstance($model, 'p2ConstruccionCasaHabitacionAlineamiento');
                if(!empty($var_p2ConstruccionCasaHabitacionAlineamiento )){
                    $ext = end((explode(".", $var_p2ConstruccionCasaHabitacionAlineamiento->name)));
                    $model->p2ConstruccionCasaHabitacionAlineamiento = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionCasaHabitacionAlineamiento;
                    $var_p2ConstruccionCasaHabitacionAlineamiento->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionCasaHabitacionPlano = UploadedFile::getInstance($model, 'p2ConstruccionCasaHabitacionPlano');
                if(!empty($var_p2ConstruccionCasaHabitacionPlano )){
                    $ext = end((explode(".", $var_p2ConstruccionCasaHabitacionPlano->name)));
                    $model->p2ConstruccionCasaHabitacionPlano = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionCasaHabitacionPlano;
                    $var_p2ConstruccionCasaHabitacionPlano->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionCasaHabitacionPredial = UploadedFile::getInstance($model, 'p2ConstruccionCasaHabitacionPredial');
                if(!empty($var_p2ConstruccionCasaHabitacionPredial )){
                    $ext = end((explode(".", $var_p2ConstruccionCasaHabitacionPredial->name)));
                    $model->p2ConstruccionCasaHabitacionPredial = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionCasaHabitacionPredial;
                    $var_p2ConstruccionCasaHabitacionPredial->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionCasaHabitacionEscrituras = UploadedFile::getInstance($model, 'p2ConstruccionCasaHabitacionEscrituras');
                if(!empty($var_p2ConstruccionCasaHabitacionEscrituras )){
                    $ext = end((explode(".", $var_p2ConstruccionCasaHabitacionEscrituras->name)));
                    $model->p2ConstruccionCasaHabitacionEscrituras = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionCasaHabitacionEscrituras;
                    $var_p2ConstruccionCasaHabitacionEscrituras->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionCasaHabitacionBitacora = UploadedFile::getInstance($model, 'p2ConstruccionCasaHabitacionBitacora');
                if(!empty($var_p2ConstruccionCasaHabitacionBitacora )){
                    $ext = end((explode(".", $var_p2ConstruccionCasaHabitacionBitacora->name)));
                    $model->p2ConstruccionCasaHabitacionBitacora = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionCasaHabitacionBitacora;
                    $var_p2ConstruccionCasaHabitacionBitacora->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Solicitud = UploadedFile::getInstance($model, 'p2Solicitud');
                if(!empty($var_p2Solicitud )){
                    $ext = end((explode(".", $var_p2Solicitud->name)));
                    $model->p2Solicitud = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Solicitud;
                    $var_p2Solicitud->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionCasaHabitacionSolicitud = UploadedFile::getInstance($model, 'p2ConstruccionCasaHabitacionSolicitud');
                if(!empty($var_p2ConstruccionCasaHabitacionSolicitud )){
                    $ext = end((explode(".", $var_p2ConstruccionCasaHabitacionSolicitud->name)));
                    $model->p2ConstruccionCasaHabitacionSolicitud = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionCasaHabitacionSolicitud;
                    $var_p2ConstruccionCasaHabitacionSolicitud->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionCasaHabitacionProyecto = UploadedFile::getInstance($model, 'p2ConstruccionCasaHabitacionProyecto');
                if(!empty($var_p2ConstruccionCasaHabitacionProyecto )){
                    $ext = end((explode(".", $var_p2ConstruccionCasaHabitacionProyecto->name)));
                    $model->p2ConstruccionCasaHabitacionProyecto = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionCasaHabitacionProyecto;
                    $var_p2ConstruccionCasaHabitacionProyecto->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionLocalAlineamiento = UploadedFile::getInstance($model, 'p2ConstruccionLocalAlineamiento');
                if(!empty($var_p2ConstruccionLocalAlineamiento )){
                    $ext = end((explode(".", $var_p2ConstruccionLocalAlineamiento->name)));
                    $model->p2ConstruccionLocalAlineamiento = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionLocalAlineamiento;
                    $var_p2ConstruccionLocalAlineamiento->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionLocalPlano = UploadedFile::getInstance($model, 'p2ConstruccionLocalPlano');
                if(!empty($var_p2ConstruccionLocalPlano )){
                    $ext = end((explode(".", $var_p2ConstruccionLocalPlano->name)));
                    $model->p2ConstruccionLocalPlano = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionLocalPlano;
                    $var_p2ConstruccionLocalPlano->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionLocalLicencia = UploadedFile::getInstance($model, 'p2ConstruccionLocalLicencia');
                if(!empty($var_p2ConstruccionLocalLicencia )){
                    $ext = end((explode(".", $var_p2ConstruccionLocalLicencia->name)));
                    $model->p2ConstruccionLocalLicencia = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionLocalLicencia;
                    $var_p2ConstruccionLocalLicencia->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionLocalPredial = UploadedFile::getInstance($model, 'p2ConstruccionLocalPredial');
                if(!empty($var_p2ConstruccionLocalPredial )){
                    $ext = end((explode(".", $var_p2ConstruccionLocalPredial->name)));
                    $model->p2ConstruccionLocalPredial = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionLocalPredial;
                    $var_p2ConstruccionLocalPredial->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionLocalEscrituras = UploadedFile::getInstance($model, 'p2ConstruccionLocalEscrituras');
                if(!empty($var_p2ConstruccionLocalEscrituras )){
                    $ext = end((explode(".", $var_p2ConstruccionLocalEscrituras->name)));
                    $model->p2ConstruccionLocalEscrituras = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionLocalEscrituras;
                    $var_p2ConstruccionLocalEscrituras->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionLocalSolicitud = UploadedFile::getInstance($model, 'p2ConstruccionLocalSolicitud');
                if(!empty($var_p2ConstruccionLocalSolicitud )){
                    $ext = end((explode(".", $var_p2ConstruccionLocalSolicitud->name)));
                    $model->p2ConstruccionLocalSolicitud = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionLocalSolicitud;
                    $var_p2ConstruccionLocalSolicitud->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionLocalBitacora = UploadedFile::getInstance($model, 'p2ConstruccionLocalBitacora');
                if(!empty($var_p2ConstruccionLocalBitacora )){
                    $ext = end((explode(".", $var_p2ConstruccionLocalBitacora->name)));
                    $model->p2ConstruccionLocalBitacora = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionLocalBitacora;
                    $var_p2ConstruccionLocalBitacora->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ConstruccionLocalProyecto = UploadedFile::getInstance($model, 'p2ConstruccionLocalProyecto');
                if(!empty($var_p2ConstruccionLocalProyecto )){
                    $ext = end((explode(".", $var_p2ConstruccionLocalProyecto->name)));
                    $model->p2ConstruccionLocalProyecto = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ConstruccionLocalProyecto;
                    $var_p2ConstruccionLocalProyecto->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2BardasAlineamiento = UploadedFile::getInstance($model, 'p2BardasAlineamiento');
                if(!empty($var_p2BardasAlineamiento )){
                    $ext = end((explode(".", $var_p2BardasAlineamiento->name)));
                    $model->p2BardasAlineamiento = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2BardasAlineamiento;
                    $var_p2BardasAlineamiento->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2BardasMarcarBarda = UploadedFile::getInstance($model, 'p2BardasMarcarBarda');
                if(!empty($var_p2BardasMarcarBarda )){
                    $ext = end((explode(".", $var_p2BardasMarcarBarda->name)));
                    $model->p2BardasMarcarBarda = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2BardasMarcarBarda;
                    $var_p2BardasMarcarBarda->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2BardasPredial = UploadedFile::getInstance($model, 'p2BardasPredial');
                if(!empty($var_p2BardasPredial )){
                    $ext = end((explode(".", $var_p2BardasPredial->name)));
                    $model->p2BardasPredial = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2BardasPredial;
                    $var_p2BardasPredial->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2BardasEscrituras = UploadedFile::getInstance($model, 'p2BardasEscrituras');
                if(!empty($var_p2BardasEscrituras )){
                    $ext = end((explode(".", $var_p2BardasEscrituras->name)));
                    $model->p2BardasEscrituras = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2BardasEscrituras;
                    $var_p2BardasEscrituras->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2BardasAltura = UploadedFile::getInstance($model, 'p2BardasAltura');
                if(!empty($var_p2BardasAltura )){
                    $ext = end((explode(".", $var_p2BardasAltura->name)));
                    $model->p2BardasAltura = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2BardasAltura;
                    $var_p2BardasAltura->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2RemodelacionAlineamiento = UploadedFile::getInstance($model, 'p2RemodelacionAlineamiento');
                if(!empty($var_p2RemodelacionAlineamiento )){
                    $ext = end((explode(".", $var_p2RemodelacionAlineamiento->name)));
                    $model->p2RemodelacionAlineamiento = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2RemodelacionAlineamiento;
                    $var_p2RemodelacionAlineamiento->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2RemodelacionCroquis = UploadedFile::getInstance($model, 'p2RemodelacionCroquis');
                if(!empty($var_p2RemodelacionCroquis )){
                    $ext = end((explode(".", $var_p2RemodelacionCroquis->name)));
                    $model->p2RemodelacionCroquis = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2RemodelacionCroquis;
                    $var_p2RemodelacionCroquis->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2RemodelacionPresupuesto = UploadedFile::getInstance($model, 'p2RemodelacionPresupuesto');
                if(!empty($var_p2RemodelacionPresupuesto )){
                    $ext = end((explode(".", $var_p2RemodelacionPresupuesto->name)));
                    $model->p2RemodelacionPresupuesto = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2RemodelacionPresupuesto;
                    $var_p2RemodelacionPresupuesto->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2RemodelacionPredial = UploadedFile::getInstance($model, 'p2RemodelacionPredial');
                if(!empty($var_p2RemodelacionPredial )){
                    $ext = end((explode(".", $var_p2RemodelacionPredial->name)));
                    $model->p2RemodelacionPredial = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2RemodelacionPredial;
                    $var_p2RemodelacionPredial->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2RemodelacionEscrituras = UploadedFile::getInstance($model, 'p2RemodelacionEscrituras');
                if(!empty($var_p2RemodelacionEscrituras )){
                    $ext = end((explode(".", $var_p2RemodelacionEscrituras->name)));
                    $model->p2RemodelacionEscrituras = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2RemodelacionEscrituras;
                    $var_p2RemodelacionEscrituras->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2RemodelacionLicencia = UploadedFile::getInstance($model, 'p2RemodelacionLicencia');
                if(!empty($var_p2RemodelacionLicencia )){
                    $ext = end((explode(".", $var_p2RemodelacionLicencia->name)));
                    $model->p2RemodelacionLicencia = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2RemodelacionLicencia;
                    $var_p2RemodelacionLicencia->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2BanquetasPredial = UploadedFile::getInstance($model, 'p2BanquetasPredial');
                if(!empty($var_p2BanquetasPredial )){
                    $ext = end((explode(".", $var_p2BanquetasPredial->name)));
                    $model->p2BanquetasPredial = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2BanquetasPredial;
                    $var_p2BanquetasPredial->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2BanquetasCroquis = UploadedFile::getInstance($model, 'p2BanquetasCroquis');
                if(!empty($var_p2BanquetasCroquis )){
                    $ext = end((explode(".", $var_p2BanquetasCroquis->name)));
                    $model->p2BanquetasCroquis = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2BanquetasCroquis;
                    $var_p2BanquetasCroquis->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ProrrogaPermiso = UploadedFile::getInstance($model, 'p2ProrrogaPermiso');
                if(!empty($var_p2ProrrogaPermiso )){
                    $ext = end((explode(".", $var_p2ProrrogaPermiso->name)));
                    $model->p2ProrrogaPermiso = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ProrrogaPermiso;
                    $var_p2ProrrogaPermiso->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ProrrogaRecibo = UploadedFile::getInstance($model, 'p2ProrrogaRecibo');
                if(!empty($var_p2ProrrogaRecibo )){
                    $ext = end((explode(".", $var_p2ProrrogaRecibo->name)));
                    $model->p2ProrrogaRecibo = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ProrrogaRecibo;
                    $var_p2ProrrogaRecibo->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ProrrogaPlano = UploadedFile::getInstance($model, 'p2ProrrogaPlano');
                if(!empty($var_p2ProrrogaPlano )){
                    $ext = end((explode(".", $var_p2ProrrogaPlano->name)));
                    $model->p2ProrrogaPlano = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ProrrogaPlano;
                    $var_p2ProrrogaPlano->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ProrrogaSolicitud = UploadedFile::getInstance($model, 'p2ProrrogaSolicitud');
                if(!empty($var_p2ProrrogaSolicitud )){
                    $ext = end((explode(".", $var_p2ProrrogaSolicitud->name)));
                    $model->p2ProrrogaSolicitud = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ProrrogaSolicitud;
                    $var_p2ProrrogaSolicitud->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2PermisoSolicitud = UploadedFile::getInstance($model, 'p2PermisoSolicitud');
                if(!empty($var_p2PermisoSolicitud )){
                    $ext = end((explode(".", $var_p2PermisoSolicitud->name)));
                    $model->p2PermisoSolicitud = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2PermisoSolicitud;
                    $var_p2PermisoSolicitud->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2DemolicionEscrituras = UploadedFile::getInstance($model, 'p2DemolicionEscrituras');
                if(!empty($var_p2DemolicionEscrituras )){
                    $ext = end((explode(".", $var_p2DemolicionEscrituras->name)));
                    $model->p2DemolicionEscrituras = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2DemolicionEscrituras;
                    $var_p2DemolicionEscrituras->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2DemolicionPredial = UploadedFile::getInstance($model, 'p2DemolicionPredial');
                if(!empty($var_p2DemolicionPredial )){
                    $ext = end((explode(".", $var_p2DemolicionPredial->name)));
                    $model->p2DemolicionPredial = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2DemolicionPredial;
                    $var_p2DemolicionPredial->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2DemolicionPlano = UploadedFile::getInstance($model, 'p2DemolicionPlano');
                if(!empty($var_p2DemolicionPlano )){
                    $ext = end((explode(".", $var_p2DemolicionPlano->name)));
                    $model->p2DemolicionPlano = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2DemolicionPlano;
                    $var_p2DemolicionPlano->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3Resolutivo = UploadedFile::getInstance($model, 'p3Resolutivo');
                if(!empty($var_p3Resolutivo )){
                    $ext = end((explode(".", $var_p3Resolutivo->name)));
                    $model->p3Resolutivo = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3Resolutivo;
                    $var_p3Resolutivo->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5Licencia = UploadedFile::getInstance($model, 'p5Licencia');
                if(!empty($var_p5Licencia )){
                    $ext = end((explode(".", $var_p5Licencia->name)));
                    $model->p5Licencia = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5Licencia;
                    $var_p5Licencia->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
                 
                
        if ($model->load(Yii::$app->request->post()) ) { 
                    
            if($datos=$model->salvarPaso($pasoIndex)) { 
                $model->__salvando = 0;  
                return $datos; 
            } 
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
}
