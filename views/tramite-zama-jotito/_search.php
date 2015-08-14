<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\TramiteJotitoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramite-zama-jotito-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pasoActualId') ?>

    <?= $form->field($model, 'tipoTramiteId') ?>

    <?= $form->field($model, 'a') ?>

    <?= $form->field($model, 'b') ?>

    <?php // echo $form->field($model, 'c') ?>

    <?php // echo $form->field($model, 'd') ?>

    <?php // echo $form->field($model, 'e') ?>

    <?php // echo $form->field($model, 'f') ?>

    <?php // echo $form->field($model, 'g') ?>

    <?php // echo $form->field($model, 'h') ?>

    <?php // echo $form->field($model, 'i') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
