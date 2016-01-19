

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
/* @var $model app\models\TramitesRelotificacionFracc */
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
                    <h2> Relotificacion de Fraccionamiento</h2>


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
		                    	<DIV id='observacionesAtras' class="alert alert-danger" role="alert" <?php if(empty($model->observaciones)) if(trim($model->observaciones)=='') echo 'style="display:none;"'; ?> > 
		                    		 <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                    		 <strong>Observaciones: </strong>
		                    		 <?= $model->observaciones ?> 
		                    	</DIV> 
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
                                        <?= $form->field($model,'id')->input('hidden',['name'=>'id','id'=>'idTramite'])->label(false);?>                                         <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <br>
                                        <?php if($permisos[53][USUARIOS::$LEER]){ ?>
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
						                                                   <?= $form->field($model,'p1NorOrientePredio',[ 'showLabels'=>true,
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
						                                                   <?= $form->field($model,'p1SurOrientePredio',[ 'showLabels'=>true,
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
						                                                   <?= $form->field($model,'p1NorPonientePredio',[ 'showLabels'=>true,
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
						                                                   <?= $form->field($model,'p1SurPonientePredio',[ 'showLabels'=>true,
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
                                        <?php if($permisos[54][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2CertificacionCabildo',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                    																	'multiple'=>true,
		                                                                        'name'=>'p2CertificacionCabildo',
		                                                                        'id'=>'p2CertificacionCabildo'        
		                                                    ]);?>                                                    
		                                                                                                 
		                                                    <a href='javascript:void(0);' id='verp2CertificacionCabildo' >
               																																								<?= (!$model->isNewRecord && !empty($model->p2CertificacionCabildo))? "ver":"";?>
               																																							</a>

		                                                   </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2PlanoAprobado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                    																				'multiple'=>true,
		                                                                        'name'=>'p2PlanoAprobado',
		                                                                        'id'=>'p2PlanoAprobado'        
		                                                    ]);?>                                                    
		                                                    <a href='javascript:void(0);' id='verp2PlanoAprobado' >
               																																								<?= (!$model->isNewRecord && !empty($model->p2PlanoAprobado))? "ver":"";?>
               																																							</a>                                         
		                                                        </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2PlanoPropuesta',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                    'multiple'=>true,
		                                                                        'name'=>'p2PlanoPropuesta',
		                                                                        'id'=>'p2PlanoPropuesta'        
		                                                    ]);?>                                                    
		                                                                                                   
		                                                        <a href='javascript:void(0);' id='verp2PlanoPropuesta' >
               																																								<?= (!$model->isNewRecord && !empty($model->p2PlanoPropuesta))? "ver":"";?>
               																																							</a>

		                                                        </div>
		                                            </div>
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
                                        <?php if($permisos[55][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3CertificacionCabildo')->checkbox([
		                                                                                                            'name'=>'p3CertificacionCabildo',
		                                                                                                            'id'=>'p3CertificacionCabildo'
		                                                    ]); ?>                                                  
		                                                    <a href='javascript:void(0);' id='verp3CertificacionCabildo' >
               																																								<?= (!$model->isNewRecord && !empty($model->p3CertificacionCabildo))? "ver":"";?>
               																																							</a>
 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3PlanoAprobado')->checkbox([
		                                                                                                            'name'=>'p3PlanoAprobado',
		                                                                                                            'id'=>'p3PlanoAprobado'
		                                                    ]); ?>
		                                                    <a href='javascript:void(0);' id='verp3PlanoAprobado' >
               																																								<?= (!$model->isNewRecord && !empty($model->p3PlanoAprobado))? "ver":"";?>
               																																							</a>

		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3PlanoPropuesta')->checkbox([
		                                                                                                            'name'=>'p3PlanoPropuesta',
		                                                                                                            'id'=>'p3PlanoPropuesta'
		                                                    ]); ?>                                                   
		                                                    <a href='javascript:void(0);' id='verp3PlanoPropuesta' >
               																																								<?= (!$model->isNewRecord && !empty($model->p3PlanoPropuesta))? "ver":"";?>
               																																							</a>
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Pago')->checkbox([
		                                                                                                            'name'=>'p3Pago',
		                                                                                                            'id'=>'p3Pago'
		                                                    ]); ?> 
		                                                    <a href='javascript:void(0);' id='verp3Pago' >
               																																								<?= (!$model->isNewRecord && !empty($model->p3Pago))? "ver":"";?>
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
                                        <div class="tab-pane " id="tab4">
                                            <br>
                                            <br>
                                        <?php if($permisos[56][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Supervision')->checkbox([
		                                                                                                            'name'=>'p4Supervision',
		                                                                                                            'id'=>'p4Supervision'
		                                                    ]); ?>                      
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Observaciones',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->textarea([
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4Observaciones'),
		                                                                                                            'name'=>'p4Observaciones',
		                                                                                                            'id'=>'p4Observaciones'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																								<div class="row">
	                                               <div class="col-sm-12">
	                                                   <?= $form->field($model,'p4Expediente',[
	                                                   'options'=>['class' => 'form-group']]
	                                                   )->fileInput( [ 'accept' => 'image/jpeg',
	                                                   'multiple'=>true,
	                                                                       'name'=>'p4Expediente',
	                                                                       'id'=>'p4Expediente'       
	                                                   ]);?>     
	                                                   <a href='javascript:void(0);' id='verp4Expediente' >
               																																								<?= (!$model->isNewRecord && !empty($model->p4Expediente))? "ver":"";?>
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
                                            <br>
                                        <?php if($permisos[57][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5Constancia',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'image/jpeg',
		                                                    'multiple'=>true,
		                                                                        'name'=>'p5Constancia',
		                                                                        'id'=>'p5Constancia'        
		                                                    ]);?>   
		                                                    <a href='javascript:void(0);' id='verp5Constancia' >
               																																								<?= (!$model->isNewRecord && !empty($model->p5Constancia))? "ver":"";?>
               																																							</a>                                                               
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
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(4).addClass('complete');";
            $pasoschafas=$pasoschafas. "\$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(4).find('.step').html('<i class=\'fa fa-check\'></i>');";
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
                                url: '".Yii::$app->homeUrl."//tramites-relotificacion-fracc/atras', // point to server-side PHP script 
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
  
            \$('#verp2CertificacionCabildo').click(function() {
                return verimagen('Certificacion de Cabildo');
            });

            \$('#verp4Expediente').click(function() {
                return verimagen('Expediente');
            });

  
            \$('#verp2PlanoAprobado').click(function() {
                return verimagen('Plano Aprobado');
            });

  
            \$('#verp2PlanoPropuesta').click(function() {
                return verimagen('Plano Propuesta');
            });

  
            \$('#verp2Pago').click(function() {
                return verimagen('Pago');
            });

  //Pendiente
            \$('#verp3CertificacionCabildo').click(function() {
                return verimagen('Certificacion de Cabildo');
            });

  //Pendiente
            \$('#verp3PlanoAprobado').click(function() {
                return verimagen('Plano Aprobado');
            });

  //Pendiente
            \$('#verp3PlanoPropuesta').click(function() {
                return verimagen('Plano Propuesta');
            });

  //Pendiente
            \$('#verp3Pago').click(function() {
                return verimagen('Pago');
            });

  //Pendiente
            \$('#verp4Supervision').click(function() {
                return verimagen('Supervision');
            });


            \$('#verp5Constancia').click(function() {
                return verimagen('Constancia');
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

                  p2CertificacionCabildo: {
                 
                    required: ".(($model->isNewRecord || empty($model->p2CertificacionCabildo))? "true":"false")."



                  },

                  p2PlanoAprobado: {
                    required: ".(($model->isNewRecord || empty($model->p2PlanoAprobado))? "true":"false")."



                  },

                  p2PlanoPropuesta: {
                    required: ".(($model->isNewRecord || empty($model->p2PlanoPropuesta))? "true":"false")."



                  },

                  p2Pago: {
                    required: ".(($model->isNewRecord || empty($model->p2Pago))? "true":"false")."



                  },

                  p3CertificacionCabildo: {
                    required: true



                  },

                  p3PlanoAprobado: {
                    required: true



                  },

                  p3PlanoPropuesta: {
                    required: true



                  },

                  p3Pago: {
                    required: true



                  },

                  p4Supervision: {
                    required: true



                  },

                  p4Observaciones: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p5Constancia: {
                    required: true



                  },
                },
                
                messages: {
                p1NombreSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NombreSolicitante')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NombreSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NombreSolicitante')} excede el número de caracteres permitidos',


                },

                p1DireccionSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DireccionSolicitante')}',


                },

                p1TelefonoSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TelefonoSolicitante')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoSolicitante')} excede el número de caracteres permitidos',


                },

                p1CorreoSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1CorreoSolicitante')}',
                  
                  email: 'El Valor de {$model->getAttributeLabel('p1CorreoSolicitante')} no es valido',


                },

                p1UsoActual: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1UsoActual')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1UsoActual')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1UsoActual')} excede el número de caracteres permitidos',


                },

                p1UsoSolicitado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1UsoSolicitado')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1UsoSolicitado')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1UsoSolicitado')} excede el número de caracteres permitidos',


                },

                p1DescripcionProceso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DescripcionProceso')}',


                },

                p1NoCajones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NoCajones')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NoCajones')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NoCajones')} excede el número de caracteres permitidos',


                },

                p1CallePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1CallePredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1CallePredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1CallePredio')} excede el número de caracteres permitidos',


                },

                p1ColoniaPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ColoniaPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ColoniaPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ColoniaPredio')} excede el número de caracteres permitidos',


                },

                p1NumeroOficial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NumeroOficial')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NumeroOficial')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NumeroOficial')} excede el número de caracteres permitidos',


                },

                p1NumeroInterio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NumeroInterio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NumeroInterio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NumeroInterio')} excede el número de caracteres permitidos',


                },

                p1PobladoPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PobladoPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1PobladoPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1PobladoPredio')} excede el número de caracteres permitidos',


                },

                p1SindicaturaPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1SindicaturaPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1SindicaturaPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1SindicaturaPredio')} excede el número de caracteres permitidos',


                },

                p1ClaveCatastralPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ClaveCatastralPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ClaveCatastralPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ClaveCatastralPredio')} excede el número de caracteres permitidos',


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
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NombrePropietarios')} excede el número de caracteres permitidos',


                },

                p1DireccionPropietarios: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DireccionPropietarios')}',


                },

                p1TelefonoPropietarios: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TelefonoPropietarios')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoPropietarios')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoPropietarios')} excede el número de caracteres permitidos',


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
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NombreGestor')} excede el número de caracteres permitidos',


                },

                p1DireccionGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DireccionGestor')}',


                },

                p1TelefonoGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TelefonoGestor')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoGestor')} excede el número de caracteres permitidos',


                },

                p1CorreoGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1CorreoGestor')}',
                  
                  email: 'El Valor de {$model->getAttributeLabel('p1CorreoGestor')} no es valido',


                },

                p2CertificacionCabildo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2CertificacionCabildo')}',


                },

                p2PlanoAprobado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2PlanoAprobado')}',


                },

                p2PlanoPropuesta: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2PlanoPropuesta')}',


                },

                p2Pago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Pago')}',


                },

                p3CertificacionCabildo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3CertificacionCabildo')}',


                },

                p3PlanoAprobado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3PlanoAprobado')}',


                },

                p3PlanoPropuesta: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3PlanoPropuesta')}',


                },

                p3Pago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Pago')}',


                },

                p4Supervision: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Supervision')}',


                },

                p4Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Observaciones')}',


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
                                                            if(item.name =='id' || item.value != '')
                                                                form_data.append('TramitesRelotificacionFracc['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',5);
                  
                    try {
                        console.log('Buscando Archivos');
													
																										var archivos= $('#p5Constancia').prop('files');
	                         for(var i=0;i<archivos.length;i++ ){
	                          form_data.append('TramitesRelotificacionFracc[p5Constancia]['+i+']', archivos[i]);	
	                         }

                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramites-relotificacion-fracc/salvar', // point to server-side PHP script 
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
                                	\$('#dialog_simple').html('<h2>Ocurrio un error, por favor revise que los datos sean correctos y vuelva intentar</h2>');

                                },
                                success: function(data){

                                            
                                            console.log(data.id);
                                            if(data.p4Constancia)
                                                \$('#p4Constancia').attr('value',data.p4Constancia);
                                            \$('#idTramite').val(data.id);
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(4).addClass(
                                              'complete');
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(4).find('.step')
                                            .html('<i class=\'fa fa-check\'></i>');
                                            \$('#observacionesAtras').html('<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span><strong>Observaciones: </strong>'+data.observaciones);
                                            if(!data.observaciones)
                                            	\$('#observacionesAtras').hide();
                                            else
                                            	\$('#observacionesAtras').show();

                           					verimagen('Constancia');
                           					//verimagen('Constancia Zonificacion','{$model->getAttributeLabel('p4Constancia')}');
                                            
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
                                                                form_data.append('TramitesRelotificacionFracc['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');

                        var archivos= $('#p2CertificacionCabildo').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesRelotificacionFracc[p2CertificacionCabildo]['+i+']', archivos[i]);	
                         }

                         var archivos= $('#p2PlanoAprobado').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesRelotificacionFracc[p2PlanoAprobado]['+i+']', archivos[i]);	
                         }

                       
                        var archivos= $('#p2PlanoPropuesta').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesRelotificacionFracc[p2PlanoPropuesta]['+i+']', archivos[i]);	
                         }

                        var p2PlanoPropuesta = $('#p2PlanoPropuesta').prop('files')[0];
                        form_data.append('TramitesRelotificacionFracc[p2PlanoPropuesta]', p2PlanoPropuesta);

                        var archivos= $('#p2PlanoPropuesta').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesRelotificacionFracc[p2PlanoPropuesta]['+i+']', archivos[i]);	
                         }

                        var archivos= $('#p2Pago').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesRelotificacionFracc[p2Pago]['+i+']', archivos[i]);	
                         }
                         var archivos= $('#p4Expediente').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesRelotificacionFracc[p4Expediente]['+i+']', archivos[i]);	
                         }

                        var archivos= $('#p5Constancia').prop('files');
                         for(var i=0;i<archivos.length;i++ ){
                          form_data.append('TramitesRelotificacionFracc[p2Pago]['+i+']', archivos[i]);	
                         }

                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramites-relotificacion-fracc/salvar', // point to server-side PHP script 
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
                                            if(data.p2CertificacionCabildo){
                                                \$('#p2CertificacionCabildo').attr('value',data.p2CertificacionCabildo);
                                                \$('#verp3CertificacionCabildo').html('ver');
                                                \$('#verp2CertificacionCabildo').html('ver');

                                            }
                                            if(data.p2PlanoAprobado){
                                                \$('#p2PlanoAprobado').attr('value',data.p2PlanoAprobado);
                                                \$('#verp3PlanoAprobado').html('ver');
                                                \$('#verp2PlanoAprobado').html('ver');
                                               }
                                            if(data.p2PlanoPropuesta){
                                                \$('#p2PlanoPropuesta').attr('value',data.p2PlanoPropuesta);
                                                \$('#verp3PlanoPropuesta').html('ver');
                                                \$('#verp2PlanoPropuesta').html('ver');
                                               }
                                            if(data.p2Pago){
                                                \$('#p2Pago').attr('value',data.p2Pago);
                                                \$('#verp2Pago').html('ver');
                                                \$('#verp3Pago').html('ver');

                                               }
                                            if(data.p4Expediente){
                                                \$('#p4Expediente').attr('value',data.p4Expediente);
                                                \$('#verp4Expediente').html('ver');

                                            }
                                            if(data.p5Constancia){
                                                \$('#p5Constancia').attr('value',data.p5Constancia);
                                                \$('#verp5Constancia').html('ver');
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
