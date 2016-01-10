<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Propietario</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-2"><label><strong>Nombre:</strong></label></td>
					  <td><?= $model->p1NombrePropietario ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Dirección:</strong></label></td>
					  <td><?= $model->p1DireccionPropietario ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Teléfono:</strong></label></td>
					  <td><?= $model->p1TelefonoPropietario ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Firma:</strong></label></td>
					  <td></td>
				  </tr>
			  </table>		    
		  </div>
		</div>												
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Localizacion</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-4"><label><strong>AL Norte:</strong></label></td>
<<<<<<< HEAD
					  <td><?= $model->p1NorteLocalizacion ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Al Sur:</strong></label></td>
					  <td><?= $model->p1SurLocalizacion ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Al Oriente:</strong></label></td>
					  <td><?= $model->p1OrienteLocalizacion ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Al Poniente:</strong></label></td>
					  <td><?= $model->p1PonienteLocalizacion ?></td>
=======
					  <td><?= $model->p1NortePredio ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Al Sur:</strong></label></td>
					  <td><?= $model->p1SurPredio ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Al Oriente:</strong></label></td>
					  <td><?= $model->p1OrientePredio ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Al Poniente:</strong></label></td>
					  <td><?= $model->p1PonientePredio ?></td>
>>>>>>> 99fcead28d5c2592eaa750b5a45d726db183876c
				  </tr>
			  </table>
		  </div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Datos del Predio</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-2"><label><strong>Calle:</strong></label></td>
					  <td><?= $model->p1CallePredio ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Fraccionamiento o Colonia:</strong></label></td>
					  <td><?= $model->p1FraccColoniaPredio ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Numero de Lote:</strong></label></td>
					  <td><?= $model->p1LotePredio ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Numero de Manzana:</strong></label></td>
					  <td><?= $model->p1ManzanaPredio ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Clave Catastral:</strong></label></td>
					  <td><?= $model->p1ClaveCatastralPredio ?></td>
				  </tr>
			  </table>		    
		  </div>
		</div>												
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
<<<<<<< HEAD
		    <h3 class="panel-title">Observaciones</h3>
=======
		    <h3 class="panel-title">Uso de Suelo</h3>
>>>>>>> 99fcead28d5c2592eaa750b5a45d726db183876c
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
<<<<<<< HEAD
					  <td class="col-lg-4"><label><strong>Alineamiento:</strong></label></td>
					  <td><?= $model->p1AlineamientoObservaciones ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Numero Oficial:</strong></label></td>
					  <td><?= $model->p1NoOficialObservaciones ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>15% PRO-MAT:</strong></label></td>
					  <td><?= $model->p1ProMatObservaciones ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>5% PRO-HOSP:</strong></label></td>
					  <td><?= $model->p1ProHospObservaciones ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>5% PRO-ALF:</strong></label></td>
					  <td><?= $model->p1ProAlfObservaciones ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>TOTAL:</strong></label></td>
					  <td><?= $model->p1TotalObservaciones ?></td>
=======
					  <td class="col-lg-4"><label><strong>Uso Actual:</strong></label></td>
					  <td><?= $model->p1UsoActual ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Uso Solicitado:</strong></label></td>
					  <td><?= $model->p1UsoSolicitado ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>No de Cajones de Estacionamiento:</strong></label></td>
					  <td><?= $model->p1Cajones ?></td>
				  </tr>
			  </table>
		  </div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Planta Construida</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-2"><label><strong>Planta Baja Construida:</strong></label></td>
					  <td><?= $model->p1PlantaBajaConstruida ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Planta Alta Construida:</strong></label></td>
					  <td><?= $model->p1PlantaAltaConstruida ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Otro:</strong></label></td>
					  <td><?= $model->p1OtrosConstruida ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>TOTAL:</strong></label></td>
					  <td><?= $model->p1TotalConstruida ?></td>
				  </tr>
			  </table>		    
		  </div>
		</div>												
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Planta Por Construir</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-4"><label><strong>Planta Baja Por Contruir:</strong></label></td>
					  <td><?= $model->p1PlantaBajaXConstruir ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Planta Alta Por Contruir:</strong></label></td>
					  <td><?= $model->p1PlantaAltaXConstruir ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>otros:</strong></label></td>
					  <td><?= $model->p1OtrosXConstruir ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>TOTAL:</strong></label></td>
					  <td><?= $model->p1TotalXConstruir ?></td>
>>>>>>> 99fcead28d5c2592eaa750b5a45d726db183876c
				  </tr>
			  </table>
		  </div>
		</div>
	</div>
</div>
<<<<<<< HEAD
=======
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Observaciones</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-2"><label><strong>Observaciones:</strong></label></td>
					  <td><?= $model->p1Observaciones ?></td>
				  </tr>
			  </table>		    
		  </div>
		</div>												
	</div>
</div>
>>>>>>> 99fcead28d5c2592eaa750b5a45d726db183876c
