<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MENUUSUARIOS */
/* @var $form yii\widgets\ActiveForm */
?>

<div ng-controller="Toptenproductos" class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">
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
		<h2>Top Ten Productos </h2>

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

			<?php $form = ActiveForm::begin(['id' => 'my-form', 'action'=>['ventas/toptenproductos'], 'options'=>['class'=>'smart-form', 'target'=>'_blank']]); ?>
				<header>
					Escriba la siguiente información para ver el Reporte
				</header>

				<fieldset>
					<div class="col-sm-12 col-md-6 col-lg-3 ">
						<section>
							<label class="label">Cliente</label>
							<label class="input">
								<select id="cliente_id" name="parametros[cod_cte]" style="width:99%" onchange="changeHiddenInputCliente(this)">
									<option></option>
								</select>
								<input type="hidden" name="parametros[nomCliente]" id="nomCliente" value="" />
							</label>						
						</section>
							
						<section>
							<label class="label">Agricolas</label>
							<label class="input">
								<select id="cod_agricola" name="parametros[cod_agricola]" style="width:99%" class="select2" onchange="changeHiddenInputAgricola(this)">
									<option></option>				
								</select>
								<input type="hidden" name="parametros[nomAgricola]" id="nomAgricola" value="" />
							</label>						
						</section>						

						<section>
							<label class="label">Zona</label>
							<label class="input">
								<select id="zona_id" name="parametros[cod_zona]" style="width:99%" class="select2" onchange="changeHiddenInputZona(this)">
									<option></option>
									<?php foreach($zonas as $zona){ ?>
										<option value="<?php echo $zona["CODIGO"]; ?>"><?php echo $zona["NOM_ZONA"]; ?></option>
									<?php } ?>
								</select>
								<input type="hidden" name="parametros[nomZona]" id="nomZona" value="" />
							</label>
						</section>

						<section>
							<label class="label">Grupo</label>
							<label class="input">
								<select id="grupo_id" name="parametros[cod_grupo]" style="width:99%;" class="select2" onchange="changeHiddenInputGrupo(this)">
									<option></option>
									<?php foreach($grupos as $grupo){ ?>
										<option value="<?php echo $grupo["COD_GRUPO"]; ?>"><?php echo $grupo["NOM_GRUPO"]; ?></option>
									<?php } ?>
								</select>
								<input type="hidden" name="parametros[nomGrupo]" id="nomGrupo" value="" />
							</label>
						</section>

						<section>
							<label class="label">Grupo Prod</label>
							<label class="input">
								<select id="grupoProductos_id" name="parametros[cod_grupo_prod_interes]" style="width:99%" class="select2" onchange="changeHiddenInputGrupoProductos(this)">
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
					</div>

					<div class="col-sm-12 col-md-3 col-lg-3">
						<section>
							<label class="label">Desde</label>
							<label class="input" style="height: 28px;">
								<input id="parametros_fecha1" type="date" name="parametros[fecha1]" style="width:99%" value="<?php echo date("Y") . "-01-01";?>">
							</label>						
						</section>
						<section>
							<label class="label">Hasta</label>
							<label class="input" style="height: 28px;">
								<input id="parametros_fecha2" type="date" name="parametros[fecha2]" style="width:99%" value="<?php echo date("Y-m-d"); ?>">
							</label>						
						</section>
						<section>
							<label class="">
								<input type="checkbox" name="parametros[filtrarporporcentajeutlidad]" ng-model="util">
								<i data-swchon-text="Si" data-swchoff-text="No"></i>Filtrar por % de Util
							</label>
						</section>
						<section>
							<div class="col-lg-4">
								<label>
									<input type="radio" name="parametros[min]" checked="checked" value="NO" ng-disabled="!util">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Máximo
								</label>
							</div>
							<div class="col-lg-4">
								<label>
									<input type="radio" name="parametros[min]" value="SI" ng-disabled="!util">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Mínimo
								</label>
							</div>
							<div class="col-lg-4">
								<label >
									<input type="radio" name="parametros[min]" value="E" ng-disabled="!util" style="width: 23px;">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Exacto
								</label>
							</div>
							<div class="col-lg-4">
								<label class=" ">
									<input type="radio" checked="checked" name="parametros[filtrarValor]" value="CATEGORIA" ng-disabled="!util" >
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Categoría
								</label>
							</div>
							<div class="col-lg-4">									
								<select name="parametros[categoria]" style="width:99%" class="select2" ng-disabled="!util" style="height: 28px;">
									<option></option>
									<option value="AAAA">AAAA</option>
									<option value="AAA">AAA</option>
									<option value="AA">AA</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="S">S</option>
								</select>
							</div>
							<div class="col-lg-4">									
								<label>
									<input type="radio" name="parametros[filtrarValor]" value="PORCENTAJE" ng-disabled="!util" class="col-lg-2">
									
									<input type="text" name="parametros[porcentaje]" ng-disabled="!util" class="col-lg-6" value="30" style="height: 28px;">													
								</label>									
							</div>
						</section>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-3">
						<section>
							<label class="label">Utilidad de la empresa hasta(%)</label>
							<label class="input"  style="height: 28px;">
								<input type="text" name="parametros[utilidad_maxima]" maxlength="3" value="101" style="width:99%">
							</label>
						</section>
						<section>
							<label class="label">Documento</label>
							<label class="input">							
								<select name="parametros[cod_doc]" style="width:99%" class="select2">
									<option value="T">T</option>
									<option value="F">F</option>
									<option value="R">R</option>
								</select>
							</label>						
						</section>
						<section>
							<label class="label">Filtrar Productos</label>
							<label class="input">
								<select name="parametros[clasificacion]" style="width:99%" class="select2">
									<option value="T">T</option>
									<option value="P">P</option>
								</select>
							</label>
						</section>
						<section>
							<label class="label">Tipo de Cliente</label>
							<label class="input">
								<select name="parametros[tipo_cliente]" style="width:99%" class="select2">
									<option>TODOS</option>
									<option value="AGRICULTOR">AGRICULTOR</option>
									<option value="COMERCIALIZADOR">COMERCIALIZADOR</option>
									<option value="NO IDENTIFICADO">NO IDENTIFICADO</option>
									<option value="OTRO">OTRO</option>
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
					</div>
				</fieldset>		

				<footer>
					<?= Html::submitButton('Imprimir', ['class' => 'btn btn-danger','id' => 'verReporte', 'name' => 'parametros[verReporte]']); ?>
					<?= Html::submitButton('Ver', ['class'=>'btn btn-primary', "formtarget"=>"_blank"])?>
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

