<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Solicitante</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1NombreSolicitante')?>:</strong></label></td>
            <td><?= $model->p1NombreSolicitante ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1DireccionSolicitante')?>:</strong></label></td>
            <td><?= $model->p1DireccionSolicitante ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1TelefonoSolicitante')?>:</strong></label></td>
            <td><?= $model->p1TelefonoSolicitante ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1CorreoSolicitante')?>:</strong></label></td>
            <td><?= $model->p1CorreoSolicitante ?> </td>
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
            <td><label><strong><?= $model->getAttributeLabel('p1UsoActual')?>:</strong></label></td>
            <td><?= $model->p1UsoActual ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1UsoSolicitado')?>:</strong></label></td>
            <td><?= $model->p1UsoSolicitado ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1DescripcionProceso')?>:</strong></label></td>
            <td><?= $model->p1DescripcionProceso ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1NoCajones')?>:</strong></label></td>
            <td><?= $model->p1NoCajones ?> </td>
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
                  <td><label><strong><?= $model->getAttributeLabel('p1CallePredio')?>:</strong></label></td>
                  <td><?= $model->p1CallePredio ?> </td>
							  </tr>
							  <tr>
                  <td><label><strong><?= $model->getAttributeLabel('p1ColoniaPredio')?>:</strong></label></td>
                  <td><?= $model->p1ColoniaPredio ?> </td>
							  </tr>
							  <tr>
                  <td><label><strong><?= $model->getAttributeLabel('p1NumeroOficial')?>:</strong></label></td>
                  <td><?= $model->p1NumeroOficial ?> </td>
							  </tr>
							  <tr>
                  <td><label><strong><?= $model->getAttributeLabel('p1NumeroInterio')?>:</strong></label></td>
                  <td><?= $model->p1NumeroInterio ?> </td>
							  </tr>
							  <tr>
                  <td><label><strong><?= $model->getAttributeLabel('p1PobladoPredio')?>:</strong></label></td>
                  <td><?= $model->p1PobladoPredio ?> </td>
							  </tr>				  
							  <tr>
                  <td><label><strong><?= $model->getAttributeLabel('p1SindicaturaPredio')?>:</strong></label></td>
                  <td><?= $model->p1SindicaturaPredio ?> </td>
							  </tr>
							  <tr>
                  <td><label><strong><?= $model->getAttributeLabel('p1ClaveCatastralPredio')?>:</strong></label></td>
                  <td><?= $model->p1ClaveCatastralPredio ?> </td>
							  </tr>
						  </table>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">				  
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							  <table class="table table-stripped table-condensed">				  
								  <tr>
									  <td class="col-lg-4"><label><strong><h3>Colindancias:</h3></strong></label></td>
									  <td></td>
								  </tr>
								  <tr>
	                  <td><label><strong><?= $model->getAttributeLabel('p1NortePredio')?>:</strong></label></td>
	                  <td><?= $model->p1NortePredio ?> </td>
								  </tr>
								  <tr>
		                <td><label><strong><?= $model->getAttributeLabel('p1SurPredio')?>:</strong></label></td>
		                <td><?= $model->p1SurPredio ?> </td>
								  </tr>
								  <tr>
	                  <td><label><strong><?= $model->getAttributeLabel('p1OrientePredio')?>:</strong></label></td>
	                  <td><?= $model->p1OrientePredio ?> </td>
								  </tr>
								  <tr>
	                  <td><label><strong><?= $model->getAttributeLabel('p1PonientePredio')?>:</strong></label></td>
	                  <td><?= $model->p1PonientePredio ?> </td>
								  </tr>
							  </table>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							  <table class="table table-stripped table-condensed">
								  <tr>
									  <td class="col-lg-4"><label><strong><h5><?= $model->getAttributeLabel('p1SuperficiePredio')?>:</h5></strong></label></td>
									  <td class="col-lg-4"><label><strong><h5><?= $model->p1SuperficiePredio ?></h5></strong></label></td>
								  </tr>
								  <tr>
	                  <td><label><strong><?= $model->getAttributeLabel('p1NorOrientePredio')?>:</strong></label></td>
	                  <td><?= $model->p1NorOrientePredio ?> </td>
								  </tr>
								  <tr>
	                  <td><label><strong><?= $model->getAttributeLabel('p1SurOrientePredio')?>:</strong></label></td>
	                  <td><?= $model->p1SurOrientePredio ?> </td>
								  </tr>
								  <tr>
		                <td><label><strong><?= $model->getAttributeLabel('p1NorPonientePredio')?>:</strong></label></td>
		                <td><?= $model->p1NorPonientePredio ?> </td>
								  </tr>
								  <tr>
	                  <td><label><strong><?= $model->getAttributeLabel('p1SurPonientePredio')?>:</strong></label></td>
	                  <td><?= $model->p1SurPonientePredio ?> </td>
								  </tr>
								</table>							
							</div>
						</div>
				  </div>
			  </div>
		</div>
	</div>
