

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
/* @var $model app\models\TramitesRecepcion */
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
                    <h2> Recepción de Fraccionamiento</h2>
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
                                            <li class="active"  data-target="#step1" style="width:14.285714285714%">
                                                <a id="btntab1" href="#tab1" data-toggle="tab" > <span class="step">1</span> <span class="title">Solicitud</span> </a>
                                            </li>
                                            <li   data-target="#step2" style="width:14.285714285714%">
                                                <a id="btntab2" href="#tab2" data-toggle="tab" disabled="disabled"> <span class="step">2</span> <span class="title">Constancia</span> </a>
                                            </li>
                                            <li   data-target="#step3" style="width:14.285714285714%">
                                                <a id="btntab3" href="#tab3" data-toggle="tab" disabled="disabled"> <span class="step">3</span> <span class="title">Supervision</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:14.285714285714%">
                                                <a id="btntab4" href="#tab4" data-toggle="tab" disabled="disabled"> <span class="step">4</span> <span class="title">Revision</span> </a>
                                            </li>
                                            <li   data-target="#step5" style="width:14.285714285714%">
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Documentos</span> </a>
                                            </li>
                                            <li   data-target="#step6" style="width:14.285714285714%">
                                                <a id="btntab6" href="#tab6" data-toggle="tab" disabled="disabled"> <span class="step">6</span> <span class="title">Revision</span> </a>
                                            </li>
                                            <li   data-target="#step7" style="width:14.285714285714%">
                                                <a id="btntab7" href="#tab7" data-toggle="tab" disabled="disabled"> <span class="step">7</span> <span class="title">Recepcion</span> </a>
                                            </li>
                                           
                                            
                                        </ul>
                                        <?= $form->field($model,'id')->input('hidden',['name'=>'id','id'=>'idTramite'])->label(false);?>                                         <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <br>
                                        <?php if($permisos[45][USUARIOS::$LEER]){ ?>
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
                                        <?php if($permisos[47][USUARIOS::$LEER]){ ?>
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
                                        <div class="tab-pane " id="tab3">
                                            <br>
                                            <br>
                                        <?php if($permisos[48][USUARIOS::$LEER]){ ?>
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
                                        <div class="tab-pane " id="tab4">
                                            <br>
                                            <br>
                                        <?php if($permisos[49][USUARIOS::$LEER]){ ?>
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
                                        <?php if($permisos[50][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5SolicitudPresidenteMuni',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5SolicitudPresidenteMuni',
		                                                                        'id'=>'p5SolicitudPresidenteMuni'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5SolicitudPresidenteMuni' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5CertificadoCabildo',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5CertificadoCabildo',
		                                                                        'id'=>'p5CertificadoCabildo'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5CertificadoCabildo' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoLotificacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoLotificacion',
		                                                                        'id'=>'p5PlanoLotificacion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoLotificacion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5RecepcionJapac',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5RecepcionJapac',
		                                                                        'id'=>'p5RecepcionJapac'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5RecepcionJapac' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5ActaRecepcion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5ActaRecepcion',
		                                                                        'id'=>'p5ActaRecepcion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5ActaRecepcion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5MemoriaTecno',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5MemoriaTecno',
		                                                                        'id'=>'p5MemoriaTecno'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5MemoriaTecno' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoAgua',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoAgua',
		                                                                        'id'=>'p5PlanoAgua'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoAgua' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoAlcantarillado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoAlcantarillado',
		                                                                        'id'=>'p5PlanoAlcantarillado'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoAlcantarillado' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5RecepcionCfe',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5RecepcionCfe',
		                                                                        'id'=>'p5RecepcionCfe'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5RecepcionCfe' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5ActaRecepcionCfe',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5ActaRecepcionCfe',
		                                                                        'id'=>'p5ActaRecepcionCfe'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5ActaRecepcionCfe' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5CartaCompromiso',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5CartaCompromiso',
		                                                                        'id'=>'p5CartaCompromiso'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5CartaCompromiso' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5MemoriaTecnoCfe',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5MemoriaTecnoCfe',
		                                                                        'id'=>'p5MemoriaTecnoCfe'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5MemoriaTecnoCfe' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoCfe',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoCfe',
		                                                                        'id'=>'p5PlanoCfe'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoCfe' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5RecepcionAlumbrado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5RecepcionAlumbrado',
		                                                                        'id'=>'p5RecepcionAlumbrado'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5RecepcionAlumbrado' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5OficioRecepcion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5OficioRecepcion',
		                                                                        'id'=>'p5OficioRecepcion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5OficioRecepcion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5MemoriaTecnoAlumbrado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5MemoriaTecnoAlumbrado',
		                                                                        'id'=>'p5MemoriaTecnoAlumbrado'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5MemoriaTecnoAlumbrado' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoAlumbrado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoAlumbrado',
		                                                                        'id'=>'p5PlanoAlumbrado'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoAlumbrado' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5RecepcionCivil',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5RecepcionCivil',
		                                                                        'id'=>'p5RecepcionCivil'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5RecepcionCivil' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5ActaTecnica',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5ActaTecnica',
		                                                                        'id'=>'p5ActaTecnica'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5ActaTecnica' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5MemoriaTecnoCivil',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5MemoriaTecnoCivil',
		                                                                        'id'=>'p5MemoriaTecnoCivil'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5MemoriaTecnoCivil' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoObras',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoObras',
		                                                                        'id'=>'p5PlanoObras'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoObras' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5Donaciones',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5Donaciones',
		                                                                        'id'=>'p5Donaciones'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5Donaciones' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5EscriturasPublica',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5EscriturasPublica',
		                                                                        'id'=>'p5EscriturasPublica'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5EscriturasPublica' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoPoligono',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoPoligono',
		                                                                        'id'=>'p5PlanoPoligono'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoPoligono' >ver</a>
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
                                        <?php if($permisos[51][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6SolicitudPresidenteMuni')->checkbox([
		                                                                                                            'name'=>'p6SolicitudPresidenteMuni',
		                                                                                                            'id'=>'p6SolicitudPresidenteMuni'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6SolicitudPresidenteMuni' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6CertificadoCabildo')->checkbox([
		                                                                                                            'name'=>'p6CertificadoCabildo',
		                                                                                                            'id'=>'p6CertificadoCabildo'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6CertificadoCabildo' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6PlanoLotificacion')->checkbox([
		                                                                                                            'name'=>'p6PlanoLotificacion',
		                                                                                                            'id'=>'p6PlanoLotificacion'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6PlanoLotificacion' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6RecepcionJapac')->checkbox([
		                                                                                                            'name'=>'p6RecepcionJapac',
		                                                                                                            'id'=>'p6RecepcionJapac'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6RecepcionJapac' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6ActaTecnica')->checkbox([
		                                                                                                            'name'=>'p6ActaTecnica',
		                                                                                                            'id'=>'p6ActaTecnica'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6ActaTecnica' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6MemoriaTecno')->checkbox([
		                                                                                                            'name'=>'p6MemoriaTecno',
		                                                                                                            'id'=>'p6MemoriaTecno'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6MemoriaTecno' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6PlanoAgua')->checkbox([
		                                                                                                            'name'=>'p6PlanoAgua',
		                                                                                                            'id'=>'p6PlanoAgua'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6PlanoAgua' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6PlanoAlcantarillado')->checkbox([
		                                                                                                            'name'=>'p6PlanoAlcantarillado',
		                                                                                                            'id'=>'p6PlanoAlcantarillado'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6PlanoAlcantarillado' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6RecepcionCfe')->checkbox([
		                                                                                                            'name'=>'p6RecepcionCfe',
		                                                                                                            'id'=>'p6RecepcionCfe'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6RecepcionCfe' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6ActaRecepcion')->checkbox([
		                                                                                                            'name'=>'p6ActaRecepcion',
		                                                                                                            'id'=>'p6ActaRecepcion'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6ActaRecepcion' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6CartaCompromiso')->checkbox([
		                                                                                                            'name'=>'p6CartaCompromiso',
		                                                                                                            'id'=>'p6CartaCompromiso'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6CartaCompromiso' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6MemoriaTecnoCfe')->checkbox([
		                                                                                                            'name'=>'p6MemoriaTecnoCfe',
		                                                                                                            'id'=>'p6MemoriaTecnoCfe'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6MemoriaTecnoCfe' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6PlanoCfe')->checkbox([
		                                                                                                            'name'=>'p6PlanoCfe',
		                                                                                                            'id'=>'p6PlanoCfe'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6PlanoCfe' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6RecepcionAlumbrado')->checkbox([
		                                                                                                            'name'=>'p6RecepcionAlumbrado',
		                                                                                                            'id'=>'p6RecepcionAlumbrado'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6RecepcionAlumbrado' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6OficioRecepcion')->checkbox([
		                                                                                                            'name'=>'p6OficioRecepcion',
		                                                                                                            'id'=>'p6OficioRecepcion'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6OficioRecepcion' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6MemoriaTecnoAlumbrado')->checkbox([
		                                                                                                            'name'=>'p6MemoriaTecnoAlumbrado',
		                                                                                                            'id'=>'p6MemoriaTecnoAlumbrado'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6MemoriaTecnoAlumbrado' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6PlanoAlumbrado')->checkbox([
		                                                                                                            'name'=>'p6PlanoAlumbrado',
		                                                                                                            'id'=>'p6PlanoAlumbrado'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6PlanoAlumbrado' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6RecepcionCivil')->checkbox([
		                                                                                                            'name'=>'p6RecepcionCivil',
		                                                                                                            'id'=>'p6RecepcionCivil'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6RecepcionCivil' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6ActaTecnicaObras')->checkbox([
		                                                                                                            'name'=>'p6ActaTecnicaObras',
		                                                                                                            'id'=>'p6ActaTecnicaObras'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6ActaTecnicaObras' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6MemoriaTecnoCivil')->checkbox([
		                                                                                                            'name'=>'p6MemoriaTecnoCivil',
		                                                                                                            'id'=>'p6MemoriaTecnoCivil'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6MemoriaTecnoCivil' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6PlanoObras')->checkbox([
		                                                                                                            'name'=>'p6PlanoObras',
		                                                                                                            'id'=>'p6PlanoObras'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6PlanoObras' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6Donaciones')->checkbox([
		                                                                                                            'name'=>'p6Donaciones',
		                                                                                                            'id'=>'p6Donaciones'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6Donaciones' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6EscriturasPublica')->checkbox([
		                                                                                                            'name'=>'p6EscriturasPublica',
		                                                                                                            'id'=>'p6EscriturasPublica'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6EscriturasPublica' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6PlanoPoligono')->checkbox([
		                                                                                                            'name'=>'p6PlanoPoligono',
		                                                                                                            'id'=>'p6PlanoPoligono'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6PlanoPoligono' >ver</a> 
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
                                        <?php if($permisos[52][USUARIOS::$LEER]){ ?>
 																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7Recepcion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p7Recepcion',
		                                                                        'id'=>'p7Recepcion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp7Recepcion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
																								<div class="col-sm-6">
		                                            <button  id="btnConstancia" type="button" class="btn btn-primary  active">Guardar Recepción</button>
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Constancia',3=>'Paso 3: Supervision',4=>'Paso 4: Revision',5=>'Paso 5: Documentos',6=>'Paso 6: Revision',7=>'Paso 7: Recepcion',], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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
                                url: '".Yii::$app->homeUrl."//tramites-recepcion/atras', // point to server-side PHP script 
                                dataType: 'json',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                               
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

  
            \$('#verp5SolicitudPresidenteMuni').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5SolicitudPresidenteMuni')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5SolicitudPresidenteMuni').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5CertificadoCabildo').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5CertificadoCabildo')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5CertificadoCabildo').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5PlanoLotificacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5PlanoLotificacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5PlanoLotificacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5RecepcionJapac').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5RecepcionJapac')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5RecepcionJapac').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5ActaRecepcion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5ActaRecepcion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5ActaRecepcion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5MemoriaTecno').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5MemoriaTecno')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5MemoriaTecno').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5PlanoAgua').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5PlanoAgua')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5PlanoAgua').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5PlanoAlcantarillado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5PlanoAlcantarillado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5PlanoAlcantarillado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5RecepcionCfe').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5RecepcionCfe')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5RecepcionCfe').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5ActaRecepcionCfe').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5ActaRecepcionCfe')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5ActaRecepcionCfe').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5CartaCompromiso').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5CartaCompromiso')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5CartaCompromiso').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5MemoriaTecnoCfe').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5MemoriaTecnoCfe')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5MemoriaTecnoCfe').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5PlanoCfe').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5PlanoCfe')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5PlanoCfe').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5RecepcionAlumbrado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5RecepcionAlumbrado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5RecepcionAlumbrado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5OficioRecepcion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5OficioRecepcion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5OficioRecepcion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5MemoriaTecnoAlumbrado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5MemoriaTecnoAlumbrado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5MemoriaTecnoAlumbrado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5PlanoAlumbrado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5PlanoAlumbrado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5PlanoAlumbrado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5RecepcionCivil').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5RecepcionCivil')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5RecepcionCivil').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5ActaTecnica').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5ActaTecnica')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5ActaTecnica').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5MemoriaTecnoCivil').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5MemoriaTecnoCivil')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5MemoriaTecnoCivil').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5PlanoObras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5PlanoObras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5PlanoObras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5Donaciones').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5Donaciones')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5Donaciones').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5EscriturasPublica').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5EscriturasPublica')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5EscriturasPublica').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5PlanoPoligono').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5PlanoPoligono')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5PlanoPoligono').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6SolicitudPresidenteMuni').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6SolicitudPresidenteMuni')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6SolicitudPresidenteMuni').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6CertificadoCabildo').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6CertificadoCabildo')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6CertificadoCabildo').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6PlanoLotificacion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6PlanoLotificacion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6PlanoLotificacion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6RecepcionJapac').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6RecepcionJapac')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6RecepcionJapac').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6ActaTecnica').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6ActaTecnica')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6ActaTecnica').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6MemoriaTecno').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6MemoriaTecno')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6MemoriaTecno').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6PlanoAgua').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6PlanoAgua')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6PlanoAgua').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6PlanoAlcantarillado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6PlanoAlcantarillado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6PlanoAlcantarillado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6RecepcionCfe').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6RecepcionCfe')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6RecepcionCfe').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6ActaRecepcion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6ActaRecepcion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6ActaRecepcion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6CartaCompromiso').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6CartaCompromiso')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6CartaCompromiso').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6MemoriaTecnoCfe').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6MemoriaTecnoCfe')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6MemoriaTecnoCfe').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6PlanoCfe').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6PlanoCfe')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6PlanoCfe').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6RecepcionAlumbrado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6RecepcionAlumbrado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6RecepcionAlumbrado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6OficioRecepcion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6OficioRecepcion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6OficioRecepcion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6MemoriaTecnoAlumbrado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6MemoriaTecnoAlumbrado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6MemoriaTecnoAlumbrado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6PlanoAlumbrado').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6PlanoAlumbrado')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6PlanoAlumbrado').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6RecepcionCivil').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6RecepcionCivil')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6RecepcionCivil').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6ActaTecnicaObras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6ActaTecnicaObras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6ActaTecnicaObras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6MemoriaTecnoCivil').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6MemoriaTecnoCivil')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6MemoriaTecnoCivil').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6PlanoObras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6PlanoObras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6PlanoObras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6Donaciones').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6Donaciones')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6Donaciones').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6EscriturasPublica').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6EscriturasPublica')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6EscriturasPublica').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6PlanoPoligono').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6PlanoPoligono')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6PlanoPoligono').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp7Recepcion').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p7Recepcion')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p7Recepcion').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
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
                    ,maxlength: 20


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
                    ,maxlength: 20


                  },

                  p1NumeroInterio: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 20


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
                    ,maxlength: 20


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
                    ,maxlength: 20


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

                  p5SolicitudPresidenteMuni: {
                    required: true



                  },

                  p5CertificadoCabildo: {
                    required: true



                  },

                  p5PlanoLotificacion: {
                    required: true



                  },

                  p5RecepcionJapac: {
                    required: true



                  },

                  p5ActaRecepcion: {
                    required: true



                  },

                  p5MemoriaTecno: {
                    required: true



                  },

                  p5PlanoAgua: {
                    required: true



                  },

                  p5PlanoAlcantarillado: {
                    required: true



                  },

                  p5RecepcionCfe: {
                    required: true



                  },

                  p5ActaRecepcionCfe: {
                    required: true



                  },

                  p5CartaCompromiso: {
                    required: true



                  },

                  p5MemoriaTecnoCfe: {
                    required: true



                  },

                  p5PlanoCfe: {
                    required: true



                  },

                  p5RecepcionAlumbrado: {
                    required: true



                  },

                  p5OficioRecepcion: {
                    required: true



                  },

                  p5MemoriaTecnoAlumbrado: {
                    required: true



                  },

                  p5PlanoAlumbrado: {
                    required: true



                  },

                  p5RecepcionCivil: {
                    required: true



                  },

                  p5ActaTecnica: {
                    required: true



                  },

                  p5MemoriaTecnoCivil: {
                    required: true



                  },

                  p5PlanoObras: {
                    required: true



                  },

                  p5Donaciones: {
                    required: true



                  },

                  p5EscriturasPublica: {
                    required: true



                  },

                  p5PlanoPoligono: {
                    required: true



                  },

                  p6SolicitudPresidenteMuni: {
                    required: true



                  },

                  p6CertificadoCabildo: {
                    required: true



                  },

                  p6PlanoLotificacion: {
                    required: true



                  },

                  p6RecepcionJapac: {
                    required: true



                  },

                  p6ActaTecnica: {
                    required: true



                  },

                  p6MemoriaTecno: {
                    required: true



                  },

                  p6PlanoAgua: {
                    required: true



                  },

                  p6PlanoAlcantarillado: {
                    required: true



                  },

                  p6RecepcionCfe: {
                    required: true



                  },

                  p6ActaRecepcion: {
                    required: true



                  },

                  p6CartaCompromiso: {
                    required: true



                  },

                  p6MemoriaTecnoCfe: {
                    required: true



                  },

                  p6PlanoCfe: {
                    required: true



                  },

                  p6RecepcionAlumbrado: {
                    required: true



                  },

                  p6OficioRecepcion: {
                    required: true



                  },

                  p6MemoriaTecnoAlumbrado: {
                    required: true



                  },

                  p6PlanoAlumbrado: {
                    required: true



                  },

                  p6RecepcionCivil: {
                    required: true



                  },

                  p6ActaTecnicaObras: {
                    required: true



                  },

                  p6MemoriaTecnoCivil: {
                    required: true



                  },

                  p6PlanoObras: {
                    required: true



                  },

                  p6Donaciones: {
                    required: true



                  },

                  p6EscriturasPublica: {
                    required: true



                  },

                  p6PlanoPoligono: {
                    required: true



                  },

                  p7Recepcion: {
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

                p5SolicitudPresidenteMuni: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5SolicitudPresidenteMuni')}',


                },

                p5CertificadoCabildo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5CertificadoCabildo')}',


                },

                p5PlanoLotificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoLotificacion')}',


                },

                p5RecepcionJapac: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5RecepcionJapac')}',


                },

                p5ActaRecepcion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5ActaRecepcion')}',


                },

                p5MemoriaTecno: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5MemoriaTecno')}',


                },

                p5PlanoAgua: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoAgua')}',


                },

                p5PlanoAlcantarillado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoAlcantarillado')}',


                },

                p5RecepcionCfe: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5RecepcionCfe')}',


                },

                p5ActaRecepcionCfe: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5ActaRecepcionCfe')}',


                },

                p5CartaCompromiso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5CartaCompromiso')}',


                },

                p5MemoriaTecnoCfe: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5MemoriaTecnoCfe')}',


                },

                p5PlanoCfe: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoCfe')}',


                },

                p5RecepcionAlumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5RecepcionAlumbrado')}',


                },

                p5OficioRecepcion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5OficioRecepcion')}',


                },

                p5MemoriaTecnoAlumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5MemoriaTecnoAlumbrado')}',


                },

                p5PlanoAlumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoAlumbrado')}',


                },

                p5RecepcionCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5RecepcionCivil')}',


                },

                p5ActaTecnica: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5ActaTecnica')}',


                },

                p5MemoriaTecnoCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5MemoriaTecnoCivil')}',


                },

                p5PlanoObras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoObras')}',


                },

                p5Donaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5Donaciones')}',


                },

                p5EscriturasPublica: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5EscriturasPublica')}',


                },

                p5PlanoPoligono: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoPoligono')}',


                },

                p6SolicitudPresidenteMuni: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6SolicitudPresidenteMuni')}',


                },

                p6CertificadoCabildo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6CertificadoCabildo')}',


                },

                p6PlanoLotificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6PlanoLotificacion')}',


                },

                p6RecepcionJapac: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6RecepcionJapac')}',


                },

                p6ActaTecnica: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6ActaTecnica')}',


                },

                p6MemoriaTecno: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6MemoriaTecno')}',


                },

                p6PlanoAgua: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6PlanoAgua')}',


                },

                p6PlanoAlcantarillado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6PlanoAlcantarillado')}',


                },

                p6RecepcionCfe: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6RecepcionCfe')}',


                },

                p6ActaRecepcion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6ActaRecepcion')}',


                },

                p6CartaCompromiso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6CartaCompromiso')}',


                },

                p6MemoriaTecnoCfe: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6MemoriaTecnoCfe')}',


                },

                p6PlanoCfe: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6PlanoCfe')}',


                },

                p6RecepcionAlumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6RecepcionAlumbrado')}',


                },

                p6OficioRecepcion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6OficioRecepcion')}',


                },

                p6MemoriaTecnoAlumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6MemoriaTecnoAlumbrado')}',


                },

                p6PlanoAlumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6PlanoAlumbrado')}',


                },

                p6RecepcionCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6RecepcionCivil')}',


                },

                p6ActaTecnicaObras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6ActaTecnicaObras')}',


                },

                p6MemoriaTecnoCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6MemoriaTecnoCivil')}',


                },

                p6PlanoObras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6PlanoObras')}',


                },

                p6Donaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6Donaciones')}',


                },

                p6EscriturasPublica: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6EscriturasPublica')}',


                },

                p6PlanoPoligono: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6PlanoPoligono')}',


                },

                p7Recepcion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p7Recepcion')}',


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
                                                                form_data.append('TramitesRecepcion['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');
                        var p2Constancia = $('#p2Constancia').prop('files')[0];
                        form_data.append('TramitesRecepcion[p2Constancia]', p2Constancia);


                        var p5SolicitudPresidenteMuni = $('#p5SolicitudPresidenteMuni').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5SolicitudPresidenteMuni]', p5SolicitudPresidenteMuni);


                        var p5CertificadoCabildo = $('#p5CertificadoCabildo').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5CertificadoCabildo]', p5CertificadoCabildo);


                        var p5PlanoLotificacion = $('#p5PlanoLotificacion').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5PlanoLotificacion]', p5PlanoLotificacion);


                        var p5RecepcionJapac = $('#p5RecepcionJapac').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5RecepcionJapac]', p5RecepcionJapac);


                        var p5ActaRecepcion = $('#p5ActaRecepcion').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5ActaRecepcion]', p5ActaRecepcion);


                        var p5MemoriaTecno = $('#p5MemoriaTecno').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5MemoriaTecno]', p5MemoriaTecno);


                        var p5PlanoAgua = $('#p5PlanoAgua').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5PlanoAgua]', p5PlanoAgua);


                        var p5PlanoAlcantarillado = $('#p5PlanoAlcantarillado').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5PlanoAlcantarillado]', p5PlanoAlcantarillado);


                        var p5RecepcionCfe = $('#p5RecepcionCfe').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5RecepcionCfe]', p5RecepcionCfe);


                        var p5ActaRecepcionCfe = $('#p5ActaRecepcionCfe').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5ActaRecepcionCfe]', p5ActaRecepcionCfe);


                        var p5CartaCompromiso = $('#p5CartaCompromiso').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5CartaCompromiso]', p5CartaCompromiso);


                        var p5MemoriaTecnoCfe = $('#p5MemoriaTecnoCfe').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5MemoriaTecnoCfe]', p5MemoriaTecnoCfe);


                        var p5PlanoCfe = $('#p5PlanoCfe').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5PlanoCfe]', p5PlanoCfe);


                        var p5RecepcionAlumbrado = $('#p5RecepcionAlumbrado').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5RecepcionAlumbrado]', p5RecepcionAlumbrado);


                        var p5OficioRecepcion = $('#p5OficioRecepcion').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5OficioRecepcion]', p5OficioRecepcion);


                        var p5MemoriaTecnoAlumbrado = $('#p5MemoriaTecnoAlumbrado').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5MemoriaTecnoAlumbrado]', p5MemoriaTecnoAlumbrado);


                        var p5PlanoAlumbrado = $('#p5PlanoAlumbrado').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5PlanoAlumbrado]', p5PlanoAlumbrado);


                        var p5RecepcionCivil = $('#p5RecepcionCivil').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5RecepcionCivil]', p5RecepcionCivil);


                        var p5ActaTecnica = $('#p5ActaTecnica').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5ActaTecnica]', p5ActaTecnica);


                        var p5MemoriaTecnoCivil = $('#p5MemoriaTecnoCivil').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5MemoriaTecnoCivil]', p5MemoriaTecnoCivil);


                        var p5PlanoObras = $('#p5PlanoObras').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5PlanoObras]', p5PlanoObras);


                        var p5Donaciones = $('#p5Donaciones').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5Donaciones]', p5Donaciones);


                        var p5EscriturasPublica = $('#p5EscriturasPublica').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5EscriturasPublica]', p5EscriturasPublica);


                        var p5PlanoPoligono = $('#p5PlanoPoligono').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5PlanoPoligono]', p5PlanoPoligono);


                        var p7Recepcion = $('#p7Recepcion').prop('files')[0];
                        form_data.append('TramitesRecepcion[p7Recepcion]', p7Recepcion);



                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramites-recepcion/salvar', // point to server-side PHP script 
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
                                            if(data.p5SolicitudPresidenteMuni!==undefined)
                                                \$('#p5SolicitudPresidenteMuni').attr('value',data.p5SolicitudPresidenteMuni);
                                            if(data.p5CertificadoCabildo!==undefined)
                                                \$('#p5CertificadoCabildo').attr('value',data.p5CertificadoCabildo);
                                            if(data.p5PlanoLotificacion!==undefined)
                                                \$('#p5PlanoLotificacion').attr('value',data.p5PlanoLotificacion);
                                            if(data.p5RecepcionJapac!==undefined)
                                                \$('#p5RecepcionJapac').attr('value',data.p5RecepcionJapac);
                                            if(data.p5ActaRecepcion!==undefined)
                                                \$('#p5ActaRecepcion').attr('value',data.p5ActaRecepcion);
                                            if(data.p5MemoriaTecno!==undefined)
                                                \$('#p5MemoriaTecno').attr('value',data.p5MemoriaTecno);
                                            if(data.p5PlanoAgua!==undefined)
                                                \$('#p5PlanoAgua').attr('value',data.p5PlanoAgua);
                                            if(data.p5PlanoAlcantarillado!==undefined)
                                                \$('#p5PlanoAlcantarillado').attr('value',data.p5PlanoAlcantarillado);
                                            if(data.p5RecepcionCfe!==undefined)
                                                \$('#p5RecepcionCfe').attr('value',data.p5RecepcionCfe);
                                            if(data.p5ActaRecepcionCfe!==undefined)
                                                \$('#p5ActaRecepcionCfe').attr('value',data.p5ActaRecepcionCfe);
                                            if(data.p5CartaCompromiso!==undefined)
                                                \$('#p5CartaCompromiso').attr('value',data.p5CartaCompromiso);
                                            if(data.p5MemoriaTecnoCfe!==undefined)
                                                \$('#p5MemoriaTecnoCfe').attr('value',data.p5MemoriaTecnoCfe);
                                            if(data.p5PlanoCfe!==undefined)
                                                \$('#p5PlanoCfe').attr('value',data.p5PlanoCfe);
                                            if(data.p5RecepcionAlumbrado!==undefined)
                                                \$('#p5RecepcionAlumbrado').attr('value',data.p5RecepcionAlumbrado);
                                            if(data.p5OficioRecepcion!==undefined)
                                                \$('#p5OficioRecepcion').attr('value',data.p5OficioRecepcion);
                                            if(data.p5MemoriaTecnoAlumbrado!==undefined)
                                                \$('#p5MemoriaTecnoAlumbrado').attr('value',data.p5MemoriaTecnoAlumbrado);
                                            if(data.p5PlanoAlumbrado!==undefined)
                                                \$('#p5PlanoAlumbrado').attr('value',data.p5PlanoAlumbrado);
                                            if(data.p5RecepcionCivil!==undefined)
                                                \$('#p5RecepcionCivil').attr('value',data.p5RecepcionCivil);
                                            if(data.p5ActaTecnica!==undefined)
                                                \$('#p5ActaTecnica').attr('value',data.p5ActaTecnica);
                                            if(data.p5MemoriaTecnoCivil!==undefined)
                                                \$('#p5MemoriaTecnoCivil').attr('value',data.p5MemoriaTecnoCivil);
                                            if(data.p5PlanoObras!==undefined)
                                                \$('#p5PlanoObras').attr('value',data.p5PlanoObras);
                                            if(data.p5Donaciones!==undefined)
                                                \$('#p5Donaciones').attr('value',data.p5Donaciones);
                                            if(data.p5EscriturasPublica!==undefined)
                                                \$('#p5EscriturasPublica').attr('value',data.p5EscriturasPublica);
                                            if(data.p5PlanoPoligono!==undefined)
                                                \$('#p5PlanoPoligono').attr('value',data.p5PlanoPoligono);
                                            if(data.p7Recepcion!==undefined)
                                                \$('#p7Recepcion').attr('value',data.p7Recepcion);

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
