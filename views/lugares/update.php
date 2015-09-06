<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */

<<<<<<< HEAD
$this->title = 'Update VisitasLugares: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'VisitasLugares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="Esatus-VisitasLugares">
=======
$this->title = 'Update lugares: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'lugares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lugares-update">
>>>>>>> deff04c116a1e7e1bf4935a5a61d2ccdb084f80a

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
