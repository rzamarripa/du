<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesRecepcion */

$this->title = 'Update Tramites Recepcion: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tramites Recepcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tramites-recepcion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
