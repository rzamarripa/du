<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LicUsoSuelo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lic Uso Suelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lic-uso-suelo-view">

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
            'nombre',
            'direccion',
            'telefono',
            'calle',
            'colonia',
            'loteNo',
            'manzanaNo',
            'claveCatastral',
            'usoActual',
            'usoSolicitado',
            'cajonesEstacionamiento',
            'pBConstruida',
            'pAConstruida',
            'otrosConstruida',
            'totalConstruida',
            'pBPorConstruir',
            'pAPorConstruir',
            'otrosPorConstruir',
            'totalPorConstruir',
            'observaciones',
            'solicitud',
            'escrituras',
            'requisitosTotales',
            'solicitudCorrecta',
            'documentosCorrectos',
            'pago',
            'imprimirLicencia',
        ],
    ]) ?>

</div>
