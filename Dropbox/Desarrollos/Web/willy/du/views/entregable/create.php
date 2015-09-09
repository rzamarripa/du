<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Entregable */

$this->title = 'Crear Entregable';
$this->params['breadcrumbs'][] = ['label' => 'Entregables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entregable-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
