
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use app\models\vistasescuelas;
?>



<div class="visitas-escuelas-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="empleados-form">

     <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'escuela_did')->textInput() ?>

    <?= $form->field($model, 'fecha_ft')->textInput() ?>

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
            <th>escuela_did</th>
            <th>fecha</th>
            <th>descripcion</th> 
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($VisitasEscuelas as $ve) {?> 
        <tr>
            <td><?= $ve->escuela_did ?></td>
            <td><?= $ve->fecha_ft ?></td>
            <td><?= $ve->descripcion ?></td>
            



            <td>
                <?= Html::a('<span class="fa fa-pencil"></span>',['visitasescuelas/update','id'=>$visitasescuelas->id],['class'=>'btn btn-default']) ?>
          <?= Html::a('<span class="fa fa-trash-o"></span>',['visitasescuelas/delete','id' =>$visitasEscuelas->id],['class'=>'btn btn-danger']) ?>

           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
