<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesMaterialVia */

$this->title = 'Crear Tramites Material Via';
$this->params['breadcrumbs'][] = ['label' => 'Tramites Material Vias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-material-via-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
