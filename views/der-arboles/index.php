
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use yii\models\Empleados;
    use yii\jui\DatePicker;
?>



<div class="dictamenes-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="departamentos-form">

     <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>

    <?= $form->field($model, 'calle')->textInput() ?>

    <?= $form->field($model, 'entre_calles')->textInput() ?>

    <?= $form->field($model, 'colonia_fracc')->textInput() ?>

    <?= $form->field($model, 'tipo_de_arbol')->textInput() ?>

    <?= $form->field($model, 'ubicacion')->textInput() ?>

    <?= $form->field($model, 'motivos')->textArea() ?>

    <?= $form->field($model, 'observaciones')->textArea() ?>

    
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
            <th>Entre calles</th>
            <th>colonia</th>
            <th>Tipo de arbol</th>
            <th>Ubicacion</th>
            <th>Motivos</th>
            <th>Observaciones</th>
            <th>Acciones</th>

        
    </thead>
    <tbody>
        <?php $c=0; foreach ($DerArboles as $arboles) {$c++;?> 
        <tr>   
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $arboles->nombre ?></td>
            <td><?= $arboles->calle ?></td>
            <td><?= $arboles->entre_calles ?></td>
            <td><?= $arboles->tipo_de_arbol ?></td>
            <td><?= $arboles->ubicacion ?></td>
            <td><?= $arboles->motivos ?></td>
            <td><?= $arboles->observaciones ?></td>
            <td>
             <?= Html::a('<span class="fa fa-pencil"></span>',['der-arboles/update','id'=>$arboles->id],['class'=>'btn btn-default']) ?>
             <?= Html::a('<span class="fa fa-eye"></span>',['der-arboles/view','id'=>$arboles->id],['class'=>'btn btn-default']) ?>
             <?= Html::a('<span class="fa fa-print"> </span>',['der-arboles/imprimir'],['class'=>'btn btn-default','target' => '_blank'])?>
             <?= Html::a('<span class="glyphicon glyphicon-remove"></span>',['der-arboles/delete','id' =>$arboles->id],['class'=>'btn btn-danger','onclick' => "return confirm('Estas seguro?')"]) ?>


            </td>       
        
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
