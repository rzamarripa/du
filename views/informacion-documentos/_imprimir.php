<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
	    Solicitante
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;
	    Propietario
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
			  <td width="150px"><?= $model->nombreSolicitante ?></td>
			  <td width="100px"><label><strong>Nombre:</strong></label></td>
			  <td width="100px"><?= $model->nombrePropietario ?></td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Dirección:</strong></label></td>
			  <td width="100px"><?= $model->direccionSolicitante ?> </td>
			  <td width="100px"><label><strong>Dirección:</strong></label></td>
			  <td width="100px"><?= $model->direccionPropietario ?> </td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Teléfono:</strong></label></td>
			  <td width="100px"><?= $model->telefonoSolicitante ?></td>
			  <td width="100px"><label><strong>Teléfono:</strong></label></td>
			  <td width="100px"><?= $model->telefonoPropietario ?></td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Correo:</strong></label></td>
			  <td width="100px"><?= $model->correoPropietario ?></td>
			  <td width="100px"><label><strong>Correo:</strong></label></td>
			  <td width="100px"><?= $model->correoPropietario ?></td>
			</TR>
		</TABLE>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Datos del Predio</h2>
  </div>
  <div class="panel-body">
		<table class="table table-stripped table-condensed">
				<TR>
				<TH COLSPAN=4><h4></h4></TH>
			</TR>
		  <tr>
			  <td width="150px"><label><strong>Calle:</strong></label></td>
			  <td width="150px"><?= $model->callePredio ?></td>	  
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Fraccionamiento o Colonia:</strong></label></td>
			  <td width="150px"><?= $model->coloniaPredio ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Número Oficial:</strong></label></td>
			  <td width="150px"><?= $model->numeroOficialPredio ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Número Interior:</strong></label></td>
			  <td width="150px"><?= $model->numeroInteriorPredio ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Poblado:</strong></label></td>
			  <td width="150px"><?= $model->pobladoPredio ?></td>
		  </tr>				  
		  <tr>
			  <td width="150px"><label><strong>Sindicatura:</strong></label></td>
			  <td width="150px"><?= $model->sindicaturaPredio ?> </td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Clave Catastral:</strong></label></td>
			  <td width="150px"><?= $model->claveCatastralPredio ?></td>
		  </tr>
		</table>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">Observaciones</h4>
  </div>
  <div class="panel-body">
		<table class="table table-stripped table-condensed">				  
		  <tr>
			  <td><label><strong></strong></label></td>
			  <td></td>
		  </tr>
		  <tr>
				<td width="100px"><?= $model->observaciones ?></td>
			  <td width="100px"></td>
		  </tr>
		</table>
  </div>
</div>