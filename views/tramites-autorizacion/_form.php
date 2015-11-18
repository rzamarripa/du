

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
                                            <li class="active"  data-target="#step1" style="width:10%">
                                                <a id="btntab1" href="#tab1" data-toggle="tab" > <span class="step">1</span> <span class="title">Solicitud</span> </a>
                                            </li>
                                            <li   data-target="#step2" style="width:10%">
                                                <a id="btntab2" href="#tab2" data-toggle="tab" disabled="disabled"> <span class="step">2</span> <span class="title">Supervisión</span> </a>
                                            </li>
                                            <li   data-target="#step3" style="width:10%">
                                                <a id="btntab3" href="#tab3" data-toggle="tab" disabled="disabled"> <span class="step">3</span> <span class="title">Constancia</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:10%">
                                                <a id="btntab4" href="#tab4" data-toggle="tab" disabled="disabled"> <span class="step">4</span> <span class="title">Revisión</span> </a>
                                            </li>
                                            <li   data-target="#step5" style="width:10%">
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Documentos</span> </a>
                                            </li>
                                            <li   data-target="#step6" style="width:10%">
                                                <a id="btntab6" href="#tab6" data-toggle="tab" disabled="disabled"> <span class="step">6</span> <span class="title">Comite de Fraccionamiento</span> </a>
                                            </li>
                                            <li   data-target="#step7" style="width:10%">
                                                <a id="btntab7" href="#tab7" data-toggle="tab" disabled="disabled"> <span class="step">7</span> <span class="title">Aprobación de Anteproyecto</span> </a>
                                            </li>
                                            <li   data-target="#step8" style="width:10%">
                                                <a id="btntab8" href="#tab8" data-toggle="tab" disabled="disabled"> <span class="step">8</span> <span class="title">Expediente Técnico</span> </a>
                                            </li>
                                            <li   data-target="#step9" style="width:10%">
                                                <a id="btntab9" href="#tab9" data-toggle="tab" disabled="disabled"> <span class="step">9</span> <span class="title">Revisión</span> </a>
                                            </li>
                                            <li   data-target="#step10" style="width:10%">
                                                <a id="btntab10" href="#tab10" data-toggle="tab" disabled="disabled"> <span class="step">10</span> <span class="title">Autorización de Cabildo</span> </a>
                                            </li>
                                        </ul>
                                        <?= $form->field($model,'id')->input('hidden',['name'=>'id','id'=>'idTramite'])->label(false);?>                                         
                                        <div class="clearfix"></div>
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
                                        <?php if($permisos[37][USUARIOS::$LEER]){ ?>
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
                                        <?php if($permisos[38][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
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
		                                                    <?= $form->field($model,'p5PlanoLotificacionVialidad',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoLotificacionVialidad',
		                                                                        'id'=>'p5PlanoLotificacionVialidad'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoLotificacionVialidad' >ver</a>
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
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
																								<div class="col-sm-6">
		                                            <button  id="btnConstancia" type="button" class="btn btn-primary  active">Guardar Constancia</button>
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Constancia',3=>'Paso 3: Supervision',4=>'Paso 4: Revision',5=>'Paso 5: Documentos',6=>'Paso 6: Revision',7=>'Paso 7: Aprobacion',8=>'Paso 8: Requisitos',9=>'Paso 9: Revision',10=>'Paso 10: Autorizacion',], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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
                                                for (var i = \$('#pasoatras').val(); i <= 10; i++) {
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

  
            \$('#verp5PlanoLotificacionVialidad').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5PlanoLotificacionVialidad')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5PlanoLotificacionVialidad').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
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

                  p5PlanoLotificacionVialidad: {
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

                p5PlanoLotificacionVialidad: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoLotificacionVialidad')}',


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
                  if((index+1) < 10)
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


                        var p5PlanoLotificacionVialidad = $('#p5PlanoLotificacionVialidad').prop('files')[0];
                        form_data.append('TramitesAutorizacion[p5PlanoLotificacionVialidad]', p5PlanoLotificacionVialidad);


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
                                            if(data.p5PlanoLotificacionVialidad!==undefined)
                                                \$('#p5PlanoLotificacionVialidad').attr('value',data.p5PlanoLotificacionVialidad);
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
