<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesAnunciosTemporales */

$this->title = 'Crear Tramites Anuncios Temporales';
$this->params['breadcrumbs'][] = ['label' => 'Tramites Anuncios Temporales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-anuncios-temporales-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
