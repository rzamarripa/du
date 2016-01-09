<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Entregable */

$this->title = 'Update Entregable: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Entregables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="entregable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
