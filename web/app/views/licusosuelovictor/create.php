<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LicUsoSueloVictor */

$this->title = 'Crear Lic Uso Suelo Victor';
$this->params['breadcrumbs'][] = ['label' => 'Lic Uso Suelo Victors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lic-uso-suelo-victor-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
