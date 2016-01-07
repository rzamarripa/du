<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteUsoDeSuelo */

//$this->title = 'Actualizar Tramite Uso De Suelo: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámite Licencia de Uso De Suelo', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p1NombreSolicitante, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tramite-uso-de-suelo-update">
<?php /*
    <h1><?= Html::encode($this->title) ?></h1>
*/?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
