<?php 
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\ArrayHelper;
	use yii\web\Controller;
	use yii\base\View;
?>

<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
  	<?php echo $this->render('_form',['model'=>$model]) ?>
    <?php /* $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); */?>

  </div>
</div>
<table id="datatable1" class="table table-striped table-bordered">
	<thead>
		<tr><th>No.</th>
			<th>Nombre</th>
			<th>Descripcón</th>
			<th>Estatus</th>
			<th>Fecha</th>
			<th>Acciones</th>	
		</tr>
	</thead>
	<tbody>
		<?php $c=0; foreach ($proyectos as $proyecto) {$c++;?> 
		<tr>
			<td class='col-sm-1'><?= $c?></td> 
			<td><?= $proyecto->nombre ?></td>
			<td><?= $proyecto->descripcion ?></td>
			<td><span class="label label-<?php if($proyecto->estatus_did == 1)echo 'warning';if($proyecto->estatus_did == 2)echo 'primary';if($proyecto->estatus_did == 3)echo 'success'; ?>">
				<?= $proyecto->estatus->proyecto ?></span></td>
			<td><?= date('d-m-Y H:i:s',strtotime($proyecto->fecha_ft)); ?></td>
			<td>
				 <?= Html::a('<span class="fa fa-eye"></span>',['proyectos/view','id'=>$proyecto->id],['class'=>'btn btn-default']) ?>

				<div class="btn-group">
				  <button type="button" class="btn btn-info btn-sx dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				     <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <?php if($proyecto->estatus_did != 1){?><li><?= Html::a('Pendiente',['proyectos/cambiar','estatus'=>1,'id'=>$proyecto->id]) ?></li><?php }?>
				    <?php if($proyecto->estatus_did != 2){?><li><?= Html::a('En Proceso',['proyectos/cambiar','estatus'=>2,'id'=>$proyecto->id]) ?></li><?php }?>
				    <?php if($proyecto->estatus_did != 3){?><li><?= Html::a('Realizado',['proyectos/cambiar','estatus'=>3,'id'=>$proyecto->id]) ?></li><?php }?>
				  </ul>
		       	</div>
                <?= Html::a('<span class="fa fa-pencil"></span>',['proyectos/update','id'=>$proyecto->id],['class'=>'btn btn-default']) ?>
                <?php if($proyecto->estatus_did == 1){ echo Html::a('<span class="fa fa-trash-o"></span>',['proyectos/cambiar','estatus'=>2,'id'=>$proyecto->id],['class'=>'btn btn-danger']);
            }else{echo Html::a('<span class="glyphicon glyphicon-ok"></span>',['proyectos/cambiar','estatus'=>1,'id'=>$proyecto->id],['class'=>'btn btn-success']);}?>
                   <?= Html::a('<span class="fa fa-print"> </span>',['proyectos/imprimir'],['class'=>'btn btn-default','target' => '_blank'])?>
            </td>
		</tr>
		<?php }?>
	</tbody>
</table>
<script type="text/javascript">
$(document).ready( function () {
				    $('#datatable1').dataTable( {
				        "sDom": 'T<"clear">lfrtip',
				        "oTableTools": {
				            "sSwfPath": "<?= Yii::$app->getUrlManager()->getBaseUrl() . '/tabletools/swf/copy_csv_xls_pdf.swf' ?>"
				        }
				    } );
				} );
</script>