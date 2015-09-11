<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LicZama */

$this->title = 'Crear Lic Zama';
$this->params['breadcrumbs'][] = ['label' => 'Lic Zamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lic-zama-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
