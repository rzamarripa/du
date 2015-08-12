<?php

namespace app\controllers;
use Yii;
use app\models\PasosTramite;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class PasostramiteController extends Controller
{
    public function actionIndex($id){
	    $model = new PasosTramite();
    	if ($model->load(Yii::$app->request->post())) {
    	$model->tipoTramiteId = $id;
    	if($model->save()){
	    	$model = new PasosTramite();
			$pasostramite = PasosTramite::find()->where('tipoTramiteId = :id',['id'=>$id])->all();
	        return $this->render('index',['pasostramite'=>$pasostramite, 'model'=>$model, 'id' => $id]);
    	}
        } else {
			$pasostramite = PasosTramite::find()->where('tipoTramiteId = :id',['id'=>$id])->all();
            return $this->render('index',['pasostramite'=>$pasostramite,'model'=>$model]);
        }
	}

    public function actionUpdate($id){

    	$model = PasosTramite::find()->where('id = :id',['id'=>$id])->one();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
	    	$model = new PasosTramite();
			$pasostramite = PasosTramite::find()->all();
	        return $this->render('index',['pasostramite'=>$pasostramite, 'model'=>$model, 'id' => $id]);
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }
}