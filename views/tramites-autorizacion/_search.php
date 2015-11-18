<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesAutorizacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-autorizacion-search">

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

    <?php // echo $form->field($model, 'p2Constancia') ?>

    <?php // echo $form->field($model, 'p3Supervisor') ?>

    <?php // echo $form->field($model, 'p3Observaciones') ?>

    <?php // echo $form->field($model, 'p4Constancia') ?>

    <?php // echo $form->field($model, 'p5TituloPropiedad') ?>

    <?php // echo $form->field($model, 'p5PlanoLocalizacion') ?>

    <?php // echo $form->field($model, 'p5PlanoTopogra') ?>

    <?php // echo $form->field($model, 'p5PlanoLotificacionVialidad') ?>

    <?php // echo $form->field($model, 'p6TituloPropiedad') ?>

    <?php // echo $form->field($model, 'p6PlanoLocalizacion') ?>

    <?php // echo $form->field($model, 'p6PlanoTopogra') ?>

    <?php // echo $form->field($model, 'p6PlanoLotificacionVialidad') ?>

    <?php // echo $form->field($model, 'p7Aprobacion') ?>

    <?php // echo $form->field($model, 'p8Solicitud') ?>

    <?php // echo $form->field($model, 'p8AcrediteCaracter') ?>

    <?php // echo $form->field($model, 'p8ActaConstitutiva') ?>

    <?php // echo $form->field($model, 'p8LibertadGravamen') ?>

    <?php // echo $form->field($model, 'p8Minuta') ?>

    <?php // echo $form->field($model, 'p8PlanoNomenclatura') ?>

    <?php // echo $form->field($model, 'p8FactibilidadJapac') ?>

    <?php // echo $form->field($model, 'p8FactibilidadCFE') ?>

    <?php // echo $form->field($model, 'p8EstudiosHidrologico') ?>

    <?php // echo $form->field($model, 'p8Alumbrado') ?>

    <?php // echo $form->field($model, 'p8ProteccionCivil') ?>

    <?php // echo $form->field($model, 'p8Vialidad') ?>

    <?php // echo $form->field($model, 'p9Solicitud') ?>

    <?php // echo $form->field($model, 'p9AcrediteCaracter') ?>

    <?php // echo $form->field($model, 'p9ActaConstitutiva') ?>

    <?php // echo $form->field($model, 'p9LibertadGravamen') ?>

    <?php // echo $form->field($model, 'p9Minuta') ?>

    <?php // echo $form->field($model, 'p9PlanoNomenclatura') ?>

    <?php // echo $form->field($model, 'p9FactibilidadJapac') ?>

    <?php // echo $form->field($model, 'p9FactibilidadCFE') ?>

    <?php // echo $form->field($model, 'p9EstudiosHidrologico') ?>

    <?php // echo $form->field($model, 'p9Alumbrado') ?>

    <?php // echo $form->field($model, 'p9ProteccionCivil') ?>

    <?php // echo $form->field($model, 'p9Vialidad') ?>

    <?php // echo $form->field($model, 'p10Autorizacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
