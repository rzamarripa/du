<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesCertificadoOcupacion */

//$this->title = 'Update Trámites Certificado Ocupación: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámites Certificado Ocupación', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tramites-certificado-ocupacion-update">
	<?php /*
    <h1><?= Html::encode($model->p1NombreSolicitante) ?></h1> */
  ?>
  
      <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
