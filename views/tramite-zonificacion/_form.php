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
                                            <li class="active"  data-target="#step1" style="width:100%">
                                                <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Solicitud</span> </a>
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
                                                    <?= $form->field($model,'constanciaZonificacion')->checkbox([
                                                                                                            'name'=>'constanciaZonificacion',
                                                                                                            'id'=>'constanciaZonificacion'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'contruccionNueva')->checkbox([
                                                                                                            'name'=>'contruccionNueva',
                                                                                                            'id'=>'contruccionNueva'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'ampliacion')->checkbox([
                                                                                                            'name'=>'ampliacion',
                                                                                                            'id'=>'ampliacion'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'remodelacion')->checkbox([
                                                                                                            'name'=>'remodelacion',
                                                                                                            'id'=>'remodelacion'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'regularizacion')->checkbox([
                                                                                                            'name'=>'regularizacion',
                                                                                                            'id'=>'regularizacion'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'aperturaEmpresa')->checkbox([
                                                                                                            'name'=>'aperturaEmpresa',
                                                                                                            'id'=>'aperturaEmpresa'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'licUsoSuelo')->checkbox([
                                                                                                            'name'=>'licUsoSuelo',
                                                                                                            'id'=>'licUsoSuelo'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'relotificacion')->checkbox([
                                                                                                            'name'=>'relotificacion',
                                                                                                            'id'=>'relotificacion'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'autorizacionFracc')->checkbox([
                                                                                                            'name'=>'autorizacionFracc',
                                                                                                            'id'=>'autorizacionFracc'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'regimenCondominio')->checkbox([
                                                                                                            'name'=>'regimenCondominio',
                                                                                                            'id'=>'regimenCondominio'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'certificadoOcupacion')->checkbox([
                                                                                                            'name'=>'certificadoOcupacion',
                                                                                                            'id'=>'certificadoOcupacion'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'otros')->checkbox([
                                                                                                            'name'=>'otros',
                                                                                                            'id'=>'otros'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'especifique',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('especifique'),
                                                                                                            'name'=>'especifique',
                                                                                                            'id'=>'especifique'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'nombre',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('nombre'),
                                                                                                            'name'=>'nombre',
                                                                                                            'id'=>'nombre'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'direccion',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('direccion'),
                                                                                                            'name'=>'direccion',
                                                                                                            'id'=>'direccion'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'telefono',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('telefono'),
                                                                                                            'name'=>'telefono',
                                                                                                            'id'=>'telefono'
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
                                                    <?= $form->field($model,'firma',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('firma'),
                                                                                                            'name'=>'firma',
                                                                                                            'id'=>'firma'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'usoActual',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('usoActual'),
                                                                                                            'name'=>'usoActual',
                                                                                                            'id'=>'usoActual'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'usoSolicitado',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('usoSolicitado'),
                                                                                                            'name'=>'usoSolicitado',
                                                                                                            'id'=>'usoSolicitado'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'descripcionProceso',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('descripcionProceso'),
                                                                                                            'name'=>'descripcionProceso',
                                                                                                            'id'=>'descripcionProceso'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'cajonesEstacionamiento',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('cajonesEstacionamiento'),
                                                                                                            'name'=>'cajonesEstacionamiento',
                                                                                                            'id'=>'cajonesEstacionamiento'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'solicitud')->checkbox([
                                                                                                            'name'=>'solicitud',
                                                                                                            'id'=>'solicitud'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'escrituras')->checkbox([
                                                                                                            'name'=>'escrituras',
                                                                                                            'id'=>'escrituras'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'claveCatastral',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('claveCatastral'),
                                                                                                            'name'=>'claveCatastral',
                                                                                                            'id'=>'claveCatastral'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'reciboDerechos')->checkbox([
                                                                                                            'name'=>'reciboDerechos',
                                                                                                            'id'=>'reciboDerechos'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'estadoPredial')->checkbox([
                                                                                                            'name'=>'estadoPredial',
                                                                                                            'id'=>'estadoPredial'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'croquisUbicacion')->checkbox([
                                                                                                            'name'=>'croquisUbicacion',
                                                                                                            'id'=>'croquisUbicacion'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'alineamiento')->checkbox([
                                                                                                            'name'=>'alineamiento',
                                                                                                            'id'=>'alineamiento'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'croquisActual')->checkbox([
                                                                                                            'name'=>'croquisActual',
                                                                                                            'id'=>'croquisActual'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'copiaPropuestaRelitificacion')->checkbox([
                                                                                                            'name'=>'copiaPropuestaRelitificacion',
                                                                                                            'id'=>'copiaPropuestaRelitificacion'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'predioCuadroConstruccion')->checkbox([
                                                                                                            'name'=>'predioCuadroConstruccion',
                                                                                                            'id'=>'predioCuadroConstruccion'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'copiasProyecto')->checkbox([
                                                                                                            'name'=>'copiasProyecto',
                                                                                                            'id'=>'copiasProyecto'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'constanciaZonificacion2')->checkbox([
                                                                                                            'name'=>'constanciaZonificacion2',
                                                                                                            'id'=>'constanciaZonificacion2'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'calculoEstructural')->checkbox([
                                                                                                            'name'=>'calculoEstructural',
                                                                                                            'id'=>'calculoEstructural'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'constanciaTramiteTelmex')->checkbox([
                                                                                                            'name'=>'constanciaTramiteTelmex',
                                                                                                            'id'=>'constanciaTramiteTelmex'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'serviciosJapac')->checkbox([
                                                                                                            'name'=>'serviciosJapac',
                                                                                                            'id'=>'serviciosJapac'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'servicioCFE')->checkbox([
                                                                                                            'name'=>'servicioCFE',
                                                                                                            'id'=>'servicioCFE'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'dictamenAmbiental')->checkbox([
                                                                                                            'name'=>'dictamenAmbiental',
                                                                                                            'id'=>'dictamenAmbiental'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'dictamenVial')->checkbox([
                                                                                                            'name'=>'dictamenVial',
                                                                                                            'id'=>'dictamenVial'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'opinionBomberos')->checkbox([
                                                                                                            'name'=>'opinionBomberos',
                                                                                                            'id'=>'opinionBomberos'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'dictamenPC')->checkbox([
                                                                                                            'name'=>'dictamenPC',
                                                                                                            'id'=>'dictamenPC'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'dictamenINAH')->checkbox([
                                                                                                            'name'=>'dictamenINAH',
                                                                                                            'id'=>'dictamenINAH'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'dictamenSEPyC')->checkbox([
                                                                                                            'name'=>'dictamenSEPyC',
                                                                                                            'id'=>'dictamenSEPyC'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'anuenciaTortilla')->checkbox([
                                                                                                            'name'=>'anuenciaTortilla',
                                                                                                            'id'=>'anuenciaTortilla'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'aprovacionAeronautica')->checkbox([
                                                                                                            'name'=>'aprovacionAeronautica',
                                                                                                            'id'=>'aprovacionAeronautica'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'anuenciaVecinos')->checkbox([
                                                                                                            'name'=>'anuenciaVecinos',
                                                                                                            'id'=>'anuenciaVecinos'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'polizaSeguro')->checkbox([
                                                                                                            'name'=>'polizaSeguro',
                                                                                                            'id'=>'polizaSeguro'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'dictamenCultural')->checkbox([
                                                                                                            'name'=>'dictamenCultural',
                                                                                                            'id'=>'dictamenCultural'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'otros1')->checkbox([
                                                                                                            'name'=>'otros1',
                                                                                                            'id'=>'otros1'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'otros2')->checkbox([
                                                                                                            'name'=>'otros2',
                                                                                                            'id'=>'otros2'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'otros3')->checkbox([
                                                                                                            'name'=>'otros3',
                                                                                                            'id'=>'otros3'
                                                    ]); ?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'calle',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('calle'),
                                                                                                            'name'=>'calle',
                                                                                                            'id'=>'calle'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'coloniaFraccionamiento',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('coloniaFraccionamiento'),
                                                                                                            'name'=>'coloniaFraccionamiento',
                                                                                                            'id'=>'coloniaFraccionamiento'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'numeroOficial',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('numeroOficial'),
                                                                                                            'name'=>'numeroOficial',
                                                                                                            'id'=>'numeroOficial'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'numeroInterior',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('numeroInterior'),
                                                                                                            'name'=>'numeroInterior',
                                                                                                            'id'=>'numeroInterior'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'poblado',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('poblado'),
                                                                                                            'name'=>'poblado',
                                                                                                            'id'=>'poblado'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'sindicatura',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('sindicatura'),
                                                                                                            'name'=>'sindicatura',
                                                                                                            'id'=>'sindicatura'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'claveCatastral2',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('claveCatastral2'),
                                                                                                            'name'=>'claveCatastral2',
                                                                                                            'id'=>'claveCatastral2'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'superficiePredio',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('superficiePredio'),
                                                                                                            'name'=>'superficiePredio',
                                                                                                            'id'=>'superficiePredio'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'norte',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('norte'),
                                                                                                            'name'=>'norte',
                                                                                                            'id'=>'norte'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'sur',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('sur'),
                                                                                                            'name'=>'sur',
                                                                                                            'id'=>'sur'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'oriente',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('oriente'),
                                                                                                            'name'=>'oriente',
                                                                                                            'id'=>'oriente'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'poniente',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('poniente'),
                                                                                                            'name'=>'poniente',
                                                                                                            'id'=>'poniente'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'nombreSolicitante',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('nombreSolicitante'),
                                                                                                            'name'=>'nombreSolicitante',
                                                                                                            'id'=>'nombreSolicitante'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'direccionSolicitante',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('direccionSolicitante'),
                                                                                                            'name'=>'direccionSolicitante',
                                                                                                            'id'=>'direccionSolicitante'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'telefonoSolicitante',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('telefonoSolicitante'),
                                                                                                            'name'=>'telefonoSolicitante',
                                                                                                            'id'=>'telefonoSolicitante'
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
                                                    <?= $form->field($model,'firmaSolicitante',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('firmaSolicitante'),
                                                                                                            'name'=>'firmaSolicitante',
                                                                                                            'id'=>'firmaSolicitante'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'plantaBaja',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('plantaBaja'),
                                                                                                            'name'=>'plantaBaja',
                                                                                                            'id'=>'plantaBaja'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'plantaAlta',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('plantaAlta'),
                                                                                                            'name'=>'plantaAlta',
                                                                                                            'id'=>'plantaAlta'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'segundoNivel',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('segundoNivel'),
                                                                                                            'name'=>'segundoNivel',
                                                                                                            'id'=>'segundoNivel'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'otros4',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('otros4'),
                                                                                                            'name'=>'otros4',
                                                                                                            'id'=>'otros4'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'plantaBaja1',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('plantaBaja1'),
                                                                                                            'name'=>'plantaBaja1',
                                                                                                            'id'=>'plantaBaja1'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'plantaAlta1',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('plantaAlta1'),
                                                                                                            'name'=>'plantaAlta1',
                                                                                                            'id'=>'plantaAlta1'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'plantaAlta2',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('plantaAlta2'),
                                                                                                            'name'=>'plantaAlta2',
                                                                                                            'id'=>'plantaAlta2'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'segundoNivel1',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('segundoNivel1'),
                                                                                                            'name'=>'segundoNivel1',
                                                                                                            'id'=>'segundoNivel1'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'otros5',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('otros5'),
                                                                                                            'name'=>'otros5',
                                                                                                            'id'=>'otros5'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'total',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('total'),
                                                                                                            'name'=>'total',
                                                                                                            'id'=>'total'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'total1',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('total1'),
                                                                                                            'name'=>'total1',
                                                                                                            'id'=>'total1'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'observaciones',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('observaciones'),
                                                                                                            'name'=>'observaciones',
                                                                                                            'id'=>'observaciones'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'sellos',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('sellos'),
                                                                                                            'name'=>'sellos',
                                                                                                            'id'=>'sellos'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'nombreGestor',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('nombreGestor'),
                                                                                                            'name'=>'nombreGestor',
                                                                                                            'id'=>'nombreGestor'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'direccionGestor',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->textarea([
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('direccionGestor'),
                                                                                                            'name'=>'direccionGestor',
                                                                                                            'id'=>'direccionGestor'
                                                                                                        ]
                                                                                        );?> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?= $form->field($model,'telefonoGestor',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('telefonoGestor'),
                                                                                                            'name'=>'telefonoGestor',
                                                                                                            'id'=>'telefonoGestor'
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
                                                    <?= $form->field($model,'firmaGestor',[  'showLabels'=>true,
                                                                                        'showErrors'=>false,
                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
                                                                                        'options'=>['class' => 'form-group']]
                                                                                        )->input('text',[
                                                                                                            'class' => 'form-control input-lg',
                                                                                                            'placeholder'=>$model->getAttributeLabel('firmaGestor'),
                                                                                                            'name'=>'firmaGestor',
                                                                                                            'id'=>'firmaGestor'
                                                                                                        ]
                                                                                        );?> 
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

                  constanciaZonificacion: {
                    required: true

                  },

                  contruccionNueva: {
                    required: true

                  },

                  ampliacion: {
                    required: true

                  },

                  remodelacion: {
                    required: true

                  },

                  regularizacion: {
                    required: true

                  },

                  aperturaEmpresa: {
                    required: true

                  },

                  licUsoSuelo: {
                    required: true

                  },

                  relotificacion: {
                    required: true

                  },

                  autorizacionFracc: {
                    required: true

                  },

                  regimenCondominio: {
                    required: true

                  },

                  certificadoOcupacion: {
                    required: true

                  },

                  otros: {
                    required: true

                  },

                  especifique: {
                    required: true
                    
                    ,minlength: 1

                  },

                  nombre: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  direccion: {
                    required: true
                    
                    ,minlength: 1

                  },

                  telefono: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  correo: {
                    required: true

                  },

                  firma: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  usoActual: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  usoSolicitado: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  descripcionProceso: {
                    required: true
                    
                    ,minlength: 1

                  },

                  cajonesEstacionamiento: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  solicitud: {
                    required: true

                  },

                  escrituras: {
                    required: true

                  },

                  claveCatastral: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 30
                  },

                  reciboDerechos: {
                    required: true

                  },

                  estadoPredial: {
                    required: true

                  },

                  croquisUbicacion: {
                    required: true

                  },

                  alineamiento: {
                    required: true

                  },

                  croquisActual: {
                    required: true

                  },

                  copiaPropuestaRelitificacion: {
                    required: true

                  },

                  predioCuadroConstruccion: {
                    required: true

                  },

                  copiasProyecto: {
                    required: true

                  },

                  constanciaZonificacion2: {
                    required: true

                  },

                  calculoEstructural: {
                    required: true

                  },

                  constanciaTramiteTelmex: {
                    required: true

                  },

                  serviciosJapac: {
                    required: true

                  },

                  servicioCFE: {
                    required: true

                  },

                  dictamenAmbiental: {
                    required: true

                  },

                  dictamenVial: {
                    required: true

                  },

                  opinionBomberos: {
                    required: true

                  },

                  dictamenPC: {
                    required: true

                  },

                  dictamenINAH: {
                    required: true

                  },

                  dictamenSEPyC: {
                    required: true

                  },

                  anuenciaTortilla: {
                    required: true

                  },

                  aprovacionAeronautica: {
                    required: true

                  },

                  anuenciaVecinos: {
                    required: true

                  },

                  polizaSeguro: {
                    required: true

                  },

                  dictamenCultural: {
                    required: true

                  },

                  otros1: {
                    required: true

                  },

                  otros2: {
                    required: true

                  },

                  otros3: {
                    required: true

                  },

                  calle: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  coloniaFraccionamiento: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  numeroOficial: {
                    required: true
                    
                    ,minlength: 1

                  },

                  numeroInterior: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  poblado: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  sindicatura: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  claveCatastral2: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 30
                  },

                  superficiePredio: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  norte: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  sur: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  oriente: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  poniente: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  nombreSolicitante: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  direccionSolicitante: {
                    required: true
                    
                    ,minlength: 1

                  },

                  telefonoSolicitante: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  correoSolicitante: {
                    required: true

                  },

                  firmaSolicitante: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  plantaBaja: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  plantaAlta: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  segundoNivel: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  otros4: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  plantaBaja1: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  plantaAlta1: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  plantaAlta2: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  segundoNivel1: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  otros5: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  total: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  total1: {
                    required: true
                    ,number: true
                    ,min: 0

                  },

                  observaciones: {
                    required: true
                    
                    ,minlength: 1

                  },

                  sellos: {
                    required: true
                    
                    ,minlength: 1

                  },

                  nombreGestor: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },

                  direccionGestor: {
                    required: true
                    
                    ,minlength: 1

                  },

                  telefonoGestor: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 20
                  },

                  correoGestor: {
                    required: true

                  },

                  firmaGestor: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50
                  },
                },
                
                messages: {
                constanciaZonificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('constanciaZonificacion')}',


                },

                contruccionNueva: {
                  required: 'Por favor especificar {$model->getAttributeLabel('contruccionNueva')}',


                },

                ampliacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('ampliacion')}',


                },

                remodelacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('remodelacion')}',


                },

                regularizacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('regularizacion')}',


                },

                aperturaEmpresa: {
                  required: 'Por favor especificar {$model->getAttributeLabel('aperturaEmpresa')}',


                },

                licUsoSuelo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('licUsoSuelo')}',


                },

                relotificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('relotificacion')}',


                },

                autorizacionFracc: {
                  required: 'Por favor especificar {$model->getAttributeLabel('autorizacionFracc')}',


                },

                regimenCondominio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('regimenCondominio')}',


                },

                certificadoOcupacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('certificadoOcupacion')}',


                },

                otros: {
                  required: 'Por favor especificar {$model->getAttributeLabel('otros')}',


                },

                especifique: {
                  required: 'Por favor especificar {$model->getAttributeLabel('especifique')}',


                },

                nombre: {
                  required: 'Por favor especificar {$model->getAttributeLabel('nombre')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('nombre')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('nombre')} excede el numero de caracteres permitidos',


                },

                direccion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('direccion')}',


                },

                telefono: {
                  required: 'Por favor especificar {$model->getAttributeLabel('telefono')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('telefono')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('telefono')} excede el numero de caracteres permitidos',


                },

                correo: {
                  required: 'Por favor especificar {$model->getAttributeLabel('correo')}',


                },

                firma: {
                  required: 'Por favor especificar {$model->getAttributeLabel('firma')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('firma')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('firma')} excede el numero de caracteres permitidos',


                },

                usoActual: {
                  required: 'Por favor especificar {$model->getAttributeLabel('usoActual')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('usoActual')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('usoActual')} excede el numero de caracteres permitidos',


                },

                usoSolicitado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('usoSolicitado')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('usoSolicitado')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('usoSolicitado')} excede el numero de caracteres permitidos',


                },

                descripcionProceso: {
                  required: 'Por favor especificar {$model->getAttributeLabel('descripcionProceso')}',


                },

                cajonesEstacionamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('cajonesEstacionamiento')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('cajonesEstacionamiento')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('cajonesEstacionamiento')} excede el numero de caracteres permitidos',


                },

                solicitud: {
                  required: 'Por favor especificar {$model->getAttributeLabel('solicitud')}',


                },

                escrituras: {
                  required: 'Por favor especificar {$model->getAttributeLabel('escrituras')}',


                },

                claveCatastral: {
                  required: 'Por favor especificar {$model->getAttributeLabel('claveCatastral')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('claveCatastral')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('claveCatastral')} excede el numero de caracteres permitidos',


                },

                reciboDerechos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('reciboDerechos')}',


                },

                estadoPredial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('estadoPredial')}',


                },

                croquisUbicacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('croquisUbicacion')}',


                },

                alineamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('alineamiento')}',


                },

                croquisActual: {
                  required: 'Por favor especificar {$model->getAttributeLabel('croquisActual')}',


                },

                copiaPropuestaRelitificacion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('copiaPropuestaRelitificacion')}',


                },

                predioCuadroConstruccion: {
                  required: 'Por favor especificar {$model->getAttributeLabel('predioCuadroConstruccion')}',


                },

                copiasProyecto: {
                  required: 'Por favor especificar {$model->getAttributeLabel('copiasProyecto')}',


                },

                constanciaZonificacion2: {
                  required: 'Por favor especificar {$model->getAttributeLabel('constanciaZonificacion2')}',


                },

                calculoEstructural: {
                  required: 'Por favor especificar {$model->getAttributeLabel('calculoEstructural')}',


                },

                constanciaTramiteTelmex: {
                  required: 'Por favor especificar {$model->getAttributeLabel('constanciaTramiteTelmex')}',


                },

                serviciosJapac: {
                  required: 'Por favor especificar {$model->getAttributeLabel('serviciosJapac')}',


                },

                servicioCFE: {
                  required: 'Por favor especificar {$model->getAttributeLabel('servicioCFE')}',


                },

                dictamenAmbiental: {
                  required: 'Por favor especificar {$model->getAttributeLabel('dictamenAmbiental')}',


                },

                dictamenVial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('dictamenVial')}',


                },

                opinionBomberos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('opinionBomberos')}',


                },

                dictamenPC: {
                  required: 'Por favor especificar {$model->getAttributeLabel('dictamenPC')}',


                },

                dictamenINAH: {
                  required: 'Por favor especificar {$model->getAttributeLabel('dictamenINAH')}',


                },

                dictamenSEPyC: {
                  required: 'Por favor especificar {$model->getAttributeLabel('dictamenSEPyC')}',


                },

                anuenciaTortilla: {
                  required: 'Por favor especificar {$model->getAttributeLabel('anuenciaTortilla')}',


                },

                aprovacionAeronautica: {
                  required: 'Por favor especificar {$model->getAttributeLabel('aprovacionAeronautica')}',


                },

                anuenciaVecinos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('anuenciaVecinos')}',


                },

                polizaSeguro: {
                  required: 'Por favor especificar {$model->getAttributeLabel('polizaSeguro')}',


                },

                dictamenCultural: {
                  required: 'Por favor especificar {$model->getAttributeLabel('dictamenCultural')}',


                },

                otros1: {
                  required: 'Por favor especificar {$model->getAttributeLabel('otros1')}',


                },

                otros2: {
                  required: 'Por favor especificar {$model->getAttributeLabel('otros2')}',


                },

                otros3: {
                  required: 'Por favor especificar {$model->getAttributeLabel('otros3')}',


                },

                calle: {
                  required: 'Por favor especificar {$model->getAttributeLabel('calle')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('calle')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('calle')} excede el numero de caracteres permitidos',


                },

                coloniaFraccionamiento: {
                  required: 'Por favor especificar {$model->getAttributeLabel('coloniaFraccionamiento')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('coloniaFraccionamiento')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('coloniaFraccionamiento')} excede el numero de caracteres permitidos',


                },

                numeroOficial: {
                  required: 'Por favor especificar {$model->getAttributeLabel('numeroOficial')}',


                },

                numeroInterior: {
                  required: 'Por favor especificar {$model->getAttributeLabel('numeroInterior')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('numeroInterior')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('numeroInterior')} excede el numero de caracteres permitidos',


                },

                poblado: {
                  required: 'Por favor especificar {$model->getAttributeLabel('poblado')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('poblado')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('poblado')} excede el numero de caracteres permitidos',


                },

                sindicatura: {
                  required: 'Por favor especificar {$model->getAttributeLabel('sindicatura')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('sindicatura')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('sindicatura')} excede el numero de caracteres permitidos',


                },

                claveCatastral2: {
                  required: 'Por favor especificar {$model->getAttributeLabel('claveCatastral2')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('claveCatastral2')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('claveCatastral2')} excede el numero de caracteres permitidos',


                },

                superficiePredio: {
                  required: 'Por favor especificar {$model->getAttributeLabel('superficiePredio')}',
                  digits: 'El Valor de {$model->getAttributeLabel('superficiePredio')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('superficiePredio')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('superficiePredio')} es demasiado grande',


                },

                norte: {
                  required: 'Por favor especificar {$model->getAttributeLabel('norte')}',
                  digits: 'El Valor de {$model->getAttributeLabel('norte')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('norte')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('norte')} es demasiado grande',


                },

                sur: {
                  required: 'Por favor especificar {$model->getAttributeLabel('sur')}',
                  digits: 'El Valor de {$model->getAttributeLabel('sur')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('sur')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('sur')} es demasiado grande',


                },

                oriente: {
                  required: 'Por favor especificar {$model->getAttributeLabel('oriente')}',
                  digits: 'El Valor de {$model->getAttributeLabel('oriente')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('oriente')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('oriente')} es demasiado grande',


                },

                poniente: {
                  required: 'Por favor especificar {$model->getAttributeLabel('poniente')}',
                  digits: 'El Valor de {$model->getAttributeLabel('poniente')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('poniente')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('poniente')} es demasiado grande',


                },

                nombreSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('nombreSolicitante')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('nombreSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('nombreSolicitante')} excede el numero de caracteres permitidos',


                },

                direccionSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('direccionSolicitante')}',


                },

                telefonoSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('telefonoSolicitante')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('telefonoSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('telefonoSolicitante')} excede el numero de caracteres permitidos',


                },

                correoSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('correoSolicitante')}',


                },

                firmaSolicitante: {
                  required: 'Por favor especificar {$model->getAttributeLabel('firmaSolicitante')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('firmaSolicitante')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('firmaSolicitante')} excede el numero de caracteres permitidos',


                },

                plantaBaja: {
                  required: 'Por favor especificar {$model->getAttributeLabel('plantaBaja')}',
                  digits: 'El Valor de {$model->getAttributeLabel('plantaBaja')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('plantaBaja')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('plantaBaja')} es demasiado grande',


                },

                plantaAlta: {
                  required: 'Por favor especificar {$model->getAttributeLabel('plantaAlta')}',
                  digits: 'El Valor de {$model->getAttributeLabel('plantaAlta')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('plantaAlta')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('plantaAlta')} es demasiado grande',


                },

                segundoNivel: {
                  required: 'Por favor especificar {$model->getAttributeLabel('segundoNivel')}',
                  digits: 'El Valor de {$model->getAttributeLabel('segundoNivel')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('segundoNivel')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('segundoNivel')} es demasiado grande',


                },

                otros4: {
                  required: 'Por favor especificar {$model->getAttributeLabel('otros4')}',
                  digits: 'El Valor de {$model->getAttributeLabel('otros4')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('otros4')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('otros4')} es demasiado grande',


                },

                plantaBaja1: {
                  required: 'Por favor especificar {$model->getAttributeLabel('plantaBaja1')}',
                  digits: 'El Valor de {$model->getAttributeLabel('plantaBaja1')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('plantaBaja1')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('plantaBaja1')} es demasiado grande',


                },

                plantaAlta1: {
                  required: 'Por favor especificar {$model->getAttributeLabel('plantaAlta1')}',
                  digits: 'El Valor de {$model->getAttributeLabel('plantaAlta1')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('plantaAlta1')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('plantaAlta1')} es demasiado grande',


                },

                plantaAlta2: {
                  required: 'Por favor especificar {$model->getAttributeLabel('plantaAlta2')}',
                  digits: 'El Valor de {$model->getAttributeLabel('plantaAlta2')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('plantaAlta2')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('plantaAlta2')} es demasiado grande',


                },

                segundoNivel1: {
                  required: 'Por favor especificar {$model->getAttributeLabel('segundoNivel1')}',
                  digits: 'El Valor de {$model->getAttributeLabel('segundoNivel1')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('segundoNivel1')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('segundoNivel1')} es demasiado grande',


                },

                otros5: {
                  required: 'Por favor especificar {$model->getAttributeLabel('otros5')}',
                  digits: 'El Valor de {$model->getAttributeLabel('otros5')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('otros5')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('otros5')} es demasiado grande',


                },

                total: {
                  required: 'Por favor especificar {$model->getAttributeLabel('total')}',
                  digits: 'El Valor de {$model->getAttributeLabel('total')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('total')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('total')} es demasiado grande',


                },

                total1: {
                  required: 'Por favor especificar {$model->getAttributeLabel('total1')}',
                  digits: 'El Valor de {$model->getAttributeLabel('total1')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('total1')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('total1')} es demasiado grande',


                },

                observaciones: {
                  required: 'Por favor especificar {$model->getAttributeLabel('observaciones')}',


                },

                sellos: {
                  required: 'Por favor especificar {$model->getAttributeLabel('sellos')}',


                },

                nombreGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('nombreGestor')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('nombreGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('nombreGestor')} excede el numero de caracteres permitidos',


                },

                direccionGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('direccionGestor')}',


                },

                telefonoGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('telefonoGestor')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('telefonoGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('telefonoGestor')} excede el numero de caracteres permitidos',


                },

                correoGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('correoGestor')}',


                },

                firmaGestor: {
                  required: 'Por favor especificar {$model->getAttributeLabel('firmaGestor')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('firmaGestor')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('firmaGestor')} excede el numero de caracteres permitidos',


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
                                success: function(data){
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
