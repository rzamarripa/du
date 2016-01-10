<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="setalleRequisito-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>

    <?= $form->field($model, 'calle')->textInput() ?>

    <?= $form->field($model, 'entre_calles')->textInput() ?>

    <?= $form->field($model, 'colonia_fracc')->textInput() ?>

    <?= $form->field($model, 'tipo_de_arbol')->textInput() ?>

    <?= $form->field($model, 'ubicacion')->textInput() ?>

    <?= $form->field($model, 'motivos')->textArea() ?>

    <?= $form->field($model, 'observaciones')->textArea() ?>


        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar cambios', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
