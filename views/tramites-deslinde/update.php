<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesDeslinde */

//$this->title = 'Update Tramites Deslinde: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámites Deslindes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p1NombrePropietario, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tramites-deslinde-update">
<?php /*
    <h1><?= Html::encode($this->title) ?></h1> */
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
