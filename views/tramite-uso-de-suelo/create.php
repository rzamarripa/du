<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramiteUsoDeSuelo */

$this->title = 'Crear Trámite Uso De Suelo';
$this->params['breadcrumbs'][] = ['label' => 'Tramite Uso De Suelo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-uso-de-suelo-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
