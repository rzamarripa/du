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
		<h2>Ventas diarias</h2>

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

			<?php $form = ActiveForm::begin(['id' => 'my-form', 'options'=>['class'=>'smart-form'], 'action'=>['ventas/ventasdiarias']]); ?>
				<header>
					Escriba la siguiente información para ver el Reporte
				</header>

				<fieldset>
					<div class="col-sm-12 col-md-6 col-lg-3 ">
						<section>
							<label class="label">Zona</label>
							<label class="input">
								<select id="zona_id" name="parametros[codigoZona]" style="width:99%" class="select2" onchange="changeHiddenInputZona(this)">
									<option></option>
									<?php foreach($zonas as $zona){ ?>
										<option value="<?php echo $zona["COD_ZONA"]; ?>"><?php echo $zona["NOM_ZONA"]; ?></option>
									<?php } ?>
								</select>
								<input type="hidden" name="parametros[nomZona]" id="nomZona" value="" />
							</label>						
						</section>

						<section>
							<label class="label" id="lblGrupo" style="display:none;">Grupo</label>
							<label class="input" id="cboGrupo" style="display:none;">
								<select id="grupo_id" name="parametros[codigoGrupo]" style="width:99%;" class="select2" onchange="changeHiddenInputGrupo(this)">
									<option></option>
									<?php foreach($grupos as $grupo){ ?>
										<option value="<?php echo $grupo["COD_GRUPO"]; ?>"><?php echo $grupo["NOM_GRUPO"]; ?></option>
									<?php } ?>
								</select>
								<input type="hidden" name="parametros[nomGrupo]" id="nomGrupo" value="" />
							</label>
						</section>

						<section>
							<label class="" id="lblExcluirZona">
								<input type="checkbox" name="parametros[excluirzona]" id="chkExcluirZona">
								<i data-swchon-text="Si" data-swchoff-text="No"></i>Excluir zona
							</label>
						</section>

						<section>
							<div class="col-lg-12">
								<label class="label">Seleccione el formato :</label>
									<label>
										<input type="radio" name="parametros[formato]" value="1" ng-disabled="!util" onchange="onchangeFormato(this)" checked="checked">
										<i data-swchon-text="Si" data-swchoff-text="No"></i>Ventas diarias
									</label>
								<div class="col-lg-12">
									<label>
										<input type="radio" name="parametros[formato]" value="2" ng-disabled="!util" onchange="onchangeFormato(this)">
										<i data-swchon-text="Si" data-swchoff-text="No"></i>Ventas zonas totales
									</label>
								</div>
								<div class="col-lg-12">
									<label>
										<input type="radio" name="parametros[formato]" value="3" ng-disabled="!util" onchange="onchangeFormato(this)">
										<i data-swchon-text="Si" data-swchoff-text="No"></i>Ventas zonas gráfica
									</label>
								</div>											
								<div class="col-lg-12">
									<label>
										<input type="radio" name="parametros[formato]" value="4" ng-disabled="!util" onchange="onchangeFormato(this)">
										<i data-swchon-text="Si" data-swchoff-text="No"></i>Ventas semanales
									</label>
								</div>
								<div class="col-lg-12">
									<label>
										<input type="radio" name="parametros[formato]" value="5" ng-disabled="!util" onchange="onchangeFormato(this)">
										<i data-swchon-text="Si" data-swchoff-text="No"></i>Ventas y gastos
									</label>
								</div>								
								<div class="col-lg-12">
									<label >
										<input type="radio" name="parametros[formato]" value="6" ng-disabled="!util" onchange="onchangeFormato(this)">
										<i data-swchon-text="Si" data-swchoff-text="No"></i>Vtas grupos totales
									</label>
								</div>								
								<div class="col-lg-12">
									<label >
										<input type="radio" name="parametros[formato]" value="7" ng-disabled="!util" onchange="onchangeFormato(this)">
										<i data-swchon-text="Si" data-swchoff-text="No"></i>Vtas grupos semanales
									</label>
								</div>
							</div>
						</section>		
					</div>

					<div class="col-sm-12 col-md-3 col-lg-3 ">
						<section>
							<label class="label">Fecha inicio</label>
							<label class="input">
								<input id="parametros_fecha1" type="date" name="parametros[fecha1]" style="width:99%">
							</label>						
						</section>
						<section>
							<label class="label">Fecha fin</label>
							<label class="input">
								<input id="parametros_fecha2" type="date" name="parametros[fecha2]" style="width:99%">
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

<script type=text/javascript>
	//$(document).ready(function(){

	var f = new Date();
	var mes = f.getMonth() < 10 ? '0' + (f.getMonth()+1) : (f.getMonth()+1);
	var dia = f.getDate() < 10 ? '0' + f.getDate() : f.getDate();
	var diaAnteriorSinFormato = f.getDate()-1;
	var diaAnterior = diaAnteriorSinFormato < 10 ? '0' + diaAnteriorSinFormato : diaAnteriorSinFormato;	

	$("#parametros_fecha1").val(f.getFullYear() +"-01-01");
	$("#parametros_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);

	function onchangeFormato(control){
		switch ($(control).val()){
			case "1"://Ventas diarias
			case "2"://Ventas zonas totales
			case "3"://Ventas zonas totales
			case "5"://Ventas y gastos
				$("#cboGrupo").hide();
				$("#lblGrupo").hide();
				$("#chkExcluirZona").show();
				$("#lblExcluirZona").show();
				//$("#parametros_fecha1").val(f.getFullYear() +"-01-01");
				//$("#parametros_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
				break;

			case "4"://Ventas semanales
				$("#cboGrupo").hide();
				$("#lblGrupo").hide();
				$("#chkExcluirZona").show();
				$("#lblExcluirZona").show();
				$("#parametros_fecha1").val("2015-01-05");
				$("#parametros_fecha2").val("2016-01-03");
				break;

			case "6"://Vtas grupos totales
				$("#cboGrupo").show();
				$("#lblGrupo").show();
				$("#chkExcluirZona").hide();
				$("#lblExcluirZona").hide();
				//$("#parametros_fecha1").val(f.getFullYear() +"-01-01");
				//$("#parametros_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
				break;

			case "7"://Vtas grupos semanales
				$("#cboGrupo").show();
				$("#lblGrupo").show();
				$("#chkExcluirZona").hide();
				$("#lblExcluirZona").hide();
				$("#parametros_fecha1").val("2015-01-05");
				$("#parametros_fecha2").val("2016-01-03");
				break;
		}
	}

	/*
    $('input:radio[name="parametros[formato]"]').change(function() {
        if ($(this).val() == '1') {
            //alert("1 option");
			$("#cboGrupo").hide();
			$("#lblGrupo").hide();
        } else if ($(this).val() == '2') {
            //alert("2 option");
			$("#cboGrupo").hide();
			$("#lblGrupo").hide();
        } else {
            //alert("3 option");   
			$("#cboGrupo").show();
			$("#lblGrupo").show();
        }
    });
	*/

	function changeHiddenInputZona (objDropDown){
		var objHidden = document.getElementById("nomZona");
	    objHidden.value =  $("#zona_id :selected").text();
	}

	function changeHiddenInputGrupo (objDropDown){
		var objHidden = document.getElementById("nomGrupo");
	    objHidden.value =  $("#grupo_id :selected").text();	  
	}


	function temporadaAnterior(){
		//var x = document.getElementById("txtImporte");
		//alert(x.value);

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

</script>

