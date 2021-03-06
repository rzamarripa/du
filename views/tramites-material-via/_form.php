

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
/* @var $model app\models\TramitesMaterialVia */
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
                    <h2> Material en la vía publica</h2>


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
		                    	<DIV id='observacionesAtras' class="alert alert-danger" role="alert" <?php if(empty($model->observaciones) || trim($model->observaciones)=='') echo 'style="display:none;"'; ?> > 
		                    		 <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                    		 <strong>Observaciones: </strong>
		                    		 <?= $model->observaciones ?> 
		                    	</DIV> 
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
                                                <a id="btntab3" href="#tab3" data-toggle="tab" disabled="disabled"> <span class="step">3</span> <span class="title">Resolutivo</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:16.666666666667%">
                                                <a id="btntab4" href="#tab4" data-toggle="tab" disabled="disabled"> <span class="step">4</span> <span class="title">Revisión</span> </a>
                                            </li>
                                            <li   data-target="#step5" style="width:16.666666666667%">
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Mat. en vía Pública</span> </a>
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
                                        <?php if($permisos[1059][USUARIOS::$LEER]){ ?>
																					<div class="row">
																						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																								<div class="panel panel-default">
																									<div class="panel-heading">
																										<h3 class="panel-title">Solicitante</h3>
																									</div>
																									<div class="panel-body">
				                                            <div class="row">
				                                                <div class="col-sm-12">
				                                                    <?= $form->field($model,'p1NombrePropietario',[  'showLabels'=>true,
				                                                                                        'showErrors'=>false,
				                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
				                                                                                        'options'=>['class' => 'form-group']]
				                                                                                        )->input('text',[
				                                                                                                            'class' => 'form-control input-lg',
				                                                                                                            'placeholder'=>$model->getAttributeLabel('p1NombrePropietario'),
				                                                                                                            'name'=>'p1NombrePropietario',
				                                                                                                            'id'=>'p1NombrePropietario'
				                                                                                                        ]
				                                                                                        );?> 
				                                                </div>
				                                            </div>
				                                            <div class="row">
				                                                <div class="col-sm-12">
				                                                    <?= $form->field($model,'p1DireccionPropietario',[  'showLabels'=>true,
				                                                                                        'showErrors'=>false,
				                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
				                                                                                        'options'=>['class' => 'form-group']]
				                                                                                        )->textarea([
				                                                                                                            'class' => 'form-control input-lg',
				                                                                                                            'placeholder'=>$model->getAttributeLabel('p1DireccionPropietario'),
				                                                                                                            'name'=>'p1DireccionPropietario',
				                                                                                                            'id'=>'p1DireccionPropietario'
				                                                                                                        ]
				                                                                                        );?> 
				                                                </div>
				                                            </div>
				                                            <div class="row">
				                                                <div class="col-sm-12">
				                                                    <?= $form->field($model,'p1TelefonoPropietario',[  'showLabels'=>true,
				                                                                                        'showErrors'=>false,
				                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
				                                                                                        'options'=>['class' => 'form-group']]
				                                                                                        )->input('text',[
				                                                                                                            'class' => 'form-control input-lg',
				                                                                                                            'placeholder'=>$model->getAttributeLabel('p1TelefonoPropietario'),
				                                                                                                            'name'=>'p1TelefonoPropietario',
				                                                                                                            'id'=>'p1TelefonoPropietario'
				                                                                                                        ]
				                                                                                        );?> 
				                                                </div>
				                                            </div>
																									</div>
																								</div>
																							</div>
																						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																							<div class="panel panel-default">
																							  <div class="panel-heading">
																							    <h3 class="panel-title">Localizacion</h3>
																							  </div>
																							  <div class="panel-body">
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1NorteLocalizacion',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1NorteLocalizacion'),
			                                                                                                            'name'=>'p1NorteLocalizacion',
			                                                                                                            'id'=>'p1NorteLocalizacion'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1SurLocalizacion',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1SurLocalizacion'),
			                                                                                                            'name'=>'p1SurLocalizacion',
			                                                                                                            'id'=>'p1SurLocalizacion'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1OrienteLocalizacion',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1OrienteLocalizacion'),
			                                                                                                            'name'=>'p1OrienteLocalizacion',
			                                                                                                            'id'=>'p1OrienteLocalizacion'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1PonienteLocalizacion',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1PonienteLocalizacion'),
			                                                                                                            'name'=>'p1PonienteLocalizacion',
			                                                                                                            'id'=>'p1PonienteLocalizacion'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
																							  </div>
																							</div>
																						</div>
																					</div>
																					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
																						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																							<div class="panel panel-default">
																							  <div class="panel-heading">
																							    <h3 class="panel-title">Datos del Predio</h3>
																							  </div>
																							  <div class="panel-body">
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1CallePredio',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1CallePredio'),
			                                                                                                            'name'=>'p1CallePredio',
			                                                                                                            'id'=>'p1CallePredio'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1FraccColoniaPredio',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1FraccColoniaPredio'),
			                                                                                                            'name'=>'p1FraccColoniaPredio',
			                                                                                                            'id'=>'p1FraccColoniaPredio'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1LotePredio',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1LotePredio'),
			                                                                                                            'name'=>'p1LotePredio',
			                                                                                                            'id'=>'p1LotePredio'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1ManzanaPredio',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1ManzanaPredio'),
			                                                                                                            'name'=>'p1ManzanaPredio',
			                                                                                                            'id'=>'p1ManzanaPredio'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1ClaveCatastralPredio',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1ClaveCatastralPredio'),
			                                                                                                            'name'=>'p1ClaveCatastralPredio',
			                                                                                                            'id'=>'p1ClaveCatastralPredio'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
																							  </div>
																							</div>
																						</div>
																						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																							<div class="panel panel-default">
																							  <div class="panel-heading">
																							    <h3 class="panel-title">Observaciones</h3>
																							  </div>
																							  <div class="panel-body">
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1AlineamientoObservaciones',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1AlineamientoObservaciones'),
			                                                                                                            'name'=>'p1AlineamientoObservaciones',
			                                                                                                            'id'=>'p1AlineamientoObservaciones'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1NoOficialObservaciones',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1NoOficialObservaciones'),
			                                                                                                            'name'=>'p1NoOficialObservaciones',
			                                                                                                            'id'=>'p1NoOficialObservaciones'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1ProMatObservaciones',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1ProMatObservaciones'),
			                                                                                                            'name'=>'p1ProMatObservaciones',
			                                                                                                            'id'=>'p1ProMatObservaciones'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1ProHospObservaciones',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1ProHospObservaciones'),
			                                                                                                            'name'=>'p1ProHospObservaciones',
			                                                                                                            'id'=>'p1ProHospObservaciones'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1ProAlfObservaciones',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1ProAlfObservaciones'),
			                                                                                                            'name'=>'p1ProAlfObservaciones',
			                                                                                                            'id'=>'p1ProAlfObservaciones'
			                                                                                                        ]
			                                                                                        );?> 
			                                                </div>
			                                            </div>
			                                            <div class="row">
			                                                <div class="col-sm-12">
			                                                    <?= $form->field($model,'p1TotalObservaciones',[  'showLabels'=>true,
			                                                                                        'showErrors'=>false,
			                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                                                        'options'=>['class' => 'form-group']]
			                                                                                        )->input('text',[
			                                                                                                            'class' => 'form-control input-lg',
			                                                                                                            'placeholder'=>$model->getAttributeLabel('p1TotalObservaciones'),
			                                                                                                            'name'=>'p1TotalObservaciones',
			                                                                                                            'id'=>'p1TotalObservaciones'
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
                                        <?php if($permisos[1060][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Pago',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p2Pago',
		                                                    										'multiple'=>true,
		                                                                        'id'=>'p2Pago'        
		                                                    ]);?>  
		                                                    <a href='javascript:void(0);' id='verp2Pago' >
               																																								<?= (!$model->isNewRecord && !empty($model->p2Pago))? "ver":"";?>
               																																							</a>                                                  
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
                                        <?php if($permisos[1061][USUARIOS::$LEER]){ ?>
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
		                                                                        'id'=>'p3Resolutivo',
		                                                    										'multiple'=>true,        
		                                                    ]);?>      
		                                                    <a href='javascript:void(0);' id='verp3Resolutivo' >
               																																								<?= (!$model->isNewRecord && !empty($model->p3Resolutivo))? "ver":"";?>
               																																							</a>                                              
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
                                        <?php if($permisos[1062][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Pago')->checkbox([
		                                                                                                            'name'=>'p4Pago',
		                                                                                                            'id'=>'p4Pago'
		                                                    ]); ?>        
		                                                    <a href='javascript:void(0);' id='verp4Pago' >
               																																								<?= (!$model->isNewRecord && !empty($model->p2Pago))? "ver":"";?>
               																																							</a>                                           
		                                                    
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Resolutivo')->checkbox([
		                                                                                                            'name'=>'p4Resolutivo',
		                                                                                                            'id'=>'p4Resolutivo'
		                                                    ]); ?>
		                                                    <a href='javascript:void(0);' id='verp4Resolutivo' >
               																																								<?= (!$model->isNewRecord && !empty($model->p3Resolutivo))? "ver":"";?>
               																																							</a>    
		                                                </div>
		                                            </div>
																							</div>
																						</div>
																						<div class="col-md-12 text-right">
               								<button  id="btnRevisar" type="button" class="btn btn-primary btn-lg active">Revisión</button>
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
                                        <?php if($permisos[1063][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5MaterialVialPublica',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p5MaterialVialPublica',
		                                                                        'id'=>'p5MaterialVialPublica',
		                                                    										'multiple'=>true,        
		                                                    ]);?>  
		                                                    <a href='javascript:void(0);' id='verp5MaterialVialPublica' >
               																																								<?= (!$model->isNewRecord && !empty($model->p5MaterialVialPublica))? "ver":"";?>
               																																							</a>                                                  
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
                                        <?php if($permisos[1064][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6EnvioExpediente')->checkbox([
		                                                                                                            'name'=>'p6EnvioExpediente',
		                                                                                                            'id'=>'p6EnvioExpediente'
		                                                    ]); ?>                        
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
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">																							
		                                            <div class="col-sm-6">
			                                            <br>
																									<button  id="btnConstancia" type="button" class="btn btn-primary  active">Guardar Constancia</button>
																								</div>																											
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


