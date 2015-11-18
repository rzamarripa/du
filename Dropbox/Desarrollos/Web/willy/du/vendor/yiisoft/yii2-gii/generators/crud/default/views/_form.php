<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$reflect = new ReflectionClass($model);
$clase = $reflect->getShortName();

$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}
$c = 0;
echo "<?php\n";
?>

use yii\helpers\Html;
<?php if ( is_a($model, 'app\models\TramitExt') ) 
            echo "use kartik\widgets\ActiveForm;\n";
        else
            echo "use yii\widgets\ActiveForm;\n";
         
    ?>
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
<?php if ( is_a($model, 'app\models\TramitExt') ){ 
        echo "use app\models\USUARIOS;\n";
        echo "use kartik\widgets\FileInput;\n";

        echo "\$permisos= \$model->permisosPorPaso;\n";
        }  
    ?> 

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<?php if ( !is_a($model, 'app\models\TramitExt') ){ ?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">

    <?= "<?php " ?>$form = ActiveForm::begin(); ?> 

<?php foreach ($generator->getColumnNames() as $attribute) {

    if (in_array($attribute, $safeAttributes)) {
        echo "    <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
    }
} ?>
    <div class="form-group">
        <?= "<?= " ?>Html::submitButton($model->isNewRecord ? <?= $generator->generateString('Create') ?> : <?= $generator->generateString('Update') ?>, ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?> 
    </div>

    <?= "<?php " ?>ActiveForm::end(); ?> 

</div>

<?php } else{
            $tipoTramite = $model->tipoTramite;
 ?>
<section id="widget-grid" class="">
        
            <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" 
                id="wid-id-0" 
                data-widget-editbutton="true" 
                data-widget-deletebutton="true">
                <!-- widget options:
                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                data-widget-colorbutton="false"
                data-widget-editbutton="false"
                data-widget-togglebutton="false"
                data-widget-deletebutton="false"
                data-widget-fullscreenbutton="false"
                data-widget-custombutton="false"
                data-widget-collapsed="true"
                data-widget-sortable="false"

                -->
                <header>
                    <span class="widget-icon"> <i class="fa fa-check"></i> </span>
                    <h2> <?= Html::encode($model->tipoTramite->nombre) ?></h2>

                </header>

                <!-- widget div-->
                <div>

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body">
                        <div class="row">
                           <?= "<?php \$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id'=> 'wizard-1','novalidat'=>'novalidate']]) ?>" ?> 
                                <div id="bootstrap-wizard-1" class="col-sm-12">
                                    <div class="form-bootstrapWizard">
                                        <ul class="bootstrapWizard form-wizard">
<?php foreach ($tipoTramite->pasosTramites as $key => $paso):?>
                                            <li <?= ($key+1)==1? 'class="active"':'' ?>  data-target="#step<?= $key+1 ?>" style="width:<?= 100/count($tipoTramite->pasosTramites) ?>%">
                                                <a href="#tab<?= $key+1 ?>" data-toggle="tab"> <span class="step"><?= $key+1 ?></span> <span class="title"><?= Html::encode($paso->nombre) ?></span> </a>
                                            </li>
<?php endforeach ?>
                                           
                                            
                                        </ul>
                                        <input class="form-control input-lg" placeholder="idTramite" type="hidden" name="id" id="idTramite">
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
<?php foreach ($tipoTramite->pasosTramites as $key => $paso1):?>
                                        <div class="tab-pane <?= ($key+1)==1? 'active':'' ?>" id="tab<?= $key+1 ?>">
                                            <br>
                                            <h3><strong>Paso <?= $key+1 ?> </strong> - <?= $paso1->nombre ?></h3>
                                        <?= "<?php if(\$permisos[{$paso1->id}][USUARIOS::\$LEER]){ ?>\n" ?> 
<?php foreach ($paso1->atributos as  $atributo):  ?>
                                            <div class="row">
                                                <div class="col-sm-12">
<?php 
switch ($atributo->tipoAtributo->nombre) {
case app\models\TiposAtributo::ENTERO:
case app\models\TiposAtributo::FLOTANTE:
case app\models\TiposAtributo::CADENA: ?>
                                                    <?= "<?= \$form->field(\$model,'{$atributo->nombre}',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class=\"fa fa-envelope fa-lg fa-fw\"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>\$model->getAttributeLabel('{$atributo->nombre}'),
                                                                                                            'name'=>'{$atributo->nombre}',
                                                                                                            'id'=>'{$atributo->nombre}'
                                                                                                        ]
                                                                                        );?>" ?> 
<?php
break;
case app\models\TiposAtributo::TEXTO: ?>
                                                    <?= "<?= \$form->field(\$model,'{$atributo->nombre}',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class=\"fa fa-envelope fa-lg fa-fw\"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>\$model->getAttributeLabel('{$atributo->nombre}'),
                                                                                                            'name'=>'{$atributo->nombre}',
                                                                                                            'id'=>'{$atributo->nombre}'
                                                                                                        ]
                                                                                        );?>" ?> 
