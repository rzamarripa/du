<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteUsoDeSuelo */

$this->title = 'Update Tramite Uso De Suelo: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tramite Uso De Suelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tramite-uso-de-suelo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
