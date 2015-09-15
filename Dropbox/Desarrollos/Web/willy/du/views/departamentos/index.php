
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


    <?= $form->field($model, 'tipoAtributoId')->dropDownList(ArrayHelper::map(app\models\TiposAtributo::find()->asArray()->all(), 'id', 'nombre')) ?>


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
            <th>Empleado</th>
            <th>Departamentos</th>
            <th>Acciones</th>
            
        
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Departamentos as $departamento) {?> 
        <tr>
            <td><?= $departamento->nombre ?></td>
            <td>
             <?= Html::a('<span class="fa fa-pencil"></span>',['departamentos/update','id'=>$departamento->id],['class'=>'btn btn-default']) ?>
                <?php if($departamento->estatus_did == 1){ echo Html::a('<span class="fa fa-trash-o"></span>',['departamentos/cambiar','estatus'=>2,'id'=>$departamento->id],['class'=>'btn btn-danger']);
            }else{echo Html::a('<span class="fa fa-recycle"></span>',['departamentos/cambiar','estatus'=>1,'id'=>$departamento->id],['class'=>'btn btn-success']);}?>

            <td>
            </td>

               
        
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
