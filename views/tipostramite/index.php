<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\ArrayHelper;
?>

<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
	Nuevo
</button>
<div class="collapse" id="form">
	<div class="well">
		<div class="roles-form">
			
			<?php $form = ActiveForm::begin(); ?>

			<?= $form->field($model, 'nombre')->textInput() ?>

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
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($TiposTramite as $tt) {?>
			<tr>
				<td><?= $tt->nombre ?></td>
				<td>
					<?= Html::a('<span class="fa fa-pencil"></span>',['tipostramite/update','id'=>$tt->id],['class'=>'btn btn-default btn-sm'])?>
					<?= Html::a('Pasos',['pasostramite/index','id'=>$tt->id],['class'=>'btn btn-primary btn-sm'])?>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table>