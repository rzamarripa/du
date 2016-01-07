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
use yii\filters\AccessControl; 
use yii\web\UploadedFile;

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
     * Lists all TramitesRecepcion models.
     * @return mixed
     */
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


                 
    public function actionSalvar() { 
        
        $id=Yii::$app->request->post()['TramitesRecepcion']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesRecepcion::findOne($id)) === null)  
            $model = new TramitesRecepcion(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        $model->estatusId=1;
        $model->observaciones="";


        $model->__salvando = 1;  
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==3){
            try {
                $var_p5SolicitudPresidenteMuni = UploadedFile::getInstance($model, 'p5SolicitudPresidenteMuni');
                if(!empty($var_p5SolicitudPresidenteMuni )){
                    $ext = end((explode(".", $var_p5SolicitudPresidenteMuni->name)));
                    $model->p5SolicitudPresidenteMuni = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5SolicitudPresidenteMuni;
                    $var_p5SolicitudPresidenteMuni->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3CertificadoCabildo = UploadedFile::getInstance($model, 'p3CertificadoCabildo');
                if(!empty($var_p3CertificadoCabildo )){
                    $ext = end((explode(".", $var_p3CertificadoCabildo->name)));
                    $model->p3CertificadoCabildo = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3CertificadoCabildo;
                    $var_p3CertificadoCabildo->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5PlanoLotificacion = UploadedFile::getInstance($model, 'p5PlanoLotificacion');
                if(!empty($var_p5PlanoLotificacion )){
                    $ext = end((explode(".", $var_p5PlanoLotificacion->name)));
                    $model->p5PlanoLotificacion = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5PlanoLotificacion;
                    $var_p5PlanoLotificacion->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5RecepcionJapac = UploadedFile::getInstance($model, 'p5RecepcionJapac');
                if(!empty($var_p5RecepcionJapac )){
                    $ext = end((explode(".", $var_p5RecepcionJapac->name)));
                    $model->p5RecepcionJapac = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5RecepcionJapac;
                    $var_p5RecepcionJapac->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3ActaRecepcion = UploadedFile::getInstance($model, 'p3ActaRecepcion');
                if(!empty($var_p3ActaRecepcion )){
                    $ext = end((explode(".", $var_p3ActaRecepcion->name)));
                    $model->p3ActaRecepcion = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3ActaRecepcion;
                    $var_p3ActaRecepcion->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3MemoriaTecno = UploadedFile::getInstance($model, 'p3MemoriaTecno');
                if(!empty($var_p3MemoriaTecno )){
                    $ext = end((explode(".", $var_p3MemoriaTecno->name)));
                    $model->p3MemoriaTecno = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3MemoriaTecno;
                    $var_p3MemoriaTecno->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3PlanoAgua = UploadedFile::getInstance($model, 'p3PlanoAgua');
                if(!empty($var_p3PlanoAgua )){
                    $ext = end((explode(".", $var_p3PlanoAgua->name)));
                    $model->p3PlanoAgua = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3PlanoAgua;
                    $var_p3PlanoAgua->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3PlanoAlcantarillado = UploadedFile::getInstance($model, 'p3PlanoAlcantarillado');
                if(!empty($var_p3PlanoAlcantarillado )){
                    $ext = end((explode(".", $var_p3PlanoAlcantarillado->name)));
                    $model->p3PlanoAlcantarillado = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3PlanoAlcantarillado;
                    $var_p3PlanoAlcantarillado->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5RecepcionCfe = UploadedFile::getInstance($model, 'p5RecepcionCfe');
                if(!empty($var_p5RecepcionCfe )){
                    $ext = end((explode(".", $var_p5RecepcionCfe->name)));
                    $model->p5RecepcionCfe = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5RecepcionCfe;
                    $var_p5RecepcionCfe->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3ActaRecepcionCfe = UploadedFile::getInstance($model, 'p3ActaRecepcionCfe');
                if(!empty($var_p3ActaRecepcionCfe )){
                    $ext = end((explode(".", $var_p3ActaRecepcionCfe->name)));
                    $model->p3ActaRecepcionCfe = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3ActaRecepcionCfe;
                    $var_p3ActaRecepcionCfe->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3CartaCompromiso = UploadedFile::getInstance($model, 'p3CartaCompromiso');
                if(!empty($var_p3CartaCompromiso )){
                    $ext = end((explode(".", $var_p3CartaCompromiso->name)));
                    $model->p3CartaCompromiso = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3CartaCompromiso;
                    $var_p3CartaCompromiso->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3MemoriaTecnoCfe = UploadedFile::getInstance($model, 'p3MemoriaTecnoCfe');
                if(!empty($var_p3MemoriaTecnoCfe )){
                    $ext = end((explode(".", $var_p3MemoriaTecnoCfe->name)));
                    $model->p3MemoriaTecnoCfe = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3MemoriaTecnoCfe;
                    $var_p3MemoriaTecnoCfe->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3PlanoCfe = UploadedFile::getInstance($model, 'p3PlanoCfe');
                if(!empty($var_p3PlanoCfe )){
                    $ext = end((explode(".", $var_p3PlanoCfe->name)));
                    $model->p3PlanoCfe = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3PlanoCfe;
                    $var_p3PlanoCfe->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5RecepcionAlumbrado = UploadedFile::getInstance($model, 'p5RecepcionAlumbrado');
                if(!empty($var_p5RecepcionAlumbrado )){
                    $ext = end((explode(".", $var_p5RecepcionAlumbrado->name)));
                    $model->p5RecepcionAlumbrado = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5RecepcionAlumbrado;
                    $var_p5RecepcionAlumbrado->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3OficioRecepcion = UploadedFile::getInstance($model, 'p3OficioRecepcion');
                if(!empty($var_p3OficioRecepcion )){
                    $ext = end((explode(".", $var_p3OficioRecepcion->name)));
                    $model->p3OficioRecepcion = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3OficioRecepcion;
                    $var_p3OficioRecepcion->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3MemoriaTecnoAlumbrado = UploadedFile::getInstance($model, 'p3MemoriaTecnoAlumbrado');
                if(!empty($var_p3MemoriaTecnoAlumbrado )){
                    $ext = end((explode(".", $var_p3MemoriaTecnoAlumbrado->name)));
                    $model->p3MemoriaTecnoAlumbrado = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3MemoriaTecnoAlumbrado;
                    $var_p3MemoriaTecnoAlumbrado->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3PlanoAlumbrado = UploadedFile::getInstance($model, 'p3PlanoAlumbrado');
                if(!empty($var_p3PlanoAlumbrado )){
                    $ext = end((explode(".", $var_p3PlanoAlumbrado->name)));
                    $model->p3PlanoAlumbrado = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3PlanoAlumbrado;
                    $var_p3PlanoAlumbrado->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5RecepcionCivil = UploadedFile::getInstance($model, 'p5RecepcionCivil');
                if(!empty($var_p5RecepcionCivil )){
                    $ext = end((explode(".", $var_p5RecepcionCivil->name)));
                    $model->p5RecepcionCivil = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5RecepcionCivil;
                    $var_p5RecepcionCivil->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3ActaTecnica = UploadedFile::getInstance($model, 'p3ActaTecnica');
                if(!empty($var_p3ActaTecnica )){
                    $ext = end((explode(".", $var_p3ActaTecnica->name)));
                    $model->p3ActaTecnica = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3ActaTecnica;
                    $var_p3ActaTecnica->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3MemoriaTecnoCivil = UploadedFile::getInstance($model, 'p3MemoriaTecnoCivil');
                if(!empty($var_p3MemoriaTecnoCivil )){
                    $ext = end((explode(".", $var_p3MemoriaTecnoCivil->name)));
                    $model->p3MemoriaTecnoCivil = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3MemoriaTecnoCivil;
                    $var_p3MemoriaTecnoCivil->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5PlanoObras = UploadedFile::getInstance($model, 'p5PlanoObras');
                if(!empty($var_p5PlanoObras )){
                    $ext = end((explode(".", $var_p5PlanoObras->name)));
                    $model->p5PlanoObras = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5PlanoObras;
                    $var_p5PlanoObras->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3Donaciones = UploadedFile::getInstance($model, 'p3Donaciones');
                if(!empty($var_p3Donaciones )){
                    $ext = end((explode(".", $var_p3Donaciones->name)));
                    $model->p3Donaciones = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3Donaciones;
                    $var_p3Donaciones->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3EscriturasPublica = UploadedFile::getInstance($model, 'p3EscriturasPublica');
                if(!empty($var_p3EscriturasPublica )){
                    $ext = end((explode(".", $var_p3EscriturasPublica->name)));
                    $model->p3EscriturasPublica = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3EscriturasPublica;
                    $var_p3EscriturasPublica->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5PlanoPoligono = UploadedFile::getInstance($model, 'p5PlanoPoligono');
                if(!empty($var_p5PlanoPoligono )){
                    $ext = end((explode(".", $var_p5PlanoPoligono->name)));
                    $model->p5PlanoPoligono = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5PlanoPoligono;
                    $var_p5PlanoPoligono->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p7Recepcion = UploadedFile::getInstance($model, 'p7Recepcion');
                if(!empty($var_p7Recepcion )){
                    $ext = end((explode(".", $var_p7Recepcion->name)));
                    $model->p7Recepcion = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p7Recepcion;
                    $var_p7Recepcion->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Expediente = UploadedFile::getInstance($model, 'p2Expediente');
                if(!empty($var_p2Expediente )){
                    $ext = end((explode(".", $var_p2Expediente->name)));
                    $model->p2Expediente = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Expediente;
                    $var_p2Expediente->saveAs($path);
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
