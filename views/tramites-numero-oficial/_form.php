

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
/* @var $model app\models\TramitesNumeroOficial */
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
                    <h2> Número Oficial</h2>


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
                                            <li class="active"  data-target="#step1" style="width:14.285714285714%">
                                                <a id="btntab1" href="#tab1" data-toggle="tab" > <span class="step">1</span> <span class="title">Solicitud</span> </a>
                                            </li>
                                            <li   data-target="#step2" style="width:14.285714285714%">
                                                <a id="btntab2" href="#tab2" data-toggle="tab" disabled="disabled"> <span class="step">2</span> <span class="title">Documentos</span> </a>
                                            </li>
                                            <li   data-target="#step3" style="width:14.285714285714%">
                                                <a id="btntab3" href="#tab3" data-toggle="tab" disabled="disabled"> <span class="step">3</span> <span class="title">Asignación de Número</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:14.285714285714%">
                                                <a id="btntab4" href="#tab4" data-toggle="tab" disabled="disabled"> <span class="step">4</span> <span class="title">Resolutivo</span> </a>
                                            </li>
                                            <li   data-target="#step5" style="width:14.285714285714%">
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Revisión</span> </a>
                                            </li>
                                            <li   data-target="#step6" style="width:14.285714285714%">
                                                <a id="btntab6" href="#tab6" data-toggle="tab" disabled="disabled"> <span class="step">6</span> <span class="title">Número Oficial</span> </a>
                                            </li>
                                            <li   data-target="#step7" style="width:14.285714285714%">
                                                <a id="btntab7" href="#tab7" data-toggle="tab" disabled="disabled"> <span class="step">7</span> <span class="title">Archivo</span> </a>
                                            </li>
                                           
                                            
                                        </ul>
                                        <?= $form->field($model,'id')->input('hidden',['name'=>'id','id'=>'idTramite'])->label(false);?>                                         <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <br>
                                        <?php if($permisos[1045][USUARIOS::$LEER]){ ?>
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
																							    <h3 class="panel-title">Localización</h3>
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
                                        <?php if($permisos[1046][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2CopiaEscritura',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                    					'multiple'=>true,
		                                                                        'name'=>'p2CopiaEscritura',
		                                                                        'id'=>'p2CopiaEscritura'        
		                                                    ]);?>
		                                                    <a href='javascript:void(0);' id='verp2CopiaEscritura' >
               																																								<?= (!$model->isNewRecord && !empty($model->p2CopiaEscritura))? "ver":"";?>
               																																							</a>                                                    
		                                                                                                   </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Croquis',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                    					'multiple'=>true,
		                                                                        'name'=>'p2Croquis',
		                                                                        'id'=>'p2Croquis'        

		                                                    ]);?>   
		                                                    <a href='javascript:void(0);' id='verp2Croquis' >
               																																								<?= (!$model->isNewRecord && !empty($model->p2Croquis))? "ver":"";?>
               																																							</a>                                                    
		                                                                                                    </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Pago',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                    					'multiple'=>true,
		                                                                        'name'=>'p2Pago',
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
                                        <?php if($permisos[1047][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Nombre',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p3Nombre'),
		                                                                                                            'name'=>'p3Nombre',
		                                                                                                            'id'=>'p3Nombre'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Observaciones',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->textarea([
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p3Observaciones'),
		                                                                                                            'name'=>'p3Observaciones',
		                                                                                                            'id'=>'p3Observaciones'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3NumeroAsignado',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p3NumeroAsignado'),
		                                                                                                            'name'=>'p3NumeroAsignado',
		                                                                                                            'id'=>'p3NumeroAsignado'
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
                                        <div class="tab-pane " id="tab4">
                                            <br>
                                            <br>
                                        <?php if($permisos[1048][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Resolutivo',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                    					'multiple'=>true,
		                                                                        'name'=>'p4Resolutivo',
		                                                                        'id'=>'p4Resolutivo'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp4Resolutivo' >ver</a>
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
                                        <div class="tab-pane " id="tab5">
                                            <br>
                                            <br>
                                        <?php if($permisos[1049][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5CopiaEscritura')->checkbox([
		                                                                                                            'name'=>'p5CopiaEscritura',
		                                                                                                            'id'=>'p5CopiaEscritura'
		                                                    ]); ?>
		                                                    <a href='javascript:void(0);' id='verp5CopiaEscritura' >
               																																								<?= (!$model->isNewRecord && !empty($model->p2CopiaEscritura))? "ver":"";?>
               																																							</a>  
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5Pago')->checkbox([
		                                                                                                            'name'=>'p5Pago',
		                                                                                                            'id'=>'p5Pago'
		                                                    ]); ?>
		                                                    <a href='javascript:void(0);' id='verp5Pago' >
               																																								<?= (!$model->isNewRecord && !empty($model->p2Pago))? "ver":"";?>
               																																							</a>                                                   
		                                                     
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5Croquis')->checkbox([
		                                                                                                            'name'=>'p5Croquis',
		                                                                                                            'id'=>'p5Croquis'
		                                                    ]); ?>
		                                                    <a href='javascript:void(0);' id='verp5Croquis' >
               																																								<?= (!$model->isNewRecord && !empty($model->p2Croquis))? "ver":"";?>
               																																							</a>    

		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5Resolutivo')->checkbox([
		                                                                                                            'name'=>'p5Resolutivo',
		                                                                                                            'id'=>'p5Resolutivo'
		                                                    ]); ?>                                                   
		                                                    <a href='javascript:void(0);' id='verp5Resolutivo' >
               																																								<?= (!$model->isNewRecord && !empty($model->p4Resolutivo))? "ver":"";?>
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
                                        <div class="tab-pane " id="tab6">
                                            <br>
                                            <br>
                                        <?php if($permisos[1050][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6NumeroOficial',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                    					'multiple'=>true,
		                                                                        'name'=>'p6NumeroOficial',
		                                                                        'id'=>'p6NumeroOficial'        
		                                                    ]);?>           
		                                                    <a href='javascript:void(0);' id='verp6NumeroOficial' >
               																																								<?= (!$model->isNewRecord && !empty($model->p6NumeroOficial))? "ver":"";?>
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
                                        <div class="tab-pane " id="tab7">
                                            <br>
                                            <br>
                                        <?php if($permisos[1051][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7EnvioExpediente')->checkbox([
		                                                                                                            'name'=>'p7EnvioExpediente',
		                                                                                                            'id'=>'p7EnvioExpediente'
		                                                    ]); ?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7Observaciones',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->textarea([
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7Observaciones'),
		                                                                                                            'name'=>'p7Observaciones',
		                                                                                                            'id'=>'p7Observaciones'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                                <div class="col-sm-6">
																											<button  id="btnConstancia" type="button" class="btn btn-primary  active">Finalizar Trámite de Número Oficial</button>
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Documentos',3=>'Paso 3: Asignación de Número',4=>'Paso 4: Resolutivo'], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(6).addClass('complete');";
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(6).find('.step').html('<i class=\'fa fa-check\'></i>');";
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
	\$('#btntab7').removeAttr('disabled');
	
	if (!\$valid) {
		\$validator.focusInvalid();
		return false;
	} else {
		var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
		var form_data = new FormData();
		var datos = \$('#wizard-1').serializeArray().reduce(function(obj, item) {
      if(item.name =='id' || item.value != '')
          form_data.append('TramitesNumeroOficial['+item.name +']',item.value);
      return obj;
  }, {});
		

datos['_csrf']=csrfToken;
form_data.append('paso',7);


\$.ajax({
	url: '".Yii::$app->homeUrl."/tramites-numero-oficial/salvar', // point to server-side PHP script 
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
		\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(6).addClass('complete');
		\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(6).find('.step').html('<i class=\'fa fa-check\'></i>');
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
                                url: '".Yii::$app->homeUrl."//tramites-numero-oficial/atras', // point to server-side PHP script 
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
                                                for (var i = \$('#pasoatras').val(); i <= 7; i++) {
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
  
            \$('#verp2CopiaEscritura').click(function() {
                return verimagen('Copia de escritura o constancia de posesion');
            });

  
            \$('#verp2Croquis').click(function() {
                return verimagen('Solicitud con croquis de ubicacion');
            });

  
            \$('#verp2Pago').click(function() {
                return verimagen('Pago');
            });

  
            \$('#verp4Resolutivo').click(function() {
                return verimagen('Resolutivo');
            });

  //Pendiente
            \$('#verp5CopiaEscritura').click(function() {
                return verimagen('Copia de escritura o constancia de posesion');
            });

  //Pendiente
            \$('#verp5Croquis').click(function() {
                return verimagen('Solicitud con croquis de ubicacion');
            });

  //Pendiente
            \$('#verp5Pago').click(function() {
                return verimagen('Pago');
            });

  //Pendiente
            \$('#verp5Resolutivo').click(function() {
                return verimagen('Resolutivo');
            });


            \$('#verp6NumeroOficial').click(function() {
                return verimagen('Documento del Numero Oficial');
            });

  //Pendiente
            \$('#verp7EnvioExpediente').click(function() {
                return verimagen('');
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

                  p2CopiaEscritura: {
                    required: ".(($model->isNewRecord || empty($model->p2CopiaEscritura))? "true":"false")."



                  },

                  p2Croquis: {
                    required: ".(($model->isNewRecord || empty($model->p2Croquis))? "true":"false")."



                  },

                  p2Pago: {
                    required: ".(($model->isNewRecord || empty($model->p2Pago))? "true":"false")."



                  },

                  p3Nombre: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p3NumeroAsignado: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p3Observaciones: {
                    required: false
                    
                    ,minlength: 1



                  },

                  p4Resolutivo: {
                    required: ".(($model->isNewRecord || empty($model->p4Resolutivo))? "true":"false")."



                  },

                  p5CopiaEscritura: {
                    required: true



                  },

                  p5Croquis: {
                    required: true



                  },

                  p5Pago: {
                    required: true



                  },

                  p5Resolutivo: {
                    required: true



                  },

                  p6NumeroOficial: {
                    required: ".(($model->isNewRecord || empty($model->p6NumeroOficial))? "true":"false")."



                  },

                  p7EnvioExpediente: {
                    required: true



                  },

                  p7Observaciones: {
                    required: false
                    
                    ,minlength: 1



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

                p2CopiaEscritura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2CopiaEscritura')}',


                },

                p2Croquis: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Croquis')}',


                },

                p2Pago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Pago')}',


                },

                p3Nombre: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Nombre')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p3Nombre')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p3Nombre')} excede el número de caracteres permitidos',


                },

                p3NumeroAsignado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3NumeroAsignado')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p3NumeroAsignado')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p3NumeroAsignado')} excede el número de caracteres permitidos',


                },

                p3Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Observaciones')}',


                },

                p4Resolutivo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Resolutivo')}',


                },

                p5CopiaEscritura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5CopiaEscritura')}',


                },

                p5Croquis: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5Croquis')}',


                },

                p5Pago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5Pago')}',


                },

                p5Resolutivo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5Resolutivo')}',


                },

                p6NumeroOficial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6NumeroOficial')}',


                },

                p7EnvioExpediente: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7EnvioExpediente')}',


                },

                p7Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7Observaciones')}',


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
                  if((index+1) < 7)
                    \$('#btntab'+(index+1)).removeAttr('disabled');
                  if (!\$valid) {
                    \$validator.focusInvalid();
                    return false;
                  } else {
                    var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
                    var form_data = new FormData();
                    var datos = \$('#wizard-1').serializeArray().reduce(function(obj, item) {
                                                            if(item.name =='id' || item.value != '')
                                                                form_data.append('TramitesNumeroOficial['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');

                        var archivos= $('#p2CopiaEscritura').prop('files');
					    for(var i=0;i<archivos.length;i++ ){
					        form_data.append('TramitesNumeroOficial[p2CopiaEscritura]['+i+']', archivos[i]);    
					    }

                        var archivos= $('#p2Croquis').prop('files');
					    for(var i=0;i<archivos.length;i++ ){
					        form_data.append('TramitesNumeroOficial[p2Croquis]['+i+']', archivos[i]);    
					    }
                        
					    var archivos= $('#p2Pago').prop('files');
					    for(var i=0;i<archivos.length;i++ ){
					        form_data.append('TramitesNumeroOficial[p2Pago]['+i+']', archivos[i]);    
					    }

					    var archivos= $('#p4Resolutivo').prop('files');
					    for(var i=0;i<archivos.length;i++ ){
					        form_data.append('TramitesNumeroOficial[p4Resolutivo]['+i+']', archivos[i]);    
					    }

					    var archivos= $('#p6NumeroOficial').prop('files');
					    for(var i=0;i<archivos.length;i++ ){
					        form_data.append('TramitesNumeroOficial[p6NumeroOficial]['+i+']', archivos[i]);    
					    }


                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramites-numero-oficial/salvar', // point to server-side PHP script 
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
                                            if(data.p2CopiaEscritura){
                                                \$('#p2CopiaEscritura').attr('value',data.p2CopiaEscritura);
                                                \$('#verp5CopiaEscritura').html('ver');
                                                \$('#verp2CopiaEscritura').html('ver');

                                               }
                                            if(data.p2Croquis){
                                                \$('#p2Croquis').attr('value',data.p2Croquis);
                                                \$('#verp5Croquis').html('ver');
                                                \$('#verp2Croquis').html('ver');
                                               }
                                            if(data.p2Pago){
                                                \$('#p2Pago').attr('value',data.p2Pago);
                                                \$('#verp5Pago').html('ver');
                                                \$('#verp2Pago').html('ver');
                                               }
                                            if(data.p4Resolutivo){
                                                \$('#p4Resolutivo').attr('value',data.p4Resolutivo);
                                                \$('#verp5Resolutivo').html('ver');
                                                \$('#verp4Resolutivo').html('ver');
                                            }
                                            if(data.p6NumeroOficial){
                                                \$('#p6NumeroOficial').attr('value',data.p6NumeroOficial);
                                                \$('#verp6NumeroOficial').html('ver');
                                               }

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
