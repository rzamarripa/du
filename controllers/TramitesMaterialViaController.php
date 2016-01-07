<?php

namespace app\controllers;

use Yii;
use app\models\TramitesMaterialVia;
use app\models\TramitesMaterialViaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\USUARIOS;
use app\models\PasosTramite;
use yii\filters\AccessControl; 
use yii\web\UploadedFile;

/**
 * TramitesMaterialViaController implements the CRUD actions for TramitesMaterialVia model.
 */
class TramitesMaterialViaController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesMaterialVia();
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
     * Lists all TramitesMaterialVia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $tramites = TramitesMaterialVia::find()->where(['tipoTramiteid' => '3011'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesMaterialVia model.
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
        
        $id=Yii::$app->request->post()['TramitesMaterialVia']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesMaterialVia::findOne($id)) === null)  
            $model = new TramitesMaterialVia(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        $model->estatusId=1;
        $model->observaciones="";


        $model->__salvando = 1;  
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==5){
            try {
                $var_p5MaterialVialPublica = UploadedFile::getInstance($model, 'p5MaterialVialPublica');
                if(!empty($var_p5MaterialVialPublica )){
                    $ext = end((explode(".", $var_p5MaterialVialPublica->name)));
                    $model->p5MaterialVialPublica = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5MaterialVialPublica;
                    $var_p5MaterialVialPublica->saveAs($path);
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
                 
                
        if ($model->load(Yii::$app->request->post()) ) { 
                    
            if($datos=$model->salvarPaso($pasoIndex)) { 
                $model->__salvando = 0;  
                return $datos; 
            } 
        } 
         
        return null; 
    } 


    /**
     * Creates a new TramitesMaterialVia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesMaterialVia();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesMaterialVia model.
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
     * Deletes an existing TramitesMaterialVia model.
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
     * Finds the TramitesMaterialVia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesMaterialVia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesMaterialVia::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
