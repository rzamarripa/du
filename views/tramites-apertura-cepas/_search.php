<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesAperturaCepasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-apertura-cepas-search">

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

    <?php // echo $form->field($model, 'p1Solicitud') ?>

    <?php // echo $form->field($model, 'p1DirectorResponsable') ?>

    <?php // echo $form->field($model, 'p1PlanoTrayectoria') ?>

    <?php // echo $form->field($model, 'p1ProgramaObra') ?>

    <?php // echo $form->field($model, 'p1PresupuestoObra') ?>

    <?php // echo $form->field($model, 'p1AnuenciaVecinos') ?>

    <?php // echo $form->field($model, 'p1Fianza') ?>

    <?php // echo $form->field($model, 'p1Pago') ?>

    <?php // echo $form->field($model, 'p2Supervision') ?>

    <?php // echo $form->field($model, 'p2NombreSupervisor') ?>

    <?php // echo $form->field($model, 'p2Observaciones') ?>

    <?php // echo $form->field($model, 'p2Expediente') ?>

    <?php // echo $form->field($model, 'p3Resolutivo') ?>

    <?php // echo $form->field($model, 'p3Pago') ?>

    <?php // echo $form->field($model, 'p4Solicitud') ?>

    <?php // echo $form->field($model, 'p4DirectorResponsable') ?>

    <?php // echo $form->field($model, 'p4PlanoTrayectoria') ?>

    <?php // echo $form->field($model, 'p4ProgramaObra') ?>

    <?php // echo $form->field($model, 'p4PresupuestoObra') ?>

    <?php // echo $form->field($model, 'p4AnuenciaVecinos') ?>

    <?php // echo $form->field($model, 'p4Fianza') ?>

    <?php // echo $form->field($model, 'p4PagoDerechos') ?>

    <?php // echo $form->field($model, 'p4Expediente') ?>

    <?php // echo $form->field($model, 'p4Pago') ?>

    <?php // echo $form->field($model, 'p4Resolutivo') ?>

    <?php // echo $form->field($model, 'p5AperturasCepas') ?>

    <?php // echo $form->field($model, 'p6EnvioExpediente') ?>

    <?php // echo $form->field($model, 'p6Observaciones') ?>

    <?php // echo $form->field($model, 'p1NombrePropietarios') ?>

    <?php // echo $form->field($model, 'p1DireccionPropietarios') ?>

    <?php // echo $form->field($model, 'p1TelefonoPropietarios') ?>

    <?php // echo $form->field($model, 'p1ClaveCatastralPredio') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reemplazar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
