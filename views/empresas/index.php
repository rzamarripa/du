
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use app\models\Lugares;
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

    <?= $form->field($model, 'direccion')->textInput() ?>

    <?= $form->field($model, 'telefono')->textInput() ?>

    <?= $form->field($model, 'contacto')->textInput() ?>

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
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Contacto</th> 
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>

        <?php $c=0; foreach ($Empresas as $empresa) {$c++;?> 
        <tr>    
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $empresa->nombre ?></td>
            <td><?= $empresa->direccion ?></td>
            <td><?= $empresa->telefono ?></td>
            <td><?= $empresa->contacto ?></td>


            <td>
                <?= Html::a('<span class="fa fa-pencil"></span>',['empresas/update','id'=>$empresa->id],['class'=>'btn btn-default']) ?>
                <?= Html::a('<span class="fa fa-print"> </span>',['empresas/imprimir'],['class'=>'btn btn-default'])?>
                <?= Html::a('<span class="glyphicon glyphicon-remove"></span>',['empresas/delete','id' =>$empresa->id],['class'=>'btn btn-danger','onclick' => "return confirm('Estas seguro?')"]) ?>

            </td>  
           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
