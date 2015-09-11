<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nombre</th>
			<th>Secuencia</th>
			<th>Tipo de Tramite</th>

		</tr>
	</thead>
	<tbody>
		<?php $c=0; foreach ($pasostramite as $pt) {$c++;?>
			<tr>
				<td class='col-sm-1'><?= $c?></td> 
				<td><?= $pt->nombre ?></td>
				<td><?= $pt->secuencia ?></td>
				<td><?= $pt->tipoTramite->nombre ?></td>
				
			</tr>
		<?php }?>
	</tbody>
</table>

   