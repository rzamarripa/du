
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
?>



<div class="TiposAtributo-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="TiposAtributo-form">

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
            
        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($tiposAtributo as $tA) {$c++;?> 
        <tr>
          <td class='col-sm-1'><?= $c?></td> 
            <td><?= $tA->nombre ?></td>
            <td>
          <?= Html::a('<span class="fa fa-pencil"></span>',['tipos-atributo/update','id'=>$tA->id],['class'=>'btn btn-default']) ?>
          <?= Html::a('<span class="fa fa-print"> </span>',['tipos-atributo/imprimir'],['class'=>'btn btn-default'])?>
          <?= Html::a('<span class="glyphicon glyphicon-remove"></span>',['tipos-atributo/delete','id' =>$tA->id],['class'=>'btn btn-danger']) ?>

        </td>


        </tr>
        <?php }?>
    </tbody>
</table>

</div>
