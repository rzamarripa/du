<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
	    Solicitante
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;
	    Localización
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
			  <td width="150px"><?= $model->p1NortePredio ?></td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Dirección:</strong></label></td>
			  <td width="100px"><?= $model->p1DireccionPropietario ?> </td>
			  <td width="100px"><label><strong>Al Sur:</strong></label></td>
			  <td width="100px"><?= $model->p1SurPredio ?> </td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Teléfono:</strong></label></td>
			  <td width="100px"><?= $model->p1TelefonoPropietario ?></td>
			  <td width="100px"><label><strong>Al Oriente:</strong></label></td>
			  <td width="100px"><?= $model->p1OrientePredio ?></td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Firma:</strong></label></td>
			  <td width="100px">____________________________</td>
			  <td width="100px"><label><strong>Al Poniente:</strong></label></td>
			  <td width="100px"><?= $model->p1PonientePredio ?></td>
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
	    Uso de Suelo</h2>
  </div>
  <div class="panel-body">
		<table class="table table-stripped table-condensed">
				<TR>
				<TH COLSPAN=4><h4></h4></TH>
			</TR>
		  <tr>
			  <td width="150px"><label><strong>Calle:</strong></label></td>
			  <td width="150px"><?= $model->p1CallePredio ?></td>
			  <td width="150px"><label><strong>Uso Actual:</strong></label></td>
			  <td width="150px"><?= $model->p1UsoActual?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Fraccionamiento o Colonia:</strong></label></td>
			  <td width="150px"><?= $model->p1FraccColoniaPredio ?></td>
			  <td width="150px"><label><strong>Uso Solicitado:</strong></label></td>
			  <td width="150px"><?= $model->p1UsoSolicitado ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Número de Lote:</strong></label></td>
			  <td width="150px"><?= $model->p1LotePredio ?></td>
			  <td width="150px"><label><strong>No de Cajones de Estacionamiento:</strong></label></td>
			  <td width="150px"><?= $model->p1Cajones ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Número de Manzana:</strong></label></td>
			  <td width="150px"><?= $model->p1ManzanaPredio ?></td>
			  <td width="150px"><label><strong></strong></label></td>
			  <td width="150px"></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Clave Catastral:</strong></label></td>
			  <td width="150px"><?= $model->p1ClaveCatastralPredio ?></td>
			  <td width="150px"><label><strong></strong></label></td>
			  <td width="150px"></td>
		  </tr>				  
		</table>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Planta Construida
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;
	    Planta Por Construir</h2>
  </div>
  <div class="panel-body">
		<table class="table table-stripped table-condensed">
				<TR>
				<TH COLSPAN=4><h4></h4></TH>
			</TR>
		  <tr>
			  <td width="150px"><label><strong>Planta Baja:</strong></label></td>
			  <td width="150px"><?= $model->p1PlantaBajaConstruida ?></td>
			  <td width="150px"><label><strong>Planta Baja Por Construir:</strong></label></td>
			  <td width="150px"><?= $model->p1PlantaBajaXConstruir ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Planta Alta:</strong></label></td>
			  <td width="150px"><?= $model->p1PlantaAltaConstruida ?></td>
			  <td width="150px"><label><strong>Planta Alta Por Construir:</strong></label></td>
			  <td width="150px"><?= $model->p1PlantaAltaXConstruir ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Otros:</strong></label></td>
			  <td width="150px"><?= $model->p1OtrosConstruida ?></td>
			  <td width="150px"><label><strong>Otros Por Construir:</strong></label></td>
			  <td width="150px"><?= $model->p1OtrosXConstruir ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>TOTAL:</strong></label></td>
			  <td width="150px"><?= $model->p1TotalConstruida ?></td>
			  <td width="150px"><label><strong>TOTAL Por Construir:</strong></label></td>
			  <td width="150px"><?= $model->p1TotalXConstruir ?></td>
		  </tr>
		</table>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Observaciones
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;
	    </h2>
  </div>
  <div class="panel-body">
		<table class="table table-stripped table-condensed">
				<TR>
				<TH COLSPAN=4><h4></h4></TH>
			</TR>
		  <tr>
			  <td width="150px"><label><strong>Observaciones:</strong></label></td>
			  <td width="150px"><?= $model->p1Observaciones ?></td>
		  </tr>
		</table>
  </div>
</div>