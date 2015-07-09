<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\LicenciaDeConstruccionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Licencia De Construccions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="licencia-de-construccion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Licencia De Construccion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pasoActualId',
            'tipoTramiteId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
