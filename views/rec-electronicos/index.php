
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use yii\jui\DatePicker;
?>



<div class="recElectronicos-index">

   <h3>Recolección de Desechos Electrónicos</h3>
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="rec-electronicos-form">

     <?php $form = ActiveForm::begin(); ?>
     

<input id="asdasd" type="radio" name="tipo" value="escuela"><label for="asdasd">Escuela</label>
<input id="123123" type="radio" name="tipo" value="empresa"><label for="123123">Empresa</label>

  <?= $form->field($model, 'escuela_did')->dropDownList(ArrayHelper::map(app\models\Escuelas::find()->all(), 'id', 'nombre'), ["prompt"=>"Seleccione",'id'=>'escuela','disabled'=>'disabled']) ?>

  <?= $form->field($model, 'empresa_did')->dropDownList(ArrayHelper::map(app\models\Empresas::find()->all(), 'id', 'nombre'), ["prompt"=>"Seleccione", 'id'=>'empresa','disabled'=>'disabled']) ?>
 

     <?= $form->field($model, 'fecha_ft')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
      'dateFormat' => 'yyyy-MM-dd',
       ])->textInput() ?>

    <?= $form->field($model, 'observaciones')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>

<div class="rec-electronicos-form">
    <form action="filtro">
     <input type="date" name="filtro[fechaInicial]">
     <input type="date" name="filtro[fechaFinal]">
     <button class="btn btn-primary" type="submit">Buscar</button>
  </form>
  </div>
  <?php 
  if($boton){ ?>
   <div class="form-group">
      <?= Html::a('Imprimir Contenido',['rec-electronicos/imprimir-filtro','fechas' => $_GET],['class'=>'btn btn-default','target' => '_blank']) ?>   
     </div>
     <?php }?>

  <table id="datatable" class="table table-striped table-bordered">
  	<thead>
        <tr>
            <th>No.</th>
            <th>Empresa</th>
            <th>Escuela</th>
            <th>fecha</th>
            <th>Observaciones</th>
            <th>Estatus</th>
            <th>Acciones</th>    
		</thead>
    <tbody>
        <?php $c=0; foreach ($RecElectronicos as $elec) {$c++;?>
        <tr>   
            <td class='col-sm-1'><?= $c?></td>
            <td><?php if(isset($elec->empresas->nombre)) echo $elec->empresas->nombre ?></td>
            <td><?php if(isset($elec->escuelas->nombre)) echo $elec->escuelas->nombre ?></td> 
            <td><?= $elec->fecha_ft ?></td>
            <td><?= $elec->observaciones ?></td>
             <td>
           <span class="label label-<?php if($elec->estatus_did == 1)echo 'warning';if($elec->estatus_did == 3)echo 'success';if($elec->estatus_did == 4)echo 'danger'; ?>">
              <?= $elec->estatus->proyecto ?></span>
            </td>
            <td>
            <?= Html::a('<span class="fa fa-pencil"></span>',['rec-electronicos/update','id'=>$elec->id],['class'=>'btn btn-default']) ?>
            <?= Html::a('<span class="fa fa-print"> </span>',['rec-electronicos/imprimir'],['class'=>'btn btn-default','target' => '_blank'])?>
            <div class="btn-group">
              <button type="button" class="btn btn-info btn-sx dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="caret"></span>
              </button>
                  <ul class="dropdown-menu">
                   <?php if($elec->estatus_did != 1){?><li><?= Html::a('Pendiente',['rec-electronicos/cambiar','estatus'=>1,'id'=>$elec->id]) ?></li><?php }?>
                   <?php if($elec->estatus_did != 3){?><li><?= Html::a('Realizado',['rec-electronicos/cambiar','estatus'=>3,'id'=>$elec->id]) ?></li><?php }?>
                   <?php if($elec->estatus_did != 4){?><li><?= Html::a('Eliminado',['rec-electronicos/cambiar','estatus'=>4,'id'=>$elec->id]) ?></li><?php }?>
                  </ul>
            </div>
        </tr>
        <?php }?>
    </tbody>
	</table>
</div>
<script>
    $("input[name=tipo]").click(function(){
    if(this.value=="escuela"){
        $("#escuela").prop('disabled', false);
        $("#empresa").prop('disabled', true);
    }else{
        $("#escuela").prop('disabled', true);
        $("#empresa").prop('disabled', false);
        
    }
});

    
    </script>


