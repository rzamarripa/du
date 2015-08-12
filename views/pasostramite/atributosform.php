<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atributos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>

    <?= $form->field($model, 'tipoAtributoId')->textInput() ?>

    <?= $form->field($model, 'pasoId')->textInput() ?>

    <?= $form->field($model, 'tipoTramiteId')->textInput() ?>

    <?= $form->field($model, 'allowNull')->textInput() ?>

    <?= $form->field($model, 'attrLength')->textInput() ?>


        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar cambios', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
