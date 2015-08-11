<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\TramitePruebaCrudSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramite-prueba-crud-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pasoActualId') ?>

    <?= $form->field($model, 'tipoTramiteId') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Apellido') ?>

    <?php // echo $form->field($model, 'Direccion') ?>

    <?php // echo $form->field($model, 'Celular') ?>

    <?php // echo $form->field($model, 'Empresa') ?>

    <?php // echo $form->field($model, 'Puesto') ?>

    <?php // echo $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'Extension') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
