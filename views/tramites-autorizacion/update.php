<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesAutorizacion */

//$this->title = 'Update Tramites Autorizacion: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámites Autorización', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p1NombreSolicitante, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tramites-autorizacion-update">
<?php /*
    <h1><?= Html::encode($this->title) ?></h1>
*/?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
