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
            <th>Número de Trámite</th>
            <th>Paso Actual</th>
            <th>Clave Catastral</th>
						<th>Nombre de Solicitante</th>
            <th>Acciones</th>  
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach ($tramites as $tramite) {?> 
        <tr>
            <td><?= $i++;?></td> 
            <td><?= $tramite->id ?></td> 
            <td><?= $tramite->pasoActual->secuencia.".- ".$tramite->pasoActual->nombre ?></td> 
            <td><?= $tramite->p1ClaveCatastralPredio ?></td>
            <td><?= $tramite->p1NombreSolicitante ?></td>
            <td>
            <?= Html::a('<span class="fa fa-eye"></span>',['view','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?> 
            <?= Html::a('<span class="fa fa-pencil"></span>',['update','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?> 
						<?= Html::a('<span class="fa fa-print"></span>',['tramite-uso-de-suelo/imprimir','id'=>$tramite->id], ['class' => 'btn btn-default btn-sm', "target" => "_blank"]) ?>
            </td>
        </tr>
        <?php }?> 
    </tbody>
</table>
