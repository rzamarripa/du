<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EntregableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Entregables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entregable-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Entregable', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pasoActualId',
            'tipoTramiteId',
            'nombre',
            'direccion',
            // 'imprimirLicencia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
