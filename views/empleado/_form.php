<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empleado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>

    <?= $form->field($model, 'apellidos')->textInput() ?>

    <?= $form->field($model, 'celular')->textInput() ?>

    <?= $form->field($model, 'puesto')->textInput() ?>

    <?= $form->field($model, 'direccion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estatus_did')->dropDownList(ArrayHelper::map(app\models\Estatus::find()->asArray()->all(), 'id', 'nombre'), ['prompt'=>'-Seleccione-']) ?>

    <?= $form->field($model, 'estatus_aid')->widget(Select2::classname(), [
							    'data' => ArrayHelper::map(app\models\Estatus::find()->asArray()->all(), 'id', 'nombre'),
							    'language' => 'es',
							    'theme' =>Select2::THEME_CLASSIC,
							    'options' => ['placeholder' => 'Selecciona un Estatus ...'],
							    'pluginOptions' => [
							        'allowClear' => true
							    ],
								]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
