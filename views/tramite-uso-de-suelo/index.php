<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TramiteUsoDeSueloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tramite Uso De Suelos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-uso-de-suelo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tramite Uso De Suelo', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'telefono',
            // 'calle:ntext',
            // 'colonia',
            // 'loteNo',
            // 'manzanaNo',
            // 'claveCatastral',
            // 'usoActual',
            // 'usoSolicitado',
            // 'cajonesEstacionamiento',
            // 'pBConstruida',
            // 'pAConstruida',
            // 'otrosConstruida',
            // 'totalConstruida',
            // 'pBPorConstruir',
            // 'pAPorConstruir',
            // 'otrosPorConstruir',
            // 'totalPorConstruir',
            // 'observaciones',
            // 'solicitud',
            // 'escrituras',
            // 'requisitosTotales',
            // 'solicitudCorrecta',
            // 'documentosCorrectos',
            // 'pago',
            // 'imprimirLicencia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
