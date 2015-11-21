
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use app\models\Lugares;
    use yii\jui\datepicker;
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

     <?= $form->field($model, 'fecha_ft')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
     'dateFormat' => 'yyyy-MM-dd',
      ])->textInput() ?>

    <?= $form->field($model, 'motivo')->textArea() ?>

    <?= $form->field($model, 'afectacion')->textArea() ?>

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
            <th>Fecha</th>
            <th>Motivo de denuncia</th>
            <th>observaciones</th>  
            <th>Estatus</th>
            <th>Acciones</th>


        </tr>
    </thead>
    <tbody>

        <?php $c=0; foreach ($Quejas as $queja) {$c++;?> 
        <tr>    
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $queja->nombre ?></td>
            <td><?= $queja->fecha_ft ?></td>
            <td><?= $queja->motivo ?></td>
            <td><?= $queja->afectacion ?></td>
             <td>
           <span class="label label-<?php if($queja->estatus_did == 1)echo 'warning';if($queja->estatus_did == 3)echo 'success';if($queja->estatus_did == 4)echo 'danger'; ?>">
              <?= $queja->estatus->proyecto ?></span>
            </td>
            <td>
                <?= Html::a('<span class="fa fa-pencil"></span>',['quejas/update','id'=>$queja->id],['class'=>'btn btn-default']) ?>
                <?= Html::a('<span class="fa fa-print"> </span>',['quejas/imprimir'],['class'=>'btn btn-default','target' => '_blank'])?>
                <div class="btn-group">
              <button type="button" class="btn btn-info btn-sx dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="caret"></span>
                 </button>
                  <ul class="dropdown-menu">
                   <?php if($queja->estatus_did != 1){?><li><?= Html::a('Pendiente',['quejas/cambiar','estatus'=>1,'id'=>$queja->id]) ?></li><?php }?>
                   <?php if($queja->estatus_did != 3){?><li><?= Html::a('realizado',['quejas/cambiar','estatus'=>3,'id'=>$queja->id]) ?></li><?php }?>
                   <?php if($queja->estatus_did != 4){?><li><?= Html::a('eliminado',['quejas/cambiar','estatus'=>4,'id'=>$queja->id]) ?></li><?php }?>
                  </ul>
            </div>
            </td>  
           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
