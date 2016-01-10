<?php

namespace app\controllers;
use Yii;
use app\models\InformacionDocumentos;
use app\models\InformacionDocumentosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;


class InformacionDocumentosController extends Controller
{
    public function actionIndex()
    {
    	$model = new InformacionDocumentos();
    	$model->estatus_did = 1;
    	$model->fechaCreacion =date('d-m-Y H:i:s');
    	$informacionDocumentos = InformacionDocumentos::find()->all();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('index',['informacionDocumentos'=>$informacionDocumentos,'model'=>$model]);
        }
    }

    public function actionCambiar(){

    	$model = InformacionDocumentos::find()->where('id=:id', ['id'=>$_GET["id"]])->one();
    	
			$model->estatus_did = $_GET['estatus'];
			if($model->save()){
				return $this->redirect('index');
			}
    }

    public function actionUpdate($id){
        $model = InformacionDocumentos::find()->where('id= :id', ['id'=>$id])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }
    public function actionCreate()
    {
        $model = new InformacionDocumentos();
        if(Yii::$app->request->post()) {
						$model->attributes=Yii::$app->request->post();
						//echo '<pre>'; print_r(Yii::$app->request->post());echo '</pre>'; exit;
            if($model->save()){
            	return $this->redirect('index');
            	}else {
			            return $this->render('create', [
			                'model' => $model,
			            ]);
			        }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    public function actionView($id)
    {

       $model = $this->findModel($id);

        return $this->render('view', [
            'model' => $model 
            ]);
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
        if (($model = InformacionDocumentos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

     public function actionImprimir($id) {
    // get your HTML raw content without any layouts or scrip
        $model = $this->findModel($id);
        $content=$this->renderPartial('_imprimir',['model'=>$model]); 
        $header=$this->renderPartial('_header', ['model'=>$model]);
        $pdf = new Pdf([
        // set to use core fonts only
  

        // A4 paper format
        'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Krajee Report Title'],
         // call mPDF methods on the fly
        'methods' => [
            'SetHeader'=>$header, 
            'SetFooter'=>['{PAGENO}'],
        ]
    ]);

    // return the pdf output as per the destination setting
    return $pdf->render(); 
}
}