<?php

namespace app\controllers;
use Yii;
use app\models\VisitasEscuelas;
use app\models\VisitasEscuelasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\pdf;

class VisitasEscuelasController extends Controller
{
    public function actionIndex() {

     //echo '<pre>'; print_r($_POST); echo'</prev>';exit;
        $model= new VisitasEscuelas();
        $model->estatus_did = 1;
        $VisitasEscuelas = VisitasEscuelas::find()->all();
        $boton =  false;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('index', ['model'=>$model,'VisitasEscuelas'=>$VisitasEscuelas,'boton'=>$boton]);
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

    public function actionView($id)
       {

         $VisitasEscuelas = VisitasEscuelas::find()->all();
 
         return $this->render('view', [
            'VisitasEscuelas' => $VisitasEscuelas 
            ]);
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
    
     public function actionImprimir() {
    // get your HTML raw content without any layouts or scrip
        $VisitasEscuelas = VisitasEscuelas::find()->all();
        $content=$this->renderPartial('_imprimir',['VisitasEscuelas'=>$VisitasEscuelas]); 
        $header=$this->renderPartial('_header', ['VisitasEscuelas'=>$VisitasEscuelas]);
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
    return $pdf->render(); 
}

 public function actionFiltro()
      {  
        $model = new VisitasEscuelas();
        $fechaInicial = date("d-m-Y", strtotime($_GET["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET["filtro"]["fechaFinal"]));
        $formato = 'fecha_ft >= "' . $fechaInicial . '" and fecha_ft <= "' . $fechaFinal . '"'; 
        $boton = true;
        $VisitasEscuelas = VisitasEscuelas::find()->where('fecha_ft >= :fechaInicial and fecha_ft <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->all();
        echo count($VisitasEscuelas);
        return $this->render('index',['VisitasEscuelas'=>$VisitasEscuelas,'model'=>$model,'boton'=>$boton]);
      }
            public function actionImprimirFiltro(){
        //echo'<pre>';print_r($_GET);echo'</pre>'; exit;
        $fechaInicial = date("d-m-Y", strtotime($_GET['fechas']["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET['fechas']["filtro"]["fechaFinal"]));
        $formato = 'fecha_ft >= "' . $fechaInicial . '" and fecha_ft <= "' . $fechaFinal . '"'; 
        $VisitasEscuelas = VisitasEscuelas::find()->where('fecha_ft >= :fechaInicial and fecha_ft <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->all();
        $content=$this->renderPartial('_imprimir',['VisitasEscuelas'=>$VisitasEscuelas]); 
        $header=$this->renderPartial('_header', ['VisitasEscuelas'=>$VisitasEscuelas]);
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
