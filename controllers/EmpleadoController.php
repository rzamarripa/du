<?php

namespace app\controllers;
use Yii;
use app\models\Empleados;
use app\models\EmpleadosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class EmpleadoController extends Controller
{
    public function actionIndex()
    {
    	$model = new Empleados();
    	$model->estatus_did = 1;
    	$model->fechaCreacion =date('d-m-Y H:i:s');
    	$empleados = Empleados::find()->all();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('index',['empleados'=>$empleados,'model'=>$model]);
        }
    }

    public function actionCambiar(){

    	$model = Empleados::find()->where('id=:id', ['id'=>$_GET["id"]])->one();
    	
		$model->estatus_did = $_GET['estatus'];
		if($model->save()){
			return $this->redirect('index');
		}
    }

    public function actionUpdate($id){
        $model = Empleados::find()->where('id= :id', ['id'=>$id])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }
}