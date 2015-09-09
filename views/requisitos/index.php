
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use app\models\requistos;
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
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>

            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Requisitos as $requisito) {?> 
        <tr>
            <td><?= $requisito->nombre ?></td>
            <td><?= $requisito->descripcion ?></td>
      
            <td><?= Html::a('<span class="fa fa-pencil"></span>',['requisitos/update','id'=>$requisito->id],['class'=>'btn btn-default']) ?>
               <?= Html::a('<span class="fa fa-trash-o"></span>',['requisitos/delete','id' =>$requisito->id],['class'=>'btn btn-danger']) ?>
               <?= Html::a('Detalles',['detallerequisitos/index','id'=>$requisito->id],['class'=>'btn btn-primary btn-sm'])?>
            </td>



        </tr>
        <?php }?>
    </tbody>
</table>

</div>
