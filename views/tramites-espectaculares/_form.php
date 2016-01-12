

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
                    <h2> Anuncios Permanentes</h2>
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
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Supervisión</span> </a>
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
                                        <?php if($permisos[24][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 1 </strong> - Solicitud</h3>*/?>
																					</div>
																					<div class="panel-body">
																						<div class="row">
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
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Memoria',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'multiple'=>true,
		                                                                        'name'=>'p2Memoria',
		                                                                        'id'=>'p2Memoria'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord && !empty($model->p2Memoria)): ?>
		                                                            <a href='javascript:void(0);' id='verp2Memoria' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Poliza',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                      'multiple'=>true,
		                                                                        'name'=>'p2Poliza',
		                                                                        'id'=>'p2Poliza'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord && !empty($model->p2Poliza)): ?>
		                                                            <a href='javascript:void(0);' id='verp2Poliza' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Propiedad',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'multiple'=>true,
		                                                                        'name'=>'p2Propiedad',
		                                                                        'id'=>'p2Propiedad'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord && !empty($model->p2Propiedad)): ?>
		                                                            <a href='javascript:void(0);' id='verp2Propiedad' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2PagoImpuesto',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'multiple'=>true,
		                                                                        'name'=>'p2PagoImpuesto',
		                                                                        'id'=>'p2PagoImpuesto'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord && !empty($model->p2PagoImpuesto)): ?>
		                                                            <a href='javascript:void(0);' id='verp2PagoImpuesto' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2CartaAutorizacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'multiple'=>true,
		                                                                        'name'=>'p2CartaAutorizacion',
		                                                                        'id'=>'p2CartaAutorizacion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord && !empty($model->p2CartaAutorizacion)): ?>
		                                                            <a href='javascript:void(0);' id='verp2CartaAutorizacion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2CartaCompromiso',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'multiple'=>true,
		                                                                        'name'=>'p2CartaCompromiso',
		                                                                        'id'=>'p2CartaCompromiso'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord && !empty($model->p2CartaCompromiso)): ?>
		                                                            <a href='javascript:void(0);' id='verp2CartaCompromiso' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2LicenciaConstruccion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'multiple'=>true,
		                                                                        'name'=>'p2LicenciaConstruccion',
		                                                                        'id'=>'p2LicenciaConstruccion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord && !empty($model->p2LicenciaConstruccion)): ?>
		                                                            <a href='javascript:void(0);' id='verp2LicenciaConstruccion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2AutorizacionProteccionCivil',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                         'multiple'=>true,
		                                                                        'name'=>'p2AutorizacionProteccionCivil',
		                                                                        'id'=>'p2AutorizacionProteccionCivil'        
		                                                    ]);?>                                                    
		                                                    	<?php if(!$model->isNewRecord && !empty($model->p2AutorizacionProteccionCivil)): ?>
		                                                            <a href='javascript:void(0);' id='verp2AutorizacionProteccionCivil' >ver</a>
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
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Memoria')->checkbox([
		                                                                                                            'name'=>'p3Memoria',
		                                                                                                            'id'=>'p3Memoria'
		                                                    ]); ?>                                                   
		                                                    <a href='javascript:void(0);' id='verp3Memoria' >
		                                                    <?= (!$model->isNewRecord && !empty($model->p2Memoria))? "ver":"";?>
		                                                    </a> 
		                                                    
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Poliza')->checkbox([
		                                                                                                            'name'=>'p3Poliza',
		                                                                                                            'id'=>'p3Poliza'
		                                                    ]); ?> 
		                                                    <a href='javascript:void(0);' id='verp3Poliza' >
		                                                    <?= (!$model->isNewRecord && !empty($model->p2Poliza))? "ver":"";?>
		                                                    </a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Propiedad')->checkbox([
		                                                                                                            'name'=>'p3Propiedad',
		                                                                                                            'id'=>'p3Propiedad'
		                                                    ]); ?> 
		                                                    <a href='javascript:void(0);' id='verp3Propiedad' >
		                                                    <?= (!$model->isNewRecord && !empty($model->p2Propiedad))? "ver":"";?>
		                                                    </a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3PagoImpuesto')->checkbox([
		                                                                                                            'name'=>'p3PagoImpuesto',
		                                                                                                            'id'=>'p3PagoImpuesto'
		                                                    ]); ?> 
		                                                    <a href='javascript:void(0);' id='verp3PagoImpuesto' >
		                                                    <?= (!$model->isNewRecord && !empty($model->p2PagoImpuesto))? "ver":"";?>
		                                                    </a> 
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
		                                                    <a href='javascript:void(0);' id='verp3CartaAutorizacion' >
		                                                    <?= (!$model->isNewRecord && !empty($model->p2CartaAutorizacion))? "ver":"";?>
		                                                    </a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3CartaCompromiso')->checkbox([
		                                                                                                            'name'=>'p3CartaCompromiso',
		                                                                                                            'id'=>'p3CartaCompromiso'
		                                                    ]); ?>  
		                                                    <a href='javascript:void(0);' id='verp3CartaCompromiso' >
		                                                    <?= (!$model->isNewRecord && !empty($model->p2CartaCompromiso))? "ver":"";?>
		                                                    </a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3LicenciaConstruccion')->checkbox([
		                                                                                                            'name'=>'p3LicenciaConstruccion',
		                                                                                                            'id'=>'p3LicenciaConstruccion'
		                                                    ]); ?> 
		                                                    <a href='javascript:void(0);' id='verp3LicenciaConstruccion' >
		                                                    <?= (!$model->isNewRecord && !empty($model->p2LicenciaConstruccion))? "ver":"";?>
		                                                    </a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3AutorizacionProteccionCivil')->checkbox([
		                                                                                                            'name'=>'p3AutorizacionProteccionCivil',
		                                                                                                            'id'=>'p3AutorizacionProteccionCivil'
		                                                    ]); ?> 
		                                                    <a href='javascript:void(0);' id='verp3AutorizacionProteccionCivil' >
		                                                    <?= (!$model->isNewRecord && !empty($model->p2AutorizacionProteccionCivil))? "ver":"";?>
		                                                    </a> 
		                                                </div>
		                                            </div>
																							</div>
																						</div>
																					</div>
																						<div class="row">
						                                									<div class="col-md-12 text-right">
																					 			<button  id="btnRevisar" type="button" class="btn btn-primary btn-lg active">Revisión</button>
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
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ReciboPago',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                        'name'=>'p4ReciboPago',
		                                                                        'multiple'=>true,
		                                                                        'id'=>'p4ReciboPago'        
		                                                    ]);?>                                                    
		                                                        
		                                                         <a href='javascript:void(0);' id='verp3AutorizacionProteccionCivil' >
			                                                    <?= (!$model->isNewRecord && !empty($model->p3AutorizacionProteccionCivil))? "ver":"";?>
			                                                    </a>                                         
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Folio',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4Folio'),
		                                                                                                            'name'=>'p4Folio',
		                                                                                                            'id'=>'p4Folio'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Empresa',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4Empresa'),
		                                                                                                            'name'=>'p4Empresa',
		                                                                                                            'id'=>'p4Empresa'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Dimensiones',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4Dimensiones'),
		                                                                                                            'name'=>'p4Dimensiones',
		                                                                                                            'id'=>'p4Dimensiones'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Superficie',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4Superficie'),
		                                                                                                            'name'=>'p4Superficie',
		                                                                                                            'id'=>'p4Superficie'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ClaveCenso',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4ClaveCenso'),
		                                                                                                            'name'=>'p4ClaveCenso',
		                                                                                                            'id'=>'p4ClaveCenso'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                	<?= $form->field($model, 'p4FechaExpedicionPago')->widget(\yii\jui\DatePicker::classname(),[
																										      'dateFormat' => 'yyyy-MM-dd',
																										       ])->textInput(['name'=>'p4FechaExpedicionPago']) ?>
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4MontoPagar',[  'showLabels'=>true,
                                                            'showErrors'=>false,
                                                            //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                            'options'=>['class' => 'form-group']]
                                                            )->input('text',[
                                                                                'class' => 'form-control input-lg',
                                                                                'placeholder'=>$model->getAttributeLabel('p4MontoPagar'),
                                                                                'name'=>'p4MontoPagar',
                                                                                'id'=>'p4MontoPagar'
                                                                            ]
                                                            );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                	<?= $form->field($model, 'p4VigenciaPago')->widget(\yii\jui\DatePicker::classname(),[
															      'dateFormat' => 'yyyy-MM-dd',
															       ])->textInput(['name'=>'p4VigenciaPago']) ?>
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Ubicacion',[  'showLabels'=>true,
                                                          'showErrors'=>false,
                                                          //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                          'options'=>['class' => 'form-group']]
                                                          )->textarea([
                                                                              'class' => 'form-control input-lg',
                                                                              'placeholder'=>$model->getAttributeLabel('p4Ubicacion'),
                                                                              'name'=>'p4Ubicacion',
                                                                              'id'=>'p4Ubicacion'
                                                                          ]
                                                          );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                	<?= $form->field($model, 'p4FechaProxima')->widget(\yii\jui\DatePicker::classname(),[
															      'dateFormat' => 'yyyy-MM-dd',
															       ])->textInput(['name'=>'p4FechaProxima']) ?>
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
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5Supervisor')->checkbox([
		                                                                                                            'name'=>'p5Supervisor',
		                                                                                                            'id'=>'p5Supervisor'
		                                                    ]); ?>                                                   
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
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
	                                                <div class="col-sm-12">
	                                                    <?= $form->field($model,'p6Permiso',[
	                                                    'options'=>['class' => 'form-group']]
	                                                    )->fileInput( [ 'accept' => 'image/jpeg',
	                                                                        'name'=>'p6Permiso',
	                                                                        'multiple'=>true,
	                                                                        'id'=>'p6Permiso'        
	                                                    ]);?>                                                    
	                                                    
	                                                    <a href='javascript:void(0);' id='verp6Permiso' >
                                                    		<?= (!$model->isNewRecord && !empty($model->p6Permiso))? "ver":"";?>
                                                    	</a>

	                                                                                                    </div>
	                                            		</div>
																								</div>
																								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																									<div class="col-sm-6">
				                                            <button  id="btnConstancia" type="button" class="btn btn-primary  active">Guardar Permiso Permanente</button>
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Documentos',], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq($secuencia-1).addClass('complete');";
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq($secuencia-1).find('.step').html('<i class=\'fa fa-check\'></i>');";
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
                                                            if(item.name =='id' )
                                                                form_data.append('TramitesEspectaculares['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',6);
                  
                    try {
                        console.log('Buscando Archivos');
                
                            var archivos= $('#p6Permiso').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesEspectaculares[p6Permiso]['+i+']', archivos[i])
                         }
                        	
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
                                error: function(){
                                	\$('#dialog_simple').html('<h2>Ocurrió un error, por favor revise que los datos sean correctos y vuelva intentar</h2>');
                                },
                                success: function(data){

                                            
                                            console.log(data.id);
                                            if(data.p6Permiso){
                                                \$('#p6Permiso').attr('value',data.p5Constancia);
                                                \$('#verp6Permiso').html('Ver');
                                            }
                                            \$('#idTramite').val(data.id);
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(5).addClass(
                                              'complete');
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(5).find('.step')
                                            .html('<i class=\'fa fa-check\'></i>');
                                            \$('#observacionesAtras').html('');
                           
                                  			verimagen('Permiso de Espectaculares');          
                                    },
                                error: function(result) {
				                    alert('Se Presento un error al cargar los datos');
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
                                url: '".Yii::$app->homeUrl."//tramites-espectaculares/atras', // point to server-side PHP script 
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

  
  
            \$('#verp2Memoria').click(function() {
                return verimagen('Memoria');
            });

  
            \$('#verp2Poliza').click(function() {
                
                return verimagen('Poliza');
            });

  
            \$('#verp2Propiedad').click(function() {
                
                return verimagen('Propiedad');
            });

  
            \$('#verp2PagoImpuesto').click(function() {
                
                return verimagen('Pago de Impuesto');
            });

  
            \$('#verp2CartaAutorizacion').click(function() {
                
                return verimagen('Carta de Autorizacion');
            });

  
            \$('#verp2CartaCompromiso').click(function() {
                
                return verimagen('Carta de Compromiso');
            });

  
            \$('#verp2LicenciaConstruccion').click(function() {
                
                return verimagen('Licencia de Construccion');
            });

  
            \$('#verp2AutorizacionProteccionCivil').click(function() {
                
                return verimagen('Autorizacion de Proteccion Civil');
            });

  
            \$('#verp3Memoria').click(function() {
                
                return verimagen('Memoria');
            });

  
            \$('#verp3Poliza').click(function() {
                
                return verimagen('Poliza');
            });

  
            \$('#verp3Propiedad').click(function() {
                
                return verimagen('Propiedad');
            });

  
            \$('#verp3PagoImpuesto').click(function() {
                
                return verimagen('Pago de Impuesto');
            });

  
            \$('#verp3CartaAutorizacion').click(function() {
                
                return verimagen('Carta de Autorizacion');
            });

  
            \$('#verp3CartaCompromiso').click(function() {
                
                return verimagen('Carta de Compromiso');
            });

  
            \$('#verp3LicenciaConstruccion').click(function() {
                
                return verimagen('Licencia de Construccion');
            });

  
            \$('#verp3AutorizacionProteccionCivil').click(function() {
                
                return verimagen('Autorizacion de Proteccion Civil');
            });

  
            \$('#verp4ReciboPago').click(function() {
                
                return verimagen('Recibo de Pago');
            });

  
            \$('#verp5Supervisor').click(function() {
                
                return verimagen('Permiso de Espectaculares');
            });

  

  
            \$('#verp6Permiso').click(function() {
                
                return verimagen('Permiso de Espectaculares');
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
                    required: ".(($model->isNewRecord || empty($model->p2Memoria))? "true":"false")."



                  },

                  p2Poliza: {
                    required: ".(($model->isNewRecord || empty($model->p2Poliza))? "true":"false")."



                  },

                  p2Propiedad: {
                    required: ".(($model->isNewRecord || empty($model->p2Propiedad))? "true":"false")."



                  },

                  p2PagoImpuesto: {
                    required: ".(($model->isNewRecord || empty($model->p2PagoImpuesto))? "true":"false")."



                  },

                  p2CartaAutorizacion: {
                    required: ".(($model->isNewRecord || empty($model->p2CartaAutorizacion))? "true":"false")."



                  },

                  p2CartaCompromiso: {
                    required: ".(($model->isNewRecord || empty($model->p2CartaCompromiso))? "true":"false")."



                  },

                  p2LicenciaConstruccion: {
                    required: ".(($model->isNewRecord || empty($model->p2LicenciaConstruccion))? "true":"false")."



                  },

                  p2AutorizacionProteccionCivil: {
                    required: ".(($model->isNewRecord || empty($model->p2AutorizacionProteccionCivil))? "true":"false")."



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
                    required: ".(($model->isNewRecord || empty($model->p4ReciboPago))? "true":"false")."



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

                  p4Folio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p4Superficie: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p4ClaveCenso: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p4Dimensiones: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p4VigenciaPago: {
                    required: true



                  },

                  p4Ubicacion: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p4Empresa: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p4FechaExpedicionPago: {
                    required: true



                  },

                  p4FechaProxima: {
                    required: true



                  },

                  p4MontoPagar: {
                    required: true
                    ,number: true
                    ,min: 0



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

                p4Folio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Folio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p4Folio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p4Folio')} excede el numero de caracteres permitidos',


                },

                p4Superficie: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Superficie')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p4Superficie')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p4Superficie')} excede el numero de caracteres permitidos',


                },

                p4ClaveCenso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ClaveCenso')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p4ClaveCenso')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p4ClaveCenso')} excede el numero de caracteres permitidos',


                },

                p4Dimensiones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Dimensiones')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p4Dimensiones')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p4Dimensiones')} excede el numero de caracteres permitidos',


                },

                p4VigenciaPago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4VigenciaPago')}',


                },

                p4Ubicacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Ubicacion')}',


                },

                p4Empresa: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Empresa')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p4Empresa')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p4Empresa')} excede el numero de caracteres permitidos',


                },

                p4FechaExpedicionPago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4FechaExpedicionPago')}',


                },

                p4FechaProxima: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4FechaProxima')}',


                },

                p4MontoPagar: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4MontoPagar')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p4MontoPagar')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p4MontoPagar')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p4MontoPagar')} es demasiado grande',


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
                        
                        var archivos= $('#p2Memoria').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesEspectaculares[p2Memoria]['+i+']', archivos[i]);	
                          }

                          var archivos= $('#p2Poliza').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesEspectaculares[p2Poliza]['+i+']', archivos[i]);	
                          }

                          var archivos= $('#p2Propiedad').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesEspectaculares[p2Propiedad]['+i+']', archivos[i]);	
                          }

                    

                         var archivos= $('#p2PagoImpuesto').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesEspectaculares[p2PagoImpuesto]['+i+']', archivos[i]);
                         }

                         var archivos= $('#p2CartaAutorizacion').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesEspectaculares[p2CartaAutorizacion]['+i+']', archivos[i]);
                         }

                         var archivos= $('#p2CartaCompromiso').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesEspectaculares[p2CartaCompromiso]['+i+']', archivos[i]);	
                         }

                         var archivos= $('#p2LicenciaConstruccion').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesEspectaculares[p2LicenciaConstruccion]['+i+']', archivos[i]);
                         }	

                         var archivos= $('#p2AutorizacionProteccionCivil').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesEspectaculares[p2AutorizacionProteccionCivil]['+i+']', archivos[i]);
                         }

                         var archivos= $('#p4ReciboPago').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesEspectaculares[p4ReciboPago]['+i+']', archivos[i]);
                         }

                         var archivos= $('#p6Permiso').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesEspectaculares[p6Permiso]['+i+']', archivos[i])
                         }

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
                                            if(data.p2Memoria){
                                                \$('#p2Memoria').attr('value',data.p2Memoria);
                                                \$('#verp3Memoria').html('Ver');
                                            }
                                            if(data.p2Poliza){
                                                \$('#p2Poliza').attr('value',data.p2Poliza);
                                            	\$('#verp3Poliza').html('Ver');
                                            }
                                            if(data.p2Propiedad){
                                                \$('#p2Propiedad').attr('value',data.p2Propiedad);
                                            	\$('#verp3Propiedad').html('Ver');
                                            }
                                            if(data.p2PagoImpuesto){
                                                \$('#p2PagoImpuesto').attr('value',data.p2PagoImpuesto);
                                            	\$('#verp3PagoImpuesto').html('Ver');
                                            }
                                            if(data.p2CartaAutorizacion){
                                                \$('#p2CartaAutorizacion').attr('value',data.p2CartaAutorizacion);
                                            	\$('#verp3CartaAutorizacion').html('Ver');
                                            }
                                            if(data.p2CartaCompromiso){
                                                \$('#p2CartaCompromiso').attr('value',data.p2CartaCompromiso);
                                            	\$('#verp3CartaCompromiso').html('Ver');
                                            }
                                            if(data.p2LicenciaConstruccion){
                                                \$('#p2LicenciaConstruccion').attr('value',data.p2LicenciaConstruccion);
                                            	\$('#verp3LicenciaConstruccion').html('Ver');
                                            }
                                            if(data.p2AutorizacionProteccionCivil){
                                                \$('#p2AutorizacionProteccionCivil').attr('value',data.p2AutorizacionProteccionCivil);
                                            	\$('#verp3AutorizacionProteccionCivil').html('Ver');
                                            }
                                            if(data.p4ReciboPago){
                                                \$('#p4ReciboPago').attr('value',data.p4ReciboPago);
                                            	\$('#verp4ReciboPago').html('Ver');
                                            }
                                            if(data.p6Permiso){
                                                \$('#p6Permiso').attr('value',data.p6Permiso);
                                            	\$('#verp6Permiso').html('Ver');
                                            }

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
