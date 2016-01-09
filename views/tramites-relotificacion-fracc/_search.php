<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesRelotificacionFraccSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-relotificacion-fracc-search">

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

    <?php // echo $form->field($model, 'p1NombreSolicitante') ?>

    <?php // echo $form->field($model, 'p1DireccionSolicitante') ?>

    <?php // echo $form->field($model, 'p1TelefonoSolicitante') ?>

    <?php // echo $form->field($model, 'p1CorreoSolicitante') ?>

    <?php // echo $form->field($model, 'p1UsoActual') ?>

    <?php // echo $form->field($model, 'p1UsoSolicitado') ?>

    <?php // echo $form->field($model, 'p1DescripcionProceso') ?>

    <?php // echo $form->field($model, 'p1NoCajones') ?>

    <?php // echo $form->field($model, 'p1CallePredio') ?>

    <?php // echo $form->field($model, 'p1ColoniaPredio') ?>

    <?php // echo $form->field($model, 'p1NumeroOficial') ?>

    <?php // echo $form->field($model, 'p1NumeroInterio') ?>

    <?php // echo $form->field($model, 'p1PobladoPredio') ?>

    <?php // echo $form->field($model, 'p1SindicaturaPredio') ?>

    <?php // echo $form->field($model, 'p1ClaveCatastralPredio') ?>

    <?php // echo $form->field($model, 'p1SuperficiePredio') ?>

    <?php // echo $form->field($model, 'p1NortePredio') ?>

    <?php // echo $form->field($model, 'p1SurPredio') ?>

    <?php // echo $form->field($model, 'p1OrientePredio') ?>

    <?php // echo $form->field($model, 'p1PonientePredio') ?>

    <?php // echo $form->field($model, 'p1NombrePropietarios') ?>

    <?php // echo $form->field($model, 'p1DireccionPropietarios') ?>

    <?php // echo $form->field($model, 'p1TelefonoPropietarios') ?>

    <?php // echo $form->field($model, 'p1CorreoPropietarios') ?>

    <?php // echo $form->field($model, 'p1PlantaBajaConstruida') ?>

    <?php // echo $form->field($model, 'p1PlantaAltaConstruida') ?>

    <?php // echo $form->field($model, 'p1SegundoNivelConstruida') ?>

    <?php // echo $form->field($model, 'p1OtrosConstruida') ?>

    <?php // echo $form->field($model, 'p1TotalConstruida') ?>

    <?php // echo $form->field($model, 'p1PlantaBajaXConstruir') ?>

    <?php // echo $form->field($model, 'p1PlantaAltaXConstruir') ?>

    <?php // echo $form->field($model, 'p1SegundoNivelXConstruir') ?>

    <?php // echo $form->field($model, 'p1OtrosXConstruir') ?>

    <?php // echo $form->field($model, 'p1TotalXConstruir') ?>

    <?php // echo $form->field($model, 'p1Observaciones') ?>

    <?php // echo $form->field($model, 'p1NombreGestor') ?>

    <?php // echo $form->field($model, 'p1DireccionGestor') ?>

    <?php // echo $form->field($model, 'p1TelefonoGestor') ?>

    <?php // echo $form->field($model, 'p1CorreoGestor') ?>

    <?php // echo $form->field($model, 'p2CertificacionCabildo') ?>

    <?php // echo $form->field($model, 'p2PlanoAprobado') ?>

    <?php // echo $form->field($model, 'p2PlanoPropuesta') ?>

    <?php // echo $form->field($model, 'p2Pago') ?>

    <?php // echo $form->field($model, 'p3CertificacionCabildo') ?>

    <?php // echo $form->field($model, 'p3PlanoAprobado') ?>

    <?php // echo $form->field($model, 'p3PlanoPropuesta') ?>

    <?php // echo $form->field($model, 'p3Pago') ?>

    <?php // echo $form->field($model, 'p4Supervision') ?>

    <?php // echo $form->field($model, 'p4Observaciones') ?>

    <?php // echo $form->field($model, 'p5Constancia') ?>

    <?php // echo $form->field($model, 'p1NorOrientePredio') ?>

    <?php // echo $form->field($model, 'p1SurOrientePredio') ?>

    <?php // echo $form->field($model, 'p1NorPonientePredio') ?>

    <?php // echo $form->field($model, 'p1SurPonientePredio') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reemplazar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
