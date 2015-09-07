<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteRelotificacion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tramite Relotificacion', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-relotificacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro que desea ELIMINAR este registro ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php echo $this->render("_solicitante",["model"=>$model]); ?></div>
