<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LicUsoSueloVictor */

$this->title = 'Update Lic Uso Suelo Victor: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lic Uso Suelo Victors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lic-uso-suelo-victor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
