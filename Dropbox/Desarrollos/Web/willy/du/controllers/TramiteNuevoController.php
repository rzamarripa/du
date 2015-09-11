<?php

namespace app\controllers;


use Yii;
use app\models\TramiteNuevo;
use app\models\search\TramiteLicConstruccionSearch;
use app\models\USUARIOS;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * TramiteNuevoController implements the CRUD actions for TramiteNuevo model.
 */
class TramiteNuevoController extends Controller
{
    private $__tipoTramite=1;

    public function behaviors()
    {
        $permisos = USUARIOS::permisosTramite($this->__tipoTramite);
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
     * Lists all TramiteNuevo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TramiteNuevoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TramiteNuevo model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TramiteNuevo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionSalvar()
    {
        
         $id=Yii::$app->request->post()['TramiteNuevo']['id'];
         $pasoIndex = Yii::$app->request->post()['paso'];
         if (($model = TramiteNuevo::findOne($id)) === null) 
            $model = new TramiteNuevo();
        $model->__salvando = 1; 

         \Yii::$app->response->format = 'json';
         
         
        
        if ($model->load(Yii::$app->request->post()) ) {
            
            if($model->salvarPaso($pasoIndex))
            {
                $model->__salvando = 0; 

                return $model;
            }
        }

        return null;
    }

    public function actionCreate()
    {
        $model = new TramiteNuevo();

        return $this->render('create', [
            'model' => $model,]);
    }

    /**
     * Updates an existing TramiteNuevo model.
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
     * Deletes an existing TramiteNuevo model.
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
     * Finds the TramiteNuevo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramiteNuevo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramiteNuevo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
