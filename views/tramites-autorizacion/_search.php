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

    <?php // echo $form->field($model, 'p5AnteproyectoLotificacionVialidad') ?>

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

    <?php // echo $form->field($model, 'p1NorOrientePredio') ?>

    <?php // echo $form->field($model, 'p1SurOrientePredio') ?>

    <?php // echo $form->field($model, 'p1NorPonientePredio') ?>

    <?php // echo $form->field($model, 'p1SurPonientePredio') ?>

    <?php // echo $form->field($model, 'p3Expediente') ?>

    <?php // echo $form->field($model, 'p6Comentario') ?>

    <?php // echo $form->field($model, 'p7PlanoLotificacionVialidad') ?>

    <?php // echo $form->field($model, 'P11MemoriaFraccionamiento') ?>

    <?php // echo $form->field($model, 'p11EstudioMecanicaEstructura') ?>

    <?php // echo $form->field($model, 'p11MemoriaAguaAlcantarillado') ?>

    <?php // echo $form->field($model, 'p11MemoriaElectrificacion') ?>

    <?php // echo $form->field($model, 'p11MemoriaInfraestructura') ?>

    <?php // echo $form->field($model, 'p11MemoriaHidrologico') ?>

    <?php // echo $form->field($model, 'p11Presupuesto') ?>

    <?php // echo $form->field($model, 'p11EstimarPlazo') ?>

    <?php // echo $form->field($model, 'p11PagoSupervision') ?>

    <?php // echo $form->field($model, 'p11GarantiaCumplimiento') ?>

    <?php // echo $form->field($model, 'p11OtorgarEscrituras') ?>

    <?php // echo $form->field($model, 'p11PlanoLocalizacion') ?>

    <?php // echo $form->field($model, 'p11PlanoTopografico') ?>

    <?php // echo $form->field($model, 'p11PlanoLotificacion') ?>

    <?php // echo $form->field($model, 'p11PlanoTrazo') ?>

    <?php // echo $form->field($model, 'p11PlanoPerfiles') ?>

    <?php // echo $form->field($model, 'p11PlanoAguaPotable') ?>

    <?php // echo $form->field($model, 'p11PlanoElectrificacion') ?>

    <?php // echo $form->field($model, 'p11PlanoAlumbrado') ?>

    <?php // echo $form->field($model, 'p11PlanoArborizacion') ?>

    <?php // echo $form->field($model, 'p11ResolucionImpactoAmbiental') ?>

    <?php // echo $form->field($model, 'p11ProyectoVialTransporte') ?>

    <?php // echo $form->field($model, 'P12MemoriaFraccionamiento') ?>

    <?php // echo $form->field($model, 'p12EstudioMecanicaEstructura') ?>

    <?php // echo $form->field($model, 'p12MemoriaAguaAlcantarillado') ?>

    <?php // echo $form->field($model, 'p12MemoriaElectrificacion') ?>

    <?php // echo $form->field($model, 'p12MemoriaInfraestructura') ?>

    <?php // echo $form->field($model, 'p12MemoriaHidrologico') ?>

    <?php // echo $form->field($model, 'p12Presupuesto') ?>

    <?php // echo $form->field($model, 'p12EstimarPlazo') ?>

    <?php // echo $form->field($model, 'p12PagoSupervision') ?>

    <?php // echo $form->field($model, 'p12GarantiaCumplimiento') ?>

    <?php // echo $form->field($model, 'p12OtorgarEscrituras') ?>

    <?php // echo $form->field($model, 'p12PlanoLocalizacion') ?>

    <?php // echo $form->field($model, 'p12PlanoTopografico') ?>

    <?php // echo $form->field($model, 'p12PlanoLotificacion') ?>

    <?php // echo $form->field($model, 'p12PlanoTrazo') ?>

    <?php // echo $form->field($model, 'p12PlanoPerfiles') ?>

    <?php // echo $form->field($model, 'p12PlanoAguaPotable') ?>

    <?php // echo $form->field($model, 'p12PlanoElectrificacion') ?>

    <?php // echo $form->field($model, 'p12PlanoAlumbrado') ?>

    <?php // echo $form->field($model, 'p12PlanoArborizacion') ?>

    <?php // echo $form->field($model, 'p12ResolucionImpactoAmbiental') ?>

    <?php // echo $form->field($model, 'p12ProyectoVialTransporte') ?>

    <?php // echo $form->field($model, 'p9Notas') ?>

    <?php // echo $form->field($model, 'p9Secretaria') ?>

    <?php // echo $form->field($model, 'p9FechaEnvio') ?>

    <?php // echo $form->field($model, 'p10MandarProyecto') ?>

    <?php // echo $form->field($model, 'p7SuperficieGeneral') ?>

    <?php // echo $form->field($model, 'p7Vivienda') ?>

    <?php // echo $form->field($model, 'p7Comercial') ?>

    <?php // echo $form->field($model, 'p7Donacion') ?>

    <?php // echo $form->field($model, 'p7AreasVerdes') ?>

    <?php // echo $form->field($model, 'p7Vialidad') ?>

    <?php // echo $form->field($model, 'p7Reserva') ?>

    <?php // echo $form->field($model, 'p7Otro') ?>

    <?php // echo $form->field($model, 'p7NumLotes') ?>

    <?php // echo $form->field($model, 'p7DensidadVivienda') ?>

    <?php // echo $form->field($model, 'p7DonacionRequerida') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reemplazar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