<script type="text/javascript">
	function changeHiddenInputCliente (objDropDown)
	{
		var objHidden = document.getElementById("nomCliente");
		objHidden.value =  $("#cliente_id :selected").text();

		obtieneagricolas($("#cliente_id :selected").val());

	}

	function changeHiddenInputAgricola (objDropDown){
		var objHidden = document.getElementById("nomAgricola");
		objHidden.value = $('#cod_agricola :selected').text();
	}

	function changeHiddenInputZona (objDropDown){
		var objHidden = document.getElementById("nomZona");
	    objHidden.value =  $("#zona_id :selected").text();
	}

	function changeHiddenInputGrupo (objDropDown){
		var objHidden = document.getElementById("nomGrupo");
	    objHidden.value =  $("#grupo_id :selected").text();	  
	}

	function changeHiddenInputGrupoProductos (objDropDown){
		var objHidden = document.getElementById("nomGrupoProductos");
	    objHidden.value =  $("#grupoProductos_id :selected").text();	 	
	}

	var f = new Date();
	var mes = f.getMonth() < 10 ? '0' + (f.getMonth()+1) : (f.getMonth()+1);
	var dia = f.getDate() < 10 ? '0' + f.getDate() : f.getDate();
	var diaAnteriorSinFormato = f.getDate()-1;
	var diaAnterior = diaAnteriorSinFormato < 10 ? '0' + diaAnteriorSinFormato : diaAnteriorSinFormato;
	
	function temporadaAnterior(){
		var f = new Date();
		
		if(f.getMonth() > 6){
			$("#parametros_fecha1").val(f.getFullYear()-1 + "-07-01");
			$("#parametros_fecha2").val(f.getFullYear()-1 + "-06-30");
		}else{
			$("#parametros_fecha1").val(f.getFullYear()-2 + "-07-01");
			$("#parametros_fecha2").val(f.getFullYear()-1 + "-06-30");
		}		
	}
	
	function temporadaActual(){
		if(mes > 6){
			$("#parametros_fecha1").val(f.getFullYear() + "-07-01");
			$("#parametros_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
		}else{
			console.log(f.getFullYear() + "-" + mes + "-" + dia);
			$("#parametros_fecha1").val(f.getFullYear()-1 + "-07-01");
			$("#parametros_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
		}		
	}
	
	function anioAnterior(){
		var f = new Date();
		$("#parametros_fecha1").val(f.getFullYear()-1 + "-01-01");
		$("#parametros_fecha2").val(f.getFullYear()-1 + "-12-31");
	}
	
	function anioActual(){
		var f = new Date();
		$("#parametros_fecha1").val(f.getFullYear() + "-01-01");
		$("#parametros_fecha2").val(f.getFullYear() + "-06-" + diaAnterior);		
	}
	
	function mesAnioAnterior(){
		var f = new Date();
		$("#parametros_fecha1").val(f.getFullYear()-1 + "-" + mes + "-01");
		$("#parametros_fecha2").val(f.getFullYear()-1 + "-" + mes + "-" + diaAnterior);		
	}
	
	function mesAnioActual(){
		var f = new Date();
		$("#parametros_fecha1").val(f.getFullYear() + "-" + mes + "-01");
		$("#parametros_fecha2").val(f.getFullYear() + "-" + mes + "-" + diaAnterior);		
	}
	function diaAnterior1(){
		var f = new Date();
		$("#parametros_fecha1").val(f.getFullYear() + "-" + mes + "-" + diaAnterior);
		$("#parametros_fecha2").val(f.getFullYear() + "-" + mes + "-" + diaAnterior);		
	}
	function diaActual(){
		var f = new Date();
		$("#parametros_fecha1").val(f.getFullYear() + "-" + mes + "-" + dia);
		$("#parametros_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);		
	}

	function obtieneagricolas(valor){
	    $.ajax({
	     url: "<?php echo Yii::$app->urlManager->createUrl('utilerias/obtieneagricolas');?>?cte=" + valor, 
	     success: function(result){
	        $("#cod_agricola").html(result);
	        $("#select2-cod_agricola-container > .select2-selection__placeholder").html("Listo");
	     },
	     error: function(xhr){
	        alert("Ups: " + xhr.status + " " + xhr.statusText);
	      }
	    });
	}  

	$(document).ready(function(){  

	    $("#cliente_id").select2({
    		allowClear: true,
				placeholder: "",    	
		    ajax: {
		      url: "<?php echo Yii::$app->urlManager->createUrl('utilerias/getclientes'); ?>",
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
		                return { id: obj.COD_CTE, text: obj.NOM_CTE };
		            })
		        };
		    	},
					cache: true
	    	},
	    	minimumInputLength: 4,
	    });

	    $("#producto_id").select2({
	    	allowClear: true,
				placeholder: "",
				tags: true,// en articulos es valido teclear algún elemento que no exista(iniciales)	
		    ajax: {
		      url: "<?php echo Yii::$app->urlManager->createUrl('utilerias/getarticulos'); ?>",
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
	  
	 });

</script>
