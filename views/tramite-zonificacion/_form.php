<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\USUARIOS;
use kartik\widgets\FileInput;
$permisos= $model->permisosPorPaso;
 

/* @var $this yii\web\View */
/* @var $model app\models\TramiteZonificacion */
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
                    <h2> zonificacion</h2>

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
                                            <li class="active"  data-target="#step1" style="width:25%">
                                                <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Solicitud</span> </a>
                                            </li>
                                            <li   data-target="#step2" style="width:25%">
                                                <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Documentos</span> </a>
                                            </li>
                                            <li   data-target="#step3" style="width:25%">
                                                <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Revision</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:25%">
                                                <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Constancia</span> </a>
                                            </li>
                                           
                                            
                                        </ul>
                                        <input class="form-control input-lg" placeholder="idTramite" type="hidden" name="id" id="idTramite">
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <h3><strong>Paso 1 </strong> - Solicitud</h3>
                                        <?php if($permisos[3][USUARIOS::$LEER]){ ?>
 
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
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1FirmaSolicitante',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1FirmaSolicitante'),
                                                                                                            'name'=>'p1FirmaSolicitante',
                                                                                                            'id'=>'p1FirmaSolicitante'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
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
                                                    <?= $form->field($model,'p1NumeroOficialPredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1NumeroOficialPredio'),
                                                                                                            'name'=>'p1NumeroOficialPredio',
                                                                                                            'id'=>'p1NumeroOficialPredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1NumeroInteriorPredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1NumeroInteriorPredio'),
                                                                                                            'name'=>'p1NumeroInteriorPredio',
                                                                                                            'id'=>'p1NumeroInteriorPredio'
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
                                            <div class="row">
                                                <div class="col-sm-12">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1FirmaPropietario',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1FirmaPropietario'),
                                                                                                            'name'=>'p1FirmaPropietario',
                                                                                                            'id'=>'p1FirmaPropietario'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1PlantabajaConstruida',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1PlantabajaConstruida'),
                                                                                                            'name'=>'p1PlantabajaConstruida',
                                                                                                            'id'=>'p1PlantabajaConstruida'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1PlantaaltaConstruida',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1PlantaaltaConstruida'),
                                                                                                            'name'=>'p1PlantaaltaConstruida',
                                                                                                            'id'=>'p1PlantaaltaConstruida'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1SegundonivelConstruida',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1SegundonivelConstruida'),
                                                                                                            'name'=>'p1SegundonivelConstruida',
                                                                                                            'id'=>'p1SegundonivelConstruida'
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
                                                    <?= $form->field($model,'p1PlantabajaXConstruir',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1PlantabajaXConstruir'),
                                                                                                            'name'=>'p1PlantabajaXConstruir',
                                                                                                            'id'=>'p1PlantabajaXConstruir'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1PlantaaltaXConstruir',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1PlantaaltaXConstruir'),
                                                                                                            'name'=>'p1PlantaaltaXConstruir',
                                                                                                            'id'=>'p1PlantaaltaXConstruir'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1SegundonivelXConstruir',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1SegundonivelXConstruir'),
                                                                                                            'name'=>'p1SegundonivelXConstruir',
                                                                                                            'id'=>'p1SegundonivelXConstruir'
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
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1FirmaGestor',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1FirmaGestor'),
                                                                                                            'name'=>'p1FirmaGestor',
                                                                                                            'id'=>'p1FirmaGestor'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab2">
                                            <br>
                                            <h3><strong>Paso 2 </strong> - Documentos</h3>
                                        <?php if($permisos[4][USUARIOS::$LEER]){ ?>
 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Escrituras',[
                                                                                       
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->fileInput( [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2Escrituras',
                                                                                                            'id'=>'p2Escrituras'
                                                                                                        ]
                                                                                        ]);?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2ReciboDerechos',[
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->fileInput( [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2ReciboDerechos',
                                                                                                            'id'=>'p2ReciboDerechos'
                                                                                                        ]
                                                                                        ]);?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2CroquisUbicacion',[
                                                                                        
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->fileInput([
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2CroquisUbicacion',
                                                                                                            'id'=>'p2CroquisUbicacion'
                                                                                                        ]
                                                                                        ]);?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Pago',[
                                                                                        
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->fileInput( [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2Pago',
                                                                                                            'id'=>'p2Pago'
                                                                                                        ]
                                                                                        ]);?> 
                                                </div>
                                            </div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab3">
                                            <br>
                                            <h3><strong>Paso 3 </strong> - Revision</h3>
                                        <?php if($permisos[5][USUARIOS::$LEER]){ ?>
 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3Pago')->checkbox([
                                                                                                            'name'=>'p3Pago',
                                                                                                            'id'=>'p3Pago'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3Escrituras')->checkbox([
                                                                                                            'name'=>'p3Escrituras',
                                                                                                            'id'=>'p3Escrituras'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3ReciboDerechos')->checkbox([
                                                                                                            'name'=>'p3ReciboDerechos',
                                                                                                            'id'=>'p3ReciboDerechos'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3CroquisUbicacion')->checkbox([
                                                                                                            'name'=>'p3CroquisUbicacion',
                                                                                                            'id'=>'p3CroquisUbicacion'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab4">
                                            <br>
                                            <h3><strong>Paso 4 </strong> - Constancia</h3>
                                        <?php if($permisos[7][USUARIOS::$LEER]){ ?>
 
                                            <div class="row">
                                                <div class="col-sm-12">
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

 <?php $this->registerJs( "\$(document).ready(function() {
            
            pageSetUp();
            
            
    
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
                    required: false

                  },

                  p1FirmaSolicitante: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
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

                  },

                  p1NoCajones: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  p2Escrituras: {
                    required: true

                  },

                  p2ReciboDerechos: {
                    required: true

                  },

                  p2CroquisUbicacion: {
                    required: true

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

                  p1NumeroOficialPredio: {
                    required: false
                    
                    ,minlength: 1

                  },

                  p1NumeroInteriorPredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 20
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

                  p1NombrePropietario: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1DireccionPropietario: {
                    required: false
                    
                    ,minlength: 1

                  },

                  p1TelefonoPropietario: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  p1CorreoPropietario: {
                    required: false

                  },

                  p1FirmaPropietario: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1PlantabajaConstruida: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1PlantaaltaConstruida: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1SegundonivelConstruida: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1OtrosConstruida: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1PlantabajaXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1PlantaaltaXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1SegundonivelXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1OtrosXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1TotalConstruida: {
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
                    ,maxlength: 20
                  },

                  p1CorreoGestor: {
                    required: false

                  },

                  p1FirmaGestor: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p3Pago: {
                    required: true

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

                  p2Pago: {
                    required: false

                  },

                  p4Imprimir: {
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


                },

                p1FirmaSolicitante: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1FirmaSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1FirmaSolicitante')} excede el numero de caracteres permitidos',


                },

                p1UsoActual: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1UsoActual')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1UsoActual')} excede el numero de caracteres permitidos',


                },

                p1UsoSolicitado: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1UsoSolicitado')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1UsoSolicitado')} excede el numero de caracteres permitidos',


                },

                p1DescriProceso: {


                },

                p1NoCajones: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NoCajones')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NoCajones')} excede el numero de caracteres permitidos',


                },

                p2Escrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Escrituras')}',


                },

                p2ReciboDerechos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2ReciboDerechos')}',


                },

                p2CroquisUbicacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2CroquisUbicacion')}',


                },

                p1CallePredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1CallePredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1CallePredio')} excede el numero de caracteres permitidos',


                },

                p1ColoniaPredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ColoniaPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ColoniaPredio')} excede el numero de caracteres permitidos',


                },

                p1NumeroOficialPredio: {


                },

                p1NumeroInteriorPredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NumeroInteriorPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NumeroInteriorPredio')} excede el numero de caracteres permitidos',


                },

                p1PobladoPredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1PobladoPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1PobladoPredio')} excede el numero de caracteres permitidos',


                },

                p1SindicaturaPredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1SindicaturaPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1SindicaturaPredio')} excede el numero de caracteres permitidos',


                },

                p1ClaveCatastralPredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1ClaveCatastralPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1ClaveCatastralPredio')} excede el numero de caracteres permitidos',


                },

                p1SuperficiePredio: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1SuperficiePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1SuperficiePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1SuperficiePredio')} es demasiado grande',


                },

                p1NortePredio: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1NortePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1NortePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1NortePredio')} es demasiado grande',


                },

                p1SurPredio: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1SurPredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1SurPredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1SurPredio')} es demasiado grande',


                },

                p1OrientePredio: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1OrientePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1OrientePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1OrientePredio')} es demasiado grande',


                },

                p1PonientePredio: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1PonientePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PonientePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PonientePredio')} es demasiado grande',


                },

                p1NombrePropietario: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NombrePropietario')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NombrePropietario')} excede el numero de caracteres permitidos',


                },

                p1DireccionPropietario: {


                },

                p1TelefonoPropietario: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoPropietario')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoPropietario')} excede el numero de caracteres permitidos',


                },

                p1CorreoPropietario: {


                },

                p1FirmaPropietario: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1FirmaPropietario')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1FirmaPropietario')} excede el numero de caracteres permitidos',


                },

                p1PlantabajaConstruida: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1PlantabajaConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PlantabajaConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PlantabajaConstruida')} es demasiado grande',


                },

                p1PlantaaltaConstruida: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1PlantaaltaConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PlantaaltaConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PlantaaltaConstruida')} es demasiado grande',


                },

                p1SegundonivelConstruida: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1SegundonivelConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1SegundonivelConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1SegundonivelConstruida')} es demasiado grande',


                },

                p1OtrosConstruida: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1OtrosConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1OtrosConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1OtrosConstruida')} es demasiado grande',


                },

                p1PlantabajaXConstruir: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1PlantabajaXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PlantabajaXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PlantabajaXConstruir')} es demasiado grande',


                },

                p1PlantaaltaXConstruir: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1PlantaaltaXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1PlantaaltaXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1PlantaaltaXConstruir')} es demasiado grande',


                },

                p1SegundonivelXConstruir: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1SegundonivelXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1SegundonivelXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1SegundonivelXConstruir')} es demasiado grande',


                },

                p1OtrosXConstruir: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1OtrosXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1OtrosXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1OtrosXConstruir')} es demasiado grande',


                },

                p1TotalConstruida: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1TotalConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1TotalConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1TotalConstruida')} es demasiado grande',


                },

                p1TotalXConstruir: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1TotalXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1TotalXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1TotalXConstruir')} es demasiado grande',


                },

                p1Observaciones: {


                },

                p1NombreGestor: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1NombreGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1NombreGestor')} excede el numero de caracteres permitidos',


                },

                p1DireccionGestor: {


                },

                p1TelefonoGestor: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1TelefonoGestor')} excede el numero de caracteres permitidos',


                },

                p1CorreoGestor: {


                },

                p1FirmaGestor: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1FirmaGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1FirmaGestor')} excede el numero de caracteres permitidos',


                },

                p3Pago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Pago')}',


                },

                p3Escrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Escrituras')}',


                },

                p3ReciboDerechos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3ReciboDerechos')}',


                },

                p3CroquisUbicacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3CroquisUbicacion')}',


                },

                p2Pago: {


                },

                p4Imprimir: {


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
                  if (!\$valid) {
                    \$validator.focusInvalid();
                    return false;
                  } else {
                    var csrfToken = \$('meta[name=\'csrf-token\']').attr('content');
                    var form_data = new FormData();
                    var datos = \$('#wizard-1').serializeArray().reduce(function(obj, item) {
                                                            if(item.name =='id' || item.value != '')
                                                                form_data.append('TramiteZonificacion['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');
                        var p2Escrituras = $('#p2Escrituras').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', p2Escrituras);


                        var p2ReciboDerechos = $('#p2ReciboDerechos').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', p2ReciboDerechos);


                        var p2CroquisUbicacion = $('#p2CroquisUbicacion').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', p2CroquisUbicacion);


                        var p2Pago = $('#p2Pago').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', p2Pago);



                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramite-zonificacion/salvar', // point to server-side PHP script 
                                dataType: 'text',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                                success: function(php_script_response){
                                            \$('#idTramite').val(data.id);
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).addClass(
                                              'complete');
                                            \$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).find('.step')
                                            .html('<i class=\'fa fa-check\'></i>');
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

        
        });" ,\yii\web\View ::POS_LOAD); ?> 
