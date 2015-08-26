
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use app\models\Departamentos;
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
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Contacto</th>  
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($Escuelas as $escuela) {?> 
        <tr>
            <td><?= $escuela->nombre ?></td>
            <td><?= $escuela->direccion ?></td>
            <td><?= $escuela->telefono ?></td>
            <td><?= $escuela->contacto ?></td>



            <td>
                <?= Html::a('<span class="fa fa-pencil"></span>',['escuelas/update','id'=>$escuela->id],['class'=>'btn btn-default']) ?>
          <?= Html::a('<span class="fa fa-trash-o"></span>',['escuelas/delete','id' =>$escuela->id],['class'=>'btn btn-danger']) ?>

           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
