<?php 
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
?>

	<?= Html::a('Nuevo',['informacion-documentos/create'], ['class'=>'btn btn-primary', 'style'=> 'margin-bottom:20px'])?>

<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre del Solicitante</th>
            <th>Dirección del Solicitante</th>
            <th>Telefono del Solicitante</th>
						<th>Correo del Solicitante</th>  
            <th>Acciones</th>  
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach ($informacionDocumentos as $infoDocumento) {?> 
        <tr>
            <td><?= $i++;?></td>
            <td><?= $infoDocumento->nombreSolicitante ?></td>
            <td><?= $infoDocumento->direccionSolicitante ?></td>
            <td><?= $infoDocumento->telefonoSolicitante ?></td>
            <td><?= $infoDocumento->correoSolicitante?></td>
            <td>
            <?= Html::a('<span class="fa fa-eye"></span>',['informacion-documentos/view','id'=>$infoDocumento->id],['class'=>'btn btn-default btn-sm'])?>
            <?= Html::a('<span class="fa fa-pencil"></span>',['informacion-documentos/update','id'=>$infoDocumento->id],['class'=>'btn btn-default btn-sm'])?>
						<?= Html::a('<span class="fa fa-print"></span>',['informacion-documentos/imprimir','id'=>$infoDocumento->id], ['class' => 'btn btn-default btn-sm', "target" => "_blank"]) ?>
           
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
