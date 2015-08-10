<?php

namespace app\controllers;
use Yii;
use app\models\Roles;
use app\models\TipoTramitesRoles;
use app\models\PermisosPasoTramite;
use app\models\TiposTramite;
use app\models\PasosTramite;
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

    public function actionTramiteroles($id){
        if(isset($_POST['permisos'])){
            foreach ($_POST['permisos'] as $permiso) {
                if(isset($permiso['id'])){
                    $modelttr = TipoTramitesRoles::find()->where('id = :id',['id'=>$permiso['id']])->one();
                    $modelttr->roleId = $permiso['rolid'];
                    $modelttr->tipoTramiteId = $permiso['ttid'];
                    if(isset($permiso['leer'])){$modelttr->leer = 1;}else{$modelttr->leer = 0;}
                    if(isset($permiso['crear'])){$modelttr->crear = 1;}else{$modelttr->crear = 0;}
                    if(isset($permiso['actualizar'])){$modelttr->actualizar = 1;}else{$modelttr->actualizar = 0;}
                    if(isset($permiso['borrar'])){$modelttr->borrar = 1;}else{$modelttr->borrar = 0;}
                    if($modelttr->save()){
                        foreach ($_POST['permisos'] as $ppt) {
                            echo "<pre>";print_r($ppt);echo "</pre>";exit;
                        }
                    }
                }
            }
        }
        $rol = Roles::find()->where('id = :id',['id'=>$id])->one();
        $tiposTramite = TiposTramite::find()->all();
        $pasosTramite = PasosTramite::find()->all();
        return $this->render('tramiteroles',['tiposTramite'=>$tiposTramite,'rol'=>$rol,'pasosTramite'=>$pasosTramite]);
    }
}
/*
echo "<pre>";print_r($_POST);echo "</pre>";exit; 
*/  