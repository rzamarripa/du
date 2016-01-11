<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesRecepcion */

//$this->title = 'Update Tramites Recepcion: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámites Recepción', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p1NombreSolicitante, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualiza';
?>
<div class="tramites-recepcion-update">
<?php /*
    <h1><?= Html::encode($this->title) ?></h1>
*/?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
