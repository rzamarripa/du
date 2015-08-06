<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TramiteNuevoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tramite Nuevos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-nuevo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tramite Nuevo', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'edad',
            // 'telefono',
            // 'correo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
