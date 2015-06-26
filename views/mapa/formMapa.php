<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\MENUUSUARIOS */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">
	<!-- widget options:
	usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

	data-widget-colorbutton="false"
	data-widget-editbutton="false"
	data-widget-togglebutton="false"
	data-widget-deletebutton="false"
	data-widget-fullscreenbutton="false"
	data-widget-custombutton="false"
	data-widget-collapsed="true"
	data-widget-sortable="false"

	-->
	<header role="heading"><div class="jarviswidget-ctrls" role="menu">   </div>
		<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
		<h2>Ver el mapa</h2>


		<script type="text/javascript>" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>


	<span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

	<!-- widget div-->
	<div role="content">

		<!-- widget edit box -->
		<div class="jarviswidget-editbox">
			<!-- This area used as dropdown edit box -->

		</div>
		<!-- end widget edit box -->

		<!-- widget content -->
		<div class="widget-body no-padding">

			<?php $form = ActiveForm::begin(['id' => 'my-form', 'options'=>['class'=>'smart-form'], 'action'=>['mapa/mapa']]); ?>
				<header>
					Escriba la siguiente información para ver el Mapa
				</header>

				<fieldset>

					<div class="col-sm-12 col-md-6 col-lg-3">
						<label class="label">Elija La Configuración de fecha</label>
						<div class="col-sm-12 col-md-6 col-lg-12">
							<section>
								<div id="grupo_reporte" class="btn-group" data-toggle="buttons">
									<label href="javascript:void(0);" class="btn btn-primary active" style="padding: 5px;" onclick="clickMetaventa()" id="meta_venta" >
										<input type="radio" name="mode" id="reporte1" value="meta_venta">Meta Venta
									</label>
									<label href="javascript:void(0);" class="btn btn-primary" style="padding: 5px;" onclick="clickMetaingresos()" id="meta_ingresos">
										<input type="radio" name="mode" id="reporte2" value="meta_ingresos">Meta Ingresos
									</label>
									<label href="javascript:void(0);" class="btn btn-primary" style="padding: 5px;" onclick="clickUtilidadbruta()" id="utilidad_bruta">
										<input type="radio" name="mode" id="reporte3" value="meta_ingresos">Utilidad Bruta
									</label>
									<input type="hidden" id="filtroreporte" value="ventas" />
								</div>
							</section>
							<section>
							<label class="label">Fecha inicio</label>
							<label class="input" style="height: 28px;">
								<input id="fecha1" type="date" name="parametros[fecha1]" style="width:99%">
							</label>						
						</section>
						<section>
							<label class="label">Fecha fin</label>
							<label class="input" style="height: 28px;">
								<input id="fecha2" type="date" name="parametros[fecha2]" style="width:99%">
							</label>						
						</section>			
						<section>
								<div id="grupo_filtro1" class="btn-group" data-toggle="buttons">
									<label href="javascript:void(0);" class="btn btn-primary active" style="padding: 5px;" onclick="clickSemana();borrarMarcadores();cargardatos()" id="semana" >
										<input type="radio" name="mode" id="filtro1" value="semana">Semana
									</label>
									<label href="javascript:void(0);" class="btn btn-primary" style="padding: 5px;" onclick="clickMes();borrarMarcadores();cargardatos()" id="mes">
										<input type="radio" name="mode" id="filtro1" value="mes">Mes
									</label>
									<label href="javascript:void(0);" class="btn btn-primary" style="padding: 5px;" onclick="clickAnyo();borrarMarcadores();cargardatos()" id="anyo">
										<input type="radio" name="mode" id="filtro1" value="anyo">Año
									</label>
									<label href="javascript:void(0);" class="btn btn-primary" style="padding: 5px;" onclick="clickTemporada();borrarMarcadores();cargardatos()" id="temporada">
										<input type="radio" name="mode" id="filtro1" value="temporada">Temporada
									</label>
									<!-- valor default de filtrooculto1 es semana -->
									<input type="hidden" id="filtrooculto1" value="semana"/>
								</div>
							</section>
							<section>
								<div id="grupo_filtro2" class="btn-group" data-toggle="buttons">
									<label href="javascript:void(0);" class="btn btn-primary active" style="padding: 5px;" onclick="clickActual();borrarMarcadores();cargardatos()" id="actual" >
										<input type="radio" name="mode" id="filtro2">Actual
									</label>
									<label href="javascript:void(0);" class="btn btn-primary" style="padding: 5px;" onclick="clickPasado();borrarMarcadores();cargardatos()" id="pasado" >
										<input type="radio" name="mode" id="filtro2">Pasado
									</label>
									<label href="javascript:void(0);" class="btn btn-primary" style="padding: 5px;" onclick="clickAnyoAnterior();borrarMarcadores();cargardatos()" id="anyo_anterior">
										<input type="radio" name="mode" id="filtro2">Año Anterior
									</label>
									<!-- valor default de filtrooculto1 es semana -->
									<input type="hidden" id="filtrooculto2" value="actual" />
								</div>
							</section>
						</div>
					</div>
					<div class="row">
  						<div class="col-lg-8">
					    	<div id="map-canvas" style="height:800px; "></div>
  						</div>
					</div>
				</fieldset>
			

				<footer>					
					<!--<?= Html::submitButton('Ver', ['class'=>'btn btn-primary']) ?>-->
					<button type="button" class="btn btn-default" onclick="window.history.back();">
						Atrás
					</button>
				</footer>
			<?php ActiveForm::end(); ?>

		</div>
		<!-- end widget content -->

	</div>
	<!-- end widget div -->

