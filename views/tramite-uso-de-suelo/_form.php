

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
                                        <?php if($permisos[8][USUARIOS::$LEER]){ ?>
 
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
                                                    <?= $form->field($model,'p1FirmaPropietarios',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1FirmaPropietarios'),
                                                                                                            'name'=>'p1FirmaPropietarios',
                                                                                                            'id'=>'p1FirmaPropietarios'
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
                                                    <?= $form->field($model,'p1Sellos',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1Sellos'),
                                                                                                            'name'=>'p1Sellos',
                                                                                                            'id'=>'p1Sellos'
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
                                        <?php if($permisos[9][USUARIOS::$LEER]){ ?>
 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Escrituras',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2Escrituras',
                                                                                                            'id'=>'p2Escrituras'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2Escrituras' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2ReciboDerechos',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2ReciboDerechos',
                                                                                                            'id'=>'p2ReciboDerechos'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2ReciboDerechos' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Alineamiento',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2Alineamiento',
                                                                                                            'id'=>'p2Alineamiento'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2Alineamiento' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2ProyectoArquitectonico',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2ProyectoArquitectonico',
                                                                                                            'id'=>'p2ProyectoArquitectonico'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2ProyectoArquitectonico' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2ImpactoAmbiental',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2ImpactoAmbiental',
                                                                                                            'id'=>'p2ImpactoAmbiental'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2ImpactoAmbiental' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2ImpactoVial',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2ImpactoVial',
                                                                                                            'id'=>'p2ImpactoVial'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2ImpactoVial' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2OpinionBomberos',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2OpinionBomberos',
                                                                                                            'id'=>'p2OpinionBomberos'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2OpinionBomberos' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2ProteccionCivil',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2ProteccionCivil',
                                                                                                            'id'=>'p2ProteccionCivil'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2ProteccionCivil' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Inah',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2Inah',
                                                                                                            'id'=>'p2Inah'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2Inah' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Sepyc',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2Sepyc',
                                                                                                            'id'=>'p2Sepyc'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2Sepyc' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Masa',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2Masa',
                                                                                                            'id'=>'p2Masa'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2Masa' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Aeronautica',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2Aeronautica',
                                                                                                            'id'=>'p2Aeronautica'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2Aeronautica' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2Vecinos',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2Vecinos',
                                                                                                            'id'=>'p2Vecinos'
                                                                                                        ]
                                                                                        ]);?> 
                                                    <?php if(!$model->isNewRecord): ?>
                                                            <a href='javascript:void(0);' id='Verp2Vecinos' >ver</a>
                                                        <?php endif; ?>                                                </div>
                                            </div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab3">
                                            <br>
                                            <h3><strong>Paso 3 </strong> - Revision</h3>
                                        <?php if($permisos[10][USUARIOS::$LEER]){ ?>
 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3Escrituras')->checkbox([
                                                                                                            'name'=>'p3Escrituras',
                                                                                                            'id'=>'p3Escrituras'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3Escrituras' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3ReciboDerechos')->checkbox([
                                                                                                            'name'=>'p3ReciboDerechos',
                                                                                                            'id'=>'p3ReciboDerechos'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3ReciboDerechos' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3Alineamiento')->checkbox([
                                                                                                            'name'=>'p3Alineamiento',
                                                                                                            'id'=>'p3Alineamiento'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3Alineamiento' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3ProyectoArquitectonico')->checkbox([
                                                                                                            'name'=>'p3ProyectoArquitectonico',
                                                                                                            'id'=>'p3ProyectoArquitectonico'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3ProyectoArquitectonico' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3ImpactoAmbiental')->checkbox([
                                                                                                            'name'=>'p3ImpactoAmbiental',
                                                                                                            'id'=>'p3ImpactoAmbiental'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3ImpactoAmbiental' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3ImpactoVial')->checkbox([
                                                                                                            'name'=>'p3ImpactoVial',
                                                                                                            'id'=>'p3ImpactoVial'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3ImpactoVial' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3OpinionBomberos')->checkbox([
                                                                                                            'name'=>'p3OpinionBomberos',
                                                                                                            'id'=>'p3OpinionBomberos'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3OpinionBomberos' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3ProteccionCivil')->checkbox([
                                                                                                            'name'=>'p3ProteccionCivil',
                                                                                                            'id'=>'p3ProteccionCivil'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3ProteccionCivil' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3Inah')->checkbox([
                                                                                                            'name'=>'p3Inah',
                                                                                                            'id'=>'p3Inah'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3Inah' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3Sepyc')->checkbox([
                                                                                                            'name'=>'p3Sepyc',
                                                                                                            'id'=>'p3Sepyc'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3Sepyc' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3Masa')->checkbox([
                                                                                                            'name'=>'p3Masa',
                                                                                                            'id'=>'p3Masa'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3Masa' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3Aeronautica')->checkbox([
                                                                                                            'name'=>'p3Aeronautica',
                                                                                                            'id'=>'p3Aeronautica'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3Aeronautica' >ver</a> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3Vecinos')->checkbox([
                                                                                                            'name'=>'p3Vecinos',
                                                                                                            'id'=>'p3Vecinos'
                                                    ]); ?>                                                   <a href='javascript:void(0);' id='Verp3Vecinos' >ver</a> 
                                                </div>
                                            </div>
                                        <?php } else {?> 
                                            <h2 class="bg-danger"> Permiso Denegado</h2>
                                        <?php }?> 
                                        </div>
                                        <div class="tab-pane " id="tab4">
                                            <br>
                                            <h3><strong>Paso 4 </strong> - Constancia</h3>
                                        <?php if($permisos[11][USUARIOS::$LEER]){ ?>
 
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Documentos',3=>'Paso 3: Revision',4=>'Paso 4: Constancia',], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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
                                url: '".Yii::$app->homeUrl."//tramite-uso-de-suelo/atras', // point to server-side PHP script 
                                dataType: 'json',  // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,                         
                                type: 'post',
                               
                                success: function(data){
                                                console.log('gik');
                                                for (var i = \$('#pasoatras').val(); i <= 4; i++) {
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

  
            \$('#verp2Alineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Alineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Alineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ProyectoArquitectonico').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ProyectoArquitectonico')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ProyectoArquitectonico').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ImpactoAmbiental').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ImpactoAmbiental')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ImpactoAmbiental').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ImpactoVial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ImpactoVial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ImpactoVial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2OpinionBomberos').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2OpinionBomberos')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2OpinionBomberos').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2ProteccionCivil').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2ProteccionCivil')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2ProteccionCivil').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2Inah').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Inah')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Inah').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2Sepyc').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Sepyc')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Sepyc').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2Masa').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Masa')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Masa').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2Aeronautica').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Aeronautica')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Aeronautica').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp2Vecinos').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2Vecinos')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2Vecinos').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Escrituras').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Escrituras')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Escrituras').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3ReciboDerechos').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3ReciboDerechos')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3ReciboDerechos').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Alineamiento').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Alineamiento')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Alineamiento').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3ProyectoArquitectonico').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3ProyectoArquitectonico')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3ProyectoArquitectonico').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3ImpactoAmbiental').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3ImpactoAmbiental')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3ImpactoAmbiental').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3ImpactoVial').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3ImpactoVial')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3ImpactoVial').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3OpinionBomberos').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3OpinionBomberos')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3OpinionBomberos').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3ProteccionCivil').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3ProteccionCivil')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3ProteccionCivil').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Inah').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Inah')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Inah').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Sepyc').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Sepyc')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Sepyc').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Masa').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Masa')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Masa').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Aeronautica').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Aeronautica')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Aeronautica').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3Vecinos').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3Vecinos')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3Vecinos').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
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
                    required: true
                    
                    ,mail:true 



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

                  p1DescriProceso: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


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
                    
                    ,mail:true 



                  },

                  p1FirmaSolicitante: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1FirmaPropietarios: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


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

                  p1PlantaAltaXConstruir: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p1PlantaBajaXConstruir: {
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

                  p1Sellos: {
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
                    
                    ,mail:true 



                  },

                  p1FirmaGestor: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p2Escrituras: {
                    required: true



                  },

                  p2ReciboDerechos: {
                    required: true



                  },

                  p2Alineamiento: {
                    required: true



                  },

                  p2ProyectoArquitectonico: {
                    required: true



                  },

                  p2ImpactoAmbiental: {
                    required: true



                  },

                  p2ImpactoVial: {
                    required: true



                  },

                  p2OpinionBomberos: {
                    required: true



                  },

                  p2ProteccionCivil: {
                    required: true



                  },

                  p2Inah: {
                    required: true



                  },

                  p2Sepyc: {
                    required: true



                  },

                  p2Masa: {
                    required: true



                  },

                  p2Aeronautica: {
                    required: true



                  },

                  p2Vecinos: {
                    required: true



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
                    required: true



                  },

                  p3ImpactoVial: {
                    required: true



                  },

                  p3OpinionBomberos: {
                    required: true



                  },

                  p3ProteccionCivil: {
                    required: true



                  },

                  p3Inah: {
                    required: true



                  },

                  p3Sepyc: {
                    required: true



                  },

                  p3Masa: {
                    required: true



                  },

                  p3Aeronautica: {
                    required: true



                  },

                  p3Vecinos: {
                    required: true



                  },

                  p4Imprimir: {
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

                p4Imprimir: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4Imprimir')}',


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
                  if((index+1) < 4)
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
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2Escrituras);


                        var p2ReciboDerechos = $('#p2ReciboDerechos').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2ReciboDerechos);


                        var p2Alineamiento = $('#p2Alineamiento').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2Alineamiento);


                        var p2ProyectoArquitectonico = $('#p2ProyectoArquitectonico').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2ProyectoArquitectonico);


                        var p2ImpactoAmbiental = $('#p2ImpactoAmbiental').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2ImpactoAmbiental);


                        var p2ImpactoVial = $('#p2ImpactoVial').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2ImpactoVial);


                        var p2OpinionBomberos = $('#p2OpinionBomberos').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2OpinionBomberos);


                        var p2ProteccionCivil = $('#p2ProteccionCivil').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2ProteccionCivil);


                        var p2Inah = $('#p2Inah').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2Inah);


                        var p2Sepyc = $('#p2Sepyc').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2Sepyc);


                        var p2Masa = $('#p2Masa').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2Masa);


                        var p2Aeronautica = $('#p2Aeronautica').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2Aeronautica);


                        var p2Vecinos = $('#p2Vecinos').prop('files')[0];
                        form_data.append('TramiteUsoDeSuelo['+item.name +']', p2Vecinos);



                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramite-uso-de-suelo/salvar', // point to server-side PHP script 
                                dataType: 'text',  // what to expect back from the PHP script, if anything
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
                                success: function(php_script_response){
                                            \$('#idTramite').val(data.id);
                                            if(data.p2Escrituras!==undefined)
                                                \$('#p2Escrituras').attr('value',data.p2Escrituras);
                                            if(data.p2ReciboDerechos!==undefined)
                                                \$('#p2ReciboDerechos').attr('value',data.p2ReciboDerechos);
                                            if(data.p2Alineamiento!==undefined)
                                                \$('#p2Alineamiento').attr('value',data.p2Alineamiento);
                                            if(data.p2ProyectoArquitectonico!==undefined)
                                                \$('#p2ProyectoArquitectonico').attr('value',data.p2ProyectoArquitectonico);
                                            if(data.p2ImpactoAmbiental!==undefined)
                                                \$('#p2ImpactoAmbiental').attr('value',data.p2ImpactoAmbiental);
                                            if(data.p2ImpactoVial!==undefined)
                                                \$('#p2ImpactoVial').attr('value',data.p2ImpactoVial);
                                            if(data.p2OpinionBomberos!==undefined)
                                                \$('#p2OpinionBomberos').attr('value',data.p2OpinionBomberos);
                                            if(data.p2ProteccionCivil!==undefined)
                                                \$('#p2ProteccionCivil').attr('value',data.p2ProteccionCivil);
                                            if(data.p2Inah!==undefined)
                                                \$('#p2Inah').attr('value',data.p2Inah);
                                            if(data.p2Sepyc!==undefined)
                                                \$('#p2Sepyc').attr('value',data.p2Sepyc);
                                            if(data.p2Masa!==undefined)
                                                \$('#p2Masa').attr('value',data.p2Masa);
                                            if(data.p2Aeronautica!==undefined)
                                                \$('#p2Aeronautica').attr('value',data.p2Aeronautica);
                                            if(data.p2Vecinos!==undefined)
                                                \$('#p2Vecinos').attr('value',data.p2Vecinos);

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
