<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
	    Solicitante
	  </h4>
  </div>
  <div class="panel-body">
		<TABLE BORDER>
			<TR>
				<TH COLSPAN=2><h3></h3></TH>
				<TH COLSPAN=2><h3></h3></TH>
			</TR>
			<TR>
			  <td width="150px"><label><strong>Nombre:</strong></label></td>
			  <td width="150px"><?= $model->p1NombrePropietario ?></td>
				<td width="150px"><label><strong>Dirección:</strong></label></td>
			  <td width="150px"><?= $model->p1DireccionPropietarios ?></td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Telefono:</strong></label></td>
			  <td width="100px"><?= $model->p1TelefonoPropietarios ?> </td>
			  <td width="100px"><label><strong>Clave Catastral:</strong></label></td>
			  <td width="100px"><?= $model->p1ClaveCatastralPredio ?> </td>
			</TR>
		</TABLE>
  </div>
</div>