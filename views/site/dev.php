
<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\helpers\Html;
use app\models\USUARIOS;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?php if(Yii::$app->user->isGuest) echo "Necesitas Iniciar Sesión"; else echo "Bienvenido " . Yii::$app->user->identity->username; ?>!</h1>
        <p class="lead"></p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                Desarrollo Urbano
                
            </div>           
        </div>
    </div>
</div>

