
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
    
    <?= $form->field($model, 'empresa_did')->dropDownList(ArrayHelper::map(app\models\Empresas::find()->asArray()->all(), 'id', 'nombre'),["prompt"=>"Seleccione"]) ?>

    <?= $form->field($model, 'fechaCreacion')->widget(\yii\jui\DatePicker::classname(), [
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
            <th>No.</th>
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Descripción</th> 
            <th>Estatus</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($VisitasEmpresas as $vemp) {$c++;?> 
        <tr>
             <td class='col-sm-1'><?= $c?></td> 
            <td><?= $vemp->empresas->nombre ?></td>
            <td><?= $vemp->fechaCreacion ?></td>
            <td><?= $vemp->descripcion ?></td>

            <td><span class="label label-<?php if($vemp->estatus_did == 1)echo 'warning';if($vemp->estatus_did == 3)echo 'success';if($vemp->estatus_did == 4)echo 'danger'; ?>">
              <?= $vemp->estatus->proyecto ?></span> 
          </td>
            <td>
                <?= Html::a('<span class="fa fa-pencil"></span>',['visitas-empresas/update','id'=>$vemp->id],['class'=>'btn btn-default']) ?>
                <?= Html::a('<span class="fa fa-print"> </span>',['visitas-empresas/imprimir'],['class'=>'btn btn-default'])?>
         
            <div class="btn-group">
              <button type="button" class="btn btn-info btn-sx dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="caret"></span>
                 </button>
                  <ul class="dropdown-menu">
                   <?php if($vemp->estatus_did != 1){?><li><?= Html::a('Pendiente',['visitas-empresas/cambiar','estatus'=>1,'id'=>$vemp->id]) ?></li><?php }?>
                   <?php if($vemp->estatus_did != 3){?><li><?= Html::a('realizado',['visitas-empresas/cambiar','estatus'=>4,'id'=>$vemp->id]) ?></li><?php }?>
                   <?php if($vemp->estatus_did != 4){?><li><?= Html::a('eliminado',['visitas-empresas/cambiar','estatus'=>3,'id'=>$vemp->id]) ?></li><?php }?>
                  </ul>
            </td>
           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
