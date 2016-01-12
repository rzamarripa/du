<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\ArrayHelper;
?>
<?= Html::a('Nuevo',['create'], ['class'=>'btn btn-primary', 'style'=> 'margin-bottom:20px'])?> 



<!--<div class='row'>
    <div class='col-sm-12'>
        <div class="reportes-form">
        <form action="filtro" class="">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Fecha Inicial</label>
              <div class='input-group date'>
                <input type='text' class="form-control datepicker" name="filtro[fechaInicial]" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>

                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Fecha Final</label>
              <div class='input-group date'>
                <input type='text' class="form-control datepicker" name="filtro[fechaFinal]" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
                </div>              
                
             <button style="margin-top: 23px;" class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>
        </div>
    </div>
</div>
<hr>-->

<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">

    <thead>
        <tr>
            <th>No.</th>
            <th>Fecha</th>
            <th>Número de Trámite</th>
            <th>Paso Actual</th>
            <th>Estatus</th>
       
            <th>Acciones</th>  
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach ($Tramites as $tramite) {?> 
        <tr>
            <td><?= $i++;?></td>
            <td><?= $tramite-> fechaCreacion?></td>  
            <td><?= $tramite->id ?></td> 
            <td><?= $tramite->pasoActual->secuencia.".- ".$tramite->pasoActual->nombre ?></td>  
            <td>
           <span class="label label-<?php if($tramite->estatusId == 1)echo 'warning';if($tramite->estatusId == 3)echo 'success';if($tramite->estatusId == 4)echo 'danger'; ?>">
              <?= $tramite->estatus->proyecto ?></span>
            </td>

            <td>
            <?= Html::a('<span class="fa fa-eye"></span>',['view','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?> 
            <?= Html::a('<span class="fa fa-pencil"></span>',['update','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?>
            <?= Html::a('<span class="fa fa-print"></span>',['tramites-anuncios-temporales/imprimir','id'=>$tramite->id], ['class' => 'btn btn-default btn-sm', "target" => "_blank"]) ?>

            </td>
        </tr>
        <?php }?> 
    </tbody>
</table>

