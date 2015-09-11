
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use yii\models\Empleados;
?>



<div class="departamentos-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="departamentos-form">

     <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>




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
            <th>Acciones</th>
          
        
        
    </thead>
    <tbody>
        <?php $c=0; foreach ($Departamentos as $departamento) {$c++;?> 
        <tr>   
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $departamento->nombre ?></td>
            <td>
             <?= Html::a('<span class="fa fa-pencil"></span>',['departamentos/update','id'=>$departamento->id],['class'=>'btn btn-default']) ?>
             <?= Html::a('<span class="fa fa-eye"></span>',['departamentos/view','id'=>$departamento->id],['class'=>'btn btn-default']) ?>
            <?= Html::a('<span class="fa fa-print"> </span>',['departamentos/imprimir'],['class'=>'btn btn-default'])?>
            <?php if($departamento->estatus_did == 1){ echo Html::a('<span class="glyphicon glyphicon-remove"></span>',['departamentos/cambiar','estatus'=>2,'id'=>$departamento->id],['class'=>'btn btn-danger']);
            }else{echo Html::a('<span class="glyphicon glyphicon-ok"></span>',['departamentos/cambiar','estatus'=>1,'id'=>$departamento->id],['class'=>'btn btn-success']);}?>


            </td>

               
        
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
