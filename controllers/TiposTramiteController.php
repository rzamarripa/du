<?php

namespace app\controllers;
use Yii;
use app\models\PasosTramite;
use app\models\TiposTramite;
use app\models\TipoTramitesRoles;
use app\models\PermisosPasoTramite;
use app\models\Roles;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class TipostramiteController extends Controller
{
    public function actionIndex(){
        
    	$model = new TiposTramite();
    	$TiposTramite = TiposTramite::find()->all();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('index',['TiposTramite'=>$TiposTramite,'model'=>$model]);
        }
	}

    public function actionUpdate($id){

    	$model = TiposTramite::find()->where('id = :id',['id'=>$id])->one();
    	if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }
    public function actionPermisos($id){ 
        if(isset($_POST['permisos'])){
            foreach ($_POST['permisos'] as $permiso) {
                if(isset($permiso['id'])){
                    $modelttr = TipoTramitesRoles::find()->where('id = :id',['id'=>$permiso['id']])->one();
                }else{
                    $modelttr = new TipoTramitesRoles();
                }
                $modelttr->roleId = $permiso['rolid'];
                $modelttr->tipoTramiteId = $permiso['tipoTramiteId'];
                if(isset($permiso['leer'])){$modelttr->leer = 1;}else{$modelttr->leer = 0;}
                if(isset($permiso['crear'])){$modelttr->crear = 1;}else{$modelttr->crear = 0;}
                if(isset($permiso['actualizar'])){$modelttr->actualizar = 1;}else{$modelttr->actualizar = 0;}
                if(isset($permiso['borrar'])){$modelttr->borrar = 1;}else{$modelttr->borrar = 0;}
                $modelttr->save();
                foreach($permiso['ppt'] as $ppt) {
                    if(isset($ppt['leer']) or isset($ppt['crear']) or isset($ppt['actualizar']) or isset($ppt['borrar'])){
                        if(isset($ppt['id'])){
                            $modelppt = PermisosPasoTramite::find()->where('id = :id',['id'=>$ppt['id']])->one();
                        }else{
                            $modelppt = new PermisosPasoTramite();
                        }
                        $modelppt->pasoTramiteId = $ppt['ptid'];
                        $modelppt->tipoTramiteRoleId = $modelttr->id;
                        if(isset($ppt['leer'])){$modelppt->leer = 1;}else{$modelppt->leer = 0;}
                        if(isset($ppt['crear'])){$modelppt->crear = 1;}else{$modelppt->crear = 0;}
                        if(isset($ppt['actualizar'])){$modelppt->actualizar = 1;}else{$modelppt->actualizar = 0;}
                        if(isset($ppt['borrar'])){$modelppt->borrar = 1;}else{$modelppt->borrar = 0;}
                        $modelppt->save();
                    }
                }
            }
        }
        $tipoTramite = TiposTramite::find()->where('id = :id',['id'=>$id])->one();
        $roles = Roles::find()->all();
        $pasosTramite = PasosTramite::find()->all();
        return $this->render('permisos',['tipoTramite'=>$tipoTramite,'roles'=>$roles,'pasosTramite'=>$pasosTramite]);
    }
}