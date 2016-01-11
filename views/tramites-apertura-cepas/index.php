<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\ArrayHelper;
?>
<?= Html::a('Nuevo',['create'], ['class'=>'btn btn-primary', 'style'=> 'margin-bottom:20px'])?> 

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
            <td><?= $tramite->id ?></td>
            <td><?= $tramite->pasoActual->secuencia.'.- '.$tramite->pasoActual->nombre ?></td>
            <td><?= $tramite->p1ClaveCatastralPredio ?></td>
<<<<<<< HEAD
            <td><?= $tramite->p1NombrePropietarios ?></td>
            <td><span class="label label-<?php if($tramite->estatusId == 1)echo 'warning';if($tramite->estatusId == 3)echo 'success';if($tramite->estatusId == 4)echo 'danger'; ?>">
              <?= $tramite->estatus->proyecto ?></span> 
          </td>
=======
            <td><?= $tramite->p1NombrePropietario ?></td>
>>>>>>> 257148387ab2a02a9ecb554d2ab1f88f78e178fb
            <td>
            <?= Html::a('<span class="fa fa-eye"></span>',['tramites-apertura-cepas/view','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?>
            <?= Html::a('<span class="fa fa-pencil"></span>',['tramites-apertura-cepas/update','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?>
						<?= Html::a('<span class="fa fa-print"></span>',['tramites-apertura-cepas/imprimir','id'=>$tramite->id], ['class' => 'btn btn-default btn-sm', "target" => "_blank"]) ?>
           
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>