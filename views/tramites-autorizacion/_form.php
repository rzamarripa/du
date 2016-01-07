

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
/* @var $model app\models\TramitesAutorizacion */
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
                    <h2> Autorización de Fraccionamiento</h2>
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
                                            <li class="active"  data-target="#step1" style="width:8.3333333333333%">
                                                <a id="btntab1" href="#tab1" data-toggle="tab" > <span class="step">1</span> <span class="title">Solicitud</span> </a>
                                            </li>
                                            <li   data-target="#step2" style="width:8.3333333333333%">
                                                <a id="btntab2" href="#tab2" data-toggle="tab" disabled="disabled"> <span class="step">2</span> <span class="title">Supervisión</span> </a>
                                            </li>
                                            <li   data-target="#step3" style="width:8.3333333333333%">
                                                <a id="btntab3" href="#tab3" data-toggle="tab" disabled="disabled"> <span class="step">3</span> <span class="title">Constancia de Zonificación</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:8.3333333333333%">
                                                <a id="btntab4" href="#tab4" data-toggle="tab" disabled="disabled"> <span class="step">4</span> <span class="title">Revisión</span> </a>
                                            </li>
                                            <li   data-target="#step5" style="width:8.3333333333333%">
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Documentos</span> </a>
                                            </li>
                                            <li   data-target="#step6" style="width:8.3333333333333%">
                                                <a id="btntab6" href="#tab6" data-toggle="tab" disabled="disabled"> <span class="step">6</span> <span class="title">Comité de Fraccionamiento</span> </a>
                                            </li>
                                            <li   data-target="#step7" style="width:8.3333333333333%">
                                                <a id="btntab7" href="#tab7" data-toggle="tab" disabled="disabled"> <span class="step">7</span> <span class="title">Aprobación de Proyecto</span> </a>
                                            </li>
                                            <li   data-target="#step8" style="width:8.3333333333333%">
                                                <a id="btntab8" href="#tab8" data-toggle="tab" disabled="disabled"> <span class="step">8</span> <span class="title">Expediente Técnico</span> </a>
                                            </li>
                                            <li   data-target="#step9" style="width:8.3333333333333%">
                                                <a id="btntab9" href="#tab9" data-toggle="tab" disabled="disabled"> <span class="step">9</span> <span class="title">Revisión</span> </a>
                                            </li>
                                            <li   data-target="#step10" style="width:8.3333333333333%">
                                                <a id="btntab10" href="#tab10" data-toggle="tab" disabled="disabled"> <span class="step">10</span> <span class="title">Autorización de Cabildo</span> </a>
                                            </li>
                                            <li   data-target="#step11" style="width:8.3333333333333%">
                                                <a id="btntab11" href="#tab11" data-toggle="tab" disabled="disabled"> <span class="step">11</span> <span class="title">Expediente Ejecutivo</span> </a>
                                            </li>
                                            <li   data-target="#step12" style="width:8.3333333333333%">
                                                <a id="btntab12" href="#tab12" data-toggle="tab" disabled="disabled"> <span class="step">12</span> <span class="title">Revisión</span> </a>
                                            </li>
                                           
                                            
                                        </ul>
                                        <?= $form->field($model,'id')->input('hidden',['name'=>'id','id'=>'idTramite'])->label(false);?>                                         <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <br>
                                        <?php if($permisos[36][USUARIOS::$LEER]){ ?>
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
				                                                    <?= $form->field($model,'p1DescripcionProceso',[  'showLabels'=>true,
				                                                                                        'showErrors'=>false,
				                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
				                                                                                        'options'=>['class' => 'form-group']]
				                                                                                        )->textarea([
				                                                                                                            'class' => 'form-control input-lg',
				                                                                                                            'placeholder'=>$model->getAttributeLabel('p1DescripcionProceso'),
				                                                                                                            'name'=>'p1DescripcionProceso',
				                                                                                                            'id'=>'p1DescripcionProceso'
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
																												<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																													<br>
																													<h3> Colindancias:</h3>
																													<br>
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
																												<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
							                                                    <?= $form->field($model,'p1NorOrientePredio',[  'showLabels'=>true,
							                                                                                        'showErrors'=>false,
							                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
							                                                                                        'options'=>['class' => 'form-group']]
							                                                                                        )->input('text',[
							                                                                                                            'class' => 'form-control input-lg',
							                                                                                                            'placeholder'=>$model->getAttributeLabel('p1NorOrientePredio'),
							                                                                                                            'name'=>'p1NorOrientePredio',
							                                                                                                            'id'=>'p1NorOrientePredio'
							                                                                                                        ]
							                                                                                        );?> 
							                                                </div>
							                                            </div>
							                                            <div class="row">
							                                                <div class="col-sm-12">
							                                                    <?= $form->field($model,'p1SurOrientePredio',[  'showLabels'=>true,
							                                                                                        'showErrors'=>false,
							                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
							                                                                                        'options'=>['class' => 'form-group']]
							                                                                                        )->input('text',[
							                                                                                                            'class' => 'form-control input-lg',
							                                                                                                            'placeholder'=>$model->getAttributeLabel('p1SurOrientePredio'),
							                                                                                                            'name'=>'p1SurOrientePredio',
							                                                                                                            'id'=>'p1SurOrientePredio'
							                                                                                                        ]
							                                                                                        );?> 
							                                                </div>
							                                            </div>
							                                            <div class="row">
							                                                <div class="col-sm-12">
							                                                    <?= $form->field($model,'p1NorPonientePredio',[  'showLabels'=>true,
							                                                                                        'showErrors'=>false,
							                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
							                                                                                        'options'=>['class' => 'form-group']]
							                                                                                        )->input('text',[
							                                                                                                            'class' => 'form-control input-lg',
							                                                                                                            'placeholder'=>$model->getAttributeLabel('p1NorPonientePredio'),
							                                                                                                            'name'=>'p1NorPonientePredio',
							                                                                                                            'id'=>'p1NorPonientePredio'
							                                                                                                        ]
							                                                                                        );?> 
							                                                </div>
							                                            </div>
							                                            <div class="row">
							                                                <div class="col-sm-12">
							                                                    <?= $form->field($model,'p1SurPonientePredio',[  'showLabels'=>true,
							                                                                                        'showErrors'=>false,
							                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
							                                                                                        'options'=>['class' => 'form-group']]
							                                                                                        )->input('text',[
							                                                                                                            'class' => 'form-control input-lg',
							                                                                                                            'placeholder'=>$model->getAttributeLabel('p1SurPonientePredio'),
							                                                                                                            'name'=>'p1SurPonientePredio',
							                                                                                                            'id'=>'p1SurPonientePredio'
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
                                            <br>
                                        <?php if($permisos[38][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Supervisor')->checkbox([
		                                                                                                            'name'=>'p3Supervisor',
		                                                                                                            'id'=>'p3Supervisor'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp3Supervisor' >ver</a> 
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
		                                                    <?= $form->field($model,'p3Expediente',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p3Expediente',
		                                                                        'id'=>'p3Expediente'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp3Expediente' >ver</a>
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
                                        <?php if($permisos[37][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Constancia',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2Constancia',
		                                                                        'id'=>'p2Constancia'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2Constancia' >ver</a>
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
                                        <?php if($permisos[39][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Constancia')->checkbox([
		                                                                                                            'name'=>'p4Constancia',
		                                                                                                            'id'=>'p4Constancia'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4Constancia' >ver</a> 
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
                                        <?php if($permisos[40][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5TituloPropiedad',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5TituloPropiedad',
		                                                                        'id'=>'p5TituloPropiedad'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5TituloPropiedad' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoLocalizacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoLocalizacion',
		                                                                        'id'=>'p5PlanoLocalizacion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoLocalizacion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoTopogra',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoTopogra',
		                                                                        'id'=>'p5PlanoTopogra'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoTopogra' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5AnteproyectoLotificacionVialidad',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5AnteproyectoLotificacionVialidad',
		                                                                        'id'=>'p5AnteproyectoLotificacionVialidad'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5AnteproyectoLotificacionVialidad' >ver</a>
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
                                        <div class="tab-pane " id="tab6">
                                            <br>
                                            <br>
                                        <?php if($permisos[41][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
			                                                <h1><strong>Revisión de Documentación</strong></h1>
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6TituloPropiedad')->checkbox([
		                                                                                                            'name'=>'p6TituloPropiedad',
		                                                                                                            'id'=>'p6TituloPropiedad'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6TituloPropiedad' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6PlanoLocalizacion')->checkbox([
		                                                                                                            'name'=>'p6PlanoLocalizacion',
		                                                                                                            'id'=>'p6PlanoLocalizacion'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6PlanoLocalizacion' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6Comentario',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->textarea([
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p6Comentario'),
		                                                                                                            'name'=>'p6Comentario',
		                                                                                                            'id'=>'p6Comentario'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6PlanoTopogra')->checkbox([
		                                                                                                            'name'=>'p6PlanoTopogra',
		                                                                                                            'id'=>'p6PlanoTopogra'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6PlanoTopogra' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6PlanoLotificacionVialidad')->checkbox([
		                                                                                                            'name'=>'p6PlanoLotificacionVialidad',
		                                                                                                            'id'=>'p6PlanoLotificacionVialidad'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6PlanoLotificacionVialidad' >ver</a> 
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
                                        <?php if($permisos[42][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7Aprobacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p7Aprobacion',
		                                                                        'id'=>'p7Aprobacion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp7Aprobacion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7SuperficieGeneral',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7SuperficieGeneral'),
		                                                                                                            'name'=>'p7SuperficieGeneral',
		                                                                                                            'id'=>'p7SuperficieGeneral'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7Vivienda',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7Vivienda'),
		                                                                                                            'name'=>'p7Vivienda',
		                                                                                                            'id'=>'p7Vivienda'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7Comercial',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7Comercial'),
		                                                                                                            'name'=>'p7Comercial',
		                                                                                                            'id'=>'p7Comercial'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7Donacion',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7Donacion'),
		                                                                                                            'name'=>'p7Donacion',
		                                                                                                            'id'=>'p7Donacion'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7AreasVerdes',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7AreasVerdes'),
		                                                                                                            'name'=>'p7AreasVerdes',
		                                                                                                            'id'=>'p7AreasVerdes'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7Vialidad',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7Vialidad'),
		                                                                                                            'name'=>'p7Vialidad',
		                                                                                                            'id'=>'p7Vialidad'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7PlanoLotificacionVialidad',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p7PlanoLotificacionVialidad',
		                                                                        'id'=>'p7PlanoLotificacionVialidad'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp7PlanoLotificacionVialidad' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7Reserva',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7Reserva'),
		                                                                                                            'name'=>'p7Reserva',
		                                                                                                            'id'=>'p7Reserva'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7Otro',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7Otro'),
		                                                                                                            'name'=>'p7Otro',
		                                                                                                            'id'=>'p7Otro'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7NumLotes',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7NumLotes'),
		                                                                                                            'name'=>'p7NumLotes',
		                                                                                                            'id'=>'p7NumLotes'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7DensidadVivienda',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7DensidadVivienda'),
		                                                                                                            'name'=>'p7DensidadVivienda',
		                                                                                                            'id'=>'p7DensidadVivienda'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7DonacionRequerida',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p7DonacionRequerida'),
		                                                                                                            'name'=>'p7DonacionRequerida',
		                                                                                                            'id'=>'p7DonacionRequerida'
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
                                        <div class="tab-pane " id="tab8">
                                            <br>
                                            <br>
                                        <?php if($permisos[43][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
	                                            <div class="row">
	                                                <div class="col-sm-12">
		                                                <h1><strong>Requisitos de Expediente Técnico</strong></h1>
	                                                </div>
	                                            </div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8Solicitud',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8Solicitud',
		                                                                        'id'=>'p8Solicitud'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8Solicitud' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8AcrediteCaracter',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8AcrediteCaracter',
		                                                                        'id'=>'p8AcrediteCaracter'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8AcrediteCaracter' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8ActaConstitutiva',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8ActaConstitutiva',
		                                                                        'id'=>'p8ActaConstitutiva'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8ActaConstitutiva' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8LibertadGravamen',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8LibertadGravamen',
		                                                                        'id'=>'p8LibertadGravamen'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8LibertadGravamen' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8Minuta',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8Minuta',
		                                                                        'id'=>'p8Minuta'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8Minuta' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8PlanoNomenclatura',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8PlanoNomenclatura',
		                                                                        'id'=>'p8PlanoNomenclatura'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8PlanoNomenclatura' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																								<br>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8FactibilidadJapac',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8FactibilidadJapac',
		                                                                        'id'=>'p8FactibilidadJapac'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8FactibilidadJapac' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8FactibilidadCFE',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8FactibilidadCFE',
		                                                                        'id'=>'p8FactibilidadCFE'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8FactibilidadCFE' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8EstudiosHidrologico',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8EstudiosHidrologico',
		                                                                        'id'=>'p8EstudiosHidrologico'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8EstudiosHidrologico' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8Alumbrado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8Alumbrado',
		                                                                        'id'=>'p8Alumbrado'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8Alumbrado' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8ProteccionCivil',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8ProteccionCivil',
		                                                                        'id'=>'p8ProteccionCivil'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8ProteccionCivil' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p8Vialidad',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p8Vialidad',
		                                                                        'id'=>'p8Vialidad'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp8Vialidad' >ver</a>
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
                                        <div class="tab-pane " id="tab9">
                                            <br>
                                            <br>
                                        <?php if($permisos[44][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9Solicitud')->checkbox([
		                                                                                                            'name'=>'p9Solicitud',
		                                                                                                            'id'=>'p9Solicitud'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9Solicitud' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9AcrediteCaracter')->checkbox([
		                                                                                                            'name'=>'p9AcrediteCaracter',
		                                                                                                            'id'=>'p9AcrediteCaracter'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9AcrediteCaracter' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9ActaConstitutiva')->checkbox([
		                                                                                                            'name'=>'p9ActaConstitutiva',
		                                                                                                            'id'=>'p9ActaConstitutiva'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9ActaConstitutiva' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9LibertadGravamen')->checkbox([
		                                                                                                            'name'=>'p9LibertadGravamen',
		                                                                                                            'id'=>'p9LibertadGravamen'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9LibertadGravamen' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9Minuta')->checkbox([
		                                                                                                            'name'=>'p9Minuta',
		                                                                                                            'id'=>'p9Minuta'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9Minuta' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9PlanoNomenclatura')->checkbox([
		                                                                                                            'name'=>'p9PlanoNomenclatura',
		                                                                                                            'id'=>'p9PlanoNomenclatura'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9PlanoNomenclatura' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9Notas',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->textarea([
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p9Notas'),
		                                                                                                            'name'=>'p9Notas',
		                                                                                                            'id'=>'p9Notas'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9FactibilidadJapac')->checkbox([
		                                                                                                            'name'=>'p9FactibilidadJapac',
		                                                                                                            'id'=>'p9FactibilidadJapac'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9FactibilidadJapac' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9FactibilidadCFE')->checkbox([
		                                                                                                            'name'=>'p9FactibilidadCFE',
		                                                                                                            'id'=>'p9FactibilidadCFE'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9FactibilidadCFE' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9EstudiosHidrologico')->checkbox([
		                                                                                                            'name'=>'p9EstudiosHidrologico',
		                                                                                                            'id'=>'p9EstudiosHidrologico'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9EstudiosHidrologico' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9Alumbrado')->checkbox([
		                                                                                                            'name'=>'p9Alumbrado',
		                                                                                                            'id'=>'p9Alumbrado'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9Alumbrado' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9ProteccionCivil')->checkbox([
		                                                                                                            'name'=>'p9ProteccionCivil',
		                                                                                                            'id'=>'p9ProteccionCivil'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9ProteccionCivil' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9Vialidad')->checkbox([
		                                                                                                            'name'=>'p9Vialidad',
		                                                                                                            'id'=>'p9Vialidad'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9Vialidad' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p9Secretaria')->checkbox([
		                                                                                                            'name'=>'p9Secretaria',
		                                                                                                            'id'=>'p9Secretaria'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp9Secretaria' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                	<?= $form->field($model, 'p9FechaEnvio')->widget(\yii\jui\DatePicker::classname(),[
															      'dateFormat' => 'yyyy-MM-dd',
															       ])->textInput(['name'=>'p9FechaEnvio']) ?>
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
                                        <div class="tab-pane " id="tab10">
                                            <br>
                                            <br>
                                        <?php if($permisos[46][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p10Autorizacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p10Autorizacion',
		                                                                        'id'=>'p10Autorizacion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp10Autorizacion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p10MandarProyecto')->checkbox([
		                                                                                                            'name'=>'p10MandarProyecto',
		                                                                                                            'id'=>'p10MandarProyecto'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp10MandarProyecto' >ver</a> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
																								<div class="col-sm-6">
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
                                        <div class="tab-pane " id="tab11">
                                            <br>
                                            <br>
                                        <?php if($permisos[1036][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'P11MemoriaFraccionamiento',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'P11MemoriaFraccionamiento',
		                                                                        'id'=>'P11MemoriaFraccionamiento'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verP11MemoriaFraccionamiento' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11EstudioMecanicaEstructura',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11EstudioMecanicaEstructura',
		                                                                        'id'=>'p11EstudioMecanicaEstructura'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11EstudioMecanicaEstructura' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11MemoriaAguaAlcantarillado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11MemoriaAguaAlcantarillado',
		                                                                        'id'=>'p11MemoriaAguaAlcantarillado'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11MemoriaAguaAlcantarillado' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11MemoriaElectrificacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11MemoriaElectrificacion',
		                                                                        'id'=>'p11MemoriaElectrificacion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11MemoriaElectrificacion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11MemoriaInfraestructura',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11MemoriaInfraestructura',
		                                                                        'id'=>'p11MemoriaInfraestructura'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11MemoriaInfraestructura' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11MemoriaHidrologico',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11MemoriaHidrologico',
		                                                                        'id'=>'p11MemoriaHidrologico'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11MemoriaHidrologico' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11Presupuesto',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11Presupuesto',
		                                                                        'id'=>'p11Presupuesto'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11Presupuesto' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11EstimarPlazo',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11EstimarPlazo',
		                                                                        'id'=>'p11EstimarPlazo'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11EstimarPlazo' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11PagoSupervision',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11PagoSupervision',
		                                                                        'id'=>'p11PagoSupervision'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11PagoSupervision' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11GarantiaCumplimiento',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11GarantiaCumplimiento',
		                                                                        'id'=>'p11GarantiaCumplimiento'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11GarantiaCumplimiento' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11OtorgarEscrituras',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11OtorgarEscrituras',
		                                                                        'id'=>'p11OtorgarEscrituras'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11OtorgarEscrituras' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11PlanoLocalizacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11PlanoLocalizacion',
		                                                                        'id'=>'p11PlanoLocalizacion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11PlanoLocalizacion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11PlanoTopografico',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11PlanoTopografico',
		                                                                        'id'=>'p11PlanoTopografico'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11PlanoTopografico' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11PlanoLotificacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11PlanoLotificacion',
		                                                                        'id'=>'p11PlanoLotificacion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11PlanoLotificacion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11PlanoTrazo',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11PlanoTrazo',
		                                                                        'id'=>'p11PlanoTrazo'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11PlanoTrazo' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11PlanoPerfiles',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11PlanoPerfiles',
		                                                                        'id'=>'p11PlanoPerfiles'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11PlanoPerfiles' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11PlanoAguaPotable',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11PlanoAguaPotable',
		                                                                        'id'=>'p11PlanoAguaPotable'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11PlanoAguaPotable' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11PlanoElectrificacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11PlanoElectrificacion',
		                                                                        'id'=>'p11PlanoElectrificacion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11PlanoElectrificacion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11PlanoAlumbrado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11PlanoAlumbrado',
		                                                                        'id'=>'p11PlanoAlumbrado'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11PlanoAlumbrado' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11PlanoArborizacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11PlanoArborizacion',
		                                                                        'id'=>'p11PlanoArborizacion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11PlanoArborizacion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11ResolucionImpactoAmbiental',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11ResolucionImpactoAmbiental',
		                                                                        'id'=>'p11ResolucionImpactoAmbiental'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11ResolucionImpactoAmbiental' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p11ProyectoVialTransporte',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p11ProyectoVialTransporte',
		                                                                        'id'=>'p11ProyectoVialTransporte'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp11ProyectoVialTransporte' >ver</a>
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
                                        <div class="tab-pane " id="tab12">
                                            <br>
                                            <br>
                                        <?php if($permisos[1037][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'P12MemoriaFraccionamiento')->checkbox([
		                                                                                                            'name'=>'P12MemoriaFraccionamiento',
		                                                                                                            'id'=>'P12MemoriaFraccionamiento'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verP12MemoriaFraccionamiento' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12EstudioMecanicaEstructura')->checkbox([
		                                                                                                            'name'=>'p12EstudioMecanicaEstructura',
		                                                                                                            'id'=>'p12EstudioMecanicaEstructura'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12EstudioMecanicaEstructura' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12MemoriaAguaAlcantarillado')->checkbox([
		                                                                                                            'name'=>'p12MemoriaAguaAlcantarillado',
		                                                                                                            'id'=>'p12MemoriaAguaAlcantarillado'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12MemoriaAguaAlcantarillado' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12MemoriaElectrificacion')->checkbox([
		                                                                                                            'name'=>'p12MemoriaElectrificacion',
		                                                                                                            'id'=>'p12MemoriaElectrificacion'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12MemoriaElectrificacion' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12MemoriaInfraestructura')->checkbox([
		                                                                                                            'name'=>'p12MemoriaInfraestructura',
		                                                                                                            'id'=>'p12MemoriaInfraestructura'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12MemoriaInfraestructura' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12MemoriaHidrologico')->checkbox([
		                                                                                                            'name'=>'p12MemoriaHidrologico',
		                                                                                                            'id'=>'p12MemoriaHidrologico'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12MemoriaHidrologico' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12Presupuesto')->checkbox([
		                                                                                                            'name'=>'p12Presupuesto',
		                                                                                                            'id'=>'p12Presupuesto'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12Presupuesto' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12EstimarPlazo')->checkbox([
		                                                                                                            'name'=>'p12EstimarPlazo',
		                                                                                                            'id'=>'p12EstimarPlazo'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12EstimarPlazo' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12PagoSupervision')->checkbox([
		                                                                                                            'name'=>'p12PagoSupervision',
		                                                                                                            'id'=>'p12PagoSupervision'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12PagoSupervision' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12GarantiaCumplimiento')->checkbox([
		                                                                                                            'name'=>'p12GarantiaCumplimiento',
		                                                                                                            'id'=>'p12GarantiaCumplimiento'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12GarantiaCumplimiento' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12OtorgarEscrituras')->checkbox([
		                                                                                                            'name'=>'p12OtorgarEscrituras',
		                                                                                                            'id'=>'p12OtorgarEscrituras'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12OtorgarEscrituras' >ver</a> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12PlanoLocalizacion')->checkbox([
		                                                                                                            'name'=>'p12PlanoLocalizacion',
		                                                                                                            'id'=>'p12PlanoLocalizacion'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12PlanoLocalizacion' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12PlanoTopografico')->checkbox([
		                                                                                                            'name'=>'p12PlanoTopografico',
		                                                                                                            'id'=>'p12PlanoTopografico'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12PlanoTopografico' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12PlanoLotificacion')->checkbox([
		                                                                                                            'name'=>'p12PlanoLotificacion',
		                                                                                                            'id'=>'p12PlanoLotificacion'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12PlanoLotificacion' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12PlanoTrazo')->checkbox([
		                                                                                                            'name'=>'p12PlanoTrazo',
		                                                                                                            'id'=>'p12PlanoTrazo'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12PlanoTrazo' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12PlanoPerfiles')->checkbox([
		                                                                                                            'name'=>'p12PlanoPerfiles',
		                                                                                                            'id'=>'p12PlanoPerfiles'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12PlanoPerfiles' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12PlanoAguaPotable')->checkbox([
		                                                                                                            'name'=>'p12PlanoAguaPotable',
		                                                                                                            'id'=>'p12PlanoAguaPotable'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12PlanoAguaPotable' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12PlanoElectrificacion')->checkbox([
		                                                                                                            'name'=>'p12PlanoElectrificacion',
		                                                                                                            'id'=>'p12PlanoElectrificacion'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12PlanoElectrificacion' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12PlanoAlumbrado')->checkbox([
		                                                                                                            'name'=>'p12PlanoAlumbrado',
		                                                                                                            'id'=>'p12PlanoAlumbrado'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12PlanoAlumbrado' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12PlanoArborizacion')->checkbox([
		                                                                                                            'name'=>'p12PlanoArborizacion',
		                                                                                                            'id'=>'p12PlanoArborizacion'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12PlanoArborizacion' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12ResolucionImpactoAmbiental')->checkbox([
		                                                                                                            'name'=>'p12ResolucionImpactoAmbiental',
		                                                                                                            'id'=>'p12ResolucionImpactoAmbiental'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12ResolucionImpactoAmbiental' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p12ProyectoVialTransporte')->checkbox([
		                                                                                                            'name'=>'p12ProyectoVialTransporte',
		                                                                                                            'id'=>'p12ProyectoVialTransporte'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp12ProyectoVialTransporte' >ver</a> 
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Supervision',3=>'Paso 3: Constancia',4=>'Paso 4: Revision',5=>'Paso 5: Documentos',6=>'Paso 6: Revision',7=>'Paso 7: Aprobacion',8=>'Paso 8: Requisitos',9=>'Paso 9: Revision',10=>'Paso 10: Autorizacion',11=>'Paso 11: Expediente Ejecutivo',12=>'Paso 12: Revision',], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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
                                url: '".Yii::$app->homeUrl."//tramites-autorizacion/atras', // point to server-side PHP script 
                                dataType: 'json',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                               
                                success: function(data){
                                                console.log('gik');
                                                for (var i = \$('#pasoatras').val(); i <= 12; i++) {
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

  
			//copiar solo cambiar tipo tramite
			function verimagen(tipoimagen,imglbl){
				\$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title',imglbl );
                rrurl=\"". Yii::$app->urlManager->createAbsoluteUrl(['tramites-autorizacion/view-imagen'])."\"
                rrurl= rrurl+'?id='+\$('#idTramite').val();
                rrurl= rrurl+'&tipoDocumento='+encodeURIComponent(tipoimagen);
                
                console.log(rrurl);
                \$('#dialog_simple').html('<img src=\"'+rrurl+'\" width=\"100%\" height=\"500\">');
                return false;
			};
			  
            \$('#verp2Constancia').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Constancia')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Constancia').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Supervisor').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Supervisor')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Supervisor').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  

  
            \$('#verp4Constancia').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4Constancia')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4Constancia').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5TituloPropiedad').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5TituloPropiedad')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5TituloPropiedad').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5PlanoLocalizacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5PlanoLocalizacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5PlanoLocalizacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5PlanoTopogra').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5PlanoTopogra')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5PlanoTopogra').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5AnteproyectoLotificacionVialidad').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5AnteproyectoLotificacionVialidad')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5AnteproyectoLotificacionVialidad').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6TituloPropiedad').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6TituloPropiedad')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6TituloPropiedad').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6PlanoLocalizacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6PlanoLocalizacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6PlanoLocalizacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6PlanoTopogra').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6PlanoTopogra')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6PlanoTopogra').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6PlanoLotificacionVialidad').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6PlanoLotificacionVialidad')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6PlanoLotificacionVialidad').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp7Aprobacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p7Aprobacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p7Aprobacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8Solicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8Solicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8Solicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8AcrediteCaracter').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8AcrediteCaracter')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8AcrediteCaracter').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8ActaConstitutiva').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8ActaConstitutiva')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8ActaConstitutiva').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8LibertadGravamen').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8LibertadGravamen')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8LibertadGravamen').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8Minuta').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8Minuta')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8Minuta').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8PlanoNomenclatura').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8PlanoNomenclatura')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8PlanoNomenclatura').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8FactibilidadJapac').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8FactibilidadJapac')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8FactibilidadJapac').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8FactibilidadCFE').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8FactibilidadCFE')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8FactibilidadCFE').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8EstudiosHidrologico').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8EstudiosHidrologico')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8EstudiosHidrologico').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8Alumbrado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8Alumbrado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8Alumbrado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8ProteccionCivil').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8ProteccionCivil')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8ProteccionCivil').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp8Vialidad').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p8Vialidad')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p8Vialidad').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9Solicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9Solicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9Solicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9AcrediteCaracter').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9AcrediteCaracter')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9AcrediteCaracter').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9ActaConstitutiva').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9ActaConstitutiva')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9ActaConstitutiva').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9LibertadGravamen').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9LibertadGravamen')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9LibertadGravamen').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9Minuta').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9Minuta')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9Minuta').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9PlanoNomenclatura').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9PlanoNomenclatura')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9PlanoNomenclatura').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9FactibilidadJapac').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9FactibilidadJapac')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9FactibilidadJapac').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9FactibilidadCFE').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9FactibilidadCFE')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9FactibilidadCFE').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9EstudiosHidrologico').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9EstudiosHidrologico')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9EstudiosHidrologico').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9Alumbrado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9Alumbrado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9Alumbrado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9ProteccionCivil').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9ProteccionCivil')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9ProteccionCivil').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp9Vialidad').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9Vialidad')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9Vialidad').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp10Autorizacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p10Autorizacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p10Autorizacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  

  

  

  

  
            \$('#verp3Expediente').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Expediente')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Expediente').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  

  
            \$('#verp7PlanoLotificacionVialidad').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p7PlanoLotificacionVialidad')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p7PlanoLotificacionVialidad').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verP11MemoriaFraccionamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('P11MemoriaFraccionamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#P11MemoriaFraccionamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11EstudioMecanicaEstructura').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11EstudioMecanicaEstructura')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11EstudioMecanicaEstructura').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11MemoriaAguaAlcantarillado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11MemoriaAguaAlcantarillado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11MemoriaAguaAlcantarillado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11MemoriaElectrificacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11MemoriaElectrificacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11MemoriaElectrificacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11MemoriaInfraestructura').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11MemoriaInfraestructura')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11MemoriaInfraestructura').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11MemoriaHidrologico').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11MemoriaHidrologico')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11MemoriaHidrologico').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11Presupuesto').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11Presupuesto')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11Presupuesto').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11EstimarPlazo').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11EstimarPlazo')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11EstimarPlazo').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11PagoSupervision').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11PagoSupervision')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11PagoSupervision').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11GarantiaCumplimiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11GarantiaCumplimiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11GarantiaCumplimiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11OtorgarEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11OtorgarEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11OtorgarEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11PlanoLocalizacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11PlanoLocalizacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11PlanoLocalizacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11PlanoTopografico').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11PlanoTopografico')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11PlanoTopografico').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11PlanoLotificacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11PlanoLotificacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11PlanoLotificacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11PlanoTrazo').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11PlanoTrazo')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11PlanoTrazo').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11PlanoPerfiles').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11PlanoPerfiles')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11PlanoPerfiles').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11PlanoAguaPotable').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11PlanoAguaPotable')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11PlanoAguaPotable').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11PlanoElectrificacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11PlanoElectrificacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11PlanoElectrificacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11PlanoAlumbrado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11PlanoAlumbrado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11PlanoAlumbrado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11PlanoArborizacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11PlanoArborizacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11PlanoArborizacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11ResolucionImpactoAmbiental').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11ResolucionImpactoAmbiental')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11ResolucionImpactoAmbiental').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp11ProyectoVialTransporte').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p11ProyectoVialTransporte')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p11ProyectoVialTransporte').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verP12MemoriaFraccionamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('P12MemoriaFraccionamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#P12MemoriaFraccionamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12EstudioMecanicaEstructura').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12EstudioMecanicaEstructura')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12EstudioMecanicaEstructura').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12MemoriaAguaAlcantarillado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12MemoriaAguaAlcantarillado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12MemoriaAguaAlcantarillado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12MemoriaElectrificacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12MemoriaElectrificacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12MemoriaElectrificacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12MemoriaInfraestructura').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12MemoriaInfraestructura')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12MemoriaInfraestructura').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12MemoriaHidrologico').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12MemoriaHidrologico')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12MemoriaHidrologico').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12Presupuesto').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12Presupuesto')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12Presupuesto').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12EstimarPlazo').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12EstimarPlazo')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12EstimarPlazo').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12PagoSupervision').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12PagoSupervision')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12PagoSupervision').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12GarantiaCumplimiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12GarantiaCumplimiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12GarantiaCumplimiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12OtorgarEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12OtorgarEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12OtorgarEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12PlanoLocalizacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12PlanoLocalizacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12PlanoLocalizacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12PlanoTopografico').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12PlanoTopografico')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12PlanoTopografico').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12PlanoLotificacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12PlanoLotificacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12PlanoLotificacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12PlanoTrazo').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12PlanoTrazo')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12PlanoTrazo').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12PlanoPerfiles').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12PlanoPerfiles')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12PlanoPerfiles').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12PlanoAguaPotable').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12PlanoAguaPotable')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12PlanoAguaPotable').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12PlanoElectrificacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12PlanoElectrificacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12PlanoElectrificacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12PlanoAlumbrado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12PlanoAlumbrado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12PlanoAlumbrado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12PlanoArborizacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12PlanoArborizacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12PlanoArborizacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12ResolucionImpactoAmbiental').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12ResolucionImpactoAmbiental')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12ResolucionImpactoAmbiental').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp12ProyectoVialTransporte').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p12ProyectoVialTransporte')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p12ProyectoVialTransporte').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  

  
            \$('#verp9Secretaria').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p9Secretaria')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p9Secretaria').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  

  
            \$('#verp10MandarProyecto').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p10MandarProyecto')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p10MandarProyecto').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
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
                    ,maxlength: 20


                  },

                  p1CorreoSolicitante: {
                    required: true
                    
                    ,email:true 



                  },

                  p1UsoActual: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1UsoSolicitado: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1DescripcionProceso: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p1NoCajones: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1CallePredio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1ColoniaPredio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1NumeroOficial: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1NumeroInterio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1PobladoPredio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1SindicaturaPredio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1ClaveCatastralPredio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 30


                  },

                  p1SuperficiePredio: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1NortePredio: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1SurPredio: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1OrientePredio: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1PonientePredio: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1NombrePropietarios: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1DireccionPropietarios: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p1TelefonoPropietarios: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1CorreoPropietarios: {
                    required: true
                    
                    ,email:true 



                  },

                  p1PlantaBajaConstruida: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1PlantaAltaConstruida: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1SegundoNivelConstruida: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1OtrosConstruida: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1TotalConstruida: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1PlantaBajaXConstruir: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1PlantaAltaXConstruir: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1SegundoNivelXConstruir: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1OtrosXConstruir: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1TotalXConstruir: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1Observaciones: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p1NombreGestor: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1DireccionGestor: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p1TelefonoGestor: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1CorreoGestor: {
                    required: true
                    
                    ,email:true 



                  },

                  p2Constancia: {
                    required: true



                  },

                  p3Supervisor: {
                    required: true



                  },

                  p3Observaciones: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p4Constancia: {
                    required: true



                  },

                  p5TituloPropiedad: {
                    required: true



                  },

                  p5PlanoLocalizacion: {
                    required: true



                  },

                  p5PlanoTopogra: {
                    required: true



                  },

                  p5AnteproyectoLotificacionVialidad: {
                    required: true



                  },

                  p6TituloPropiedad: {
                    required: true



                  },

                  p6PlanoLocalizacion: {
                    required: true



                  },

                  p6PlanoTopogra: {
                    required: true



                  },

                  p6PlanoLotificacionVialidad: {
                    required: true



                  },

                  p7Aprobacion: {
                    required: true



                  },

                  p8Solicitud: {
                    required: true



                  },

                  p8AcrediteCaracter: {
                    required: true



                  },

                  p8ActaConstitutiva: {
                    required: true



                  },

                  p8LibertadGravamen: {
                    required: true



                  },

                  p8Minuta: {
                    required: true



                  },

                  p8PlanoNomenclatura: {
                    required: true



                  },

                  p8FactibilidadJapac: {
                    required: true



                  },

                  p8FactibilidadCFE: {
                    required: true



                  },

                  p8EstudiosHidrologico: {
                    required: true



                  },

                  p8Alumbrado: {
                    required: true



                  },

                  p8ProteccionCivil: {
                    required: true



                  },

                  p8Vialidad: {
                    required: true



                  },

                  p9Solicitud: {
                    required: true



                  },

                  p9AcrediteCaracter: {
                    required: true



                  },

                  p9ActaConstitutiva: {
                    required: true



                  },

                  p9LibertadGravamen: {
                    required: true



                  },

                  p9Minuta: {
                    required: true



                  },

                  p9PlanoNomenclatura: {
                    required: true



                  },

                  p9FactibilidadJapac: {
                    required: true



                  },

                  p9FactibilidadCFE: {
                    required: true



                  },

                  p9EstudiosHidrologico: {
                    required: true



                  },

                  p9Alumbrado: {
                    required: true



                  },

                  p9ProteccionCivil: {
                    required: true



                  },

                  p9Vialidad: {
                    required: true



                  },

                  p10Autorizacion: {
                    required: true



                  },

                  p1NorOrientePredio: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1SurOrientePredio: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1NorPonientePredio: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1SurPonientePredio: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p3Expediente: {
                    required: true



                  },

                  p6Comentario: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p7PlanoLotificacionVialidad: {
                    required: true



                  },

                  P11MemoriaFraccionamiento: {
                    required: true



                  },

                  p11EstudioMecanicaEstructura: {
                    required: true



                  },

                  p11MemoriaAguaAlcantarillado: {
                    required: true



                  },

                  p11MemoriaElectrificacion: {
                    required: true



                  },

                  p11MemoriaInfraestructura: {
                    required: true



                  },

                  p11MemoriaHidrologico: {
                    required: true



                  },

                  p11Presupuesto: {
                    required: true



                  },

                  p11EstimarPlazo: {
                    required: true



                  },

                  p11PagoSupervision: {
                    required: true



                  },

                  p11GarantiaCumplimiento: {
                    required: true



                  },

                  p11OtorgarEscrituras: {
                    required: true



                  },

                  p11PlanoLocalizacion: {
                    required: true



                  },

                  p11PlanoTopografico: {
                    required: true



                  },

                  p11PlanoLotificacion: {
                    required: true



                  },

                  p11PlanoTrazo: {
                    required: true



                  },

                  p11PlanoPerfiles: {
                    required: true



                  },

                  p11PlanoAguaPotable: {
                    required: true



                  },

                  p11PlanoElectrificacion: {
                    required: true



                  },

                  p11PlanoAlumbrado: {
                    required: true



                  },

                  p11PlanoArborizacion: {
                    required: true



                  },

                  p11ResolucionImpactoAmbiental: {
                    required: true



                  },

                  p11ProyectoVialTransporte: {
                    required: true



                  },

                  P12MemoriaFraccionamiento: {
                    required: true



                  },

                  p12EstudioMecanicaEstructura: {
                    required: true



                  },

                  p12MemoriaAguaAlcantarillado: {
                    required: true



                  },

                  p12MemoriaElectrificacion: {
                    required: true



                  },

                  p12MemoriaInfraestructura: {
                    required: true



                  },

                  p12MemoriaHidrologico: {
                    required: true



                  },

                  p12Presupuesto: {
                    required: true



                  },

                  p12EstimarPlazo: {
                    required: true



                  },

                  p12PagoSupervision: {
                    required: true



                  },

                  p12GarantiaCumplimiento: {
                    required: true



                  },

                  p12OtorgarEscrituras: {
                    required: true



                  },

                  p12PlanoLocalizacion: {
                    required: true



                  },

                  p12PlanoTopografico: {
                    required: true



                  },

                  p12PlanoLotificacion: {
                    required: true



                  },

                  p12PlanoTrazo: {
                    required: true



                  },

                  p12PlanoPerfiles: {
                    required: true



                  },

                  p12PlanoAguaPotable: {
                    required: true



                  },

                  p12PlanoElectrificacion: {
                    required: true



                  },

                  p12PlanoAlumbrado: {
                    required: true



                  },

                  p12PlanoArborizacion: {
                    required: true



                  },

                  p12ResolucionImpactoAmbiental: {
                    required: true



                  },

                  p12ProyectoVialTransporte: {
                    required: true



                  },

                  p9Notas: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p9Secretaria: {
                    required: true



                  },

                  p9FechaEnvio: {
                    required: true



                  },

                  p10MandarProyecto: {
                    required: true



                  },

                  p7SuperficieGeneral: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p7Vivienda: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p7Comercial: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p7Donacion: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p7AreasVerdes: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p7Vialidad: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p7Reserva: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p7Otro: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p7NumLotes: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p7DensidadVivienda: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p7DonacionRequerida: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


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

                p1DescripcionProceso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DescripcionProceso')}',


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

                p1PlantaBajaXConstruir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PlantaBajaXConstruir')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaXConstruir')} es demasiado grande',


                },

                p1PlantaAltaXConstruir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PlantaAltaXConstruir')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaXConstruir')} es demasiado grande',


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

                p2Constancia: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Constancia')}',


                },

                p3Supervisor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Supervisor')}',


                },

                p3Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Observaciones')}',


                },

                p4Constancia: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Constancia')}',


                },

                p5TituloPropiedad: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5TituloPropiedad')}',


                },

                p5PlanoLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoLocalizacion')}',


                },

                p5PlanoTopogra: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoTopogra')}',


                },

                p5AnteproyectoLotificacionVialidad: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5AnteproyectoLotificacionVialidad')}',


                },

                p6TituloPropiedad: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6TituloPropiedad')}',


                },

                p6PlanoLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6PlanoLocalizacion')}',


                },

                p6PlanoTopogra: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6PlanoTopogra')}',


                },

                p6PlanoLotificacionVialidad: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6PlanoLotificacionVialidad')}',


                },

                p7Aprobacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7Aprobacion')}',


                },

                p8Solicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8Solicitud')}',


                },

                p8AcrediteCaracter: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8AcrediteCaracter')}',


                },

                p8ActaConstitutiva: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8ActaConstitutiva')}',


                },

                p8LibertadGravamen: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8LibertadGravamen')}',


                },

                p8Minuta: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8Minuta')}',


                },

                p8PlanoNomenclatura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8PlanoNomenclatura')}',


                },

                p8FactibilidadJapac: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8FactibilidadJapac')}',


                },

                p8FactibilidadCFE: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8FactibilidadCFE')}',


                },

                p8EstudiosHidrologico: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8EstudiosHidrologico')}',


                },

                p8Alumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8Alumbrado')}',


                },

                p8ProteccionCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8ProteccionCivil')}',


                },

                p8Vialidad: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p8Vialidad')}',


                },

                p9Solicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9Solicitud')}',


                },

                p9AcrediteCaracter: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9AcrediteCaracter')}',


                },

                p9ActaConstitutiva: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9ActaConstitutiva')}',


                },

                p9LibertadGravamen: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9LibertadGravamen')}',


                },

                p9Minuta: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9Minuta')}',


                },

                p9PlanoNomenclatura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9PlanoNomenclatura')}',


                },

                p9FactibilidadJapac: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9FactibilidadJapac')}',


                },

                p9FactibilidadCFE: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9FactibilidadCFE')}',


                },

                p9EstudiosHidrologico: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9EstudiosHidrologico')}',


                },

                p9Alumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9Alumbrado')}',


                },

                p9ProteccionCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9ProteccionCivil')}',


                },

                p9Vialidad: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9Vialidad')}',


                },

                p10Autorizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p10Autorizacion')}',


                },

                p1NorOrientePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NorOrientePredio')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1NorOrientePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1NorOrientePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1NorOrientePredio')} es demasiado grande',


                },

                p1SurOrientePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1SurOrientePredio')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1SurOrientePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1SurOrientePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1SurOrientePredio')} es demasiado grande',


                },

                p1NorPonientePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NorPonientePredio')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1NorPonientePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1NorPonientePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1NorPonientePredio')} es demasiado grande',


                },

                p1SurPonientePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1SurPonientePredio')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1SurPonientePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1SurPonientePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1SurPonientePredio')} es demasiado grande',


                },

                p3Expediente: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Expediente')}',


                },

                p6Comentario: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6Comentario')}',


                },

                p7PlanoLotificacionVialidad: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7PlanoLotificacionVialidad')}',


                },

                P11MemoriaFraccionamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('P11MemoriaFraccionamiento')}',


                },

                p11EstudioMecanicaEstructura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11EstudioMecanicaEstructura')}',


                },

                p11MemoriaAguaAlcantarillado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11MemoriaAguaAlcantarillado')}',


                },

                p11MemoriaElectrificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11MemoriaElectrificacion')}',


                },

                p11MemoriaInfraestructura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11MemoriaInfraestructura')}',


                },

                p11MemoriaHidrologico: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11MemoriaHidrologico')}',


                },

                p11Presupuesto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11Presupuesto')}',


                },

                p11EstimarPlazo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11EstimarPlazo')}',


                },

                p11PagoSupervision: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11PagoSupervision')}',


                },

                p11GarantiaCumplimiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11GarantiaCumplimiento')}',


                },

                p11OtorgarEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11OtorgarEscrituras')}',


                },

                p11PlanoLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11PlanoLocalizacion')}',


                },

                p11PlanoTopografico: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11PlanoTopografico')}',


                },

                p11PlanoLotificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11PlanoLotificacion')}',


                },

                p11PlanoTrazo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11PlanoTrazo')}',


                },

                p11PlanoPerfiles: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11PlanoPerfiles')}',


                },

                p11PlanoAguaPotable: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11PlanoAguaPotable')}',


                },

                p11PlanoElectrificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11PlanoElectrificacion')}',


                },

                p11PlanoAlumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11PlanoAlumbrado')}',


                },

                p11PlanoArborizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11PlanoArborizacion')}',


                },

                p11ResolucionImpactoAmbiental: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11ResolucionImpactoAmbiental')}',


                },

                p11ProyectoVialTransporte: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p11ProyectoVialTransporte')}',


                },

                P12MemoriaFraccionamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('P12MemoriaFraccionamiento')}',


                },

                p12EstudioMecanicaEstructura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12EstudioMecanicaEstructura')}',


                },

                p12MemoriaAguaAlcantarillado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12MemoriaAguaAlcantarillado')}',


                },

                p12MemoriaElectrificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12MemoriaElectrificacion')}',


                },

                p12MemoriaInfraestructura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12MemoriaInfraestructura')}',


                },

                p12MemoriaHidrologico: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12MemoriaHidrologico')}',


                },

                p12Presupuesto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12Presupuesto')}',


                },

                p12EstimarPlazo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12EstimarPlazo')}',


                },

                p12PagoSupervision: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12PagoSupervision')}',


                },

                p12GarantiaCumplimiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12GarantiaCumplimiento')}',


                },

                p12OtorgarEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12OtorgarEscrituras')}',


                },

                p12PlanoLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12PlanoLocalizacion')}',


                },

                p12PlanoTopografico: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12PlanoTopografico')}',


                },

                p12PlanoLotificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12PlanoLotificacion')}',


                },

                p12PlanoTrazo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12PlanoTrazo')}',


                },

                p12PlanoPerfiles: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12PlanoPerfiles')}',


                },

                p12PlanoAguaPotable: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12PlanoAguaPotable')}',


                },

                p12PlanoElectrificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12PlanoElectrificacion')}',


                },

                p12PlanoAlumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12PlanoAlumbrado')}',


                },

                p12PlanoArborizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12PlanoArborizacion')}',


                },

                p12ResolucionImpactoAmbiental: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12ResolucionImpactoAmbiental')}',


                },

                p12ProyectoVialTransporte: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p12ProyectoVialTransporte')}',


                },

                p9Notas: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9Notas')}',


                },

                p9Secretaria: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9Secretaria')}',


                },

                p9FechaEnvio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p9FechaEnvio')}',


                },

                p10MandarProyecto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p10MandarProyecto')}',


                },

                p7SuperficieGeneral: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7SuperficieGeneral')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p7SuperficieGeneral')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p7SuperficieGeneral')} excede el numero de caracteres permitidos',


                },

                p7Vivienda: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7Vivienda')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p7Vivienda')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p7Vivienda')} excede el numero de caracteres permitidos',


                },

                p7Comercial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7Comercial')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p7Comercial')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p7Comercial')} excede el numero de caracteres permitidos',


                },

                p7Donacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7Donacion')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p7Donacion')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p7Donacion')} excede el numero de caracteres permitidos',


                },

                p7AreasVerdes: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7AreasVerdes')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p7AreasVerdes')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p7AreasVerdes')} excede el numero de caracteres permitidos',


                },

                p7Vialidad: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7Vialidad')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p7Vialidad')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p7Vialidad')} excede el numero de caracteres permitidos',


                },

                p7Reserva: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7Reserva')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p7Reserva')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p7Reserva')} excede el numero de caracteres permitidos',


                },

                p7Otro: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7Otro')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p7Otro')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p7Otro')} excede el numero de caracteres permitidos',


                },

                p7NumLotes: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7NumLotes')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p7NumLotes')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p7NumLotes')} excede el numero de caracteres permitidos',


                },

                p7DensidadVivienda: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7DensidadVivienda')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p7DensidadVivienda')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p7DensidadVivienda')} excede el numero de caracteres permitidos',


                },

                p7DonacionRequerida: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7DonacionRequerida')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p7DonacionRequerida')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p7DonacionRequerida')} excede el numero de caracteres permitidos',


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
                  if((index+1) < 12)
                    \$('#btntab'+(index+1)).removeAttr('disabled');
                  if (!\$valid) {
                    \$validator.focusInvalid();
                    return false;
                  } else {
                    var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
                    var form_data = new FormData();
                    var datos = \$('#wizard-1').serializeArray().reduce(function(obj, item) {
                                                            if(item.name =='id' || item.value != '')
                                                                form_data.append('TramitesAutorizacion['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');
                        var p2Constancia = $('#p2Constancia').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p2Constancia]', p2Constancia);


                        var p5TituloPropiedad = $('#p5TituloPropiedad').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p5TituloPropiedad]', p5TituloPropiedad);


                        var p5PlanoLocalizacion = $('#p5PlanoLocalizacion').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p5PlanoLocalizacion]', p5PlanoLocalizacion);


                        var p5PlanoTopogra = $('#p5PlanoTopogra').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p5PlanoTopogra]', p5PlanoTopogra);


                        var p5AnteproyectoLotificacionVialidad = $('#p5AnteproyectoLotificacionVialidad').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p5AnteproyectoLotificacionVialidad]', p5AnteproyectoLotificacionVialidad);


                        var p7Aprobacion = $('#p7Aprobacion').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p7Aprobacion]', p7Aprobacion);


                        var p8Solicitud = $('#p8Solicitud').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8Solicitud]', p8Solicitud);


                        var p8AcrediteCaracter = $('#p8AcrediteCaracter').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8AcrediteCaracter]', p8AcrediteCaracter);


                        var p8ActaConstitutiva = $('#p8ActaConstitutiva').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8ActaConstitutiva]', p8ActaConstitutiva);


                        var p8LibertadGravamen = $('#p8LibertadGravamen').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8LibertadGravamen]', p8LibertadGravamen);


                        var p8Minuta = $('#p8Minuta').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8Minuta]', p8Minuta);


                        var p8PlanoNomenclatura = $('#p8PlanoNomenclatura').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8PlanoNomenclatura]', p8PlanoNomenclatura);


                        var p8FactibilidadJapac = $('#p8FactibilidadJapac').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8FactibilidadJapac]', p8FactibilidadJapac);


                        var p8FactibilidadCFE = $('#p8FactibilidadCFE').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8FactibilidadCFE]', p8FactibilidadCFE);


                        var p8EstudiosHidrologico = $('#p8EstudiosHidrologico').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8EstudiosHidrologico]', p8EstudiosHidrologico);


                        var p8Alumbrado = $('#p8Alumbrado').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8Alumbrado]', p8Alumbrado);


                        var p8ProteccionCivil = $('#p8ProteccionCivil').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8ProteccionCivil]', p8ProteccionCivil);


                        var p8Vialidad = $('#p8Vialidad').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p8Vialidad]', p8Vialidad);


                        var p10Autorizacion = $('#p10Autorizacion').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p10Autorizacion]', p10Autorizacion);


                        var p3Expediente = $('#p3Expediente').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p3Expediente]', p3Expediente);


                        var p7PlanoLotificacionVialidad = $('#p7PlanoLotificacionVialidad').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p7PlanoLotificacionVialidad]', p7PlanoLotificacionVialidad);


                        var P11MemoriaFraccionamiento = $('#P11MemoriaFraccionamiento').prop('files')[0];
                        form_data.append('TramitesAutorizacion[P11MemoriaFraccionamiento]', P11MemoriaFraccionamiento);


                        var p11EstudioMecanicaEstructura = $('#p11EstudioMecanicaEstructura').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11EstudioMecanicaEstructura]', p11EstudioMecanicaEstructura);


                        var p11MemoriaAguaAlcantarillado = $('#p11MemoriaAguaAlcantarillado').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11MemoriaAguaAlcantarillado]', p11MemoriaAguaAlcantarillado);


                        var p11MemoriaElectrificacion = $('#p11MemoriaElectrificacion').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11MemoriaElectrificacion]', p11MemoriaElectrificacion);


                        var p11MemoriaInfraestructura = $('#p11MemoriaInfraestructura').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11MemoriaInfraestructura]', p11MemoriaInfraestructura);


                        var p11MemoriaHidrologico = $('#p11MemoriaHidrologico').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11MemoriaHidrologico]', p11MemoriaHidrologico);


                        var p11Presupuesto = $('#p11Presupuesto').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11Presupuesto]', p11Presupuesto);


                        var p11EstimarPlazo = $('#p11EstimarPlazo').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11EstimarPlazo]', p11EstimarPlazo);


                        var p11PagoSupervision = $('#p11PagoSupervision').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11PagoSupervision]', p11PagoSupervision);


                        var p11GarantiaCumplimiento = $('#p11GarantiaCumplimiento').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11GarantiaCumplimiento]', p11GarantiaCumplimiento);


                        var p11OtorgarEscrituras = $('#p11OtorgarEscrituras').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11OtorgarEscrituras]', p11OtorgarEscrituras);


                        var p11PlanoLocalizacion = $('#p11PlanoLocalizacion').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11PlanoLocalizacion]', p11PlanoLocalizacion);


                        var p11PlanoTopografico = $('#p11PlanoTopografico').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11PlanoTopografico]', p11PlanoTopografico);


                        var p11PlanoLotificacion = $('#p11PlanoLotificacion').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11PlanoLotificacion]', p11PlanoLotificacion);


                        var p11PlanoTrazo = $('#p11PlanoTrazo').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11PlanoTrazo]', p11PlanoTrazo);


                        var p11PlanoPerfiles = $('#p11PlanoPerfiles').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11PlanoPerfiles]', p11PlanoPerfiles);


                        var p11PlanoAguaPotable = $('#p11PlanoAguaPotable').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11PlanoAguaPotable]', p11PlanoAguaPotable);


                        var p11PlanoElectrificacion = $('#p11PlanoElectrificacion').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11PlanoElectrificacion]', p11PlanoElectrificacion);


                        var p11PlanoAlumbrado = $('#p11PlanoAlumbrado').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11PlanoAlumbrado]', p11PlanoAlumbrado);


                        var p11PlanoArborizacion = $('#p11PlanoArborizacion').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11PlanoArborizacion]', p11PlanoArborizacion);


                        var p11ResolucionImpactoAmbiental = $('#p11ResolucionImpactoAmbiental').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11ResolucionImpactoAmbiental]', p11ResolucionImpactoAmbiental);


                        var p11ProyectoVialTransporte = $('#p11ProyectoVialTransporte').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p11ProyectoVialTransporte]', p11ProyectoVialTransporte);



                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramites-autorizacion/salvar', // point to server-side PHP script 
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
                                            if(data.p2Constancia!==undefined)
                                                \$('#p2Constancia').attr('value',data.p2Constancia);
                                            if(data.p5TituloPropiedad!==undefined)
                                                \$('#p5TituloPropiedad').attr('value',data.p5TituloPropiedad);
                                            if(data.p5PlanoLocalizacion!==undefined)
                                                \$('#p5PlanoLocalizacion').attr('value',data.p5PlanoLocalizacion);
                                            if(data.p5PlanoTopogra!==undefined)
                                                \$('#p5PlanoTopogra').attr('value',data.p5PlanoTopogra);
                                            if(data.p5AnteproyectoLotificacionVialidad!==undefined)
                                                \$('#p5AnteproyectoLotificacionVialidad').attr('value',data.p5AnteproyectoLotificacionVialidad);
                                            if(data.p7Aprobacion!==undefined)
                                                \$('#p7Aprobacion').attr('value',data.p7Aprobacion);
                                            if(data.p8Solicitud!==undefined)
                                                \$('#p8Solicitud').attr('value',data.p8Solicitud);
                                            if(data.p8AcrediteCaracter!==undefined)
                                                \$('#p8AcrediteCaracter').attr('value',data.p8AcrediteCaracter);
                                            if(data.p8ActaConstitutiva!==undefined)
                                                \$('#p8ActaConstitutiva').attr('value',data.p8ActaConstitutiva);
                                            if(data.p8LibertadGravamen!==undefined)
                                                \$('#p8LibertadGravamen').attr('value',data.p8LibertadGravamen);
                                            if(data.p8Minuta!==undefined)
                                                \$('#p8Minuta').attr('value',data.p8Minuta);
                                            if(data.p8PlanoNomenclatura!==undefined)
                                                \$('#p8PlanoNomenclatura').attr('value',data.p8PlanoNomenclatura);
                                            if(data.p8FactibilidadJapac!==undefined)
                                                \$('#p8FactibilidadJapac').attr('value',data.p8FactibilidadJapac);
                                            if(data.p8FactibilidadCFE!==undefined)
                                                \$('#p8FactibilidadCFE').attr('value',data.p8FactibilidadCFE);
                                            if(data.p8EstudiosHidrologico!==undefined)
                                                \$('#p8EstudiosHidrologico').attr('value',data.p8EstudiosHidrologico);
                                            if(data.p8Alumbrado!==undefined)
                                                \$('#p8Alumbrado').attr('value',data.p8Alumbrado);
                                            if(data.p8ProteccionCivil!==undefined)
                                                \$('#p8ProteccionCivil').attr('value',data.p8ProteccionCivil);
                                            if(data.p8Vialidad!==undefined)
                                                \$('#p8Vialidad').attr('value',data.p8Vialidad);
                                            if(data.p10Autorizacion!==undefined)
                                                \$('#p10Autorizacion').attr('value',data.p10Autorizacion);
                                            if(data.p3Expediente!==undefined)
                                                \$('#p3Expediente').attr('value',data.p3Expediente);
                                            if(data.p7PlanoLotificacionVialidad!==undefined)
                                                \$('#p7PlanoLotificacionVialidad').attr('value',data.p7PlanoLotificacionVialidad);
                                            if(data.P11MemoriaFraccionamiento!==undefined)
                                                \$('#P11MemoriaFraccionamiento').attr('value',data.P11MemoriaFraccionamiento);
                                            if(data.p11EstudioMecanicaEstructura!==undefined)
                                                \$('#p11EstudioMecanicaEstructura').attr('value',data.p11EstudioMecanicaEstructura);
                                            if(data.p11MemoriaAguaAlcantarillado!==undefined)
                                                \$('#p11MemoriaAguaAlcantarillado').attr('value',data.p11MemoriaAguaAlcantarillado);
                                            if(data.p11MemoriaElectrificacion!==undefined)
                                                \$('#p11MemoriaElectrificacion').attr('value',data.p11MemoriaElectrificacion);
                                            if(data.p11MemoriaInfraestructura!==undefined)
                                                \$('#p11MemoriaInfraestructura').attr('value',data.p11MemoriaInfraestructura);
                                            if(data.p11MemoriaHidrologico!==undefined)
                                                \$('#p11MemoriaHidrologico').attr('value',data.p11MemoriaHidrologico);
                                            if(data.p11Presupuesto!==undefined)
                                                \$('#p11Presupuesto').attr('value',data.p11Presupuesto);
                                            if(data.p11EstimarPlazo!==undefined)
                                                \$('#p11EstimarPlazo').attr('value',data.p11EstimarPlazo);
                                            if(data.p11PagoSupervision!==undefined)
                                                \$('#p11PagoSupervision').attr('value',data.p11PagoSupervision);
                                            if(data.p11GarantiaCumplimiento!==undefined)
                                                \$('#p11GarantiaCumplimiento').attr('value',data.p11GarantiaCumplimiento);
                                            if(data.p11OtorgarEscrituras!==undefined)
                                                \$('#p11OtorgarEscrituras').attr('value',data.p11OtorgarEscrituras);
                                            if(data.p11PlanoLocalizacion!==undefined)
                                                \$('#p11PlanoLocalizacion').attr('value',data.p11PlanoLocalizacion);
                                            if(data.p11PlanoTopografico!==undefined)
                                                \$('#p11PlanoTopografico').attr('value',data.p11PlanoTopografico);
                                            if(data.p11PlanoLotificacion!==undefined)
                                                \$('#p11PlanoLotificacion').attr('value',data.p11PlanoLotificacion);
                                            if(data.p11PlanoTrazo!==undefined)
                                                \$('#p11PlanoTrazo').attr('value',data.p11PlanoTrazo);
                                            if(data.p11PlanoPerfiles!==undefined)
                                                \$('#p11PlanoPerfiles').attr('value',data.p11PlanoPerfiles);
                                            if(data.p11PlanoAguaPotable!==undefined)
                                                \$('#p11PlanoAguaPotable').attr('value',data.p11PlanoAguaPotable);
                                            if(data.p11PlanoElectrificacion!==undefined)
                                                \$('#p11PlanoElectrificacion').attr('value',data.p11PlanoElectrificacion);
                                            if(data.p11PlanoAlumbrado!==undefined)
                                                \$('#p11PlanoAlumbrado').attr('value',data.p11PlanoAlumbrado);
                                            if(data.p11PlanoArborizacion!==undefined)
                                                \$('#p11PlanoArborizacion').attr('value',data.p11PlanoArborizacion);
                                            if(data.p11ResolucionImpactoAmbiental!==undefined)
                                                \$('#p11ResolucionImpactoAmbiental').attr('value',data.p11ResolucionImpactoAmbiental);
                                            if(data.p11ProyectoVialTransporte!==undefined)
                                                \$('#p11ProyectoVialTransporte').attr('value',data.p11ProyectoVialTransporte);

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
