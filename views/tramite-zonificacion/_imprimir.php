<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Solicitante</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-2"><label><strong>Nombre:</strong></label></td>
					  <td><?= $model->p1NombreSolicitante ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Dirección:</strong></label></td>
					  <td><?= $model->p1DireccionSolicitante ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Teléfono:</strong></label></td>
					  <td><?= $model->p1TelefonoSolicitante ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Correo:</strong></label></td>
					  <td><?= $model->p1CorreoPropietario ?></td>
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
		    <h3 class="panel-title">Uso de Suelo</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-4"><label><strong>Uso Actual:</strong></label></td>
					  <td><?= $model->p1UsoActual ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Uso Solicitado:</strong></label></td>
					  <td><?= $model->p1UsoSolicitado ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Descripcion del Proceso:</strong></label></td>
					  <td><?= $model->p1DescriProceso ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>No. de Cajones de Estacionamiento:</strong></label></td>
					  <td><?= $model->p1NoCajones ?></td>
				  </tr>
			  </table>
		  </div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Datos del Predio</h3>
			  </div>
			  <div class="panel-body">				  
				  <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">				  
						  <table class="table table-stripped table-condensed">				  
							  <tr>
								  <td class="col-lg-4"><label><strong>Calle:</strong></label></td>
								  <td><?= $model->p1CallePredio ?></td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Fraccionamiento o Colonia:</strong></label></td>
								  <td><?= $model->p1ColoniaPredio ?></td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Número Oficial:</strong></label></td>
								  <td><?= $model->p1NumeroOficialPredio ?></td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Número Interior:</strong></label></td>
								  <td><?= $model->p1NumeroInteriorPredio ?></td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Poblado:</strong></label></td>
								  <td><?= $model->p1PobladoPredio ?></td>
							  </tr>				  
							  <tr>
								  <td><label><strong>Sindicatura:</strong></label></td>
								  <td><?= $model->p1SindicaturaPredio ?> </td>
							  </tr>
							  <tr>
								  <td><label><strong>Clave Catastral:</strong></label></td>
								  <td><?= $model->p1ClaveCatastralPredio ?></td>
							  </tr>
						  </table>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">				  
						  <table class="table table-stripped table-condensed">				  
							  <tr>
								  <td class="col-lg-4"><label><strong><h3>Colindancias:</h3></strong></label></td>
								  <td></td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Superficie del Predio:</strong></label></td>
								  <td><?= $model->p1SuperficiePredio ?></td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Norte:</strong></label></td>
								  <td><?= $model->p1NortePredio ?></td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Sur:</strong></label></td>
								  <td><?= $model->p1SurPredio ?></td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Oriente:</strong></label></td>
								  <td><?= $model->p1OrientePredio ?></td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Poniente:</strong></label></td>
								  <td><?= $model->p1PonientePredio ?></td>
							  </tr>
						  </table>							
						</div>
				  </div>
			  </div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
					  <td><label><strong>Correo:</strong></label></td>
					  <td><?= $model->p1CorreoPropietario ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Firma:</strong></label></td>
					  <td></td>
				  </tr>
			  </table>		    
		  </div>
		</div>												
	</div>
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Superficies</h3>
		  </div>
		  <div class="panel-body">
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
				  <table class="table table-stripped table-condensed">				  
					  <tr>
						  <td class="col-lg-4"><label><strong>Planta Baja:</strong></label></td>
						  <td><?= $model->p1PlantabajaConstruida ?></td>
					  </tr>
					  <tr>
						  <td><label><strong>Planta Alta:</strong></label></td>
						  <td><?= $model->p1PlantaaltaConstruida ?> </td>
					  </tr>
					  <tr>
						  <td><label><strong>Segundo Piso:</strong></label></td>
						  <td><?= $model->p1SegundonivelConstruida ?></td>
					  </tr>
					  <tr>
						  <td><label><strong>Otros:</strong></label></td>
						  <td><?= $model->p1OtrosConstruida ?></td>
					  </tr>
					  <tr>
						  <td><label><strong>Total:</strong></label></td>
						  <td><?= $model->p1TotalConstruida ?></td>
				  </table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">				
					<table class="table table-stripped table-condensed">				  
					  <tr>
						  <td class="col-lg-4"><label><strong>Planta Baja:</strong></label></td>
						  <td><?= $model->p1PlantabajaXConstruir ?></td>
					  </tr>
					  <tr>
						  <td><label><strong>Planta Alta:</strong></label></td>
						  <td><?= $model->p1PlantaaltaXConstruir ?> </td>
					  </tr>
					  <tr>
						  <td><label><strong>Segundo Nivel:</strong></label></td>
						  <td><?= $model->p1SegundonivelXConstruir ?></td>
					  </tr>
					  <tr>
						  <td><label><strong>Otros:</strong></label></td>
						  <td><?= $model->p1OtrosXConstruir ?></td>
					  </tr>
					  <tr>
						  <td><label><strong>Total:</strong></label></td>
						  <td><?= $model->p1TotalXConstruir ?></td>
					  </tr>
				  </table>
				</div>
		  </div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Sellos:</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-2"><label><strong>Sellos:</strong></label></td>
					  <td></td>
				  </tr>
			  </table>		    
		  </div>
		</div>												
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Gestor</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-2"><label><strong>Nombre:</strong></label></td>
					  <td><?= $model->p1NombreGestor ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Dirección:</strong></label></td>
					  <td><?= $model->p1DireccionGestor ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Teléfono:</strong></label></td>
					  <td><?= $model->p1TelefonoGestor ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Correo:</strong></label></td>
					  <td><?= $model->p1CorreoGestor ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Firma:</strong></label></td>
					  <td></td>
				  </tr>
			  </table>		    
		  </div>
		</div>
	</div>
</div>
