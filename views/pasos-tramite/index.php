<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\ArrayHelper;
?>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
	Nuevo
</button>
<?= Html::a('Volver', ['tipos-tramite/index'], ['class' => 'btn btn-primary']) ?>
<div class="collapse" id="form">
	<div class="well">
		<div class="roles-form">
			
			<?php $form = ActiveForm::begin(); ?>

			<?= $form->field($model, 'nombre')->textInput() ?>
			
			<?= $form->field($model, 'secuencia')->textinput() ?>

			<div class="form-group">
				<?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>

		</div>
	</div>
</div>
<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nombre</th>
			<th>Secuencia</th>
			<th>Tipo de Tramite</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php $c=0; foreach ($pasostramite as $pt) {$c++;?>
			<tr>
				<td class='col-sm-1'><?= $c?></td> 
				<td><?= $pt->nombre ?></td>
				<td><?= $pt->secuencia ?></td>
				<td><?= $pt->tipoTramite->nombre ?></td>
				<td>
					<?= Html::a('<span class="fa fa-pencil"></span>',['pasos-tramite/update','id'=>$pt->id],['class'=>'btn btn-default btn-sm'])?>
					<?= Html::a('Atributos',['pasos-tramite/atributos','pasoId'=>$pt->id,'id'=>$_GET["id"]],['class'=>'btn btn-danger btn-sm'])?>
			        <?= Html::a('<span class="fa fa-print"> </span>',['pasos-tramite/imprimir'],['class'=>'btn btn-default','target' => '_blank'])?>

				</td>
			</tr>
		<?php }?>
	</tbody>
</table>

    