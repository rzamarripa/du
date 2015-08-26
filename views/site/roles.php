<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Agregar Rol
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="roles-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'roleId')->dropDownList(ArrayHelper::map(app\models\Roles::find()->asArray()->all(), 'id', 'nombre')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
  </div>
</div>
<h1><?= $model->usuarios->username?>:</h1>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Roles</th>
		<tr>
	</thead>
	<body>
		<?php foreach ($roles as $rol) {?>
		<tr>
			<td><?= $rol->roles->nombre ?></td>
		</tr>
		<?php } ?>
	</body>
</table>