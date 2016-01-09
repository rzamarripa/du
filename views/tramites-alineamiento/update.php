<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesAlineamiento */

//$this->title = 'Update Tramites Alineamiento: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámites Alineamientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p1NombrePropietario, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tramites-alineamiento-update">

	<?php /*
    <h1><?= Html::encode($model->p1NombreSolicitante) ?></h1> */
  ?>
  
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
