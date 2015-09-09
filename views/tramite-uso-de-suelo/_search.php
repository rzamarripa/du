<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteUsoDeSueloSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramite-uso-de-suelo-search">

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

    <?php // echo $form->field($model, 'p1DescriProceso') ?>

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

    <?php // echo $form->field($model, 'p1FirmaSolicitante') ?>

    <?php // echo $form->field($model, 'p1FirmaPropietarios') ?>

    <?php // echo $form->field($model, 'p1PlantaBajaConstruida') ?>

    <?php // echo $form->field($model, 'p1PlantaAltaConstruida') ?>

    <?php // echo $form->field($model, 'p1SegundoNivelConstruida') ?>

    <?php // echo $form->field($model, 'p1OtrosConstruida') ?>

    <?php // echo $form->field($model, 'p1TotalConstruida') ?>

    <?php // echo $form->field($model, 'p1PlantaAltaXConstruir') ?>

    <?php // echo $form->field($model, 'p1PlantaBajaXConstruir') ?>

    <?php // echo $form->field($model, 'p1SegundoNivelXConstruir') ?>

    <?php // echo $form->field($model, 'p1OtrosXConstruir') ?>

    <?php // echo $form->field($model, 'p1TotalXConstruir') ?>

    <?php // echo $form->field($model, 'p1Observaciones') ?>

    <?php // echo $form->field($model, 'p1Sellos') ?>

    <?php // echo $form->field($model, 'p1NombreGestor') ?>

    <?php // echo $form->field($model, 'p1DireccionGestor') ?>

    <?php // echo $form->field($model, 'p1TelefonoGestor') ?>

    <?php // echo $form->field($model, 'p1CorreoGestor') ?>

    <?php // echo $form->field($model, 'p1FirmaGestor') ?>

    <?php // echo $form->field($model, 'p2Escrituras') ?>

    <?php // echo $form->field($model, 'p2ReciboDerechos') ?>

    <?php // echo $form->field($model, 'p2Alineamiento') ?>

    <?php // echo $form->field($model, 'p2ProyectoArquitectonico') ?>

    <?php // echo $form->field($model, 'p2ImpactoAmbiental') ?>

    <?php // echo $form->field($model, 'p2ImpactoVial') ?>

    <?php // echo $form->field($model, 'p2OpinionBomberos') ?>

    <?php // echo $form->field($model, 'p2ProteccionCivil') ?>

    <?php // echo $form->field($model, 'p2Inah') ?>

    <?php // echo $form->field($model, 'p2Sepyc') ?>

    <?php // echo $form->field($model, 'p2Masa') ?>

    <?php // echo $form->field($model, 'p2Aeronautica') ?>

    <?php // echo $form->field($model, 'p2Vecinos') ?>

    <?php // echo $form->field($model, 'p3Escrituras') ?>

    <?php // echo $form->field($model, 'p3ReciboDerechos') ?>

    <?php // echo $form->field($model, 'p3Alineamiento') ?>

    <?php // echo $form->field($model, 'p3ProyectoArquitectonico') ?>

    <?php // echo $form->field($model, 'p3ImpactoAmbiental') ?>

    <?php // echo $form->field($model, 'p3ImpactoVial') ?>

    <?php // echo $form->field($model, 'p3OpinionBomberos') ?>

    <?php // echo $form->field($model, 'p3ProteccionCivil') ?>

    <?php // echo $form->field($model, 'p3Inah') ?>

    <?php // echo $form->field($model, 'p3Sepyc') ?>

    <?php // echo $form->field($model, 'p3Masa') ?>

    <?php // echo $form->field($model, 'p3Aeronautica') ?>

    <?php // echo $form->field($model, 'p3Vecinos') ?>

    <?php // echo $form->field($model, 'p4Imprimir') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reemplazar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
