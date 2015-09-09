<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atributos-form">

     <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>
    
    <?= $form->field($model, 'label')->textInput() ?>

    <?= $form->field($model, 'tipoAtributoId')->dropDownList(ArrayHelper::map(app\models\TiposAtributo::find()->asArray()->all(), 'id', 'nombre')) ?>

    <?php if($model->isNewRecord){$form->field($model, 'tipoTramiteId')->hiddenInput([ 'value' => $_GET["id"]])->label(false);}else{
       echo $form->field($model, 'tipoTramiteId')->hiddenInput()->label(false);
    } ?>
    <?php if($model->isNewRecord){echo $form->field($model, 'pasoId')->hiddenInput([ 'value' => $_GET["pasoId"]])->label(false);}else{
            echo $form->field($model, 'pasoId')->hiddenInput()->label(false); }?>
    <?= $form->field($model, 'allowNull')->checkbox() ?>

    <?= $form->field($model, 'attrLength')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
