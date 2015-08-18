<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteUsoDeSuelo */
/* @var $form yii\widgets\ActiveForm */
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
                                    <h2> Licencia de Uso de Suelo</h2>
                
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
                                                            <li class="active"  data-target="#step1" style="width:20%">
                                                                <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Solicitud</span> </a>
                                                            </li>
                                                            <li   data-target="#step2" style="width:20%">
                                                                <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Requisitos - Documentos</span> </a>
                                                            </li>
                                                            <li   data-target="#step3" style="width:20%">
                                                                <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Revisiï¿½n</span> </a>
                                                            </li>
                                                            <li   data-target="#step4" style="width:20%">
                                                                <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Pago</span> </a>
                                                            </li>
                                                            <li   data-target="#step5" style="width:20%">
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
                                                                            
                                                                            <textarea class="custom-scroll form-control" rows="3" placeholder="calle" type="text" name="calle" id="calle">
                                                                                </textarea> 

                                                                           

                
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
                                                                <label class="checkbox">
                                                                    <input type="checkbox" name="usoActual" id="usoActual" >
                                                                <i data-swchon-text="Si" data-swchoff-text="No"></i>
                                                                usoActual</label>
                                                                           

                
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
                    
                    ,minlength: 1
                    ,maxlength: 150
                  },

                  direccion: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 255
                  },

                  telefono: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  calle: {
                    required: true

                  },

                  colonia: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  loteNo: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  manzanaNo: {
                    required: true
                    ,digits: true
                    ,min: 1
                    ,max: 2147483647

                  },

                  claveCatastral: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  usoActual: {
                    required: true

                  },

                  usoSolicitado: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 10
                  },

                  cajonesEstacionamiento: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 10
                  },

                  pBConstruida: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  pAConstruida: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  otrosConstruida: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  totalConstruida: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  pBPorConstruir: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  pAPorConstruir: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  otrosPorConstruir: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  totalPorConstruir: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 100
                  },

                  observaciones: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 500
                  },

                  solicitud: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 1
                  },

                  escrituras: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 1
                  },

                  requisitosTotales: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 1
                  },

                  solicitudCorrecta: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 1
                  },

                  documentosCorrectos: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 1
                  },

                  pago: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 1
                  },

                  imprimirLicencia: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 1
                  },
                },
                
                messages: {
                nombre: {
                  required: 'Por favor especificar nombre',
                  minlength: 'El Valor de nombre debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de nombre excede el numero de caracteres permitidos',


                },

                direccion: {
                  required: 'Por favor especificar direccion',
                  minlength: 'El Valor de direccion debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de direccion excede el numero de caracteres permitidos',


                },

                telefono: {
                  required: 'Por favor especificar telefono',
                  minlength: 'El Valor de telefono debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de telefono excede el numero de caracteres permitidos',


                },

                calle: {
                  required: 'Por favor especificar calle',


                },

                colonia: {
                  required: 'Por favor especificar colonia',
                  minlength: 'El Valor de colonia debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de colonia excede el numero de caracteres permitidos',


                },

                loteNo: {
                  required: 'Por favor especificar loteNo',
                  minlength: 'El Valor de loteNo debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de loteNo excede el numero de caracteres permitidos',


                },

                manzanaNo: {
                  required: 'Por favor especificar manzanaNo',
                  digits: 'El Valor de manzanaNo debe ser entero',
                  min: 'El Valor de manzanaNo debe ser mayor que 0',
                  max: 'El Valor de manzanaNo es demasiado grande',


                },

                claveCatastral: {
                  required: 'Por favor especificar claveCatastral',
                  minlength: 'El Valor de claveCatastral debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de claveCatastral excede el numero de caracteres permitidos',


                },

                usoActual: {
                  required: 'Por favor especificar usoActual',


                },

                usoSolicitado: {
                  required: 'Por favor especificar usoSolicitado',
                  minlength: 'El Valor de usoSolicitado debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de usoSolicitado excede el numero de caracteres permitidos',


                },

                cajonesEstacionamiento: {
                  required: 'Por favor especificar cajonesEstacionamiento',
                  minlength: 'El Valor de cajonesEstacionamiento debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de cajonesEstacionamiento excede el numero de caracteres permitidos',


                },

                pBConstruida: {
                  minlength: 'El Valor de pBConstruida debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de pBConstruida excede el numero de caracteres permitidos',


                },

                pAConstruida: {
                  minlength: 'El Valor de pAConstruida debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de pAConstruida excede el numero de caracteres permitidos',


                },

                otrosConstruida: {
                  minlength: 'El Valor de otrosConstruida debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de otrosConstruida excede el numero de caracteres permitidos',


                },

                totalConstruida: {
                  minlength: 'El Valor de totalConstruida debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de totalConstruida excede el numero de caracteres permitidos',


                },

                pBPorConstruir: {
                  minlength: 'El Valor de pBPorConstruir debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de pBPorConstruir excede el numero de caracteres permitidos',


                },

                pAPorConstruir: {
                  minlength: 'El Valor de pAPorConstruir debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de pAPorConstruir excede el numero de caracteres permitidos',


                },

                otrosPorConstruir: {
                  minlength: 'El Valor de otrosPorConstruir debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de otrosPorConstruir excede el numero de caracteres permitidos',


                },

                totalPorConstruir: {
                  minlength: 'El Valor de totalPorConstruir debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de totalPorConstruir excede el numero de caracteres permitidos',


                },

                observaciones: {
                  minlength: 'El Valor de observaciones debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de observaciones excede el numero de caracteres permitidos',


                },

                solicitud: {
                  required: 'Por favor especificar solicitud',
                  minlength: 'El Valor de solicitud debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de solicitud excede el numero de caracteres permitidos',


                },

                escrituras: {
                  required: 'Por favor especificar escrituras',
                  minlength: 'El Valor de escrituras debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de escrituras excede el numero de caracteres permitidos',


                },

                requisitosTotales: {
                  required: 'Por favor especificar requisitosTotales',
                  minlength: 'El Valor de requisitosTotales debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de requisitosTotales excede el numero de caracteres permitidos',


                },

                solicitudCorrecta: {
                  required: 'Por favor especificar solicitudCorrecta',
                  minlength: 'El Valor de solicitudCorrecta debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de solicitudCorrecta excede el numero de caracteres permitidos',


                },

                documentosCorrectos: {
                  required: 'Por favor especificar documentosCorrectos',
                  minlength: 'El Valor de documentosCorrectos debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de documentosCorrectos excede el numero de caracteres permitidos',


                },

                pago: {
                  required: 'Por favor especificar pago',
                  minlength: 'El Valor de pago debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de pago excede el numero de caracteres permitidos',


                },

                imprimirLicencia: {
                  required: 'Por favor especificar imprimirLicencia',
                  minlength: 'El Valor de imprimirLicencia debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de imprimirLicencia excede el numero de caracteres permitidos',


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

                                                            obj['TramiteUsoDeSuelo['+item.name +']'] = item.value;
                                                            return obj;
                                                        }, {});
                    datos['paso']=index;
                    datos['_csrf']=csrfToken;
                    
                    \$.post( '".Yii::$app->homeUrl."/tramite-uso-de-suelo/salvar', datos)
                                        .done(function( data ) {
                                            
                                            \$('#idTramite').val(data.id);
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).addClass(
                                              'complete');
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).find('.step')
                                            .html('<i class=\'fa fa-check\'></i>');
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

        
        });" ,\yii\web\View ::POS_LOAD); ?> 
