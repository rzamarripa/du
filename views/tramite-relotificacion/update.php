<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteRelotificacion */

//$this->title = 'Actualizar Tramite Relotificacion: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámite Relotificación', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p1NombreSolicitante, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tramite-relotificacion-update">
<?php /*
    <h1><?= Html::encode($this->title) ?></h1>
*/?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
