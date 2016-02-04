<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\ArrayHelper;
?>
<h3>Tramites de Licencia de Construcción</h3>
<?= Html::a('Nuevo',['create'], ['class'=>'btn btn-primary', 'style'=> 'margin-bottom:20px'])?> 

<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">

    <thead>
        <tr>
            <th>No.</th>
            <th>Número de Trámite</th>
            <th>Paso Actual</th>
            <th>Acciones</th>  
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach ($tramites as $tramite) {?> 
        <tr>
            <td><?= $i++;?></td> 
            <td><?= $tramite->id ?></td> 
            <td><?= $tramite->pasoActual->secuencia.".- ".$tramite->pasoActual->nombre ?></td> 
            <td>
            <?= Html::a('<span class="fa fa-eye"></span>',['view','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?> 
            <?= Html::a('<span class="fa fa-pencil"></span>',['update','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?> 
            </td>
        </tr>
        <?php }?> 
    </tbody>
</table>
<? /*
<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
    <thead>
        <tr>
            <th>No.</th>
            <th>Fecha</th>
            <th>Número de Trámite</th>
            <th>Paso Actual</th>
            <th>Clave Catastral</th>
						<th>Nombre de Propietario</th> 
            <th>Estatus</th> 
            <th>Acciones</th>  
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach ($tramites as $tramite) {?> 
        <tr>
            <td><?= $i++;?></td>
            <td><?= $tramite->fechaCreacion ?></td>
            <td><?= $tramite->id ?></td>
            <td><?= $tramite->pasoActual->secuencia.'.- '.$tramite->pasoActual->nombre ?></td>
            <td><?= $tramite->p1ClaveCatastralPredio ?></td>
            <td><?= $tramite->p1NombrePropietario ?></td>
            <td><span class="label label-<?php if($tramite->estatusId == 1)echo 'info';if($tramite->estatusId == 2)echo 'success';if($tramite->estatusId == 3)echo 'warning';if($tramite->estatusId == 4)echo 'danger'; ?>">
              <?= $tramite->estatus->zonificacion ?></span> 
          </td>
            <td>
            <?= Html::a('<span class="fa fa-eye"></span>',['tramites-apertura-cepas/view','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?>
            <?= Html::a('<span class="fa fa-pencil"></span>',['tramites-apertura-cepas/update','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?>
						<?= Html::a('<span class="fa fa-print"></span>',['tramites-apertura-cepas/imprimir','id'=>$tramite->id], ['class' => 'btn btn-default btn-sm', "target" => "_blank"]) ?>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
*/ ?>
