<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesNumeroOficial */

//$this->title = 'Update Tramites Numero Oficial: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámites Número Oficial', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p1NombrePropietarios, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tramites-numero-oficial-update">
<?php /*
    <h1><?= Html::encode($this->title) ?></h1> */
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