</div>
                  
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Propietario</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1NombrePropietarios')?>:</strong></label></td>
            <td><?= $model->p1NombrePropietarios ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1DireccionPropietarios')?>:</strong></label></td>
            <td><?= $model->p1DireccionPropietarios ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1TelefonoPropietarios')?>:</strong></label></td>
            <td><?= $model->p1TelefonoPropietarios ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1CorreoPropietarios')?>:</strong></label></td>
            <td><?= $model->p1CorreoPropietarios ?> </td>
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
		    <h3 class="panel-title">Superficies</h3>
		  </div>
		  <div class="panel-body">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				  <table class="table table-stripped table-condensed">				  
					  <tr>
              <td><label><strong><?= $model->getAttributeLabel('p1PlantaBajaConstruida')?>:</strong></label></td>
              <td><?= $model->p1PlantaBajaConstruida ?> </td>
					  </tr>
					  <tr>
              <td><label><strong><?= $model->getAttributeLabel('p1PlantaAltaConstruida')?>:</strong></label></td>
              <td><?= $model->p1PlantaAltaConstruida ?> </td>
					  </tr>
					  <tr>
              <td><label><strong><?= $model->getAttributeLabel('p1SegundoNivelConstruida')?>:</strong></label></td>
              <td><?= $model->p1SegundoNivelConstruida ?> </td>
					  </tr>
					  <tr>
              <td><label><strong><?= $model->getAttributeLabel('p1OtrosConstruida')?>:</strong></label></td>
              <td><?= $model->p1OtrosConstruida ?> </td>
					  </tr>
					  <tr>
              <td><label><strong><?= $model->getAttributeLabel('p1TotalConstruida')?>:</strong></label></td>
              <td><?= $model->p1TotalConstruida ?> </td>
				  </table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pull-right">
					<table class="table table-stripped table-condensed">
					  <tr>
			        <td><label><strong><?= $model->getAttributeLabel('p1PlantaBajaXConstruir')?>:</strong></label></td>
              <td><?= $model->p1PlantaBajaXConstruir ?> </td>
					  </tr>
					  <tr>
              <td><label><strong><?= $model->getAttributeLabel('p1PlantaAltaXConstruir')?>:</strong></label></td>
              <td><?= $model->p1PlantaAltaXConstruir ?> </td>
					  </tr>
					  <tr>
              <td><label><strong><?= $model->getAttributeLabel('p1SegundoNivelXConstruir')?>:</strong></label></td>
              <td><?= $model->p1SegundoNivelXConstruir ?> </td>
					  </tr>
					  <tr>
              <td><label><strong><?= $model->getAttributeLabel('p1OtrosXConstruir')?>:</strong></label></td>
              <td><?= $model->p1OtrosXConstruir ?> </td>
					  </tr>
					  <tr>
              <td><label><strong><?= $model->getAttributeLabel('p1TotalXConstruir')?>:</strong></label></td>
              <td><?= $model->p1TotalXConstruir ?> </td>
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
            <td class="col-lg-2"><label><strong><?php /* $model->getAttributeLabel('p1Observaciones'): */?></strong></label></td>
            <td><?= $model->p1Observaciones ?></td>
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
		    <h3 class="panel-title">Sellos:</h3>
		  </div>
		  <div class="panel-body">
			  <table class="table table-stripped table-condensed">				  
				  <tr>
					<br>
					<br>
					<br>
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
            <td><label><strong><?= $model->getAttributeLabel('p1NombreGestor')?>:</strong></label></td>
            <td><?= $model->p1NombreGestor ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1DireccionGestor')?>:</strong></label></td>
            <td><?= $model->p1DireccionGestor ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1TelefonoGestor')?>:</strong></label></td>
            <td><?= $model->p1TelefonoGestor ?> </td>
				  </tr>
				  <tr>
            <td><label><strong><?= $model->getAttributeLabel('p1CorreoGestor')?>:</strong></label></td>
            <td><?= $model->p1CorreoGestor ?> </td>
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