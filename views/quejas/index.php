
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use app\models\Lugares;
    use yii\jui\datepicker;
?>



<div class="escuelas-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="empleados-form">

     <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>

     <?= $form->field($model, 'fecha_ft')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
     'dateFormat' => 'yyyy-MM-dd',
      ])->textInput() ?>

    <?= $form->field($model, 'motivo')->textArea() ?>

    <?= $form->field($model, 'afectacion')->textArea() ?>

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
            <th>Motivo</th>
            <th>Afectacion</th>  
            <th>Acciones</th>


        </tr>
    </thead>
    <tbody>

        <?php $c=0; foreach ($Quejas as $queja) {$c++;?> 
        <tr>    
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $queja->nombre ?></td>
            <td><?= $queja->fecha_ft ?></td>
            <td><?= $queja->motivo ?></td>
            <td><?= $queja->afectacion ?></td>
            <td>
                <?= Html::a('<span class="fa fa-pencil"></span>',['quejas/update','id'=>$queja->id],['class'=>'btn btn-default']) ?>
                <?= Html::a('<span class="fa fa-print"> </span>',['quejas/imprimir'],['class'=>'btn btn-default','target' => '_blank'])?>
                <?= Html::a('<span class="glyphicon glyphicon-remove"></span>',['quejas/delete','id' =>$queja->id],['class'=>'btn btn-danger','onclick' => "return confirm('Estas seguro?')"]) ?>

            </td>  
           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
