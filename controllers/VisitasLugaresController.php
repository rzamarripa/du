<?php

namespace app\controllers;

use Yii;
use app\models\VisitasLugares;
use app\models\VisitasLugaresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\pdf;


class VisitasLugaresController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),               
               
             
            ],
        ];
    }

    /**
     * Lists all Empleado models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model= new VisitasLugares();
        $model->estatus_did = 1;
        $model->fecha_ft =date('Y-m-d H:i:s');
        $boton = false;
        $VisitasLugares = VisitasLugares::find()->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('index', ['model'=>$model,'VisitasLugares'=>$VisitasLugares,'boton'=>$boton]);
        }
    }

       public function actionCambiar(){

        $model = VisitasLugares::find()->where('id=:id', ['id'=>$_GET["id"]])->one();
        
       $model->estatus_did = $_GET['estatus'];
      if($model->save()){
            return $this->redirect('index');
        } else {
            $model->fecha_ft =date('Y-m-d');
            return $this->render('index',['VisitasLugares'=>$VisitasLugares,'model'=>$model]);
        }
    }


    
    
    public function actionView($id)
       {

         $VisitasLugares = VisitasLugares::find()->all();
 
         return $this->render('view', [
            'VisitasLugares' => $VisitasLugares 
            ]);
       }

    /**
     * Creates a new Empleado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VisitasLugares();

        if ($model->load(Yii::$app->request->post())) {


            $model->fechaCreacion = date("d-m-Y");

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Empleado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

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
     public function actionImprimir() {
    // get your HTML raw content without any layouts or scrip
        $VisitasLugares = VisitasLugares::find()->all();
        $content=$this->renderPartial('_imprimir',['VisitasLugares'=>$VisitasLugares]); 
        $header=$this->renderPartial('_header', ['VisitasLugares'=>$VisitasLugares]);
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


    protected function findModel($id)
    {
        if (($model = VisitasLugares::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
   
    public function actionFiltro()
      {  
        $model = new VisitasLugares();
        $fechaInicial = date("d-m-Y", strtotime($_GET["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET["filtro"]["fechaFinal"]));
        $formato = 'fecha_ft >= "' . $fechaInicial . '" and fecha_ft <= "' . $fechaFinal . '"'; 
        $boton = true;
        $VisitasLugares = VisitasLugares::find()->where('fecha_ft >= :fechaInicial and fecha_ft <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->all();
        return $this->render('index',['VisitasLugares'=>$VisitasLugares,'model'=>$model,'boton'=>$boton]);
      }
      
      public function actionImprimirFiltro(){
        //echo'<pre>';print_r($_GET);echo'</pre>'; exit;
        $fechaInicial = date("d-m-Y", strtotime($_GET['fechas']["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET['fechas']["filtro"]["fechaFinal"]));
        $formato = 'fecha_ft >= "' . $fechaInicial . '" and fecha_ft <= "' . $fechaFinal . '"'; 
       $VisitasLugares = VisitasLugares::find()->where('fecha_ft >= :fechaInicial and fecha_ft <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->all();
        $content=$this->renderPartial('_imprimir',['VisitasLugares'=>$VisitasLugares]); 
        $header=$this->renderPartial('_header', ['VisitasLugares'=>$VisitasLugares]);
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


