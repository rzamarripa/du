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
		<h2>Mejores Productos</h2>


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

			<?php $form = ActiveForm::begin(['id' => 'my-form', 'options'=>['class'=>'smart-form'], 'action'=>['ventas/mejoresproductos']]); ?>
				<header>
					Escriba la siguiente información para ver el Reporte
				</header>

				<fieldset>
					<div class="col-sm-12 col-md-6 col-lg-3 ">
						<section>
							<div class="col-lg-12">
								<label>
									<input type="radio" name="parametros[tipoformato]" value="0" id="productos_pilares" onclick="clickPilares()">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Productos Pilares
								</label>
							</div>
							<div class="col-lg-12">
								<label>
									<input type="radio" name="parametros[tipoformato]" value="1" onclick="clickPotencial()">
									<i data-swchon-text="Si" data-swchoff-text="No" id="productos_potencial" ></i>Productos de Potencial
								</label>
							</div>
							<div class="col-lg-12">
								<label>
									<input type="radio" name="parametros[tipoformato]" value="2" onclick="clickVolumen()">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Productos de Volumen
								</label>
							</div>
							<div class="col-lg-12">
								<label>
									<input type="radio" name="parametros[tipoformato]" value="3" onclick="clickInteres()">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Productos de Interés
								</label>
							</div>
						</section>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 ">
						<section>
							<label class="label">(%) Lim. Utilidad:</label>
							<label class="input">
								<input type="number" name="parametros[lim_utilidad]" id="lim_utilidad" value="0"  style="width:99%">
							</label>						
						</section>
						<section>
							<label class="label">Zona</label>
							<label class="input">
								<select name="parametros[codigoZona]" style="width:99%" class="select2">
									<option></option>
									<?php foreach($zonas as $zona){ ?>
										<option value="<?php echo $zona["COD_ZONA"]; ?>"><?php echo $zona["NOM_ZONA"]; ?></option>
									<?php } ?>
								</select>
							</label>						
						</section>
						<section>
							<label class="label">(%) Lim. Cantidad:</label>
							<label class="input">
								<input type="number" name="parametros[lim_cantidad]" id="lim_cantidad" value="0"  style="width:99%">
							</label>						
						</section>
						<section>
							<label class="label">(%) Lim. Preferentes:</label>
							<label class="input">
								<input type="number" name="parametros[lim_preferentes]" id="lim_preferentes" value="0" style="width:99%" >
							</label>						
						</section>
						<section>
							<label class="label">Grupo Prod</label>
							<label class="input">
								<select id="grupoProductos_id" name="parametros[cod_grupo_prod_interes]" style="width:99%" class="select2" onchange="">
									<option></option>
									<?php foreach($gruposInteres as $grupoInteres){ ?>
										<option value="<?php echo $grupoInteres["COD_GRUPO_PROD_INTERES"]; ?>"><?php echo $grupoInteres["NOM_GRUPO_PROD_INTERES"]; ?></option>
									<?php } ?>
								</select>
								<input type="hidden" name="parametros[nomGrupoProductos]" id="nomGrupoProductos" value="" />
							</label>						
						</section>
						<section>
							<label class="label">Producto(s)</label>
							<label class="input">
								<select id="producto_id" name="parametros[descri]" style="width:99%">
									<option></option>
								</select>
							</label>						
						</section>
						<input type="hidden" name="parametros[potencial]" id="potencial" value="">
					</div>
					<div class="col-sm-12 col-md-3 col-lg-3 ">
						<section>
							<label class="label">Desde:</label>
							<label class="input" style="height: 28px;">
								<input id="fecha1" type="date" name="parametros[fecha1]" style="width:99%">
							</label>						
						</section>
						<section>
							<label class="label">Hasta:</label>
							<label class="input" style="height: 28px;">
								<input id="fecha2" type="date" name="parametros[fecha2]" style="width:99%">
							</label>						
						</section>
						<section>
							<label class="label">Filtrar Productos</label>
							<label class="input">
								<select name="parametros[clasificacion]" style="width:99%" class="select2">
									<option value="T">TODOS</option>
									<option value="P">SOLO PRODUCIDOS LOCALMENTE</option>
								</select>
							</label>
						</section>	
					</div>

					<div class="col-sm-12 col-md-6 col-lg-3">
						<label class="label">Elija La Configuración de fecha</label>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<section>
								<button type="button" class="btn btn-primary btn-block btn-sm" onclick="temporadaAnterior()">Temporada Anterior</button>
								<button type="button" class="btn btn-primary btn-block btn-sm" onclick="temporadaActual()">Temporada Actual</button>
								<button type="button" class="btn btn-primary btn-block btn-sm" onclick="anioAnterior()">Año Anterior</button>
								<button type="button" class="btn btn-primary btn-block btn-sm" onclick="anioActual()">Año Actual</button>

								<button type="button" class="btn btn-primary btn-block btn-sm" onclick="mesAnioAnterior()">Mes Año Anterior</button>
								<button type="button" class="btn btn-primary btn-block btn-sm" onclick="mesAnioActual()">Mes Año Actual</button>
								<button type="button" class="btn btn-primary btn-block btn-sm" onclick='diaAnterior1()'>Día Anterior</button>
								<button type="button" class="btn btn-primary btn-block btn-sm" onclick="diaActual()">Día Actual</button>
							</section>
					</div>
				</fieldset>
			

				<footer>					
					<?= Html::submitButton('Imprimir', ['class' => 'btn btn-danger','id' => 'verReporte', 'name' => 'parametros[verReporte]', "formtarget"=>"_blank"]); ?>
					<?= Html::submitButton('Ver', ['class'=>'btn btn-primary', "formtarget"=>"_blank"]) ?>
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

	/*
	$(document).ready(function(){
	   $("#category").change(function () {
	   		//alert($("#category :selected").text());
	           $("#category option:selected").each(function () {
	            id_category = $(this).val();
	            //alert(id_category);
	            $.post("subcategories.php", { id_category: id_category }, function(data){
	                $("#subcategory").html(data);
	            });            
	        });
	   })
	});
	*/
	

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

	$("#fecha1").val(f.getFullYear() + "-01-01");
	$("#fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
	//$("#fechacorte").val(f.getFullYear() + "-" + mes + "-" + dia);


	function clickPilares(){

		$('#lim_utilidad').parent().parent().show();

		$('#lim_cantidad').parent().parent().hide();
		$('#lim_preferentes').parent().parent().hide();
		$('#grupoProductos_id').parent().parent().hide();

		//cambiar valores
		$('#lim_cantidad').val(0);
		$('#lim_preferentes').val(0);
		$("#grupoProductos_id").select2("val","");
		$('#potencial').val("N");
	}

	function clickPotencial(){
		$('#lim_utilidad').parent().parent().show();
		$('#lim_preferentes').parent().parent().show();

		$('#lim_cantidad').parent().parent().hide();
		$('#grupoProductos_id').parent().parent().hide();

		//cambiar valores
		$('#lim_utilidad').val(60);
		$('#lim_cantidad').val(0);
		$('#lim_preferentes').val(30);
		$("#grupoProductos_id").select2("val","");
		$('#potencial').val("S");

	}

	function clickVolumen(){
		$('#lim_cantidad').parent().parent().show();

		$('#lim_utilidad').parent().parent().hide();
		$('#lim_preferentes').parent().parent().hide();
		$('#grupoProductos_id').parent().parent().hide();

		//cambiar valores
		$('#lim_utilidad').val(0);
		//$('#lim_cantidad').val(0);
		$('#lim_preferentes').val(0);
		$("#grupoProductos_id").select2("val","");
		$('#potencial').val("N");

	}

	function clickInteres(){
		$('#grupoProductos_id').parent().parent().show();

		$('#lim_cantidad').parent().parent().hide();
		$('#lim_utilidad').parent().parent().hide();
		$('#lim_preferentes').parent().parent().hide();

		//cambiar valores
		//$('#lim_utilidad').val(0);
		$('#lim_cantidad').val(0);
		$('#lim_preferentes').val(0);
		//$("#grupoProductos_id").select2("val","");
		$('#potencial').val("N");
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
	
	function anioAnterior(){
		var f = new Date();
		$("#fecha1").val(f.getFullYear()-1 + "-01-01");
		$("#fecha2").val(f.getFullYear()-1 + "-12-31");
	}
	
	function anioActual(){
		var f = new Date();
		$("#fecha1").val(f.getFullYear() + "-01-01");
		$("#fecha2").val(f.getFullYear() + "-06-" + diaAnterior);		
	}
	
	function mesAnioAnterior(){
		var f = new Date();
		$("#fecha1").val(f.getFullYear()-1 + "-" + mes + "-01");
		$("#fecha2").val(f.getFullYear()-1 + "-" + mes + "-" + diaAnterior);		
	}
	
	function mesAnioActual(){
		var f = new Date();
		$("#fecha1").val(f.getFullYear() + "-" + mes + "-01");
		$("#fecha2").val(f.getFullYear() + "-" + mes + "-" + diaAnterior);		
	}
	function diaAnterior1(){
		var f = new Date();
		$("#_fecha1").val(f.getFullYear() + "-" + mes + "-" + diaAnterior);
		$("#fecha2").val(f.getFullYear() + "-" + mes + "-" + diaAnterior);		
	}
	function diaActual(){
		var f = new Date();
		$("#fecha1").val(f.getFullYear() + "-" + mes + "-" + dia);
		$("#fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);		
	}



$(document).ready(function(){  
	
	 $("#producto_id").select2({
    	allowClear: true,
		placeholder: "Seleccione",
		tags: true,// en articulos es valido teclear algún elemento que no exista(iniciales)	
	    ajax: {
	      url: "<?php echo Yii::$app->urlManager->createUrl('utilerias/getarticulospaqa'); ?>",
	      dataType: 'json',
	      delay: 250,
	      data: function (params) {
	        return {
	          q: params.term, // search term
	          page: params.page
	        };
	      },
	      processResults: function (data) {
	        return {
	            results: $.map(data, function(obj) {
	                return { id: obj.DESCRIPCION, text: obj.DESCRIPCION };
	            })
	        };
	    },
	      cache: true
	    },
	    minimumInputLength: 2,
	    });

	 $('#productos_pilares').click();
});


</script>


















