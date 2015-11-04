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
        if($pasoIndex==5){
            try {
                $var_p5CertificadoCabildo = UploadedFile::getInstance($model, 'p5CertificadoCabildo');
                if(!empty($var_p5CertificadoCabildo )){
                    $ext = end((explode(".", $var_p5CertificadoCabildo->name)));
                    $model->p5CertificadoCabildo = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5CertificadoCabildo;
                    $var_p5CertificadoCabildo->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
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
        if($pasoIndex==5){
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
        if($pasoIndex==5){
            try {
                $var_p5ActaRecepcion = UploadedFile::getInstance($model, 'p5ActaRecepcion');
                if(!empty($var_p5ActaRecepcion )){
                    $ext = end((explode(".", $var_p5ActaRecepcion->name)));
                    $model->p5ActaRecepcion = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5ActaRecepcion;
                    $var_p5ActaRecepcion->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5MemoriaTecno = UploadedFile::getInstance($model, 'p5MemoriaTecno');
                if(!empty($var_p5MemoriaTecno )){
                    $ext = end((explode(".", $var_p5MemoriaTecno->name)));
                    $model->p5MemoriaTecno = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5MemoriaTecno;
                    $var_p5MemoriaTecno->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5PlanoAgua = UploadedFile::getInstance($model, 'p5PlanoAgua');
                if(!empty($var_p5PlanoAgua )){
                    $ext = end((explode(".", $var_p5PlanoAgua->name)));
                    $model->p5PlanoAgua = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5PlanoAgua;
                    $var_p5PlanoAgua->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5PlanoAlcantarillado = UploadedFile::getInstance($model, 'p5PlanoAlcantarillado');
                if(!empty($var_p5PlanoAlcantarillado )){
                    $ext = end((explode(".", $var_p5PlanoAlcantarillado->name)));
                    $model->p5PlanoAlcantarillado = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5PlanoAlcantarillado;
                    $var_p5PlanoAlcantarillado->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
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
        if($pasoIndex==5){
            try {
                $var_p5ActaRecepcionCfe = UploadedFile::getInstance($model, 'p5ActaRecepcionCfe');
                if(!empty($var_p5ActaRecepcionCfe )){
                    $ext = end((explode(".", $var_p5ActaRecepcionCfe->name)));
                    $model->p5ActaRecepcionCfe = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5ActaRecepcionCfe;
                    $var_p5ActaRecepcionCfe->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5CartaCompromiso = UploadedFile::getInstance($model, 'p5CartaCompromiso');
                if(!empty($var_p5CartaCompromiso )){
                    $ext = end((explode(".", $var_p5CartaCompromiso->name)));
                    $model->p5CartaCompromiso = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5CartaCompromiso;
                    $var_p5CartaCompromiso->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5MemoriaTecnoCfe = UploadedFile::getInstance($model, 'p5MemoriaTecnoCfe');
                if(!empty($var_p5MemoriaTecnoCfe )){
                    $ext = end((explode(".", $var_p5MemoriaTecnoCfe->name)));
                    $model->p5MemoriaTecnoCfe = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5MemoriaTecnoCfe;
                    $var_p5MemoriaTecnoCfe->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5PlanoCfe = UploadedFile::getInstance($model, 'p5PlanoCfe');
                if(!empty($var_p5PlanoCfe )){
                    $ext = end((explode(".", $var_p5PlanoCfe->name)));
                    $model->p5PlanoCfe = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5PlanoCfe;
                    $var_p5PlanoCfe->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
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
        if($pasoIndex==5){
            try {
                $var_p5OficioRecepcion = UploadedFile::getInstance($model, 'p5OficioRecepcion');
                if(!empty($var_p5OficioRecepcion )){
                    $ext = end((explode(".", $var_p5OficioRecepcion->name)));
                    $model->p5OficioRecepcion = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5OficioRecepcion;
                    $var_p5OficioRecepcion->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5MemoriaTecnoAlumbrado = UploadedFile::getInstance($model, 'p5MemoriaTecnoAlumbrado');
                if(!empty($var_p5MemoriaTecnoAlumbrado )){
                    $ext = end((explode(".", $var_p5MemoriaTecnoAlumbrado->name)));
                    $model->p5MemoriaTecnoAlumbrado = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5MemoriaTecnoAlumbrado;
                    $var_p5MemoriaTecnoAlumbrado->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5PlanoAlumbrado = UploadedFile::getInstance($model, 'p5PlanoAlumbrado');
                if(!empty($var_p5PlanoAlumbrado )){
                    $ext = end((explode(".", $var_p5PlanoAlumbrado->name)));
                    $model->p5PlanoAlumbrado = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5PlanoAlumbrado;
                    $var_p5PlanoAlumbrado->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
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
        if($pasoIndex==5){
            try {
                $var_p5ActaTecnica = UploadedFile::getInstance($model, 'p5ActaTecnica');
                if(!empty($var_p5ActaTecnica )){
                    $ext = end((explode(".", $var_p5ActaTecnica->name)));
                    $model->p5ActaTecnica = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5ActaTecnica;
                    $var_p5ActaTecnica->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5MemoriaTecnoCivil = UploadedFile::getInstance($model, 'p5MemoriaTecnoCivil');
                if(!empty($var_p5MemoriaTecnoCivil )){
                    $ext = end((explode(".", $var_p5MemoriaTecnoCivil->name)));
                    $model->p5MemoriaTecnoCivil = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5MemoriaTecnoCivil;
                    $var_p5MemoriaTecnoCivil->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
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
        if($pasoIndex==5){
            try {
                $var_p5Donaciones = UploadedFile::getInstance($model, 'p5Donaciones');
                if(!empty($var_p5Donaciones )){
                    $ext = end((explode(".", $var_p5Donaciones->name)));
                    $model->p5Donaciones = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5Donaciones;
                    $var_p5Donaciones->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5EscriturasPublica = UploadedFile::getInstance($model, 'p5EscriturasPublica');
                if(!empty($var_p5EscriturasPublica )){
                    $ext = end((explode(".", $var_p5EscriturasPublica->name)));
                    $model->p5EscriturasPublica = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5EscriturasPublica;
                    $var_p5EscriturasPublica->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
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
        if($pasoIndex==7){
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
