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
            <td><label><strong><?= $model->getAttributeLabel('p1DescriProceso')?>:</strong></label></td>
            <td><?= $model->p1DescriProceso ?> </td>
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
								  <td class="col-lg-4"><label><strong>Calle:</strong></label></td>
                  <td><label><strong><?= $model->getAttributeLabel('p1CallePredio')?>:</strong></label></td>
                  <td><?= $model->p1CallePredio ?> </td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Fraccionamiento o Colonia:</strong></label></td>
                  <td><label><strong><?= $model->getAttributeLabel('p1ColoniaPredio')?>:</strong></label></td>
                  <td><?= $model->p1ColoniaPredio ?> </td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Número Oficial:</strong></label></td>
                  <td><label><strong><?= $model->getAttributeLabel('p1NumeroOficial')?>:</strong></label></td>
                  <td><?= $model->p1NumeroOficial ?> </td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Número Interior:</strong></label></td>
                  <td><label><strong><?= $model->getAttributeLabel('p1NumeroInterio')?>:</strong></label></td>
                  <td><?= $model->p1NumeroInterio ?> </td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Poblado:</strong></label></td>
                  <td><label><strong><?= $model->getAttributeLabel('p1PobladoPredio')?>:</strong></label></td>
                  <td><?= $model->p1PobladoPredio ?> </td>
							  </tr>				  
							  <tr>
								  <td><label><strong>Sindicatura:</strong></label></td>
                  <td><label><strong><?= $model->getAttributeLabel('p1SindicaturaPredio')?>:</strong></label></td>
                  <td><?= $model->p1SindicaturaPredio ?> </td>
							  </tr>
							  <tr>
								  <td><label><strong>Clave Catastral:</strong></label></td>
                  <td><label><strong><?= $model->getAttributeLabel('p1ClaveCatastralPredio')?>:</strong></label></td>
                  <td><?= $model->p1ClaveCatastralPredio ?> </td>
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
                  <td><label><strong><?= $model->getAttributeLabel('p1SuperficiePredio')?>:</strong></label></td>
                  <td><?= $model->p1SuperficiePredio ?> </td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Norte:</strong></label></td>
                  <td><label><strong><?= $model->getAttributeLabel('p1NortePredio')?>:</strong></label></td>
                  <td><?= $model->p1NortePredio ?> </td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Sur:</strong></label></td>
	                <td><label><strong><?= $model->getAttributeLabel('p1SurPredio')?>:</strong></label></td>
	                <td><?= $model->p1SurPredio ?> </td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Oriente:</strong></label></td>
                  <td><label><strong><?= $model->getAttributeLabel('p1OrientePredio')?>:</strong></label></td>
                  <td><?= $model->p1OrientePredio ?> </td>
							  </tr>
							  <tr>
								  <td class="col-lg-4"><label><strong>Poniente:</strong></label></td>
                  <td><label><strong><?= $model->getAttributeLabel('p1PonientePredio')?>:</strong></label></td>
                  <td><?= $model->p1PonientePredio ?> </td>
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
            <td><label><strong><?= $model->getAttributeLabel('p1NombrePropietarios')?>:</strong></label></td>
            <td><?= $model->p1NombrePropietarios ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Dirección:</strong></label></td>
            <td><label><strong><?= $model->getAttributeLabel('p1DireccionPropietarios')?>:</strong></label></td>
            <td><?= $model->p1DireccionPropietarios ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Teléfono:</strong></label></td>
            <td><label><strong><?= $model->getAttributeLabel('p1TelefonoPropietarios')?>:</strong></label></td>
            <td><?= $model->p1TelefonoPropietarios ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Correo:</strong></label></td>
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
              <td><label><strong><?= $model->getAttributeLabel('p1PlantaBajaConstruida')?>:</strong></label></td>
              <td><?= $model->p1PlantaBajaConstruida ?> </td>
					  </tr>
					  <tr>
						  <td><label><strong>Planta Alta:</strong></label></td>
              <td><label><strong><?= $model->getAttributeLabel('p1PlantaAltaConstruida')?>:</strong></label></td>
              <td><?= $model->p1PlantaAltaConstruida ?> </td>
					  </tr>
					  <tr>
						  <td><label><strong>Segundo Piso:</strong></label></td>
              <td><label><strong><?= $model->getAttributeLabel('p1SegundoNivelConstruida')?>:</strong></label></td>
              <td><?= $model->p1SegundoNivelConstruida ?> </td>
					  </tr>
					  <tr>
						  <td><label><strong>Otros:</strong></label></td>
              <td><label><strong><?= $model->getAttributeLabel('p1OtrosConstruida')?>:</strong></label></td>
              <td><?= $model->p1OtrosConstruida ?> </td>
					  </tr>
					  <tr>
						  <td><label><strong>Total:</strong></label></td>
              <td><label><strong><?= $model->getAttributeLabel('p1TotalConstruida')?>:</strong></label></td>
              <td><?= $model->p1TotalConstruida ?> </td>
				  </table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 pull-right">
					<table class="table table-stripped table-condensed">
					  <tr>
						  <td class="col-lg-4"><label><strong>Planta Baja:</strong></label></td>
			        <td><label><strong><?= $model->getAttributeLabel('p1PlantaBajaXConstruir')?>:</strong></label></td>
              <td><?= $model->p1PlantaBajaXConstruir ?> </td>
					  </tr>
					  <tr>
						  <td><label><strong>Planta Alta:</strong></label></td>
              <td><label><strong><?= $model->getAttributeLabel('p1PlantaAltaXConstruir')?>:</strong></label></td>
              <td><?= $model->p1PlantaAltaXConstruir ?> </td>
					  </tr>
					  <tr>
						  <td><label><strong>Segundo Nivel:</strong></label></td>
              <td><label><strong><?= $model->getAttributeLabel('p1SegundoNivelXConstruir')?>:</strong></label></td>
              <td><?= $model->p1SegundoNivelXConstruir ?> </td>
					  </tr>
					  <tr>
						  <td><label><strong>Otros:</strong></label></td>
              <td><label><strong><?= $model->getAttributeLabel('p1OtrosXConstruir')?>:</strong></label></td>
              <td><?= $model->p1OtrosXConstruir ?> </td>
					  </tr>
					  <tr>
						  <td><label><strong>Total:</strong></label></td>
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
					  <td class="col-lg-2"><label><strong>Observaciones:</strong></label></td>
            <td><label><strong><?= $model->getAttributeLabel('p1Observaciones')?>:</strong></label></td>
            <td><?= $model->p1Observaciones ?> </td>
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
					  <td class="col-lg-2"><label><strong>Sellos:</strong></label></td>
            <td><label><strong><?= $model->getAttributeLabel('p1Sellos')?>:</strong></label></td>
            <td><?= $model->p1Sellos ?> </td>
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
            <td><label><strong><?= $model->getAttributeLabel('p1NombreGestor')?>:</strong></label></td>
            <td><?= $model->p1NombreGestor ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Dirección:</strong></label></td>
            <td><label><strong><?= $model->getAttributeLabel('p1DireccionGestor')?>:</strong></label></td>
            <td><?= $model->p1DireccionGestor ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Teléfono:</strong></label></td>
            <td><label><strong><?= $model->getAttributeLabel('p1TelefonoGestor')?>:</strong></label></td>
            <td><?= $model->p1TelefonoGestor ?> </td>
				  </tr>
				  <tr>
					  <td><label><strong>Correo:</strong></label></td>
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

