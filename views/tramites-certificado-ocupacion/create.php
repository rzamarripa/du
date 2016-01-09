<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesCertificadoOcupacion */

$this->title = 'Crear Tramites Certificado Ocupacion';
$this->params['breadcrumbs'][] = ['label' => 'Tramites Certificado Ocupacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-certificado-ocupacion-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