<?php
break;
case app\models\TiposAtributo::ARCHIVO: ?>
                                                    <?= "<?= \$form->field(\$model,'{$atributo->nombre}',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'{$atributo->nombre}',
                                                                                                            'id'=>'{$atributo->nombre}'
                                                                                                        ]
                                                                                        ]);?>" ?> 
<?php
break;
case app\models\TiposAtributo::BOLEANO:?>
                                                    <?= "<?= \$form->field(\$model,'{$atributo->nombre}')->checkbox([
                                                                                                            'name'=>'{$atributo->nombre}',
                                                                                                            'id'=>'{$atributo->nombre}'
                                                    ]); ?>" ?> 
<?php
break;
}?>
                                                </div>
                                            </div>
<?php  endforeach ?>
                                        <?= "<?php } else {?>" ?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?= "<?php }?>" ?> 
                                        </div>
<?php  endforeach ?>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <ul class="pager wizard no-margin">
                                                        <!--<li class="previous first disabled">
                                                        <a href="javascript:void(0);" class="btn btn-lg btn-default"> First </a>
                                                        </li>-->
                                                        <li class="previous disabled">
                                                            <a href="javascript:void(0);" class="btn btn-lg btn-default"> Anterior </a>
                                                        </li>
                                                        <!--<li class="next last">
                                                        <a href="javascript:void(0);" class="btn btn-lg btn-primary"> Last </a>
                                                        </li>-->
                                                        <li class="next">
                                                            <a href="javascript:void(0);" class="btn btn-lg txt-color-darken"> Siguiente </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?= "<?php ActiveForm::end(); ?>" ?> 
                        </div>
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
            <!-- end widget -->
        </article>
        <!-- WIDGET END -->
    </div>
    <!-- end row -->
</section>
<!-- end widget grid -->
<!-- END MAIN PANEL -->

<?php
 echo ' <?php $this->registerJs( "';
