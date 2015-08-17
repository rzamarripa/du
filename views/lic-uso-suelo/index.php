<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\LicUsoSueloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lic Uso Suelos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lic-uso-suelo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lic Uso Suelo', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'calle',
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
