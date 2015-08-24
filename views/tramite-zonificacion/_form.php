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
                                                    <?= $form->field($model,'p1_nombreSolicitante',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_nombreSolicitante'),
                                                                                                            'name'=>'p1_nombreSolicitante',
                                                                                                            'id'=>'p1_nombreSolicitante'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_direccionSolicitante',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_direccionSolicitante'),
                                                                                                            'name'=>'p1_direccionSolicitante',
                                                                                                            'id'=>'p1_direccionSolicitante'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_telefonoSolicitante',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_telefonoSolicitante'),
                                                                                                            'name'=>'p1_telefonoSolicitante',
                                                                                                            'id'=>'p1_telefonoSolicitante'
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
                                                    <?= $form->field($model,'p1_firmaSolicitante',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_firmaSolicitante'),
                                                                                                            'name'=>'p1_firmaSolicitante',
                                                                                                            'id'=>'p1_firmaSolicitante'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_usoActual',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_usoActual'),
                                                                                                            'name'=>'p1_usoActual',
                                                                                                            'id'=>'p1_usoActual'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_usoSolicitado',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_usoSolicitado'),
                                                                                                            'name'=>'p1_usoSolicitado',
                                                                                                            'id'=>'p1_usoSolicitado'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_descriProceso',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_descriProceso'),
                                                                                                            'name'=>'p1_descriProceso',
                                                                                                            'id'=>'p1_descriProceso'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_noCajones',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_noCajones'),
                                                                                                            'name'=>'p1_noCajones',
                                                                                                            'id'=>'p1_noCajones'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_callePredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_callePredio'),
                                                                                                            'name'=>'p1_callePredio',
                                                                                                            'id'=>'p1_callePredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_coloniaPredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_coloniaPredio'),
                                                                                                            'name'=>'p1_coloniaPredio',
                                                                                                            'id'=>'p1_coloniaPredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_numeroOficialPredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_numeroOficialPredio'),
                                                                                                            'name'=>'p1_numeroOficialPredio',
                                                                                                            'id'=>'p1_numeroOficialPredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_numeroInteriorPredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_numeroInteriorPredio'),
                                                                                                            'name'=>'p1_numeroInteriorPredio',
                                                                                                            'id'=>'p1_numeroInteriorPredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_pobladoPredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_pobladoPredio'),
                                                                                                            'name'=>'p1_pobladoPredio',
                                                                                                            'id'=>'p1_pobladoPredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_sindicaturaPredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_sindicaturaPredio'),
                                                                                                            'name'=>'p1_sindicaturaPredio',
                                                                                                            'id'=>'p1_sindicaturaPredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_claveCatastralPredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_claveCatastralPredio'),
                                                                                                            'name'=>'p1_claveCatastralPredio',
                                                                                                            'id'=>'p1_claveCatastralPredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_superficiePredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_superficiePredio'),
                                                                                                            'name'=>'p1_superficiePredio',
                                                                                                            'id'=>'p1_superficiePredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_nortePredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_nortePredio'),
                                                                                                            'name'=>'p1_nortePredio',
                                                                                                            'id'=>'p1_nortePredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_surPredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_surPredio'),
                                                                                                            'name'=>'p1_surPredio',
                                                                                                            'id'=>'p1_surPredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_orientePredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_orientePredio'),
                                                                                                            'name'=>'p1_orientePredio',
                                                                                                            'id'=>'p1_orientePredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_ponientePredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_ponientePredio'),
                                                                                                            'name'=>'p1_ponientePredio',
                                                                                                            'id'=>'p1_ponientePredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_nombrePropietario',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_nombrePropietario'),
                                                                                                            'name'=>'p1_nombrePropietario',
                                                                                                            'id'=>'p1_nombrePropietario'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_direccionPropietario',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_direccionPropietario'),
                                                                                                            'name'=>'p1_direccionPropietario',
                                                                                                            'id'=>'p1_direccionPropietario'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_telefonoPropietario',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_telefonoPropietario'),
                                                                                                            'name'=>'p1_telefonoPropietario',
                                                                                                            'id'=>'p1_telefonoPropietario'
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
                                                    <?= $form->field($model,'p1_firmaPropietario',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_firmaPropietario'),
                                                                                                            'name'=>'p1_firmaPropietario',
                                                                                                            'id'=>'p1_firmaPropietario'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_plantabajaConstruida',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_plantabajaConstruida'),
                                                                                                            'name'=>'p1_plantabajaConstruida',
                                                                                                            'id'=>'p1_plantabajaConstruida'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_plantaaltaConstruida',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_plantaaltaConstruida'),
                                                                                                            'name'=>'p1_plantaaltaConstruida',
                                                                                                            'id'=>'p1_plantaaltaConstruida'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_segundonivelConstruida',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_segundonivelConstruida'),
                                                                                                            'name'=>'p1_segundonivelConstruida',
                                                                                                            'id'=>'p1_segundonivelConstruida'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_otrosConstruida',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_otrosConstruida'),
                                                                                                            'name'=>'p1_otrosConstruida',
                                                                                                            'id'=>'p1_otrosConstruida'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_plantabajaXConstruir',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_plantabajaXConstruir'),
                                                                                                            'name'=>'p1_plantabajaXConstruir',
                                                                                                            'id'=>'p1_plantabajaXConstruir'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_plantaaltaXConstruir',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_plantaaltaXConstruir'),
                                                                                                            'name'=>'p1_plantaaltaXConstruir',
                                                                                                            'id'=>'p1_plantaaltaXConstruir'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_segundonivelXConstruir',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_segundonivelXConstruir'),
                                                                                                            'name'=>'p1_segundonivelXConstruir',
                                                                                                            'id'=>'p1_segundonivelXConstruir'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_otrosXConstruir',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_otrosXConstruir'),
                                                                                                            'name'=>'p1_otrosXConstruir',
                                                                                                            'id'=>'p1_otrosXConstruir'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_totalConstruida',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_totalConstruida'),
                                                                                                            'name'=>'p1_totalConstruida',
                                                                                                            'id'=>'p1_totalConstruida'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_totalXConstruir',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_totalXConstruir'),
                                                                                                            'name'=>'p1_totalXConstruir',
                                                                                                            'id'=>'p1_totalXConstruir'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_observaciones',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_observaciones'),
                                                                                                            'name'=>'p1_observaciones',
                                                                                                            'id'=>'p1_observaciones'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_nombreGestor',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_nombreGestor'),
                                                                                                            'name'=>'p1_nombreGestor',
                                                                                                            'id'=>'p1_nombreGestor'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_direccionGestor',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_direccionGestor'),
                                                                                                            'name'=>'p1_direccionGestor',
                                                                                                            'id'=>'p1_direccionGestor'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p1_telefonoGestor',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_telefonoGestor'),
                                                                                                            'name'=>'p1_telefonoGestor',
                                                                                                            'id'=>'p1_telefonoGestor'
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
                                                    <?= $form->field($model,'p1_firmaGestor',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('p1_firmaGestor'),
                                                                                                            'name'=>'p1_firmaGestor',
                                                                                                            'id'=>'p1_firmaGestor'
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
                                                    <?= $form->field($model,'p2_escrituras',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2_escrituras',
                                                                                                            'id'=>'p2_escrituras'
                                                                                                        ]
                                                                                        ]);?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2_reciboDerechos',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2_reciboDerechos',
                                                                                                            'id'=>'p2_reciboDerechos'
                                                                                                        ]
                                                                                        ]);?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2_croquisUbicacion',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2_croquisUbicacion',
                                                                                                            'id'=>'p2_croquisUbicacion'
                                                                                                        ]
                                                                                        ]);?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p2_pago',[
                                                                                        'showErrors'=>false,
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->widget(FileInput::classname(), [
                                                                                            'options' => [  'accept' => '*',
                                                                                                            'name'=>'p2_pago',
                                                                                                            'id'=>'p2_pago'
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
                                                    <?= $form->field($model,'p3_pago')->checkbox([
                                                                                                            'name'=>'p3_pago',
                                                                                                            'id'=>'p3_pago'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3_escrituras')->checkbox([
                                                                                                            'name'=>'p3_escrituras',
                                                                                                            'id'=>'p3_escrituras'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3_reciboDerechos')->checkbox([
                                                                                                            'name'=>'p3_reciboDerechos',
                                                                                                            'id'=>'p3_reciboDerechos'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'p3_croquisUbicacion')->checkbox([
                                                                                                            'name'=>'p3_croquisUbicacion',
                                                                                                            'id'=>'p3_croquisUbicacion'
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

                  p1_nombreSolicitante: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1_direccionSolicitante: {
                    required: false
                    
                    ,minlength: 1

                  },

                  p1_telefonoSolicitante: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  p1_correoSolicitante: {
                    required: false

                  },

                  p1_firmaSolicitante: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1_usoActual: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1_usoSolicitado: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1_descriProceso: {
                    required: false
                    
                    ,minlength: 1

                  },

                  p1_noCajones: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  p2_escrituras: {
                    required: false

                  },

                  p2_reciboDerechos: {
                    required: false

                  },

                  p2_croquisUbicacion: {
                    required: false

                  },

                  p1_callePredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1_coloniaPredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1_numeroOficialPredio: {
                    required: false
                    
                    ,minlength: 1

                  },

                  p1_numeroInteriorPredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  p1_pobladoPredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1_sindicaturaPredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1_claveCatastralPredio: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 30
                  },

                  p1_superficiePredio: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_nortePredio: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_surPredio: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_orientePredio: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_ponientePredio: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_nombrePropietario: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1_direccionPropietario: {
                    required: false
                    
                    ,minlength: 1

                  },

                  p1_telefonoPropietario: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  p1_correoPropietario: {
                    required: false

                  },

                  p1_firmaPropietario: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1_plantabajaConstruida: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_plantaaltaConstruida: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_segundonivelConstruida: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_otrosConstruida: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_plantabajaXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_plantaaltaXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_segundonivelXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_otrosXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_totalConstruida: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_totalXConstruir: {
                    required: false
                    ,number: true
                    ,min: 0

                  },

                  p1_observaciones: {
                    required: false
                    
                    ,minlength: 1

                  },

                  p1_nombreGestor: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p1_direccionGestor: {
                    required: false
                    
                    ,minlength: 1

                  },

                  p1_telefonoGestor: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  p1_correoGestor: {
                    required: false

                  },

                  p1_firmaGestor: {
                    required: false
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  p3_pago: {
                    required: true

                  },

                  p3_escrituras: {
                    required: true

                  },

                  p3_reciboDerechos: {
                    required: true

                  },

                  p3_croquisUbicacion: {
                    required: true

                  },

                  solicitud: {
                    required: false

                  },

                  escrituras: {
                    required: false

                  },

                  reciboDerechos: {
                    required: false

                  },

                  croquisUbicacion: {
                    required: false

                  },

                  p2_pago: {
                    required: false

                  },

                  p4_imprimir: {
                    required: false

                  },
                },
                
                messages: {
                p1_nombreSolicitante: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_nombreSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_nombreSolicitante')} excede el numero de caracteres permitidos',


                },

                p1_direccionSolicitante: {


                },

                p1_telefonoSolicitante: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_telefonoSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_telefonoSolicitante')} excede el numero de caracteres permitidos',


                },

                p1_correoSolicitante: {


                },

                p1_firmaSolicitante: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_firmaSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_firmaSolicitante')} excede el numero de caracteres permitidos',


                },

                p1_usoActual: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_usoActual')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_usoActual')} excede el numero de caracteres permitidos',


                },

                p1_usoSolicitado: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_usoSolicitado')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_usoSolicitado')} excede el numero de caracteres permitidos',


                },

                p1_descriProceso: {


                },

                p1_noCajones: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_noCajones')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_noCajones')} excede el numero de caracteres permitidos',


                },

                p2_escrituras: {


                },

                p2_reciboDerechos: {


                },

                p2_croquisUbicacion: {


                },

                p1_callePredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_callePredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_callePredio')} excede el numero de caracteres permitidos',


                },

                p1_coloniaPredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_coloniaPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_coloniaPredio')} excede el numero de caracteres permitidos',


                },

                p1_numeroOficialPredio: {


                },

                p1_numeroInteriorPredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_numeroInteriorPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_numeroInteriorPredio')} excede el numero de caracteres permitidos',


                },

                p1_pobladoPredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_pobladoPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_pobladoPredio')} excede el numero de caracteres permitidos',


                },

                p1_sindicaturaPredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_sindicaturaPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_sindicaturaPredio')} excede el numero de caracteres permitidos',


                },

                p1_claveCatastralPredio: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_claveCatastralPredio')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_claveCatastralPredio')} excede el numero de caracteres permitidos',


                },

                p1_superficiePredio: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_superficiePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_superficiePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_superficiePredio')} es demasiado grande',


                },

                p1_nortePredio: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_nortePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_nortePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_nortePredio')} es demasiado grande',


                },

                p1_surPredio: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_surPredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_surPredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_surPredio')} es demasiado grande',


                },

                p1_orientePredio: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_orientePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_orientePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_orientePredio')} es demasiado grande',


                },

                p1_ponientePredio: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_ponientePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_ponientePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_ponientePredio')} es demasiado grande',


                },

                p1_nombrePropietario: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_nombrePropietario')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_nombrePropietario')} excede el numero de caracteres permitidos',


                },

                p1_direccionPropietario: {


                },

                p1_telefonoPropietario: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_telefonoPropietario')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_telefonoPropietario')} excede el numero de caracteres permitidos',


                },

                p1_correoPropietario: {


                },

                p1_firmaPropietario: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_firmaPropietario')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_firmaPropietario')} excede el numero de caracteres permitidos',


                },

                p1_plantabajaConstruida: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_plantabajaConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_plantabajaConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_plantabajaConstruida')} es demasiado grande',


                },

                p1_plantaaltaConstruida: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_plantaaltaConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_plantaaltaConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_plantaaltaConstruida')} es demasiado grande',


                },

                p1_segundonivelConstruida: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_segundonivelConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_segundonivelConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_segundonivelConstruida')} es demasiado grande',


                },

                p1_otrosConstruida: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_otrosConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_otrosConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_otrosConstruida')} es demasiado grande',


                },

                p1_plantabajaXConstruir: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_plantabajaXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_plantabajaXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_plantabajaXConstruir')} es demasiado grande',


                },

                p1_plantaaltaXConstruir: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_plantaaltaXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_plantaaltaXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_plantaaltaXConstruir')} es demasiado grande',


                },

                p1_segundonivelXConstruir: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_segundonivelXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_segundonivelXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_segundonivelXConstruir')} es demasiado grande',


                },

                p1_otrosXConstruir: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_otrosXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_otrosXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_otrosXConstruir')} es demasiado grande',


                },

                p1_totalConstruida: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_totalConstruida')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_totalConstruida')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_totalConstruida')} es demasiado grande',


                },

                p1_totalXConstruir: {
                  digits: 'El Valor de {$model->getAttributeLabel('p1_totalXConstruir')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1_totalXConstruir')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1_totalXConstruir')} es demasiado grande',


                },

                p1_observaciones: {


                },

                p1_nombreGestor: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_nombreGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_nombreGestor')} excede el numero de caracteres permitidos',


                },

                p1_direccionGestor: {


                },

                p1_telefonoGestor: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_telefonoGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_telefonoGestor')} excede el numero de caracteres permitidos',


                },

                p1_correoGestor: {


                },

                p1_firmaGestor: {
                  minlength: 'El Valor de {$model->getAttributeLabel('p1_firmaGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1_firmaGestor')} excede el numero de caracteres permitidos',


                },

                p3_pago: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3_pago')}',


                },

                p3_escrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3_escrituras')}',


                },

                p3_reciboDerechos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3_reciboDerechos')}',


                },

                p3_croquisUbicacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3_croquisUbicacion')}',


                },

                solicitud: {


                },

                escrituras: {


                },

                reciboDerechos: {


                },

                croquisUbicacion: {


                },

                p2_pago: {


                },

                p4_imprimir: {


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
                        var p2_escrituras = $('#p2_escrituras').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', p2_escrituras);


                        var p2_reciboDerechos = $('#p2_reciboDerechos').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', p2_reciboDerechos);


                        var p2_croquisUbicacion = $('#p2_croquisUbicacion').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', p2_croquisUbicacion);


                        var solicitud = $('#solicitud').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', solicitud);


                        var escrituras = $('#escrituras').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', escrituras);


                        var reciboDerechos = $('#reciboDerechos').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', reciboDerechos);


                        var croquisUbicacion = $('#croquisUbicacion').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', croquisUbicacion);


                        var p2_pago = $('#p2_pago').prop('files')[0];
                        form_data.append('TramiteZonificacion['+item.name +']', p2_pago);



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
