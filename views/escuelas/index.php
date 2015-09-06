
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use app\models\Escuelas;
?>



<div class="Educacion-index">

   
 

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
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Contacto</th>  
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($Escuelas as $Escuelas) {?> 
        <tr>
            <td><?= $Escuelas->nombre ?></td>
            <td><?= $Escuelas->direccion ?></td>
            <td><?= $Escuelas->telefono ?></td>
            <td><?= $Escuelas->contacto ?></td>



            <td>
                <?= Html::a('<span class="fa fa-pencil"></span>',['escuelas/update','id'=>$Escuelas->id],['class'=>'btn btn-default']) ?>
          <?= Html::a('<span class="fa fa-trash-o"></span>',['escuelas/delete','id' =>$Escuelas->id],['class'=>'btn btn-danger']) ?>
           </td>
           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