</div>

<!--
<script language="javascript" src="js/jquery.js"></script>
<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
-->

<script type=text/javascript>

	var map;
	var pines;
	var objeto_contentString = {};
	var markerCollections = []; //Tener este arreglo en global me permite tener referencia de marcadores, para poder borrarlo
	//var objeto_infowindow = {};
	//var object_marker = {};


	$(document).ready(function(){
	   
	   $("#category").change(function () {
	   		//alert($("#category :selected").text());
	           $("#category option:selected").each(function () {
	            id_category = $(this).val();
	            //alert(id_category);
	        });
	   })

	   function initialize() {
	    	var mapOptions = {
	      		zoom: 5,
	      		center: new google.maps.LatLng(19.4937408,-103.7236681)
	    	}
	    	map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	    	//setMarkers(map, pines);
		}

  		google.maps.event.addDomListener(window, 'load', initialize);

  		//Carga el primer reporte simulando el click al primer botón.
  		$('#meta_venta').click()

	});

	function borrarMarcadores(){ 
		if (markerCollections.length > 0 ){
			for (var i=0; i < markerCollections.length; i++){
				markerCollections[i].setMap(null);
			}
			markerCollections = [];
		}
	}

	function cargardatos(){
		//objDropDown.value;
		var filtroreporte = $('#filtroreporte').val();
		var urlaction = "";
		if (filtroreporte == 'ventas'){
			urlaction = "<?php echo Yii::$app->urlManager->createUrl('mapa/getmetasventaszonas');?>"
		}
		else if (filtroreporte == 'ingresos'){
			urlaction = "<?php echo Yii::$app->urlManager->createUrl('mapa/getmetasingresoszonas');?>"
		}
		else if (filtroreporte == 'utilidadbruta'){
			urlaction = "<?php echo Yii::$app->urlManager->createUrl('mapa/getutilidadbruta');?>"
		}

		var fecha1 = $('#fecha1').val();
		var fecha2 = $('#fecha2').val();
		$.ajax({
			dataType: "json",			
			type:'get',
			url: urlaction, 
			data:{"fecha1": fecha1, "fecha2":fecha2},
			success: function(result){
				pines = [];
				for(var i = 0; i<result.length; i++){						
					pines.push([
						result[i]["NOM_ZONA"], 
						result[i]["LATITUD"], 
						result[i]["LONGITUD"],
						//result[i]["META"],
						//result[i]["VENTA"],
						//result[i]["PTJE_CRECIMIENTO_META"],
					]); 
				}
				//AQUI SE MANDA LLAMAR LA FUNCION QUE PONE LOS PINES
				setMarkers(map, pines, result);
			},
			error: function(xhr){
			  alert("Ups: " + xhr.status + " " + xhr.statusText);
			}
		});
	}  	

	function setMarkers(map, locations, contenido) {
	  // Add markers to the map
	  //console.log(contenido);
	  // Marker sizes are expressed as a Size of X,Y
	  // where the origin of the image (0,0) is located
	  // in the top left of the image.

	  // Origins, anchor positions and coordinates of the marker
	  // increase in the X direction to the right and in
	  // the Y direction down.
	  var pinrojo = {
	    url: '<?php echo Yii::$app->request->baseUrl."/images/pinrojo.png";?>',
	    // This marker is 20 pixels wide by 32 pixels tall.
	    size: new google.maps.Size(20, 32),
	    // The origin for this image is 0,0.
	    origin: new google.maps.Point(0,0),
	    // The anchor for this image is the base of the flagpole at 0,32.
	    anchor: new google.maps.Point(0, 32)
	  };
	  var pinverde = {
	    url: '<?php echo Yii::$app->request->baseUrl."/images/pinverde.png";?>',
	    size: new google.maps.Size(20, 32),
	    origin: new google.maps.Point(0,0),
	    anchor: new google.maps.Point(0, 32)
	  };
	  var pinnaranja = {
	    url: '<?php echo Yii::$app->request->baseUrl."/images/pinnaranja.png";?>',
	    size: new google.maps.Size(20, 32),
	    origin: new google.maps.Point(0,0),
	    anchor: new google.maps.Point(0, 32)
	  };

	  var pinazul = {
	    url: '<?php echo Yii::$app->request->baseUrl."/images/pinazul.png";?>',
	    size: new google.maps.Size(20, 32),
	    origin: new google.maps.Point(0,0),
	    anchor: new google.maps.Point(0, 32)
	  };

	  // Shapes define the clickable region of the icon.
	  // The type defines an HTML &lt;area&gt; element 'poly' which
	  // traces out a polygon as a series of X,Y points. The final
	  // coordinate closes the poly by connecting to the first
	  // coordinate.
	  var shape = {
	      coords: [1, 1, 1, 20, 18, 20, 18 , 1],
	      type: 'poly'
	  };

	   //var markerCollections = [];
  	   var objeto_infowindow = [];

	   for (var i = 0; i < locations.length; i++) {

	   		switch ( $('#filtroreporte').val()  ) {
	   			case "ventas":
	   			 	objeto_contentString['contentString' + i ] = "META: " + accounting.formatMoney(contenido[i]["META"]) + "<BR/>" + contenido[i]["NOMBRE_VALOR"] + ": " + accounting.formatMoney(contenido[i]["VALOR"]) + 
	        		"<BR/>" + "PORCENTAJE: " + contenido[i]["PTJE_CRECIMIENTO_META"] + " %";
	        		break;
	        	case "ingresos":
	   			 	objeto_contentString['contentString' + i ] = "META: " + accounting.formatMoney(contenido[i]["META"]) + "<BR/>" + contenido[i]["NOMBRE_VALOR"] + ": " + accounting.formatMoney(contenido[i]["VALOR"]) + 
	        		"<BR/>" + "PORCENTAJE: " + contenido[i]["PTJE_CRECIMIENTO_META"] + " %";
	        		break;
	        	case "utilidadbruta": 
	        		objeto_contentString['contentString' + i ] = "VENTA: " + accounting.formatMoney(contenido[i]["VENTA"]) + "<BR/>" + "UTILIDAD BRUTA" + ": " + accounting.formatMoney(contenido[i]["UTILIDAD_BRUTA"]) + 
	        		"<BR/>" + "PORCENTAJE: " + contenido[i]["PTJE_UTILIDAD_BRUTA"] + " %";
	        		break;
	        }

	        
	        objeto_infowindow['infowindow' + i] = new google.maps.InfoWindow({
	        	content: objeto_contentString['contentString' + i ]
		    });
		    //var porcentaje = contenido[i]["PTJE_CRECIMIENTO_META"];
		    var image;
		    if (contenido[i]["COLOR_PIN"] == 'ROJO');{
		    	image = pinrojo;
		    }
		    if (contenido[i]["COLOR_PIN"] == 'NARANJA') {
		    	image = pinnaranja;
		    }
		    if (contenido[i]["COLOR_PIN"] == 'VERDE') {
		    	image = pinverde;
		    }
		    if (contenido[i]["COLOR_PIN"] == 'AZUL') {
		    	image = pinazul;
		    }

		    
		    var beach = locations[i];
		    var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
		    // One object marker per one entity
		    var object_marker = new google.maps.Marker({
		        position: myLatLng,
		        map: map,
		        icon: image ,
		        shape: shape,
		        title: beach[0],
		        zIndex: beach[3]
		    });

		   	var onclick = function(objeto_infowindow,marker){
	        var obj = objeto_infowindow;
	        return function(){
	            obj.open(map,marker);
	        	}
	    	}


	   	   google.maps.event.addListener(object_marker, 'click', onclick(objeto_infowindow['infowindow' + i], object_marker) );

	   	   // Keep the marker for later clean up if required
    	markerCollections.push(object_marker);
	  }

	   //console.log(objeto_contentString);
	}

	var f = new Date();
	var mes = f.getMonth() < 10 ? '0' + (f.getMonth()+1) : (f.getMonth()+1);
	var dia = f.getDate() < 10 ? '0' + f.getDate() : f.getDate();
	var diaAnteriorSinFormato = f.getDate()-1;
	var diaAnterior = diaAnteriorSinFormato < 10 ? '0' + diaAnteriorSinFormato : diaAnteriorSinFormato;



	function changeHiddenInput (objDropDown)
	{
	   var objHidden = document.getElementById("nombre_zona");
	   objHidden.value =  $("#nombre_zona_id :selected").text();
	}

	$("#fecha1").val(  moment().day('monday').format('YYYY-MM-DD')  );
	$("#fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
	$('')

	//$("#fechacorte").val(f.getFullYear() + "-" + mes + "-" + dia);

	function semanaActual(){
		var first = f.getDate() - f.getDay(); // First day is the day of the month - the day of the week
		var last = first + 6; // last day is the first day + 6
		var firstday = new Date(f.setDate(first)).toISOString().substring(0,10);
		var lastday = new Date(f.setDate(last)).toISOString().substring(0,10);
			
			$("#fecha1").val( firstday );
			$("#fecha2").val( lastday );

	}

	function configuradorfecha(){
		filtro1 = $('.active')[0].id;
		filtro2 = $('.active')[1].id;
		console.log(filtro1);
		console.log(filtro2);
	}

	function clickMetaventa(){
		var objHidden = document.getElementById("filtroreporte");
     	objHidden.value =  "ventas";
     	borrarMarcadores();
     	cargardatos();
	}

	function clickMetaingresos(){
		var objHidden = document.getElementById("filtroreporte");
     	objHidden.value =  "ingresos";
     	borrarMarcadores();
     	cargardatos();
	}

	function clickUtilidadbruta(){
		var objHidden = document.getElementById("filtroreporte");
     	objHidden.value =  "utilidadbruta";
     	borrarMarcadores();
     	cargardatos();
	}

	function clickMes(){
		var objHidden = document.getElementById("filtrooculto1");
     	objHidden.value =  "mes";
     	//console.log($('#filtrooculto1').val());
     	//console.log($('#filtrooculto2').val());
     	cambiarFechas();
	}

	function clickMes(){
		var objHidden = document.getElementById("filtrooculto1");
     	objHidden.value =  "mes";
     	//console.log($('#filtrooculto1').val());
     	//console.log($('#filtrooculto2').val());
     	cambiarFechas();
	}

	function clickSemana(){
		var objHidden = document.getElementById("filtrooculto1");
     	objHidden.value =  "semana";
     	//console.log($('#filtrooculto1').val());
     	//console.log($('#filtrooculto2').val());
     	cambiarFechas();
	}

	function clickAnyo(){
		var objHidden = document.getElementById("filtrooculto1");
     	objHidden.value =  "anyo";
     	cambiarFechas();	
	}

	function clickTemporada(){
		var objHidden = document.getElementById("filtrooculto1");
     	objHidden.value =  "temporada";
     	cambiarFechas();	
	}

	function clickActual(){
		var objHidden = document.getElementById("filtrooculto2");
     	objHidden.value =  "actual";
     	cambiarFechas();	
	}

	function clickPasado(){
		var objHidden = document.getElementById("filtrooculto2");
     	objHidden.value =  "pasado";
     	cambiarFechas();
	}

	function clickAnyoAnterior(){
		var objHidden = document.getElementById("filtrooculto2");
     	objHidden.value =  "anyo_anterior";
     	cambiarFechas();	
	}



	function cambiarFechas(){
		//Semana Actual
		if ( $('#filtrooculto1').val() == "semana"  && $('#filtrooculto2').val() == "actual"  ){
			fecha1 = moment().day('monday').format('YYYY-MM-DD');
			fecha2 = moment().format('YYYY-MM-DD');
			
			$('#fecha1').val(fecha1);
			$('#fecha2').val(fecha2);

		}

		//Semana Pasada
		if ( $('#filtrooculto1').val() == "semana"  && $('#filtrooculto2').val() == "pasado"  ){
			fecha1 = moment().startOf('week').subtract(1,'week').add(1,'day').format('YYYY-MM-DD'); //Inicio de semana - una semana +  1 dia
			fecha2 = moment().startOf('week').format('YYYY-MM-DD'); //Inicio de semana en domingo para nosotros es el fin de la semana pasada
			
			$('#fecha1').val(fecha1);
			$('#fecha2').val(fecha2);

		}

		//Semana del Año Anterior
		if ( $('#filtrooculto1').val() == "semana"  && $('#filtrooculto2').val() == "anyo_anterior"  ){
			fecha1 = moment().subtract(1,'year').startOf('week').add(1,'day').format('YYYY-MM-DD'); //Fecha actual - 1 año, inicio de semana q corresponde + un día
			fecha2 = moment().subtract(1,'year').endOf('week').add(1,'day').format('YYYY-MM-DD')
			
			$('#fecha1').val(fecha1);
			$('#fecha2').val(fecha2);
		}

		//Mes Actual
		if ( $('#filtrooculto1').val() == "mes"  && $('#filtrooculto2').val() == "actual"  ){
			fecha1 = moment().startOf('Month').format('YYYY-MM-DD');
			fecha2 = moment().format('YYYY-MM-DD');
			
			$('#fecha1').val(fecha1);
			$('#fecha2').val(fecha2);
		}

		//Mes Pasado
		if ( $('#filtrooculto1').val() == "mes"  && $('#filtrooculto2').val() == "pasado"  ){
			fecha1 = moment().startOf('month').subtract(1,'month').format('YYYY-MM-DD'); //
			fecha2 = moment(fecha1).endOf('month').format('YYYY-MM-DD');
			
			$('#fecha1').val(fecha1);
			$('#fecha2').val(fecha2);

		}

		//Mes del Año Pasado
		if ( $('#filtrooculto1').val() == "mes"  && $('#filtrooculto2').val() == "anyo_anterior"  ){
			fecha1 = moment().startOf('month').subtract(1,'year').format('YYYY-MM-DD'); //
			fecha2 = moment().subtract(1,'year').endOf('month').format('YYYY-MM-DD');
			
			$('#fecha1').val(fecha1);
			$('#fecha2').val(fecha2);

		}


		//Año Actual
		if ( $('#filtrooculto1').val() == "anyo"  && $('#filtrooculto2').val() == "actual"  ){
			fecha1 = moment().startOf('year').format('YYYY-MM-DD');
			fecha2 = moment().format('YYYY-MM-DD');
			
			$('#fecha1').val(fecha1);
			$('#fecha2').val(fecha2);
		}

		//Año Pasado
		if ( $('#filtrooculto1').val() == "anyo"  && $('#filtrooculto2').val() == "pasado"  ){
			fecha1 = moment().subtract(1,'year').startOf('year').format('YYYY-MM-DD');
			fecha2 = moment(fecha1).endOf('year').format('YYYY-MM-DD')
			
			$('#fecha1').val(fecha1);
			$('#fecha2').val(fecha2);

		}

		//Temporada Actual
		if ( $('#filtrooculto1').val() == "temporada"  && $('#filtrooculto2').val() == "actual"  ){
			temporadaActual();
		}

		//Temporada Pasada
		if ( $('#filtrooculto1').val() == "temporada"  && $('#filtrooculto2').val() == "pasado"  ){
			temporadaAnterior();
		}


	}
	
	function temporadaAnterior(){
		var f = new Date();
		
		if(f.getMonth() > 6){
			$("#fecha1").val(f.getFullYear()-1 + "-07-01");
			$("#fecha2").val(f.getFullYear()-1 + "-06-30");
		}else{
			$("#fecha1").val(f.getFullYear()-2 + "-07-01");
			$("#fecha2").val(f.getFullYear()-1 + "-06-30");
		}		
	}
	
	function temporadaActual(){
		if(mes > 6){
			$("#fecha1").val(f.getFullYear() + "-07-01");
			$("#fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
		}else{
			console.log(f.getFullYear() + "-" + mes + "-" + dia);
			$("#fecha1").val(f.getFullYear()-1 + "-07-01");
			$("#fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
		}		
	}
	
</script>


















