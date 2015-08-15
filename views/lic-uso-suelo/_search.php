<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LicUsoSueloSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lic-uso-suelo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pasoActualId') ?>

    <?= $form->field($model, 'tipoTramiteId') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'calle') ?>

    <?php // echo $form->field($model, 'colonia') ?>

    <?php // echo $form->field($model, 'loteNo') ?>

    <?php // echo $form->field($model, 'manzanaNo') ?>

    <?php // echo $form->field($model, 'claveCatastral') ?>

    <?php // echo $form->field($model, 'usoActual') ?>

    <?php // echo $form->field($model, 'usoSolicitado') ?>

    <?php // echo $form->field($model, 'cajonesEstacionamiento') ?>

    <?php // echo $form->field($model, 'pBConstruida') ?>

    <?php // echo $form->field($model, 'pAConstruida') ?>

    <?php // echo $form->field($model, 'otrosConstruida') ?>

    <?php // echo $form->field($model, 'totalConstruida') ?>

    <?php // echo $form->field($model, 'pBPorConstruir') ?>

    <?php // echo $form->field($model, 'pAPorConstruir') ?>

    <?php // echo $form->field($model, 'otrosPorConstruir') ?>

    <?php // echo $form->field($model, 'totalPorConstruir') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'solicitud') ?>

    <?php // echo $form->field($model, 'escrituras') ?>

    <?php // echo $form->field($model, 'requisitosTotales') ?>

    <?php // echo $form->field($model, 'solicitudCorrecta') ?>

    <?php // echo $form->field($model, 'documentosCorrectos') ?>

    <?php // echo $form->field($model, 'pago') ?>

    <?php // echo $form->field($model, 'imprimirLicencia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
