
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use yii\models\Empleados;
    use yii\jui\DatePicker;
?>



<div class="dictamenes-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="departamentos-form">

     <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>


    <?= $form->field($model, 'fechaCreacion')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
     'dateFormat' => 'yyyy-MM-dd',
      ])->textInput() ?>

    <?= $form->field($model, 'domicilio')->textInput() ?>

    <?= $form->field($model, 'giro')->textInput() ?>

    <?= $form->field($model, 'duracion')->textInput() ?>
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
            <th>No.</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Domicilio</th>
            <th>Giro</th>
            <th>Duracion</th>
            <th>Acciones</th>
          
        
        
    </thead>
    <tbody>
        <?php $c=0; foreach ($Dictamenes as $dic) {$c++;?> 
        <tr>   
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $dic->nombre ?></td>
            <td><?= $dic->fechaCreacion ?></td>
            <td><?= $dic->domicilio ?></td>
            <td><?= $dic->giro ?></td>
            <td><?= $dic->duracion ?></td>
            <td>
             <?= Html::a('<span class="fa fa-pencil"></span>',['dictamenes/update','id'=>$dic->id],['class'=>'btn btn-default']) ?>
             <?= Html::a('<span class="fa fa-eye"></span>',['dictamenes/view','id'=>$dic->id],['class'=>'btn btn-default']) ?>
             <?= Html::a('<span class="fa fa-print"> </span>',['dictamenes/imprimir'],['class'=>'btn btn-default'])?>
             <?= Html::a('<span class="glyphicon glyphicon-remove"></span>',['dictamenes/delete','id' =>$dic->id],['class'=>'btn btn-danger','onclick' => "return confirm('Estas seguro?')"]) ?>


            </td>       
        
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
