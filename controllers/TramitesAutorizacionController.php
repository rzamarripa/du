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
use yii\filters\AccessControl; 
use yii\web\UploadedFile;

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

    /**
     * Lists all TramitesAutorizacion models.
     * @return mixed
     */
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


                 
    public function actionSalvar() { 
        
        $id=Yii::$app->request->post()['TramitesAutorizacion']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesAutorizacion::findOne($id)) === null)  
            $model = new TramitesAutorizacion(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        $model->estatusId=1;
        $model->observaciones="";


        $model->__salvando = 1;  
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==2){
            try {
                $var_p2Constancia = UploadedFile::getInstance($model, 'p2Constancia');
                if(!empty($var_p2Constancia )){
                    $ext = end((explode(".", $var_p2Constancia->name)));
                    $model->p2Constancia = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Constancia;
                    $var_p2Constancia->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5TituloPropiedad = UploadedFile::getInstance($model, 'p5TituloPropiedad');
                if(!empty($var_p5TituloPropiedad )){
                    $ext = end((explode(".", $var_p5TituloPropiedad->name)));
                    $model->p5TituloPropiedad = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5TituloPropiedad;
                    $var_p5TituloPropiedad->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5PlanoLocalizacion = UploadedFile::getInstance($model, 'p5PlanoLocalizacion');
                if(!empty($var_p5PlanoLocalizacion )){
                    $ext = end((explode(".", $var_p5PlanoLocalizacion->name)));
                    $model->p5PlanoLocalizacion = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5PlanoLocalizacion;
                    $var_p5PlanoLocalizacion->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5PlanoTopogra = UploadedFile::getInstance($model, 'p5PlanoTopogra');
                if(!empty($var_p5PlanoTopogra )){
                    $ext = end((explode(".", $var_p5PlanoTopogra->name)));
                    $model->p5PlanoTopogra = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5PlanoTopogra;
                    $var_p5PlanoTopogra->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5PlanoLotificacionVialidad = UploadedFile::getInstance($model, 'p5PlanoLotificacionVialidad');
                if(!empty($var_p5PlanoLotificacionVialidad )){
                    $ext = end((explode(".", $var_p5PlanoLotificacionVialidad->name)));
                    $model->p5PlanoLotificacionVialidad = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5PlanoLotificacionVialidad;
                    $var_p5PlanoLotificacionVialidad->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==7){
            try {
                $var_p7Aprobacion = UploadedFile::getInstance($model, 'p7Aprobacion');
                if(!empty($var_p7Aprobacion )){
                    $ext = end((explode(".", $var_p7Aprobacion->name)));
                    $model->p7Aprobacion = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p7Aprobacion;
                    $var_p7Aprobacion->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8Solicitud = UploadedFile::getInstance($model, 'p8Solicitud');
                if(!empty($var_p8Solicitud )){
                    $ext = end((explode(".", $var_p8Solicitud->name)));
                    $model->p8Solicitud = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8Solicitud;
                    $var_p8Solicitud->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8AcrediteCaracter = UploadedFile::getInstance($model, 'p8AcrediteCaracter');
                if(!empty($var_p8AcrediteCaracter )){
                    $ext = end((explode(".", $var_p8AcrediteCaracter->name)));
                    $model->p8AcrediteCaracter = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8AcrediteCaracter;
                    $var_p8AcrediteCaracter->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8ActaConstitutiva = UploadedFile::getInstance($model, 'p8ActaConstitutiva');
                if(!empty($var_p8ActaConstitutiva )){
                    $ext = end((explode(".", $var_p8ActaConstitutiva->name)));
                    $model->p8ActaConstitutiva = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8ActaConstitutiva;
                    $var_p8ActaConstitutiva->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8LibertadGravamen = UploadedFile::getInstance($model, 'p8LibertadGravamen');
                if(!empty($var_p8LibertadGravamen )){
                    $ext = end((explode(".", $var_p8LibertadGravamen->name)));
                    $model->p8LibertadGravamen = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8LibertadGravamen;
                    $var_p8LibertadGravamen->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8Minuta = UploadedFile::getInstance($model, 'p8Minuta');
                if(!empty($var_p8Minuta )){
                    $ext = end((explode(".", $var_p8Minuta->name)));
                    $model->p8Minuta = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8Minuta;
                    $var_p8Minuta->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8PlanoNomenclatura = UploadedFile::getInstance($model, 'p8PlanoNomenclatura');
                if(!empty($var_p8PlanoNomenclatura )){
                    $ext = end((explode(".", $var_p8PlanoNomenclatura->name)));
                    $model->p8PlanoNomenclatura = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8PlanoNomenclatura;
                    $var_p8PlanoNomenclatura->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8FactibilidadJapac = UploadedFile::getInstance($model, 'p8FactibilidadJapac');
                if(!empty($var_p8FactibilidadJapac )){
                    $ext = end((explode(".", $var_p8FactibilidadJapac->name)));
                    $model->p8FactibilidadJapac = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8FactibilidadJapac;
                    $var_p8FactibilidadJapac->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8FactibilidadCFE = UploadedFile::getInstance($model, 'p8FactibilidadCFE');
                if(!empty($var_p8FactibilidadCFE )){
                    $ext = end((explode(".", $var_p8FactibilidadCFE->name)));
                    $model->p8FactibilidadCFE = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8FactibilidadCFE;
                    $var_p8FactibilidadCFE->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8EstudiosHidrologico = UploadedFile::getInstance($model, 'p8EstudiosHidrologico');
                if(!empty($var_p8EstudiosHidrologico )){
                    $ext = end((explode(".", $var_p8EstudiosHidrologico->name)));
                    $model->p8EstudiosHidrologico = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8EstudiosHidrologico;
                    $var_p8EstudiosHidrologico->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8Alumbrado = UploadedFile::getInstance($model, 'p8Alumbrado');
                if(!empty($var_p8Alumbrado )){
                    $ext = end((explode(".", $var_p8Alumbrado->name)));
                    $model->p8Alumbrado = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8Alumbrado;
                    $var_p8Alumbrado->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8ProteccionCivil = UploadedFile::getInstance($model, 'p8ProteccionCivil');
                if(!empty($var_p8ProteccionCivil )){
                    $ext = end((explode(".", $var_p8ProteccionCivil->name)));
                    $model->p8ProteccionCivil = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8ProteccionCivil;
                    $var_p8ProteccionCivil->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8Vialidad = UploadedFile::getInstance($model, 'p8Vialidad');
                if(!empty($var_p8Vialidad )){
                    $ext = end((explode(".", $var_p8Vialidad->name)));
                    $model->p8Vialidad = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p8Vialidad;
                    $var_p8Vialidad->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==10){
            try {
                $var_p10Autorizacion = UploadedFile::getInstance($model, 'p10Autorizacion');
                if(!empty($var_p10Autorizacion )){
                    $ext = end((explode(".", $var_p10Autorizacion->name)));
                    $model->p10Autorizacion = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p10Autorizacion;
                    $var_p10Autorizacion->saveAs($path);
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
