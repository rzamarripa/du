<?php

namespace app\controllers;

use Yii;
use app\models\TramitesAutorizacion;
use app\models\TramitesAutorizacionSearch;
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
 * TramitesAutorizacionController implements the CRUD actions for TramitesAutorizacion model.
 */
class TramitesAutorizacionController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesAutorizacion();
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
     * Lists all TramitesAutorizacion models.
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
        $tramites = TramitesAutorizacion::find()->where(['tipoTramiteid' => '2008'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesAutorizacion model.
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

        if (($model = TramitesAutorizacion::findOne($id)) === null)  
            $model = new TramitesAutorizacion(); 
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
        $id=Yii::$app->request->post()['TramitesAutorizacion']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesAutorizacion::findOne($id)) === null)  
            $model = new TramitesAutorizacion(); 
        
 
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
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==3){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2Constancia','Constancia');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }

        if($pasoIndex==5){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5TituloPropiedad','Titulo de Propiedad');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==5){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5PlanoLocalizacion','Plano de Localizacion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }

        if($pasoIndex==5){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5PlanoTopogra','Plano Topografico');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==5){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5AnteproyectoLotificacionVialidad','Anteproyecto de Lotificacion de Vialidad');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==7){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p7Aprobacion','Aprobacion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8Solicitud','Solicitud');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8AcrediteCaracter','Acredite Caracter');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8ActaConstitutiva','Acta Constitutiva');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
             $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8LibertadGravamen','Libertad de Gravamen');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
             $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8Minuta','Minuta');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8PlanoNomenclatura','Plano Nomenclatura');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8FactibilidadJapac','Factibilidad de Japac');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8FactibilidadCFE','Factibilidad de CFE');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8EstudiosHidrologico','Estudios de Hidrologico');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8Alumbrado','Alumbrado');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8ProteccionCivil','Proteccion Civil');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==8){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p8Vialidad','Vialidad');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==10){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p10Autorizacion','Autorizacion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==2){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p3Expediente','Expediente');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==7){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p7PlanoLotificacionVialidad','Plano Lotificacion y Vialidad');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'P11MemoriaFraccionamiento','Memoria Fraccionamiento');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11EstudioMecanicaEstructura','Estudio de Mecanica Estructural');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11MemoriaAguaAlcantarillado','Memoria Agua Alcantarillado');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11MemoriaElectrificacion','Memoria de Electrificacion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11MemoriaInfraestructura','Memoria de Infraestructura');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11MemoriaHidrologico','Memoria de Hidrologica');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11Presupuesto','Presupuesto');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11EstimarPlazo','Estimar Plazo');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11PagoSupervision','Pago Supervision');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11GarantiaCumplimiento','Garantia de Cumplimiento');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11OtorgarEscrituras','Otorgar Escrituras');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11PlanoLocalizacion','Plano de Lozalizacion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11PlanoTopografico','Plano Topografico');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11PlanoLotificacion','Plano de Lotificacion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11PlanoTrazo','Plano de Trazo');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11PlanoPerfiles','Plano de Perfiles');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11PlanoAguaPotable','Plano de Agua Potable');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11PlanoElectrificacion','Plano de Electrificacion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11PlanoAlumbrado','Plano de Alumbrado');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11PlanoArborizacion','Plano Arborizacion');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11ResolucionImpactoAmbiental','Resolucion de Impacto Ambiental');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
        if($pasoIndex==11){
            $error=$this->salvarArchivos($transaction,$model,$encabezado,'p11ProyectoVialTransporte','Proyecto vial y Transporte');
            if($error!="OK")
                return $this->cancelarSalvar($transaction,$error);
        }
                 
                
        if ($model->load(Yii::$app->request->post()) ) { 
            if($pasoIndex==12)
                $model->estatusId=2;
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
     * Creates a new TramitesAutorizacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesAutorizacion();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesAutorizacion model.
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
     * Deletes an existing TramitesAutorizacion model.
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
     * Finds the TramitesAutorizacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesAutorizacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesAutorizacion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
