<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteZonificacion */

$this->title = 'Trámite Zonificación: ' . $model->p1NombreSolicitante;
$this->params['breadcrumbs'][] = ['label' => 'Trámite Zonificación', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tramite-zonificacion-update">

    <h1><?= Html::encode($model->p1NombreSolicitante) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
