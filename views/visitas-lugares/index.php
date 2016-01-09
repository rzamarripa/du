
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
    
    <?= $form->field($model, 'lugares_did')->dropDownList(ArrayHelper::map(app\models\Lugares::find()->asArray()->all(), 'id', 'nombre'),["prompt"=>"Seleccione"]) ?>

    <?= $form->field($model, 'fecha_ft')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
     'dateFormat' => 'yyyy-MM-dd',
      ])->textInput() ?>
      


    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>

<div class="Visitas-Lugares-form">
    <form action="filtro">
     <input type="date" name="filtro[fechaInicial]">
     <input type="date" name="filtro[fechaFinal]">
     <button class="btn btn-primary" type="submit">Buscar</button>
  </form>
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
        <?php $c=0; foreach ($VisitasLugares as $vl) {$c++;?> 
        <tr>
        	<td class='col-sm-1'><?= $c?></td> 
          <td><?= $vl->lugares->nombre ?></td>
          <td><?= $vl->fecha_ft ?></td>
          <td><?= $vl->descripcion ?></td>
          <td><span class="label label-<?php if($vl->estatus_did == 1)echo 'warning';if($vl->estatus_did == 3)echo 'success';if($vl->estatus_did == 4)echo 'danger'; ?>">
          <?= $vl->estatus->proyecto ?></span> 
          </td>
          <td>
          	<?= Html::a('<span class="fa fa-pencil"></span>',['visitas-lugares/update','id'=>$vl->id],['class'=>'btn btn-default']) ?>
            <?= Html::a('<span class="fa fa-print"> </span>',['visitas-lugares/imprimir'],['class'=>'btn btn-default','target' => '_blank'])?>
            <div class="btn-group">
              <button type="button" class="btn btn-info btn-sx dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="caret"></span>
                 </button>
                  <ul class="dropdown-menu">
                   <?php if($vl->estatus_did != 1){?><li><?= Html::a('Pendiente',['visitas-lugares/cambiar','estatus'=>1,'id'=>$vl->id]) ?></li><?php }?>
                   <?php if($vl->estatus_did != 3){?><li><?= Html::a('realizado',['visitas-lugares/cambiar','estatus'=>3,'id'=>$vl->id]) ?></li><?php }?>
                   <?php if($vl->estatus_did != 4){?><li><?= Html::a('eliminado',['visitas-lugares/cambiar','estatus'=>4,'id'=>$vl->id]) ?></li><?php }?>
                  </ul>
          </td> 
        </tr>
        <?php }?>
			</tbody>
		</table>
</div>
