<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InformacionDocumentos */

//$this->title = 'Update InformacionDocumentos: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Información de Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NombreSolicitante, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="informacion-documentos-update">
	<?php /*
    <h1><?= Html::encode($model->p1NombreSolicitante) ?></h1> */
  ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>