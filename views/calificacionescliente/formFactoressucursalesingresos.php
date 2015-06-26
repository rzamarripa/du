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
		<h2>Factores de sucursales con ingresos</h2>

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

			<?php $form = ActiveForm::begin(['id' => 'my-form', 'options'=>['class'=>'smart-form'], 'action'=>['calificacionescliente/factoressucursalesingresos']]); ?>
				<header>
					Escriba la siguiente información para ver el Reporte
				</header>

				<fieldset>
					<div class="col-sm-12 col-md-6 col-lg-3 ">
						<section>
							<label class="label">Zona</label>
							<label class="input">
								<select name="parametros[codigoZona]" style="width:100%" class="select2min4">
									<option></option>
									<?php foreach($zonas as $zona){ ?>
										<option value="<?php echo $zona["COD_ZONA"]; ?>"><?php echo $zona["NOM_ZONA"]; ?></option>
									<?php } ?>
								</select>
							</label>						
						</section>
														

					</div>
					<div class="col-sm-12 col-md-3 col-lg-3 ">
						<section>
							<label class="label">Fecha inicio</label>
							<label class="input">
								<input id="parametros_fecha1" type="date" name="parametros[fecha1]">
							</label>						
						</section>
						<section>
							<label class="label">Fecha fin</label>
							<label class="input">
								<input id="parametros_fecha2" type="date" name="parametros[fecha2]">
							</label>						
						</section>
						<section>
							<label class="label">Fecha corte</label>
							<label class="input">
								<input id="parametros_fechacorte" type="date" name="parametros[fechacorte]">
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

<script type="text/javascript">
	var f = new Date();
	var mes = f.getMonth() < 10 ? '0' + (f.getMonth()+1) : (f.getMonth()+1);
	var dia = f.getDate() < 10 ? '0' + f.getDate() : f.getDate();
	var diaAnteriorSinFormato = f.getDate()-1;
	var diaAnterior = diaAnteriorSinFormato < 10 ? '0' + diaAnteriorSinFormato : diaAnteriorSinFormato;

	$("#parametros_fecha1").val(f.getFullYear() +"-01-01");
	$("#parametros_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
	$("#parametros_fechacorte").val(f.getFullYear() + "-12-31");	


	function temporadaAnterior(){
		var f = new Date();

		
	//var data = $('#parametros_codZona').select2('data');
	//alert(data.text);
	//var data = $("#parametros_codigoZona").select2("val");
	//alert(data);
		
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
		
</script>



















