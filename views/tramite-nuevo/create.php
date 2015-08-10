
<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramiteNuevo */

$this->title = 'Crear Tramite Nuevo';
$this->params['breadcrumbs'][] = ['label' => 'Tramite Nuevos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-nuevo-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

