<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesCertificadoOcupacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-certificado-ocupacion-search">

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

    <?php // echo $form->field($model, 'p1NombrePropietario') ?>

    <?php // echo $form->field($model, 'p1DireccionPropietario') ?>

    <?php // echo $form->field($model, 'p1TelefonoPropietario') ?>

    <?php // echo $form->field($model, 'p1CallePredio') ?>

    <?php // echo $form->field($model, 'p1FraccColoniaPredio') ?>

    <?php // echo $form->field($model, 'p1LotePredio') ?>

    <?php // echo $form->field($model, 'p1ManzanaPredio') ?>

    <?php // echo $form->field($model, 'p1ClaveCatastralPredio') ?>

    <?php // echo $form->field($model, 'p1NortePredio') ?>

    <?php // echo $form->field($model, 'p1SurPredio') ?>

    <?php // echo $form->field($model, 'p1OrientePredio') ?>

    <?php // echo $form->field($model, 'p1PonientePredio') ?>

    <?php // echo $form->field($model, 'p1PlantaBajaConstruida') ?>

    <?php // echo $form->field($model, 'p1PlantaAltaConstruida') ?>

    <?php // echo $form->field($model, 'p1OtrosConstruida') ?>

    <?php // echo $form->field($model, 'p1TotalConstruida') ?>

    <?php // echo $form->field($model, 'p1PlantaBajaXConstruir') ?>

    <?php // echo $form->field($model, 'p1PlantaAltaXConstruir') ?>

    <?php // echo $form->field($model, 'p1OtrosXConstruir') ?>

    <?php // echo $form->field($model, 'p1TotalXConstruir') ?>

    <?php // echo $form->field($model, 'p1UsoActual') ?>

    <?php // echo $form->field($model, 'p1UsoSolicitado') ?>

    <?php // echo $form->field($model, 'p1Cajones') ?>

    <?php // echo $form->field($model, 'p1Observaciones') ?>

    <?php // echo $form->field($model, 'p2PlanoAutorizado') ?>

    <?php // echo $form->field($model, 'p2Licencia') ?>

    <?php // echo $form->field($model, 'p2Pago') ?>

    <?php // echo $form->field($model, 'p2Vitacora') ?>

    <?php // echo $form->field($model, 'p4Resolutivo') ?>

    <?php // echo $form->field($model, 'p3Supervision') ?>

    <?php // echo $form->field($model, 'p3NombreSupervisor') ?>

    <?php // echo $form->field($model, 'p3Observaciones') ?>

    <?php // echo $form->field($model, 'p3Expediente') ?>

    <?php // echo $form->field($model, 'p5PlanoAutorizado') ?>

    <?php // echo $form->field($model, 'p5Licencia') ?>

    <?php // echo $form->field($model, 'p5Pago') ?>

    <?php // echo $form->field($model, 'p5Vitacora') ?>

    <?php // echo $form->field($model, 'p5Expediente') ?>

    <?php // echo $form->field($model, 'p6Certificado') ?>

    <?php // echo $form->field($model, 'p7EnvioExpediente') ?>

    <?php // echo $form->field($model, 'p7Observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reemplazar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
