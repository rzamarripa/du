<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesCertificadoOcupacion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámites Certificado Ocupación', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-certificado-ocupacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Volver', ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id, 'n' => 'v'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Imprimir', ['tramites-certificado-ocupacion/imprimir', 'id' => $model->id], ['class' => 'btn btn-primary', "target" => "_blank"]) ?>
    </p>
    <?php echo $this->render("_solicitante",["model"=>$model]); ?></div>
