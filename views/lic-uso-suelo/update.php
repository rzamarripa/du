<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LicUsoSuelo */

$this->title = 'Update Lic Uso Suelo: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lic Uso Suelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lic-uso-suelo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
