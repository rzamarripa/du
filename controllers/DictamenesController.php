<?php

namespace app\controllers;
use Yii;
use app\models\Dictamenes;
use app\models\DictamenesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;


class DictamenesController extends Controller
{
    public function actionIndex()
    {
    	$model = new Dictamenes();
        $model->estatus_did = 1;
    	$model->fechaCreacion =date('d-m-Y H:i:s');
        $boton = false;
    	$Dictamenes = Dictamenes::find()->all();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('index',['Dictamenes'=>$Dictamenes,'model'=>$model,'boton'=>$boton]);
        }
    }

    public function actionCambiar(){

    	$model = Dictamenes::find()->where('id=:id', ['id'=>$_GET["id"]])->one();
    	
		$model->estatus_did = $_GET['estatus'];
		if($model->save()){
			return $this->redirect('index');
		}
    }

    public function actionUpdate($id){
        $model = Dictamenes::find()->where('id= :id', ['id'=>$id])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }
    public function actionView($id)
    {

       $Dictamenes = Dictamenes::find()->all();

        return $this->render('view', [
            'Dictamenes' => $Dictamenes 
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
        if (($model = Dictamenes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

     public function actionImprimir() {
    // get your HTML raw content without any layouts or scrip
        $Dictamenes = Dictamenes::find()->all();
        $content=$this->renderPartial('_imprimir',['Dictamenes'=>$Dictamenes]); 
        $header=$this->renderPartial('_header', ['Dictamenes'=>$Dictamenes]);
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

public function actionFiltro()
      {  
        $model = new Dictamenes();
        $fechaInicial = date("d-m-Y", strtotime($_GET["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET["filtro"]["fechaFinal"]));
        $formato = 'fechaCreacion >= "' . $fechaInicial . '" and fechaCreacion <= "' . $fechaFinal . '"'; 
        $boton = true;
        $Dictamenes = Dictamenes::find()->where('fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->all();
        
        return $this->render('index',['Dictamenes'=>$Dictamenes,'model'=>$model,'boton'=>$boton]);
      }
      
      public function actionImprimirFiltro(){
        //echo'<pre>';print_r($_GET);echo'</pre>'; exit;
        $fechaInicial = date("d-m-Y", strtotime($_GET['fechas']["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET['fechas']["filtro"]["fechaFinal"]));
        $formato = 'fechaCreacion >= "' . $fechaInicial . '" and fechaCreacion <= "' . $fechaFinal . '"'; 
       $Dictamenes = Dictamenes::find()->where('fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->all();
        $content=$this->renderPartial('_imprimir',['Dictamenes'=>$Dictamenes]); 
        $header=$this->renderPartial('_header', ['Dictamenes'=>$Dictamenes]);
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

