

<style type="text/css">
    a[disabled="disabled"] {
        pointer-events: none;
        cursor: default;
    }

</style>

<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\USUARIOS;
use kartik\widgets\FileInput;
$permisos= $model->permisosPorPaso;
 

/* @var $this yii\web\View */
/* @var $model app\models\TramitesEspectaculares */
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
                    <h2> Regularizacion</h2>
                    <h2 id='observacionesAtras' class="bg-danger"> <? '' ?> </h2> 

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
                           <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id'=> 'wizard-1','novalidat'=>'novalidate']]) ?> 
                                <div id="bootstrap-wizard-1" class="col-sm-12">
                                    <div class="form-bootstrapWizard">
                                        <ul class="bootstrapWizard form-wizard">
                                            <li class="active"  data-target="#step1" style="width:16.666666666667%">
                                                <a id="btntab1" href="#tab1" data-toggle="tab" > <span class="step">1</span> <span class="title">Solicitud</span> </a>
                                            </li>
                                            <li   data-target="#step2" style="width:16.666666666667%">
                                                <a id="btntab2" href="#tab2" data-toggle="tab" disabled="disabled"> <span class="step">2</span> <span class="title">Documentos</span> </a>
                                            </li>
                                            <li   data-target="#step3" style="width:16.666666666667%">
                                                <a id="btntab3" href="#tab3" data-toggle="tab" disabled="disabled"> <span class="step">3</span> <span class="title">Revisión</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:16.666666666667%">
                                                <a id="btntab4" href="#tab4" data-toggle="tab" disabled="disabled"> <span class="step">4</span> <span class="title">Pago</span> </a>
                                            </li>
                                            <li   data-target="#step5" style="width:16.666666666667%">
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Supervisor</span> </a>
                                            </li>
                                            <li   data-target="#step6" style="width:16.666666666667%">
                                                <a id="btntab6" href="#tab6" data-toggle="tab" disabled="disabled"> <span class="step">6</span> <span class="title">Permiso</span> </a>
                                            </li>
                                           
                                            
                                        </ul>
                                        <?= $form->field($model,'id')->input('hidden',['name'=>'id','id'=>'idTramite'])->label(false);?>                                         
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <br>
                                            <?php /*<h3><strong>Paso 1 </strong> - Solicitud</h3>*/?>
                                        <?php if($permisos[24][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3 class="panel-title">Solicitante</h3>*/?>
																					</div>
																					<div class="panel-body">
																				    <div class="row">
                                            	<div class="col-sm-12">
																								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                  <?= $form->field($model,'p1NoOficio',[  'showLabels'=>true,
		                                                    'showErrors'=>false,
		                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->input('text',[
		                                                                        'class' => 'form-control input-lg',
		                                                                        'placeholder'=>$model->getAttributeLabel('p1NoOficio'),
		                                                                        'name'=>'p1NoOficio',
		                                                                        'id'=>'p1NoOficio'
		                                                                    ]
		                                                  );?> 
		                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                  <?= $form->field($model,'p1Dirigido',[  'showLabels'=>true,
		                                                    'showErrors'=>false,
		                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->input('text',[
		                                                                        'class' => 'form-control input-lg',
		                                                                        'placeholder'=>$model->getAttributeLabel('p1Dirigido'),
		                                                                        'name'=>'p1Dirigido',
		                                                                        'id'=>'p1Dirigido'
		                                                                    ]
		                                                  );?> 
		                                                </div>
			                                            </div>
																								</div>
																								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                  <?= $form->field($model,'p1Relacion',[  'showLabels'=>true,
		                                                    'showErrors'=>false,
		                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->input('text',[
		                                                                        'class' => 'form-control input-lg',
		                                                                        'placeholder'=>$model->getAttributeLabel('p1Relacion'),
		                                                                        'name'=>'p1Relacion',
		                                                                        'id'=>'p1Relacion'
		                                                                    ]
		                                                  );?> 
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                  <?= $form->field($model,'p1Firma',[  'showLabels'=>true,
		                                                    'showErrors'=>false,
		                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->input('text',[
		                                                                        'class' => 'form-control input-lg',
		                                                                        'placeholder'=>$model->getAttributeLabel('p1Firma'),
		                                                                        'name'=>'p1Firma',
		                                                                        'id'=>'p1Firma'
		                                                                    ]
		                                                  );?> 
		                                                </div>
			                                            </div>
																								</div>
                                            	</div>
																				    </div>
																					</div>
																				</div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab2">
                                            <br>
                                            <br>
                                        <?php if($permisos[25][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 2 </strong> - Documentos</h3>*/?>
																					</div>
																					<div class="panel-body">
																				    <div class="row">
	                                          	<div class="col-sm-12">
																								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Memoria',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2Memoria',
		                                                                        'id'=>'p2Memoria'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2Memoria' >ver</a>
		                                                        <?php endif; ?>                                                
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Poliza',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2Poliza',
		                                                                        'id'=>'p2Poliza'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2Poliza' >ver</a>
		                                                        <?php endif; ?>                                                
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Propiedad',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2Propiedad',
		                                                                        'id'=>'p2Propiedad'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2Propiedad' >ver</a>
		                                                        <?php endif; ?>                                                
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2PagoImpuesto',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2PagoImpuesto',
		                                                                        'id'=>'p2PagoImpuesto'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2PagoImpuesto' >ver</a>
		                                                        <?php endif; ?>                                                
		                                                </div>
			                                            </div>
																								</div>
																								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2CartaAutorizacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2CartaAutorizacion',
		                                                                        'id'=>'p2CartaAutorizacion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2CartaAutorizacion' >ver</a>
		                                                        <?php endif; ?>                                                
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2CartaCompromiso',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2CartaCompromiso',
		                                                                        'id'=>'p2CartaCompromiso'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2CartaCompromiso' >ver</a>
		                                                        <?php endif; ?>                                                
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2LicenciaConstruccion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2LicenciaConstruccion',
		                                                                        'id'=>'p2LicenciaConstruccion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2LicenciaConstruccion' >ver</a>
		                                                        <?php endif; ?>                                                
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2AutorizacionProteccionCivil',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2AutorizacionProteccionCivil',
		                                                                        'id'=>'p2AutorizacionProteccionCivil'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2AutorizacionProteccionCivil' >ver</a>
		                                                        <?php endif; ?>                                                
		                                                </div>
			                                            </div>
																								</div>
	                                          	</div>
																				    </div>
																					</div>
																				</div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab3">
                                            <br>
                                            <br>
                                        <?php if($permisos[26][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 3 </strong> - Revision</h3>*/?>
																					</div>
																					<div class="panel-body">
																				    <div class="row">
	                                          	<div class="col-sm-12">
																								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			                                            <div class="row">
		                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p3Memoria')->checkbox([
	                                                      'name'=>'p3Memoria',
	                                                      'id'=>'p3Memoria'
	                                                    ]); ?>                                                   
	                                                    <a href='javascript:void(0);' id='verp3Memoria' >ver</a> 
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p3Poliza')->checkbox([
	                                                      'name'=>'p3Poliza',
	                                                      'id'=>'p3Poliza'
	                                                    ]); ?>                                                   
	                                                    <a href='javascript:void(0);' id='verp3Poliza' >ver</a> 
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p3Propiedad')->checkbox([
	                                                      'name'=>'p3Propiedad',
	                                                      'id'=>'p3Propiedad'
	                                                    ]); ?>                                                   
	                                                    <a href='javascript:void(0);' id='verp3Propiedad' >ver</a> 
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p3PagoImpuesto')->checkbox([
                                                        'name'=>'p3PagoImpuesto',
                                                        'id'=>'p3PagoImpuesto'
	                                                    ]); ?>                                                   
	                                                    <a href='javascript:void(0);' id='verp3PagoImpuesto' >ver</a> 
		                                                </div>
			                                            </div>
																								</div>
																								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">																								
			                                            <div class="row">
		                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p3CartaAutorizacion')->checkbox([
                                                        'name'=>'p3CartaAutorizacion',
                                                        'id'=>'p3CartaAutorizacion'
	                                                    ]); ?>                                                   
	                                                    <a href='javascript:void(0);' id='verp3CartaAutorizacion' >ver</a> 
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p3CartaCompromiso')->checkbox([
	                                                      'name'=>'p3CartaCompromiso',
	                                                      'id'=>'p3CartaCompromiso'
	                                                    ]); ?>                                                   
	                                                    <a href='javascript:void(0);' id='verp3CartaCompromiso' >ver</a> 
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p3LicenciaConstruccion')->checkbox([
	                                                      'name'=>'p3LicenciaConstruccion',
	                                                      'id'=>'p3LicenciaConstruccion'
	                                                    ]); ?>                                                   
	                                                    <a href='javascript:void(0);' id='verp3LicenciaConstruccion' >ver</a> 
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p3AutorizacionProteccionCivil')->checkbox([
                                                        'name'=>'p3AutorizacionProteccionCivil',
                                                        'id'=>'p3AutorizacionProteccionCivil'
	                                                    ]); ?>                                                   
	                                                    <a href='javascript:void(0);' id='verp3AutorizacionProteccionCivil' >ver</a> 
		                                                </div>
			                                            </div>
																								</div>
	                                          	</div>
																				    </div>
																					</div>
																				</div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab4">
                                            <br>
																						<br>
                                        <?php if($permisos[27][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 4 </strong> - Pago</h3>*/?>
																					</div>
																					<div class="panel-body">
																				    <div class="row">
	                                          	<div class="col-sm-12">
																								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                                            <div class="row">
		                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p4ReciboPago',[
	                                                    'options'=>['class' => 'form-group']]
	                                                    )->fileInput( [ 'accept' => 'application/pdf',
	                                                                        'name'=>'p4ReciboPago',
	                                                                        'id'=>'p4ReciboPago'        
	                                                    ]);?>                                                    
	                                                    <?php if(!$model->isNewRecord): ?>
	                                                    <a href='javascript:void(0);' id='verp4ReciboPago' >ver</a>
	                                                    <?php endif; ?>                                                
		                                                </div>
			                                            </div>
																								</div>
	                                          	</div>
																				    </div>
																					</div>
																				</div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab5">
                                            <br>
                                            <br>
                                        <?php if($permisos[28][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 5 </strong> - Supervisor</h3>*/?>
																					</div>
																					<div class="panel-body">
																				    <div class="row">
	                                          	<div class="col-sm-12">
																								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                                            <div class="row">
		                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p5Supervisor')->checkbox([
	                                                      'name'=>'p5Supervisor',
	                                                      'id'=>'p5Supervisor'
	                                                    ]); ?>                                                   
	                                                    <a href='javascript:void(0);' id='verp5Supervisor' >ver</a> 
		                                                </div>
			                                            </div>
			                                            <div class="row">
		                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p5Observaciones',[  'showLabels'=>true,
	                                                      'showErrors'=>false,
	                                                      //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
	                                                      'options'=>['class' => 'form-group']]
	                                                      )->textarea([
	                                                                          'class' => 'form-control input-lg',
	                                                                          'placeholder'=>$model->getAttributeLabel('p5Observaciones'),
	                                                                          'name'=>'p5Observaciones',
	                                                                          'id'=>'p5Observaciones'
	                                                                      ]
	                                                    );?> 
		                                                </div>
			                                            </div>
																								</div>
	                                          	</div>
																				    </div>
																					</div>
																				</div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab6">
                                            <br>
                                            <br>
                                        <?php if($permisos[29][USUARIOS::$LEER]){ ?>
										 										<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 6 </strong> - Permiso</h3>*/?>
																					</div>
																					<div class="panel-body">
	                                          <div class="row">
	                                            <div class="col-sm-6">
                                                    <?= $form->field($model,'p6Permiso',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'application/pdf',
	                                                    'name'=>'p6Permiso',
	                                                    'id'=>'p6Permiso'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                    <a href='javascript:void(0);' id='verp6Permiso' >ver</a>
                                                    <?php endif; ?>                                                
                                              </div>
																							<div class="col-sm-6">
		                                            <button  id="btnConstancia" type="button" class="btn btn-primary  active">Guardar Permiso</button>
	                                            </div>
	                                          </div>
																					</div>
										 										</div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
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
                            <?php ActiveForm::end(); ?> 
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
<div id="dialog_simple" title="Dialog Simple Title">
    
</div>


<div id="dialog_revisar" title="Revision">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group ">
                <label for="observacion" class="control-label">Observaciones</label>
                <textarea placeholder="Observaciones" name="observacion" class="form-control input-lg" id="observacion"></textarea>
            </div> 
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group ">

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Documentos',3=>'Paso 3: Revision',4=>'Paso 4: Pago',5=>'Paso 5: Supervisor',6=>'Paso 6: Permiso',], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
        </div>
     </div>
     <button  id="btnGuardarRevision" type="button" class="btn btn-primary active">Notificar</button>
</div>
<?php 
    $secuencia=0;
    $pasoschafas='';
    if(!$model->isNewRecord)
    {
        $secuencia=$model->pasoActual->secuencia;
        $secuencia=$secuencia;
        for ($i=0; $i < $secuencia-1 ; ) { 
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq($i).addClass('complete');";
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq($i).find('.step').html('<i class=\'fa fa-check\'></i>');";
            ++$i;
            $pasoschafas=$pasoschafas."\$('#btntab$i').removeAttr('disabled');";
        }
        if($model->estatusId==2){
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq($secuencia).addClass('complete');";
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq($secuencia).find('.step').html('<i class=\'fa fa-check\'></i>');";
            $pasoschafas=$pasoschafas."\$('#btntab$secuencia').removeAttr('disabled')";
        }
        $pasoschafas=$pasoschafas."$('#btntab$secuencia').removeAttr('disabled');";
        $pasoschafas=$pasoschafas."$('#btntab$secuencia').click();";    
    }
    
    
    
?>
 <?php 
$basepath = Yii::getAlias("@web")."/archivo";

 $this->registerJs( "
\$(document).ready(function() {
            
            pageSetUp();
            
            \$.widget('ui.dialog', \$.extend({}, \$.ui.dialog.prototype, {
                _title : function(title) {
                    if (!this.options.title) {
                        title.html('&#160;');
                    } else {
                        title.html(this.options.title);
                    }
                }
            }));
            \$('#btnRevisar').click(function() {
                \$('#dialog_revisar').dialog('open');
               

                return false;
            });

            \$('#btnGuardarRevision').click(function() {
                    var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
                    var form_data = new FormData();
                    form_data.append('_csrf',csrfToken);
                    form_data.append('id',\$('#idTramite').val());
                    form_data.append('observacion',\$('#observacion').val());
                    form_data.append('pasoatras',\$('#pasoatras').val());
                   
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."//tramites-espectaculares/atras', // point to server-side PHP script 
                                dataType: 'json',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                               
                                success: function(data){
                                                console.log('gik');
                                                for (var i = \$('#pasoatras').val(); i <= 6; i++) {
                                                    \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(i-1).removeClass(
                                                      'complete');
                                                    \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(i-1).find('.step')
                                                    .html(i);
                                                    
                                                }
                                                \$('#btntab'+\$('#pasoatras').val()).click();
                                                \$('#dialog_revisar').dialog('close');
                                                \$('#observacionesAtras').html(\$('#observacion').val());
                                    }
                     });
                    

                return false;
            });

  

  

  

  

  
            \$('#verp2Memoria').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Memoria')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Memoria').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2Poliza').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Poliza')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Poliza').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2Propiedad').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Propiedad')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Propiedad').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2PagoImpuesto').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2PagoImpuesto')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2PagoImpuesto').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2CartaAutorizacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2CartaAutorizacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2CartaAutorizacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2CartaCompromiso').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2CartaCompromiso')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2CartaCompromiso').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2LicenciaConstruccion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2LicenciaConstruccion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2LicenciaConstruccion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2AutorizacionProteccionCivil').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2AutorizacionProteccionCivil')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2AutorizacionProteccionCivil').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Memoria').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Memoria')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Memoria').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Poliza').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Poliza')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Poliza').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Propiedad').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Propiedad')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Propiedad').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3PagoImpuesto').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3PagoImpuesto')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3PagoImpuesto').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3CartaAutorizacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3CartaAutorizacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3CartaAutorizacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3CartaCompromiso').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3CartaCompromiso')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3CartaCompromiso').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3LicenciaConstruccion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3LicenciaConstruccion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3LicenciaConstruccion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3AutorizacionProteccionCivil').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3AutorizacionProteccionCivil')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3AutorizacionProteccionCivil').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ReciboPago').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ReciboPago')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ReciboPago').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5Supervisor').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5Supervisor')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5Supervisor').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  

  
            \$('#verp6Permiso').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6Permiso')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6Permiso').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  

            \$('#dialog_simple').dialog({
                autoOpen : false,
                width : 800,
                resizable : false,
                modal : true,
                
            });
            \$('#dialog_revisar').dialog({
                autoOpen : false,
                width : 800,
                resizable : false,
                modal : true,
                
            });


    
            //Bootstrap Wizard Validations

              var \$validator = \$('#wizard-1').validate({
                
                rules: {

                  p1NoOficio: {
                    required: true
                    ,digits: true
                    ,min: 1
                    ,max: 2147483647



                  },

                  p1Fecha: {
                    required: true



                  },

                  p1Dirigido: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1Relacion: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1Firma: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p2Memoria: {
                    required: true



                  },

                  p2Poliza: {
                    required: true



                  },

                  p2Propiedad: {
                    required: true



                  },

                  p2PagoImpuesto: {
                    required: true



                  },

                  p2CartaAutorizacion: {
                    required: true



                  },

                  p2CartaCompromiso: {
                    required: true



                  },

                  p2LicenciaConstruccion: {
                    required: true



                  },

                  p2AutorizacionProteccionCivil: {
                    required: true



                  },

                  p3Memoria: {
                    required: true



                  },

                  p3Poliza: {
                    required: true



                  },

                  p3Propiedad: {
                    required: true



                  },

                  p3PagoImpuesto: {
                    required: true



                  },

                  p3CartaAutorizacion: {
                    required: true



                  },

                  p3CartaCompromiso: {
                    required: true



                  },

                  p3LicenciaConstruccion: {
                    required: true



                  },

                  p3AutorizacionProteccionCivil: {
                    required: true



                  },

                  p4ReciboPago: {
                    required: true



                  },

                  p5Supervisor: {
                    required: true



                  },

                  p5Observaciones: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p6Permiso: {
                    required: true



                  },
                },
                
                messages: {
                p1NoOficio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NoOficio')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1NoOficio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1NoOficio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1NoOficio')} es demasiado grande',


                },

                p1Fecha: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Fecha')}',


                },

                p1Dirigido: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Dirigido')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1Dirigido')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1Dirigido')} excede el numero de caracteres permitidos',


                },

                p1Relacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Relacion')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1Relacion')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1Relacion')} excede el numero de caracteres permitidos',


                },

                p1Firma: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Firma')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1Firma')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1Firma')} excede el numero de caracteres permitidos',


                },

                p2Memoria: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Memoria')}',


                },

                p2Poliza: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Poliza')}',


                },

                p2Propiedad: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Propiedad')}',


                },

                p2PagoImpuesto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2PagoImpuesto')}',


                },

                p2CartaAutorizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2CartaAutorizacion')}',


                },

                p2CartaCompromiso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2CartaCompromiso')}',


                },

                p2LicenciaConstruccion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2LicenciaConstruccion')}',


                },

                p2AutorizacionProteccionCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2AutorizacionProteccionCivil')}',


                },

                p3Memoria: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Memoria')}',


                },

                p3Poliza: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Poliza')}',


                },

                p3Propiedad: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Propiedad')}',


                },

                p3PagoImpuesto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3PagoImpuesto')}',


                },

                p3CartaAutorizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3CartaAutorizacion')}',


                },

                p3CartaCompromiso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3CartaCompromiso')}',


                },

                p3LicenciaConstruccion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3LicenciaConstruccion')}',


                },

                p3AutorizacionProteccionCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3AutorizacionProteccionCivil')}',


                },

                p4ReciboPago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ReciboPago')}',


                },

                p5Supervisor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5Supervisor')}',


                },

                p5Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5Observaciones')}',


                },

                p6Permiso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6Permiso')}',


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
                  \$('#btntab'+index).removeAttr('disabled');
                  if((index+1) < 6)
                    \$('#btntab'+(index+1)).removeAttr('disabled');
                  if (!\$valid) {
                    \$validator.focusInvalid();
                    return false;
                  } else {
                    var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
                    var form_data = new FormData();
                    var datos = \$('#wizard-1').serializeArray().reduce(function(obj, item) {
                                                            if(item.name =='id' || item.value != '')
                                                                form_data.append('TramitesEspectaculares['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');
                        var p2Memoria = $('#p2Memoria').prop('files')[0];
                        form_data.append('TramitesEspectaculares[p2Memoria]', p2Memoria);


                        var p2Poliza = $('#p2Poliza').prop('files')[0];
                        form_data.append('TramitesEspectaculares[p2Poliza]', p2Poliza);


                        var p2Propiedad = $('#p2Propiedad').prop('files')[0];
                        form_data.append('TramitesEspectaculares[p2Propiedad]', p2Propiedad);


                        var p2PagoImpuesto = $('#p2PagoImpuesto').prop('files')[0];
                        form_data.append('TramitesEspectaculares[p2PagoImpuesto]', p2PagoImpuesto);


                        var p2CartaAutorizacion = $('#p2CartaAutorizacion').prop('files')[0];
                        form_data.append('TramitesEspectaculares[p2CartaAutorizacion]', p2CartaAutorizacion);


                        var p2CartaCompromiso = $('#p2CartaCompromiso').prop('files')[0];
                        form_data.append('TramitesEspectaculares[p2CartaCompromiso]', p2CartaCompromiso);


                        var p2LicenciaConstruccion = $('#p2LicenciaConstruccion').prop('files')[0];
                        form_data.append('TramitesEspectaculares[p2LicenciaConstruccion]', p2LicenciaConstruccion);


                        var p2AutorizacionProteccionCivil = $('#p2AutorizacionProteccionCivil').prop('files')[0];
                        form_data.append('TramitesEspectaculares[p2AutorizacionProteccionCivil]', p2AutorizacionProteccionCivil);


                        var p4ReciboPago = $('#p4ReciboPago').prop('files')[0];
                        form_data.append('TramitesEspectaculares[p4ReciboPago]', p4ReciboPago);


                        var p6Permiso = $('#p6Permiso').prop('files')[0];
                        form_data.append('TramitesEspectaculares[p6Permiso]', p6Permiso);



                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramites-espectaculares/salvar', // point to server-side PHP script 
                                dataType: 'json',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                                beforeSend: function( xhr ) {
                                    \$('#dialog_simple').dialog('open');
                                    \$('#dialog_simple').dialog('option', 'title', 'Procesando');
                                    \$('#dialog_simple').html('<div class=\"progress progress-striped active\" style=\"margin-top:0;\"><div class=\"progress-bar\" style=\"width: 100%\"></div></div>');
                                },
                                success: function(data){
                                            \$('#idTramite').val(data.id);
                                            if(data.p2Memoria!==undefined)
                                                \$('#p2Memoria').attr('value',data.p2Memoria);
                                            if(data.p2Poliza!==undefined)
                                                \$('#p2Poliza').attr('value',data.p2Poliza);
                                            if(data.p2Propiedad!==undefined)
                                                \$('#p2Propiedad').attr('value',data.p2Propiedad);
                                            if(data.p2PagoImpuesto!==undefined)
                                                \$('#p2PagoImpuesto').attr('value',data.p2PagoImpuesto);
                                            if(data.p2CartaAutorizacion!==undefined)
                                                \$('#p2CartaAutorizacion').attr('value',data.p2CartaAutorizacion);
                                            if(data.p2CartaCompromiso!==undefined)
                                                \$('#p2CartaCompromiso').attr('value',data.p2CartaCompromiso);
                                            if(data.p2LicenciaConstruccion!==undefined)
                                                \$('#p2LicenciaConstruccion').attr('value',data.p2LicenciaConstruccion);
                                            if(data.p2AutorizacionProteccionCivil!==undefined)
                                                \$('#p2AutorizacionProteccionCivil').attr('value',data.p2AutorizacionProteccionCivil);
                                            if(data.p4ReciboPago!==undefined)
                                                \$('#p4ReciboPago').attr('value',data.p4ReciboPago);
                                            if(data.p6Permiso!==undefined)
                                                \$('#p6Permiso').attr('value',data.p6Permiso);

                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).addClass(
                                              'complete');
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).find('.step')
                                            .html('<i class=\'fa fa-check\'></i>');
                                            \$('#dialog_simple').dialog('close');
                                            \$('#observacionesAtras').html('');
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
             ".$pasoschafas."   
        
        });" ,\yii\web\View ::POS_LOAD); ?> 
