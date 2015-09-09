<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use kartik\money\MaskMoney;
use app\controllers\PDO;
use yii\jui\DatePicker;
use yii\web\View;
//use kartik\money\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Requisicion */
/* @var $form yii\widgets\ActiveForm */

   
?>



       
    <?php $form = ActiveForm::begin(); ?>
       
    <?= $form->field($model, 'fecha_ft')->widget(\yii\jui\DatePicker::classname(), [
        //'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ])->textInput() ?>
    
    <?= $form->field($model, 'lugares_did')->textInput() ?>
                
    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
        

