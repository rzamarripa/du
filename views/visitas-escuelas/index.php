
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use app\models\VisitasEscuelas;
    use yii\jui\DatePicker;
    use app\models\vistasescuelas;
    use yii\web\View;
?>



<div class="visitas-escuelas-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="visitas-escuelas-form">

     <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'escuela_did')->dropDownList(ArrayHelper::map(app\models\Escuelas::find()->all(), 'id', 'nombre'), ["prompt"=>"Seleccione"]) ?>

    <?= $form->field($model, 'fecha_ft')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
      'dateFormat' => 'yyyy-MM-dd',
       ])->textInput() ?>
    
    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>




<!--<div class='row'>
    <div class='col-sm-12'>
        <div class="reportes-form">
        <form action="filtro" class="">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Fecha Inicial</label>
              <div class='input-group date'>
                <input type='text' class="form-control datepicker" name="filtro[fechaInicial]" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>

                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Fecha Final</label>
              <div class='input-group date'>
                <input type='text' class="form-control datepicker" name="filtro[fechaFinal]" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
                </div>              
                
             <button style="margin-top: 23px;" class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>
        </div>
    </div>
</div>
<hr>-->

<!--<input type="date" name="filtro[fechaInicial]">
     <input type="date" name="filtro[fechaFinal]">
     <button class="btn btn-primary" type="submit">Buscar</button> 
  </form>
  </div>-->


<div class='row'>
    <div class='col-sm-12'>
<div class="Visitas-Empresas-form">
    <form action="filtro">
      <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Fecha Inicial</label>
              <div class='input-group date'>
                <input type='text' class="form-control datepicker" name="filtro[fechaInicial]" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
                    <div class="form-group">
                        <label>Fecha Final</label>
              <div class='input-group date'>
                <input type='text' class="form-control datepicker" name="filtro[fechaFinal]" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
                </div> 
                <button style="margin-top: 23px;" class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>
        </div>
    </div>
</div>

     

   <?php 
  if($boton){ ?>
   <div class="form-group">
      <?= Html::a('Imprimir Contenido',['visitas-escuelas/imprimir-filtro','fechas' => $_GET],['class'=>'btn btn-default','target' => '_blank']) ?>   
     </div>
     <?php }?>



<!--<img src="<?= Yii::$app->getUrlManager()->getBaseUrl() ?> /img/ayuntamiento.svg"  >-->
   <table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
           <th>No.</th>
            <th>Escuela</th>
            <th>Fecha</th>
            <th>Descripcion</th>
            <th>Estatus</th> 
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($VisitasEscuelas as $ve) {$c++;?> 
        <tr>
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $ve->escuela->nombre ?></td>
            <td><?= $ve->fecha_ft ?></td>
            <td><?= $ve->descripcion ?></td>

            <td>
           <span class="label label-<?php if($ve->estatus_did == 1)echo 'warning';if($ve->estatus_did == 3)echo 'success';if($ve->estatus_did == 4)echo 'danger'; ?>">
              <?= $ve->estatus->proyecto ?></span>
            </td>

            <td>
               <?= Html::a('<span class="fa fa-pencil"></span>',['visitas-escuelas/update','id'=>$ve->id],['class'=>'btn btn-default']) ?>
                 <?= Html::a('<span class="fa fa-print"> </span>',['visitas-escuelas/imprimir'],['class'=>'btn btn-default','target' => '_blank'])?>
            <div class="btn-group">
              <button type="button" class="btn btn-info btn-sx dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="caret"></span>
                 </button>
                  <ul class="dropdown-menu">
                   <?php if($ve->estatus_did != 1){?><li><?= Html::a('Pendiente',['visitas-escuelas/cambiar','estatus'=>1,'id'=>$ve->id]) ?></li><?php }?>
                   <?php if($ve->estatus_did != 3){?><li><?= Html::a('realizado',['visitas-escuelas/cambiar','estatus'=>3,'id'=>$ve->id]) ?></li><?php }?>
                   <?php if($ve->estatus_did != 4){?><li><?= Html::a('eliminado',['visitas-escuelas/cambiar','estatus'=>4,'id'=>$ve->id]) ?></li><?php }?>
                  </ul>
            </div>
            </td>

        </tr>
        <?php }?>
    </tbody>
</table>

</div>