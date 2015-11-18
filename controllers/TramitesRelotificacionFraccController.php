<?php

namespace app\controllers;

use Yii;
use app\models\TramitesRelotificacionFracc;
use app\models\TramitesRelotificacionFraccSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\USUARIOS;
use app\models\PasosTramite;
use yii\filters\AccessControl; 
use yii\web\UploadedFile;

/**
 * TramitesRelotificacionFraccController implements the CRUD actions for TramitesRelotificacionFracc model.
 */
class TramitesRelotificacionFraccController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesRelotificacionFracc();
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
     * Lists all TramitesRelotificacionFracc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $tramites = TramitesRelotificacionFracc::find()->where(['tipoTramiteid' => '2010'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesRelotificacionFracc model.
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
        
        $id=Yii::$app->request->post()['TramitesRelotificacionFracc']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesRelotificacionFracc::findOne($id)) === null)  
            $model = new TramitesRelotificacionFracc(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        $model->estatusId=1;
        $model->observaciones="";


        $model->__salvando = 1;  
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==2){
            try {
                $var_p2CertificacionCabildo = UploadedFile::getInstance($model, 'p2CertificacionCabildo');
                if(!empty($var_p2CertificacionCabildo )){
                    $ext = end((explode(".", $var_p2CertificacionCabildo->name)));
                    $model->p2CertificacionCabildo = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2CertificacionCabildo;
                    $var_p2CertificacionCabildo->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2PlanoAprobado = UploadedFile::getInstance($model, 'p2PlanoAprobado');
                if(!empty($var_p2PlanoAprobado )){
                    $ext = end((explode(".", $var_p2PlanoAprobado->name)));
                    $model->p2PlanoAprobado = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2PlanoAprobado;
                    $var_p2PlanoAprobado->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2PlanoPropuesta = UploadedFile::getInstance($model, 'p2PlanoPropuesta');
                if(!empty($var_p2PlanoPropuesta )){
                    $ext = end((explode(".", $var_p2PlanoPropuesta->name)));
                    $model->p2PlanoPropuesta = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2PlanoPropuesta;
                    $var_p2PlanoPropuesta->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Pago = UploadedFile::getInstance($model, 'p2Pago');
                if(!empty($var_p2Pago )){
                    $ext = end((explode(".", $var_p2Pago->name)));
                    $model->p2Pago = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Pago;
                    $var_p2Pago->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5Constancia = UploadedFile::getInstance($model, 'p5Constancia');
                if(!empty($var_p5Constancia )){
                    $ext = end((explode(".", $var_p5Constancia->name)));
                    $model->p5Constancia = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5Constancia;
                    $var_p5Constancia->saveAs($path);
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
     * Creates a new TramitesRelotificacionFracc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesRelotificacionFracc();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesRelotificacionFracc model.
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
     * Deletes an existing TramitesRelotificacionFracc model.
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
     * Finds the TramitesRelotificacionFracc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesRelotificacionFracc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesRelotificacionFracc::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
