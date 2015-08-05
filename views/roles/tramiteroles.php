<?php 
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\ArrayHelper;
?>
<h1>Rol: <?= $nombre ?></h1>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Tramite</th>
			<th>Leer</th>
			<th>Crear</th>
			<th>Actualizar</th>
			<th>Borrar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($tramiteRoles as $tr) {?>
		<tr>
			<td><?= $tr->tipoTramite->nombre ?></td>
			<td><?= $tr->leer ?></td>
			<td><?= $tr->crear ?></td>
			<td><?= $tr->actualizar ?></td>
			<td><?= $tr->borrar ?></td>
		</tr>
		<?php }?>
	</tbody>
</table>