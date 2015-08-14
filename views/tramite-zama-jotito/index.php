<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TramiteJotitoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tramite Zama Jotitos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-zama-jotito-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tramite Zama Jotito', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pasoActualId',
            'tipoTramiteId',
            'a',
            'b',
            // 'c',
            // 'd',
            // 'e',
            // 'f',
            // 'g',
            // 'h',
            // 'i',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
