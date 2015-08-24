<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TramiteZonificacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tramite Zonificacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-zonificacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tramite Zonificacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pasoActualId',
            'tipoTramiteId',
            'p1_nombreSolicitante',
            'p1_direccionSolicitante:ntext',
            // 'p1_telefonoSolicitante',
            // 'p1_correoSolicitante',
            // 'p1_firmaSolicitante',
            // 'p1_usoActual',
            // 'p1_usoSolicitado',
            // 'p1_descriProceso:ntext',
            // 'p1_noCajones',
            // 'p2_escrituras',
            // 'p2_reciboDerechos',
            // 'p2_croquisUbicacion',
            // 'p1_callePredio',
            // 'p1_coloniaPredio',
            // 'p1_numeroOficialPredio:ntext',
            // 'p1_numeroInteriorPredio',
            // 'p1_pobladoPredio',
            // 'p1_sindicaturaPredio',
            // 'p1_claveCatastralPredio',
            // 'p1_superficiePredio',
            // 'p1_nortePredio',
            // 'p1_surPredio',
            // 'p1_orientePredio',
            // 'p1_ponientePredio',
            // 'p1_nombrePropietario',
            // 'p1_direccionPropietario:ntext',
            // 'p1_telefonoPropietario',
            // 'p1_correoPropietario',
            // 'p1_firmaPropietario',
            // 'p1_plantabajaConstruida',
            // 'p1_plantaaltaConstruida',
            // 'p1_segundonivelConstruida',
            // 'p1_otrosConstruida',
            // 'p1_plantabajaXConstruir',
            // 'p1_plantaaltaXConstruir',
            // 'p1_segundonivelXConstruir',
            // 'p1_otrosXConstruir',
            // 'p1_totalConstruida',
            // 'p1_totalXConstruir',
            // 'p1_observaciones:ntext',
            // 'p1_nombreGestor',
            // 'p1_direccionGestor:ntext',
            // 'p1_telefonoGestor',
            // 'p1_correoGestor',
            // 'p1_firmaGestor',
            // 'p3_pago',
            // 'p3_escrituras',
            // 'p3_reciboDerechos',
            // 'p3_croquisUbicacion',
            // 'solicitud',
            // 'escrituras',
            // 'reciboDerechos',
            // 'croquisUbicacion',
            // 'p2_pago',
            // 'p4_imprimir',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
