

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

$tiposLicencias = [0=>'Construccion Casa Habitacion y Ampliacion (Area Menor a 33 M2)',
1=>'Construccion Casa Habitacion y Ampliacion (Area Mayor a 33 M2)',
2=>'Construccion de local comercial, Talleres, Bodegas, y Departamentos',
3=>'Bardas',
4=>'Remodelaciones',
5=>'Banquetas',
6=>'Prorroga de Permiso',
7=>'Permiso de Material en Via Publica',
8=>'Demoliciones']
 

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
					                                                                                        )->dropDownList($tiposLicencias,[
					                                                                                                            'class' => 'form-control input-lg',
					                                                                                                            'prompt'=>'Seleccione Un Tipo',
					                                                                                                            'name'=>'p1Tipo',
					                                                                                                            'id'=>'p1Tipo',
					                                                                                                            
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
<!-- Alineacion, Numero Oficial y Deslinde -->
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
<!-- Construccion casa habitacion construccion menor de 33.00 mt2 -->
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
<!-- Construccion casa habitacion y ampliacion construccion mayor de 33.00 mt2 -->
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
<!-- Construccion de local comercial, talleres, bodega y departamentos -->
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
<!-- Bardas -->
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
<!-- Remodelacion -->
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
<!-- Banquetas -->
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
<!-- Prorroga de Premiso -->
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
<!-- Permiso de Material en Via publica -->
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
<!-- Demolicion -->
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
<!-- Alineacion, Numero Oficial y Deslinde -->
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
<!-- casa habitacion area menor a 33 mt2 -->
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
<!-- construccion casa habitacion y ampliacion area mayor a 33 mt2 -->
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
<!-- construccion de local comercial, talleres, bodegas y departamentos -->
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
<!-- Bardas -->
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
<!-- Remodelacion -->
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
<!-- Banquetas -->
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
<!-- Prorroga de permiso -->
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
<!-- Permiso Material en via publica -->
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4PermisoSolicitud')->checkbox([
		                                                                                                            'name'=>'p4PermisoSolicitud',
		                                                                                                            'id'=>'p4PermisoSolicitud'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp4PermisoSolicitud' >ver</a> 
		                                                </div>
		                                            </div>
<!-- Demolicion -->
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

            \$('#p1Tipo').change(function() {
            	 \$('#p2CasaHabitacionAlineamientoNumeroOficial').show();
            	 \$('#p2CasaHabitacionCroquis').show();
            	 \$('#p2CasaHabitacionPredial').show();
            	 \$('#p2CasaHabitacionEscrituras').show();
            	 \$('#p4CasaHabitacionCroquis').show();
            	 \$('#p4CasaHabitacionEscrituras').show();
            	 \$('#p4CasaHabitacionPredial').show();
            	 \$('#p4CasaHabitacionAlineamientoNumeroOficial').show();
            	 \$('#casahabitacionpredia').show();
												  alert(\$('#p1Tipo').val());
												});
            
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
                return verimagen('Copia Escritura');
            });

  
            \$('#verp2PlanoManzanero').click(function() {
                return verimagen('Plano Manzanero');
            });

  
            \$('#verp2CasaHabitacionAlineamientoNumeroOficial').click(function() {
                return verimagen('Casa Habitacion Alineamiento Numero Oficial');
            });

  
            \$('#verp2CasaHabitacionCroquis').click(function() {
            				return verimagen('Casa Habitacion Croquis');
            });

  
            \$('#verp2CasaHabitacionPredial').click(function() {
                return verimagen('Casa Habitacion Predial');
            });

  
            \$('#verp2CasaHabitacionEscrituras').click(function() {
                return verimagen('Casa Habitacion Escrituras');
            });

  
            \$('#verp2ConstruccionCasaHabitacionAlineamiento').click(function() {
                return verimagen('Construccion Casa Habitacion Alineamiento');
            });

  
            \$('#verp2ConstruccionCasaHabitacionPlano').click(function() {
                return verimagen('Construccion Casa Habitacion Plano');
            });

  
            \$('#verp2ConstruccionCasaHabitacionPredial').click(function() {
                return verimagen('Construccion Casa Habitacion Predial');
            });

  
            \$('#verp2ConstruccionCasaHabitacionEscrituras').click(function() {
                return verimagen('Construccion CasaHabitacion Escrituras');
            });

  
            \$('#verp2ConstruccionCasaHabitacionBitacora').click(function() {
                return verimagen('Construccion Casa Habitacion Bitacora');
            });

  
            \$('#verp2Solicitud').click(function() {
                return verimagen('Solicitud');
            });

  
            \$('#verp2ConstruccionCasaHabitacionSolicitud').click(function() {
                return verimagen('Construccion Casa Habitacion Solicitud');
            });

  
            \$('#verp2ConstruccionCasaHabitacionProyecto').click(function() {
                return verimagen('Construccion Casa Habitacion Proyecto');
            });

  
            \$('#verp2ConstruccionLocalAlineamiento').click(function() {
                return verimagen('Construccion Local Alineamiento');
            });

  
            \$('#verp2ConstruccionLocalPlano').click(function() {
                return verimagen('Construccion Local Plano');
            });

  
            \$('#verp2ConstruccionLocalLicencia').click(function() {
                return verimagen('Construccion Local Licencia');
            });

  
            \$('#verp2ConstruccionLocalPredial').click(function() {
                return verimagen('Construccion Local Predial');
            });

  
            \$('#verp2ConstruccionLocalEscrituras').click(function() {
                return verimagen('Construccion Local Escrituras');
            });

  
            \$('#verp2ConstruccionLocalSolicitud').click(function() {
                return verimagen('Construccion Local Solicitud');
            });

  
            \$('#verp2ConstruccionLocalBitacora').click(function() {
                return verimagen('Construccion Local Bitacora');
            });

  
            \$('#verp2ConstruccionLocalProyecto').click(function() {
                return verimagen('Construccion Local Proyecto');
            });

  
            \$('#verp2BardasAlineamiento').click(function() {
                return verimagen('Bardas Alineamiento');
            });

  
            \$('#verp2BardasMarcarBarda').click(function() {
                return verimagen('Bardas Marcar Barda');
            });

  
            \$('#verp2BardasPredial').click(function() {
                return verimagen('Bardas Predial');
            });

  
            \$('#verp2BardasEscrituras').click(function() {
                return verimagen('Bardas Escrituras');
            });

  
            \$('#verp2BardasAltura').click(function() {
                return verimagen('Bardas Altura');
            });

  
            \$('#verp2RemodelacionAlineamiento').click(function() {
                return verimagen('Remodelacion Alineamiento');
            });

  
            \$('#verp2RemodelacionCroquis').click(function() {
                return verimagen('Remodelacion Croquis');
            });

  
            \$('#verp2RemodelacionPresupuesto').click(function() {
                return verimagen('Remodelacion Presupuesto');
            });

  
            \$('#verp2RemodelacionPredial').click(function() {
                return verimagen('Remodelacion Predial');
            });

  
            \$('#verp2RemodelacionEscrituras').click(function() {
                return verimagen('Remodelacion Escrituras');
            });

  
            \$('#verp2RemodelacionLicencia').click(function() {
                return verimagen('Remodelacion Licencia');
            });

  
            \$('#verp2BanquetasPredial').click(function() {
                return verimagen('Banquetas Predial');
            });

  
            \$('#verp2BanquetasCroquis').click(function() {
                return verimagen('Banquetas Croquis');
            });

  
            \$('#verp2ProrrogaPermiso').click(function() {
                return verimagen('Prorroga Permiso');
            });

  
            \$('#verp2ProrrogaRecibo').click(function() {
                return verimagen('Prorroga Recibo');
            });

  
            \$('#verp2ProrrogaPlano').click(function() {
                return verimagen('Prorroga Plano');
            });

  
            \$('#verp2ProrrogaSolicitud').click(function() {
                return verimagen('Prorroga Solicitud');
            });

  
            \$('#verp2PermisoSolicitud').click(function() {
                return verimagen('Permiso Solicitud');
            });

  
            \$('#verp2DemolicionEscrituras').click(function() {
                return verimagen('Demolicion Escrituras');
            });

  
            \$('#verp2DemolicionPredial').click(function() {
                return verimagen('Demolicion Predial');
            });

  
            \$('#verp2DemolicionPlano').click(function() {
                return verimagen('Demolicion Plano');
            });

  
            \$('#verp3Resolutivo').click(function() {
                return verimagen('Resolutivo');
            });

  
            \$('#verp4Escrituras').click(function() {
                return verimagen('Escrituras');
            });

  
            \$('#verp4Solicitud').click(function() {
                return verimagen('Solicitud');
            });

  
            \$('#verp4PlanoManzanero').click(function() {
                return verimagen('Plano Manzanero');
            });

  
            \$('#verp4CasaHabitacionAlineamientoNumeroOficial').click(function() {
                return verimagen('Casa Habitacion Alineamiento Numero Oficial');
            });

  
            \$('#verp4CasaHabitacionCroquis').click(function() {
                return verimagen('Casa Habitacion Croquis');
            });

  
            \$('#verp4CasaHabitacionPredial').click(function() {
                return verimagen('Casa Habitacion Predial');
            });

  
            \$('#verp4CasaHabitacionEscrituras').click(function() {
                return verimagen('Casa Habitacion Escrituras');
            });

  
            \$('#verp4ConstruccionCasaHabitacionAlineamiento').click(function() {
                return verimagen('Construccion Casa Habitacion Alineamiento');
            });

  
            \$('#verp4ConstruccionCasaHabitacionPlano').click(function() {
                return verimagen('Construccion Casa Habitacion Plano');
            });

  
            \$('#verp4ConstruccionCasaHabitacionPredial').click(function() {
                return verimagen('Construccion Casa Habitacion Predial');
            });

  
            \$('#verp4ConstruccionCasaHabitacionEscrituras').click(function() {
                return verimagen('Construccion Casa Habitacion Escrituras');
            });

  
            \$('#verp4ConstruccionCasaHabitacionBitacora').click(function() {
                return verimagen('Construccion Casa Habitacion Bitacora');
            });

  
            \$('#verp4ConstruccionCasaHabitacionSolicitud').click(function() {
                return verimagen('Construccion Casa Habitacion Solicitud');
            });

  
            \$('#verp4ConstruccionCasaHabitacionProyecto').click(function() {
                return verimagen('Construccion Casa Habitacion Proyecto');
            });

  
            \$('#verp4ConstruccionLocalAlineamiento').click(function() {
                return verimagen('Construccion Local Alineamiento');
            });

  
            \$('#verp4ConstruccionLocalPlano').click(function() {
                return verimagen('Construccion Local Plano');
            });

  
            \$('#verp4ConstruccionLocalLicencia').click(function() {
                return verimagen('Construccion Local Licencia');
            });

  
            \$('#verp4ConstruccionLocalPredial').click(function() {
                return verimagen('Construccion Local Predial');
            });

  
            \$('#verp4ConstruccionLocalEscrituras').click(function() {
                return verimagen('Construccion Local Escrituras');
            });

  
            \$('#verp4ConstruccionLocalSolicitud').click(function() {
                return verimagen('Construccion Local Solicitud');
            });

  
            \$('#verp4ConstruccionLocalBitacora').click(function() {
                return verimagen('Construccion Local Bitacora');
            });

  
            \$('#verp4ConstruccionLocalProyecto').click(function() {
                return verimagen('Construccion Local Proyecto');
            });

  
            \$('#verp4BardasAlineamiento').click(function() {
                return verimagen('Bardas Alineamiento');
            });

  
            \$('#verp4BardasMarcarBarda').click(function() {
                return verimagen('Bardas Marcar Barda');
            });

  
            \$('#verp4BardasPredial').click(function() {
                return verimagen('Bardas Predial');
            });

  
            \$('#verp4BardasEscrituras').click(function() {
                return verimagen('Bardas Escrituras');
            });

  
            \$('#verp4BardasAltura').click(function() {
                return verimagen('Bardas Altura');
            });

  
            \$('#verp4RemodelacionAlineamiento').click(function() {
                return verimagen('Remodelacion Alineamiento');
            });

  
            \$('#verp4RemodelacionCroquis').click(function() {
                return verimagen('Remodelacion Croquis');
            });

  
            \$('#verp4RemodelacionPresupuesto').click(function() {
                return verimagen('Remodelacion Presupuesto');
            });

  
            \$('#verp4RemodelacionPredial').click(function() {
                return verimagen('Remodelacion Predial');
            });

  
            \$('#verp4RemodelacionEscrituras').click(function() {
                return verimagen('Remodelacion Escrituras');
            });

  
            \$('#verp4RemodelacionLicencia').click(function() {
                return verimagen('Remodelacion Licencia');
            });

  
            \$('#verp4BanquetasPredial').click(function() {
                return verimagen('Banquetas Predial');
            });

  
            \$('#verp4BanquetasCroquis').click(function() {
                return verimagen('Banquetas Croquis');
            });

  
            \$('#verp4ProrrogaPermiso').click(function() {
                return verimagen('Prorroga Permiso');
            });

  
            \$('#verp4ProrrogaRecibo').click(function() {
                return verimagen('Prorroga Recibo');
            });

  
            \$('#verp4ProrrogaPlano').click(function() {
                return verimagen('');
            });

  
            \$('#verp4ProrrogaSolicitud').click(function() {
                return verimagen('Prorroga Solicitud');
            });

  
            \$('#verp4PermisoSolicitud').click(function() {
                return verimagen('Permiso Solicitud');
            });

  
            \$('#verp4DemolicionEscrituras').click(function() {
                return verimagen('Demolicion Escrituras');
            });

  
            \$('#verp4DemolicionPredial').click(function() {
                return verimagen('Demolicion Predial');
            });

  
            \$('#verp4DemolicionPlano').click(function() {
                return verimagen('Demolicion Plano');
            });

  
            \$('#verp5Licencia').click(function() {
                return verimagen('Licencia');
            });

  
            \$('#verp6EnvioExpediente').click(function() {
                return verimagen('Envio Expediente');
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
                    required: false



                  },

                  p2PlanoManzanero: {
                    required: false



                  },

                  p2CasaHabitacionAlineamientoNumeroOficial: {
                    required: false



                  },

                  p2CasaHabitacionCroquis: {
                    required: false



                  },

                  p2CasaHabitacionPredial: {
                    required: false



                  },

                  p2CasaHabitacionEscrituras: {
                    required: false



                  },

                  p2ConstruccionCasaHabitacionAlineamiento: {
                    required: false



                  },

                  p2ConstruccionCasaHabitacionPlano: {
                    required: false



                  },

                  p2ConstruccionCasaHabitacionPredial: {
                    required: false



                  },

                  p2ConstruccionCasaHabitacionEscrituras: {
                    required: false



                  },

                  p2ConstruccionCasaHabitacionBitacora: {
                    required: false



                  },

                  p2Solicitud: {
                    required: false



                  },

                  p2ConstruccionCasaHabitacionSolicitud: {
                    required: false



                  },

                  p2ConstruccionCasaHabitacionProyecto: {
                    required: false



                  },

                  p2ConstruccionLocalAlineamiento: {
                    required: false



                  },

                  p2ConstruccionLocalPlano: {
                    required: false



                  },

                  p2ConstruccionLocalLicencia: {
                    required: false



                  },

                  p2ConstruccionLocalPredial: {
                    required: false



                  },

                  p2ConstruccionLocalEscrituras: {
                    required: false



                  },

                  p2ConstruccionLocalSolicitud: {
                    required: false



                  },

                  p2ConstruccionLocalBitacora: {
                    required: false



                  },

                  p2ConstruccionLocalProyecto: {
                    required: false



                  },

                  p2BardasAlineamiento: {
                    required: false



                  },

                  p2BardasMarcarBarda: {
                    required: false



                  },

                  p2BardasPredial: {
                    required: false



                  },

                  p2BardasEscrituras: {
                    required: false



                  },

                  p2BardasAltura: {
                    required: false



                  },

                  p2RemodelacionAlineamiento: {
                    required: false



                  },

                  p2RemodelacionCroquis: {
                    required: false



                  },

                  p2RemodelacionPresupuesto: {
                    required: false



                  },

                  p2RemodelacionPredial: {
                    required: false



                  },

                  p2RemodelacionEscrituras: {
                    required: false



                  },

                  p2RemodelacionLicencia: {
                    required: false



                  },

                  p2BanquetasPredial: {
                    required: false



                  },

                  p2BanquetasCroquis: {
                    required: false



                  },

                  p2ProrrogaPermiso: {
                    required: false



                  },

                  p2ProrrogaRecibo: {
                    required: false



                  },

                  p2ProrrogaPlano: {
                    required: false



                  },

                  p2ProrrogaSolicitud: {
                    required: false



                  },

                  p2PermisoSolicitud: {
                    required: false



                  },

                  p2DemolicionEscrituras: {
                    required: false



                  },

                  p2DemolicionPredial: {
                    required: false



                  },

                  p2DemolicionPlano: {
                    required: false



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

                        var archivos= $('#p2CopiaEscritura').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2CopiaEscritura]['+i+']', archivos[i]);	
                        }
                        
                        var archivos= $('#p2PlanoManzanero').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2PlanoManzanero]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2CasaHabitacionAlineamientoNumeroOficial').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2CasaHabitacionAlineamientoNumeroOficial]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2CasaHabitacionCroquis').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2CasaHabitacionCroquis]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2CasaHabitacionPredial').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2CasaHabitacionPredial]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2CasaHabitacionEscrituras').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2CasaHabitacionEscrituras]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionCasaHabitacionAlineamiento').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionAlineamiento]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionCasaHabitacionPlano').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionPlano]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionCasaHabitacionPredial').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionPredial]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionCasaHabitacionEscrituras').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionEscrituras]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionCasaHabitacionBitacora').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionBitacora]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2Solicitud').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2Solicitud]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionCasaHabitacionSolicitud').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionSolicitud]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionCasaHabitacionProyecto').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionCasaHabitacionProyecto]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionLocalAlineamiento').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalAlineamiento]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionLocalPlano').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalPlano]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionLocalLicencia').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalLicencia]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionLocalPredial').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalPredial]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionLocalEscrituras').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalEscrituras]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionLocalSolicitud').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalSolicitud]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionLocalBitacora').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalBitacora]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ConstruccionLocalProyecto').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ConstruccionLocalProyecto]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2BardasAlineamiento').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2BardasAlineamiento]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2BardasMarcarBarda').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2BardasMarcarBarda]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2BardasPredial').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2BardasPredial]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2BardasEscrituras').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2BardasEscrituras]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2BardasAltura').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2BardasAltura]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2RemodelacionAlineamiento').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2RemodelacionAlineamiento]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2RemodelacionCroquis').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2RemodelacionCroquis]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2RemodelacionPresupuesto').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2RemodelacionPresupuesto]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2RemodelacionPredial').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2RemodelacionPredial]['+i+']', archivos[i]);	
                        }


                        var archivos= $('#p2RemodelacionEscrituras').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2RemodelacionEscrituras]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2RemodelacionLicencia').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2RemodelacionLicencia]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2BanquetasPredial').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2BanquetasPredial]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2BanquetasCroquis').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2BanquetasCroquis]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ProrrogaPermiso').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ProrrogaPermiso]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ProrrogaRecibo').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ProrrogaRecibo]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ProrrogaPlano').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ProrrogaPlano]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2ProrrogaSolicitud').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2ProrrogaSolicitud]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2PermisoSolicitud').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2PermisoSolicitud]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2DemolicionEscrituras').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2DemolicionEscrituras]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2DemolicionPredial').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2DemolicionPredial]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p2DemolicionPlano').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p2DemolicionPlano]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p3Resolutivo').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p3Resolutivo]['+i+']', archivos[i]);	
                        }

                        var archivos= $('#p5Licencia').prop('files');
                        for(var i=0;i<archivos.length;i++ ){
                         form_data.append('TramitesLicenciaConstruccion[p5Licencia]['+i+']', archivos[i]);	
                        }

               



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
                                            if(data.p2CopiaEscritura){
                                                \$('#p2CopiaEscritura').attr('value',data.p2CopiaEscritura);
                                                \$('#verp2CopiaEscritura').html('Ver');

                                            }
                                            if(data.p2PlanoManzanero){
                                                \$('#p2PlanoManzanero').attr('value',data.p2PlanoManzanero);
                                                \$('#verp4PlanoManzanero').html('Ver');
                                                \$('#verp2PlanoManzanero').html('Ver');
                                            }
                                            if(data.p2CasaHabitacionAlineamientoNumeroOficial){
                                                \$('#p2CasaHabitacionAlineamientoNumeroOficial').attr('value',data.p2CasaHabitacionAlineamientoNumeroOficial);
                                                \$('#verp4CasaHabitacionAlineamientoNumeroOficial').html('Ver');
                                                \$('#verp2CasaHabitacionAlineamientoNumeroOficial').html('Ver');
                                            }
                                            if(data.p2CasaHabitacionCroquis){
                                                \$('#p2CasaHabitacionCroquis').attr('value',data.p2CasaHabitacionCroquis);
                                                \$('#verp4CasaHabitacionCroquis').html('Ver');
                                                \$('#verp2CasaHabitacionCroquis').html('Ver');
                                            }
                                            if(data.p2CasaHabitacionPredial){
                                                \$('#p2CasaHabitacionPredial').attr('value',data.p2CasaHabitacionPredial);
                                                \$('#verp4CasaHabitacionPredial').html('Ver');
                                                \$('#verp2CasaHabitacionPredial').html('Ver');
                                            }
                                            if(data.p2CasaHabitacionEscrituras){
                                                \$('#p2CasaHabitacionEscrituras').attr('value',data.p2CasaHabitacionEscrituras);
                                                \$('#verp4CasaHabitacionEscrituras').html('Ver');
                                                \$('#verp2CasaHabitacionEscrituras').html('Ver');
                                            }
                                            if(data.p2ConstruccionCasaHabitacionAlineamiento){
                                                \$('#p2ConstruccionCasaHabitacionAlineamiento').attr('value',data.p2ConstruccionCasaHabitacionAlineamiento);
                                                \$('#verp4ConstruccionCasaHabitacionAlineamiento').html('Ver');
                                                \$('#verp2ConstruccionCasaHabitacionAlineamiento').html('Ver');
                                            }
                                            if(data.p2ConstruccionCasaHabitacionPlano){
                                                \$('#p2ConstruccionCasaHabitacionPlano').attr('value',data.p2ConstruccionCasaHabitacionPlano);
                                                \$('#verp4ConstruccionCasaHabitacionPlano').html('Ver');
                                                \$('#verp2ConstruccionCasaHabitacionPlano').html('Ver');
                                            }
                                            if(data.p2ConstruccionCasaHabitacionPredial){
                                                \$('#p2ConstruccionCasaHabitacionPredial').attr('value',data.p2ConstruccionCasaHabitacionPredial);
                                                \$('#verp4ConstruccionCasaHabitacionPredial').html('Ver');
                                                \$('#verp2ConstruccionCasaHabitacionPredial').html('Ver');
                                            }
                                            if(data.p2ConstruccionCasaHabitacionEscrituras){
                                                \$('#p2ConstruccionCasaHabitacionEscrituras').attr('value',data.p2ConstruccionCasaHabitacionEscrituras);
                                                \$('#verp4ConstruccionCasaHabitacionEscrituras').html('Ver');
                                                \$('#verp2ConstruccionCasaHabitacionEscrituras').html('Ver');
                                            }
                                            if(data.p2ConstruccionCasaHabitacionBitacora){
                                                \$('#p2ConstruccionCasaHabitacionBitacora').attr('value',data.p2ConstruccionCasaHabitacionBitacora);
                                                \$('#verp4ConstruccionCasaHabitacionBitacora').html('Ver');
                                                \$('#verp2ConstruccionCasaHabitacionBitacora').html('Ver');
                                            }
                                            if(data.p2Solicitud){
                                                \$('#p2Solicitud').attr('value',data.p2Solicitud);
                                                \$('#verp4Solicitud').html('Ver');
                                                \$('#verp2Solicitud').html('Ver');
                                            }
                                            if(data.p2ConstruccionCasaHabitacionSolicitud){
                                                \$('#p2ConstruccionCasaHabitacionSolicitud').attr('value',data.p2ConstruccionCasaHabitacionSolicitud);
                                                \$('#verp4ConstruccionCasaHabitacionSolicitud').html('Ver');
                                                \$('#verp2ConstruccionCasaHabitacionSolicitud').html('Ver');
                                            }
                                            if(data.p2ConstruccionCasaHabitacionProyecto){
                                                \$('#p2ConstruccionCasaHabitacionProyecto').attr('value',data.p2ConstruccionCasaHabitacionProyecto);
                                                \$('#verp4ConstruccionCasaHabitacionProyecto').html('Ver');
                                                \$('#verp2ConstruccionCasaHabitacionProyecto').html('Ver');
                                            }
                                            if(data.p2ConstruccionLocalAlineamiento){
                                                \$('#p2ConstruccionLocalAlineamiento').attr('value',data.p2ConstruccionLocalAlineamiento);
                                                \$('#verp4ConstruccionLocalAlineamiento').html('Ver');
                                                \$('#verp2ConstruccionLocalAlineamiento').html('Ver');
                                            }
                                            if(data.p2ConstruccionLocalPlano){
                                                \$('#p2ConstruccionLocalPlano').attr('value',data.p2ConstruccionLocalPlano);
                                                \$('#verp4ConstruccionLocalPlano').html('Ver');
                                                \$('#verp2ConstruccionLocalPlano').html('Ver');
                                            }
                                            if(data.p2ConstruccionLocalLicencia){
                                                \$('#p2ConstruccionLocalLicencia').attr('value',data.p2ConstruccionLocalLicencia);
                                                \$('#verp4ConstruccionLocalLicencia').html('Ver');
                                                \$('#verp2ConstruccionLocalLicencia').html('Ver');
                                            }
                                            if(data.p2ConstruccionLocalPredial){
                                                \$('#p2ConstruccionLocalPredial').attr('value',data.p2ConstruccionLocalPredial);
                                                \$('#verp4ConstruccionLocalPredial').html('Ver');
                                                \$('#verp2ConstruccionLocalPredial').html('Ver');
                                            }
                                            if(data.p2ConstruccionLocalEscrituras){
                                                \$('#p2ConstruccionLocalEscrituras').attr('value',data.p2ConstruccionLocalEscrituras);
                                                \$('#verp4ConstruccionLocalEscrituras').html('Ver');
                                                \$('#verp2ConstruccionLocalEscrituras').html('Ver');
                                            }
                                            if(data.p2ConstruccionLocalSolicitud){
                                                \$('#p2ConstruccionLocalSolicitud').attr('value',data.p2ConstruccionLocalSolicitud);
                                                \$('#verp4ConstruccionLocalSolicitud').html('Ver');
                                                \$('#verp2ConstruccionLocalSolicitud').html('Ver');
                                            }
                                            if(data.p2ConstruccionLocalBitacora){
                                                \$('#p2ConstruccionLocalBitacora').attr('value',data.p2ConstruccionLocalBitacora);
                                                \$('#verp4ConstruccionLocalBitacora').html('Ver');
                                                \$('#verp2ConstruccionLocalBitacora').html('Ver');
                                            }
                                            if(data.p2ConstruccionLocalProyecto){
                                                \$('#p2ConstruccionLocalProyecto').attr('value',data.p2ConstruccionLocalProyecto);
                                                \$('#verp4ConstruccionLocalProyecto').html('Ver');
                                                \$('#verp4ConstruccionLocalProyecto').html('Ver');
                                            }
                                            if(data.p2BardasAlineamiento){
                                                \$('#p2BardasAlineamiento').attr('value',data.p2BardasAlineamiento);
                                                \$('#verp4BardasAlineamiento').html('Ver');
                                                \$('#verp2BardasAlineamiento').html('Ver');
                                            }
                                            if(data.p2BardasMarcarBarda){
                                                \$('#p2BardasMarcarBarda').attr('value',data.p2BardasMarcarBarda);
                                                \$('#verp4BardasMarcarBarda').html('Ver');
                                                \$('#verp2BardasMarcarBarda').html('Ver');
                                            }
                                            if(data.p2BardasPredial){
                                                \$('#p2BardasPredial').attr('value',data.p2BardasPredial);
                                                \$('#verp4BardasPredial').html('Ver');
                                                \$('#verp2BardasPredial').html('Ver');
                                            }
                                            if(data.p2BardasEscrituras){
                                                \$('#p2BardasEscrituras').attr('value',data.p2BardasEscrituras);
                                                \$('#verp4BardasEscrituras').html('Ver');
                                                \$('#verp2BardasEscrituras').html('Ver');
                                            }
                                            if(data.p2BardasAltura){
                                                \$('#p2BardasAltura').attr('value',data.p2BardasAltura);
                                                \$('#verp4BardasAltura').html('Ver');
                                                \$('#verp2BardasAltura').html('Ver');
                                            }
                                            if(data.p2RemodelacionAlineamiento){
                                                \$('#p2RemodelacionAlineamiento').attr('value',data.p2RemodelacionAlineamiento);
                                                \$('#verp4RemodelacionAlineamiento').html('Ver');
                                                \$('#verp2RemodelacionAlineamiento').html('Ver');
                                            }
                                            if(data.p2RemodelacionCroquis){
                                                \$('#p2RemodelacionCroquis').attr('value',data.p2RemodelacionCroquis);
                                                \$('#verp4RemodelacionCroquis').html('Ver');
                                                \$('#verp2RemodelacionCroquis').html('Ver');
                                            }
                                            if(data.p2RemodelacionPresupuesto){
                                                \$('#p2RemodelacionPresupuesto').attr('value',data.p2RemodelacionPresupuesto);
                                                \$('#verp4RemodelacionPresupuesto').html('Ver');
                                                \$('#verp2RemodelacionPresupuesto').html('Ver');
                                            }
                                            if(data.p2RemodelacionPredial){
                                                \$('#p2RemodelacionPredial').attr('value',data.p2RemodelacionPredial);
                                                \$('#verp4RemodelacionPredial').html('Ver');
                                                \$('#verp2RemodelacionPredial').html('Ver');
                                            };
                                            if(data.p2RemodelacionEscrituras){
                                                \$('#p2RemodelacionEscrituras').attr('value',data.p2RemodelacionEscrituras);
                                                \$('#verp4RemodelacionEscrituras').html('Ver');
                                                \$('#verp2RemodelacionEscrituras').html('Ver');
                                            };
                                            if(data.p2RemodelacionLicencia){
                                                \$('#p2RemodelacionLicencia').attr('value',data.p2RemodelacionLicencia);
                                                \$('#verp4RemodelacionLicencia').html('Ver');
                                                \$('#verp2RemodelacionLicencia').html('Ver');
                                            };
                                            if(data.p2BanquetasPredial){
                                                \$('#p2BanquetasPredial').attr('value',data.p2BanquetasPredial);
                                                \$('#verp4BanquetasPredial').html('Ver');
                                                \$('#verp2BanquetasPredial').html('Ver');
                                            };
                                            if(data.p2BanquetasCroquis){
                                                \$('#p2BanquetasCroquis').attr('value',data.p2BanquetasCroquis);
                                                \$('#verp4BanquetasCroquis').html('Ver');
                                                \$('#verp2BanquetasCroquis').html('Ver');
                                            };
                                            if(data.p2ProrrogaPermiso){
                                                \$('#p2ProrrogaPermiso').attr('value',data.p2ProrrogaPermiso);
                                                \$('#verp4ProrrogaPermiso').html('Ver');
                                                \$('#verp2ProrrogaPermiso').html('Ver');
                                            };
                                            if(data.p2ProrrogaRecibo){
                                                \$('#p2ProrrogaRecibo').attr('value',data.p2ProrrogaRecibo);
                                                \$('#verp4ProrrogaRecibo').html('Ver');
                                                \$('#verp2ProrrogaRecibo').html('Ver');
                                            };
                                            if(data.p2ProrrogaPlano){
                                                \$('#p2ProrrogaPlano').attr('value',data.p2ProrrogaPlano);
                                                \$('#verp4ProrrogaPlano').html('Ver');
                                                \$('#verp2ProrrogaPlano').html('Ver');
                                            };
                                            if(data.p2ProrrogaSolicitud){
                                                \$('#p2ProrrogaSolicitud').attr('value',data.p2ProrrogaSolicitud);
                                                \$('#verp4ProrrogaSolicitud').html('Ver');
                                                \$('#verp2ProrrogaSolicitud').html('Ver');
                                            };
                                            if(data.p2PermisoSolicitud){
                                                \$('#p2PermisoSolicitud').attr('value',data.p2PermisoSolicitud);
                                                \$('#verp4PermisoSolicitud').html('Ver');
                                                \$('#verp2PermisoSolicitud').html('Ver');
                                            };
                                            if(data.p2DemolicionEscrituras){
                                                \$('#p2DemolicionEscrituras').attr('value',data.p2DemolicionEscrituras);
                                                \$('#verp4DemolicionEscrituras').html('Ver');
                                                \$('#verp2DemolicionEscrituras').html('Ver');
                                            };
                                            if(data.p2DemolicionPredial){
                                                \$('#p2DemolicionPredial').attr('value',data.p2DemolicionPredial);
                                                \$('#verp4DemolicionPredial').html('Ver');
                                                \$('#verp2DemolicionPredial').html('Ver');
                                            };
                                            if(data.p2DemolicionPlano){
                                                \$('#p2DemolicionPlano').attr('value',data.p2DemolicionPlano);
                                                \$('#verp4DemolicionPlano').html('Ver');
                                                \$('#verp2DemolicionPlano').html('Ver');
                                            };
                                            if(data.p3Resolutivo){
                                                \$('#p3Resolutivo').attr('value',data.p3Resolutivo);
                                                \$('#verp3Resolutivo').html('Ver');
                                                
                                            };
                                            if(data.p5Licencia){
                                                \$('#p5Licencia').attr('value',data.p5Licencia);
                                                \$('#verp5Licencia').html('Ver');
                                                
                                            };
                                 

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
