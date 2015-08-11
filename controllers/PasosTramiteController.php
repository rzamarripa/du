<?php

namespace app\controllers;
use Yii;
use app\models\PasosTramite;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class PasostramiteController extends Controller
{
    public function actionIndex(){
        
    	$model = new PasosTramite();
    	$pasostramite = PasosTramite::find()->all();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('index',['pasostramite'=>$pasostramite,'model'=>$model]);
        }
	}

    public function actionUpdate($id){

    	$model = PasosTramite::find()->where('id = :id',['id'=>$id])->one();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }
}