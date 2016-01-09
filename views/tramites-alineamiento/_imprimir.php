<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
	    Solicitante
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;
	    Localizacion
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
				<td width="150px"><label><strong>Al Norte:</strong></label></td>
			  <td width="150px"><?= $model->p1NorteLocalizacion ?></td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Dirección:</strong></label></td>
			  <td width="100px"><?= $model->p1DireccionPropietario ?> </td>
			  <td width="100px"><label><strong>Al Sur:</strong></label></td>
			  <td width="100px"><?= $model->p1SurLocalizacion ?> </td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Teléfono:</strong></label></td>
			  <td width="100px"><?= $model->p1TelefonoPropietario ?></td>
			  <td width="100px"><label><strong>Al Oriente:</strong></label></td>
			  <td width="100px"><?= $model->p1OrienteLocalizacion ?></td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Firma:</strong></label></td>
			  <td width="100px">____________________________</td>
			  <td width="100px"><label><strong>Al Poniente:</strong></label></td>
			  <td width="100px"><?= $model->p1PonienteLocalizacion ?></td>
			</TR>
		</TABLE>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Datos del Predio
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;
	    Observaciones</h2>
  </div>
  <div class="panel-body">
		<table class="table table-stripped table-condensed">
				<TR>
				<TH COLSPAN=4><h4></h4></TH>
			</TR>
		  <tr>
			  <td width="150px"><label><strong>Calle:</strong></label></td>
			  <td width="150px"><?= $model->p1CallePredio ?></td>
			  <td width="150px"><label><strong>Alineamiento:</strong></label></td>
			  <td width="150px"><?= $model->p1AlineamientoObservaciones?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Fraccionamiento o Colonia:</strong></label></td>
			  <td width="150px"><?= $model->p1FraccColoniaPredio ?></td>
			  <td width="150px"><label><strong>Numero Oficial:</strong></label></td>
			  <td width="150px"><?= $model->p1NoOficialObservaciones ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Numero de Lote:</strong></label></td>
			  <td width="150px"><?= $model->p1LotePredio ?></td>
			  <td width="150px"><label><strong>15% PRO-MAT:</strong></label></td>
			  <td width="150px"><?= $model->p1ProMatObservaciones ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Numero de Manzana:</strong></label></td>
			  <td width="150px"><?= $model->p1ManzanaPredio ?></td>
			  <td width="150px"><label><strong>5% PRO-HOSP:</strong></label></td>
			  <td width="150px"><?= $model->p1ProHospObservaciones ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Clave Catastral:</strong></label></td>
			  <td width="150px"><?= $model->p1ClaveCatastralPredio ?></td>
			  <td width="150px"><label><strong>5% PRO-ALF:</strong></label></td>
			  <td width="150px"><?= $model->p1ProAlfObservaciones ?></td>
		  </tr>				  
		  <tr>
			  <td width="150px"><label><strong></strong></label></td>
			  <td width="150px"><?= $model->?> </td>
			  <td width="150px"><label><strong>TOTAL:</strong></label></td>
			  <td width="150px"><?= $model->p1TotalObservaciones ?> </td>
		  </tr>
		</table>
  </div>
</div>