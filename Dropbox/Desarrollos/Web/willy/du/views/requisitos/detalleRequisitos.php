
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    
?>



<div class="detalleRequistos-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="DetalleRequistos-form">

     <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>

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
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Detalles</th>
            <th>Acciones</th>

            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($DetalleRequisitos as $dR) {?> 
        <tr>
            <td><?= $dR->nombre ?></td>
            <td><?= $dR->descripcion ?></td>
            <td><?= $dR->requisito->nombre ?></td>
            <td><?= Html::a('<span class="fa fa-pencil"></span>',['detallerequisitos/update','id'=>$dR->id],['class'=>'btn btn-default']) ?>
               <?= Html::a('<span class="fa fa-trash-o"></span>',['detallerequisitos/delete','id' =>$dR->id],['class'=>'btn btn-danger']) ?>
            </td>



        </tr>
        <?php }?>
    </tbody>
</table>

</div>
