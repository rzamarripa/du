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
            'constanciaZonificacion',
            'contruccionNueva',
            // 'ampliacion',
            // 'remodelacion',
            // 'regularizacion',
            // 'aperturaEmpresa',
            // 'licUsoSuelo',
            // 'relotificacion',
            // 'autorizacionFracc',
            // 'regimenCondominio',
            // 'certificadoOcupacion',
            // 'otros',
            // 'especifique:ntext',
            // 'nombre',
            // 'direccion:ntext',
            // 'telefono',
            // 'correo',
            // 'firma',
            // 'usoActual',
            // 'usoSolicitado',
            // 'descripcionProceso:ntext',
            // 'cajonesEstacionamiento',
            // 'solicitud',
            // 'escrituras',
            // 'claveCatastral',
            // 'reciboDerechos',
            // 'estadoPredial',
            // 'croquisUbicacion',
            // 'alineamiento',
            // 'croquisActual',
            // 'copiaPropuestaRelitificacion',
            // 'predioCuadroConstruccion',
            // 'copiasProyecto',
            // 'constanciaZonificacion2',
            // 'calculoEstructural',
            // 'constanciaTramiteTelmex',
            // 'serviciosJapac',
            // 'servicioCFE',
            // 'dictamenAmbiental',
            // 'dictamenVial',
            // 'opinionBomberos',
            // 'dictamenPC',
            // 'dictamenINAH',
            // 'dictamenSEPyC',
            // 'anuenciaTortilla',
            // 'aprovacionAeronautica',
            // 'anuenciaVecinos',
            // 'polizaSeguro',
            // 'dictamenCultural',
            // 'otros1',
            // 'otros2',
            // 'otros3',
            // 'calle',
            // 'coloniaFraccionamiento',
            // 'numeroOficial:ntext',
            // 'numeroInterior',
            // 'poblado',
            // 'sindicatura',
            // 'claveCatastral2',
            // 'superficiePredio',
            // 'norte',
            // 'sur',
            // 'oriente',
            // 'poniente',
            // 'nombreSolicitante',
            // 'direccionSolicitante:ntext',
            // 'telefonoSolicitante',
            // 'correoSolicitante',
            // 'firmaSolicitante',
            // 'plantaBaja',
            // 'plantaAlta',
            // 'segundoNivel',
            // 'otros4',
            // 'plantaBaja1',
            // 'plantaAlta1',
            // 'plantaAlta2',
            // 'segundoNivel1',
            // 'otros5',
            // 'total',
            // 'total1',
            // 'observaciones:ntext',
            // 'sellos:ntext',
            // 'nombreGestor',
            // 'direccionGestor:ntext',
            // 'telefonoGestor',
            // 'correoGestor',
            // 'firmaGestor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
