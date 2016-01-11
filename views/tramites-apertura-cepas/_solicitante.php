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
					  <td><?= $model->p1DireccionPropietarios ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Teléfono:</strong></label></td>
					  <td><?= $model->p1TelefonoPropietarios ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Clave Catastral:</strong></label></td>
					  <td><?= $model->p1ClaveCatastralPredio ?></td>
				  </tr>
			  </table>		    
		  </div>
		</div>												
	</div>
</div>