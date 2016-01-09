
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use yii\jui\DatePicker;
?>



<div class="electronicos-index">

   

     <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'escuela_did')->dropDownList(ArrayHelper::map(app\models\Escuelas::find()->all(), 'id', 'nombre'), ["prompt"=>"Seleccione",'id'=>'escuela','disabled'=>'disabled']) ?>

  <?= $form->field($model, 'empresa_did')->dropDownList(ArrayHelper::map(app\models\Empresas::find()->all(), 'id', 'nombre'), ["prompt"=>"Seleccione", 'id'=>'empresa','disabled'=>'disabled']) ?>
 

     <?= $form->field($model, 'fecha_ft')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
      'dateFormat' => 'yyyy-MM-dd',
       ])->textInput() ?>

    <?= $form->field($model, 'observaciones')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>