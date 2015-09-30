<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesAnunciosTemporalesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-anuncios-temporales-search">

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

    <?php // echo $form->field($model, 'p1NoOficioTemporal') ?>

    <?php // echo $form->field($model, 'p1FechaTemporal') ?>

    <?php // echo $form->field($model, 'p1DirigidoTemporal') ?>

    <?php // echo $form->field($model, 'p1RelacionTemporal') ?>

    <?php // echo $form->field($model, 'p1FirmaTemporal') ?>

    <?php // echo $form->field($model, 'p2SolicitudTemporal') ?>

    <?php // echo $form->field($model, 'p3SolicitudTemporal') ?>

    <?php // echo $form->field($model, 'p4ReciboPagoTemporal') ?>

    <?php // echo $form->field($model, 'p4AnuncioTemporal') ?>

    <?php // echo $form->field($model, 'p4EventoTemporal') ?>

    <?php // echo $form->field($model, 'p4MedidasTemporal') ?>

    <?php // echo $form->field($model, 'p4CantidadTemporal') ?>

    <?php // echo $form->field($model, 'p4UbicacionTemporal') ?>

    <?php // echo $form->field($model, 'p4PropietarioTemporal') ?>

    <?php // echo $form->field($model, 'p4AñoTemporal') ?>

    <?php // echo $form->field($model, 'p4CostoTemporal') ?>

    <?php // echo $form->field($model, 'p4ObservacionesTemporal') ?>

    <?php // echo $form->field($model, 'p5SupervisorTemporal') ?>

    <?php // echo $form->field($model, 'p5ObservacionesTemporal') ?>

    <?php // echo $form->field($model, 'p6PermisoTemporal') ?>

    <?php // echo $form->field($model, 'p4SuperficieTemporal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
