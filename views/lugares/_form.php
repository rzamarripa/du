<<<<<<< HEAD
<?php
=======
_<?php
>>>>>>> deff04c116a1e7e1bf4935a5a61d2ccdb084f80a

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="Estatus-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'nombre')->textInput() ?>
=======
   <?= $form->field($model, 'nombre')->textInput() ?>
>>>>>>> deff04c116a1e7e1bf4935a5a61d2ccdb084f80a

    <?= $form->field($model, 'direccion')->textInput() ?>

    <?= $form->field($model, 'telefono')->textInput() ?>

    <?= $form->field($model, 'contacto')->textInput() ?>

<<<<<<< HEAD
=======

>>>>>>> deff04c116a1e7e1bf4935a5a61d2ccdb084f80a
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar cambios', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
