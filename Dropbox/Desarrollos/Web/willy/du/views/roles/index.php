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
     <?= $this->render('_form',['model'=>$model]) ?>
  </div>
</div>
<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Descripcón</th>
			<th>Acciones</th>	
		</tr>
	</thead>
	<tbody>
		<?php foreach ($roles as $rol) {?> 
		<tr>
			<td><?= $rol->nombre ?></td>
			<td><?= $rol->descripcion ?></td>
			<td>
			<?= Html::a('<span class="fa fa-pencil"></span>',['roles/update','id'=>$rol->id],['class'=>'btn btn-default btn-sm'])?>
			<?= Html::a('Permisos',['roles/tramiteroles','id'=>$rol->id],['class'=>'btn btn-primary btn-sm'])?>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>