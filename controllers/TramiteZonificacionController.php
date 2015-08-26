<?php

namespace app\controllers;

use Yii;
use app\models\TramiteZonificacion;
use app\models\TramiteZonificacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\USUARIOS;
use yii\filters\AccessControl; 
use yii\web\UploadedFile;
/**
 * TramiteZonificacionController implements the CRUD actions for TramiteZonificacion model.
 */
class TramiteZonificacionController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramiteZonificacion();
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
                        'actions' => ['index','view'],
                        'allow' =>$permisos[USUARIOS::$LEER],
                        
                    ],
                    [
                        'actions' => ['salvar','create'],
                        'allow' => $permisos[USUARIOS::$CREAR],
                        
                    ],
                    [
                        'actions' => ['update'],
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
     * Lists all TramiteZonificacion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TramiteZonificacionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TramiteZonificacion model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


                 
    public function actionSalvar() { 
               
        $id=Yii::$app->request->post()['TramiteZonificacion']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramiteZonificacion::findOne($id)) === null)  
            $model = new TramiteZonificacion(); 
        $model->__salvando = 1;  
         
        \Yii::$app->response->format = 'json'; 
         
         if($pasoIndex==2){
            try {
                $escrituras = UploadedFile::getInstance($model, 'p2Escrituras');
                $ext = end((explode(".", $escrituras->name)));
                $model->p2Escrituras = Yii::$app->security->generateRandomString().".pdf";
                $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Escrituras;
                $escrituras->saveAs($path);

                $reciboDerechos = UploadedFile::getInstance($model, 'p2ReciboDerechos');
                $ext = end((explode(".", $reciboDerechos->name)));
                $model->p2ReciboDerechos = Yii::$app->security->generateRandomString().".pdf";
                $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ReciboDerechos;
                $reciboDerechos->saveAs($path);
             
                $croquisUbicacion = UploadedFile::getInstance($model, 'p2CroquisUbicacion');
                $ext = end((explode(".", $croquisUbicacion->name)));
                $model->p2CroquisUbicacion = Yii::$app->security->generateRandomString().".pdf";
                $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2CroquisUbicacion;
                $croquisUbicacion->saveAs($path);

                $pago = UploadedFile::getInstance($model, 'p2Pago');
                $ext = end((explode(".", $pago->name)));
                $model->p2Pago = Yii::$app->security->generateRandomString().".pdf";
                $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Pago;
                $pago->saveAs($path);

            } catch (Exception $e) {
                
            }

         }        
                 
                
        if ($model->load(Yii::$app->request->post()) ) { 
                    
            if($model->salvarPaso($pasoIndex)) { 
                $model->__salvando = 0;  
                return $model; 
            } 
        } 
         
        return null; 
    } 


    /**
     * Creates a new TramiteZonificacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramiteZonificacion();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramiteZonificacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TramiteZonificacion model.
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
     * Finds the TramiteZonificacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramiteZonificacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramiteZonificacion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}