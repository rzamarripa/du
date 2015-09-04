<?php

namespace app\controllers;
use Yii;
use app\models\Lugares;
use app\models\LugaresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class LugaresController extends Controller
{
    public function actionIndex()
    {
    	$model = new Lugares();
  
   
    	$Lugares = Lugares::find()->all();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('index',['Lugares'=>$Lugares,'model'=>$model]);
        }
    }

    public function actionCambiar(){

    	$model = Lugares::find()->where('id=:id', ['id'=>$_GET["id"]])->one();
    	
		$model->estatus_did = $_GET['estatus'];
		if($model->save()){
			return $this->redirect('index');
		}
    }

    public function actionUpdate($id){
        $model = Lugares::find()->where('id= :id', ['id'=>$id])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }
}