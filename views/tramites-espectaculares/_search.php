<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesEspectacularesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-espectaculares-search">

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

    <?php // echo $form->field($model, 'p1NoOficio') ?>

    <?php // echo $form->field($model, 'p1Fecha') ?>

    <?php // echo $form->field($model, 'p1Dirigido') ?>

    <?php // echo $form->field($model, 'p1Relacion') ?>

    <?php // echo $form->field($model, 'p1Firma') ?>

    <?php // echo $form->field($model, 'p2Memoria') ?>

    <?php // echo $form->field($model, 'p2Poliza') ?>

    <?php // echo $form->field($model, 'p2Propiedad') ?>

    <?php // echo $form->field($model, 'p2PagoImpuesto') ?>

    <?php // echo $form->field($model, 'p2CartaAutorizacion') ?>

    <?php // echo $form->field($model, 'p2CartaCompromiso') ?>

    <?php // echo $form->field($model, 'p2LicenciaConstruccion') ?>

    <?php // echo $form->field($model, 'p2AutorizacionProteccionCivil') ?>

    <?php // echo $form->field($model, 'p3Memoria') ?>

    <?php // echo $form->field($model, 'p3Poliza') ?>

    <?php // echo $form->field($model, 'p3Propiedad') ?>

    <?php // echo $form->field($model, 'p3PagoImpuesto') ?>

    <?php // echo $form->field($model, 'p3CartaAutorizacion') ?>

    <?php // echo $form->field($model, 'p3CartaCompromiso') ?>

    <?php // echo $form->field($model, 'p3LicenciaConstruccion') ?>

    <?php // echo $form->field($model, 'p3AutorizacionProteccionCivil') ?>

    <?php // echo $form->field($model, 'p4ReciboPago') ?>

    <?php // echo $form->field($model, 'p5Supervisor') ?>

    <?php // echo $form->field($model, 'p5Observaciones') ?>

    <?php // echo $form->field($model, 'p6Permiso') ?>

    <?php // echo $form->field($model, 'p4Anuncio') ?>

    <?php // echo $form->field($model, 'p4Superficie') ?>

    <?php // echo $form->field($model, 'p4Evento') ?>

    <?php // echo $form->field($model, 'p4Medidas') ?>

    <?php // echo $form->field($model, 'p4Cantidad') ?>

    <?php // echo $form->field($model, 'p4Ubicacion') ?>

    <?php // echo $form->field($model, 'p4Propietario') ?>

    <?php // echo $form->field($model, 'p4Año') ?>

    <?php // echo $form->field($model, 'p4Observaciones') ?>

    <?php // echo $form->field($model, 'p4Costo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
