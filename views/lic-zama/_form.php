<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\LicZama */
/* @var $form yii\widgets\ActiveForm */
?>

		<section id="widget-grid" class="">
                
                    <!-- row -->
                    <div class="row">
                
                        <!-- NEW WIDGET START -->
                        <article class="col-sm-12 col-md-12 col-lg-6">
                
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
                                    <h2>Very Basic Wizard Example </h2>
                
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
                                            <form id="wizard-1" novalidate="novalidate">
                                                <div id="bootstrap-wizard-1" class="col-sm-12">
                                                    <div class="form-bootstrapWizard">
                                                        <ul class="bootstrapWizard form-wizard">
                                                            <li class="active"  data-target="#step1">
                                                                <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Paso 1</span> </a>
                                                            </li>
                                                            <li   data-target="#step2">
                                                                <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Paso 2</span> </a>
                                                            </li>
                                                            <li   data-target="#step3">
                                                                <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Paso 3</span> </a>
                                                            </li>
                                                           
                                                            
                                                        </ul>
                                                        <input class="form-control input-lg" placeholder="idTramite" type="hidden" name="id" id="idTramite">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab1">
                                                            <br>
                                                            <h3><strong>Paso 1 </strong> - Paso 1</h3>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="Nombre" type="text" name="Nombre" id="Nombre">


                                                                           

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="Apellidos" type="text" name="Apellidos" id="Apellidos">


                                                                           

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane " id="tab2">
                                                            <br>
                                                            <h3><strong>Paso 2 </strong> - Paso 2</h3>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="Cvecatastral" type="text" name="Cvecatastral" id="Cvecatastral">


                                                                           

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane " id="tab3">
                                                            <br>
                                                            <h3><strong>Paso 3 </strong> - Paso 3</h3>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="escrituras" type="text" name="escrituras" id="escrituras">


                                                                           

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="imprmirLicencia" type="text" name="imprmirLicencia" id="imprmirLicencia">


                                                                           

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                        </div>

                                                  
                
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
                                            </form>
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

 <?php $this->registerJs( "\$(document).ready(function() {
            
            pageSetUp();
            
            
    
            //Bootstrap Wizard Validations

              var \$validator = \$('#wizard-1').validate({
                
                rules: {

                  Nombre: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  Apellidos: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  Cvecatastral: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  escrituras: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  imprmirLicencia: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },
                },
                
                messages: {
                Nombre: {
                  required: 'Por favor especificar Nombre',
                  minlength: 'El Valor de Nombre debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de Nombre excede el numero de caracteres permitidos',


                },

                Apellidos: {
                  required: 'Por favor especificar Apellidos',
                  minlength: 'El Valor de Apellidos debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de Apellidos excede el numero de caracteres permitidos',


                },

                Cvecatastral: {
                  required: 'Por favor especificar Cvecatastral',
                  minlength: 'El Valor de Cvecatastral debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de Cvecatastral excede el numero de caracteres permitidos',


                },

                escrituras: {
                  required: 'Por favor especificar escrituras',
                  minlength: 'El Valor de escrituras debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de escrituras excede el numero de caracteres permitidos',


                },

                imprmirLicencia: {
                  required: 'Por favor especificar imprmirLicencia',
                  minlength: 'El Valor de imprmirLicencia debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de imprmirLicencia excede el numero de caracteres permitidos',


                },

                  
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
                    var datos = \$('#wizard-1').serializeArray().reduce(function(obj, item) {
                                                            if(item.name =='id' || item.value != '')

                                                            obj['LicZama['+item.name +']'] = item.value;
                                                            return obj;
                                                        }, {});
                    datos['paso']=index;
                    datos['_csrf']=csrfToken;
                    
                    \$.post( '".Yii::$app->homeUrl."/lic-zama/salvar', datos)
                                        .done(function( data ) {
                                            
                                            \$('#idTramite').val(data.id);
                                          });
                    
                    \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).addClass(
                      'complete');
                    \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).find('.step')
                    .html('<i class=\'fa fa-check\'></i>');
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

        
        });" ,\yii\web\View ::POS_LOAD); ?> 
