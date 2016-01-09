<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesRegimenCondominio */

$this->title = 'Crear Tramites Regimen Condominio';
$this->params['breadcrumbs'][] = ['label' => 'Tramites Regimen Condominios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-regimen-condominio-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
