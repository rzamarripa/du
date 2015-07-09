<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\LicenciaDeConstruccion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="licencia-de-construccion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pasoActualId')->textInput() ?>

    <?= $form->field($model, 'tipoTramiteId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
