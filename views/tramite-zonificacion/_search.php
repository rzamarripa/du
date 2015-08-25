<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteZonificacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramite-zonificacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pasoActualId') ?>

    <?= $form->field($model, 'tipoTramiteId') ?>

    <?= $form->field($model, 'p1NombreSolicitante') ?>

    <?= $form->field($model, 'p1DireccionSolicitante') ?>

    <?php // echo $form->field($model, 'p1TelefonoSolicitante') ?>

    <?php // echo $form->field($model, 'p1CorreoSolicitante') ?>

    <?php // echo $form->field($model, 'p1FirmaSolicitante') ?>

    <?php // echo $form->field($model, 'p1UsoActual') ?>

    <?php // echo $form->field($model, 'p1UsoSolicitado') ?>

    <?php // echo $form->field($model, 'p1DescriProceso') ?>

    <?php // echo $form->field($model, 'p1NoCajones') ?>

    <?php // echo $form->field($model, 'p2Escrituras') ?>

    <?php // echo $form->field($model, 'p2ReciboDerechos') ?>

    <?php // echo $form->field($model, 'p2CroquisUbicacion') ?>

    <?php // echo $form->field($model, 'p1CallePredio') ?>

    <?php // echo $form->field($model, 'p1ColoniaPredio') ?>

    <?php // echo $form->field($model, 'p1NumeroOficialPredio') ?>

    <?php // echo $form->field($model, 'p1NumeroInteriorPredio') ?>

    <?php // echo $form->field($model, 'p1PobladoPredio') ?>

    <?php // echo $form->field($model, 'p1SindicaturaPredio') ?>

    <?php // echo $form->field($model, 'p1ClaveCatastralPredio') ?>

    <?php // echo $form->field($model, 'p1SuperficiePredio') ?>

    <?php // echo $form->field($model, 'p1NortePredio') ?>

    <?php // echo $form->field($model, 'p1SurPredio') ?>

    <?php // echo $form->field($model, 'p1OrientePredio') ?>

    <?php // echo $form->field($model, 'p1PonientePredio') ?>

    <?php // echo $form->field($model, 'p1NombrePropietario') ?>

    <?php // echo $form->field($model, 'p1DireccionPropietario') ?>

    <?php // echo $form->field($model, 'p1TelefonoPropietario') ?>

    <?php // echo $form->field($model, 'p1CorreoPropietario') ?>

    <?php // echo $form->field($model, 'p1FirmaPropietario') ?>

    <?php // echo $form->field($model, 'p1PlantabajaConstruida') ?>

    <?php // echo $form->field($model, 'p1PlantaaltaConstruida') ?>

    <?php // echo $form->field($model, 'p1SegundonivelConstruida') ?>

    <?php // echo $form->field($model, 'p1OtrosConstruida') ?>

    <?php // echo $form->field($model, 'p1PlantabajaXConstruir') ?>

    <?php // echo $form->field($model, 'p1PlantaaltaXConstruir') ?>

    <?php // echo $form->field($model, 'p1SegundonivelXConstruir') ?>

    <?php // echo $form->field($model, 'p1OtrosXConstruir') ?>

    <?php // echo $form->field($model, 'p1TotalConstruida') ?>

    <?php // echo $form->field($model, 'p1TotalXConstruir') ?>

    <?php // echo $form->field($model, 'p1Observaciones') ?>

    <?php // echo $form->field($model, 'p1NombreGestor') ?>

    <?php // echo $form->field($model, 'p1DireccionGestor') ?>

    <?php // echo $form->field($model, 'p1TelefonoGestor') ?>

    <?php // echo $form->field($model, 'p1CorreoGestor') ?>

    <?php // echo $form->field($model, 'p1FirmaGestor') ?>

    <?php // echo $form->field($model, 'p3Pago') ?>

    <?php // echo $form->field($model, 'p3Escrituras') ?>

    <?php // echo $form->field($model, 'p3ReciboDerechos') ?>

    <?php // echo $form->field($model, 'p3CroquisUbicacion') ?>

    <?php // echo $form->field($model, 'solicitud') ?>

    <?php // echo $form->field($model, 'escrituras') ?>

    <?php // echo $form->field($model, 'reciboDerechos') ?>

    <?php // echo $form->field($model, 'croquisUbicacion') ?>

    <?php // echo $form->field($model, 'p2Pago') ?>

    <?php // echo $form->field($model, 'p4Imprimir') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
