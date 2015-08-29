<div style="text-align: left; padding-left: 230px;">DIRECCION DE DESARROLLO URBANO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $model->id?></div>
<div style="text-align: left; padding-left: 360px;">Y ECOLOGICO</div>
<div style="text-align: left; padding-left: 390px;">&nbsp;</div>
<div style="text-align: left; padding-left: 300px;">FORMATO DE SOLICITUD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $model->id?></div>
<div style="text-align: left; padding-left: 390px;">&nbsp;</div>
<div style="text-align: left; padding-left: 270px;">"Ciudad Heroica Culiac&aacute;n Rosales, Sinaloa", a <?php 
			$fecha=new DateTime( $model->fechaModificacion);
			echo $fecha->format('j \d\e m \d\e\l Y'); 

			?></div>
	<div class="panel panel-default">
		<div class="panel-heading">
 			<h3 class="panel-title">Solicitud de :</h3>
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

<p><strong><?=$model->p1NombreSolicitante?></strong></p>
<p>Presente.-</p>
<p style="text-align: justify;">Con fundamento en el art&iacute;culo 115 fracci&oacute;n V inciso d) de la constituci&oacute;n politica de los Estados Unidos Mexicanos; articulo 125 fraccion V inciso c) de la constituci&oacute;n politica del Estado de sinaloa; articulo 29 fraccion I, de la Ley de Gobierno Municipal del Estado de Sinaloa; articulo 97 numero 4, articulo 113 fraccion I, articulo 114 fraccion VII, articulo 116 fraccion II del Reglamento de la Administracion Publica del Municipio de Culiacan, Sinaloa; la Direccion de Desarrollo Urbano y Ecologia es una autoridad dependiente de la Gerencia Municipal de Obras y Servicios Publicos. Asimismo, que conforme con lo previsto por el articulo 4, fraccion III, del Reglamento de Contrucciones para el Municipio de Culiac&aacute;n, Sinaloa, a esta Direcci&oacute;n en coordinaci&oacute;n con la &aacute;reas dependientes de esta, le compete velar por su puntual observancia y cumplimiento.</p>
<p style="text-align: justify;">De la misma forma, que al suscrito le fue conferido el nombramiento que lo acredita como Director de Desarrollo Urbano y Ecolog&iacute;a por el ciudadano Presidente Municipal el pasado dia 01 del mes de Enero de 2014, de ah&iacute; que, dada la existencia juridica de esta autoridad seg&uacute;n la prevenci&oacute;n legal del Reglamento Interior de Administraci&oacute;n del Municipio de Culiac&aacute;n a que se hizo menci&oacute;n, y la atribuci&oacute;n legal que consagra el dispositivo citado en segundo orden, cuente con la competencia para actuar en el tiempo y lugar en que lo hace.</p>
<p style="text-align: justify;">Sirve de Fundamento legal la expedici&oacute;n de este documento, lo dispuesto en los articulos 3 Fracci&oacute;n IX,XVIII, 7 Fracci&oacute;n II, 42 y 44 del Reglamento de Construcciones para el Municipio de Culiac&aacute;n, asi como lo establecido en el PLAN DIRECTOR DE DESARROLLO URBANO DE CULIACAN, y su clasificaci&oacute;n contenida en la Matriz y Compatibilidad de Usos y Destino del Suelo con la tipolog&iacute;a: MINISUPER.</p>
<p style="text-align: justify;">En el ejercicio de las precitadas atribuciones legales y en atenci&oacute;n a su solicitud de la fecha <?php 
			$fecha=new DateTime( $model->fechaCreacion);
			echo $fecha->format('j \d\e m \d\e\l Y'); 

			?>, relativo a la petici&oacute;n de <strong>CONSTANCIA DE ZONIFICACION </strong>para un predio urbano ubicado en calle <strong><?= $model->p1CallePredio ?> #<?= $model->p1NumeroOficialPredio ?> <?= $model->p1NumeroInteriorPredio ?>, col. <?= $model->p1ColoniaPredio ?> de esta ciudad, </strong>para la instaci&oacute;n y operaci&oacute;n de un <?= $model->p1UsoSolicitado ?>. Le informo que en virtud a lo solicitado, se dictamina <strong>PROCEDENTE CONDICIONADO</strong></p>
<p style="text-align: justify;">Esta <strong>CONSTANCIA DE ZONIFICICAICI&Oacute;N,</strong> no autoriza al Solicitante a construir y estara sujeta a la aprobaci&oacute;n de los dict&aacute;menes correspondientes.</p>
<p style="text-align: center;"><strong>ATENTAMENTE</strong></p>
<p style="text-align: center;"><strong>DIRECTOR DE DESARROLLO URBANO Y ECOLOG&Iacute;A</strong></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><strong>ARQ. JOSE PASTOR CASTA&Ntilde;EDA VERDUZCO</strong></p>
<div>Vo.Bo. Arq. Miguel &aacute;ngel Brown L&oacute;pez, Subdirector de Control Urbano.</div>
<div>Vo.Bo. Arq. Mariel Vandore Valenzuela Hern&aacute;ndez, Jefe del Departamento de Fraccionamientos y Uso de Suelo.</div>
<div>C.c.p.- Expediente.</div>
<div style="text-align: center;"><strong>**Este documento tiene vigencia de 6 meses a partir de la fecha de expedici&oacute;n**.</strong></div>
