<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Solicitante</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					  <td class="col-lg-2"><label><strong>Numero de Oficio:</strong></label></td>
					  <td><?= $model->p1NoOficioTemporal ?></td>
					  <td><label><strong>En Relacion a :</strong></label></td>
					  <td><?= $model->p1RelacionTemporal ?></td>
				  </tr>
				  <tr>
					  <td><label><strong>Dirigido a:</strong></label></td>
					  <td><?= $model->p1DirigidoTemporal ?> </td>
					  <td><label><strong>Quien Firmara:</strong></label></td>
					  <td><?= $model->p1FirmaTemporal ?></td>
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