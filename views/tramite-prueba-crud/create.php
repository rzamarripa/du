<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitePruebaCrud */

$this->title = 'Crear Tramite Prueba Crud';
$this->params['breadcrumbs'][] = ['label' => 'Tramite Prueba Cruds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-prueba-crud-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
