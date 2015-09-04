
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
<<<<<<< HEAD
    use app\models\Lugares;
=======
    use app\models\Tareas;
>>>>>>> deff04c116a1e7e1bf4935a5a61d2ccdb084f80a
?>



<<<<<<< HEAD
<div class="escuelas-index">
=======
<div class="Tareas-index">
>>>>>>> deff04c116a1e7e1bf4935a5a61d2ccdb084f80a

   
 

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
<<<<<<< HEAD
            <th>Direccion</th>
=======
            <th>Dirección</th>
>>>>>>> deff04c116a1e7e1bf4935a5a61d2ccdb084f80a
            <th>Telefono</th>
            <th>Contacto</th>  
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
<<<<<<< HEAD
        <?php foreach ($Lugares as $lugar) {?> 
        <tr>
            <td><?= $lugar->nombre ?></td>
            <td><?= $lugar->direccion ?></td>
            <td><?= $lugar->telefono ?></td>
            <td><?= $lugar->contacto ?></td>
=======
        <?php foreach ($Lugares as $lugares) {?> 
        <tr>
            <td><?= $lugares->nombre ?></td>
            <td><?= $lugares->direccion ?></td>
            <td><?= $lugares->telefono ?></td>
            <td><?= $lugares->contacto ?></td>
>>>>>>> deff04c116a1e7e1bf4935a5a61d2ccdb084f80a



            <td>
<<<<<<< HEAD
                <?= Html::a('<span class="fa fa-pencil"></span>',['lugares/update','id'=>$lugar->id],['class'=>'btn btn-default']) ?>
          <?= Html::a('<span class="fa fa-trash-o"></span>',['lugares/delete','id' =>$lugar->id],['class'=>'btn btn-danger']) ?>
=======
                <?= Html::a('<span class="fa fa-pencil"></span>',['lugares/update','id'=>$lugares->id],['class'=>'btn btn-default']) ?>
          <?= Html::a('<span class="fa fa-trash-o"></span>',['lugares/delete','id' =>$lugares->id],['class'=>'btn btn-danger']) ?>
>>>>>>> deff04c116a1e7e1bf4935a5a61d2ccdb084f80a

           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
