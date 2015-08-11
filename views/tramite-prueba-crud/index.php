<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TramitePruebaCrudSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tramite Prueba Cruds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-prueba-crud-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tramite Prueba Crud', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pasoActualId',
            'tipoTramiteId',
            'Nombre',
            'Apellido',
            // 'Direccion',
            // 'Celular',
            // 'Empresa',
            // 'Puesto',
            // 'Telefono',
            // 'Extension',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
