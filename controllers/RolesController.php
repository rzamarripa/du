<?php

namespace app\controllers;
use Yii;
use app\models\Roles;
use app\models\TipoTramitesRoles;
use app\models\ProyectosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class RolesController extends Controller
{
    public function actionIndex(){
    	$model = new Roles();
    	$roles = Roles::find()->all();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('index',['roles'=>$roles,'model'=>$model]);
        }
	}

    public function actionUpdate($id){

    	$model = Roles::find()->where('id = :id',['id'=>$id])->one();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }

    public function actionTramiteroles($id,$nombre){
        $tramiteRoles = TipoTramitesRoles::find()->where('roleId = :id',['id'=>$id])->all();
        return $this->render('tramiteroles',['tramiteRoles'=>$tramiteRoles,'nombre'=>$nombre]);
    }
}