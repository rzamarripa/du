<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramiteFusionPredio */

$this->title = 'Crear Trámite Fusión de Predio';
$this->params['breadcrumbs'][] = ['label' => 'Trámite Fusión Predios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-fusion-predio-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
