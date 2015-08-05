<?php

namespace app\controllers;
use Yii;
use app\models\Proyectos;
use app\models\ProyectosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class ProyectosController extends Controller
{
    public function actionIndex()
    {
    	$model = new Proyectos();
    	$model->estatus_did = 1;
    	$model->fecha_ft =date('Y-m-d H:i:s');
    	$proyectos = Proyectos::find()->all();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('index',['proyectos'=>$proyectos,'model'=>$model]);
        }
    }

    public function actionCambiar(){

    	$model = Proyectos::find()->where('id=:id', ['id'=>$_GET["id"]])->one();
    	
		$model->estatus_did = $_GET['estatus'];
		if($model->save()){
			return $this->redirect('index');
		}
    }

    public function actionUpdate($id){
        $model = Proyectos::find()->where('id= :id', ['id'=>$id])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }
}