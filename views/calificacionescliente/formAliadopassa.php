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
		<h2>Aliado Passa</h2>


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

			<?php $form = ActiveForm::begin(['id' => 'my-form', 'options'=>['class'=>'smart-form'], 'action'=>['calificacionescliente/aliadopassa']]); ?>
				<header>
					Escriba la siguiente información para ver el Reporte
				</header>

				<fieldset>
					<div class="col-sm-12 col-md-6 col-lg-3 ">
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
							<label class="label">Tipo de utilidad</label>
							<label class="input">
								<select name="parametros[tipoutilidad]" style="width:99%" class="select2">
									<option value=" ">TODAS</option>
									<option value="BRUTA">BRUTA</option>
									<option value="OPERATIVA">OPERATIVA</option>		
								</select>
							</label>						
						</section>
						<section>
							<div class="col-lg-4">
								<label>
									<input type="radio" name="parametros[tipoformato]" checked="checked" value="1">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Formato 1
								</label>
							</div>
							<div class="col-lg-4">
								<label>
									<input type="radio" name="parametros[tipoformato]" value="2">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Formato 2
								</label>
							</div>
						</section>
					</div>
					<div class="col-sm-12 col-md-3 col-lg-3 ">
						<section>
							<label class="label">Fecha inicio</label>
							<label class="input" style="height: 28px;">
								<input id="califica_fecha1" type="date" name="parametros[fecha1]" style="width:99%">
							</label>						
						</section>
						<section>
							<label class="label">Fecha fin</label>
							<label class="input" style="height: 28px;">
								<input id="califica_fecha2" type="date" name="parametros[fecha2]" style="width:99%">
							</label>						
						</section>
						<section>
							<label class="label">Fecha corte</label>
							<label class="input" style="height: 28px;">
								<input id="califica_fechacorte" type="date" name="parametros[fechacorte]" style="width:99%">
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
						<!--
						<div class="col-sm-12 col-md-6 col-lg-6">
							<section>
								<button type="button" class="btn btn-primary btn-block btn-sm" onclick="mesAnioAnterior()">Mes Año Anterior</button>
								<button type="button" class="btn btn-primary btn-block btn-sm" onclick="mesAnioActual()">Mes Año Actual</button>
								<button type="button" class="btn btn-primary btn-block btn-sm" onclick='diaAnterior1()'>Día Anterior</button>
								<button type="button" class="btn btn-primary btn-block btn-sm" onclick="diaActual()">Día Actual</button>
							</section>
						</div>
						-->
					</div>
				</fieldset>
			

				<footer>					
					<?= Html::submitButton('Imprimir', ['class' => 'btn btn-danger','id' => 'verReporte', 'name' => 'parametros[verReporte]']); ?>
					<?= Html::submitButton('Ver', ['class'=>'btn btn-primary']) ?>
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

	$("#califica_fecha1").val(f.getFullYear() + "-01-01");
	$("#califica_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
	$("#califica_fechacorte").val(f.getFullYear() + "-" + mes + "-" + dia);
	
	function temporadaAnterior(){
		var f = new Date();
		
		if(f.getMonth() > 6){
			$("#califica_fecha1").val(f.getFullYear()-1 + "-07-01");
			$("#califica_fecha2").val(f.getFullYear()-1 + "-06-30");
		}else{
			$("#califica_fecha1").val(f.getFullYear()-2 + "-07-01");
			$("#califica_fecha2").val(f.getFullYear()-1 + "-06-30");
		}		
	}
	
	function temporadaActual(){
		if(mes > 6){
			$("#califica_fecha1").val(f.getFullYear() + "-07-01");
			$("#califica_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
		}else{
			console.log(f.getFullYear() + "-" + mes + "-" + dia);
			$("#califica_fecha1").val(f.getFullYear()-1 + "-07-01");
			$("#califica_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
		}		
	}
	
	function anioAnterior(){
		var f = new Date();
		$("#califica_fecha1").val(f.getFullYear()-1 + "-01-01");
		$("#califica_fecha2").val(f.getFullYear()-1 + "-12-31");
	}
	
	function anioActual(){
		var f = new Date();
		$("#califica_fecha1").val(f.getFullYear() + "-01-01");
		$("#califica_fecha2").val(f.getFullYear() + "-06-" + diaAnterior);		
	}
	
	function mesAnioAnterior(){
		var f = new Date();
		$("#califica_fecha1").val(f.getFullYear()-1 + "-" + mes + "-01");
		$("#califica_fecha2").val(f.getFullYear()-1 + "-" + mes + "-" + diaAnterior);		
	}
	
	function mesAnioActual(){
		var f = new Date();
		$("#califica_fecha1").val(f.getFullYear() + "-" + mes + "-01");
		$("#califica_fecha2").val(f.getFullYear() + "-" + mes + "-" + diaAnterior);		
	}
	function diaAnterior1(){
		var f = new Date();
		$("#califica_fecha1").val(f.getFullYear() + "-" + mes + "-" + diaAnterior);
		$("#califica_fecha2").val(f.getFullYear() + "-" + mes + "-" + diaAnterior);		
	}
	function diaActual(){
		var f = new Date();
		$("#califica_fecha1").val(f.getFullYear() + "-" + mes + "-" + dia);
		$("#califica_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);		
	}
</script>


















