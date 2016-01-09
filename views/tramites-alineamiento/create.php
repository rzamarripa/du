<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesAlineamiento */

$this->title = 'Crear Trámites Alineamiento';
$this->params['breadcrumbs'][] = ['label' => 'Trámites Alineamiento', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-alineamiento-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
