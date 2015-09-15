<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteFusionPredio */

//$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tramite Fusion Predios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-fusion-predio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

        <?= Html::a('Volver', ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id, 'n' => 'v'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Imprimir', ['tramite-fusion-predio/imprimir', 'id' => $model->id], ['class' => 'btn btn-primary', "target" => "_blank"]) ?>
	    
	    <?php /*
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro que desea ELIMINAR este registro ?',
                'method' => 'post',
            ],
        ]) ?>
        */?>
    </p>
    <?php echo $this->render("_solicitante",["model"=>$model]); ?></div>
