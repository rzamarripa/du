<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesNumeroOficialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-numero-oficial-search">

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

    <?php // echo $form->field($model, 'p1NombrePropietario') ?>

    <?php // echo $form->field($model, 'p1DireccionPropietario') ?>

    <?php // echo $form->field($model, 'p1TelefonoPropietario') ?>

    <?php // echo $form->field($model, 'p1CallePredio') ?>

    <?php // echo $form->field($model, 'p1FraccColoniaPredio') ?>

    <?php // echo $form->field($model, 'p1LotePredio') ?>

    <?php // echo $form->field($model, 'p1ManzanaPredio') ?>

    <?php // echo $form->field($model, 'p1ClaveCatastralPredio') ?>

    <?php // echo $form->field($model, 'p1AlineamientoObservaciones') ?>

    <?php // echo $form->field($model, 'p1NoOficialObservaciones') ?>

    <?php // echo $form->field($model, 'p1ProMatObservaciones') ?>

    <?php // echo $form->field($model, 'p1ProHospObservaciones') ?>

    <?php // echo $form->field($model, 'p1ProAlfObservaciones') ?>

    <?php // echo $form->field($model, 'p1TotalObservaciones') ?>

    <?php // echo $form->field($model, 'p1NorteLocalizacion') ?>

    <?php // echo $form->field($model, 'p1SurLocalizacion') ?>

    <?php // echo $form->field($model, 'p1OrienteLocalizacion') ?>

    <?php // echo $form->field($model, 'p1PonienteLocalizacion') ?>

    <?php // echo $form->field($model, 'p2CopiaEscritura') ?>

    <?php // echo $form->field($model, 'p2Croquis') ?>

    <?php // echo $form->field($model, 'p2Pago') ?>

    <?php // echo $form->field($model, 'p3Nombre') ?>

    <?php // echo $form->field($model, 'p3NumeroAsignado') ?>

    <?php // echo $form->field($model, 'p3Observaciones') ?>

    <?php // echo $form->field($model, 'p4Resolutivo') ?>

    <?php // echo $form->field($model, 'p5CopiaEscritura') ?>

    <?php // echo $form->field($model, 'p5Croquis') ?>

    <?php // echo $form->field($model, 'p5Pago') ?>

    <?php // echo $form->field($model, 'p5Resolutivo') ?>

    <?php // echo $form->field($model, 'p6NumeroOficial') ?>

    <?php // echo $form->field($model, 'p7EnvioExpediente') ?>

    <?php // echo $form->field($model, 'p7Observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reemplazar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
