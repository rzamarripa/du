<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
	    Solicitante
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;
	    Uso de Suelo
	  </h4>
  </div>
  <div class="panel-body">
		<TABLE BORDER>
			<TR>
				<TH COLSPAN=2><h3></h3></TH>
				<TH COLSPAN=2><h3></h3></TH>
			</TR>
			<TR>
<<<<<<< HEAD
							  <td width="150px"><label><strong>Nombre:</strong></label></td>
							  <td width="150px"><?= $model->p1NombreSolicitante ?></td>
								<td width="150px"><label><strong>Uso Actual:</strong></label></td>
							  <td width="150px"><?= $model->p1UsoActual ?></td>
			</TR>
			<TR>
							  <td width="100px"><label><strong>Dirección:</strong></label></td>
							  <td width="100px"><?= $model->p1DireccionSolicitante ?> </td>
							  <td width="100px"><label><strong>Uso Solicitado:</strong></label></td>
							  <td width="100px"><?= $model->p1UsoSolicitado ?> </td>
			</TR>
			<TR>
							  <td width="100px"><label><strong>Teléfono:</strong></label></td>
							  <td width="100px"><?= $model->p1TelefonoSolicitante ?></td>
							  <td width="100px"><label><strong>Descripción del Proceso:</strong></label></td>
							  <td width="100px"><?= $model->p1DescriProceso ?></td>
			</TR>
			<TR>
							  <td width="100px"><label><strong>Correo:</strong></label></td>
							  <td width="100px"><?= $model->p1CorreoPropietario ?></td>
							  <td width="100px"><label><strong>No. de Cajones de Estacionamiento:</strong></label></td>
							  <td width="100px"><?= $model->p1NoCajones ?></td>
			</TR>
			<TR>
							  <td width="100px"><label><strong>Firma:</strong></label></td>
							  <td width="100px">____________________________</td>
=======
			  <td width="150px"><label><strong>Nombre:</strong></label></td>
			  <td width="150px"><?= $model->p1NombreSolicitante ?></td>
				<td width="150px"><label><strong>Uso Actual:</strong></label></td>
			  <td width="150px"><?= $model->p1UsoActual ?></td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Dirección:</strong></label></td>
			  <td width="100px"><?= $model->p1DireccionSolicitante ?> </td>
			  <td width="100px"><label><strong>Uso Solicitado:</strong></label></td>
			  <td width="100px"><?= $model->p1UsoSolicitado ?> </td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Teléfono:</strong></label></td>
			  <td width="100px"><?= $model->p1TelefonoSolicitante ?></td>
			  <td width="100px"><label><strong>Descripción del Proceso:</strong></label></td>
			  <td width="100px"><?= $model->p1DescriProceso ?></td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Correo:</strong></label></td>
			  <td width="100px"><?= $model->p1CorreoPropietario ?></td>
			  <td width="100px"><label><strong>No. de Cajones de Estacionamiento:</strong></label></td>
			  <td width="100px"><?= $model->p1NoCajones ?></td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Firma:</strong></label></td>
			  <td width="100px">____________________________</td>
>>>>>>> 744ace31c127f6bacea02b2557757afed2e20c54
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
			  <td width="150px"><?= $model->p1CallePredio ?></td>
			  <td width="150px"><label><strong>COLINDANCIAS:</strong></label></td>
			  <td width="150px"></td>								  
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Fraccionamiento o Colonia:</strong></label></td>
			  <td width="150px"><?= $model->p1ColoniaPredio ?></td>
			  <td width="150px"><label><strong>Superficie del Predio:</strong></label></td>
			  <td width="150px"><?= $model->p1SuperficiePredio ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Número Oficial:</strong></label></td>
			  <td width="150px"><?= $model->p1NumeroOficialPredio ?></td>
			  <td width="150px"><label><strong>Norte:</strong></label></td>
			  <td width="150px"><?= $model->p1NortePredio ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Número Interior:</strong></label></td>
			  <td width="150px"><?= $model->p1NumeroInteriorPredio ?></td>
			  <td width="150px"><label><strong>Sur:</strong></label></td>
			  <td width="150px"><?= $model->p1SurPredio ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Poblado:</strong></label></td>
			  <td width="150px"><?= $model->p1PobladoPredio ?></td>
			  <td width="150px"><label><strong>Oriente:</strong></label></td>
			  <td width="150px"><?= $model->p1OrientePredio ?></td>
		  </tr>				  
		  <tr>
			  <td width="150px"><label><strong>Sindicatura:</strong></label></td>
			  <td width="150px"><?= $model->p1SindicaturaPredio ?> </td>
			  <td width="150px"><label><strong>Poniente:</strong></label></td>
			  <td width="150px"><?= $model->p1PonientePredio ?> </td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong>Clave Catastral:</strong></label></td>
			  <td width="150px"><?= $model->p1ClaveCatastralPredio ?></td>
		  </tr>
		</table>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">Propietario
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    Solicitante</h4>
  </div>
  <div class="panel-body">
		<table class="table table-stripped table-condensed">
				<TR>
				<TH COLSPAN=2></TH>
				<TH COLSPAN=4></TH>
			</TR>
		  <tr>
			  <td width="100px"><label><strong>Nombre:</strong></label></td>
			  <td width="100px"><?= $model->p1NombrePropietario ?></td>
<<<<<<< HEAD
				  <td width="100px"><label><strong>Planta Baja:</strong></label></td>
				  <td width="100px"><?= $model->p1PlantabajaConstruida ?></td>
				  <td width="100px"><label><strong>Planta Baja:</strong></label></td>
				  <td width="100px"><?= $model->p1PlantabajaXConstruir ?></td>
