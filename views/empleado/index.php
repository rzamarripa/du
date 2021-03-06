
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use app\models\Departamentos;
?>



<div class="empleado-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
  
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="empleados-form">

     <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>

    <?= $form->field($model, 'apellidos')->textInput() ?>

    <?= $form->field($model, 'celular')->textInput() ?>

    <?= $form->field($model, 'puesto')->textInput() ?>

    <?= $form->field($model, 'departamento_did')->dropDownList(
            ArrayHelper::map(Departamentos::find()->all(), 'id', 'nombre'),           // Flat array ('id'=>'label')
            ['prompt'=>'Seleccione un departamento']    // options
        );
    ?>

    <?= $form->field($model, 'direccion')->textarea(['rows' => 6]) ?>

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
            <th>Apellidos</th>
            <th>Celular</th>
            <th>Puesto</th>
            <th>Direccion</th>   
            <th>Estatus</th>
            <th>Departamento</th>  
            <th>Acciones</th> 
        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($empleados as $empleado) {$c++;?> 
        <tr>
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $empleado->nombre ?></td>
            <td><?= $empleado->apellidos ?></td>
            <td><?= $empleado->celular ?></td>
            <td><?= $empleado->puesto ?></td>
            <td><?= $empleado->direccion ?></td>


    
            <td><span class="label label-<?php if($empleado->estatus_did == 1)echo 'success';if($empleado->estatus_did == 2)echo 'danger'; ?>">
                <?= $empleado->nombre ?></span></td>
                 <td><?= $empleado->departamento->nombre ?></td>
            <td>
                <?= Html::a('<span class="fa fa-pencil"></span>',['empleado/update','id'=>$empleado->id],['class'=>'btn btn-default']) ?>
                   <?= Html::a('<span class="fa fa-print"> </span>',['empleado/imprimir'],['class'=>'btn btn-default','target' => '_blank'])?>
                 <?php if($empleado->estatus_did == 1){ echo Html::a('<span class="glyphicon glyphicon-remove"></span>',['empleado/cambiar','estatus'=>2,'id'=>$empleado->id],['class'=>'btn btn-danger']);
            }else{echo Html::a('<span class="glyphicon glyphicon-ok"></span>',['empleado/cambiar','estatus'=>1,'id'=>$empleado->id],['class'=>'btn btn-success']);}?>

            </td>
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
