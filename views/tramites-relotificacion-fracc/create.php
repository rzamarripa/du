<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesRelotificacionFracc */

$this->title = 'Crear Trámites Relotificación Fracc';
$this->params['breadcrumbs'][] = ['label' => 'Trámites Relotificación Fraccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-relotificacion-fracc-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
