<?php

namespace app\controllers;
use Yii;
    use app\models\Atributos;
use app\models\PasosTramite;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class PasostramiteController extends Controller
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
	    	$model = new PasosTramite();
			$pasostramite = PasosTramite::find()->all();
	        return $this->redirect(['index','pasostramite'=>$pasostramite, 'model'=>$model, 'id' => $id]);
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


 