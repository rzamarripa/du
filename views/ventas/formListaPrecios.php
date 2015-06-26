<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MENUUSUARIOS */
/* @var $form yii\widgets\ActiveForm */
?>

<div ng-controller="ListaPrecios" class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">
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
		<h2>Lista de Precios</h2>

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

			<?php $form = ActiveForm::begin(['id' => 'my-form', 'action'=>['ventas/listaprecios'], 'options'=>['class'=>'smart-form']]); ?>
				<header>
					Escriba la siguiente información para ver el Reporte
				</header>

				<fieldset>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 ">
						<section>
							<label class="label">Producto(s)</label>
							<label class="input">
								<select id="producto_id" name="parametros[descri]" style="width:99%">
									<option></option>
								</select>
							</label>						
						</section>					
					</div>

				</fieldset>			

				<footer>
					<?= Html::submitButton('Imprimir', ['class' => 'btn btn-danger', "formtarget"=>"_blank", 'id' => 'verReporte', 'name' => 'parametros[verReporte]']); ?>
					<?= Html::submitButton('Ver',      ['class'=>'btn btn-primary', "formtarget"=>"_blank"])?>
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
	  
	 });

</script>
