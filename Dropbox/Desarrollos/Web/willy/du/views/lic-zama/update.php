<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LicZama */

$this->title = 'Update Lic Zama: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lic Zamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lic-zama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
