<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\ArrayHelper;
?>
<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php $c=0; foreach ($TiposTramite as $tt) {$c++;?>
			<tr>
				<td class='col-sm-1'><?= $c?></td> 
				<td><?= $tt->nombre ?></td>
				<td>
					<?= Html::a('<span class="fa fa-pencil"></span>',['tipos-tramite/update','id'=>$tt->id],['class'=>'btn btn-default btn-sm'])?>
					<?= Html::a('Permisos',['permisos','id'=>$tt->id],['class'=>'btn btn-danger btn-sm'])?>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table>