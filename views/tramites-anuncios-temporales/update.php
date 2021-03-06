<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesAnunciosTemporales */

//$this->title = 'Update Tramites Anuncios Temporales: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tramites Anuncios Temporales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p1NoOficioTemporal, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>

<div class="tramites-anuncios-temporales-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
