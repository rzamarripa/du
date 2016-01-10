<?php

namespace app\controllers;

use Yii;
use app\models\LicUsoSueloVictor;
use app\models\LicUsoSueloVictorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\USUARIOS;
use yii\filters\AccessControl; 

/**
 * LicUsoSueloVictorController implements the CRUD actions for LicUsoSueloVictor model.
 */
class LicUsoSueloVictorController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new LicUsoSueloVictor();
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
     * Lists all LicUsoSueloVictor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LicUsoSueloVictorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LicUsoSueloVictor model.
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
               
        $id=Yii::$app->request->post()['LicUsoSueloVictor']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = LicUsoSueloVictor::findOne($id)) === null)  
            $model = new LicUsoSueloVictor(); 
        $model->__salvando = 1;  
         
        \Yii::$app->response->format = 'json'; 
                 
                 
                
        if ($model->load(Yii::$app->request->post()) ) { 
                    
            if($model->salvarPaso($pasoIndex)) { 
                $model->__salvando = 0;  
                return $model; 
            } 
        } 
         
        return null; 
    } 


    /**
     * Creates a new LicUsoSueloVictor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LicUsoSueloVictor();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing LicUsoSueloVictor model.
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
     * Deletes an existing LicUsoSueloVictor model.
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
     * Finds the LicUsoSueloVictor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LicUsoSueloVictor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LicUsoSueloVictor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
