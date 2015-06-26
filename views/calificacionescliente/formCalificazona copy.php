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
		<h2>Califica Zona </h2>

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

			<?php $form = ActiveForm::begin(['id' => 'my-form', 'options'=>['class'=>'smart-form'], 'action'=>['calificacionescliente/calificazona']]); ?>
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
							<label class="label">Grupo</label>
							<label class="input">
								<select name="parametros[codigoGrupo]" style="width:99%" class="select2">
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
									<input type="checkbox" name="parametros[formatocorto]" checked="checked">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Formato corto
							</label>
							</div>
						</section>

						<section>
							<div class="col-lg-6">
								<label class="">
									<input type="checkbox" name="parametros[excluirzona]">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Excluir zona
							</label>
							</div>
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
	var f = new Date();
	var mes = f.getMonth() < 10 ? '0' + (f.getMonth()+1) : (f.getMonth()+1);
	var dia = f.getDate() < 10 ? '0' + f.getDate() : f.getDate();
	
	$("#parametros_fecha1").val(f.getFullYear() + "-01-01");
	$("#parametros_fecha2").val(f.getFullYear() + "-" + mes + "-" + dia);
	$("#parametros_fechacorte").val(f.getFullYear() + "-" + mes + "-" + dia);
	
</script>



















