

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
                    <h2> Recepci�n de Fraccionamiento</h2>
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
                                            <li class="active"  data-target="#step1" style="width:20%">
                                                <a id="btntab1" href="#tab1" data-toggle="tab" > <span class="step">1</span> <span class="title">Solicitud</span> </a>
                                            </li>
                                            <li   data-target="#step2" style="width:20%">
                                                <a id="btntab2" href="#tab2" data-toggle="tab" disabled="disabled"> <span class="step">2</span> <span class="title">Supervision</span> </a>
                                            </li>
                                            <li   data-target="#step3" style="width:20%">
                                                <a id="btntab3" href="#tab3" data-toggle="tab" disabled="disabled"> <span class="step">3</span> <span class="title">Documentos</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:20%">
                                                <a id="btntab4" href="#tab4" data-toggle="tab" disabled="disabled"> <span class="step">4</span> <span class="title">Revision</span> </a>
                                            </li>
                                            <li   data-target="#step5" style="width:20%">
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Recepcion</span> </a>
                                            </li>
                                           
                                            
                                        </ul>
                                        <?= $form->field($model,'id')->input('hidden',['name'=>'id','id'=>'idTramite'])->label(false);?>                                         <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <h3><strong>Paso 1 </strong> - Solicitud</h3>
                                        <?php if($permisos[45][USUARIOS::$LEER]){ ?>
 
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
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab2">
                                            <br>
                                            <h3><strong>Paso 2 </strong> - Supervision</h3>
                                        <?php if($permisos[48][USUARIOS::$LEER]){ ?>
 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Supervisor')->checkbox([
                                                                                                            'name'=>'p2Supervisor',
                                                                                                            'id'=>'p2Supervisor'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp2Supervisor' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Observaciones',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p2Observaciones'),
                                                                                                            'name'=>'p2Observaciones',
                                                                                                            'id'=>'p2Observaciones'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Expediente',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p2Expediente',
                                                                        'id'=>'p2Expediente'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp2Expediente' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab3">
                                            <br>
                                            <h3><strong>Paso 3 </strong> - Documentos</h3>
                                        <?php if($permisos[50][USUARIOS::$LEER]){ ?>
 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p5SolicitudPresidenteMuni',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p5SolicitudPresidenteMuni',
                                                                        'id'=>'p5SolicitudPresidenteMuni'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp5SolicitudPresidenteMuni' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3CertificadoCabildo',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3CertificadoCabildo',
                                                                        'id'=>'p3CertificadoCabildo'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3CertificadoCabildo' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p5PlanoLotificacion',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
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
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p5RecepcionJapac',
                                                                        'id'=>'p5RecepcionJapac'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp5RecepcionJapac' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3ActaRecepcion',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3ActaRecepcion',
                                                                        'id'=>'p3ActaRecepcion'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3ActaRecepcion' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3MemoriaTecno',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3MemoriaTecno',
                                                                        'id'=>'p3MemoriaTecno'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3MemoriaTecno' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3PlanoAgua',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3PlanoAgua',
                                                                        'id'=>'p3PlanoAgua'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3PlanoAgua' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3PlanoAlcantarillado',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3PlanoAlcantarillado',
                                                                        'id'=>'p3PlanoAlcantarillado'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3PlanoAlcantarillado' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p5RecepcionCfe',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p5RecepcionCfe',
                                                                        'id'=>'p5RecepcionCfe'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp5RecepcionCfe' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3ActaRecepcionCfe',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3ActaRecepcionCfe',
                                                                        'id'=>'p3ActaRecepcionCfe'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3ActaRecepcionCfe' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3CartaCompromiso',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3CartaCompromiso',
                                                                        'id'=>'p3CartaCompromiso'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3CartaCompromiso' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3MemoriaTecnoCfe',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3MemoriaTecnoCfe',
                                                                        'id'=>'p3MemoriaTecnoCfe'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3MemoriaTecnoCfe' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3PlanoCfe',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3PlanoCfe',
                                                                        'id'=>'p3PlanoCfe'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3PlanoCfe' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p5RecepcionAlumbrado',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p5RecepcionAlumbrado',
                                                                        'id'=>'p5RecepcionAlumbrado'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp5RecepcionAlumbrado' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3OficioRecepcion',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3OficioRecepcion',
                                                                        'id'=>'p3OficioRecepcion'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3OficioRecepcion' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3MemoriaTecnoAlumbrado',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3MemoriaTecnoAlumbrado',
                                                                        'id'=>'p3MemoriaTecnoAlumbrado'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3MemoriaTecnoAlumbrado' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3PlanoAlumbrado',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3PlanoAlumbrado',
                                                                        'id'=>'p3PlanoAlumbrado'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3PlanoAlumbrado' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p5RecepcionCivil',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p5RecepcionCivil',
                                                                        'id'=>'p5RecepcionCivil'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp5RecepcionCivil' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3ActaTecnica',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3ActaTecnica',
                                                                        'id'=>'p3ActaTecnica'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3ActaTecnica' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3MemoriaTecnoCivil',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3MemoriaTecnoCivil',
                                                                        'id'=>'p3MemoriaTecnoCivil'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3MemoriaTecnoCivil' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p5PlanoObras',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p5PlanoObras',
                                                                        'id'=>'p5PlanoObras'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp5PlanoObras' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3Donaciones',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3Donaciones',
                                                                        'id'=>'p3Donaciones'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3Donaciones' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3EscriturasPublica',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p3EscriturasPublica',
                                                                        'id'=>'p3EscriturasPublica'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp3EscriturasPublica' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p5PlanoPoligono',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p5PlanoPoligono',
                                                                        'id'=>'p5PlanoPoligono'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp5PlanoPoligono' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab4">
                                            <br>
                                            <h3><strong>Paso 4 </strong> - Revision</h3>
                                        <?php if($permisos[51][USUARIOS::$LEER]){ ?>
 
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
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p6Expediente')->checkbox([
                                                                                                            'name'=>'p6Expediente',
                                                                                                            'id'=>'p6Expediente'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp6Expediente' >ver</a> 
                                                </div>
                                            </div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab5">
                                            <br>
                                            <h3><strong>Paso 5 </strong> - Recepcion</h3>
                                        <?php if($permisos[52][USUARIOS::$LEER]){ ?>
 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p7Recepcion',[
                                                    'options'=>['class' => 'form-group']]
                                                    )->fileInput( [ 'accept' => 'imagen/jpeg',
                                                                        'name'=>'p7Recepcion',
                                                                        'id'=>'p7Recepcion'        
                                                    ]);?>                                                    
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='verp7Recepcion' >ver</a>
                                                        <?php endif; ?>                                                </div>
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Supervision',3=>'Paso 3: Documentos',4=>'Paso 4: Revision',5=>'Paso 5: Recepcion',], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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
                rrurl=\"". Yii::$app->urlManager->createAbsoluteUrl(['tramites-recepcio/view-imagen'])."\"
                rrurl= rrurl+'?id='+\$('#idTramite').val();
                rrurl= rrurl+'&tipoDocumento='+encodeURIComponent(tipoimagen);
                
                console.log(rrurl);
                \$('#dialog_simple').html('<img src=\"'+rrurl+'\" width=\"100%\" height=\"500\">');
                return false;
			};


  

  
            \$('#verp5SolicitudPresidenteMuni').click(function() {
                return verimagen('{$model->getAttributeLabel('Solicitud')}');
            });

  
            \$('#verp3CertificadoCabildo').click(function() {
                return verimagen('{$model->getAttributeLabel('Certificado de cabildo')}');
            });

  
            \$('#verp5PlanoLotificacion').click(function() {
                return verimagen('{$model->getAttributeLabel('Plano Lotificacion')}');
            });

  
            \$('#verp5RecepcionJapac').click(function() {
                return verimagen('{$model->getAttributeLabel('Recepcion de Japac')}');
            });

  
            \$('#verp3ActaRecepcion').click(function() {
                return verimagen('{$model->getAttributeLabel('Acta de Recepcion')}');
            });

  
            \$('#verp3MemoriaTecno').click(function() {
                return verimagen('{$model->getAttributeLabel('Memoria')}');
            });

  
            \$('#verp3PlanoAgua').click(function() {
                return verimagen('{$model->getAttributeLabel('Plano de Agua')}');
            });

  
            \$('#verp3PlanoAlcantarillado').click(function() {
                return verimagen('{$model->getAttributeLabel('Plano Alcantarillado')}');
            });

  
            \$('#verp5RecepcionCfe').click(function() {
                return verimagen('{$model->getAttributeLabel('Recepcion CFE')}');
            });

  
            \$('#verp3ActaRecepcionCfe').click(function() {
                return verimagen('{$model->getAttributeLabel('Acta de Recepcion CFE')}');
            });

  
            \$('#verp3CartaCompromiso').click(function() {
                return verimagen('{$model->getAttributeLabel('Carta Compromiso')}');
            });

  
            \$('#verp3MemoriaTecnoCfe').click(function() {
                return verimagen('{$model->getAttributeLabel('Memoria Tecno CFE')}');
            });

  
            \$('#verp3PlanoCfe').click(function() {
                return verimagen('{$model->getAttributeLabel('Plano CFE')}');
            });

  
            \$('#verp5RecepcionAlumbrado').click(function() {
                return verimagen('{$model->getAttributeLabel('Recepcion de Alumbrado')}');
            });

  
            \$('#verp3OficioRecepcion').click(function() {
                return verimagen('{$model->getAttributeLabel('Oficio de Recepcion')}');
            });

  
            \$('#verp3MemoriaTecnoAlumbrado').click(function() {
                return verimagen('{$model->getAttributeLabel('Memoria Tecno Alumbrado')}');
            });

  
            \$('#verp3PlanoAlumbrado').click(function() {
                return verimagen('{$model->getAttributeLabel('Plano Alumbrado')}');
            });

  
            \$('#verp5RecepcionCivil').click(function() {
                return verimagen('{$model->getAttributeLabel('Recepcion Civil')}');
            });

  
            \$('#verp3ActaTecnica').click(function() {
                return verimagen('{$model->getAttributeLabel('Acta Tecnica')}');
            });

  
            \$('#verp3MemoriaTecnoCivil').click(function() {
                return verimagen('{$model->getAttributeLabel('Memoria Tecno Civil')}');
            });

  
            \$('#verp5PlanoObras').click(function() {
                return verimagen('{$model->getAttributeLabel('Plano Obras')}');
            });

  
            \$('#verp3Donaciones').click(function() {
                return verimagen('{$model->getAttributeLabel('Donaciones')}');
            });

  
            \$('#verp3EscriturasPublica').click(function() {
                return verimagen('{$model->getAttributeLabel('Escritura Publica')}');
            });

  
            \$('#verp5PlanoPoligono').click(function() {
                return verimagen('{$model->getAttributeLabel('Plano Poligono')}');
            });

  //Pendiente
            \$('#verp6SolicitudPresidenteMuni').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

  //Pendiente  
            \$('#verp6CertificadoCabildo').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6PlanoLotificacion').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6RecepcionJapac').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6ActaTecnica').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6MemoriaTecno').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

  //Pendiente  
            \$('#verp6PlanoAgua').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6PlanoAlcantarillado').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6RecepcionCfe').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6ActaRecepcion').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6CartaCompromiso').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6MemoriaTecnoCfe').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6PlanoCfe').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6RecepcionAlumbrado').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6OficioRecepcion').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6MemoriaTecnoAlumbrado').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6PlanoAlumbrado').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6RecepcionCivil').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6ActaTecnicaObras').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6MemoriaTecnoCivil').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6PlanoObras').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6Donaciones').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6EscriturasPublica').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });

    //Pendiente
            \$('#verp6PlanoPoligono').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
            });


            \$('#verp7Recepcion').click(function() {
                return verimagen('{$model->getAttributeLabel('Recepcion')}');
            });


            \$('#verp2Expediente').click(function() {
                return verimagen('{$model->getAttributeLabel('Expediente')}');
            });

    //Pendiente
            \$('#verp6Expediente').click(function() {
                return verimagen('{$model->getAttributeLabel('')}');
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

                  p2Supervisor: {
                    required: true



                  },

                  p2Observaciones: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p5SolicitudPresidenteMuni: {
                    required: true



                  },

                  p3CertificadoCabildo: {
                    required: true



                  },

                  p5PlanoLotificacion: {
                    required: true



                  },

                  p5RecepcionJapac: {
                    required: true



                  },

                  p3ActaRecepcion: {
                    required: true



                  },

                  p3MemoriaTecno: {
                    required: true



                  },

                  p3PlanoAgua: {
                    required: true



                  },

                  p3PlanoAlcantarillado: {
                    required: true



                  },

                  p5RecepcionCfe: {
                    required: true



                  },

                  p3ActaRecepcionCfe: {
                    required: true



                  },

                  p3CartaCompromiso: {
                    required: true



                  },

                  p3MemoriaTecnoCfe: {
                    required: true



                  },

                  p3PlanoCfe: {
                    required: true



                  },

                  p5RecepcionAlumbrado: {
                    required: true



                  },

                  p3OficioRecepcion: {
                    required: true



                  },

                  p3MemoriaTecnoAlumbrado: {
                    required: true



                  },

                  p3PlanoAlumbrado: {
                    required: true



                  },

                  p5RecepcionCivil: {
                    required: true



                  },

                  p3ActaTecnica: {
                    required: true



                  },

                  p3MemoriaTecnoCivil: {
                    required: true



                  },

                  p5PlanoObras: {
                    required: true



                  },

                  p3Donaciones: {
                    required: true



                  },

                  p3EscriturasPublica: {
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

                  p2Expediente: {
                    required: true



                  },

                  p6Expediente: {
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

                p2Supervisor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Supervisor')}',


                },

                p2Observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Observaciones')}',


                },

                p5SolicitudPresidenteMuni: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5SolicitudPresidenteMuni')}',


                },

                p3CertificadoCabildo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3CertificadoCabildo')}',


                },

                p5PlanoLotificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoLotificacion')}',


                },

                p5RecepcionJapac: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5RecepcionJapac')}',


                },

                p3ActaRecepcion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3ActaRecepcion')}',


                },

                p3MemoriaTecno: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3MemoriaTecno')}',


                },

                p3PlanoAgua: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3PlanoAgua')}',


                },

                p3PlanoAlcantarillado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3PlanoAlcantarillado')}',


                },

                p5RecepcionCfe: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5RecepcionCfe')}',


                },

                p3ActaRecepcionCfe: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3ActaRecepcionCfe')}',


                },

                p3CartaCompromiso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3CartaCompromiso')}',


                },

                p3MemoriaTecnoCfe: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3MemoriaTecnoCfe')}',


                },

                p3PlanoCfe: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3PlanoCfe')}',


                },

                p5RecepcionAlumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5RecepcionAlumbrado')}',


                },

                p3OficioRecepcion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3OficioRecepcion')}',


                },

                p3MemoriaTecnoAlumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3MemoriaTecnoAlumbrado')}',


                },

                p3PlanoAlumbrado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3PlanoAlumbrado')}',


                },

                p5RecepcionCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5RecepcionCivil')}',


                },

                p3ActaTecnica: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3ActaTecnica')}',


                },

                p3MemoriaTecnoCivil: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3MemoriaTecnoCivil')}',


                },

                p5PlanoObras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5PlanoObras')}',


                },

                p3Donaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3Donaciones')}',


                },

                p3EscriturasPublica: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3EscriturasPublica')}',


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

                p2Expediente: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2Expediente')}',


                },

                p6Expediente: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6Expediente')}',


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
                                                                form_data.append('TramitesRecepcion['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');
                        var p5SolicitudPresidenteMuni = $('#p5SolicitudPresidenteMuni').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5SolicitudPresidenteMuni]', p5SolicitudPresidenteMuni);


                        var p3CertificadoCabildo = $('#p3CertificadoCabildo').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3CertificadoCabildo]', p3CertificadoCabildo);


                        var p5PlanoLotificacion = $('#p5PlanoLotificacion').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5PlanoLotificacion]', p5PlanoLotificacion);


                        var p5RecepcionJapac = $('#p5RecepcionJapac').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5RecepcionJapac]', p5RecepcionJapac);


                        var p3ActaRecepcion = $('#p3ActaRecepcion').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3ActaRecepcion]', p3ActaRecepcion);


                        var p3MemoriaTecno = $('#p3MemoriaTecno').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3MemoriaTecno]', p3MemoriaTecno);


                        var p3PlanoAgua = $('#p3PlanoAgua').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3PlanoAgua]', p3PlanoAgua);


                        var p3PlanoAlcantarillado = $('#p3PlanoAlcantarillado').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3PlanoAlcantarillado]', p3PlanoAlcantarillado);


                        var p5RecepcionCfe = $('#p5RecepcionCfe').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5RecepcionCfe]', p5RecepcionCfe);


                        var p3ActaRecepcionCfe = $('#p3ActaRecepcionCfe').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3ActaRecepcionCfe]', p3ActaRecepcionCfe);


                        var p3CartaCompromiso = $('#p3CartaCompromiso').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3CartaCompromiso]', p3CartaCompromiso);


                        var p3MemoriaTecnoCfe = $('#p3MemoriaTecnoCfe').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3MemoriaTecnoCfe]', p3MemoriaTecnoCfe);


                        var p3PlanoCfe = $('#p3PlanoCfe').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3PlanoCfe]', p3PlanoCfe);


                        var p5RecepcionAlumbrado = $('#p5RecepcionAlumbrado').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5RecepcionAlumbrado]', p5RecepcionAlumbrado);


                        var p3OficioRecepcion = $('#p3OficioRecepcion').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3OficioRecepcion]', p3OficioRecepcion);


                        var p3MemoriaTecnoAlumbrado = $('#p3MemoriaTecnoAlumbrado').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3MemoriaTecnoAlumbrado]', p3MemoriaTecnoAlumbrado);


                        var p3PlanoAlumbrado = $('#p3PlanoAlumbrado').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3PlanoAlumbrado]', p3PlanoAlumbrado);


                        var p5RecepcionCivil = $('#p5RecepcionCivil').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5RecepcionCivil]', p5RecepcionCivil);


                        var p3ActaTecnica = $('#p3ActaTecnica').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3ActaTecnica]', p3ActaTecnica);


                        var p3MemoriaTecnoCivil = $('#p3MemoriaTecnoCivil').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3MemoriaTecnoCivil]', p3MemoriaTecnoCivil);


                        var p5PlanoObras = $('#p5PlanoObras').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5PlanoObras]', p5PlanoObras);


                        var p3Donaciones = $('#p3Donaciones').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3Donaciones]', p3Donaciones);


                        var p3EscriturasPublica = $('#p3EscriturasPublica').prop('files')[0];
                        form_data.append('TramitesRecepcion[p3EscriturasPublica]', p3EscriturasPublica);


                        var p5PlanoPoligono = $('#p5PlanoPoligono').prop('files')[0];
                        form_data.append('TramitesRecepcion[p5PlanoPoligono]', p5PlanoPoligono);


                        var p7Recepcion = $('#p7Recepcion').prop('files')[0];
                        form_data.append('TramitesRecepcion[p7Recepcion]', p7Recepcion);


                        var p2Expediente = $('#p2Expediente').prop('files')[0];
                        form_data.append('TramitesRecepcion[p2Expediente]', p2Expediente);



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
                                            if(data.p5SolicitudPresidenteMuni)
                                                \$('#p5SolicitudPresidenteMuni').attr('value',data.p5SolicitudPresidenteMuni);
                                            if(data.p3CertificadoCabildo)
                                                \$('#p3CertificadoCabildo').attr('value',data.p3CertificadoCabildo);
                                            if(data.p5PlanoLotificacion)
                                                \$('#p5PlanoLotificacion').attr('value',data.p5PlanoLotificacion);
                                            if(data.p5RecepcionJapac)
                                                \$('#p5RecepcionJapac').attr('value',data.p5RecepcionJapac);
                                            if(data.p3ActaRecepcion)
                                                \$('#p3ActaRecepcion').attr('value',data.p3ActaRecepcion);
                                            if(data.p3MemoriaTecno)
                                                \$('#p3MemoriaTecno').attr('value',data.p3MemoriaTecno);
                                            if(data.p3PlanoAgua)
                                                \$('#p3PlanoAgua').attr('value',data.p3PlanoAgua);
                                            if(data.p3PlanoAlcantarillado)
                                                \$('#p3PlanoAlcantarillado').attr('value',data.p3PlanoAlcantarillado);
                                            if(data.p5RecepcionCfe)
                                                \$('#p5RecepcionCfe').attr('value',data.p5RecepcionCfe);
                                            if(data.p3ActaRecepcionCfe)
                                                \$('#p3ActaRecepcionCfe').attr('value',data.p3ActaRecepcionCfe);
                                            if(data.p3CartaCompromiso)
                                                \$('#p3CartaCompromiso').attr('value',data.p3CartaCompromiso);
                                            if(data.p3MemoriaTecnoCfe)
                                                \$('#p3MemoriaTecnoCfe').attr('value',data.p3MemoriaTecnoCfe);
                                            if(data.p3PlanoCfe)
                                                \$('#p3PlanoCfe').attr('value',data.p3PlanoCfe);
                                            if(data.p5RecepcionAlumbrado)
                                                \$('#p5RecepcionAlumbrado').attr('value',data.p5RecepcionAlumbrado);
                                            if(data.p3OficioRecepcion)
                                                \$('#p3OficioRecepcion').attr('value',data.p3OficioRecepcion);
                                            if(data.p3MemoriaTecnoAlumbrado)
                                                \$('#p3MemoriaTecnoAlumbrado').attr('value',data.p3MemoriaTecnoAlumbrado);
                                            if(data.p3PlanoAlumbrado)
                                                \$('#p3PlanoAlumbrado').attr('value',data.p3PlanoAlumbrado);
                                            if(data.p5RecepcionCivil)
                                                \$('#p5RecepcionCivil').attr('value',data.p5RecepcionCivil);
                                            if(data.p3ActaTecnica)
                                                \$('#p3ActaTecnica').attr('value',data.p3ActaTecnica);
                                            if(data.p3MemoriaTecnoCivil)
                                                \$('#p3MemoriaTecnoCivil').attr('value',data.p3MemoriaTecnoCivil);
                                            if(data.p5PlanoObras)
                                                \$('#p5PlanoObras').attr('value',data.p5PlanoObras);
                                            if(data.p3Donaciones)
                                                \$('#p3Donaciones').attr('value',data.p3Donaciones);
                                            if(data.p3EscriturasPublica)
                                                \$('#p3EscriturasPublica').attr('value',data.p3EscriturasPublica);
                                            if(data.p5PlanoPoligono)
                                                \$('#p5PlanoPoligono').attr('value',data.p5PlanoPoligono);
                                            if(data.p7Recepcion)
                                                \$('#p7Recepcion').attr('value',data.p7Recepcion);
                                            if(data.p2Expediente)
                                                \$('#p2Expediente').attr('value',data.p2Expediente);

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
