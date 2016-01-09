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
							  <?php
									if(isset($_GET["n"]) && $_GET["n"] == "v"){
										echo Html::a('Volver', ['view', 'id' => $_GET["id"]], ['class' => 'btn btn-primary']);
									}else{
										echo Html::a('Volver', ['index'], ['class' => 'btn btn-primary']);		                
									}
								?>
								<br/>
								<br/>
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
                        	<h2 id='observacionesAtras' class="bg-danger"> <?= $model->observaciones; ?> </h2>
                            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id'=> 'wizard-1','novalidat'=>'novalidate']]) ?> 
                                <div id="bootstrap-wizard-1" class="col-sm-12">
                                    <div class="form-bootstrapWizard">
                                        <ul class="bootstrapWizard form-wizard">
                                            <li class="active"  data-target="#step1" style="width:20%">
                                                <a id="btntab1" href="#tab1" data-toggle="tab" > <span class="step">1</span> <span class="title">Solicitud</span> </a>
                                            </li>
                                            <li   data-target="#step2" style="width:20%">
                                                <a id="btntab2" href="#tab2" data-toggle="tab" disabled="disabled"> <span class="step">2</span> <span class="title">Documentos</span> </a>
                                            </li>
                                            <li   data-target="#step3" style="width:20%">
                                                <a id="btntab3" href="#tab3" data-toggle="tab" disabled="disabled"> <span class="step">3</span> <span class="title">Revisión</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:20%">
                                                <a id="btntab4" href="#tab4" data-toggle="tab" disabled="disabled"> <span class="step">4</span> <span class="title">Supervisión</span> </a>
                                            </li>
                                            <li   data-target="#step5" style="width:20%">
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Licencia</span> </a>
                                            </li>
                                           
                                            
                                        </ul>
                                        <?= $form->field($model,'id')->input('hidden',['name'=>'id','id'=>'idTramite'])->label(false);?> 
																				<div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                        	<br>
																					<h3><strong></strong></h3>
																					<?php if($permisos[8][USUARIOS::$LEER]){ ?>
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
			                                                    <?= $form->field($model,'p1NombreSolicitante',[  'showLabels'=>true,
				                                                    'showErrors'=>false,
				                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
				                                                    'options'=>['class' => 'form-group']]
				                                                    )->input('text',[
				                                                                        'class' => 'form-control input-lg',
				                                                                        'placeholder'=>$model->getAttributeLabel('p1NombreSolicitante'),
				                                                                        'name'=>'p1NombreSolicitante',
				                                                                        'id'=>'p1NombreSolicitante'
				                                                                    ]
				                                                    );?> 
			                                                </div>
			                                            	</div>
			                                            	<div class="row">
			                                                <div class="col-sm-12">
													                              <?= $form->field($model,'p1DireccionSolicitante',[  'showLabels'=>true,
				                                                  'showErrors'=>false,
				                                                  //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
				                                                  'options'=>['class' => 'form-group']]
				                                                  )->textarea([
				                                                                      'class' => 'form-control input-lg',
				                                                                      'placeholder'=>$model->getAttributeLabel('p1DireccionSolicitante'),
				                                                                      'name'=>'p1DireccionSolicitante',
				                                                                      'id'=>'p1DireccionSolicitante'
				                                                                  ]
			                                                  );?>
			                                                </div>
			                                            	</div>
				                                            <div class="row">
																											<div class="col-sm-12">
		                                                    <?= $form->field($model,'p1TelefonoSolicitante',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->input('text',[
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1TelefonoSolicitante'),
			                                                                        'name'=>'p1TelefonoSolicitante',
			                                                                        'id'=>'p1TelefonoSolicitante'
			                                                                    ]
		                                                    );?> 
				                                            	</div>
																										</div>
				                                            <div class="row">
																											<div class="col-sm-12">
		                                                    <?= $form->field($model,'p1CorreoSolicitante',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->input('text',[
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1CorreoSolicitante'),
			                                                                        'name'=>'p1CorreoSolicitante',
			                                                                        'id'=>'p1CorreoSolicitante'
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
																										<h3 class="panel-title">Uso de Suelo</h3>
																									</div>
																									<div class="panel-body">                                            
				                                            <div class="row">
				                                              <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1UsoActual',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->input('text',[
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1UsoActual'),
			                                                                        'name'=>'p1UsoActual',
			                                                                        'id'=>'p1UsoActual'
			                                                                    ]
		                                                    );?> 
				                                              </div>
				                                            </div>
				                                            <div class="row">
																											<div class="col-sm-12">
		                                                    <?= $form->field($model,'p1UsoSolicitado',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->input('text',[
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1UsoSolicitado'),
			                                                                        'name'=>'p1UsoSolicitado',
			                                                                        'id'=>'p1UsoSolicitado'
			                                                                    ]
																												);?> 
				                                            	</div>
				                                            </div>
				                                            <div class="row">
																											<div class="col-sm-12">
		                                                    <?= $form->field($model,'p1DescriProceso',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
	                                                      )->textarea([
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1DescriProceso'),
			                                                                        'name'=>'p1DescriProceso',
			                                                                        'id'=>'p1DescriProceso'
			                                                                    ]
																												);?> 
				                                              </div>
				                                            </div>
				                                            <div class="row">
																											<div class="col-sm-12">
		                                                    <?= $form->field($model,'p1NoCajones',[  'showLabels'=>true,
				                                                  'showErrors'=>false,
				                                                  //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
				                                                  'options'=>['class' => 'form-group']]
				                                                  )->input('text',[
				                                                                      'class' => 'form-control input-lg',
				                                                                      'placeholder'=>$model->getAttributeLabel('p1NoCajones'),
				                                                                      'name'=>'p1NoCajones',
				                                                                      'id'=>'p1NoCajones'
				                                                                  ]
				                                                );?> 
				                                              </div>
				                                            </div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
																							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
																								<div class="panel panel-default">
																									<div class="panel-heading">
																										<h3 class="panel-title">Datos del Predio</h3>
																									</div>
																									<div class="panel-body">
																										<div class="row">
																											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
						                                                  <?= $form->field($model,'p1ColoniaPredio',[  'showLabels'=>true,
						                                                    'showErrors'=>false,
						                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
						                                                    'options'=>['class' => 'form-group']]
						                                                    )->input('text',[
						                                                                        'class' => 'form-control input-lg',
						                                                                        'placeholder'=>$model->getAttributeLabel('p1ColoniaPredio'),
						                                                                        'name'=>'p1ColoniaPredio',
						                                                                        'id'=>'p1ColoniaPredio'
						                                                                    ]
																															);?> 
							                                          	</div>
							                                          </div>
						                                            <div class="row">
																													<div class="col-sm-12">
																														<?= $form->field($model,'p1NumeroOficial',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1NumeroOficial'),
					                                                                        'name'=>'p1NumeroOficial',
					                                                                        'id'=>'p1NumeroOficial'
					                                                                    ]
																														);?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
																													<div class="col-sm-12">
				                                                    <?= $form->field($model,'p1NumeroInterio',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1NumeroInterio'),
					                                                                        'name'=>'p1NumeroInterio',
					                                                                        'id'=>'p1NumeroInterio'
					                                                                    ]
																															);?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
																													<div class="col-sm-12">
						                                              	<?= $form->field($model,'p1PobladoPredio',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1PobladoPredio'),
					                                                                        'name'=>'p1PobladoPredio',
					                                                                        'id'=>'p1PobladoPredio'
							                                                                    ]
							                                              );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
						                                            	<div class="col-sm-12">
						                                              	<?= $form->field($model,'p1SindicaturaPredio',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1SindicaturaPredio'),
					                                                                        'name'=>'p1SindicaturaPredio',
					                                                                        'id'=>'p1SindicaturaPredio'
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
																											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																												<br>
																												<h3> Colindancias:</h3>
																												<br>
						                                            <div class="row">
						                                              <div class="col-sm-12">
						                                              	<?= $form->field($model,'p1SuperficiePredio',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1SuperficiePredio'),
					                                                                        'name'=>'p1SuperficiePredio',
					                                                                        'id'=>'p1SuperficiePredio'
					                                                                    ]
							                                              );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
						                                              <div class="col-sm-12">
						                                              	<?= $form->field($model,'p1NortePredio',[  'showLabels'=>true,
						                                                  'showErrors'=>false,
						                                                  //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
						                                                  'options'=>['class' => 'form-group']]
						                                                  )->input('text',[
						                                                                      'class' => 'form-control input-lg',
						                                                                      'placeholder'=>$model->getAttributeLabel('p1NortePredio'),
						                                                                      'name'=>'p1NortePredio',
						                                                                      'id'=>'p1NortePredio'
						                                                                  ]
							                                              );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
						                                              <div class="col-sm-12">
						                                              	<?= $form->field($model,'p1SurPredio',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1SurPredio'),
					                                                                        'name'=>'p1SurPredio',
					                                                                        'id'=>'p1SurPredio'
					                                                                    ]
					                                                  );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
						                                              <div class="col-sm-12">
						                                              	<?= $form->field($model,'p1OrientePredio',[  'showLabels'=>true,
						                                                  'showErrors'=>false,
						                                                  //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
						                                                  'options'=>['class' => 'form-group']]
						                                                  )->input('text',[
						                                                                      'class' => 'form-control input-lg',
						                                                                      'placeholder'=>$model->getAttributeLabel('p1OrientePredio'),
						                                                                      'name'=>'p1OrientePredio',
						                                                                      'id'=>'p1OrientePredio'
						                                                                  ]
						                                                );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
						                                              <div class="col-sm-12">
					                                                  <?= $form->field($model,'p1PonientePredio',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1PonientePredio'),
					                                                                        'name'=>'p1PonientePredio',
					                                                                        'id'=>'p1PonientePredio'
					                                                                    ]
					                                                  );?> 
						                                              </div>
						                                            </div>
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
																										<h3 class="panel-title">Propietario</h3>
																									</div>
																									<div class="panel-body">
				                                            <div class="row">
																											<div class="col-sm-12">
				                                              	<?= $form->field($model,'p1NombrePropietarios',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->input('text',[
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1NombrePropietarios'),
			                                                                        'name'=>'p1NombrePropietarios',
			                                                                        'id'=>'p1NombrePropietarios'
			                                                                    ]
		                                                    );?> 
																											</div>
				                                            </div>
				                                            <div class="row">
				                                            	<div class="col-sm-12">
				                                              	<?= $form->field($model,'p1DireccionPropietarios',[  'showLabels'=>true,
				                                                  'showErrors'=>false,
				                                                  //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
				                                                  'options'=>['class' => 'form-group']]
				                                                  )->textarea([
				                                                                      'class' => 'form-control input-lg',
				                                                                      'placeholder'=>$model->getAttributeLabel('p1DireccionPropietarios'),
				                                                                      'name'=>'p1DireccionPropietarios',
				                                                                      'id'=>'p1DireccionPropietarios'
				                                                                  ]
						                                            );?> 
				                                              </div>
				                                            </div>
				                                            <div class="row">
				                                              <div class="col-sm-12">
				                                              	<?= $form->field($model,'p1TelefonoPropietarios',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->input('text',[
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1TelefonoPropietarios'),
			                                                                        'name'=>'p1TelefonoPropietarios',
			                                                                        'id'=>'p1TelefonoPropietarios'
			                                                                    ]
					                                              );?> 
				                                              </div>
				                                            </div>
				                                            <div class="row">
				                                              <div class="col-sm-12">
				                                              	<?= $form->field($model,'p1CorreoPropietarios',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->input('text',[
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1CorreoPropietarios'),
			                                                                        'name'=>'p1CorreoPropietarios',
			                                                                        'id'=>'p1CorreoPropietarios'
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
																										<h3 class="panel-title">Superficies</h3>
																									</div>
																									<div class="panel-body">        
																										<div class="row">
																											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																												<div class="row">
					                                                <div class="col-sm-12">
				                                                    <?= $form->field($model,'p1PlantaBajaConstruida',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1PlantaBajaConstruida'),
					                                                                        'name'=>'p1PlantaBajaConstruida',
					                                                                        'id'=>'p1PlantaBajaConstruida'
					                                                                    ]
				                                                    );?> 
					                                                </div>
						                                            </div>
						                                            <div class="row">
																													<div class="col-sm-12">
					                                                  <?= $form->field($model,'p1PlantaAltaConstruida',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1PlantaAltaConstruida'),
					                                                                        'name'=>'p1PlantaAltaConstruida',
					                                                                        'id'=>'p1PlantaAltaConstruida'
					                                                                    ]
							                                              );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
																													<div class="col-sm-12">
																														<?= $form->field($model,'p1SegundoNivelConstruida',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1SegundoNivelConstruida'),
					                                                                        'name'=>'p1SegundoNivelConstruida',
					                                                                        'id'=>'p1SegundoNivelConstruida'
					                                                                    ]
							                                              );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
						                                              <div class="col-sm-12">
						                                              	<?= $form->field($model,'p1OtrosConstruida',[  'showLabels'=>true,
							                                              	'showErrors'=>false,
							                                                //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
							                                                'options'=>['class' => 'form-group']]
							                                                )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1OtrosConstruida'),
					                                                                        'name'=>'p1OtrosConstruida',
					                                                                        'id'=>'p1OtrosConstruida'
							                                                                    ]
							                                              );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
						                                              <div class="col-sm-12">
						                                              	<?= $form->field($model,'p1TotalConstruida',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1TotalConstruida'),
					                                                                        'name'=>'p1TotalConstruida',
					                                                                        'id'=>'p1TotalConstruida'
					                                                                    ]
							                                              );?> 
						                                              </div>
						                                            </div>
																											</div>
																											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						                                            <div class="row">
						                                              <div class="col-sm-12">
						                                              	<?= $form->field($model,'p1PlantaAltaXConstruir',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1PlantaAltaXConstruir'),
					                                                                        'name'=>'p1PlantaAltaXConstruir',
					                                                                        'id'=>'p1PlantaAltaXConstruir'
					                                                                    ]
							                                              );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
						                                              <div class="col-sm-12">
						                                              	<?= $form->field($model,'p1PlantaBajaXConstruir',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1PlantaBajaXConstruir'),
					                                                                        'name'=>'p1PlantaBajaXConstruir',
					                                                                        'id'=>'p1PlantaBajaXConstruir'
					                                                                    ]
							                                              );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
						                                              <div class="col-sm-12">
						                                              	<?= $form->field($model,'p1SegundoNivelXConstruir',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1SegundoNivelXConstruir'),
					                                                                        'name'=>'p1SegundoNivelXConstruir',
					                                                                        'id'=>'p1SegundoNivelXConstruir'
					                                                                    ]
							                                              );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
						                                              <div class="col-sm-12">
						                                              	<?= $form->field($model,'p1OtrosXConstruir',[  'showLabels'=>true,
						                                                  'showErrors'=>false,
						                                                  //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
						                                                  'options'=>['class' => 'form-group']]
						                                                  )->input('text',[
						                                                                      'class' => 'form-control input-lg',
						                                                                      'placeholder'=>$model->getAttributeLabel('p1OtrosXConstruir'),
						                                                                      'name'=>'p1OtrosXConstruir',
						                                                                      'id'=>'p1OtrosXConstruir'
						                                                                  ]
								                                            );?> 
						                                              </div>
						                                            </div>
						                                            <div class="row">
						                                              <div class="col-sm-12">
						                                              	<?= $form->field($model,'p1TotalXConstruir',[  'showLabels'=>true,
					                                                    'showErrors'=>false,
					                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                    'options'=>['class' => 'form-group']]
					                                                    )->input('text',[
					                                                                        'class' => 'form-control input-lg',
					                                                                        'placeholder'=>$model->getAttributeLabel('p1TotalXConstruir'),
					                                                                        'name'=>'p1TotalXConstruir',
					                                                                        'id'=>'p1TotalXConstruir'
					                                                                    ]
					                                                  );?> 
						                                            	</div>
						                                            </div>
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
																									    <h3 class="panel-title">Observaciones</h3>
																									</div>
																									<div class="panel-body">
				                                            <div class="row">
																											<div class="col-sm-12">
		                                                    <?= $form->field($model,'p1Observaciones',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->textarea([
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1Observaciones'),
			                                                                        'name'=>'p1Observaciones',
			                                                                        'id'=>'p1Observaciones'
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
																										<h3 class="panel-title">Gestor</h3>
																									</div>
																									<div class="panel-body">
				                                            <div class="row">
																											<div class="col-sm-12">
		                                                    <?= $form->field($model,'p1NombreGestor',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->input('text',[
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1NombreGestor'),
			                                                                        'name'=>'p1NombreGestor',
			                                                                        'id'=>'p1NombreGestor'
			                                                                    ]
			                                                  );?> 
				                                              </div>
				                                            </div>
				                                            <div class="row">
																											<div class="col-sm-12">
		                                                    <?= $form->field($model,'p1DireccionGestor',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->textarea([
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1DireccionGestor'),
			                                                                        'name'=>'p1DireccionGestor',
			                                                                        'id'=>'p1DireccionGestor'
			                                                                    ]
					                                              );?> 
				                                              </div>
				                                            </div>
				                                            <div class="row">
				                                              <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1TelefonoGestor',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->input('text',[
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1TelefonoGestor'),
			                                                                        'name'=>'p1TelefonoGestor',
			                                                                        'id'=>'p1TelefonoGestor'
			                                                                    ]
					                                              );?> 
				                                              </div>
				                                            </div>
				                                            <div class="row">
				                                              <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1CorreoGestor',[  'showLabels'=>true,
			                                                    'showErrors'=>false,
			                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
			                                                    'options'=>['class' => 'form-group']]
			                                                    )->input('text',[
			                                                                        'class' => 'form-control input-lg',
			                                                                        'placeholder'=>$model->getAttributeLabel('p1CorreoGestor'),
			                                                                        'name'=>'p1CorreoGestor',
			                                                                        'id'=>'p1CorreoGestor'
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
                                            <h3><strong></strong></h3>
                                        <?php if($permisos[9][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> 
		                                            <div class="row">
																									<div class="col-sm-12">
	                                                  <?= $form->field($model,'p2Escrituras',[
	                                                  'options'=>['class' => 'form-group']]
	                                                  )->fileInput( [ 'accept' => 'image/jpeg',
	                                                                      'name'=>'p2Escrituras',
	                                                                      'id'=>'p2Escrituras'        
	                                                  ]);?>                                                    
	                                                  <?php if(!$model->isNewRecord && !empty($model->p2Escrituras)): ?>
																											<a href='javascript:void(0);' id='verp2Escrituras' >ver</a>
																										<?php endif; ?>                                                
		                                              </div>
		                                            </div>
																								<div class="row">
                                                	<div class="col-sm-12">
	                                                  <?= $form->field($model,'p2ProyectoArquitectonico',[
	                                                  'options'=>['class' => 'form-group']]
	                                                  )->fileInput( [ 'accept' => 'image/jpeg',
	                                                                      'name'=>'p2ProyectoArquitectonico',
	                                                                      'id'=>'p2ProyectoArquitectonico'        
	                                                  ]);?>                                                    
	                                                  <?php if(!$model->isNewRecord && !empty($model->p2ProyectoArquitectonico)): ?>
	                                                    <a href='javascript:void(0);' id='verp2ProyectoArquitectonico' >ver</a>
																										<?php endif; ?>                                                
																									</div>
                                            		</div>
																								<div class="row">
                                                	<div class="col-sm-12">
                                                  	<?= $form->field($model,'p2OpinionBomberos',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'image/jpeg',
                                                                        'name'=>'p2OpinionBomberos',
                                                                        'id'=>'p2OpinionBomberos'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord && !empty($model->p2OpinionBomberos)): ?>
																											<a href='javascript:void(0);' id='verp2OpinionBomberos' >ver</a>
                                                    <?php endif; ?>                                                
                                                	</div>
                                            		</div>
																								<div class="row">
                                                	<div class="col-sm-12">
                                                    <?= $form->field($model,'p2Sepyc',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'image/jpeg',
                                                                        'name'=>'p2Sepyc',
                                                                        'id'=>'p2Sepyc'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord && !empty($model->p2Sepyc)): ?>
																											<a href='javascript:void(0);' id='verp2Sepyc' >ver</a>
																										<?php endif; ?>                                                
																									</div>
                                            		</div>
																								<div class="row">
                                                	<div class="col-sm-12">
                                                    <?= $form->field($model,'p2Vecinos',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'image/jpeg',
                                                                        'name'=>'p2Vecinos',
                                                                        'id'=>'p2Vecinos'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord && !empty($model->p2Vecinos)): ?>
																											<a href='javascript:void(0);' id='verp2Vecinos' >ver</a>
                                                    <?php endif; ?>                                                
                                                	</div>
                                            		</div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> 
		                                            <div class="row">
		                                            	<div class="col-sm-12">
			                                              <?= $form->field($model,'p2ReciboDerechos',[
	                                                  'options'=>['class' => 'form-group']]
	                                                  )->fileInput( [ 'accept' => 'image/jpeg',
	                                                                      'name'=>'p2ReciboDerechos',
	                                                                      'id'=>'p2ReciboDerechos'        
	                                                  ]);?>                                                    
	                                                  <?php if(!$model->isNewRecord && !empty($model->p2ReciboDerechos)): ?>
																											<a href='javascript:void(0);' id='verp2ReciboDerechos' >ver</a>
																										<?php endif; ?>                                                
																									</div>
			                                          </div>
																								<div class="row">
	                                                <div class="col-sm-12">
		                                                <?= $form->field($model,'p2ImpactoAmbiental',[
		                                                'options'=>['class' => 'form-group']]
		                                                )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                    'name'=>'p2ImpactoAmbiental',
		                                                                    'id'=>'p2ImpactoAmbiental'        
		                                                ]);?>                                                    
		                                                <?php if(!$model->isNewRecord && !empty($model->p2ImpactoAmbiental)): ?>
		                                                  <a href='javascript:void(0);' id='verp2ImpactoAmbiental' >ver</a>
		                                                <?php endif; ?>                                                
	                                                </div>
	                                            	</div>
																								<div class="row">
	                                                <div class="col-sm-12">
		                                                <?= $form->field($model,'p2ProteccionCivil',[
		                                                'options'=>['class' => 'form-group']]
		                                                )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                    'name'=>'p2ProteccionCivil',
		                                                                    'id'=>'p2ProteccionCivil'        
		                                                ]);?>                                                    
		                                                <?php if(!$model->isNewRecord && !empty($model->p2ProteccionCivil)): ?>
																											<a href='javascript:void(0);' id='verp2ProteccionCivil' >ver</a>
																										<?php endif; ?>                                                
																									</div>
	                                            	</div>
																								<div class="row">
	                                                <div class="col-sm-12">
		                                                <?= $form->field($model,'p2Masa',[
		                                                'options'=>['class' => 'form-group']]
		                                                )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                    'name'=>'p2Masa',
		                                                                    'id'=>'p2Masa'        
		                                                ]);?>                                                    
		                                                <?php if(!$model->isNewRecord && !empty($model->p2Masa)): ?>
																											<a href='javascript:void(0);' id='verp2Masa' >ver</a>
																										<?php endif; ?>                                                
																									</div>
	                                            	</div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
																								<div class="row">
		                                            	<div class="col-sm-12">
		                                                <?= $form->field($model,'p2Alineamiento',[
		                                                'options'=>['class' => 'form-group']]
		                                                )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                    'name'=>'p2Alineamiento',
		                                                                    'id'=>'p2Alineamiento'        
		                                                ]);?>                                                    
		                                                <?php if(!$model->isNewRecord && !empty($model->p2Alineamiento)): ?>
																											<a href='javascript:void(0);' id='verp2Alineamiento' >ver</a>
																										<?php endif; ?>                                                
																									</div>
		                                            </div>
																								<div class="row">
	                                                <div class="col-sm-12">
		                                                <?= $form->field($model,'p2ImpactoVial',[
		                                                'options'=>['class' => 'form-group']]
		                                                )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                    'name'=>'p2ImpactoVial',
		                                                                    'id'=>'p2ImpactoVial'        
		                                                ]);?>                                                    
		                                                <?php if(!$model->isNewRecord && !empty($model->p2ImpactoVial)): ?>
																											<a href='javascript:void(0);' id='verp2ImpactoVial' >ver</a>
		                                                <?php endif; ?>                                                
	                                                </div>
	                                            	</div>
																								<div class="row">
	                                                <div class="col-sm-12">
	                                                  <?= $form->field($model,'p2Inah',[
	                                                  'options'=>['class' => 'form-group']]
	                                                  )->fileInput( [ 'accept' => 'image/jpeg',
	                                                                      'name'=>'p2Inah',
	                                                                      'id'=>'p2Inah'        
	                                                  ]);?>                                                    
	                                                  <?php if(!$model->isNewRecord && !empty($model->p2Inah)): ?>
	                                                  	<a href='javascript:void(0);' id='verp2Inah' >ver</a>
	                                                  <?php endif; ?>                                                
	                                                </div>
	                                            	</div>
																								<div class="row">
	                                                <div class="col-sm-12">
		                                                <?= $form->field($model,'p2Aeronautica',[
		                                                'options'=>['class' => 'form-group']]
		                                                )->fileInput( [ 'accept' => 'image/jpeg',
		                                                                    'name'=>'p2Aeronautica',
		                                                                    'id'=>'p2Aeronautica'        
		                                                ]);?>                                                    
		                                                <?php if(!$model->isNewRecord && !empty($model->p2Aeronautica)): ?>
																											<a href='javascript:void(0);' id='verp2Aeronautica' >ver</a>
		                                                <?php endif; ?>                                                
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
                                            <h3><strong></strong></h3>
                                        <?php if($permisos[10][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> 
		                                            <div class="row">
																									<div class="col-sm-12">
	                                                  <?= $form->field($model,'p3Escrituras')->checkbox([
	                                                    'name'=>'p3Escrituras',
	                                                    'id'=>'p3Escrituras'
		                                                ]); ?>                                                   
		                                                <a href='javascript:void(0);' id='verp3Escrituras' >
		                                                <?= (!$model->isNewRecord && !empty($model->p2Escrituras))? "ver":"";?>
		                                                </a> 
		                                              </div>
		                                            </div>
		                                            <div class="row">
		                                              <div class="col-sm-12">
	                                                  <?= $form->field($model,'p3ProyectoArquitectonico')->checkbox([
		                                                  'name'=>'p3ProyectoArquitectonico',
		                                                  'id'=>'p3ProyectoArquitectonico'
	                                                  ]); ?>                                                   
	                                                  <a href='javascript:void(0);' id='verp3ProyectoArquitectonico' >
	                                                  <?= (!$model->isNewRecord && !empty($model->p2ProyectoArquitectonico))? "ver":"";?>
	                                                  </a> 
		                                              </div>
		                                            </div>
		                                            <div class="row">
		                                            	<div class="col-sm-12">
	                                                  <?= $form->field($model,'p3OpinionBomberos')->checkbox([
	                                                    'name'=>'p3OpinionBomberos',
	                                                    'id'=>'p3OpinionBomberos'
	                                                  ]); ?>                                                   
	                                                  <a href='javascript:void(0);' id='verp3OpinionBomberos' >
	                                                  <?= (!$model->isNewRecord && !empty($model->p2OpinionBomberos))? "ver":"";?>
	                                                  </a> 
		                                              </div>
		                                            </div>
		                                            <div class="row">
		                                            	<div class="col-sm-12">
	                                                  <?= $form->field($model,'p3Sepyc')->checkbox([
	                                                    'name'=>'p3Sepyc',
	                                                    'id'=>'p3Sepyc'
	                                                  ]); ?>                                                   
	                                                  <a href='javascript:void(0);' id='verp3Sepyc' >
	                                                  <?= (!$model->isNewRecord && !empty($model->p2Sepyc))? "ver":"";?>
	                                                  </a> 
		                                              </div>
		                                            </div>
		                                            <div class="row">
		                                            	<div class="col-sm-12">
	                                                  <?= $form->field($model,'p3Vecinos')->checkbox([
	                                                    'name'=>'p3Vecinos',
	                                                    'id'=>'p3Vecinos'
	                                                  ]); ?>                                                   
	                                                  <a href='javascript:void(0);' id='verp3Vecinos' >
	                                                  <?= (!$model->isNewRecord && !empty($model->p2Vecinos))? "ver":"";?>
	                                                  </a> 
		                                              </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
																								<div class="row">
																									<div class="col-sm-12">
	                                                  <?= $form->field($model,'p3ReciboDerechos')->checkbox([
	                                                    'name'=>'p3ReciboDerechos',
	                                                    'id'=>'p3ReciboDerechos'
	                                                  ]); ?>                                                   
	                                                  <a href='javascript:void(0);' id='verp3ReciboDerechos' >
	                                                  <?= (!$model->isNewRecord && !empty($model->p2ReciboDerechos))? "ver":"";?>
	                                                  </a> 
	                                                </div>
		                                            </div>
		                                            <div class="row">
																									<div class="col-sm-12">
		                                              	<?= $form->field($model,'p3ImpactoAmbiental')->checkbox([
			                                              'name'=>'p3ImpactoAmbiental',
			                                              'id'=>'p3ImpactoAmbiental'
		                                                ]); ?>                                                   
		                                                <a href='javascript:void(0);' id='verp3ImpactoAmbiental' >
		                                                <?= (!$model->isNewRecord && !empty($model->p2ImpactoAmbiental))? "ver":"";?>
		                                                </a> 
		                                              </div>
		                                            </div>
		                                            <div class="row">
																									<div class="col-sm-12">
	                                                  <?= $form->field($model,'p3ProteccionCivil')->checkbox([
	                                                    'name'=>'p3ProteccionCivil',
	                                                    'id'=>'p3ProteccionCivil'
	                                                  ]); ?>                                                   
	                                                  <a href='javascript:void(0);' id='verp3ProteccionCivil' >
	                                                  <?= (!$model->isNewRecord && !empty($model->p2ProteccionCivil))? "ver":"";?>
	                                                  </a> 
		                                              </div>
		                                            </div>
		                                            <div class="row">
																									<div class="col-sm-12">
	                                                  <?= $form->field($model,'p3Masa')->checkbox([
	                                                    'name'=>'p3Masa',
	                                                    'id'=>'p3Masa'
	                                                  ]); ?>                                                   
	                                                  <a href='javascript:void(0);' id='verp3Masa' >
	                                                  <?= (!$model->isNewRecord && !empty($model->p2Masa))? "ver":"";?>
	                                                  </a> 
		                                              </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
																								<div class="row">
		                                            	<div class="col-sm-12">
		                                              	<?= $form->field($model,'p3Alineamiento')->checkbox([
                                                    'name'=>'p3Alineamiento',
                                                    'id'=>'p3Alineamiento'
	                                                  ]); ?>
	                                                  <a href='javascript:void(0);' id='verp3Alineamiento' >
	                                                  <?= (!$model->isNewRecord && !empty($model->p2Alineamiento))? "ver":"";?>
	                                                  </a> 
		                                              </div>
		                                            </div>
		                                            <div class="row">
		                                            	<div class="col-sm-12">
	                                                  <?= $form->field($model,'p3ImpactoVial')->checkbox([
	                                                    'name'=>'p3ImpactoVial',
	                                                    'id'=>'p3ImpactoVial'
	                                                  ]); ?>                                                   
	                                                  <a href='javascript:void(0);' id='verp3ImpactoVial' >
	                                                  <?= (!$model->isNewRecord && !empty($model->p2ImpactoAmbiental))? "ver":"";?>
	                                                  </a> 
		                                              </div>
		                                            </div>
		                                            <div class="row">
		                                            	<div class="col-sm-12">
                                                    <?= $form->field($model,'p3Inah')->checkbox([
		                                                  'name'=>'p3Inah',
		                                                  'id'=>'p3Inah'
                                                    ]); ?>                                                   
                                                    <a href='javascript:void(0);' id='verp3Inah' >
                                                    <?= (!$model->isNewRecord && !empty($model->p2Inah))? "ver":"";?>
                                                    </a> 
		                                              </div>
		                                            </div>
		                                            <div class="row">
		                                              <div class="col-sm-12">
	                                                  <?= $form->field($model,'p3Aeronautica')->checkbox([
		                                                  'name'=>'p3Aeronautica',
		                                                  'id'=>'p3Aeronautica'
	                                                  ]); ?>                                                   
	                                                  <a href='javascript:void(0);' id='verp3Aeronautica' >
	                                                  <?= (!$model->isNewRecord && !empty($model->p2Aeronautica))? "ver":"";?>
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
                                            <h3><strong></strong></h3>
                                        <?php if($permisos[11][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 		
		                                            <div class="row">
		                                              <div class="col-sm-12">
	                                                  <?= $form->field($model,'p4Supervisor')->checkbox([
	                                                    'name'=>'p4Supervisor',
	                                                    'id'=>'p4Supervisor'
	                                                  ]); ?>                                                   
	                                                  
		                                              </div>
		                                            </div>
																							
		                                            <div class="row">
		                                            	<div class="col-sm-12">
	                                                  <?= $form->field($model,'p4ObservacionesSupervisor',[  'showLabels'=>false,
	                                                    'showErrors'=>false,
	                                                    //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
	                                                    'options'=>['class' => 'form-group']]
	                                                    )->textarea([
	                                                                        'class' => 'form-control input-lg',
	                                                                        'placeholder'=>$model->getAttributeLabel('p4ObservacionesSupervisor'),
	                                                                        'name'=>'p4ObservacionesSupervisor',
	                                                                        'id'=>'p4ObservacionesSupervisor'
	                                                                    ]
	                                                  );?> 
		                                            	</div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																								<div class="row">																						
		                                              <div class="col-sm-12">
		                                              </div>
																								</div>
																								<div class="row">																						
		                                              <div class="col-sm-12">
		                                                <?= $form->field($model,'p4ExpSupervisor',[
		                                                'options'=>['class' => 'form-group']]
		                                                )->fileInput([  'accept' => 'image/jpeg',
		                                                                    'name'=>'p4ExpSupervisor',
		                                                                    'id'=>'p4ExpSupervisor'
		                                                ]);?>
		                                                <a href='javascript:void(0);' id='verp4ExpSupervisor' >
	                                                  	<?= (!$model->isNewRecord && !empty($model->p4ExpSupervisor))? "ver":"";?>
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
                                        <div class="tab-pane " id="tab5">
                                            <br>
                                            <h3><strong></strong></h3>
                                        <?php if($permisos[20][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-sm-6">
	                                              <?= $form->field($model,'p5Constancia',[
			                                              'options'=>['class' => 'form-group']]
			                                              )->fileInput( [ 'accept' => 'image/jpeg',
	                                                                  'name'=>'p5Constancia',
	                                                                  'id'=>'p5Constancia'        
	                                              ]);?>      
	                                              <a href='javascript:void(0);' id='verp5Constancia' >
	                                               	<?= (!$model->isNewRecord && !empty($model->p5Constancia))? "ver":"";?>
	                                              </a>  	                                                                                              
	                                            </div>
	                                            <div class="col-sm-6">
		                                            <button  id="btnConstancia" type="button" class="btn btn-primary  active">Guardar Licencia de Uso de Suelo</button>
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Documentos'], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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

            \$('#btnGuardarRevision').click(function() {
                    var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
                    var form_data = new FormData();
                    form_data.append('_csrf',csrfToken);
                    form_data.append('id',\$('#idTramite').val());
                    form_data.append('observacion',\$('#observacion').val());
                    form_data.append('pasoatras',\$('#pasoatras').val());
                   
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."//tramite-uso-de-suelo/atras', // point to server-side PHP script 
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
                                                for (var i = \$('#pasoatras').val(); i <= 5; i++) {
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
                rrurl=\"". Yii::$app->urlManager->createAbsoluteUrl(['tramite-uso-de-suelo/view-imagen'])."\"
                rrurl= rrurl+'?id='+\$('#idTramite').val();
                rrurl= rrurl+'&tipoDocumento='+encodeURIComponent(tipoimagen);
                
                console.log(rrurl);
                \$('#dialog_simple').html('<img src=\"'+rrurl+'\" width=\"100%\" height=\"500\">');
                return false;
			};

            \$('#verp2Escrituras').click(function() {
                return verimagen('{$model->getAttributeLabel('p2Escrituras')}');
            });

  
            \$('#verp2ReciboDerechos').click(function() {
                return verimagen('{$model->getAttributeLabel('p2ReciboDerechos')}');
            });

  
            \$('#verp2Alineamiento').click(function() {
                return verimagen('{$model->getAttributeLabel('p2Alineamiento')}');
            });

  
            \$('#verp2ProyectoArquitectonico').click(function() {
                return verimagen('{$model->getAttributeLabel('p2ProyectoArquitectonico')}');
            });

  
            \$('#verp2ImpactoAmbiental').click(function() {
                return verimagen('{$model->getAttributeLabel('p2ImpactoAmbiental')}');
            });

  
            \$('#verp2ImpactoVial').click(function() {
            	return verimagen('{$model->getAttributeLabel('p2ImpactoVial')}');  
            });

  
            \$('#verp2OpinionBomberos').click(function() {
                return verimagen('{$model->getAttributeLabel('p2OpinionBomberos')}');
            });

  
            \$('#verp2ProteccionCivil').click(function() {
                return verimagen('{$model->getAttributeLabel('p2ProteccionCivil')}');
            });

  
            \$('#verp2Inah').click(function() { 
                return verimagen('{$model->getAttributeLabel('p2Inah')}');
            });

  
            \$('#verp2Sepyc').click(function() {
            	return verimagen('{$model->getAttributeLabel('p2Sepyc')}');
            });

  
            \$('#verp2Masa').click(function() {
                return verimagen('{$model->getAttributeLabel('p2Masa')}');
                
            });

  
            \$('#verp2Aeronautica').click(function() {
                return verimagen('{$model->getAttributeLabel('p2Aeronautica')}');
            });

  
            \$('#verp2Vecinos').click(function() {
                return verimagen('{$model->getAttributeLabel('p2Vecinos')}');
            });

  
            \$('#verp3Escrituras').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p2Escrituras')}');
            });

  
            \$('#verp3ReciboDerechos').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p2ReciboDerechos')}');
            });

  
            \$('#verp3Alineamiento').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p2Alineamiento')}');
            });

  
            \$('#verp3ProyectoArquitectonico').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p2ProyectoArquitectonico')}');
            });

  
            \$('#verp3ImpactoAmbiental').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p2ImpactoAmbiental')}');
            });

  
            \$('#verp3ImpactoVial').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p2ImpactoVial')}');
            });

  
            \$('#verp3OpinionBomberos').click(function() {
                return verimagen('{$model->getAttributeLabel('p2OpinionBomberos')}');
            });

  
            \$('#verp3ProteccionCivil').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p2ProteccionCivil')}');
            });

  
            \$('#verp3Inah').click(function() {
            
                return verimagen('{$model->getAttributeLabel('p2Inah')}');
            });

  
            \$('#verp3Sepyc').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p2Sepyc')}');
            });

  
            \$('#verp3Masa').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p2Masa')}');
            });

  
            \$('#verp3Aeronautica').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p2Aeronautica')}');
            });

  
            \$('#verp3Vecinos').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p2Vecinos')}');
            });

  
            \$('#verp4Supervisor').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p4Supervisor')}');
            });
			
			\$('#verp4ExpSupervisor').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p4ExpSupervisor')}');
            });

			\$('#verp5Constancia').click(function() {
                
                return verimagen('{$model->getAttributeLabel('p5Constancia')}');
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

                  p1NombreSolicitante: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1DireccionSolicitante: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p1TelefonoSolicitante: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1CorreoSolicitante: {
                    required: false
                    
                    ,email:true 



                  },

                  p1UsoActual: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1UsoSolicitado: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1DescriProceso: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1NoCajones: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 20


                  },

                  p1CallePredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1ColoniaPredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1NumeroOficial: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1NumeroInterio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1PobladoPredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1SindicaturaPredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1ClaveCatastralPredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 30


                  },

                  p1SuperficiePredio: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1NortePredio: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1SurPredio: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1OrientePredio: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1PonientePredio: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1NombrePropietarios: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1DireccionPropietarios: {
                    required: false
                    
                    ,minlength: 1



                  },

                  p1TelefonoPropietarios: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1CorreoPropietarios: {
                    required: false
                    
                    ,email:true 



                  },

                  p1FirmaSolicitante: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1FirmaPropietarios: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1PlantaBajaConstruida: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1PlantaAltaConstruida: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1SegundoNivelConstruida: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1OtrosConstruida: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1TotalConstruida: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1PlantaAltaXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1PlantaBajaXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1SegundoNivelXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1OtrosXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1TotalXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0



                  },

                  p1Observaciones: {
                    required: false
                    
                    ,minlength: 1



                  },

                  p1Sellos: {
                    required: false
                    
                    ,minlength: 1



                  },

                  p1NombreGestor: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1DireccionGestor: {
                    required: false
                    
                    ,minlength: 1



                  },

                  p1TelefonoGestor: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1CorreoGestor: {
                    required: false
                    
                    ,email:true 



                  },

                  p1FirmaGestor: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p2Escrituras: {
                    required: ".(($model->isNewRecord || empty($model->p2Escrituras))? "true":"false")."


                  },

                  p2ReciboDerechos: {
                    required: ".(($model->isNewRecord || empty($model->p2ReciboDerechos))? "true":"false")."



                  },

                  p2Alineamiento: {
                    required: ".(($model->isNewRecord || empty($model->p2Alineamiento))? "true":"false")."



                  },

                  p2ProyectoArquitectonico: {
                    required: ".(($model->isNewRecord || empty($model->p2ProyectoArquitectonico))? "true":"false")."



                  },

                  p2ImpactoAmbiental: {
                    required: false



                  },

                  p2ImpactoVial: {
                    required: false



                  },

                  p2OpinionBomberos: {
                    required: false



                  },

                  p2ProteccionCivil: {
                    required: false



                  },

                  p2Inah: {
                    required: false



                  },

                  p2Sepyc: {
                    required: false



                  },

                  p2Masa: {
                    required: false



                  },

                  p2Aeronautica: {
                    required: false



                  },

                  p2Vecinos: {
                    required: false



                  },

                  p3Escrituras: {
                    required: true



                  },

                  p3ReciboDerechos: {
                    required: true



                  },

                  p3Alineamiento: {
                    required: true



                  },

                  p3ProyectoArquitectonico: {
                    required: true



                  },

                  p3ImpactoAmbiental: {
                    required: false



                  },

                  p3ImpactoVial: {
                    required: false



                  },

                  p3OpinionBomberos: {
                    required: false



                  },

                  p3ProteccionCivil: {
                    required: false



                  },

                  p3Inah: {
                    required: false



                  },

                  p3Sepyc: {
                    required: false



                  },

                  p3Masa: {
                    required: false



                  },

                  p3Aeronautica: {
                    required: false



                  },

                  p3Vecinos: {
                    required: false



                  },

                  p4Supervisor: {
                    required: false



                  },

                  p4ObservacionesSupervisor: {
                    required: false
                    
                    ,minlength: 1



                  },

                  p5Constancia: {
                    required: false



                  },
                },
                
                messages: {
                p1NombreSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NombreSolicitante')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NombreSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NombreSolicitante')} excede el numero de caracteres permitidos',


                },

                p1DireccionSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DireccionSolicitante')}',


                },

                p1TelefonoSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TelefonoSolicitante')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoSolicitante')} excede el numero de caracteres permitidos',


                },

                p1CorreoSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1CorreoSolicitante')}',
                  
                  email: 'El Valor de {$model->getAttributeLabel('p1CorreoSolicitante')} no es valido',


                },

                p1UsoActual: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1UsoActual')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1UsoActual')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1UsoActual')} excede el numero de caracteres permitidos',


                },

                p1UsoSolicitado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1UsoSolicitado')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1UsoSolicitado')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1UsoSolicitado')} excede el numero de caracteres permitidos',


                },

                p1DescriProceso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DescriProceso')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1DescriProceso')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1DescriProceso')} excede el numero de caracteres permitidos',


                },

                p1NoCajones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NoCajones')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NoCajones')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NoCajones')} excede el numero de caracteres permitidos',


                },

                p1CallePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1CallePredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1CallePredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1CallePredio')} excede el numero de caracteres permitidos',


                },

                p1ColoniaPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ColoniaPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ColoniaPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ColoniaPredio')} excede el numero de caracteres permitidos',


                },

                p1NumeroOficial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NumeroOficial')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NumeroOficial')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NumeroOficial')} excede el numero de caracteres permitidos',


                },

                p1NumeroInterio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NumeroInterio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NumeroInterio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NumeroInterio')} excede el numero de caracteres permitidos',


                },

                p1PobladoPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PobladoPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1PobladoPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1PobladoPredio')} excede el numero de caracteres permitidos',


                },

                p1SindicaturaPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1SindicaturaPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1SindicaturaPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1SindicaturaPredio')} excede el numero de caracteres permitidos',


                },

                p1ClaveCatastralPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ClaveCatastralPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ClaveCatastralPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ClaveCatastralPredio')} excede el numero de caracteres permitidos',


                },

                p1SuperficiePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1SuperficiePredio')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1SuperficiePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1SuperficiePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1SuperficiePredio')} es demasiado grande',


                },

                p1NortePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NortePredio')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1NortePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1NortePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1NortePredio')} es demasiado grande',


                },

                p1SurPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1SurPredio')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1SurPredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1SurPredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1SurPredio')} es demasiado grande',


                },

                p1OrientePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1OrientePredio')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1OrientePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1OrientePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1OrientePredio')} es demasiado grande',


                },

                p1PonientePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PonientePredio')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1PonientePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PonientePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PonientePredio')} es demasiado grande',


                },

                p1NombrePropietarios: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NombrePropietarios')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NombrePropietarios')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NombrePropietarios')} excede el numero de caracteres permitidos',


                },

                p1DireccionPropietarios: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DireccionPropietarios')}',


                },

                p1TelefonoPropietarios: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TelefonoPropietarios')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoPropietarios')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoPropietarios')} excede el numero de caracteres permitidos',


                },

                p1CorreoPropietarios: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1CorreoPropietarios')}',
                  
                  email: 'El Valor de {$model->getAttributeLabel('p1CorreoPropietarios')} no es valido',


                },

                p1FirmaSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1FirmaSolicitante')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1FirmaSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1FirmaSolicitante')} excede el numero de caracteres permitidos',


                },

                p1FirmaPropietarios: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1FirmaPropietarios')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1FirmaPropietarios')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1FirmaPropietarios')} excede el numero de caracteres permitidos',


                },

                p1PlantaBajaConstruida: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PlantaBajaConstruida')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaConstruida')} es demasiado grande',


                },

                p1PlantaAltaConstruida: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PlantaAltaConstruida')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaConstruida')} es demasiado grande',


                },

                p1SegundoNivelConstruida: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1SegundoNivelConstruida')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1SegundoNivelConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1SegundoNivelConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1SegundoNivelConstruida')} es demasiado grande',


                },

                p1OtrosConstruida: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1OtrosConstruida')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1OtrosConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1OtrosConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1OtrosConstruida')} es demasiado grande',


                },

                p1TotalConstruida: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TotalConstruida')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1TotalConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1TotalConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1TotalConstruida')} es demasiado grande',


                },

                p1PlantaAltaXConstruir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PlantaAltaXConstruir')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaXConstruir')} es demasiado grande',


                },

                p1PlantaBajaXConstruir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PlantaBajaXConstruir')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaXConstruir')} es demasiado grande',


                },

                p1SegundoNivelXConstruir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1SegundoNivelXConstruir')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1SegundoNivelXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1SegundoNivelXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1SegundoNivelXConstruir')} es demasiado grande',


                },

                p1OtrosXConstruir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1OtrosXConstruir')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1OtrosXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1OtrosXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1OtrosXConstruir')} es demasiado grande',


                },

                p1TotalXConstruir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TotalXConstruir')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1TotalXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1TotalXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1TotalXConstruir')} es demasiado grande',


                },

                p1Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Observaciones')}',


                },

                p1Sellos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Sellos')}',


                },

                p1NombreGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NombreGestor')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NombreGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NombreGestor')} excede el numero de caracteres permitidos',


                },

                p1DireccionGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DireccionGestor')}',


                },

                p1TelefonoGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TelefonoGestor')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoGestor')} excede el numero de caracteres permitidos',


                },

                p1CorreoGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1CorreoGestor')}',
                  
                  email: 'El Valor de {$model->getAttributeLabel('p1CorreoGestor')} no es valido',


                },

                p1FirmaGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1FirmaGestor')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1FirmaGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1FirmaGestor')} excede el numero de caracteres permitidos',


                },

                p2Escrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Escrituras')}',


                },

                p2ReciboDerechos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ReciboDerechos')}',


                },

                p2Alineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Alineamiento')}',


                },

                p2ProyectoArquitectonico: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ProyectoArquitectonico')}',


                },

                p2ImpactoAmbiental: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ImpactoAmbiental')}',


                },

                p2ImpactoVial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ImpactoVial')}',


                },

                p2OpinionBomberos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2OpinionBomberos')}',


                },

                p2ProteccionCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ProteccionCivil')}',


                },

                p2Inah: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Inah')}',


                },

                p2Sepyc: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Sepyc')}',


                },

                p2Masa: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Masa')}',


                },

                p2Aeronautica: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Aeronautica')}',


                },

                p2Vecinos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Vecinos')}',


                },

                p3Escrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Escrituras')}',


                },

                p3ReciboDerechos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3ReciboDerechos')}',


                },

                p3Alineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Alineamiento')}',


                },

                p3ProyectoArquitectonico: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3ProyectoArquitectonico')}',


                },

                p3ImpactoAmbiental: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3ImpactoAmbiental')}',


                },

                p3ImpactoVial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3ImpactoVial')}',


                },

                p3OpinionBomberos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3OpinionBomberos')}',


                },

                p3ProteccionCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3ProteccionCivil')}',


                },

                p3Inah: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Inah')}',


                },

                p3Sepyc: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Sepyc')}',


                },

                p3Masa: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Masa')}',


                },

                p3Aeronautica: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Aeronautica')}',


                },

                p3Vecinos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Vecinos')}',


                },

                p4Supervisor: {


                },

                p4ObservacionesSupervisor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ObservacionesSupervisor')}',


                },

                p5Constancia: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5Constancia')}',


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
              
              \$('#btnConstancia').click(function() {
                  
  				  var \$valid = \$('#wizard-1').valid();
                  \$('#btntab5').removeAttr('disabled');
                  
                  if (!\$valid) {
                    \$validator.focusInvalid();
                    return false;
                  } else {
                    var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
                    var form_data = new FormData();
                    var datos = \$('#wizard-1').serializeArray().reduce(function(obj, item) {
                                                            if(item.name =='id' )
                                                                form_data.append('TramiteUsoDeSuelo['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',5);
                  
                    try {
                        console.log('Buscando Archivos');
                
                            var p5Constancia = \$('#p5Constancia').prop('files')[0];
                            if(p5Constancia)
                            	form_data.append('TramiteUsoDeSuelo[p5Constancia]', p5Constancia);
                            
                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramite-uso-de-suelo/salvar', // point to server-side PHP script 
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
                                            if(data.p5Constancia){
                                                \$('#p5Constancia').attr('value',data.p5Constancia);
                                                \$('#verp5Constancia').html('Ver');
                                            }
                                            \$('#idTramite').val(data.id);
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(4).addClass(
                                              'complete');
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(4).find('.step')
                                            .html('<i class=\'fa fa-check\'></i>');
                                            \$('#observacionesAtras').html('');
                           
                                            verimagen('{$model->getAttributeLabel('p5Constancia')}');
                                    },
                                error: function(result) {
				                    alert('Se Presento un error al cargar los datos');
				                }

                     });
                    
                   
                  }

                
                return false;
            });
            
            
			

            \$('#bootstrap-wizard-1').bootstrapWizard({
                'tabClass': 'form-wizard',
                'onNext': function (tab, navigation, index) {
                  var \$valid = \$('#wizard-1').valid();
                  \$('#btntab'+index).removeAttr('disabled');
                  if((index+1) < 5)
                    \$('#btntab'+(index+1)).removeAttr('disabled');
                  if (!\$valid) {
                    \$validator.focusInvalid();
                    return false;
                  } else {
                    var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
                    var form_data = new FormData();
                    var datos = \$('#wizard-1').serializeArray().reduce(function(obj, item) {
                                                            if(item.name =='id' || item.value != '')
                                                                form_data.append('TramiteUsoDeSuelo['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');
                        var p2Escrituras = $('#p2Escrituras').prop('files')[0];
                        if($('#p2Escrituras').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2Escrituras]', p2Escrituras);


                        var p2ReciboDerechos = $('#p2ReciboDerechos').prop('files')[0];
                        if($('#p2ReciboDerechos').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2ReciboDerechos]', p2ReciboDerechos);


                        var p2Alineamiento = $('#p2Alineamiento').prop('files')[0];
                        if($('#p2Alineamiento').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2Alineamiento]', p2Alineamiento);


                        var p2ProyectoArquitectonico = $('#p2ProyectoArquitectonico').prop('files')[0];
                        if($('#p2ProyectoArquitectonico').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2ProyectoArquitectonico]', p2ProyectoArquitectonico);


                        var p2ImpactoAmbiental = $('#p2ImpactoAmbiental').prop('files')[0];
                        if($('#p2ImpactoAmbiental').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2ImpactoAmbiental]', p2ImpactoAmbiental);


                        var p2ImpactoVial = $('#p2ImpactoVial').prop('files')[0];
                        if($('#p2ImpactoVial').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2ImpactoVial]', p2ImpactoVial);


                        var p2OpinionBomberos = $('#p2OpinionBomberos').prop('files')[0];
                        if($('#p2OpinionBomberos').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2OpinionBomberos]', p2OpinionBomberos);


                        var p2ProteccionCivil = $('#p2ProteccionCivil').prop('files')[0];
                        if($('#p2ProteccionCivil').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2ProteccionCivil]', p2ProteccionCivil);


                        var p2Inah = $('#p2Inah').prop('files')[0];
                        if($('#p2Inah').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2Inah]', p2Inah);


                        var p2Sepyc = $('#p2Sepyc').prop('files')[0];
                        if($('#p2Sepyc').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2Sepyc]', p2Sepyc);


                        var p2Masa = $('#p2Masa').prop('files')[0];
                        if($('#p2Masa').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2Masa]', p2Masa);


                        var p2Aeronautica = $('#p2Aeronautica').prop('files')[0];
                        if($('#p2Aeronautica').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2Aeronautica]', p2Aeronautica);


                        var p2Vecinos = $('#p2Vecinos').prop('files')[0];
                        if($('#p2Vecinos').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p2Vecinos]', p2Vecinos);


                        var p5Constancia = $('#p5Constancia').prop('files')[0];
                        if($('#p5Constancia').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p5Constancia]', p5Constancia);
                            

                        var p4ExpSupervisor = $('#p4ExpSupervisor').prop('files')[0];
                        if($('#p4ExpSupervisor').val()!='')
                        	form_data.append('TramiteUsoDeSuelo[p4ExpSupervisor]', p4ExpSupervisor);




                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramite-uso-de-suelo/salvar', // point to server-side PHP script 
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
                                            if(data.p2Escrituras){
                                                \$('#p2Escrituras').attr('value',data.p2Escrituras);
                                            	\$('#verp3Escrituras').html('Ver');
                                            }
                                            if(data.p2ReciboDerechos){
                                                \$('#p2ReciboDerechos').attr('value',data.p2ReciboDerechos);
                                            	\$('#verp3ReciboDerechos').html('Ver');
                                            }
                                            if(data.p2Alineamiento){
                                                \$('#p2Alineamiento').attr('value',data.p2Alineamiento);
                                            	\$('#verp3Alineamiento').html('Ver');
                                            }
                                            if(data.p2ProyectoArquitectonico){
                                                \$('#p2ProyectoArquitectonico').attr('value',data.p2ProyectoArquitectonico);
                                            	\$('#verp3ProyectoArquitectonico').html('Ver');
                                            }
                                            if(data.p2ImpactoAmbiental){
                                                \$('#p2ImpactoAmbiental').attr('value',data.p2ImpactoAmbiental);
                                            	\$('#verp3ImpactoAmbiental').html('Ver');
                                            }
                                            if(data.p2ImpactoVial){
                                                \$('#p2ImpactoVial').attr('value',data.p2ImpactoVial);
                                            	\$('#verp3ImpactoVial').html('Ver');
                                            }
                                            if(data.p2OpinionBomberos){
                                                \$('#p2OpinionBomberos').attr('value',data.p2OpinionBomberos);
                                            	\$('#verp3OpinionBomberos').html('Ver');
                                            }
                                            if(data.p2ProteccionCivil){
                                                \$('#p2ProteccionCivil').attr('value',data.p2ProteccionCivil);
                                            	\$('#verp3ProteccionCivil').html('Ver');
                                            }
                                            if(data.p2Inah){
                                                \$('#p2Inah').attr('value',data.p2Inah);
                                            	\$('#verp3Inah').html('Ver');
                                            }
                                            if(data.p2Sepyc){
                                                \$('#p2Sepyc').attr('value',data.p2Sepyc);
                                            	\$('#verp3Sepyc').html('Ver');
                                            }
                                            if(data.p2Masa){
                                                \$('#p2Masa').attr('value',data.p2Masa);
                                            	\$('#verp3Masa').html('Ver');
                                            }
                                            if(data.p2Aeronautica){
                                                \$('#p2Aeronautica').attr('value',data.p2Aeronautica);
                                            	\$('#verp3Aeronautica').html('Ver');
                                            }
                                            if(data.p2Vecinos){
                                                \$('#p2Vecinos').attr('value',data.p2Vecinos);
                                            	\$('#verp3Vecinos').html('Ver');
                                            }
                                            if(data.p4ExpSupervisor){
                                                \$('#p4ExpSupervisor').attr('value',data.p4ExpSupervisor);
                                            	\$('#verp4ExpSupervisor').html('Ver');
                                            }
                                            if(data.p5Constancia){
                                                \$('#p5Constancia').attr('value',data.p5Constancia);
                                                \$('#verp5Constancia').html('Ver');
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
