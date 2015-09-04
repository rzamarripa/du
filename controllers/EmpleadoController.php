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


    /**
     * Deletes an existing Empleado model.
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
     * Finds the Empleado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Empleado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Empleado::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

     public function actionImprimir() {
    // get your HTML raw content without any layouts or scrip
        $empleado = Empleado::find()->all();
        $pdf = Yii::$app->pdf;
        $pdf->content = $this->renderPartial('_imprimir',['empleado'=>$empleado]);
        return $pdf->render();
    }
}

