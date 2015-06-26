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
		<h2>Ventas con saldo</h2>

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

			<?php $form = ActiveForm::begin(['id' => 'my-form', 'action'=>['ventas/ventasconsaldo'], 'options'=>['class'=>'smart-form']]); ?>
				<header>
					Escriba la siguiente información para ver el Reporte
				</header>

				<fieldset>
					<div class="col-sm-12 col-md-6 col-lg-3 ">				
						<section>
							<label class="label">Zona</label>
							<label class="input">
								<select id="zona_id" name="parametros[cod_zona]" style="width:99%" class="select2">
									<option></option>
									<?php foreach($zonas as $zona){ ?>
										<option value="<?php echo $zona["CODIGO"]; ?>"><?php echo $zona["NOM_ZONA"]; ?></option>
									<?php } ?>
								</select>
							</label>
						</section>

						<section>
							<label class="label">Grupo</label>
							<label class="input">
								<select id="grupo_id" name="parametros[cod_grupo]" style="width:99%;" class="select2" onchange="changeGrupo(this)">
									<option></option>
									<?php foreach($grupos as $grupo){ ?>
										<option value="<?php echo $grupo["COD_GRUPO"]; ?>"><?php echo $grupo["NOM_GRUPO"]; ?></option>
									<?php } ?>
								</select>
							</label>
						</section>		

						<section>
							<div class="col-lg-6">
								<label class="">
									<input type="checkbox" name="parametros[filtrar_solo_clientes_con_saldo]" checked="checked">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Filtrar sólo clientes con saldo
							</label>
							</div>
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
							<label class="label">Venta de la empresa hasta(%)</label>
							<label class="input"  style="height: 28px;">
								<input type="text" name="parametros[porcentaje_venta]" maxlength="3" value="101" style="width:99%">
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

	var f = new Date();
	var mes = f.getMonth() < 10 ? '0' + (f.getMonth()+1) : (f.getMonth()+1);
	var dia = f.getDate() < 10 ? '0' + f.getDate() : f.getDate();
	var diaAnteriorSinFormato = f.getDate()-1;
	var diaAnterior = diaAnteriorSinFormato < 10 ? '0' + diaAnteriorSinFormato : diaAnteriorSinFormato;

	//ajax por post(1)
	function changeGrupo(objDropDown){
	  var grupo = objDropDown.value;
	     $.ajax({
	       type:'post',
	       url: "<?php echo Yii::$app->urlManager->createUrl('utilerias/obtienezonadegrupo');?>", 
	       data:{"grupo": grupo},
	       success: function(result){
	        var resultado = result.trim();
	        //alert(resultado.length);
	        $("#zona_id").select2("val",resultado);
	       },
	       error: function(xhr){
	          alert("Ups: " + xhr.status + " " + xhr.statusText);
	        }
	  });
	} 

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
		placeholder: "Seleccione",    	
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
		placeholder: "Seleccione",
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
