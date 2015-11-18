<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use yii\jui\DatePicker;
    use app\models\visitasLugares;
?>



<div class="visitas-Lugares-index">

    <div class="Visitas-Lugares-form">

     <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'empresa_did')->dropDownList(ArrayHelper::map(app\models\Empresas::find()->asArray()->all(), 'id', 'nombre'),["prompt"=>"Seleccione"]) ?>

    <?= $form->field($model, 'fechaCreacion')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
     'dateFormat' => 'yyyy-MM-dd',
      ])->textInput() ?>
    </div>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>