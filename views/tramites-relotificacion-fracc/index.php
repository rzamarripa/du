<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\ArrayHelper;
?>
<?= Html::a('Nuevo',['create'], ['class'=>'btn btn-primary', 'style'=> 'margin-bottom:20px'])?> 

<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">

    <thead>
        <div class='row'>
    <div class='col-sm-12'>
        <div class="reportes-form">
        <form action="filtro" class="form-inline">
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
                
             <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>
        </div>
    </div>
</div>
<hr>
        <tr>


            <th>No.</th>
            <th>Fecha</th>
            <th>Número de Trámite</th>
            <th>Paso Actual</th>
            <th>Clave Catastral</th>
						<th>Nombre de Solicitante</th>
            <th>Acciones</th>  
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach ($Tramites as $tramite) {?> 
        <tr>
            <td><?= $i++;?></td>
            <td><?= $tramite->fechaCreacion ?></td> 
            <td><?= $tramite->id ?></td> 
            <td><?= $tramite->pasoActual->secuencia.".- ".$tramite->pasoActual->nombre ?></td> 
            <td><?= $tramite->p1ClaveCatastralPredio ?></td>
            <td><?= $tramite->p1NombreSolicitante ?></td>
            <td>
            <?= Html::a('<span class="fa fa-eye"></span>',['view','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?> 
            <?= Html::a('<span class="fa fa-pencil"></span>',['update','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?> 
						<?= Html::a('<span class="fa fa-print"></span>',['tramites-relotificacion-fracc/imprimir','id'=>$tramite->id], ['class' => 'btn btn-default btn-sm', "target" => "_blank"]) ?>
            </td>
        </tr>
        <?php }?> 
    </tbody>
</table>

