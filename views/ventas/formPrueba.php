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

			<?php $form = ActiveForm::begin(['id' => 'my-form', 'action'=>['comparativos/comparativoclientes'], 'options'=>['class'=>'smart-form']]); ?>
				<header>
					Escriba la siguiente información para ver el Reporte
				</header>

				<fieldset>


						<section>
							<label class="label">Zona</label>
							<label class="input">
								<select id="zona_id" name="parametros[cod_zona]" style="width:99%" class="select2">
									<option></option>
									<?php foreach($zonas as $zona){ ?>
										<option value="<?php echo $zona["COD_ZONA"]; ?>"><?php echo $zona["NOM_ZONA"]; ?></option>
									<?php } ?>
								</select>
								<input type="hidden" name="parametros[nomZona]" id="nomZona" value="" />
							</label>
						</section>

						<section>
							<label class="label">Grupo</label>
							<label class="input">
								<!--<select id="grupo_id" name="parametros[cod_grupo]" style="width:99%;" class="select2">-->
								<select id="grupo_id" name="parametros[cod_grupo]" style="width:99%;" class="select2" onchange="changeGrupo(this)">
									<option></option>
									<?php foreach($grupos as $grupo){ ?>
										<option value="<?php echo $grupo["COD_GRUPO"]; ?>"><?php echo $grupo["NOM_GRUPO"]; ?></option>
									<?php } ?>
								</select>
								<input type="hidden" name="parametros[nomGrupo]" id="nomGrupo" value="" />
							</label>
						</section>
				</fieldset>

			<?php ActiveForm::end(); ?>

		</div>
		
		<!-- end widget content -->

	</div>
	<!-- end widget div -->

</div>						

<script type="text/javascript">


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


	/*
	//ajax por get(2)
	function changeGrupo(objDropDown){
		var grupo = objDropDown.value;
	    $.ajax({
		     url: "<?php echo Yii::$app->urlManager->createUrl('utilerias/obtienezonadegrupo');?>?COD_GRUPO=" + grupo, 
		     success: function(result){
		     	var resultado = result.trim();
		     	$("#zona_id").select2("val",resultado);
		     },
		     error: function(xhr){
		        alert("Ups: " + xhr.status + " " + xhr.statusText);
		      }

		});
	}  
	*/
	
	/*
	// get y url, funcion parametro(3)
	$("#grupo_id").change(function(){
		var codigoGrupo = $(this).val();

		$.get("<?php echo Yii::$app->urlManager->createUrl('utilerias/obtienezonadegrupo'); ?>",{ codigoGrupo : codigoGrupo }, function(data){
			//alert(data);
			var zona = data.trim();
			$("#zona_id").select2('val',zona);
		});

	});
	*/


</script>