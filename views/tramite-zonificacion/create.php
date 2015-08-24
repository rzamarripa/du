<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramiteZonificacion */

$this->title = 'Crear Tramite Zonificacion';
$this->params['breadcrumbs'][] = ['label' => 'Tramite Zonificacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-zonificacion-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
