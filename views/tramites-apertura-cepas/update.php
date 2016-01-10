<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesAperturaCepas */

//$this->title = 'Update Tramites Apertura Cepas: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámites Apertura Cepas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p1NombrePropietarios, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tramites-apertura-cepas-update">
<?php /*
    <h1><?= Html::encode($this->title) ?></h1>
*/?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
