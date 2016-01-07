<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesNumeroOficial */

$this->title = 'Crear Tramites Numero Oficial';
$this->params['breadcrumbs'][] = ['label' => 'Tramites Numero Oficials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-numero-oficial-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
