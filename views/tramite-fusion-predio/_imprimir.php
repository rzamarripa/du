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
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1NombreSolicitante')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1NombreSolicitante ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1UsoActual')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1UsoActual ?></td>
			</TR>
			<TR>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1DireccionSolicitante')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1DireccionSolicitante ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1UsoSolicitado')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1UsoSolicitado ?></td>
			</TR>
			<TR>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1TelefonoSolicitante')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1TelefonoSolicitante ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1DescriProceso')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1DescriProceso ?></td>
			</TR>
			<TR>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1CorreoSolicitante')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1CorreoSolicitante ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1NoCajones')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1NoCajones ?></td>
			</TR>
			<TR>
			  <td width="100px"><label><strong>Firma:</strong></label></td>
			  <td width="100px">____________________________</td>
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
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1CallePredio')?>:</strong></label></td>
							  <td width="150px"><?= $model->p1CallePredio ?></td>
			  <td width="150px"><label><strong>COLINDANCIAS:</strong></label></td>
			  <td width="150px"></td>								  
		  </tr>
		  <tr>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1ColoniaPredio')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1ColoniaPredio ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1SuperficiePredio')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1SuperficiePredio ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1NumeroOficial')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1NumeroOficial ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1NortePredio')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1NortePredio ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1NumeroInterio')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1NumeroInterio ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1SurPredio')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1SurPredio ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1PobladoPredio')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1PobladoPredio ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1OrientePredio')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1OrientePredio ?></td>
		  </tr>				  
		  <tr>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1SindicaturaPredio')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1SindicaturaPredio ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1PonientePredio')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1PonientePredio ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1ClaveCatastralPredio')?>:</strong></label></td>
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
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1NombrePropietarios')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1NombrePropietarios ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1PlantaBajaConstruida')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1PlantaBajaConstruida ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1PlantaBajaXConstruir')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1PlantaBajaXConstruir ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1DireccionPropietarios')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1DireccionPropietarios ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1PlantaAltaConstruida')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1PlantaAltaConstruida ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1PlantaAltaXConstruir')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1PlantaAltaXConstruir ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1TelefonoPropietarios')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1TelefonoPropietarios ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1SegundoNivelConstruida')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1SegundoNivelConstruida ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1SegundoNivelXConstruir')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1SegundoNivelXConstruir ?></td>
		  </tr>
		  <tr>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1CorreoPropietarios')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1CorreoPropietarios ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1OtrosConstruida')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1OtrosConstruida ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1OtrosXConstruir')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1OtrosXConstruir ?></td>
		  </tr>
		  <tr>
			  <td width="100px"><label><strong>Firma:</strong></label></td>
			  <td width="100px">____________________________</td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1TotalConstruida')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1TotalConstruida ?></td>
			  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1TotalXConstruir')?>:</strong></label></td>
			  <td width="150px"><?= $model->p1TotalXConstruir ?></td>
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
	<!--  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1Observaciones')?>:</strong></label></td> -->
			  <td width="150px"><?= $model->p1Observaciones ?></td>
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
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1NombreGestor')?>:</strong></label></td>
							  <td width="150px"><?= $model->p1NombreGestor ?></td>
		  </tr>
		  <tr>
			  <td width="150px"></td>
			  <td width="150px"></td>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1DireccionGestor')?>:</strong></label></td>
							  <td width="150px"><?= $model->p1DireccionGestor ?></td>
		  </tr>
		  <tr>
			  <td width="150px"></td>
			  <td width="150px"></td>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1TelefonoGestor')?>:</strong></label></td>
							  <td width="150px"><?= $model->p1TelefonoGestor ?></td>
		  </tr>
		  <tr>
			  <td width="150px"></td>
			  <td width="150px"></td>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1CorreoGestor')?>:</strong></label></td>
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

<!--
<?php

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
 							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1FirmaGestor')?>:</strong></label></td>
							  <td width="150px"><?= $model->p1FirmaGestor ?></td>
			</TR>
 
 			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1Sellos')?>:</strong></label></td>
							  <td width="150px"><?= $model->p1Sellos ?></td>
			</TR>
 
 			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1FirmaSolicitante')?>:</strong></label></td>
							  <td width="150px"><?= $model->p1FirmaSolicitante ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p1FirmaPropietarios')?>:</strong></label></td>
							  <td width="150px"><?= $model->p1FirmaPropietarios ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p2Escrituras')?>:</strong></label></td>
							  <td width="150px"><?= $model->p2Escrituras ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p2ReciboDerechos')?>:</strong></label></td>
							  <td width="150px"><?= $model->p2ReciboDerechos ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p2CroquisUbicacion')?>:</strong></label></td>
							  <td width="150px"><?= $model->p2CroquisUbicacion ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p2Pago')?>:</strong></label></td>
							  <td width="150px"><?= $model->p2Pago ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p2Alineamiento')?>:</strong></label></td>
							  <td width="150px"><?= $model->p2Alineamiento ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p2PropuestaRelotificacion')?>:</strong></label></td>
							  <td width="150px"><?= $model->p2PropuestaRelotificacion ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p3Escrituras')?>:</strong></label></td>
							  <td width="150px"><?= $model->p3Escrituras ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p3ReciboDerechos')?>:</strong></label></td>
							  <td width="150px"><?= $model->p3ReciboDerechos ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p3CroquisUbicacion')?>:</strong></label></td>
							  <td width="150px"><?= $model->p3CroquisUbicacion ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p3Pago')?>:</strong></label></td>
							  <td width="150px"><?= $model->p3Pago ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p3Alineamiento')?>:</strong></label></td>
							  <td width="150px"><?= $model->p3Alineamiento ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p3PropuestaRelotificacion')?>:</strong></label></td>
							  <td width="150px"><?= $model->p3PropuestaRelotificacion ?></td>
			</TR>
 
			<TR>
							  <td width="150px"><label><strong><?= $model->getAttributeLabel('p4Imprimir')?>:</strong></label></td>
							  <td width="150px"><?= $model->p4Imprimir ?></td>
			</TR>
			
		</TABLE>
  </div>
</div>
-->