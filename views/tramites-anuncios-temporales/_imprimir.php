<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
	    Solicitante
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;
	    Anuncios Temporales
	  </h4>
  </div>
  <div class="panel-body">
		<TABLE BORDER>
			<TR>
				<TH COLSPAN=2><h3></h3></TH>
				<TH COLSPAN=2><h3></h3></TH>
			</TR>
			<TR>
			  <td width="150px"><label><strong>Numero de Oficio:</strong></label></td>
			  <td width="150px"><?= $model->p1NoOficioTemporal ?></td>
			  <td width="100px"><label><strong>Relación a:</strong></label></td>
			  <td width="100px"><?= $model->p1RelacionTemporal ?> </td>
			</TR>
			<TR>
				<td width="150px"><label><strong>Dirigido a:</strong></label></td>
			  <td width="150px"><?= $model->p1DirigidoTemporal ?></td>
			  <td width="100px"><label><strong>Quien Firmara:</strong></label></td>
			  <td width="100px"><?= $model->p1FirmaTemporal?> </td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Firma:</strong></label></td>
			  <td width="100px">____________________________</td>
			</TR>
		</TABLE>
  </div>
</div>