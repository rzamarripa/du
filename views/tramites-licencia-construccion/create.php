<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramitesLicenciaConstruccion */

$this->title = 'Crear Tramites Licencia Construccion';
$this->params['breadcrumbs'][] = ['label' => 'Tramites Licencia Construccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-licencia-construccion-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
