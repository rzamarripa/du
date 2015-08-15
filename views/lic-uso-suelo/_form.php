<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\LicUsoSuelo */
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
                                                                <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Solicitud</span> </a>
                                                            </li>
                                                            <li   data-target="#step2">
                                                                <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Requisitos - Documentos</span> </a>
                                                            </li>
                                                            <li   data-target="#step3">
                                                                <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Revisión</span> </a>
                                                            </li>
                                                            <li   data-target="#step4">
                                                                <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Pago</span> </a>
                                                            </li>
                                                            <li   data-target="#step5">
                                                                <a href="#tab5" data-toggle="tab"> <span class="step">5</span> <span class="title">Expedir Licencia</span> </a>
                                                            </li>
                                                           
                                                            
                                                        </ul>
                                                        <input class="form-control input-lg" placeholder="idTramite" type="hidden" name="id" id="idTramite">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab1">
                                                            <br>
                                                            <h3><strong>Paso 1 </strong> - Solicitud</h3>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="nombre" type="text" name="nombre" id="nombre">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="direccion" type="text" name="direccion" id="direccion">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="telefono" type="text" name="telefono" id="telefono">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="calle" type="text" name="calle" id="calle">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="colonia" type="text" name="colonia" id="colonia">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="loteNo" type="text" name="loteNo" id="loteNo">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="manzanaNo" type="text" name="manzanaNo" id="manzanaNo">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="claveCatastral" type="text" name="claveCatastral" id="claveCatastral">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="usoActual" type="text" name="usoActual" id="usoActual">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="usoSolicitado" type="text" name="usoSolicitado" id="usoSolicitado">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="cajonesEstacionamiento" type="text" name="cajonesEstacionamiento" id="cajonesEstacionamiento">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="pBConstruida" type="text" name="pBConstruida" id="pBConstruida">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="pAConstruida" type="text" name="pAConstruida" id="pAConstruida">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="otrosConstruida" type="text" name="otrosConstruida" id="otrosConstruida">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="totalConstruida" type="text" name="totalConstruida" id="totalConstruida">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="pBPorConstruir" type="text" name="pBPorConstruir" id="pBPorConstruir">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="pAPorConstruir" type="text" name="pAPorConstruir" id="pAPorConstruir">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="otrosPorConstruir" type="text" name="otrosPorConstruir" id="otrosPorConstruir">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="totalPorConstruir" type="text" name="totalPorConstruir" id="totalPorConstruir">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="observaciones" type="text" name="observaciones" id="observaciones">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane " id="tab2">
                                                            <br>
                                                            <h3><strong>Paso 2 </strong> - Requisitos - Documentos</h3>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="solicitud" type="text" name="solicitud" id="solicitud">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

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
                                                                            <input class="form-control input-lg" placeholder="requisitosTotales" type="text" name="requisitosTotales" id="requisitosTotales">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane " id="tab3">
                                                            <br>
                                                            <h3><strong>Paso 3 </strong> - Revisión</h3>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="solicitudCorrecta" type="text" name="solicitudCorrecta" id="solicitudCorrecta">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="documentosCorrectos" type="text" name="documentosCorrectos" id="documentosCorrectos">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane " id="tab4">
                                                            <br>
                                                            <h3><strong>Paso 4 </strong> - Pago</h3>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="pago" type="text" name="pago" id="pago">

                
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane " id="tab5">
                                                            <br>
                                                            <h3><strong>Paso 5 </strong> - Expedir Licencia</h3>

                                                            <div class="row">
                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="input-group">

                                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                            <input class="form-control input-lg" placeholder="imprimirLicencia" type="text" name="imprimirLicencia" id="imprimirLicencia">

                
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

                  nombre: {
                    required: true

                  },

                  direccion: {
                    required: true

                  },

                  telefono: {
                    required: true

                  },

                  calle: {
                    required: true

                  },

                  colonia: {
                    required: true

                  },

                  loteNo: {
                    required: true

                  },

                  manzanaNo: {
                    required: true

                  },

                  claveCatastral: {
                    required: true

                  },

                  usoActual: {
                    required: true

                  },

                  usoSolicitado: {
                    required: true

                  },

                  cajonesEstacionamiento: {
                    required: true

                  },

                  pBConstruida: {
                    required: false

                  },

                  pAConstruida: {
                    required: false

                  },

                  otrosConstruida: {
                    required: false

                  },

                  totalConstruida: {
                    required: false

                  },

                  pBPorConstruir: {
                    required: false

                  },

                  pAPorConstruir: {
                    required: false

                  },

                  otrosPorConstruir: {
                    required: false

                  },

                  totalPorConstruir: {
                    required: false

                  },

                  observaciones: {
                    required: false

                  },

                  solicitud: {
                    required: true

                  },

                  escrituras: {
                    required: true

                  },

                  requisitosTotales: {
                    required: true

                  },

                  solicitudCorrecta: {
                    required: true

                  },

                  documentosCorrectos: {
                    required: true

                  },

                  pago: {
                    required: true

                  },

                  imprimirLicencia: {
                    required: true

                  },
                },
                
                messages: {
                nombre: {
                  required: 'Por favor especificar nombre',

                },

                direccion: {
                  required: 'Por favor especificar direccion',

                },

                telefono: {
                  required: 'Por favor especificar telefono',

                },

                calle: {
                  required: 'Por favor especificar calle',

                },

                colonia: {
                  required: 'Por favor especificar colonia',

                },

                loteNo: {
                  required: 'Por favor especificar loteNo',

                },

                manzanaNo: {
                  required: 'Por favor especificar manzanaNo',

                },

                claveCatastral: {
                  required: 'Por favor especificar claveCatastral',

                },

                usoActual: {
                  required: 'Por favor especificar usoActual',

                },

                usoSolicitado: {
                  required: 'Por favor especificar usoSolicitado',

                },

                cajonesEstacionamiento: {
                  required: 'Por favor especificar cajonesEstacionamiento',

                },

                pBConstruida: {

                },

                pAConstruida: {

                },

                otrosConstruida: {

                },

                totalConstruida: {

                },

                pBPorConstruir: {

                },

                pAPorConstruir: {

                },

                otrosPorConstruir: {

                },

                totalPorConstruir: {

                },

                observaciones: {

                },

                solicitud: {
                  required: 'Por favor especificar solicitud',

                },

                escrituras: {
                  required: 'Por favor especificar escrituras',

                },

                requisitosTotales: {
                  required: 'Por favor especificar requisitosTotales',

                },

                solicitudCorrecta: {
                  required: 'Por favor especificar solicitudCorrecta',

                },

                documentosCorrectos: {
                  required: 'Por favor especificar documentosCorrectos',

                },

                pago: {
                  required: 'Por favor especificar pago',

                },

                imprimirLicencia: {
                  required: 'Por favor especificar imprimirLicencia',

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

                                                            obj['LicUsoSuelo['+item.name +']'] = item.value;
                                                            return obj;
                                                        }, {});
                    datos['paso']=index;
                    datos['_csrf']=csrfToken;
                    
                    \$.post( '".Yii::$app->homeUrl."/lic-uso-suelo/salvar', datos)
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
