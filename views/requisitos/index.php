
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use app\models\requistos;
    use app\models\DetalleRequisitos;
?>



<div class="requistos-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="requistos-form">

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
            <th>No.</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>

            
        </tr>
    </thead>
    <tbody>
        <?php $c=0;  foreach ($Requisitos as $requisito) {$c++;?>
        <tr>
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $requisito->nombre ?></td>
            <td><?= $requisito->descripcion ?></td>
      
            <td><?= Html::a('<span class="fa fa-pencil"></span>',['requisitos/update','id'=>$requisito->id],['class'=>'btn btn-default']) ?>
               <?= Html::a('<span class="glyphicon glyphicon-remove"></span>',['requisitos/delete','id' =>$requisito->id],['class' => 'btn btn-danger' ,'onclick' => "return confirm('Estas seguro?')"]) ?>
               <?= Html::a('Detalles',['detallerequisitos/index','id'=>$requisito->id],['class'=>'btn btn-primary btn-sm'])?>
               <?= Html::a('<span class="fa fa-print"> </span>',['requisitos/imprimir'],['class'=>'btn btn-default'])?>
               <?= Html::a('Detalles',['detalle-requisitos/index','id'=>$requisito->id],['class'=>'btn btn-primary btn-sm'])?>
            </td>



        </tr>
        <?php }?>
    </tbody>
</table>

</div>
