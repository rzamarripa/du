<?php

namespace app\controllers;

use Yii;
use app\models\VisitasEmpresas;
use app\models\VisitasEmpresasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;


/**
 * EmpleadoController implements the CRUD actions for Empleado model.
 */
class VisitasEmpresasController extends Controller
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
        $model= new VisitasEmpresas();
        $model->estatus_did = 1;
        $model->fechaCreacion =date('d-m-Y H:i:s');
        $VisitasEmpresas = VisitasEmpresas::find()->all();
        $boton = false;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('index', ['model'=>$model,'VisitasEmpresas'=>$VisitasEmpresas,'boton'=>$boton]);
        }
    }

     public function actionCambiar(){

        $model = VisitasEmpresas::find()->where('id=:id', ['id'=>$_GET["id"]])->one();
        
       $model->estatus_did = $_GET['estatus'];
      if($model->save()){
            return $this->redirect('index');
        }
    }

    
     public function actionView($id)
       {

         $VisitasEmpresas = VisitasEmpresas::find()->all();
 
         return $this->render('view', [
            'VisitasEmpresas' => $VisitasEmpresas 
            ]);
       }

    /**
     * Creates a new Empleado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VisitasEmpresas();

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
        $VisitasEmpresas = VisitasEmpresas::find()->all();
        $content=$this->renderPartial('_imprimir',['VisitasEmpresas'=>$VisitasEmpresas]); 
        $header=$this->renderPartial('_header', ['VisitasEmpresas'=>$VisitasEmpresas]);
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
    /**
     * Finds the Empleado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Empleado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = VisitasEmpresas::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
     public function actionFiltro()
      {  
        $model = new VisitasEmpresas();
        $fechaInicial = date("d-m-Y", strtotime($_GET["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET["filtro"]["fechaFinal"]));
        $formato = 'fechaCreacion >= "' . $fechaInicial . '" and fechaCreacion <= "' . $fechaFinal . '"'; 
        $boton = true;
        $VisitasEmpresas = VisitasEmpresas::find()->where('fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->all();
        echo count($VisitasEmpresas);
        return $this->render('index',['VisitasEmpresas'=>$VisitasEmpresas,'model'=>$model,'boton'=>$boton]);
      }

            public function actionImprimirFiltro(){
        //echo'<pre>';print_r($_GET);echo'</pre>'; exit;
        $fechaInicial = date("d-m-Y", strtotime($_GET['fechas']["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET['fechas']["filtro"]["fechaFinal"]));
        $formato = 'fechaCreacion >= "' . $fechaInicial . '" and fechaCreacion <= "' . $fechaFinal . '"'; 
        $VisitasEmpresas = VisitasEmpresas::find()->where('fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->all();
        $content=$this->renderPartial('_imprimir',['VisitasEmpresas'=>$VisitasEmpresas]); 
        $header=$this->renderPartial('_header', ['VisitasEmpresas'=>$VisitasEmpresas]);
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
