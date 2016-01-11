<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesEspectaculares */

$this->title = 'Crear Trámites Espectaculares';
$this->params['breadcrumbs'][] = ['label' => 'Trámites Espectaculares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-espectaculares-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
