<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesRecepcionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-recepcion-search">

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

    <?php // echo $form->field($model, 'p2Supervisor') ?>

    <?php // echo $form->field($model, 'p2Observaciones') ?>

    <?php // echo $form->field($model, 'p5SolicitudPresidenteMuni') ?>

    <?php // echo $form->field($model, 'p3CertificadoCabildo') ?>

    <?php // echo $form->field($model, 'p5PlanoLotificacion') ?>

    <?php // echo $form->field($model, 'p5RecepcionJapac') ?>

    <?php // echo $form->field($model, 'p3ActaRecepcion') ?>

    <?php // echo $form->field($model, 'p3MemoriaTecno') ?>

    <?php // echo $form->field($model, 'p3PlanoAgua') ?>

    <?php // echo $form->field($model, 'p3PlanoAlcantarillado') ?>

    <?php // echo $form->field($model, 'p5RecepcionCfe') ?>

    <?php // echo $form->field($model, 'p3ActaRecepcionCfe') ?>

    <?php // echo $form->field($model, 'p3CartaCompromiso') ?>

    <?php // echo $form->field($model, 'p3MemoriaTecnoCfe') ?>

    <?php // echo $form->field($model, 'p3PlanoCfe') ?>

    <?php // echo $form->field($model, 'p5RecepcionAlumbrado') ?>

    <?php // echo $form->field($model, 'p3OficioRecepcion') ?>

    <?php // echo $form->field($model, 'p3MemoriaTecnoAlumbrado') ?>

    <?php // echo $form->field($model, 'p3PlanoAlumbrado') ?>

    <?php // echo $form->field($model, 'p5RecepcionCivil') ?>

    <?php // echo $form->field($model, 'p3ActaTecnica') ?>

    <?php // echo $form->field($model, 'p3MemoriaTecnoCivil') ?>

    <?php // echo $form->field($model, 'p5PlanoObras') ?>

    <?php // echo $form->field($model, 'p3Donaciones') ?>

    <?php // echo $form->field($model, 'p3EscriturasPublica') ?>

    <?php // echo $form->field($model, 'p5PlanoPoligono') ?>

    <?php // echo $form->field($model, 'p6SolicitudPresidenteMuni') ?>

    <?php // echo $form->field($model, 'p6CertificadoCabildo') ?>

    <?php // echo $form->field($model, 'p6PlanoLotificacion') ?>

    <?php // echo $form->field($model, 'p6RecepcionJapac') ?>

    <?php // echo $form->field($model, 'p6ActaTecnica') ?>

    <?php // echo $form->field($model, 'p6MemoriaTecno') ?>

    <?php // echo $form->field($model, 'p6PlanoAgua') ?>

    <?php // echo $form->field($model, 'p6PlanoAlcantarillado') ?>

    <?php // echo $form->field($model, 'p6RecepcionCfe') ?>

    <?php // echo $form->field($model, 'p6ActaRecepcion') ?>

    <?php // echo $form->field($model, 'p6CartaCompromiso') ?>

    <?php // echo $form->field($model, 'p6MemoriaTecnoCfe') ?>

    <?php // echo $form->field($model, 'p6PlanoCfe') ?>

    <?php // echo $form->field($model, 'p6RecepcionAlumbrado') ?>

    <?php // echo $form->field($model, 'p6OficioRecepcion') ?>

    <?php // echo $form->field($model, 'p6MemoriaTecnoAlumbrado') ?>

    <?php // echo $form->field($model, 'p6PlanoAlumbrado') ?>

    <?php // echo $form->field($model, 'p6RecepcionCivil') ?>

    <?php // echo $form->field($model, 'p6ActaTecnicaObras') ?>

    <?php // echo $form->field($model, 'p6MemoriaTecnoCivil') ?>

    <?php // echo $form->field($model, 'p6PlanoObras') ?>

    <?php // echo $form->field($model, 'p6Donaciones') ?>

    <?php // echo $form->field($model, 'p6EscriturasPublica') ?>

    <?php // echo $form->field($model, 'p6PlanoPoligono') ?>

    <?php // echo $form->field($model, 'p7Recepcion') ?>

    <?php // echo $form->field($model, 'p1NorOrientePredio') ?>

    <?php // echo $form->field($model, 'p1SurOrientePredio') ?>

    <?php // echo $form->field($model, 'p1NorPonientePredio') ?>

    <?php // echo $form->field($model, 'p1SurPonientePredio') ?>

    <?php // echo $form->field($model, 'p2Expediente') ?>

    <?php // echo $form->field($model, 'p6Expediente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
