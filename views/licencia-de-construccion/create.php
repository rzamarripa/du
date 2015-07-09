<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LicenciaDeConstruccion */

$this->title = 'Crear Licencia De Construccion';
$this->params['breadcrumbs'][] = ['label' => 'Licencia De Construccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="licencia-de-construccion-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
