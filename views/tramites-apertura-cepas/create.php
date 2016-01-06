<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesAperturaCepas */

$this->title = 'Crear Tramites Apertura Cepas';
$this->params['breadcrumbs'][] = ['label' => 'Tramites Apertura Cepas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-apertura-cepas-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>