?>
\$(document).ready(function() {
            
            pageSetUp();
            
            
    
            //Bootstrap Wizard Validations

              var \$validator = \$('#wizard-1').validate({
                
                rules: {
<?php foreach ($tipoTramite->atributos as $key => $atributo){?>

                  <?= $atributo->nombre ?>: {
                    required: <?= $atributo->allowNull? "false\n":"true\n" ?>
<?php if($atributo->tipoAtributo->nombre == app\models\TiposAtributo::ENTERO): ?>
                    ,digits: true
                    ,min: 1
                    ,max: 2147483647
<?php endif ?>
<?php if($atributo->tipoAtributo->nombre == app\models\TiposAtributo::FLOTANTE): ?>
                    ,number: true
                    ,min: 0
<?php endif ?>
<?php if($atributo->tipoAtributo->nombre == app\models\TiposAtributo::TEXTO): ?>
                    
                    ,minlength: 1
<?php endif ?>
<?php if($atributo->tipoAtributo->nombre == app\models\TiposAtributo::CADENA): ?>
                    
                    ,minlength: 1
                    ,maxlength: <?= $atributo->attrLength? $atributo->attrLength:1  ?>
<?php endif ?>

                  },
<?php  } ?>
                },
                
                messages: {
<?php foreach ($tipoTramite->atributos as $key => $atributo){ ?>
                <?= $atributo->nombre ?>: {
<?php if(!$atributo->allowNull) {?>
                  required: 'Por favor especificar {$model->getAttributeLabel('<?= $atributo->nombre ?>')}',
<?php  } ?>
<?php if($atributo->tipoAtributo->nombre == app\models\TiposAtributo::ENTERO): ?>
                  digits: 'El Valor de {$model->getAttributeLabel('<?= $atributo->nombre ?>')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('<?= $atributo->nombre ?>')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('<?= $atributo->nombre ?>')} es demasiado grande',
<?php endif ?>
<?php if($atributo->tipoAtributo->nombre == app\models\TiposAtributo::FLOTANTE): ?>
                  digits: 'El Valor de {$model->getAttributeLabel('<?= $atributo->nombre ?>')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('<?= $atributo->nombre ?>')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('<?= $atributo->nombre ?>')} es demasiado grande',
<?php endif ?>
<?php if($atributo->tipoAtributo->nombre == app\models\TiposAtributo::CADENA): ?>
                  minlength: 'El Valor de {$model->getAttributeLabel('<?= $atributo->nombre ?>')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('<?= $atributo->nombre ?>')} excede el numero de caracteres permitidos',
<?php endif ?>


                },

<?php } ?>
                  
                },
                
                highlight: function (element) {
                  \$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                unhighlight: function (element) {
                  \$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                },
                errorElement: 'span',
                errorClass: 'help-block',
                errorPlacement: function (error, element) {
                  if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                  } else {
                    error.insertAfter(element);
                  }
                }
              });
              
              \$('#bootstrap-wizard-1').bootstrapWizard({
                'tabClass': 'form-wizard',
                'onNext': function (tab, navigation, index) {
                  var \$valid = \$('#wizard-1').valid();
                  if (!\$valid) {
                    \$validator.focusInvalid();
                    return false;
                  } else {
                    var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
                    var form_data = new FormData();
                    var datos = \$('#wizard-1').serializeArray().reduce(function(obj, item) {
                                                            if(item.name =='id' || item.value != '')
                                                                form_data.append('<?= $clase ?>['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');
<?php 
foreach ($tipoTramite->atributos as $key => $atributo):
    if($atributo->tipoAtributo->nombre == app\models\TiposAtributo::ARCHIVO):
?>
                        var <?= $atributo->nombre ?> = $('#<?= $atributo->nombre ?>').prop('files')[0];
                        form_data.append('<?= $clase ?>['+item.name +']', <?= $atributo->nombre ?>);


<?php
    endif; 
endforeach; ?>

                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/<?= $generator->getControllerID() ?>/salvar', // point to server-side PHP script 
                                dataType: 'text',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                                success: function(php_script_response){
                                            \$('#idTramite').val(data.id);
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).addClass(
                                              'complete');
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).find('.step')
                                            .html('<i class=\'fa fa-check\'></i>');
                                    }
                     });
                    
                   
                  }
                }
              });
              
        
            // fuelux wizard
              var wizard = \$('.wizard').wizard();
              
              wizard.on('finished', function (e, data) {
                //\$('#fuelux-wizard').submit();
                //console.log('submitted!');
                \$.smallBox({
                  title: 'Congratulations! Your form was submitted',
                  content: '<i class=\'fa fa-clock-o\'></i> <i>1 seconds ago...</i>',
                  color: '#5F895F',
                  iconSmall: 'fa fa-check bounce animated',
                  timeout: 4000
                });
                
              });

        
        });" <?php echo ',\yii\web\View ::POS_LOAD); ?> ' ?>

<?php } ?>