<!--
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Solicitante</h3>
          </div>
          <div class="panel-body">
              <table class="table table-stripped table-condensed">                
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p1FirmaSolicitante')?>:</strong></label></td>
                    <td><?= $model->p1FirmaSolicitante ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p1FirmaPropietarios')?>:</strong></label></td>
                    <td><?= $model->p1FirmaPropietarios ?> </td>
                </tr>                  
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p1FirmaGestor')?>:</strong></label></td>
                    <td><?= $model->p1FirmaGestor ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p2Escrituras')?>:</strong></label></td>
                    <td><?= $model->p2Escrituras ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p2ReciboDerechos')?>:</strong></label></td>
                    <td><?= $model->p2ReciboDerechos ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p2CroquisUbicacion')?>:</strong></label></td>
                    <td><?= $model->p2CroquisUbicacion ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p2Pago')?>:</strong></label></td>
                    <td><?= $model->p2Pago ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p2Alineamiento')?>:</strong></label></td>
                    <td><?= $model->p2Alineamiento ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p2PropuestaRelotificacion')?>:</strong></label></td>
                    <td><?= $model->p2PropuestaRelotificacion ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p3Escrituras')?>:</strong></label></td>
                    <td><?= $model->p3Escrituras ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p3ReciboDerechos')?>:</strong></label></td>
                    <td><?= $model->p3ReciboDerechos ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p3CroquisUbicacion')?>:</strong></label></td>
                    <td><?= $model->p3CroquisUbicacion ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p3Pago')?>:</strong></label></td>
                    <td><?= $model->p3Pago ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p3Alineamiento')?>:</strong></label></td>
                    <td><?= $model->p3Alineamiento ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p3PropuestaRelotificacion')?>:</strong></label></td>
                    <td><?= $model->p3PropuestaRelotificacion ?> </td>
                </tr>
                  
                <tr>
                    <td><label><strong><?= $model->getAttributeLabel('p4Imprimir')?>:</strong></label></td>
                    <td><?= $model->p4Imprimir ?> </td>
                </tr>
              </table>          
          </div>
        </div>                                              
    </div>
</div>
-->