=======
			  <td width="100px"><label><strong>Planta Baja:</strong></label></td>
			  <td width="100px"><?= $model->p1PlantabajaConstruida ?></td>
			  <td width="100px"><label><strong>Planta Baja:</strong></label></td>
			  <td width="100px"><?= $model->p1PlantabajaXConstruir ?></td>
>>>>>>> 744ace31c127f6bacea02b2557757afed2e20c54
		  </tr>
		  <tr>
			  <td width="100px"><label><strong>Dirección:</strong></label></td>
			  <td width="100px"><?= $model->p1DireccionPropietario ?> </td>
<<<<<<< HEAD
				  <td width="100px"><label><strong>Planta Alta:</strong></label></td>
				  <td width="100px"><?= $model->p1PlantaaltaConstruida ?> </td>
				  <td width="100px"><label><strong>Planta Alta:</strong></label></td>
				  <td width="100px"><?= $model->p1PlantaaltaXConstruir ?> </td>
=======
			  <td width="100px"><label><strong>Planta Alta:</strong></label></td>
			  <td width="100px"><?= $model->p1PlantaaltaConstruida ?> </td>
			  <td width="100px"><label><strong>Planta Alta:</strong></label></td>
			  <td width="100px"><?= $model->p1PlantaaltaXConstruir ?> </td>
>>>>>>> 744ace31c127f6bacea02b2557757afed2e20c54
		  </tr>
		  <tr>
			  <td width="100px"><label><strong>Teléfono:</strong></label></td>
			  <td width="100px"><?= $model->p1TelefonoPropietario ?></td>
<<<<<<< HEAD
				  <td width="100px"><label><strong>Segundo Piso:</strong></label></td>
				  <td width="100px"><?= $model->p1SegundonivelConstruida ?></td>
					<td width="100px"><label><strong>Segundo Nivel:</strong></label></td>
				  <td width="100px"><?= $model->p1SegundonivelXConstruir ?></td>
=======
			  <td width="100px"><label><strong>Segundo Piso:</strong></label></td>
			  <td width="100px"><?= $model->p1SegundonivelConstruida ?></td>
				<td width="100px"><label><strong>Segundo Nivel:</strong></label></td>
			  <td width="100px"><?= $model->p1SegundonivelXConstruir ?></td>
>>>>>>> 744ace31c127f6bacea02b2557757afed2e20c54
		  </tr>
		  <tr>
			  <td width="100px"><label><strong>Correo:</strong></label></td>
			  <td width="100px"><?= $model->p1CorreoPropietario ?></td>
<<<<<<< HEAD
				  <td width="100px"><label><strong>Otros:</strong></label></td>
				  <td width="100px"><?= $model->p1OtrosConstruida ?></td>
				  <td width="100px"><label><strong>Otros:</strong></label></td>
				  <td width="100px"><?= $model->p1OtrosXConstruir ?></td>
=======
			  <td width="100px"><label><strong>Otros:</strong></label></td>
			  <td width="100px"><?= $model->p1OtrosConstruida ?></td>
			  <td width="100px"><label><strong>Otros:</strong></label></td>
			  <td width="100px"><?= $model->p1OtrosXConstruir ?></td>
>>>>>>> 744ace31c127f6bacea02b2557757afed2e20c54
		  </tr>
		  <tr>
			  <td width="100px"><label><strong>Firma:</strong></label></td>
			  <td width="100px">____________________________</td>
<<<<<<< HEAD
				  <td width="100px"><label><strong>Total:</strong></label></td>
				  <td width="100px"><?= $model->p1TotalConstruida ?></td>
				  <td width="100px"><label><strong>Total:</strong></label></td>
				  <td width="100px"><?= $model->p1TotalXConstruir ?></td>
=======
			  <td width="100px"><label><strong>Total:</strong></label></td>
			  <td width="100px"><?= $model->p1TotalConstruida ?></td>
			  <td width="100px"><label><strong>Total:</strong></label></td>
			  <td width="100px"><?= $model->p1TotalXConstruir ?></td>
>>>>>>> 744ace31c127f6bacea02b2557757afed2e20c54
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
				<td width="100px"><?= $model->p1Observaciones ?></td>
			  <td width="100px"></td>
		  </tr>
		</table>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">Sello
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    Gestor</h4>
  </div>
  <div class="panel-body">
		<table class="table table-stripped table-condensed">				  
		  <tr>
			  <td width="150px"><label><strong></strong></label></td>
			  <td width="150px"></td>
			  <td width="150px"><label><strong>Nombre:</strong></label></td>
			  <td width="150px"><?= $model->p1NombreGestor ?></td>
		  </tr>
		  <tr>
			  <td width="150px"></td>
			  <td width="150px"></td>
			  <td width="150px"><label><strong>Dirección:</strong></label></td>
			  <td width="150px"><?= $model->p1DireccionGestor ?> </td>
		  </tr>
		  <tr>
			  <td width="150px"></td>
			  <td width="150px"></td>
			  <td width="150px"><label><strong>Teléfono:</strong></label></td>
			  <td width="150px"><?= $model->p1TelefonoGestor ?></td>
		  </tr>
		  <tr>
			  <td width="150px"></td>
			  <td width="150px"></td>
			  <td width="150px"><label><strong>Correo:</strong></label></td>
			  <td width="150px"><?= $model->p1CorreoGestor ?></td>
		  </tr>
		  <tr>
			  <td width="150px"></td>
			  <td width="150px"></td>					  
			  <td width="150px"><label><strong>Firma:</strong></label></td>
			  <td width="150px">____________________________</td>
		  </tr>
		</table>
  </div>
</div>