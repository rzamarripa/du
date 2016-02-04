<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesLicenciaConstruccionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-licencia-construccion-search">

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

    <?php // echo $form->field($model, 'folio') ?>

    <?php // echo $form->field($model, 'ciclo') ?>

    <?php // echo $form->field($model, 'p1NombrePropietarios') ?>

    <?php // echo $form->field($model, 'p1DireccionPropietarios') ?>

    <?php // echo $form->field($model, 'p1TelefonoPropietarios') ?>

    <?php // echo $form->field($model, 'p1NombreDRO') ?>

    <?php // echo $form->field($model, 'p1NumeroDRO') ?>

    <?php // echo $form->field($model, 'p1TelefonoDRO') ?>

    <?php // echo $form->field($model, 'p1CallePredio') ?>

    <?php // echo $form->field($model, 'p1ColoniaPredio') ?>

    <?php // echo $form->field($model, 'p1LotePredio') ?>

    <?php // echo $form->field($model, 'p1ManzanaPredio') ?>

    <?php // echo $form->field($model, 'p1ClaveCatastralPredio') ?>

    <?php // echo $form->field($model, 'p1NorteLocalizacion') ?>

    <?php // echo $form->field($model, 'p1SurLocalizacion') ?>

    <?php // echo $form->field($model, 'p1OrienteLocalizacion') ?>

    <?php // echo $form->field($model, 'p1PonienteLocalizacion') ?>

    <?php // echo $form->field($model, 'p1PlantaBajaConstruida') ?>

    <?php // echo $form->field($model, 'p1PlantaAltaConstruida') ?>

    <?php // echo $form->field($model, 'p1OtrosConstruida') ?>

    <?php // echo $form->field($model, 'p1TotalConstruida') ?>

    <?php // echo $form->field($model, 'p1PlantaBajaXConstruir') ?>

    <?php // echo $form->field($model, 'p1PlantaAltaXConstruir') ?>

    <?php // echo $form->field($model, 'p1OtrosXConstruir') ?>

    <?php // echo $form->field($model, 'p1TotalXConstruir') ?>

    <?php // echo $form->field($model, 'p1Observaciones') ?>

    <?php // echo $form->field($model, 'p2CopiaEscritura') ?>

    <?php // echo $form->field($model, 'p2PlanoManzanero') ?>

    <?php // echo $form->field($model, 'p2CasaHabitacionAlineamientoNumeroOficial') ?>

    <?php // echo $form->field($model, 'p2CasaHabitacionCroquis') ?>

    <?php // echo $form->field($model, 'p2CasaHabitacionPredial') ?>

    <?php // echo $form->field($model, 'p2CasaHabitacionEscrituras') ?>

    <?php // echo $form->field($model, 'p2ConstruccionCasaHabitacionAlineamiento') ?>

    <?php // echo $form->field($model, 'p2ConstruccionCasaHabitacionPlano') ?>

    <?php // echo $form->field($model, 'p2ConstruccionCasaHabitacionPredial') ?>

    <?php // echo $form->field($model, 'p2ConstruccionCasaHabitacionEscrituras') ?>

    <?php // echo $form->field($model, 'p2ConstruccionCasaHabitacionBitacora') ?>

    <?php // echo $form->field($model, 'p2Solicitud') ?>

    <?php // echo $form->field($model, 'p2ConstruccionCasaHabitacionSolicitud') ?>

    <?php // echo $form->field($model, 'p2ConstruccionCasaHabitacionProyecto') ?>

    <?php // echo $form->field($model, 'p2ConstruccionLocalAlineamiento') ?>

    <?php // echo $form->field($model, 'p2ConstruccionLocalPlano') ?>

    <?php // echo $form->field($model, 'p2ConstruccionLocalLicencia') ?>

    <?php // echo $form->field($model, 'p2ConstruccionLocalPredial') ?>

    <?php // echo $form->field($model, 'p2ConstruccionLocalEscrituras') ?>

    <?php // echo $form->field($model, 'p2ConstruccionLocalSolicitud') ?>

    <?php // echo $form->field($model, 'p2ConstruccionLocalBitacora') ?>

    <?php // echo $form->field($model, 'p2ConstruccionLocalProyecto') ?>

    <?php // echo $form->field($model, 'p2BardasAlineamiento') ?>

    <?php // echo $form->field($model, 'p2BardasMarcarBarda') ?>

    <?php // echo $form->field($model, 'p2BardasPredial') ?>

    <?php // echo $form->field($model, 'p2BardasEscrituras') ?>

    <?php // echo $form->field($model, 'p2BardasAltura') ?>

    <?php // echo $form->field($model, 'p2RemodelacionAlineamiento') ?>

    <?php // echo $form->field($model, 'p2RemodelacionCroquis') ?>

    <?php // echo $form->field($model, 'p2RemodelacionPresupuesto') ?>

    <?php // echo $form->field($model, 'p2RemodelacionPredial') ?>

    <?php // echo $form->field($model, 'p2RemodelacionEscrituras') ?>

    <?php // echo $form->field($model, 'p2RemodelacionLicencia') ?>

    <?php // echo $form->field($model, 'p2BanquetasPredial') ?>

    <?php // echo $form->field($model, 'p2BanquetasCroquis') ?>

    <?php // echo $form->field($model, 'p2ProrrogaPermiso') ?>

    <?php // echo $form->field($model, 'p2ProrrogaRecibo') ?>

    <?php // echo $form->field($model, 'p2ProrrogaPlano') ?>

    <?php // echo $form->field($model, 'p2ProrrogaSolicitud') ?>

    <?php // echo $form->field($model, 'p2PermisoSolicitud') ?>

    <?php // echo $form->field($model, 'p2DemolicionEscrituras') ?>

    <?php // echo $form->field($model, 'p2DemolicionPredial') ?>

    <?php // echo $form->field($model, 'p2DemolicionPlano') ?>

    <?php // echo $form->field($model, 'p3Resolutivo') ?>

    <?php // echo $form->field($model, 'p4Escrituras') ?>

    <?php // echo $form->field($model, 'p4Solicitud') ?>

    <?php // echo $form->field($model, 'p4PlanoManzanero') ?>

    <?php // echo $form->field($model, 'p4CasaHabitacionAlineamientoNumeroOficial') ?>

    <?php // echo $form->field($model, 'p4CasaHabitacionCroquis') ?>

    <?php // echo $form->field($model, 'p4CasaHabitacionPredial') ?>

    <?php // echo $form->field($model, 'p4CasaHabitacionEscrituras') ?>

    <?php // echo $form->field($model, 'p4ConstruccionCasaHabitacionAlineamiento') ?>

    <?php // echo $form->field($model, 'p4ConstruccionCasaHabitacionPlano') ?>

    <?php // echo $form->field($model, 'p4ConstruccionCasaHabitacionPredial') ?>

    <?php // echo $form->field($model, 'p4ConstruccionCasaHabitacionEscrituras') ?>

    <?php // echo $form->field($model, 'p4ConstruccionCasaHabitacionBitacora') ?>

    <?php // echo $form->field($model, 'p4ConstruccionCasaHabitacionSolicitud') ?>

    <?php // echo $form->field($model, 'p4ConstruccionCasaHabitacionProyecto') ?>

    <?php // echo $form->field($model, 'p4ConstruccionLocalAlineamiento') ?>

    <?php // echo $form->field($model, 'p4ConstruccionLocalPlano') ?>

    <?php // echo $form->field($model, 'p4ConstruccionLocalLicencia') ?>

    <?php // echo $form->field($model, 'p4ConstruccionLocalPredial') ?>

    <?php // echo $form->field($model, 'p4ConstruccionLocalEscrituras') ?>

    <?php // echo $form->field($model, 'p4ConstruccionLocalSolicitud') ?>

    <?php // echo $form->field($model, 'p4ConstruccionLocalBitacora') ?>

    <?php // echo $form->field($model, 'p4ConstruccionLocalProyecto') ?>

    <?php // echo $form->field($model, 'p4BardasAlineamiento') ?>

    <?php // echo $form->field($model, 'p4BardasMarcarBarda') ?>

    <?php // echo $form->field($model, 'p4BardasPredial') ?>

    <?php // echo $form->field($model, 'p4BardasEscrituras') ?>

    <?php // echo $form->field($model, 'p4BardasAltura') ?>

    <?php // echo $form->field($model, 'p4RemodelacionAlineamiento') ?>

    <?php // echo $form->field($model, 'p4RemodelacionCroquis') ?>

    <?php // echo $form->field($model, 'p4RemodelacionPresupuesto') ?>

    <?php // echo $form->field($model, 'p4RemodelacionPredial') ?>

    <?php // echo $form->field($model, 'p4RemodelacionEscrituras') ?>

    <?php // echo $form->field($model, 'p4RemodelacionLicencia') ?>

    <?php // echo $form->field($model, 'p4BanquetasPredial') ?>

    <?php // echo $form->field($model, 'p4BanquetasCroquis') ?>

    <?php // echo $form->field($model, 'p4ProrrogaPermiso') ?>

    <?php // echo $form->field($model, 'p4ProrrogaRecibo') ?>

    <?php // echo $form->field($model, 'p4ProrrogaPlano') ?>

    <?php // echo $form->field($model, 'p4ProrrogaSolicitud') ?>

    <?php // echo $form->field($model, 'p4PermisoSolicitud') ?>

    <?php // echo $form->field($model, 'p4DemolicionEscrituras') ?>

    <?php // echo $form->field($model, 'p4DemolicionPredial') ?>

    <?php // echo $form->field($model, 'p4DemolicionPlano') ?>

    <?php // echo $form->field($model, 'p5Licencia') ?>

    <?php // echo $form->field($model, 'p6EnvioExpediente') ?>

    <?php // echo $form->field($model, 'p6Observaciones') ?>

    <?php // echo $form->field($model, 'p1Concepto') ?>

    <?php // echo $form->field($model, 'p1Tipo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
