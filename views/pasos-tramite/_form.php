<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
?>

<div class="empleado-form">
    
    <?php $form = ActiveForm::begin();?>

    <?= $form->field($model, 'nombre')->textInput() ?>

	<?= $form->field($model, 'secuencia')->textInput() ?>
	

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar': 'Guardar Cambios', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>