<?php

namespace app\controllers;
use Yii;
use app\models\Atributos;
use app\models\PasosTramite;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\pdf;

class PasosTramiteController extends Controller
{
    public function actionIndex($id){
	    $model = new PasosTramite();
    	if ($model->load(Yii::$app->request->post())) {
    	$model->tipoTramiteId = $id;
    	if($model->save()){
	    	$model = new PasosTramite();
			$pasostramite = PasosTramite::find()->where('tipoTramiteId = :id',['id'=>$id])->all();
	        return $this->redirect(['index','pasostramite'=>$pasostramite, 'model'=>$model, 'id' => $id]);
    	}
        } else {
			$pasostramite = PasosTramite::find()->where('tipoTramiteId = :id',['id'=>$id])->all();
            return $this->render('index',['pasostramite'=>$pasostramite,'model'=>$model,'id' => $id]);
        }
	}

    public function actionUpdate($id){

    	$model = PasosTramite::find()->where('id = :id',['id'=>$id])->one();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
	        return $this->redirect(['index','id' => $model->tipoTramiteId]);
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }

    public function actionAtributosupdate($id)
    {
        $model = Atributos::find()->where('id = :id',['id'=>$id])->one();
        $atributos = Atributos::find()->where('pasoId = :pasoId',['pasoId'=>$model->pasoId])->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $id = $model->tipoTramiteId;
            $pasoId = $model->pasoId;
            $model= new Atributos();
            return $this->redirect(['atributos', 'model' => $model, 'atributos'=>$atributos,'pasoId' => $pasoId,'id'=> $id]);
        } else {
            return $this->render('atributosform', [
                'model' => $model,
            ]);
        }
    }


   
        public function actionImprimir() {
    // get your HTML raw content without any layouts or scrip
        $pasostramite = pasostramite::find()->all();
        $content=$this->renderPartial('_imprimir',['pasostramite'=>$pasostramite]); 
        $header=$this->renderPartial('_header', ['pasostramite'=>$pasostramite]);
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
    

    public function actionAtributos($pasoId){
        $model= new Atributos();
        $model->pasoId = $pasoId;
        $atributos = Atributos::find()->where('pasoId = :pasoId',['pasoId'=>$pasoId])->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $id = $model->tipoTramiteId;
            $model= new Atributos();
            return $this->redirect(['atributos', 'model' => $model, 'atributos'=>$atributos,'pasoId' => $pasoId,'id'=> $id]);
        } else {
            return $this->render('atributos', ['model'=>$model,'atributos'=>$atributos]);
        }
    }
}


 