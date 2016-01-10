<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InformacionDocumentos */

//$this->title = "informacion de documentos: " . $model->NombreSolicitante;
$this->params['breadcrumbs'][] = ['label' => 'Información de Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informacion-documentos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Volver', ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id, 'n' => 'v'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Imprimir', ['informacion-documentos/imprimir', 'id' => $model->id], ['class' => 'btn btn-primary', "target" => "_blank"]) ?>
    </p>
    <?php echo $this->render("_solicitante",["model"=>$model]); ?>
<?php /*
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'NombreSolicitante',
            'DireccionSolicitante:ntext',
            'TelefonoSolicitante',
            'CorreoSolicitante',
            'CallePredio',
            'ColoniaPredio',
            'NumeroOficialPredio:ntext',
            'NumeroInteriorPredio',
            'PobladoPredio',
            'SindicaturaPredio',
            'ClaveCatastralPredio',
            'NombrePropietario',
            'DireccionPropietario:ntext',
            'TelefonoPropietario',
            'CorreoPropietario',
            'Observaciones:ntext',
        ],
    ]) ?>
*/?>
</div>