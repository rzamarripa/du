<?php

namespace app\controllers;

use Yii;
use app\models\Requisitos;
use app\models\RequisitosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\pdf;

/**
 * 
 */
class RequisitosController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                /*'actions' => [
                    'delete' => [''],
                ],*/
            ],
        ];
    }

    /**
     * Lists all Empleado models.
     * @return mixed
     */
     public function actionIndex()
    {
        $model= new Requisitos();
        $Requisitos = Requisitos::find()->all();
        if (isset($_POST['Requisitos'])){
            $model->load(Yii::$app->request->post());
            //echo "<pre>"; print_r($model); echo "</pre>"; exit;
            $model->save();
            return $this->redirect('index');
        } else {
            return $this->render('index', ['model'=>$model,'Requisitos'=>$Requisitos]);
        }
    }

      //public function actionCambiar(){

        //$model = Empleado::find()->where('id=:id', ['id'=>$_GET["id"]])->one();
        
        //$model->estatus_did = $_GET['estatus'];
        //if($model->save()){
      //      return $this->redirect('index');
        //}
    //}

    /**
     * Displays a single Empleado model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Empleado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Requisitos();

        if ($model->load(Yii::$app->request->post())) {
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
           return $this->render('update', [
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
        $Requisitos = Requisitos::find()->all();
        $content=$this->renderPartial('_imprimir',['Requisitos'=>$Requisitos]); 
        $header=$this->renderPartial('_header', ['Requisitos'=>$Requisitos]);
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
        if (($model = Requisitos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

