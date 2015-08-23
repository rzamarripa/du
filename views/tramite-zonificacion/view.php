<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteZonificacion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tramite Zonificacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-zonificacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pasoActualId',
            'tipoTramiteId',
            'constanciaZonificacion',
            'contruccionNueva',
            'ampliacion',
            'remodelacion',
            'regularizacion',
            'aperturaEmpresa',
            'licUsoSuelo',
            'relotificacion',
            'autorizacionFracc',
            'regimenCondominio',
            'certificadoOcupacion',
            'otros',
            'especifique:ntext',
            'nombre',
            'direccion:ntext',
            'telefono',
            'correo',
            'firma',
            'usoActual',
            'usoSolicitado',
            'descripcionProceso:ntext',
            'cajonesEstacionamiento',
            'solicitud',
            'escrituras',
            'claveCatastral',
            'reciboDerechos',
            'estadoPredial',
            'croquisUbicacion',
            'alineamiento',
            'croquisActual',
            'copiaPropuestaRelitificacion',
            'predioCuadroConstruccion',
            'copiasProyecto',
            'constanciaZonificacion2',
            'calculoEstructural',
            'constanciaTramiteTelmex',
            'serviciosJapac',
            'servicioCFE',
            'dictamenAmbiental',
            'dictamenVial',
            'opinionBomberos',
            'dictamenPC',
            'dictamenINAH',
            'dictamenSEPyC',
            'anuenciaTortilla',
            'aprovacionAeronautica',
            'anuenciaVecinos',
            'polizaSeguro',
            'dictamenCultural',
            'otros1',
            'otros2',
            'otros3',
            'calle',
            'coloniaFraccionamiento',
            'numeroOficial:ntext',
            'numeroInterior',
            'poblado',
            'sindicatura',
            'claveCatastral2',
            'superficiePredio',
            'norte',
            'sur',
            'oriente',
            'poniente',
            'nombreSolicitante',
            'direccionSolicitante:ntext',
            'telefonoSolicitante',
            'correoSolicitante',
            'firmaSolicitante',
            'plantaBaja',
            'plantaAlta',
            'segundoNivel',
            'otros4',
            'plantaBaja1',
            'plantaAlta1',
            'plantaAlta2',
            'segundoNivel1',
            'otros5',
            'total',
            'total1',
            'observaciones:ntext',
            'sellos:ntext',
            'nombreGestor',
            'direccionGestor:ntext',
            'telefonoGestor',
            'correoGestor',
            'firmaGestor',
        ],
    ]) ?>

</div>
