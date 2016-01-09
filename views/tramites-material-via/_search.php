<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesMaterialViaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-material-via-search">

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

    <?php // echo $form->field($model, 'p6EnvioExpediente') ?>

    <?php // echo $form->field($model, 'p6Observaciones') ?>

    <?php // echo $form->field($model, 'p5MaterialVialPublica') ?>

    <?php // echo $form->field($model, 'p3Resolutivo') ?>

    <?php // echo $form->field($model, 'p2Pago') ?>

    <?php // echo $form->field($model, 'p4Pago') ?>

    <?php // echo $form->field($model, 'p4Resolutivo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
