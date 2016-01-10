<?php

namespace app\controllers;
use Yii;
use app\models\Proyectos;
use app\models\ProyectosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;


class ProyectosController extends Controller
{
    public function actionIndex()
    {
    	$model = new Proyectos();
    	$model->estatus_did = 1;
    	$model->fecha_ft =date('d-m-Y H:i:s');
    	$proyectos = Proyectos::find()->where('estatus_did!=4')->all();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('index',['proyectos'=>$proyectos,'model'=>$model]);
        }
    }

   public function actionCambiar(){

        $model = proyectos::find()->where('id=:id', ['id'=>$_GET["id"]])->one();
        
        $model->estatus_did = $_GET['estatus'];
        if($model->save()){
            return $this->redirect('index');
        }
    }
    public function actionImprimir() {
    // get your HTML raw content without any layouts or scrip
        $Proyectos = Proyectos::find()->all();
        $content=$this->renderPartial('_imprimir',['Proyectos'=>$Proyectos]); 
        $header=$this->renderPartial('_header', ['Proyectos'=>$Proyectos]);
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

     public function actionView($id)
    {

       $proyectos = Proyectos::find()->all();

        return $this->render('view', [
            'proyectos' => $proyectos 
            ]);
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
    public function actionFiltro()
      {  
        $model = new Proyectos();
        $fechaInicial = date("d-m-Y", strtotime($_GET["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET["filtro"]["fechaFinal"]));
        $formato = 'fecha_ft >= "' . $fechaInicial . '" and fecha_ft <= "' . $fechaFinal . '"'; 
        
        $proyectos = Proyectos::find()->where('fecha_ft >= :fechaInicial and fecha_ft <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->all();
        echo count($proyectos);
        return $this->render('index',['proyectos'=>$proyectos,'model'=>$model]);
      }


//$models = Book::find()->where('id != :id and type != :type', ['id'=>1, 'type'=>1])->all();
}