<div id="dialog_revisar" title="Revisión">
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Documentos',3=>'Paso 3: Resolutivo'], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(5).addClass('complete');";
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(5).find('.step').html('<i class=\'fa fa-check\'></i>');";
            $pasoschafas=$pasoschafas."\$('#btntab$secuencia').removeAttr('disabled');";
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

\$('#btnConstancia').click(function() {
	
	var \$valid = \$('#wizard-1').valid();
	\$('#btntab6').removeAttr('disabled');
	
	if (!\$valid) {
		\$validator.focusInvalid();
		return false;
	} else {
		var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
		var form_data = new FormData();
		var datos = \$('#wizard-1').serializeArray().reduce(function(obj, item) {
      if(item.name =='id' || item.value != '')
          form_data.append('TramitesMaterialVia['+item.name +']',item.value);
      return obj;
  }, {});
		

datos['_csrf']=csrfToken;
form_data.append('paso',6);


\$.ajax({
	url: '".Yii::$app->homeUrl."/tramites-material-via/salvar', // point to server-side PHP script 
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

		
		console.log(data.id);
		
		\$('#idTramite').val(data.id);
		\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(5).addClass('complete');
		\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(5).find('.step').html('<i class=\'fa fa-check\'></i>');
  	\$('#observacionesAtras').html('<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span><strong>Observaciones: </strong>'+data.observaciones);
    if(!data.observaciones)
    	\$('#observacionesAtras').hide();
    else
    	\$('#observacionesAtras').show();

  \$('#dialog_simple').dialog('close');

},
error: function(result) {
	\$('#dialog_simple').html('<h2>Ocurrio un error, por favor revise que los datos sean correctos y vuelva intentar</h2>');
}

});


}


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
                                url: '".Yii::$app->homeUrl."//tramites-material-via/atras', // point to server-side PHP script 
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
		                                            \$('#observacionesAtras').html('<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span><strong>Observaciones: </strong>'+data.observaciones);
		                                            if(!data.observaciones)
		                                            	\$('#observacionesAtras').hide();
		                                            else
		                                            	\$('#observacionesAtras').show();

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
                \$('#dialog_simple').html('<div class=\"progress progress-striped active\" style=\"margin-top:0;\"><div class=\"progress-bar\" style=\"width: 100%\"></div></div>');
                \$.ajax({
						      type: 'POST',
						       url: 'view-imagen',
						       data: {consecutivo: 1, id: \$('#idTramite').val(),tipoDocumento:tipoimagen},
						       success: function(data){
						       
						        \$('#dialog_simple').html(data);
						       },
						    });
                
                return false;
            };
  
  //Pendiente
            \$('#verp6EnvioExpediente').click(function() {
                return verimagen('');
            });

  

  
            \$('#verp5MaterialVialPublica').click(function() {
                return verimagen('Material Via Publica');
            });

  
            \$('#verp3Resolutivo').click(function() {
                return verimagen('Resolutivo');
            });

  
            \$('#verp2Pago').click(function() {
                return verimagen('Pago');
            });

  //Pendiente
            \$('#verp4Pago').click(function() {
                return verimagen('Pago');
            });

  //Pendiente
            \$('#verp4Resolutivo').click(function() {
                return verimagen('Resolutivo');
            });

  

            \$('#dialog_simple').dialog({
                autoOpen : false,
                width : 1000,
                resizable : false,
                modal : true,
                
            });
            \$('#dialog_revisar').dialog({
                autoOpen : false,
                width : 1000,
                resizable : false,
                modal : true,
                
            });


    
            //Bootstrap Wizard Validations

              var \$validator = \$('#wizard-1').validate({
                
                rules: {

                  p1NombrePropietario: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1DireccionPropietario: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p1TelefonoPropietario: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1CallePredio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1FraccColoniaPredio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1LotePredio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1ManzanaPredio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1ClaveCatastralPredio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1AlineamientoObservaciones: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1NoOficialObservaciones: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1ProMatObservaciones: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1ProHospObservaciones: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1ProAlfObservaciones: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1TotalObservaciones: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1NorteLocalizacion: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1SurLocalizacion: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1OrienteLocalizacion: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1PonienteLocalizacion: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p6EnvioExpediente: {
                    required: true



                  },

                  p6Observaciones: {
                    required: false
                    
                    ,minlength: 1



                  },

                  p5MaterialVialPublica: {
                    required: true



                  },

                  p3Resolutivo: {
                    required: true



                  },

                  p2Pago: {
                    required: true



                  },

                  p4Pago: {
                    required: true



                  },

                  p4Resolutivo: {
                    required: true



                  },
                },
                
                messages: {
                p1NombrePropietario: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NombrePropietario')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NombrePropietario')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NombrePropietario')} excede el número de caracteres permitidos',


                },

                p1DireccionPropietario: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DireccionPropietario')}',


                },

                p1TelefonoPropietario: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TelefonoPropietario')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoPropietario')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoPropietario')} excede el número de caracteres permitidos',


                },

                p1CallePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1CallePredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1CallePredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1CallePredio')} excede el número de caracteres permitidos',


                },

                p1FraccColoniaPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1FraccColoniaPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1FraccColoniaPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1FraccColoniaPredio')} excede el número de caracteres permitidos',


                },

                p1LotePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1LotePredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1LotePredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1LotePredio')} excede el número de caracteres permitidos',


                },

                p1ManzanaPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ManzanaPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ManzanaPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ManzanaPredio')} excede el número de caracteres permitidos',


                },

                p1ClaveCatastralPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ClaveCatastralPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ClaveCatastralPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ClaveCatastralPredio')} excede el número de caracteres permitidos',


                },

                p1AlineamientoObservaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1AlineamientoObservaciones')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1AlineamientoObservaciones')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1AlineamientoObservaciones')} excede el número de caracteres permitidos',


                },

                p1NoOficialObservaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NoOficialObservaciones')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NoOficialObservaciones')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NoOficialObservaciones')} excede el número de caracteres permitidos',


                },

                p1ProMatObservaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ProMatObservaciones')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ProMatObservaciones')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ProMatObservaciones')} excede el número de caracteres permitidos',


                },

                p1ProHospObservaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ProHospObservaciones')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ProHospObservaciones')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ProHospObservaciones')} excede el número de caracteres permitidos',


                },

                p1ProAlfObservaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ProAlfObservaciones')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ProAlfObservaciones')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ProAlfObservaciones')} excede el número de caracteres permitidos',


                },

                p1TotalObservaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TotalObservaciones')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TotalObservaciones')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TotalObservaciones')} excede el número de caracteres permitidos',


                },

                p1NorteLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NorteLocalizacion')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NorteLocalizacion')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NorteLocalizacion')} excede el número de caracteres permitidos',


                },

                p1SurLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1SurLocalizacion')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1SurLocalizacion')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1SurLocalizacion')} excede el número de caracteres permitidos',


                },

                p1OrienteLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1OrienteLocalizacion')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1OrienteLocalizacion')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1OrienteLocalizacion')} excede el número de caracteres permitidos',


                },

                p1PonienteLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PonienteLocalizacion')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1PonienteLocalizacion')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1PonienteLocalizacion')} excede el número de caracteres permitidos',


                },

                p6EnvioExpediente: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6EnvioExpediente')}',


                },

                p6Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6Observaciones')}',


                },

                p5MaterialVialPublica: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5MaterialVialPublica')}',


                },

                p3Resolutivo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Resolutivo')}',


                },

                p2Pago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Pago')}',


                },

                p4Pago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Pago')}',


                },

                p4Resolutivo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Resolutivo')}',


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
                                                                form_data.append('TramitesMaterialVia['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');
                        var archivos= $('#p5MaterialVialPublica').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesMaterialVia[p5MaterialVialPublica]['+i+']', archivos[i]);	
                         }
                         var archivos= $('#p3Resolutivo').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesMaterialVia[p3Resolutivo]['+i+']', archivos[i]);	
                         }
                         var archivos= $('#p2Pago').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesMaterialVia[p2Pago]['+i+']', archivos[i]);	
                         }
                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramites-material-via/salvar', // point to server-side PHP script 
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
                                            if(data.p5MaterialVialPublica)
                                                \$('#p5MaterialVialPublica').attr('value',data.p5MaterialVialPublica);
                                            if(data.p3Resolutivo)
                                                \$('#p3Resolutivo').attr('value',data.p3Resolutivo);
                                            if(data.p2Pago)
                                                \$('#p2Pago').attr('value',data.p2Pago);

                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).addClass(
                                              'complete');
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).find('.step')
                                            .html('<i class=\'fa fa-check\'></i>');
                                            \$('#dialog_simple').dialog('close');
                                            \$('#observacionesAtras').html('<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span><strong>Observaciones: </strong>'+data.observaciones);
                                            if(!data.observaciones)
                                            	\$('#observacionesAtras').hide();
                                            else
                                            	\$('#observacionesAtras').show();

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
