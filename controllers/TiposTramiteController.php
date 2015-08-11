<?php

namespace app\controllers;
use Yii;

use app\models\TiposTramite;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class TipostramiteController extends Controller
{
    public function actionIndex(){
        
    	$model = new TiposTramite();
    	$TiposTramite = TiposTramite::find()->all();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('index',['TiposTramite'=>$TiposTramite,'model'=>$model]);
        }
	}

    public function actionUpdate($id){

    	$model = TiposTramite::find()->where('id = :id',['id'=>$id])->one();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }
}