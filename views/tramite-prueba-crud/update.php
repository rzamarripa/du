<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitePruebaCrud */

$this->title = 'Update Tramite Prueba Crud: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tramite Prueba Cruds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tramite-prueba-crud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
