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

    <?= $form->field($model, 'constanciaZonificacion') ?>

    <?= $form->field($model, 'contruccionNueva') ?>

    <?php // echo $form->field($model, 'ampliacion') ?>

    <?php // echo $form->field($model, 'remodelacion') ?>

    <?php // echo $form->field($model, 'regularizacion') ?>

    <?php // echo $form->field($model, 'aperturaEmpresa') ?>

    <?php // echo $form->field($model, 'licUsoSuelo') ?>

    <?php // echo $form->field($model, 'relotificacion') ?>

    <?php // echo $form->field($model, 'autorizacionFracc') ?>

    <?php // echo $form->field($model, 'regimenCondominio') ?>

    <?php // echo $form->field($model, 'certificadoOcupacion') ?>

    <?php // echo $form->field($model, 'otros') ?>

    <?php // echo $form->field($model, 'especifique') ?>

    <?php // echo $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'firma') ?>

    <?php // echo $form->field($model, 'usoActual') ?>

    <?php // echo $form->field($model, 'usoSolicitado') ?>

    <?php // echo $form->field($model, 'descripcionProceso') ?>

    <?php // echo $form->field($model, 'cajonesEstacionamiento') ?>

    <?php // echo $form->field($model, 'solicitud') ?>

    <?php // echo $form->field($model, 'escrituras') ?>

    <?php // echo $form->field($model, 'claveCatastral') ?>

    <?php // echo $form->field($model, 'reciboDerechos') ?>

    <?php // echo $form->field($model, 'estadoPredial') ?>

    <?php // echo $form->field($model, 'croquisUbicacion') ?>

    <?php // echo $form->field($model, 'alineamiento') ?>

    <?php // echo $form->field($model, 'croquisActual') ?>

    <?php // echo $form->field($model, 'copiaPropuestaRelitificacion') ?>

    <?php // echo $form->field($model, 'predioCuadroConstruccion') ?>

    <?php // echo $form->field($model, 'copiasProyecto') ?>

    <?php // echo $form->field($model, 'constanciaZonificacion2') ?>

    <?php // echo $form->field($model, 'calculoEstructural') ?>

    <?php // echo $form->field($model, 'constanciaTramiteTelmex') ?>

    <?php // echo $form->field($model, 'serviciosJapac') ?>

    <?php // echo $form->field($model, 'servicioCFE') ?>

    <?php // echo $form->field($model, 'dictamenAmbiental') ?>

    <?php // echo $form->field($model, 'dictamenVial') ?>

    <?php // echo $form->field($model, 'opinionBomberos') ?>

    <?php // echo $form->field($model, 'dictamenPC') ?>

    <?php // echo $form->field($model, 'dictamenINAH') ?>

    <?php // echo $form->field($model, 'dictamenSEPyC') ?>

    <?php // echo $form->field($model, 'anuenciaTortilla') ?>

    <?php // echo $form->field($model, 'aprovacionAeronautica') ?>

    <?php // echo $form->field($model, 'anuenciaVecinos') ?>

    <?php // echo $form->field($model, 'polizaSeguro') ?>

    <?php // echo $form->field($model, 'dictamenCultural') ?>

    <?php // echo $form->field($model, 'otros1') ?>

    <?php // echo $form->field($model, 'otros2') ?>

    <?php // echo $form->field($model, 'otros3') ?>

    <?php // echo $form->field($model, 'calle') ?>

    <?php // echo $form->field($model, 'coloniaFraccionamiento') ?>

    <?php // echo $form->field($model, 'numeroOficial') ?>

    <?php // echo $form->field($model, 'numeroInterior') ?>

    <?php // echo $form->field($model, 'poblado') ?>

    <?php // echo $form->field($model, 'sindicatura') ?>

    <?php // echo $form->field($model, 'claveCatastral2') ?>

    <?php // echo $form->field($model, 'superficiePredio') ?>

    <?php // echo $form->field($model, 'norte') ?>

    <?php // echo $form->field($model, 'sur') ?>

    <?php // echo $form->field($model, 'oriente') ?>

    <?php // echo $form->field($model, 'poniente') ?>

    <?php // echo $form->field($model, 'nombreSolicitante') ?>

    <?php // echo $form->field($model, 'direccionSolicitante') ?>

    <?php // echo $form->field($model, 'telefonoSolicitante') ?>

    <?php // echo $form->field($model, 'correoSolicitante') ?>

    <?php // echo $form->field($model, 'firmaSolicitante') ?>

    <?php // echo $form->field($model, 'plantaBaja') ?>

    <?php // echo $form->field($model, 'plantaAlta') ?>

    <?php // echo $form->field($model, 'segundoNivel') ?>

    <?php // echo $form->field($model, 'otros4') ?>

    <?php // echo $form->field($model, 'plantaBaja1') ?>

    <?php // echo $form->field($model, 'plantaAlta1') ?>

    <?php // echo $form->field($model, 'plantaAlta2') ?>

    <?php // echo $form->field($model, 'segundoNivel1') ?>

    <?php // echo $form->field($model, 'otros5') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'total1') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'sellos') ?>

    <?php // echo $form->field($model, 'nombreGestor') ?>

    <?php // echo $form->field($model, 'direccionGestor') ?>

    <?php // echo $form->field($model, 'telefonoGestor') ?>

    <?php // echo $form->field($model, 'correoGestor') ?>

    <?php // echo $form->field($model, 'firmaGestor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
