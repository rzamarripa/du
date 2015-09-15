<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LicZamaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lic-zama-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pasoActualId') ?>

    <?= $form->field($model, 'tipoTramiteId') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Apellidos') ?>

    <?php // echo $form->field($model, 'Cvecatastral') ?>

    <?php // echo $form->field($model, 'escrituras') ?>

    <?php // echo $form->field($model, 'imprmirLicencia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
