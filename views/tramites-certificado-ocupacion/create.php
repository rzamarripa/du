<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesCertificadoOcupacion */

$this->title = 'Crear Trámites Certificado Ocupación';
$this->params['breadcrumbs'][] = ['label' => 'Trámites Certificado Ocupación', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-certificado-ocupacion-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
