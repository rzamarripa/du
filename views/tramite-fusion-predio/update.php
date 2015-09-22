<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteFusionPredio */

//$this->title = 'Actualizar Tramite Fusion Predio: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tramite Fusion Predios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p1NombreSolicitante, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tramite-fusion-predio-update">
<?php /*
    <h1><?= Html::encode($this->title) ?></h1>
*/?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
