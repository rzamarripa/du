<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\helpers\Html;
use app\models\USUARIOS;
use app\models\TramiteNuevo;

?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?php if(Yii::$app->user->isGuest) echo "Necesitas Iniciar Sesión"; else echo "Bienvenido al departamento de " . Yii::$app->user->identity->username; ?></h1>
        <p class="lead">Página Principal</p>
    </div>

    <div class="body-content">
        
        <div class="row">
            <div class="col-lg-12">
	            
                holá

            </div>           
        </div>
    </div>
</div>

