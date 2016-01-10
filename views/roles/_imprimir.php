<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nombre</th>
			<th>Descripcón</th>
		
		</tr>
	</thead>
	<tbody>
		<?php $c=0;foreach ($roles as $rol) {$c++;?> 
		<tr>
			<td class='col-sm-1'><?= $c?></td> 
			<td><?= $rol->nombre ?></td>
			<td><?= $rol->descripcion ?></td>
			
		</tr>
		<?php }?>
	</tbody>
</table>