<table id="datatable1" class="table table-striped table-bordered">
	<thead>
		<tr><th>No.</th>
			<th>Nombre</th>
			<th>Descripcón</th>
			<th>Estatus</th>
			<th>Fecha</th>
			
		</tr>
	</thead>
	<tbody>
		<?php $c=0; foreach ($proyectos as $proyecto) {$c++;?> 
		<tr>
			<td class='col-sm-1'><?= $c?></td> 
			<td><?= $proyecto->nombre ?></td>
			<td><?= $proyecto->descripcion ?></td>
			<td><span class="label label-<?php if($proyecto->estatus_did == 1)echo 'warning';if($proyecto->estatus_did == 2)echo 'primary';if($proyecto->estatus_did == 3)echo 'success'; ?>">
				<?= $proyecto->estatus->proyecto ?></span></td>
			<td><?= date('d-m-Y H:i:s',strtotime($proyecto->fecha_ft)); ?></td>
			
		</tr>
		<?php }?>
	</tbody>
</table>