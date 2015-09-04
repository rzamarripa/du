<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LicUsoSueloVictorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lic Uso Suelo Victors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lic-uso-suelo-victor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lic Uso Suelo Victor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pasoActualId',
            'tipoTramiteId',
            'fechaCreacion',
            'fechaModificacion',
            // 'observaciones',
            // 'estatusId',
            // 'nombre',
            // 'direccion:ntext',
            // 'p2DictamenImpactoAmbiental',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
