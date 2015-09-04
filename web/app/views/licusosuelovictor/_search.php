<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LicUsoSueloVictorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lic-uso-suelo-victor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pasoActualId') ?>

    <?= $form->field($model, 'tipoTramiteId') ?>

    <?= $form->field($model, 'fechaCreacion') ?>

    <?= $form->field($model, 'fechaModificacion') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'estatusId') ?>

    <?php // echo $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'p2DictamenImpactoAmbiental') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
