<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesLicenciaConstruccion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tramites Licencia Construccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-licencia-construccion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php echo $this->render("_solicitante",["model"=>$model]); ?></div>
