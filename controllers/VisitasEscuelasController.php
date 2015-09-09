<?php

namespace app\controllers;
use Yii;
use app\models\VisitasEscuelas;
use app\models\VisitasEscuelasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class VisitasEscuelasController extends Controller
{
    public function actionIndex()
    {

       
    	$model = new VisitasEscuelas();
    	$model->estatus_did = 1;
    	$VisitasEscuelas = VisitasEscuelas::find()->all();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //echo '<pre>'; print_r($_POST); echo'</prev>';exit;
        $model= new VisitasEscuelas();
        $model->estatus_did = 1;
        $VisitasEscuelas = VisitasEscuelas::find()->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('index', ['model'=>$model,'VisitasEscuelas'=>$VisitasEscuelas]);
        }
    }
    

     public function actionCambiar(){

        $model = VisitasEscuelas::find()->where('id=:id', ['id'=>$_GET["id"]])->one();
        
       $model->estatus_did = $_GET['estatus'];
      if($model->save()){
            return $this->redirect('index');
        } else {
            $model->fecha_ft =date('Y-m-d');
            return $this->render('index',['VisitasEscuelas'=>$VisitasEscuelas,'model'=>$model]);
        }
    }

    public function actionCambiar(){

    	$model = VisitasEscuelas::find()->where('id=:id', ['id'=>$_GET["id"]])->one();
    	
		$model->estatus_did = $_GET['estatus'];
		if($model->save()){
			return $this->redirect('index');
		}
    }

    public function actionUpdate($id){
        $model = VisitasEscuelas::find()->where('id= :id', ['id'=>$id])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }
}
