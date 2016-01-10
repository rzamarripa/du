

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
/* @var $model app\models\TramitesAperturaCepas */
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
							  <?php
									if(isset($_GET["n"]) && $_GET["n"] == "v"){
										echo Html::a('Volver', ['view', 'id' => $_GET["id"]], ['class' => 'btn btn-primary']);
									}else{
										echo Html::a('Volver', ['index'], ['class' => 'btn btn-primary']);		                
									}
								?>
<br>
<br>

                <header>
                    <span class="widget-icon"> <i class="fa fa-check"></i> </span>
                    <h2> Apertura de Cepas</h2>
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
                                                <a id="btntab1" href="#tab1" data-toggle="tab" > <span class="step">1</span> <span class="title">Solicitud y Documentos</span> </a>
                                            </li>
                                            <li   data-target="#step2" style="width:16.666666666667%">
                                                <a id="btntab2" href="#tab2" data-toggle="tab" disabled="disabled"> <span class="step">2</span> <span class="title">Supervision</span> </a>
                                            </li>
                                            <li   data-target="#step3" style="width:16.666666666667%">
                                                <a id="btntab3" href="#tab3" data-toggle="tab" disabled="disabled"> <span class="step">3</span> <span class="title">Resolutivo</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:16.666666666667%">
                                                <a id="btntab4" href="#tab4" data-toggle="tab" disabled="disabled"> <span class="step">4</span> <span class="title">Revision</span> </a>
                                            </li>
                                            <li   data-target="#step5" style="width:16.666666666667%">
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Apertura de Cepas</span> </a>
                                            </li>
                                            <li   data-target="#step6" style="width:16.666666666667%">
                                                <a id="btntab6" href="#tab6" data-toggle="tab" disabled="disabled"> <span class="step">6</span> <span class="title">Archivo</span> </a>
                                            </li>
                                           
                                            
                                        </ul>
                                        <?= $form->field($model,'id')->input('hidden',['name'=>'id','id'=>'idTramite'])->label(false);?>                                         <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <br>
                                        <?php if($permisos[1078][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1Solicitud',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p1Solicitud',
		                                                                        'id'=>'p1Solicitud'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp1Solicitud' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1ProgramaObra',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p1ProgramaObra',
		                                                                        'id'=>'p1ProgramaObra'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp1ProgramaObra' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1Fianza',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p1Fianza',
		                                                                        'id'=>'p1Fianza'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp1Fianza' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1DirectorResponsable',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p1DirectorResponsable',
		                                                                        'id'=>'p1DirectorResponsable'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp1DirectorResponsable' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1PresupuestoObra',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p1PresupuestoObra',
		                                                                        'id'=>'p1PresupuestoObra'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp1PresupuestoObra' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1Pago',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p1Pago',
		                                                                        'id'=>'p1Pago'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp1Pago' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1PlanoTrayectoria',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p1PlanoTrayectoria',
		                                                                        'id'=>'p1PlanoTrayectoria'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp1PlanoTrayectoria' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1AnuenciaVecinos',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p1AnuenciaVecinos',
		                                                                        'id'=>'p1AnuenciaVecinos'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp1AnuenciaVecinos' >ver</a>
		                                                        <?php endif; ?>                                                </div>
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
                                        <?php if($permisos[1079][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Supervision')->checkbox([
		                                                                                                            'name'=>'p2Supervision',
		                                                                                                            'id'=>'p2Supervision'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp2Supervision' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2NombreSupervisor',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p2NombreSupervisor'),
		                                                                                                            'name'=>'p2NombreSupervisor',
		                                                                                                            'id'=>'p2NombreSupervisor'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Expediente',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p2Expediente',
		                                                                        'id'=>'p2Expediente'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2Expediente' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Observaciones',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->textarea([
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p2Observaciones'),
		                                                                                                            'name'=>'p2Observaciones',
		                                                                                                            'id'=>'p2Observaciones'
		                                                                                                        ]
		                                                                                        );?> 
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
                                        <?php if($permisos[1080][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Resolutivo',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p3Resolutivo',
		                                                                        'id'=>'p3Resolutivo'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp3Resolutivo' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Pago',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p3Pago',
		                                                                        'id'=>'p3Pago'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp3Pago' >ver</a>
		                                                        <?php endif; ?>                                                </div>
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
                                        <?php if($permisos[1081][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Solicitud')->checkbox([
		                                                                                                            'name'=>'p4Solicitud',
		                                                                                                            'id'=>'p4Solicitud'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4Solicitud' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4PlanoTrayectoria')->checkbox([
		                                                                                                            'name'=>'p4PlanoTrayectoria',
		                                                                                                            'id'=>'p4PlanoTrayectoria'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4PlanoTrayectoria' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4PresupuestoObra')->checkbox([
		                                                                                                            'name'=>'p4PresupuestoObra',
		                                                                                                            'id'=>'p4PresupuestoObra'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4PresupuestoObra' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Fianza')->checkbox([
		                                                                                                            'name'=>'p4Fianza',
		                                                                                                            'id'=>'p4Fianza'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4Fianza' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Pago')->checkbox([
		                                                                                                            'name'=>'p4Pago',
		                                                                                                            'id'=>'p4Pago'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4Pago' >ver</a> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4DirectorResponsable')->checkbox([
		                                                                                                            'name'=>'p4DirectorResponsable',
		                                                                                                            'id'=>'p4DirectorResponsable'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4DirectorResponsable' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ProgramaObra')->checkbox([
		                                                                                                            'name'=>'p4ProgramaObra',
		                                                                                                            'id'=>'p4ProgramaObra'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ProgramaObra' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4AnuenciaVecinos')->checkbox([
		                                                                                                            'name'=>'p4AnuenciaVecinos',
		                                                                                                            'id'=>'p4AnuenciaVecinos'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4AnuenciaVecinos' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4PagoDerechos')->checkbox([
		                                                                                                            'name'=>'p4PagoDerechos',
		                                                                                                            'id'=>'p4PagoDerechos'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4PagoDerechos' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Expediente')->checkbox([
		                                                                                                            'name'=>'p4Expediente',
		                                                                                                            'id'=>'p4Expediente'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4Expediente' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Resolutivo')->checkbox([
		                                                                                                            'name'=>'p4Resolutivo',
		                                                                                                            'id'=>'p4Resolutivo'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4Resolutivo' >ver</a> 
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
                                        <?php if($permisos[1082][USUARIOS::$LEER]){ ?>
 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p5AperturasCepas',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'image/jpeg',
                                                                        'name'=>'p5AperturasCepas',
                                                                        'id'=>'p5AperturasCepas'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp5AperturasCepas' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab6">
                                            <br>
                                            <br>
                                        <?php if($permisos[1083][USUARIOS::$LEER]){ ?>
 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p6EnvioExpediente')->checkbox([
                                                                                                            'name'=>'p6EnvioExpediente',
                                                                                                            'id'=>'p6EnvioExpediente'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6EnvioExpediente' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p6Observaciones',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p6Observaciones'),
                                                                                                            'name'=>'p6Observaciones',
                                                                                                            'id'=>'p6Observaciones'
                                                                                                        ]
                                                                                        );?> 
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud y Documentos',2=>'Paso 2: Supervision',3=>'Paso 3: Resolutivo',4=>'Paso 4: Revision',5=>'Paso 5: Apertura de Cepas',6=>'Paso 6: Archivo',], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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
                                url: '".Yii::$app->homeUrl."//tramites-apertura-cepas/atras', // point to server-side PHP script 
                                dataType: 'json',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                                error: function(){
                                    \$('#dialog_simple').html('<h2>Ocurrio un error, por favor revise que los datos sean correctos y vuelva intentar</h2>');
                                },
                               
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
            
            
  
            var normalize = (function() {
              var from = \"ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç\", 
                  to   = \"AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc\",
                  mapping = {};
             
              for(var i = 0, j = from.length; i < j; i++ )
                  mapping[ from.charAt( i ) ] = to.charAt( i );
             
              return function( str ) {
                  var ret = [];
                  for( var i = 0, j = str.length; i < j; i++ ) {
                      var c = str.charAt( i );
                      if( mapping.hasOwnProperty( str.charAt( i ) ) )
                          ret.push( mapping[ c ] );
                      else
                          ret.push( c );
                  }      
                  return ret.join( '' );
              }
             
            })();

            function verimagen(imglbl){
                tipoimagen=normalize(imglbl);
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title',imglbl );
                rrurl=\"". Yii::$app->urlManager->createAbsoluteUrl(['tramites-apertura-cepas/view-imagen'])."\"
                rrurl= rrurl+'?id='+\$('#idTramite').val();
                rrurl= rrurl+'&tipoDocumento='+encodeURIComponent(tipoimagen);
                
                console.log(rrurl);
                \$('#dialog_simple').html('<img src=\"'+rrurl+'\" width=\"100%\" height=\"500\">');
                return false;
            };
            
            
            \$('#verp1Solicitud').click(function() {
                return verimagen('Solicitud');
            });

  
            \$('#verp1DirectorResponsable').click(function() {
                return verimagen('Director Responsable');
            });

  
            \$('#verp1PlanoTrayectoria').click(function() {
                return verimagen('Plano de Trayectoria');
            });

  
            \$('#verp1ProgramaObra').click(function() {
                return verimagen('Programa de Obra');
            });

  
            \$('#verp1PresupuestoObra').click(function() {
                return verimagen('Presupuesto de Obra');
            });

  
            \$('#verp1AnuenciaVecinos').click(function() {
                return verimagen('Anuencia de Vecinos');
            });

  
            \$('#verp1Fianza').click(function() {
                return verimagen('Fianza');
            });

  
            \$('#verp1Pago').click(function() {
                return verimagen('Pago');
            });

  //Pendiente
            \$('#verp2Supervision').click(function() {
                return verimagen('');
            });

  

  

  
            \$('#verp2Expediente').click(function() {
                return verimagen('Expediente');
            });

  
            \$('#verp3Resolutivo').click(function() {
                return verimagen('Resolutivo');
            });

  
            \$('#verp3Pago').click(function() {
                return verimagen('Pago');
            });

  //Pendiente
            \$('#verp4Solicitud').click(function() {
                return verimagen('');
            });

  //Pendiente
            \$('#verp4DirectorResponsable').click(function() {
                return verimagen('');
            });

  //Pendiente
            \$('#verp4PlanoTrayectoria').click(function() {
                return verimagen('');
            });

  //Pendiente
            \$('#verp4ProgramaObra').click(function() {
                return verimagen('');
            });

  //Pendiente
            \$('#verp4PresupuestoObra').click(function() {
                return verimagen('');
            });

  //Pendiente
            \$('#verp4AnuenciaVecinos').click(function() {
                return verimagen('');
            });

  //Pendiente
            \$('#verp4Fianza').click(function() {
                return verimagen('');
            });

  //Pendiente
            \$('#verp4PagoDerechos').click(function() {
                return verimagen('');
            });

  //Pendiente
            \$('#verp4Expediente').click(function() {
                return verimagen('');
            });

  //Pendiente
            \$('#verp4Pago').click(function() {
                return verimagen('');
            });

  //Pendiente
            \$('#verp4Resolutivo').click(function() {
                return verimagen('');
            });

  
            \$('#verp5AperturasCepas').click(function() {
                return verimagen('Apertura de Cepas');
            });

  //Pendiente
            \$('#verp6EnvioExpediente').click(function() {
                return verimagen('');
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

                  p1Solicitud: {
                    required: true



                  },

                  p1DirectorResponsable: {
                    required: true



                  },

                  p1PlanoTrayectoria: {
                    required: true



                  },

                  p1ProgramaObra: {
                    required: true



                  },

                  p1PresupuestoObra: {
                    required: true



                  },

                  p1AnuenciaVecinos: {
                    required: true



                  },

                  p1Fianza: {
                    required: true



                  },

                  p1Pago: {
                    required: true



                  },

                  p2Supervision: {
                    required: true



                  },

                  p2NombreSupervisor: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p2Observaciones: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p2Expediente: {
                    required: true



                  },

                  p3Resolutivo: {
                    required: true



                  },

                  p3Pago: {
                    required: true



                  },

                  p4Solicitud: {
                    required: true



                  },

                  p4DirectorResponsable: {
                    required: true



                  },

                  p4PlanoTrayectoria: {
                    required: true



                  },

                  p4ProgramaObra: {
                    required: true



                  },

                  p4PresupuestoObra: {
                    required: true



                  },

                  p4AnuenciaVecinos: {
                    required: true



                  },

                  p4Fianza: {
                    required: true



                  },

                  p4PagoDerechos: {
                    required: true



                  },

                  p4Expediente: {
                    required: true



                  },

                  p4Pago: {
                    required: true



                  },

                  p4Resolutivo: {
                    required: true



                  },

                  p5AperturasCepas: {
                    required: true



                  },

                  p6EnvioExpediente: {
                    required: true



                  },

                  p6Observaciones: {
                    required: true
                    
                    ,minlength: 1



                  },
                },
                
                messages: {
                p1Solicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Solicitud')}',


                },

                p1DirectorResponsable: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DirectorResponsable')}',


                },

                p1PlanoTrayectoria: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PlanoTrayectoria')}',


                },

                p1ProgramaObra: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ProgramaObra')}',


                },

                p1PresupuestoObra: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PresupuestoObra')}',


                },

                p1AnuenciaVecinos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1AnuenciaVecinos')}',


                },

                p1Fianza: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Fianza')}',


                },

                p1Pago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Pago')}',


                },

                p2Supervision: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Supervision')}',


                },

                p2NombreSupervisor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2NombreSupervisor')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p2NombreSupervisor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p2NombreSupervisor')} excede el numero de caracteres permitidos',


                },

                p2Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Observaciones')}',


                },

                p2Expediente: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Expediente')}',


                },

                p3Resolutivo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Resolutivo')}',


                },

                p3Pago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Pago')}',


                },

                p4Solicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Solicitud')}',


                },

                p4DirectorResponsable: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4DirectorResponsable')}',


                },

                p4PlanoTrayectoria: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4PlanoTrayectoria')}',


                },

                p4ProgramaObra: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ProgramaObra')}',


                },

                p4PresupuestoObra: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4PresupuestoObra')}',


                },

                p4AnuenciaVecinos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4AnuenciaVecinos')}',


                },

                p4Fianza: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Fianza')}',


                },

                p4PagoDerechos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4PagoDerechos')}',


                },

                p4Expediente: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Expediente')}',


                },

                p4Pago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Pago')}',


                },

                p4Resolutivo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Resolutivo')}',


                },

                p5AperturasCepas: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5AperturasCepas')}',


                },

                p6EnvioExpediente: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6EnvioExpediente')}',


                },

                p6Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6Observaciones')}',


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
                                                                form_data.append('TramitesAperturaCepas['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');
                        var p1Solicitud = $('#p1Solicitud').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p1Solicitud]', p1Solicitud);


                        var p1DirectorResponsable = $('#p1DirectorResponsable').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p1DirectorResponsable]', p1DirectorResponsable);


                        var p1PlanoTrayectoria = $('#p1PlanoTrayectoria').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p1PlanoTrayectoria]', p1PlanoTrayectoria);


                        var p1ProgramaObra = $('#p1ProgramaObra').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p1ProgramaObra]', p1ProgramaObra);


                        var p1PresupuestoObra = $('#p1PresupuestoObra').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p1PresupuestoObra]', p1PresupuestoObra);


                        var p1AnuenciaVecinos = $('#p1AnuenciaVecinos').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p1AnuenciaVecinos]', p1AnuenciaVecinos);


                        var p1Fianza = $('#p1Fianza').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p1Fianza]', p1Fianza);


                        var p1Pago = $('#p1Pago').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p1Pago]', p1Pago);


                        var p2Expediente = $('#p2Expediente').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p2Expediente]', p2Expediente);


                        var p3Resolutivo = $('#p3Resolutivo').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p3Resolutivo]', p3Resolutivo);


                        var p3Pago = $('#p3Pago').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p3Pago]', p3Pago);


                        var p5AperturasCepas = $('#p5AperturasCepas').prop('files')[0];
                        form_data.append('TramitesAperturaCepas[p5AperturasCepas]', p5AperturasCepas);



                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramites-apertura-cepas/salvar', // point to server-side PHP script 
                                dataType: 'json',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                                error: function(){
                                    \$('#dialog_simple').html('<h2>Ocurrio un error, por favor revise que los datos sean correctos y vuelva intentar</h2>');
                                },
                                
                                beforeSend: function( xhr ) {
                                    \$('#dialog_simple').dialog('open');
                                    \$('#dialog_simple').dialog('option', 'title', 'Procesando');
                                    \$('#dialog_simple').html('<div class=\"progress progress-striped active\" style=\"margin-top:0;\"><div class=\"progress-bar\" style=\"width: 100%\"></div></div>');
                                },
                                success: function(data){
                                            \$('#idTramite').val(data.id);
                                            if(data.p1Solicitudd)
                                                \$('#p1Solicitud').attr('value',data.p1Solicitud);
                                            if(data.p1DirectorResponsabled)
                                                \$('#p1DirectorResponsable').attr('value',data.p1DirectorResponsable);
                                            if(data.p1PlanoTrayectoriad)
                                                \$('#p1PlanoTrayectoria').attr('value',data.p1PlanoTrayectoria);
                                            if(data.p1ProgramaObrad)
                                                \$('#p1ProgramaObra').attr('value',data.p1ProgramaObra);
                                            if(data.p1PresupuestoObrad)
                                                \$('#p1PresupuestoObra').attr('value',data.p1PresupuestoObra);
                                            if(data.p1AnuenciaVecinosd)
                                                \$('#p1AnuenciaVecinos').attr('value',data.p1AnuenciaVecinos);
                                            if(data.p1Fianzad)
                                                \$('#p1Fianza').attr('value',data.p1Fianza);
                                            if(data.p1Pagod)
                                                \$('#p1Pago').attr('value',data.p1Pago);
                                            if(data.p2Expediented)
                                                \$('#p2Expediente').attr('value',data.p2Expediente);
                                            if(data.p3Resolutivod)
                                                \$('#p3Resolutivo').attr('value',data.p3Resolutivo);
                                            if(data.p3Pagod)
                                                \$('#p3Pago').attr('value',data.p3Pago);
                                            if(data.p5AperturasCepasd)
                                                \$('#p5AperturasCepas').attr('value',data.p5AperturasCepas);

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
