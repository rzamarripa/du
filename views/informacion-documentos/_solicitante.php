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
					  <td><?= $model->nombreSolicitante ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Dirección:</strong></label></td>
					  <td><?= $model->direccionSolicitante ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Teléfono:</strong></label></td>
					  <td><?= $model->telefonoSolicitante ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Correo:</strong></label></td>
					  <td><?= $model->correoPropietario ?></td>
				  </tr>
			  </table>		    
		  </div>
		</div>												
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Propietario</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-4"><label><strong>Nombre:</strong></label></td>
					  <td><?= $model->nombrePropietario ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Dirección:</strong></label></td>
					  <td><?= $model->direccionPropietario ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Teléfono:</strong></label></td>
					  <td><?= $model->telefonoPropietario ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Correo:</strong></label></td>
					  <td><?= $model->correoPropietario?></td>
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
		    <h3 class="panel-title">Solicitante</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-4"><label><strong>Calle:</strong></label></td>
					  <td><?= $model->callePredio ?></td>
				  </tr>
				  <tr>
					  <td class="col-lg-4"><label><strong>Fraccionamiento o Colonia:</strong></label></td>
					  <td><?= $model->coloniaPredio ?></td>
				  </tr>
				  <tr>
					  <td class="col-lg-4"><label><strong>Número Oficial:</strong></label></td>
					  <td><?= $model->numeroOficialPredio ?></td>
				  </tr>
				  <tr>
					  <td class="col-lg-4"><label><strong>Número Interior:</strong></label></td>
					  <td><?= $model->numeroInteriorPredio ?></td>
				  </tr>
				  <tr>
					  <td class="col-lg-4"><label><strong>Poblado:</strong></label></td>
					  <td><?= $model->pobladoPredio ?></td>
				  </tr>				  
				  <tr>
					  <td><label><strong>Sindicatura:</strong></label></td>
					  <td><?= $model->sindicaturaPredio ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Clave Catastral:</strong></label></td>
					  <td><?= $model->claveCatastralPredio ?></td>
				  </tr>
			  </table>		    
		  </div>
		</div>												
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Observaciones</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-2"><label><strong></strong></label></td>
					  <td><?= $model->observaciones ?></td>
				  </tr>
			  </table>
		  </div>
		</div>
	</div>
</div>