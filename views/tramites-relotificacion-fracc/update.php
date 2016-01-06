<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesRelotificacionFracc */

//$this->title = 'Update Tramites Relotificacion Fracc: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámites Relotificación Fraccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p1NombreSolicitante, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tramites-relotificacion-fracc-update">
<?php /*
    <h1><?= Html::encode($this->title) ?></h1>
*/?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
