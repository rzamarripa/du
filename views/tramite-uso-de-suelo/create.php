<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramiteUsoDeSuelo */

$this->title = 'Crear Trámite Licencia de Uso De Suelo';
$this->params['breadcrumbs'][] = ['label' => 'Trámite Licencia de Uso De Suelo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-uso-de-suelo-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
