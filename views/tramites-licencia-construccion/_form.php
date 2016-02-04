

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
/* @var $model app\models\TramitesLicenciaConstruccion */
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
                    <h2> Licencia de Construcción</h2>
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
                                                <a id="btntab3" href="#tab3" data-toggle="tab" disabled="disabled"> <span class="step">3</span> <span class="title">Resolutivo</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:16.666666666667%">
                                                <a id="btntab4" href="#tab4" data-toggle="tab" disabled="disabled"> <span class="step">4</span> <span class="title">Revision</span> </a>
                                            </li>
                                            <li   data-target="#step5" style="width:16.666666666667%">
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Licencia de Construccion</span> </a>
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
                                        <?php if($permisos[1][USUARIOS::$LEER]){ ?>
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
																									</div>
																								</div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																								<div class="panel panel-default">
																								  <div class="panel-heading">
																								    <h3 class="panel-title">Director Responsable de Obra</h3>
																								  </div>
																								  <div class="panel-body">
				                                            <div class="row">
				                                                <div class="col-sm-12">
				                                                    <?= $form->field($model,'p1NombreDRO',[  'showLabels'=>true,
				                                                                                        'showErrors'=>false,
				                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
				                                                                                        'options'=>['class' => 'form-group']]
				                                                                                        )->input('text',[
				                                                                                                            'class' => 'form-control input-lg',
				                                                                                                            'placeholder'=>$model->getAttributeLabel('p1NombreDRO'),
				                                                                                                            'name'=>'p1NombreDRO',
				                                                                                                            'id'=>'p1NombreDRO'
				                                                                                                        ]
				                                                                                        );?> 
				                                                </div>
				                                            </div>
				                                            <div class="row">
				                                                <div class="col-sm-12">
				                                                    <?= $form->field($model,'p1NumeroDRO',[  'showLabels'=>true,
				                                                                                        'showErrors'=>false,
				                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
				                                                                                        'options'=>['class' => 'form-group']]
				                                                                                        )->input('text',[
				                                                                                                            'class' => 'form-control input-lg',
				                                                                                                            'placeholder'=>$model->getAttributeLabel('p1NumeroDRO'),
				                                                                                                            'name'=>'p1NumeroDRO',
				                                                                                                            'id'=>'p1NumeroDRO'
				                                                                                                        ]
				                                                                                        );?> 
				                                                </div>
				                                            </div>
				                                            <div class="row">
				                                                <div class="col-sm-12">
				                                                    <?= $form->field($model,'p1TelefonoDRO',[  'showLabels'=>true,
				                                                                                        'showErrors'=>false,
				                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
				                                                                                        'options'=>['class' => 'form-group']]
				                                                                                        )->input('text',[
				                                                                                                            'class' => 'form-control input-lg',
				                                                                                                            'placeholder'=>$model->getAttributeLabel('p1TelefonoDRO'),
				                                                                                                            'name'=>'p1TelefonoDRO',
				                                                                                                            'id'=>'p1TelefonoDRO'
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
																								    <h3 class="panel-title">Superficie Construida</h3>
																								  </div>
																								  <div class="panel-body">
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
																								</div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																								<div class="panel panel-default">
																								  <div class="panel-heading">
																								    <h3 class="panel-title">Superficie por Construir</h3>
																								  </div>
																								  <div class="panel-body">
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
																									    <h3 class="panel-title">Concepto y Tipo de Licencia</h3>
																									  </div>
																									  <div class="panel-body">
					                                            <div class="row">
					                                                <div class="col-sm-12">
					                                                    <?= $form->field($model,'p1Concepto',[  'showLabels'=>true,
					                                                                                        'showErrors'=>false,
					                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                                                        'options'=>['class' => 'form-group']]
					                                                                                        )->input('text',[
					                                                                                                            'class' => 'form-control input-lg',
					                                                                                                            'placeholder'=>$model->getAttributeLabel('p1Concepto'),
					                                                                                                            'name'=>'p1Concepto',
					                                                                                                            'id'=>'p1Concepto'
					                                                                                                        ]
					                                                                                        );?> 
					                                                </div>
					                                            </div>
					                                            <div class="row">
					                                                <div class="col-sm-12">
					                                                    <?= $form->field($model,'p1Tipo',[  'showLabels'=>true,
					                                                                                        'showErrors'=>false,
					                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
					                                                                                        'options'=>['class' => 'form-group']]
					                                                                                        )->input('text',[
					                                                                                                            'class' => 'form-control input-lg',
					                                                                                                            'placeholder'=>$model->getAttributeLabel('p1Tipo'),
					                                                                                                            'name'=>'p1Tipo',
					                                                                                                            'id'=>'p1Tipo'
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
                                        <?php if($permisos[2][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2CopiaEscritura',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2CopiaEscritura',
		                                                                        'id'=>'p2CopiaEscritura'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2CopiaEscritura' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2PlanoManzanero',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2PlanoManzanero',
		                                                                        'id'=>'p2PlanoManzanero'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2PlanoManzanero' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2CasaHabitacionAlineamientoNumeroOficial',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2CasaHabitacionAlineamientoNumeroOficial',
		                                                                        'id'=>'p2CasaHabitacionAlineamientoNumeroOficial'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2CasaHabitacionAlineamientoNumeroOficial' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2CasaHabitacionCroquis',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2CasaHabitacionCroquis',
		                                                                        'id'=>'p2CasaHabitacionCroquis'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2CasaHabitacionCroquis' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2CasaHabitacionPredial',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2CasaHabitacionPredial',
		                                                                        'id'=>'p2CasaHabitacionPredial'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2CasaHabitacionPredial' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2CasaHabitacionEscrituras',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2CasaHabitacionEscrituras',
		                                                                        'id'=>'p2CasaHabitacionEscrituras'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2CasaHabitacionEscrituras' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionCasaHabitacionAlineamiento',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionCasaHabitacionAlineamiento',
		                                                                        'id'=>'p2ConstruccionCasaHabitacionAlineamiento'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionCasaHabitacionAlineamiento' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionCasaHabitacionPlano',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionCasaHabitacionPlano',
		                                                                        'id'=>'p2ConstruccionCasaHabitacionPlano'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionCasaHabitacionPlano' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionCasaHabitacionPredial',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionCasaHabitacionPredial',
		                                                                        'id'=>'p2ConstruccionCasaHabitacionPredial'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionCasaHabitacionPredial' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionCasaHabitacionEscrituras',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionCasaHabitacionEscrituras',
		                                                                        'id'=>'p2ConstruccionCasaHabitacionEscrituras'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionCasaHabitacionEscrituras' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionCasaHabitacionBitacora',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionCasaHabitacionBitacora',
		                                                                        'id'=>'p2ConstruccionCasaHabitacionBitacora'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionCasaHabitacionBitacora' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2Solicitud',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2Solicitud',
		                                                                        'id'=>'p2Solicitud'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2Solicitud' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionCasaHabitacionSolicitud',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionCasaHabitacionSolicitud',
		                                                                        'id'=>'p2ConstruccionCasaHabitacionSolicitud'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionCasaHabitacionSolicitud' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionCasaHabitacionProyecto',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionCasaHabitacionProyecto',
		                                                                        'id'=>'p2ConstruccionCasaHabitacionProyecto'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionCasaHabitacionProyecto' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionLocalAlineamiento',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionLocalAlineamiento',
		                                                                        'id'=>'p2ConstruccionLocalAlineamiento'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionLocalAlineamiento' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionLocalPlano',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionLocalPlano',
		                                                                        'id'=>'p2ConstruccionLocalPlano'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionLocalPlano' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionLocalLicencia',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionLocalLicencia',
		                                                                        'id'=>'p2ConstruccionLocalLicencia'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionLocalLicencia' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionLocalPredial',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionLocalPredial',
		                                                                        'id'=>'p2ConstruccionLocalPredial'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionLocalPredial' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionLocalEscrituras',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionLocalEscrituras',
		                                                                        'id'=>'p2ConstruccionLocalEscrituras'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionLocalEscrituras' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionLocalSolicitud',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionLocalSolicitud',
		                                                                        'id'=>'p2ConstruccionLocalSolicitud'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionLocalSolicitud' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionLocalBitacora',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionLocalBitacora',
		                                                                        'id'=>'p2ConstruccionLocalBitacora'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionLocalBitacora' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ConstruccionLocalProyecto',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ConstruccionLocalProyecto',
		                                                                        'id'=>'p2ConstruccionLocalProyecto'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ConstruccionLocalProyecto' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2BardasAlineamiento',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2BardasAlineamiento',
		                                                                        'id'=>'p2BardasAlineamiento'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2BardasAlineamiento' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2BardasMarcarBarda',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2BardasMarcarBarda',
		                                                                        'id'=>'p2BardasMarcarBarda'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2BardasMarcarBarda' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2BardasPredial',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2BardasPredial',
		                                                                        'id'=>'p2BardasPredial'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2BardasPredial' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2BardasEscrituras',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2BardasEscrituras',
		                                                                        'id'=>'p2BardasEscrituras'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2BardasEscrituras' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2BardasAltura',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2BardasAltura',
		                                                                        'id'=>'p2BardasAltura'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2BardasAltura' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2RemodelacionAlineamiento',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2RemodelacionAlineamiento',
		                                                                        'id'=>'p2RemodelacionAlineamiento'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2RemodelacionAlineamiento' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2RemodelacionCroquis',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2RemodelacionCroquis',
		                                                                        'id'=>'p2RemodelacionCroquis'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2RemodelacionCroquis' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2RemodelacionPresupuesto',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2RemodelacionPresupuesto',
		                                                                        'id'=>'p2RemodelacionPresupuesto'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2RemodelacionPresupuesto' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2RemodelacionPredial',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2RemodelacionPredial',
		                                                                        'id'=>'p2RemodelacionPredial'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2RemodelacionPredial' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2RemodelacionEscrituras',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2RemodelacionEscrituras',
		                                                                        'id'=>'p2RemodelacionEscrituras'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2RemodelacionEscrituras' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2RemodelacionLicencia',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2RemodelacionLicencia',
		                                                                        'id'=>'p2RemodelacionLicencia'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2RemodelacionLicencia' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2BanquetasPredial',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2BanquetasPredial',
		                                                                        'id'=>'p2BanquetasPredial'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2BanquetasPredial' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2BanquetasCroquis',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2BanquetasCroquis',
		                                                                        'id'=>'p2BanquetasCroquis'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2BanquetasCroquis' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ProrrogaPermiso',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ProrrogaPermiso',
		                                                                        'id'=>'p2ProrrogaPermiso'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ProrrogaPermiso' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ProrrogaRecibo',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ProrrogaRecibo',
		                                                                        'id'=>'p2ProrrogaRecibo'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ProrrogaRecibo' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ProrrogaPlano',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ProrrogaPlano',
		                                                                        'id'=>'p2ProrrogaPlano'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ProrrogaPlano' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2ProrrogaSolicitud',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2ProrrogaSolicitud',
		                                                                        'id'=>'p2ProrrogaSolicitud'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2ProrrogaSolicitud' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2PermisoSolicitud',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2PermisoSolicitud',
		                                                                        'id'=>'p2PermisoSolicitud'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2PermisoSolicitud' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2DemolicionEscrituras',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2DemolicionEscrituras',
		                                                                        'id'=>'p2DemolicionEscrituras'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2DemolicionEscrituras' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2DemolicionPredial',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2DemolicionPredial',
		                                                                        'id'=>'p2DemolicionPredial'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2DemolicionPredial' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2DemolicionPlano',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2DemolicionPlano',
		                                                                        'id'=>'p2DemolicionPlano'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2DemolicionPlano' >ver</a>
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
                                        <?php if($permisos[1084][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Resolutivo',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p3Resolutivo',
		                                                                        'id'=>'p3Resolutivo'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp3Resolutivo' >ver</a>
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
                                        <?php if($permisos[1085][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4Escrituras')->checkbox([
		                                                                                                            'name'=>'p4Escrituras',
		                                                                                                            'id'=>'p4Escrituras'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4Escrituras' >ver</a> 
		                                                </div>
		                                            </div>
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
		                                                    <?= $form->field($model,'p4PlanoManzanero')->checkbox([
		                                                                                                            'name'=>'p4PlanoManzanero',
		                                                                                                            'id'=>'p4PlanoManzanero'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4PlanoManzanero' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4CasaHabitacionAlineamientoNumeroOficial')->checkbox([
		                                                                                                            'name'=>'p4CasaHabitacionAlineamientoNumeroOficial',
		                                                                                                            'id'=>'p4CasaHabitacionAlineamientoNumeroOficial'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4CasaHabitacionAlineamientoNumeroOficial' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4CasaHabitacionCroquis')->checkbox([
		                                                                                                            'name'=>'p4CasaHabitacionCroquis',
		                                                                                                            'id'=>'p4CasaHabitacionCroquis'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4CasaHabitacionCroquis' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4CasaHabitacionPredial')->checkbox([
		                                                                                                            'name'=>'p4CasaHabitacionPredial',
		                                                                                                            'id'=>'p4CasaHabitacionPredial'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4CasaHabitacionPredial' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4CasaHabitacionEscrituras')->checkbox([
		                                                                                                            'name'=>'p4CasaHabitacionEscrituras',
		                                                                                                            'id'=>'p4CasaHabitacionEscrituras'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4CasaHabitacionEscrituras' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionCasaHabitacionAlineamiento')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionCasaHabitacionAlineamiento',
		                                                                                                            'id'=>'p4ConstruccionCasaHabitacionAlineamiento'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionCasaHabitacionAlineamiento' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionCasaHabitacionPlano')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionCasaHabitacionPlano',
		                                                                                                            'id'=>'p4ConstruccionCasaHabitacionPlano'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionCasaHabitacionPlano' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionCasaHabitacionPredial')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionCasaHabitacionPredial',
		                                                                                                            'id'=>'p4ConstruccionCasaHabitacionPredial'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionCasaHabitacionPredial' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionCasaHabitacionEscrituras')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionCasaHabitacionEscrituras',
		                                                                                                            'id'=>'p4ConstruccionCasaHabitacionEscrituras'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionCasaHabitacionEscrituras' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionCasaHabitacionBitacora')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionCasaHabitacionBitacora',
		                                                                                                            'id'=>'p4ConstruccionCasaHabitacionBitacora'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionCasaHabitacionBitacora' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionCasaHabitacionSolicitud')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionCasaHabitacionSolicitud',
		                                                                                                            'id'=>'p4ConstruccionCasaHabitacionSolicitud'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionCasaHabitacionSolicitud' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionCasaHabitacionProyecto')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionCasaHabitacionProyecto',
		                                                                                                            'id'=>'p4ConstruccionCasaHabitacionProyecto'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionCasaHabitacionProyecto' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionLocalAlineamiento')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionLocalAlineamiento',
		                                                                                                            'id'=>'p4ConstruccionLocalAlineamiento'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionLocalAlineamiento' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionLocalPlano')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionLocalPlano',
		                                                                                                            'id'=>'p4ConstruccionLocalPlano'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionLocalPlano' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionLocalLicencia')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionLocalLicencia',
		                                                                                                            'id'=>'p4ConstruccionLocalLicencia'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionLocalLicencia' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionLocalPredial')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionLocalPredial',
		                                                                                                            'id'=>'p4ConstruccionLocalPredial'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionLocalPredial' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionLocalEscrituras')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionLocalEscrituras',
		                                                                                                            'id'=>'p4ConstruccionLocalEscrituras'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionLocalEscrituras' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionLocalSolicitud')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionLocalSolicitud',
		                                                                                                            'id'=>'p4ConstruccionLocalSolicitud'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionLocalSolicitud' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionLocalBitacora')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionLocalBitacora',
		                                                                                                            'id'=>'p4ConstruccionLocalBitacora'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionLocalBitacora' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ConstruccionLocalProyecto')->checkbox([
		                                                                                                            'name'=>'p4ConstruccionLocalProyecto',
		                                                                                                            'id'=>'p4ConstruccionLocalProyecto'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ConstruccionLocalProyecto' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4BardasAlineamiento')->checkbox([
		                                                                                                            'name'=>'p4BardasAlineamiento',
		                                                                                                            'id'=>'p4BardasAlineamiento'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4BardasAlineamiento' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4BardasMarcarBarda')->checkbox([
		                                                                                                            'name'=>'p4BardasMarcarBarda',
		                                                                                                            'id'=>'p4BardasMarcarBarda'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4BardasMarcarBarda' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4BardasPredial')->checkbox([
		                                                                                                            'name'=>'p4BardasPredial',
		                                                                                                            'id'=>'p4BardasPredial'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4BardasPredial' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4BardasEscrituras')->checkbox([
		                                                                                                            'name'=>'p4BardasEscrituras',
		                                                                                                            'id'=>'p4BardasEscrituras'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4BardasEscrituras' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4BardasAltura')->checkbox([
		                                                                                                            'name'=>'p4BardasAltura',
		                                                                                                            'id'=>'p4BardasAltura'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4BardasAltura' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4RemodelacionAlineamiento')->checkbox([
		                                                                                                            'name'=>'p4RemodelacionAlineamiento',
		                                                                                                            'id'=>'p4RemodelacionAlineamiento'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4RemodelacionAlineamiento' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4RemodelacionCroquis')->checkbox([
		                                                                                                            'name'=>'p4RemodelacionCroquis',
		                                                                                                            'id'=>'p4RemodelacionCroquis'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4RemodelacionCroquis' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4RemodelacionPresupuesto')->checkbox([
		                                                                                                            'name'=>'p4RemodelacionPresupuesto',
		                                                                                                            'id'=>'p4RemodelacionPresupuesto'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4RemodelacionPresupuesto' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4RemodelacionPredial')->checkbox([
		                                                                                                            'name'=>'p4RemodelacionPredial',
		                                                                                                            'id'=>'p4RemodelacionPredial'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4RemodelacionPredial' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4RemodelacionEscrituras')->checkbox([
		                                                                                                            'name'=>'p4RemodelacionEscrituras',
		                                                                                                            'id'=>'p4RemodelacionEscrituras'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4RemodelacionEscrituras' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4RemodelacionLicencia')->checkbox([
		                                                                                                            'name'=>'p4RemodelacionLicencia',
		                                                                                                            'id'=>'p4RemodelacionLicencia'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4RemodelacionLicencia' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4BanquetasPredial')->checkbox([
		                                                                                                            'name'=>'p4BanquetasPredial',
		                                                                                                            'id'=>'p4BanquetasPredial'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4BanquetasPredial' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4BanquetasCroquis')->checkbox([
		                                                                                                            'name'=>'p4BanquetasCroquis',
		                                                                                                            'id'=>'p4BanquetasCroquis'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4BanquetasCroquis' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ProrrogaPermiso')->checkbox([
		                                                                                                            'name'=>'p4ProrrogaPermiso',
		                                                                                                            'id'=>'p4ProrrogaPermiso'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ProrrogaPermiso' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ProrrogaRecibo')->checkbox([
		                                                                                                            'name'=>'p4ProrrogaRecibo',
		                                                                                                            'id'=>'p4ProrrogaRecibo'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ProrrogaRecibo' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ProrrogaPlano')->checkbox([
		                                                                                                            'name'=>'p4ProrrogaPlano',
		                                                                                                            'id'=>'p4ProrrogaPlano'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ProrrogaPlano' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ProrrogaSolicitud')->checkbox([
		                                                                                                            'name'=>'p4ProrrogaSolicitud',
		                                                                                                            'id'=>'p4ProrrogaSolicitud'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4ProrrogaSolicitud' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4PermisoSolicitud')->checkbox([
		                                                                                                            'name'=>'p4PermisoSolicitud',
		                                                                                                            'id'=>'p4PermisoSolicitud'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4PermisoSolicitud' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4DemolicionEscrituras')->checkbox([
		                                                                                                            'name'=>'p4DemolicionEscrituras',
		                                                                                                            'id'=>'p4DemolicionEscrituras'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4DemolicionEscrituras' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4DemolicionPredial')->checkbox([
		                                                                                                            'name'=>'p4DemolicionPredial',
		                                                                                                            'id'=>'p4DemolicionPredial'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4DemolicionPredial' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4DemolicionPlano')->checkbox([
		                                                                                                            'name'=>'p4DemolicionPlano',
		                                                                                                            'id'=>'p4DemolicionPlano'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4DemolicionPlano' >ver</a> 
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
                                        <?php if($permisos[1086][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5Licencia',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5Licencia',
		                                                                        'id'=>'p5Licencia'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5Licencia' >ver</a>
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
                                        <?php if($permisos[1087][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="col-sm-6">
			                                            <br>
																									<button  id="btnConstancia" type="button" class="btn btn-primary  active">Guardar Licencia de Construcción</button>
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Documentos',3=>'Paso 3: Resolutivo',4=>'Paso 4: Revision',5=>'Paso 5: Licencia de Construccion',6=>'Paso 6: Archivo',], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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
                                url: '".Yii::$app->homeUrl."//tramites-licencia-construccion/atras', // point to server-side PHP script 
                                dataType: 'json',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                               
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

  

  
            \$('#verp2CopiaEscritura').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2CopiaEscritura')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2CopiaEscritura').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2PlanoManzanero').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2PlanoManzanero')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2PlanoManzanero').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2CasaHabitacionAlineamientoNumeroOficial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2CasaHabitacionAlineamientoNumeroOficial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2CasaHabitacionAlineamientoNumeroOficial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2CasaHabitacionCroquis').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2CasaHabitacionCroquis')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2CasaHabitacionCroquis').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2CasaHabitacionPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2CasaHabitacionPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2CasaHabitacionPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2CasaHabitacionEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2CasaHabitacionEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2CasaHabitacionEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionCasaHabitacionAlineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionCasaHabitacionAlineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionCasaHabitacionAlineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionCasaHabitacionPlano').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionCasaHabitacionPlano')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionCasaHabitacionPlano').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionCasaHabitacionPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionCasaHabitacionPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionCasaHabitacionPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionCasaHabitacionEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionCasaHabitacionEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionCasaHabitacionEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionCasaHabitacionBitacora').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionCasaHabitacionBitacora')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionCasaHabitacionBitacora').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2Solicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Solicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Solicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionCasaHabitacionSolicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionCasaHabitacionSolicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionCasaHabitacionSolicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionCasaHabitacionProyecto').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionCasaHabitacionProyecto')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionCasaHabitacionProyecto').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionLocalAlineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionLocalAlineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionLocalAlineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionLocalPlano').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionLocalPlano')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionLocalPlano').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionLocalLicencia').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionLocalLicencia')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionLocalLicencia').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionLocalPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionLocalPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionLocalPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionLocalEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionLocalEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionLocalEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionLocalSolicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionLocalSolicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionLocalSolicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionLocalBitacora').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionLocalBitacora')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionLocalBitacora').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ConstruccionLocalProyecto').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ConstruccionLocalProyecto')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ConstruccionLocalProyecto').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2BardasAlineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2BardasAlineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2BardasAlineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2BardasMarcarBarda').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2BardasMarcarBarda')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2BardasMarcarBarda').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2BardasPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2BardasPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2BardasPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2BardasEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2BardasEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2BardasEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2BardasAltura').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2BardasAltura')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2BardasAltura').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2RemodelacionAlineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2RemodelacionAlineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2RemodelacionAlineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2RemodelacionCroquis').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2RemodelacionCroquis')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2RemodelacionCroquis').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2RemodelacionPresupuesto').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2RemodelacionPresupuesto')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2RemodelacionPresupuesto').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2RemodelacionPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2RemodelacionPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2RemodelacionPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2RemodelacionEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2RemodelacionEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2RemodelacionEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2RemodelacionLicencia').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2RemodelacionLicencia')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2RemodelacionLicencia').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2BanquetasPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2BanquetasPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2BanquetasPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2BanquetasCroquis').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2BanquetasCroquis')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2BanquetasCroquis').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ProrrogaPermiso').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ProrrogaPermiso')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ProrrogaPermiso').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ProrrogaRecibo').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ProrrogaRecibo')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ProrrogaRecibo').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ProrrogaPlano').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ProrrogaPlano')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ProrrogaPlano').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ProrrogaSolicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ProrrogaSolicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ProrrogaSolicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2PermisoSolicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2PermisoSolicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2PermisoSolicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2DemolicionEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2DemolicionEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2DemolicionEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2DemolicionPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2DemolicionPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2DemolicionPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2DemolicionPlano').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2DemolicionPlano')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2DemolicionPlano').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Resolutivo').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Resolutivo')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Resolutivo').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4Escrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4Escrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4Escrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4Solicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4Solicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4Solicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4PlanoManzanero').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4PlanoManzanero')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4PlanoManzanero').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4CasaHabitacionAlineamientoNumeroOficial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4CasaHabitacionAlineamientoNumeroOficial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4CasaHabitacionAlineamientoNumeroOficial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4CasaHabitacionCroquis').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4CasaHabitacionCroquis')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4CasaHabitacionCroquis').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4CasaHabitacionPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4CasaHabitacionPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4CasaHabitacionPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4CasaHabitacionEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4CasaHabitacionEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4CasaHabitacionEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionCasaHabitacionAlineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionCasaHabitacionAlineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionCasaHabitacionAlineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionCasaHabitacionPlano').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionCasaHabitacionPlano')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionCasaHabitacionPlano').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionCasaHabitacionPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionCasaHabitacionPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionCasaHabitacionPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionCasaHabitacionEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionCasaHabitacionEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionCasaHabitacionEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionCasaHabitacionBitacora').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionCasaHabitacionBitacora')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionCasaHabitacionBitacora').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionCasaHabitacionSolicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionCasaHabitacionSolicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionCasaHabitacionSolicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionCasaHabitacionProyecto').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionCasaHabitacionProyecto')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionCasaHabitacionProyecto').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionLocalAlineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionLocalAlineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionLocalAlineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionLocalPlano').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionLocalPlano')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionLocalPlano').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionLocalLicencia').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionLocalLicencia')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionLocalLicencia').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionLocalPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionLocalPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionLocalPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionLocalEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionLocalEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionLocalEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionLocalSolicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionLocalSolicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionLocalSolicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionLocalBitacora').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionLocalBitacora')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionLocalBitacora').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ConstruccionLocalProyecto').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ConstruccionLocalProyecto')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ConstruccionLocalProyecto').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4BardasAlineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4BardasAlineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4BardasAlineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4BardasMarcarBarda').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4BardasMarcarBarda')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4BardasMarcarBarda').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4BardasPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4BardasPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4BardasPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4BardasEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4BardasEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4BardasEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4BardasAltura').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4BardasAltura')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4BardasAltura').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4RemodelacionAlineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4RemodelacionAlineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4RemodelacionAlineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4RemodelacionCroquis').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4RemodelacionCroquis')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4RemodelacionCroquis').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4RemodelacionPresupuesto').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4RemodelacionPresupuesto')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4RemodelacionPresupuesto').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4RemodelacionPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4RemodelacionPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4RemodelacionPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4RemodelacionEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4RemodelacionEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4RemodelacionEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4RemodelacionLicencia').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4RemodelacionLicencia')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4RemodelacionLicencia').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4BanquetasPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4BanquetasPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4BanquetasPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4BanquetasCroquis').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4BanquetasCroquis')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4BanquetasCroquis').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ProrrogaPermiso').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ProrrogaPermiso')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ProrrogaPermiso').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ProrrogaRecibo').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ProrrogaRecibo')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ProrrogaRecibo').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ProrrogaPlano').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ProrrogaPlano')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ProrrogaPlano').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ProrrogaSolicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ProrrogaSolicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ProrrogaSolicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4PermisoSolicitud').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4PermisoSolicitud')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4PermisoSolicitud').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4DemolicionEscrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4DemolicionEscrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4DemolicionEscrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4DemolicionPredial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4DemolicionPredial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4DemolicionPredial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4DemolicionPlano').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4DemolicionPlano')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4DemolicionPlano').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp5Licencia').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5Licencia')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5Licencia').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp6EnvioExpediente').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6EnvioExpediente')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6EnvioExpediente').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
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

                  p1NombreDRO: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1NumeroDRO: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1TelefonoDRO: {
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

                  p1PlantaBajaConstruida: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1PlantaAltaConstruida: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1OtrosConstruida: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1TotalConstruida: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1PlantaBajaXConstruir: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1PlantaAltaXConstruir: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1OtrosXConstruir: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1TotalXConstruir: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1Observaciones: {
                    required: false
                    
                    ,minlength: 1



                  },

                  p2CopiaEscritura: {
                    required: true



                  },

                  p2PlanoManzanero: {
                    required: true



                  },

                  p2CasaHabitacionAlineamientoNumeroOficial: {
                    required: true



                  },

                  p2CasaHabitacionCroquis: {
                    required: true



                  },

                  p2CasaHabitacionPredial: {
                    required: true



                  },

                  p2CasaHabitacionEscrituras: {
                    required: true



                  },

                  p2ConstruccionCasaHabitacionAlineamiento: {
                    required: true



                  },

                  p2ConstruccionCasaHabitacionPlano: {
                    required: true



                  },

                  p2ConstruccionCasaHabitacionPredial: {
                    required: true



                  },

                  p2ConstruccionCasaHabitacionEscrituras: {
                    required: true



                  },

                  p2ConstruccionCasaHabitacionBitacora: {
                    required: true



                  },

                  p2Solicitud: {
                    required: true



                  },

                  p2ConstruccionCasaHabitacionSolicitud: {
                    required: true



                  },

                  p2ConstruccionCasaHabitacionProyecto: {
                    required: true



                  },

                  p2ConstruccionLocalAlineamiento: {
                    required: true



                  },

                  p2ConstruccionLocalPlano: {
                    required: true



                  },

                  p2ConstruccionLocalLicencia: {
                    required: true



                  },

                  p2ConstruccionLocalPredial: {
                    required: true



                  },

                  p2ConstruccionLocalEscrituras: {
                    required: true



                  },

                  p2ConstruccionLocalSolicitud: {
                    required: true



                  },

                  p2ConstruccionLocalBitacora: {
                    required: true



                  },

                  p2ConstruccionLocalProyecto: {
                    required: true



                  },

                  p2BardasAlineamiento: {
                    required: true



                  },

                  p2BardasMarcarBarda: {
                    required: true



                  },

                  p2BardasPredial: {
                    required: true



                  },

                  p2BardasEscrituras: {
                    required: true



                  },

                  p2BardasAltura: {
                    required: true



                  },

                  p2RemodelacionAlineamiento: {
                    required: true



                  },

                  p2RemodelacionCroquis: {
                    required: true



                  },

                  p2RemodelacionPresupuesto: {
                    required: true



                  },

                  p2RemodelacionPredial: {
                    required: true



                  },

                  p2RemodelacionEscrituras: {
                    required: true



                  },

                  p2RemodelacionLicencia: {
                    required: true



                  },

                  p2BanquetasPredial: {
                    required: true



                  },

                  p2BanquetasCroquis: {
                    required: true



                  },

                  p2ProrrogaPermiso: {
                    required: true



                  },

                  p2ProrrogaRecibo: {
                    required: true



                  },

                  p2ProrrogaPlano: {
                    required: true



                  },

                  p2ProrrogaSolicitud: {
                    required: true



                  },

                  p2PermisoSolicitud: {
                    required: true



                  },

                  p2DemolicionEscrituras: {
                    required: true



                  },

                  p2DemolicionPredial: {
                    required: true



                  },

                  p2DemolicionPlano: {
                    required: true



                  },

                  p3Resolutivo: {
                    required: true



                  },

                  p4Escrituras: {
                    required: true



                  },

                  p4Solicitud: {
                    required: true



                  },

                  p4PlanoManzanero: {
                    required: true



                  },

                  p4CasaHabitacionAlineamientoNumeroOficial: {
                    required: true



                  },

                  p4CasaHabitacionCroquis: {
                    required: true



                  },

                  p4CasaHabitacionPredial: {
                    required: true



                  },

                  p4CasaHabitacionEscrituras: {
                    required: true



                  },

                  p4ConstruccionCasaHabitacionAlineamiento: {
                    required: true



                  },

                  p4ConstruccionCasaHabitacionPlano: {
                    required: true



                  },

                  p4ConstruccionCasaHabitacionPredial: {
                    required: true



                  },

                  p4ConstruccionCasaHabitacionEscrituras: {
                    required: true



                  },

                  p4ConstruccionCasaHabitacionBitacora: {
                    required: true



                  },

                  p4ConstruccionCasaHabitacionSolicitud: {
                    required: true



                  },

                  p4ConstruccionCasaHabitacionProyecto: {
                    required: true



                  },

                  p4ConstruccionLocalAlineamiento: {
                    required: true



                  },

                  p4ConstruccionLocalPlano: {
                    required: true



                  },

                  p4ConstruccionLocalLicencia: {
                    required: true



                  },

                  p4ConstruccionLocalPredial: {
                    required: true



                  },

                  p4ConstruccionLocalEscrituras: {
                    required: true



                  },

                  p4ConstruccionLocalSolicitud: {
                    required: true



                  },

                  p4ConstruccionLocalBitacora: {
                    required: true



                  },

                  p4ConstruccionLocalProyecto: {
                    required: true



                  },

                  p4BardasAlineamiento: {
                    required: true



                  },

                  p4BardasMarcarBarda: {
                    required: true



                  },

                  p4BardasPredial: {
                    required: true



                  },

                  p4BardasEscrituras: {
                    required: true



                  },

                  p4BardasAltura: {
                    required: true



                  },

                  p4RemodelacionAlineamiento: {
                    required: true



                  },

                  p4RemodelacionCroquis: {
                    required: true



                  },

                  p4RemodelacionPresupuesto: {
                    required: true



                  },

                  p4RemodelacionPredial: {
                    required: true



                  },

                  p4RemodelacionEscrituras: {
                    required: true



                  },

                  p4RemodelacionLicencia: {
                    required: true



                  },

                  p4BanquetasPredial: {
                    required: true



                  },

                  p4BanquetasCroquis: {
                    required: true



                  },

                  p4ProrrogaPermiso: {
                    required: true



                  },

                  p4ProrrogaRecibo: {
                    required: true



                  },

                  p4ProrrogaPlano: {
                    required: true



                  },

                  p4ProrrogaSolicitud: {
                    required: true



                  },

                  p4PermisoSolicitud: {
                    required: true



                  },

                  p4DemolicionEscrituras: {
                    required: true



                  },

                  p4DemolicionPredial: {
                    required: true



                  },

                  p4DemolicionPlano: {
                    required: true



                  },

                  p5Licencia: {
                    required: true



                  },

                  p6EnvioExpediente: {
                    required: true



                  },

                  p6Observaciones: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p1Concepto: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1Tipo: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },
                },
                
                messages: {
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

                p1NombreDRO: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NombreDRO')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NombreDRO')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NombreDRO')} excede el numero de caracteres permitidos',


                },

                p1NumeroDRO: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NumeroDRO')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NumeroDRO')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NumeroDRO')} excede el numero de caracteres permitidos',


                },

                p1TelefonoDRO: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TelefonoDRO')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoDRO')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoDRO')} excede el numero de caracteres permitidos',


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

                p1LotePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1LotePredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1LotePredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1LotePredio')} excede el numero de caracteres permitidos',


                },

                p1ManzanaPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ManzanaPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ManzanaPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ManzanaPredio')} excede el numero de caracteres permitidos',


                },

                p1ClaveCatastralPredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1ClaveCatastralPredio')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ClaveCatastralPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ClaveCatastralPredio')} excede el numero de caracteres permitidos',


                },

                p1NorteLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NorteLocalizacion')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NorteLocalizacion')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NorteLocalizacion')} excede el numero de caracteres permitidos',


                },

                p1SurLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1SurLocalizacion')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1SurLocalizacion')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1SurLocalizacion')} excede el numero de caracteres permitidos',


                },

                p1OrienteLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1OrienteLocalizacion')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1OrienteLocalizacion')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1OrienteLocalizacion')} excede el numero de caracteres permitidos',


                },

                p1PonienteLocalizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PonienteLocalizacion')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1PonienteLocalizacion')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1PonienteLocalizacion')} excede el numero de caracteres permitidos',


                },

                p1PlantaBajaConstruida: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PlantaBajaConstruida')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaConstruida')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaConstruida')} excede el numero de caracteres permitidos',


                },

                p1PlantaAltaConstruida: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PlantaAltaConstruida')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaConstruida')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaConstruida')} excede el numero de caracteres permitidos',


                },

                p1OtrosConstruida: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1OtrosConstruida')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1OtrosConstruida')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1OtrosConstruida')} excede el numero de caracteres permitidos',


                },

                p1TotalConstruida: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TotalConstruida')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TotalConstruida')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TotalConstruida')} excede el numero de caracteres permitidos',


                },

                p1PlantaBajaXConstruir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PlantaBajaXConstruir')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaXConstruir')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1PlantaBajaXConstruir')} excede el numero de caracteres permitidos',


                },

                p1PlantaAltaXConstruir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1PlantaAltaXConstruir')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaXConstruir')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1PlantaAltaXConstruir')} excede el numero de caracteres permitidos',


                },

                p1OtrosXConstruir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1OtrosXConstruir')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1OtrosXConstruir')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1OtrosXConstruir')} excede el numero de caracteres permitidos',


                },

                p1TotalXConstruir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1TotalXConstruir')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TotalXConstruir')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TotalXConstruir')} excede el numero de caracteres permitidos',


                },

                p1Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Observaciones')}',


                },

                p2CopiaEscritura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2CopiaEscritura')}',


                },

                p2PlanoManzanero: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2PlanoManzanero')}',


                },

                p2CasaHabitacionAlineamientoNumeroOficial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2CasaHabitacionAlineamientoNumeroOficial')}',


                },

                p2CasaHabitacionCroquis: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2CasaHabitacionCroquis')}',


                },

                p2CasaHabitacionPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2CasaHabitacionPredial')}',


                },

                p2CasaHabitacionEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2CasaHabitacionEscrituras')}',


                },

                p2ConstruccionCasaHabitacionAlineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionCasaHabitacionAlineamiento')}',


                },

                p2ConstruccionCasaHabitacionPlano: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionCasaHabitacionPlano')}',


                },

                p2ConstruccionCasaHabitacionPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionCasaHabitacionPredial')}',


                },

                p2ConstruccionCasaHabitacionEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionCasaHabitacionEscrituras')}',


                },

                p2ConstruccionCasaHabitacionBitacora: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionCasaHabitacionBitacora')}',


                },

                p2Solicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Solicitud')}',


                },

                p2ConstruccionCasaHabitacionSolicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionCasaHabitacionSolicitud')}',


                },

                p2ConstruccionCasaHabitacionProyecto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionCasaHabitacionProyecto')}',


                },

                p2ConstruccionLocalAlineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionLocalAlineamiento')}',


                },

                p2ConstruccionLocalPlano: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionLocalPlano')}',


                },

                p2ConstruccionLocalLicencia: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionLocalLicencia')}',


                },

                p2ConstruccionLocalPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionLocalPredial')}',


                },

                p2ConstruccionLocalEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionLocalEscrituras')}',


                },

                p2ConstruccionLocalSolicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionLocalSolicitud')}',


                },

                p2ConstruccionLocalBitacora: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionLocalBitacora')}',


                },

                p2ConstruccionLocalProyecto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ConstruccionLocalProyecto')}',


                },

                p2BardasAlineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2BardasAlineamiento')}',


                },

                p2BardasMarcarBarda: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2BardasMarcarBarda')}',


                },

                p2BardasPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2BardasPredial')}',


                },

                p2BardasEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2BardasEscrituras')}',


                },

                p2BardasAltura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2BardasAltura')}',


                },

                p2RemodelacionAlineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2RemodelacionAlineamiento')}',


                },

                p2RemodelacionCroquis: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2RemodelacionCroquis')}',


                },

                p2RemodelacionPresupuesto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2RemodelacionPresupuesto')}',


                },

                p2RemodelacionPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2RemodelacionPredial')}',


                },

                p2RemodelacionEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2RemodelacionEscrituras')}',


                },

                p2RemodelacionLicencia: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2RemodelacionLicencia')}',


                },

                p2BanquetasPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2BanquetasPredial')}',


                },

                p2BanquetasCroquis: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2BanquetasCroquis')}',


                },

                p2ProrrogaPermiso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ProrrogaPermiso')}',


                },

                p2ProrrogaRecibo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ProrrogaRecibo')}',


                },

                p2ProrrogaPlano: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ProrrogaPlano')}',


                },

                p2ProrrogaSolicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ProrrogaSolicitud')}',


                },

                p2PermisoSolicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2PermisoSolicitud')}',


                },

                p2DemolicionEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2DemolicionEscrituras')}',


                },

                p2DemolicionPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2DemolicionPredial')}',


                },

                p2DemolicionPlano: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2DemolicionPlano')}',


                },

                p3Resolutivo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Resolutivo')}',


                },

                p4Escrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Escrituras')}',


                },

                p4Solicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Solicitud')}',


                },

                p4PlanoManzanero: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4PlanoManzanero')}',


                },

                p4CasaHabitacionAlineamientoNumeroOficial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4CasaHabitacionAlineamientoNumeroOficial')}',


                },

                p4CasaHabitacionCroquis: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4CasaHabitacionCroquis')}',


                },

                p4CasaHabitacionPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4CasaHabitacionPredial')}',


                },

                p4CasaHabitacionEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4CasaHabitacionEscrituras')}',


                },

                p4ConstruccionCasaHabitacionAlineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionCasaHabitacionAlineamiento')}',


                },

                p4ConstruccionCasaHabitacionPlano: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionCasaHabitacionPlano')}',


                },

                p4ConstruccionCasaHabitacionPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionCasaHabitacionPredial')}',


                },

                p4ConstruccionCasaHabitacionEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionCasaHabitacionEscrituras')}',


                },

                p4ConstruccionCasaHabitacionBitacora: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionCasaHabitacionBitacora')}',


                },

                p4ConstruccionCasaHabitacionSolicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionCasaHabitacionSolicitud')}',


                },

                p4ConstruccionCasaHabitacionProyecto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionCasaHabitacionProyecto')}',


                },

                p4ConstruccionLocalAlineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionLocalAlineamiento')}',


                },

                p4ConstruccionLocalPlano: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionLocalPlano')}',


                },

                p4ConstruccionLocalLicencia: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionLocalLicencia')}',


                },

                p4ConstruccionLocalPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionLocalPredial')}',


                },

                p4ConstruccionLocalEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionLocalEscrituras')}',


                },

                p4ConstruccionLocalSolicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionLocalSolicitud')}',


                },

                p4ConstruccionLocalBitacora: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionLocalBitacora')}',


                },

                p4ConstruccionLocalProyecto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ConstruccionLocalProyecto')}',


                },

                p4BardasAlineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4BardasAlineamiento')}',


                },

                p4BardasMarcarBarda: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4BardasMarcarBarda')}',


                },

                p4BardasPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4BardasPredial')}',


                },

                p4BardasEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4BardasEscrituras')}',


                },

                p4BardasAltura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4BardasAltura')}',


                },

                p4RemodelacionAlineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4RemodelacionAlineamiento')}',


                },

                p4RemodelacionCroquis: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4RemodelacionCroquis')}',


                },

                p4RemodelacionPresupuesto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4RemodelacionPresupuesto')}',


                },

                p4RemodelacionPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4RemodelacionPredial')}',


                },

                p4RemodelacionEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4RemodelacionEscrituras')}',


                },

                p4RemodelacionLicencia: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4RemodelacionLicencia')}',


                },

                p4BanquetasPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4BanquetasPredial')}',


                },

                p4BanquetasCroquis: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4BanquetasCroquis')}',


                },

                p4ProrrogaPermiso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ProrrogaPermiso')}',


                },

                p4ProrrogaRecibo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ProrrogaRecibo')}',


                },

                p4ProrrogaPlano: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ProrrogaPlano')}',


                },

                p4ProrrogaSolicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ProrrogaSolicitud')}',


                },

                p4PermisoSolicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4PermisoSolicitud')}',


                },

                p4DemolicionEscrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4DemolicionEscrituras')}',


                },

                p4DemolicionPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4DemolicionPredial')}',


                },

                p4DemolicionPlano: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4DemolicionPlano')}',


                },

                p5Licencia: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5Licencia')}',


                },

                p6EnvioExpediente: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6EnvioExpediente')}',


                },

                p6Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6Observaciones')}',


                },

                p1Concepto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Concepto')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1Concepto')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1Concepto')} excede el numero de caracteres permitidos',


                },

                p1Tipo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1Tipo')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1Tipo')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1Tipo')} excede el numero de caracteres permitidos',


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
                                                                form_data.append('TramitesLicenciaConstruccion['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');
                        var p2CopiaEscritura = $('#p2CopiaEscritura').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2CopiaEscritura]', p2CopiaEscritura);


                        var p2PlanoManzanero = $('#p2PlanoManzanero').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2PlanoManzanero]', p2PlanoManzanero);


                        var p2CasaHabitacionAlineamientoNumeroOficial = $('#p2CasaHabitacionAlineamientoNumeroOficial').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2CasaHabitacionAlineamientoNumeroOficial]', p2CasaHabitacionAlineamientoNumeroOficial);


                        var p2CasaHabitacionCroquis = $('#p2CasaHabitacionCroquis').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2CasaHabitacionCroquis]', p2CasaHabitacionCroquis);


                        var p2CasaHabitacionPredial = $('#p2CasaHabitacionPredial').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2CasaHabitacionPredial]', p2CasaHabitacionPredial);


                        var p2CasaHabitacionEscrituras = $('#p2CasaHabitacionEscrituras').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2CasaHabitacionEscrituras]', p2CasaHabitacionEscrituras);


                        var p2ConstruccionCasaHabitacionAlineamiento = $('#p2ConstruccionCasaHabitacionAlineamiento').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionAlineamiento]', p2ConstruccionCasaHabitacionAlineamiento);


                        var p2ConstruccionCasaHabitacionPlano = $('#p2ConstruccionCasaHabitacionPlano').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionPlano]', p2ConstruccionCasaHabitacionPlano);


                        var p2ConstruccionCasaHabitacionPredial = $('#p2ConstruccionCasaHabitacionPredial').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionPredial]', p2ConstruccionCasaHabitacionPredial);


                        var p2ConstruccionCasaHabitacionEscrituras = $('#p2ConstruccionCasaHabitacionEscrituras').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionEscrituras]', p2ConstruccionCasaHabitacionEscrituras);


                        var p2ConstruccionCasaHabitacionBitacora = $('#p2ConstruccionCasaHabitacionBitacora').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionBitacora]', p2ConstruccionCasaHabitacionBitacora);


                        var p2Solicitud = $('#p2Solicitud').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2Solicitud]', p2Solicitud);


                        var p2ConstruccionCasaHabitacionSolicitud = $('#p2ConstruccionCasaHabitacionSolicitud').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionSolicitud]', p2ConstruccionCasaHabitacionSolicitud);


                        var p2ConstruccionCasaHabitacionProyecto = $('#p2ConstruccionCasaHabitacionProyecto').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionProyecto]', p2ConstruccionCasaHabitacionProyecto);


                        var p2ConstruccionLocalAlineamiento = $('#p2ConstruccionLocalAlineamiento').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalAlineamiento]', p2ConstruccionLocalAlineamiento);


                        var p2ConstruccionLocalPlano = $('#p2ConstruccionLocalPlano').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalPlano]', p2ConstruccionLocalPlano);


                        var p2ConstruccionLocalLicencia = $('#p2ConstruccionLocalLicencia').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalLicencia]', p2ConstruccionLocalLicencia);


                        var p2ConstruccionLocalPredial = $('#p2ConstruccionLocalPredial').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalPredial]', p2ConstruccionLocalPredial);


                        var p2ConstruccionLocalEscrituras = $('#p2ConstruccionLocalEscrituras').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalEscrituras]', p2ConstruccionLocalEscrituras);


                        var p2ConstruccionLocalSolicitud = $('#p2ConstruccionLocalSolicitud').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalSolicitud]', p2ConstruccionLocalSolicitud);


                        var p2ConstruccionLocalBitacora = $('#p2ConstruccionLocalBitacora').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalBitacora]', p2ConstruccionLocalBitacora);


                        var p2ConstruccionLocalProyecto = $('#p2ConstruccionLocalProyecto').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalProyecto]', p2ConstruccionLocalProyecto);


                        var p2BardasAlineamiento = $('#p2BardasAlineamiento').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2BardasAlineamiento]', p2BardasAlineamiento);


                        var p2BardasMarcarBarda = $('#p2BardasMarcarBarda').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2BardasMarcarBarda]', p2BardasMarcarBarda);


                        var p2BardasPredial = $('#p2BardasPredial').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2BardasPredial]', p2BardasPredial);


                        var p2BardasEscrituras = $('#p2BardasEscrituras').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2BardasEscrituras]', p2BardasEscrituras);


                        var p2BardasAltura = $('#p2BardasAltura').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2BardasAltura]', p2BardasAltura);


                        var p2RemodelacionAlineamiento = $('#p2RemodelacionAlineamiento').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2RemodelacionAlineamiento]', p2RemodelacionAlineamiento);


                        var p2RemodelacionCroquis = $('#p2RemodelacionCroquis').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2RemodelacionCroquis]', p2RemodelacionCroquis);


                        var p2RemodelacionPresupuesto = $('#p2RemodelacionPresupuesto').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2RemodelacionPresupuesto]', p2RemodelacionPresupuesto);


                        var p2RemodelacionPredial = $('#p2RemodelacionPredial').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2RemodelacionPredial]', p2RemodelacionPredial);


                        var p2RemodelacionEscrituras = $('#p2RemodelacionEscrituras').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2RemodelacionEscrituras]', p2RemodelacionEscrituras);


                        var p2RemodelacionLicencia = $('#p2RemodelacionLicencia').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2RemodelacionLicencia]', p2RemodelacionLicencia);


                        var p2BanquetasPredial = $('#p2BanquetasPredial').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2BanquetasPredial]', p2BanquetasPredial);


                        var p2BanquetasCroquis = $('#p2BanquetasCroquis').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2BanquetasCroquis]', p2BanquetasCroquis);


                        var p2ProrrogaPermiso = $('#p2ProrrogaPermiso').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ProrrogaPermiso]', p2ProrrogaPermiso);


                        var p2ProrrogaRecibo = $('#p2ProrrogaRecibo').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ProrrogaRecibo]', p2ProrrogaRecibo);


                        var p2ProrrogaPlano = $('#p2ProrrogaPlano').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ProrrogaPlano]', p2ProrrogaPlano);


                        var p2ProrrogaSolicitud = $('#p2ProrrogaSolicitud').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2ProrrogaSolicitud]', p2ProrrogaSolicitud);


                        var p2PermisoSolicitud = $('#p2PermisoSolicitud').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2PermisoSolicitud]', p2PermisoSolicitud);


                        var p2DemolicionEscrituras = $('#p2DemolicionEscrituras').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2DemolicionEscrituras]', p2DemolicionEscrituras);


                        var p2DemolicionPredial = $('#p2DemolicionPredial').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2DemolicionPredial]', p2DemolicionPredial);


                        var p2DemolicionPlano = $('#p2DemolicionPlano').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p2DemolicionPlano]', p2DemolicionPlano);


                        var p3Resolutivo = $('#p3Resolutivo').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p3Resolutivo]', p3Resolutivo);


                        var p5Licencia = $('#p5Licencia').prop('files')[0];
                        form_data.append('TramitesLicenciaConstruccion[p5Licencia]', p5Licencia);



                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramites-licencia-construccion/salvar', // point to server-side PHP script 
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
                                            if(data.p2CopiaEscritura!==undefined)
                                                \$('#p2CopiaEscritura').attr('value',data.p2CopiaEscritura);
                                            if(data.p2PlanoManzanero!==undefined)
                                                \$('#p2PlanoManzanero').attr('value',data.p2PlanoManzanero);
                                            if(data.p2CasaHabitacionAlineamientoNumeroOficial!==undefined)
                                                \$('#p2CasaHabitacionAlineamientoNumeroOficial').attr('value',data.p2CasaHabitacionAlineamientoNumeroOficial);
                                            if(data.p2CasaHabitacionCroquis!==undefined)
                                                \$('#p2CasaHabitacionCroquis').attr('value',data.p2CasaHabitacionCroquis);
                                            if(data.p2CasaHabitacionPredial!==undefined)
                                                \$('#p2CasaHabitacionPredial').attr('value',data.p2CasaHabitacionPredial);
                                            if(data.p2CasaHabitacionEscrituras!==undefined)
                                                \$('#p2CasaHabitacionEscrituras').attr('value',data.p2CasaHabitacionEscrituras);
                                            if(data.p2ConstruccionCasaHabitacionAlineamiento!==undefined)
                                                \$('#p2ConstruccionCasaHabitacionAlineamiento').attr('value',data.p2ConstruccionCasaHabitacionAlineamiento);
                                            if(data.p2ConstruccionCasaHabitacionPlano!==undefined)
                                                \$('#p2ConstruccionCasaHabitacionPlano').attr('value',data.p2ConstruccionCasaHabitacionPlano);
                                            if(data.p2ConstruccionCasaHabitacionPredial!==undefined)
                                                \$('#p2ConstruccionCasaHabitacionPredial').attr('value',data.p2ConstruccionCasaHabitacionPredial);
                                            if(data.p2ConstruccionCasaHabitacionEscrituras!==undefined)
                                                \$('#p2ConstruccionCasaHabitacionEscrituras').attr('value',data.p2ConstruccionCasaHabitacionEscrituras);
                                            if(data.p2ConstruccionCasaHabitacionBitacora!==undefined)
                                                \$('#p2ConstruccionCasaHabitacionBitacora').attr('value',data.p2ConstruccionCasaHabitacionBitacora);
                                            if(data.p2Solicitud!==undefined)
                                                \$('#p2Solicitud').attr('value',data.p2Solicitud);
                                            if(data.p2ConstruccionCasaHabitacionSolicitud!==undefined)
                                                \$('#p2ConstruccionCasaHabitacionSolicitud').attr('value',data.p2ConstruccionCasaHabitacionSolicitud);
                                            if(data.p2ConstruccionCasaHabitacionProyecto!==undefined)
                                                \$('#p2ConstruccionCasaHabitacionProyecto').attr('value',data.p2ConstruccionCasaHabitacionProyecto);
                                            if(data.p2ConstruccionLocalAlineamiento!==undefined)
                                                \$('#p2ConstruccionLocalAlineamiento').attr('value',data.p2ConstruccionLocalAlineamiento);
                                            if(data.p2ConstruccionLocalPlano!==undefined)
                                                \$('#p2ConstruccionLocalPlano').attr('value',data.p2ConstruccionLocalPlano);
                                            if(data.p2ConstruccionLocalLicencia!==undefined)
                                                \$('#p2ConstruccionLocalLicencia').attr('value',data.p2ConstruccionLocalLicencia);
                                            if(data.p2ConstruccionLocalPredial!==undefined)
                                                \$('#p2ConstruccionLocalPredial').attr('value',data.p2ConstruccionLocalPredial);
                                            if(data.p2ConstruccionLocalEscrituras!==undefined)
                                                \$('#p2ConstruccionLocalEscrituras').attr('value',data.p2ConstruccionLocalEscrituras);
                                            if(data.p2ConstruccionLocalSolicitud!==undefined)
                                                \$('#p2ConstruccionLocalSolicitud').attr('value',data.p2ConstruccionLocalSolicitud);
                                            if(data.p2ConstruccionLocalBitacora!==undefined)
                                                \$('#p2ConstruccionLocalBitacora').attr('value',data.p2ConstruccionLocalBitacora);
                                            if(data.p2ConstruccionLocalProyecto!==undefined)
                                                \$('#p2ConstruccionLocalProyecto').attr('value',data.p2ConstruccionLocalProyecto);
                                            if(data.p2BardasAlineamiento!==undefined)
                                                \$('#p2BardasAlineamiento').attr('value',data.p2BardasAlineamiento);
                                            if(data.p2BardasMarcarBarda!==undefined)
                                                \$('#p2BardasMarcarBarda').attr('value',data.p2BardasMarcarBarda);
                                            if(data.p2BardasPredial!==undefined)
                                                \$('#p2BardasPredial').attr('value',data.p2BardasPredial);
                                            if(data.p2BardasEscrituras!==undefined)
                                                \$('#p2BardasEscrituras').attr('value',data.p2BardasEscrituras);
                                            if(data.p2BardasAltura!==undefined)
                                                \$('#p2BardasAltura').attr('value',data.p2BardasAltura);
                                            if(data.p2RemodelacionAlineamiento!==undefined)
                                                \$('#p2RemodelacionAlineamiento').attr('value',data.p2RemodelacionAlineamiento);
                                            if(data.p2RemodelacionCroquis!==undefined)
                                                \$('#p2RemodelacionCroquis').attr('value',data.p2RemodelacionCroquis);
                                            if(data.p2RemodelacionPresupuesto!==undefined)
                                                \$('#p2RemodelacionPresupuesto').attr('value',data.p2RemodelacionPresupuesto);
                                            if(data.p2RemodelacionPredial!==undefined)
                                                \$('#p2RemodelacionPredial').attr('value',data.p2RemodelacionPredial);
                                            if(data.p2RemodelacionEscrituras!==undefined)
                                                \$('#p2RemodelacionEscrituras').attr('value',data.p2RemodelacionEscrituras);
                                            if(data.p2RemodelacionLicencia!==undefined)
                                                \$('#p2RemodelacionLicencia').attr('value',data.p2RemodelacionLicencia);
                                            if(data.p2BanquetasPredial!==undefined)
                                                \$('#p2BanquetasPredial').attr('value',data.p2BanquetasPredial);
                                            if(data.p2BanquetasCroquis!==undefined)
                                                \$('#p2BanquetasCroquis').attr('value',data.p2BanquetasCroquis);
                                            if(data.p2ProrrogaPermiso!==undefined)
                                                \$('#p2ProrrogaPermiso').attr('value',data.p2ProrrogaPermiso);
                                            if(data.p2ProrrogaRecibo!==undefined)
                                                \$('#p2ProrrogaRecibo').attr('value',data.p2ProrrogaRecibo);
                                            if(data.p2ProrrogaPlano!==undefined)
                                                \$('#p2ProrrogaPlano').attr('value',data.p2ProrrogaPlano);
                                            if(data.p2ProrrogaSolicitud!==undefined)
                                                \$('#p2ProrrogaSolicitud').attr('value',data.p2ProrrogaSolicitud);
                                            if(data.p2PermisoSolicitud!==undefined)
                                                \$('#p2PermisoSolicitud').attr('value',data.p2PermisoSolicitud);
                                            if(data.p2DemolicionEscrituras!==undefined)
                                                \$('#p2DemolicionEscrituras').attr('value',data.p2DemolicionEscrituras);
                                            if(data.p2DemolicionPredial!==undefined)
                                                \$('#p2DemolicionPredial').attr('value',data.p2DemolicionPredial);
                                            if(data.p2DemolicionPlano!==undefined)
                                                \$('#p2DemolicionPlano').attr('value',data.p2DemolicionPlano);
                                            if(data.p3Resolutivo!==undefined)
                                                \$('#p3Resolutivo').attr('value',data.p3Resolutivo);
                                            if(data.p5Licencia!==undefined)
                                                \$('#p5Licencia').attr('value',data.p5Licencia);

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
