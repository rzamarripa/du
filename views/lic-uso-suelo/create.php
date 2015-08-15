<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LicUsoSuelo */

$this->title = 'Crear Lic Uso Suelo';
$this->params['breadcrumbs'][] = ['label' => 'Lic Uso Suelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lic-uso-suelo-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
