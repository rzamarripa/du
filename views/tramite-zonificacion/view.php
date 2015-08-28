<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteZonificacion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trámite Zonificación', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-zonificacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    <?php echo $this->render("_solicitante",["model"=>$model]); ?>
<?php /*
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pasoActualId',
            'tipoTramiteId',
            'p1NombreSolicitante',
            'p1DireccionSolicitante:ntext',
            'p1TelefonoSolicitante',
            'p1CorreoSolicitante',
            'p1FirmaSolicitante',
            'p1UsoActual',
            'p1UsoSolicitado',
            'p1DescriProceso:ntext',
            'p1NoCajones',
            'p2Escrituras',
            'p2ReciboDerechos',
            'p2CroquisUbicacion',
            'p1CallePredio',
            'p1ColoniaPredio',
            'p1NumeroOficialPredio:ntext',
            'p1NumeroInteriorPredio',
            'p1PobladoPredio',
            'p1SindicaturaPredio',
            'p1ClaveCatastralPredio',
            'p1SuperficiePredio',
            'p1NortePredio',
            'p1SurPredio',
            'p1OrientePredio',
            'p1PonientePredio',
            'p1NombrePropietario',
            'p1DireccionPropietario:ntext',
            'p1TelefonoPropietario',
            'p1CorreoPropietario',
            'p1FirmaPropietario',
            'p1PlantabajaConstruida',
            'p1PlantaaltaConstruida',
            'p1SegundonivelConstruida',
            'p1OtrosConstruida',
            'p1PlantabajaXConstruir',
            'p1PlantaaltaXConstruir',
            'p1SegundonivelXConstruir',
            'p1OtrosXConstruir',
            'p1TotalConstruida',
            'p1TotalXConstruir',
            'p1Observaciones:ntext',
            'p1NombreGestor',
            'p1DireccionGestor:ntext',
            'p1TelefonoGestor',
            'p1CorreoGestor',
            'p1FirmaGestor',
            'p3Pago',
            'p3Escrituras',
            'p3ReciboDerechos',
            'p3CroquisUbicacion',
            'p2Pago',
            'p4Imprimir',
        ],
    ]) ?>
*/?>

</div>
