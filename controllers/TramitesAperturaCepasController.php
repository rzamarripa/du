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
use yii\filters\AccessControl; 
use yii\web\UploadedFile;

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
     * Lists all TramitesAperturaCepas models.
     * @return mixed
     */
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


                 
    public function actionSalvar() { 
        
        $id=Yii::$app->request->post()['TramitesAperturaCepas']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesAperturaCepas::findOne($id)) === null)  
            $model = new TramitesAperturaCepas(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        $model->estatusId=1;
        $model->observaciones="";


        $model->__salvando = 1;  
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==1){
            try {
                $var_p1Solicitud = UploadedFile::getInstance($model, 'p1Solicitud');
                if(!empty($var_p1Solicitud )){
                    $ext = end((explode(".", $var_p1Solicitud->name)));
                    $model->p1Solicitud = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p1Solicitud;
                    $var_p1Solicitud->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1DirectorResponsable = UploadedFile::getInstance($model, 'p1DirectorResponsable');
                if(!empty($var_p1DirectorResponsable )){
                    $ext = end((explode(".", $var_p1DirectorResponsable->name)));
                    $model->p1DirectorResponsable = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p1DirectorResponsable;
                    $var_p1DirectorResponsable->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1PlanoTrayectoria = UploadedFile::getInstance($model, 'p1PlanoTrayectoria');
                if(!empty($var_p1PlanoTrayectoria )){
                    $ext = end((explode(".", $var_p1PlanoTrayectoria->name)));
                    $model->p1PlanoTrayectoria = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p1PlanoTrayectoria;
                    $var_p1PlanoTrayectoria->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1ProgramaObra = UploadedFile::getInstance($model, 'p1ProgramaObra');
                if(!empty($var_p1ProgramaObra )){
                    $ext = end((explode(".", $var_p1ProgramaObra->name)));
                    $model->p1ProgramaObra = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p1ProgramaObra;
                    $var_p1ProgramaObra->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1PresupuestoObra = UploadedFile::getInstance($model, 'p1PresupuestoObra');
                if(!empty($var_p1PresupuestoObra )){
                    $ext = end((explode(".", $var_p1PresupuestoObra->name)));
                    $model->p1PresupuestoObra = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p1PresupuestoObra;
                    $var_p1PresupuestoObra->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1AnuenciaVecinos = UploadedFile::getInstance($model, 'p1AnuenciaVecinos');
                if(!empty($var_p1AnuenciaVecinos )){
                    $ext = end((explode(".", $var_p1AnuenciaVecinos->name)));
                    $model->p1AnuenciaVecinos = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p1AnuenciaVecinos;
                    $var_p1AnuenciaVecinos->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1Fianza = UploadedFile::getInstance($model, 'p1Fianza');
                if(!empty($var_p1Fianza )){
                    $ext = end((explode(".", $var_p1Fianza->name)));
                    $model->p1Fianza = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p1Fianza;
                    $var_p1Fianza->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1Pago = UploadedFile::getInstance($model, 'p1Pago');
                if(!empty($var_p1Pago )){
                    $ext = end((explode(".", $var_p1Pago->name)));
                    $model->p1Pago = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p1Pago;
                    $var_p1Pago->saveAs($path);
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
        if($pasoIndex==3){
            try {
                $var_p3Pago = UploadedFile::getInstance($model, 'p3Pago');
                if(!empty($var_p3Pago )){
                    $ext = end((explode(".", $var_p3Pago->name)));
                    $model->p3Pago = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p3Pago;
                    $var_p3Pago->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5AperturasCepas = UploadedFile::getInstance($model, 'p5AperturasCepas');
                if(!empty($var_p5AperturasCepas )){
                    $ext = end((explode(".", $var_p5AperturasCepas->name)));
                    $model->p5AperturasCepas = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5AperturasCepas;
                    $var_p5AperturasCepas->saveAs($path);
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
