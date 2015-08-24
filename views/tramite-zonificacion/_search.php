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

    <?= $form->field($model, 'p1_nombreSolicitante') ?>

    <?= $form->field($model, 'p1_direccionSolicitante') ?>

    <?php // echo $form->field($model, 'p1_telefonoSolicitante') ?>

    <?php // echo $form->field($model, 'p1_correoSolicitante') ?>

    <?php // echo $form->field($model, 'p1_firmaSolicitante') ?>

    <?php // echo $form->field($model, 'p1_usoActual') ?>

    <?php // echo $form->field($model, 'p1_usoSolicitado') ?>

    <?php // echo $form->field($model, 'p1_descriProceso') ?>

    <?php // echo $form->field($model, 'p1_noCajones') ?>

    <?php // echo $form->field($model, 'p2_escrituras') ?>

    <?php // echo $form->field($model, 'p2_reciboDerechos') ?>

    <?php // echo $form->field($model, 'p2_croquisUbicacion') ?>

    <?php // echo $form->field($model, 'p1_callePredio') ?>

    <?php // echo $form->field($model, 'p1_coloniaPredio') ?>

    <?php // echo $form->field($model, 'p1_numeroOficialPredio') ?>

    <?php // echo $form->field($model, 'p1_numeroInteriorPredio') ?>

    <?php // echo $form->field($model, 'p1_pobladoPredio') ?>

    <?php // echo $form->field($model, 'p1_sindicaturaPredio') ?>

    <?php // echo $form->field($model, 'p1_claveCatastralPredio') ?>

    <?php // echo $form->field($model, 'p1_superficiePredio') ?>

    <?php // echo $form->field($model, 'p1_nortePredio') ?>

    <?php // echo $form->field($model, 'p1_surPredio') ?>

    <?php // echo $form->field($model, 'p1_orientePredio') ?>

    <?php // echo $form->field($model, 'p1_ponientePredio') ?>

    <?php // echo $form->field($model, 'p1_nombrePropietario') ?>

    <?php // echo $form->field($model, 'p1_direccionPropietario') ?>

    <?php // echo $form->field($model, 'p1_telefonoPropietario') ?>

    <?php // echo $form->field($model, 'p1_correoPropietario') ?>

    <?php // echo $form->field($model, 'p1_firmaPropietario') ?>

    <?php // echo $form->field($model, 'p1_plantabajaConstruida') ?>

    <?php // echo $form->field($model, 'p1_plantaaltaConstruida') ?>

    <?php // echo $form->field($model, 'p1_segundonivelConstruida') ?>

    <?php // echo $form->field($model, 'p1_otrosConstruida') ?>

    <?php // echo $form->field($model, 'p1_plantabajaXConstruir') ?>

    <?php // echo $form->field($model, 'p1_plantaaltaXConstruir') ?>

    <?php // echo $form->field($model, 'p1_segundonivelXConstruir') ?>

    <?php // echo $form->field($model, 'p1_otrosXConstruir') ?>

    <?php // echo $form->field($model, 'p1_totalConstruida') ?>

    <?php // echo $form->field($model, 'p1_totalXConstruir') ?>

    <?php // echo $form->field($model, 'p1_observaciones') ?>

    <?php // echo $form->field($model, 'p1_nombreGestor') ?>

    <?php // echo $form->field($model, 'p1_direccionGestor') ?>

    <?php // echo $form->field($model, 'p1_telefonoGestor') ?>

    <?php // echo $form->field($model, 'p1_correoGestor') ?>

    <?php // echo $form->field($model, 'p1_firmaGestor') ?>

    <?php // echo $form->field($model, 'p3_pago') ?>

    <?php // echo $form->field($model, 'p3_escrituras') ?>

    <?php // echo $form->field($model, 'p3_reciboDerechos') ?>

    <?php // echo $form->field($model, 'p3_croquisUbicacion') ?>

    <?php // echo $form->field($model, 'solicitud') ?>

    <?php // echo $form->field($model, 'escrituras') ?>

    <?php // echo $form->field($model, 'reciboDerechos') ?>

    <?php // echo $form->field($model, 'croquisUbicacion') ?>

    <?php // echo $form->field($model, 'p2_pago') ?>

    <?php // echo $form->field($model, 'p4_imprimir') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
