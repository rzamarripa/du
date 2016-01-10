<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\InformacionDocumentos */

//$this->title = 'Crear Información de Documentos';
$this->params['breadcrumbs'][] = ['label' => 'Información de Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informacion-documentos-crear">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
		
</div>