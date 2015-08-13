
<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
?>



<div class="atributos-index">

   
 

    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
  <div class="well">
    <div class="atributos-form">

     <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>

    <?= $form->field($model, 'tipoAtributoId')->textInput() ?>

    <?= $form->field($model, 'tipoTramiteId')->textInput() ?>

    <?= $form->field($model, 'allowNull')->textInput() ?>

    <?= $form->field($model, 'attrLength')->textInput() ?>
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
            <th>Tipo Atributo</th>
            <th>Tipo tramite</th>
            <th>nulos</th>   
            <th>attrLength</th> 
            <th>Acciones</th> 
        </tr>
    </thead>
    <tbody>

  <?php foreach ($atributos as $atributo) {?> 
        <tr>
            <td><?= $atributo->nombre ?></td>
            <td><?= $atributo->tipoAtributoId ?></td>
            <td><?= $atributo->tipoTramiteId ?></td>
            <td><?= $atributo->allowNull ?></td>
            <td><?= $atributo->attrLength ?></td>
            <td><?= Html::a('<span class="fa fa-pencil"></span>',['pasostramite/atributosupdate','id'=>$atributo->id],['class'=>'btn btn-default']) ?></td>
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
