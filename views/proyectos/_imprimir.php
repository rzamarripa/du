<table id="datatable1" class="table table-striped table-bordered">
	<thead>
		<tr><th>No.</th>
			<th>Nombre</th>
			<th>Descripcón</th>
			<th>Fecha</th>
			
		</tr>
	</thead>
	<tbody>
		<?php $c=0; foreach ($Proyectos as $proyecto) {$c++;?> 
		<tr>
			<td class='col-sm-1'><?= $c?></td> 
			<td><?= $proyecto->nombre ?></td>
			<td><?= $proyecto->descripcion ?></td>
			<td><?= date('d-m-Y H:i:s',strtotime($proyecto->fecha_ft)); ?></td>
			</tr>
		<?php }?>
	</tbody>
</table>