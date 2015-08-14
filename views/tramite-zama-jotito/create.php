<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TramiteZamaJotito */

$this->title = 'Crear Tramite Zama Jotito';
$this->params['breadcrumbs'][] = ['label' => 'Tramite Zama Jotitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramite-zama-jotito-crear">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
