<?php

namespace app\controllers;

use Yii;
use app\models\TramiteLicConstruccion;
use app\models\search\TramiteLicConstruccionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TramiteLicConstruccionController implements the CRUD actions for TramiteLicConstruccion model.
 */
class TramiteLicConstruccionController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TramiteLicConstruccion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TramiteLicConstruccionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TramiteLicConstruccion model.
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
     * Creates a new TramiteLicConstruccion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionSalvar()
    {
         $id=Yii::$app->request->post()['TramiteLicConstruccion']['id'];
         $pasoIndex = Yii::$app->request->post()['paso'];
         

         if (($model = TramiteLicConstruccion::findOne($id)) === null) 
            $model = new TramiteLicConstruccion();

         \Yii::$app->response->format = 'json';
         
         
         
        if ($model->load(Yii::$app->request->post()) ) {
            
            if($model->salvarPaso($pasoIndex))
                return $model;
        }
        return null;
    }
    public function actionCreate()
    {
        $model = new TramiteLicConstruccion();

        if ($model->load(Yii::$app->request->post()) && $model->salvar()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TramiteLicConstruccion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->salvar()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TramiteLicConstruccion model.
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
     * Finds the TramiteLicConstruccion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramiteLicConstruccion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramiteLicConstruccion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
