<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use app\models\UsuariosRoles;
?>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form" style="margin-bottom:10px;">
  Nuevo
</button>
<div class="collapse" id="form">
     <div class="site-signup">
        <div class="col-sm-12">
            <div class="col-sm-4 well">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                    <?= $form->field($model, 'username') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                    <?= $form->field($model, 'password_repeat')->passwordInput(['class' => 'form-control input-xlarge']) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Roles</th>
            <th>Acciones</th>   
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario) {?> 
        <tr>
            <td><?= $usuario->username ?></td>
           <?php $roles = UsuariosRoles::find()->where('usuarioId = :id',['id'=>$usuario->id])->all(); ?>
            <td><?php foreach ($roles as $rol) { echo $rol->roles->nombre;?><br><?php }?></td>
            <td>
                <?= Html::a('Agregar rol',['site/roles','id'=>$usuario->id],['class'=>'btn btn-primary btn-sm'])?>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>