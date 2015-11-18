<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesAutorizacion */

$this->title = 'Crear Tramites Autorizacion';
$this->params['breadcrumbs'][] = ['label' => 'Tramites Autorizacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-autorizacion-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
