<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\helpers\Html;
use app\models\USUARIOS;
use app\models\TramiteNuevo;
use app\models\DetalleRequisitos;
use app\models\Requisitos;

?>
<div class="col-lg-8">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">  
        <?php foreach($requisitos as $requisito){ 
            $detalleRequisitos = DetalleRequisitos::find()->where('requisitoId = '. $requisito->id)->all();
            ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $requisito->id ?>" aria-expanded="true" aria-controls="collapseOne">
                      <?= $requisito->nombre ?>
                    </a>
                  </h4>
                </div>
                <div id="collapse<?= $requisito->id ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <?php foreach($detalleRequisitos as $detalleRequisito){ ?>
                        <p><?= $detalleRequisito->nombre ?></p>
                    <?php } ?>
                  </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>