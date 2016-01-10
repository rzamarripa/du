
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
?>



<div class="Estatus-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="Estatus-form">

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
            <th>Proyecto</th>
            <th>Acciones</th>
            

    
        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($Estatus as $estatus) {$c++;?> 
        <tr>
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $estatus->nombre ?></td>
             <td><?= $estatus->proyecto ?></td>
            <td>
                 <?= Html::a('<span class="fa fa-pencil"></span>',['estatus/update','id'=>$estatus->id],['class'=>'btn btn-default']) ?>
                 <?= Html::a('<span class="fa fa-print"> </span>',['estatus/imprimir'],['class'=>'btn btn-default','target' => '_blank'])?>
                 <?= Html::a('<span class="glyphicon glyphicon-remove"></span>',['estatus/delete','id' =>$estatus->id],['class'=>'btn btn-danger']) ?>

        </td>


        </tr>
        <?php }?>
    </tbody>
</table>

</div>
