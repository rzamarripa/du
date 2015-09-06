
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use yii\jui\DatePicker;
    use app\models\visitasLugares;
?>



<div class="visitas-Lugares-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="Visitas-Lugares-form">

     <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'lugares_did')->dropDownList(ArrayHelper::map(app\models\lugares::find()->asArray()->all(), 'id', 'nombre'),["prompt"=>"Seleccione"]) ?>

    <?= $form->field($model, 'fecha_ft')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
     'dateFormat' => 'yyyy-MM-dd',
      ])->textInput() ?>
    </div>

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
            <th>Escuela</th>
            <th>Fecha</th>
            <th>Descripción</th> 
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($VisitasLugares as $vl) {?> 
        <tr>
            <td><?= $vl->lugares_did ?></td>
            <td><?= $vl->fecha_ft ?></td>
            <td><?= $vl->descripcion ?></td>
            



            <td>
                <?= Html::a('<span class="fa fa-pencil"></span>',['visitas-lugares/update','id'=>$vl->id],['class'=>'btn btn-default']) ?>
          <?= Html::a('<span class="fa fa-trash-o"></span>',['visita-lugares/delete','id' =>$vl->id],['class'=>'btn btn-danger']) ?>

           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
