
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use app\models\VisitasEscuelas;
    use yii\jui\DatePicker;
    use app\models\vistasescuelas;
    use yii\web\View;
?>



<div class="visitas-escuelas-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="empleados-form">

     <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'escuela_did')->dropDownList(ArrayHelper::map(app\models\Escuelas::find()->all(), 'id', 'nombre'), ["prompt"=>"Seleccione"]) ?>

    <?= $form->field($model, 'fecha_ft')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
      'dateFormat' => 'yyyy-MM-dd',
       ])->textInput() ?>

    <?= $form->field($model, 'escuela_did')->dropDownList(ArrayHelper::map(app\models\Escuelas::find()->asArray()->all(), 'id', 'nombre'),["prompt"=>"Seleccione"]) ?>

    <?= $form->field($model, 'fecha_ft')->widget(\yii\jui\DatePicker::classname(), [
           //'language' => 'ru',
             'dateFormat' => 'yyyy-MM-dd',
              ])->textInput() ?>
    
    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>

   <table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Escuela</th>
            <th>Fecha</th>
            <th>Descripcion</th> 
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($VisitasEscuelas as $ve) {?> 
        <tr>
            <td><?= $ve->escuela->nombre ?></td>
            <td><?= $ve->fecha_ft ?></td>
            <td><?= $ve->descripcion ?></td>
            



            <td>
                <?= Html::a('<span class="fa fa-pencil"></span>',['visitas-escuelas/update','id'=>$ve->id],['class'=>'btn btn-default']) ?>
          <?= Html::a('<span class="fa fa-trash-o"></span>',['visitas-escuelas/delete','id' =>$ve->id],['class'=>'btn btn-danger']) ?>

        </tr>
        <?php }?>
    </tbody>
</table>

</div>
