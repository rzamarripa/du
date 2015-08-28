<?php 
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
?>

	<?= Html::a('Nuevo',['tramite-zonificacion/create'], ['class'=>'btn btn-primary', 'style'=> 'margin-bottom:20px'])?>

<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Número de Trámite</th>
            <th>Paso Actual</th>
            <th>Clave Catastral</th>  
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
            <td>
            <?= Html::a('<span class="fa fa-eye"></span>',['tramite-zonificacion/view','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?>
            <?= Html::a('<span class="fa fa-pencil"></span>',['tramite-zonificacion/update','id'=>$tramite->id],['class'=>'btn btn-default btn-sm'])?>
           
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>