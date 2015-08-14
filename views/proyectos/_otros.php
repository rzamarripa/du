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
<input id="fini" placeholder="Fecha Inicio"></input>
<input id="ffin" placeholder="Fecha Fin"></input>
<table id="asdasd" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Descripcón</th>
			<th>Estatus</th>
			<th>Fecha</th>
			<th>Acciones</th>	
		</tr>
	</thead>
	<tbody>
		<?php foreach ($proyectos as $proyecto) {?> 
		<tr>
			<td><?= $proyecto->nombre ?></td>
			<td><?= $proyecto->descripcion ?></td>
			<td><span class="label label-<?php if($proyecto->estatus_did == 1)echo 'warning';if($proyecto->estatus_did == 2)echo 'primary';if($proyecto->estatus_did == 3)echo 'success'; ?>">
				<?= $proyecto->estatus->proyecto ?></span></td>
			<td><?= date('d-m-Y H:i:s',strtotime($proyecto->fecha_ft)); ?></td>
			<td>
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
				<?= Html::a('<span class="fa fa-trash-o"></span>',['proyectos/cambiar','estatus'=>4,'id'=>$proyecto->id],['class'=>'btn btn-danger']) ?>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>

<script type="text/javascript">
$.fn.dataTableExt.afnFiltering.push(
    function( oSettings, aData, iDataIndex ) {
        var iFini = document.getElementById('fini').value;
        var iFfin = document.getElementById('ffin').value;
        var fecha = 3;
        var fecha = 3;
 
        iFini=iFini.substring(6,10) + iFini.substring(3,5)+ iFini.substring(0,2);
        iFfin=iFfin.substring(6,10) + iFfin.substring(3,5)+ iFfin.substring(0,2);
 
        var datofini=aData[fecha].substring(6,10) + aData[fecha].substring(3,5)+ aData[fecha].substring(0,2);
        var datoffin=aData[fecha].substring(6,10) + aData[fecha].substring(3,5)+ aData[fecha].substring(0,2);
 
        if ( iFini === "" && iFfin === "" )
        {
            return true;
        }
        else if ( iFini <= datofini && iFfin === "")
        {
            return true;
        }
        else if ( iFfin >= datoffin && iFini === "")
        {
            return true;
        }
        else if (iFini <= datofini && iFfin >= datoffin)
        {
            return true;
        }
        return false;
    }
);
	$(document).ready(function() {
	      var table = $('#asdasd').DataTable();
	      // Add event listeners to the two range filtering inputs
	      $('#max').keyup( function() { table.draw(); } );
	      $('#min').keyup( function() { table.draw(); } );
	  } );
</script>