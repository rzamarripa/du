<?php 
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\ArrayHelper;
?>

<div class="empleado-form">

    <?php $form = ActiveForm::begin(); 
    $model->fecha_ft = date('d-m-Y H:i:s',strtotime($model->fecha_ft)); ?>

    <?= $form->field($model, 'nombre')->textInput(['value'=>'10']) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estatus_did')->dropDownList(ArrayHelper::map(app\models\Estatus::find()->asArray()->all(), 'id', 'proyecto')) ?>

    <?php if(!$model->isNewRecord)echo $form->field($model, 'fecha_ft')->textInput(['readonly' => true]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar Cambios', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>