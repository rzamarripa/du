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
/* @var $model app\models\TramiteFusionPredio */
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
                    <h2> Fusión de Predios</h2>
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
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Constancia</span> </a>
                                            </li>
                                           
                                            
                                        </ul>
                                        <?= $form->field($model,'id')->input('hidden',['name'=>'id','id'=>'idTramite'])->label(false);?>                                         
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <h3><strong></strong></h3>
                                        <?php if($permisos[16][USUARIOS::$LEER]){ ?>
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
			                                                    )->input('text',[
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
                                        <?php if($permisos[17][USUARIOS::$LEER]){ ?>
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
                                                    )->fileInput( [ 'accept' => 'application/pdf',
                                                                        'name'=>'p2Escrituras',
                                                                        'id'=>'p2Escrituras'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord && !empty($model->p2Escrituras)): ?>
																											<a href='javascript:void(0);' id='verp2Escrituras' >ver</a>
                                                    <?php endif; ?>                                                
	                                                </div>
		                                            </div>
		                                            <?php /*
		                                            <div class="row">
	                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Pago',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'application/pdf',
                                                                        'name'=>'p2Pago',
                                                                        'id'=>'p2Pago'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                    	<a href='javascript:void(0);' id='verp2Pago' >ver</a>
                                                    <?php endif; ?>                                                
	                                                </div>
		                                            </div>
		                                            */?>
		                                            <div class="row">
	                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Alineamiento',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'application/pdf',
                                                                        'name'=>'p2Alineamiento',
                                                                        'id'=>'p2Alineamiento'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord && !empty($model->p2Alineamiento)): ?>
                                                    	<a href='javascript:void(0);' id='verp2Alineamiento' >ver</a>
                                                    <?php endif; ?>                                                
	                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> 
		                                            <div class="row">
	                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2ReciboDerechos',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'application/pdf',
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
                                                    <?= $form->field($model,'p2PropuestaRelotificacion',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'application/pdf',
                                                                        'name'=>'p2PropuestaRelotificacion',
                                                                        'id'=>'p2PropuestaRelotificacion'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord && !empty($model->p2PropuestaRelotificacion)): ?>
                                                    	<a href='javascript:void(0);' id='verp2PropuestaRelotificacion' >ver</a>
                                                    <?php endif; ?>                                                
	                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> 
		                                            <div class="row">
	                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2CroquisUbicacion',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'application/pdf',
                                                                        'name'=>'p2CroquisUbicacion',
                                                                        'id'=>'p2CroquisUbicacion'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord && !empty($model->p2CroquisUbicacion)): ?>
                                                    	<a href='javascript:void(0);' id='verp2CroquisUbicacion' >ver</a>
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
                                        <?php if($permisos[18][USUARIOS::$LEER]){ ?>
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
                                                    <?= (!$model->isNewRecord && !empty($model->p2ReciboDerechos))? "ver":"";?>
                                                    </a> 

	                                                </div>
		                                            </div>
		                                            <?php /*
		                                            <div class="row">
	                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3Pago')->checkbox([
	                                                    'name'=>'p3Pago',
	                                                    'id'=>'p3Pago'
                                                    ]); ?>                                                   
                                                    <a href='javascript:void(0);' id='verp3Pago' >ver</a> 
	                                                </div>
		                                            </div>
		                                            */?>
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
                                                    <?= $form->field($model,'p3PropuestaRelotificacion')->checkbox([
	                                                    'name'=>'p3PropuestaRelotificacion',
	                                                    'id'=>'p3PropuestaRelotificacion'
                                                    ]); ?>                                                   
                                                    <a href='javascript:void(0);' id='verp3PropuestaRelotificacion' >
                                                    <?= (!$model->isNewRecord && !empty($model->p2PropuestaRelotificacion))? "ver":"";?>
                                                    </a> 
	                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                                            <div class="row">
	                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3CroquisUbicacion')->checkbox([
	                                                    'name'=>'p3CroquisUbicacion',
	                                                    'id'=>'p3CroquisUbicacion'
                                                    ]); ?>                                                   
                                                    <a href='javascript:void(0);' id='verp3CroquisUbicacion' >
                                                    <?= (!$model->isNewRecord && !empty($model->p2CroquisUbicacion))? "ver":"";?>
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
                                        <?php if($permisos[23][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
	                                                    )->textarea('text',[
	                                                                        'class' => 'form-control input-lg',
	                                                                        'placeholder'=>$model->getAttributeLabel('p4ObservacionesSupervisor'),
	                                                                        'name'=>'p4ObservacionesSupervisor',
	                                                                        'id'=>'p4ObservacionesSupervisor'
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
                                        <div class="tab-pane " id="tab5">
                                            <br>
                                            <h3><strong></strong></h3>
                                        <?php if($permisos[19][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
                                              <div class="col-sm-6">
                                                <?= $form->field($model,'p5Constancia',[
                                                'options'=>['class' => 'form-group']]
                                                )->fileInput( [ 'accept' => 'application/pdf',
                                                                    'name'=>'p5Constancia',
                                                                    'id'=>'p5Constancia'        
                                                ]);?>                                                    
                                                                                           
																							</div>
	                                            <div class="col-sm-6">
		                                            <button  id="btnConstancia" type="button" class="btn btn-primary  active">Guardar Constancia de Fusion de Predios</button>
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
                  \$('#btntab5').removeAttr('disabled');
                  
                  if (!\$valid) {
                    \$validator.focusInvalid();
                    return false;
                  } else {
                    var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
                    var form_data = new FormData();
                    var datos = \$('#wizard-1').serializeArray().reduce(function(obj, item) {
                                                            if(item.name =='id' )
                                                                form_data.append('TramiteFusionPredio['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',5);
                  
                    try {
                        console.log('Buscando Archivos');
                
                            var p5Constancia = \$('#p5Constancia').prop('files')[0];
                            if(p5Constancia!==undefined)
                            form_data.append('TramiteFusionPredio[p5Constancia]', p5Constancia);
                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramite-fusion-predio/salvar', // point to server-side PHP script 
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
                                            if(data.p5Constancia!==undefined)
                                                \$('#p5Constancia').attr('value',data.p5Constancia);
                                            \$('#idTramite').val(data.id);
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(4).addClass(
                                              'complete');
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(4).find('.step')
                                            .html('<i class=\'fa fa-check\'></i>');
                                            \$('#observacionesAtras').html('');
                           
                                            \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5Constancia').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
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
                                url: '".Yii::$app->homeUrl."//tramite-fusion-predio/atras', // point to server-side PHP script 
                                dataType: 'json',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                               
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

  
            \$('#verp2Escrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Escrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Escrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ReciboDerechos').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ReciboDerechos')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ReciboDerechos').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2CroquisUbicacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2CroquisUbicacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2CroquisUbicacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2Pago').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Pago')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Pago').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2Alineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Alineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Alineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2PropuestaRelotificacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2PropuestaRelotificacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2PropuestaRelotificacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Escrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Escrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Escrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3ReciboDerechos').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ReciboDerechos')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ReciboDerechos').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3CroquisUbicacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2CroquisUbicacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2CroquisUbicacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Pago').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Pago')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Pago').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Alineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Alineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Alineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3PropuestaRelotificacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2PropuestaRelotificacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2PropuestaRelotificacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5Constancia').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5Constancia')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5Constancia').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4Supervisor').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4Supervisor')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4Supervisor').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
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

                  p2CroquisUbicacion: {
                    required: ".(($model->isNewRecord || empty($model->p2CroquisUbicacion))? "true":"false")."



                  },

                  p2Pago: {
                    required: ".(($model->isNewRecord || empty($model->p2Pago))? "true":"false")."



                  },

                  p2Alineamiento: {
                    required: ".(($model->isNewRecord || empty($model->p2Alineamiento))? "true":"false")."



                  },

                  p2PropuestaRelotificacion: {
                    required: ".(($model->isNewRecord || empty($model->p2PropuestaRelotificacion))? "true":"false")."



                  },

                  p3Escrituras: {
                    required: true



                  },

                  p3ReciboDerechos: {
                    required: true



                  },

                  p3CroquisUbicacion: {
                    required: true



                  },

                  p3Pago: {
                    required: false



                  },

                  p3Alineamiento: {
                    required: true



                  },

                  p3PropuestaRelotificacion: {
                    required: true



                  },

                  p5Constancia: {
                    required: false



                  },

                  p4Supervisor: {
                    required: false



                  },

                  p4ObservacionesSupervisor: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 500


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


                },

                p2ReciboDerechos: {


                },

                p2CroquisUbicacion: {


                },

                p2Pago: {


                },

                p2Alineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Alineamiento')}',


                },

                p2PropuestaRelotificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2PropuestaRelotificacion')}',


                },

                p3Escrituras: {


                },

                p3ReciboDerechos: {


                },

                p3CroquisUbicacion: {


                },

                p3Pago: {


                },

                p3Alineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Alineamiento')}',


                },

                p3PropuestaRelotificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3PropuestaRelotificacion')}',


                },

                p5Constancia: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5Constancia')}',


                },

                p4Supervisor: {


                },

                p4ObservacionesSupervisor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ObservacionesSupervisor')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p4ObservacionesSupervisor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p4ObservacionesSupervisor')} excede el numero de caracteres permitidos',


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
                                                                form_data.append('TramiteFusionPredio['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');

                        var p2Escrituras = $('#p2Escrituras').prop('files')[0];
                        if($('#p2Escrituras').val()!='')
                        	form_data.append('TramiteFusionPredio[p2Escrituras]', p2Escrituras);


                        var p2ReciboDerechos = $('#p2ReciboDerechos').prop('files')[0];
                        if($('#p2ReciboDerechos').val()!='')
                        	form_data.append('TramiteFusionPredio[p2ReciboDerechos]', p2ReciboDerechos);


                        var p2CroquisUbicacion = $('#p2CroquisUbicacion').prop('files')[0];
                        if($('#p2CroquisUbicacion').val()!='')
                        	form_data.append('TramiteFusionPredio[p2CroquisUbicacion]', p2CroquisUbicacion);


                        /*var p2Pago = $('#p2Pago').prop('files')[0];
                        form_data.append('TramiteFusionPredio[p2Pago]', p2Pago);*/


                        var p2Alineamiento = $('#p2Alineamiento').prop('files')[0];
                        if($('#p2Alineamiento').val()!='')
                        	form_data.append('TramiteFusionPredio[p2Alineamiento]', p2Alineamiento);


                        var p2PropuestaRelotificacion = $('#p2PropuestaRelotificacion').prop('files')[0];
                        if($('#p2PropuestaRelotificacion').val()!='')
                        	form_data.append('TramiteFusionPredio[p2PropuestaRelotificacion]', p2PropuestaRelotificacion);


                        var p5Constancia = $('#p5Constancia').prop('files')[0];
                        if($('#p5Constancia').val()!='')
                        	form_data.append('TramiteFusionPredio[p5Constancia]', p5Constancia);



                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramite-fusion-predio/salvar', // point to server-side PHP script 
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
                                            if(data.p2Escrituras!==undefined)
                                            {
                                                \$('#p2Escrituras').attr('value',data.p2Escrituras);
                                                \$('#verp3Escrituras').html('Ver');
                                            }
                                            else{
                                            	\$('#verp3Escrituras').html('');	
                                            }
                                            if(data.p2ReciboDerechos!==undefined){
                                                \$('#p2ReciboDerechos').attr('value',data.p2ReciboDerechos);
                                            	\$('#verp3ReciboDerechos').html('Ver');
                                            }
                                            else{
                                            	\$('#verp3ReciboDerechos').html('');	
                                            }
                                            if(data.p2CroquisUbicacion!==undefined){
                                                \$('#p2CroquisUbicacion').attr('value',data.p2CroquisUbicacion);
                                            	\$('#verp3CroquisUbicacion').html('Ver');
                                            }
                                            else{
                                            	\$('#verp3CroquisUbicacion').html('');	
                                            }
                                            if(data.p2Pago!==undefined){
                                                \$('#p2Pago').attr('value',data.p2Pago);
                                            	\$('#verp3Pago').html('Ver');
                                            }
                                            else{
                                            	\$('#verp3Pago').html('');	
                                            }
                                            if(data.p2Alineamiento!==undefined){
                                                \$('#p2Alineamiento').attr('value',data.p2Alineamiento);
                                            	\$('#verp3Alineamiento').html('Ver');
                                            }
                                            else{
                                            	\$('#verp3Alineamiento').html('');	
                                            }
                                            if(data.p2PropuestaRelotificacion!==undefined){
                                                \$('#p2PropuestaRelotificacion').attr('value',data.p2PropuestaRelotificacion);
                                            	\$('#verp3PropuestaRelotificacion').html('Ver');
                                            }
                                            else{
                                            	\$('#verp3PropuestaRelotificacion').html('');	
                                            }
                                            if(data.p5Constancia!==undefined)
                                                \$('#p5Constancia').attr('value',data.p5Constancia);

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
