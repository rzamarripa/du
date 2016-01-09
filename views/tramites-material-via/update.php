<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesMaterialVia */

//$this->title = 'Update Tramites Material Via: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámites Material Vía', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tramites-material-via-update">
<?php /*
    <h1><?= Html::encode($this->title) ?></h1> */
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
