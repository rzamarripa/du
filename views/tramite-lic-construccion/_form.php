<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\TramiteLicConstruccion */
/* @var $form yii\widgets\ActiveForm */
?>

    <section id="widget-grid" class="">
        <div class="row">
    
            <!-- NEW WIDGET START -->
            <article class="col-sm-12 col-md-12 col-lg-10">
    
                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" 
                data-widget-editbutton="false" data-widget-deletebutton="false"
                 data-widget-fullscreenbutton="true">
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
                        <h2>Licencia de Contruccion </h2>
    
                    </header>
                    <div>
                
                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->
    
                        </div>
                        <!-- end widget edit box -->
    
                        <!-- widget content -->
                        <div class="widget-body">
    
                            <div class="row">
                                <div id="wizard-1" novalidate="novalidate">
                                    <div id="bootstrap-wizard-1" class="col-sm-12">
                                        <div class="form-bootstrapWizard">
                                            <ul class="bootstrapWizard form-wizard">
                                                <li class="active" data-target="#step1">
                                                    <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Registro</span> </a>
                                                </li>
                                                <li data-target="#step2">
                                                    <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Datos Generales</span> </a>
                                                </li>
                                                
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab1">
                                                <br>
                                                <h3><strong>Step 1 </strong> - Basic Information</h3>
    
                                                <div class="row">

                                                    <?php yii\widgets\Pjax::begin(['id' => 'new_country']) ?>
                                                    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true ]]); ?>
    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                <input type="text" id="tramitelicconstruccion-nombre" class="form-control" name="TramiteLicConstruccion[nombre]">
    
                                                            </div>
                                                        </div>
    
                                                    </div>
    
                                                </div>
    
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                                                                <input class="form-control input-lg" placeholder="First Name" type="text" name="fname" id="fname">
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                                                                <input class="form-control input-lg" placeholder="Last Name" type="text" name="lname" id="lname">
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php ActiveForm::end(); ?>
                                                <?php yii\widgets\Pjax::end() ?>
    
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <br>
                                                <h3><strong>Step 2</strong> - Billing Information</h3>
    
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-flag fa-lg fa-fw"></i></span>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                                                                <select class="form-control input-lg" name="city">
                                                                    <option value="" selected="selected">Select City</option>
                                                                    <option>Amsterdam</option>
                                                                    <option>Atlanta</option>
                                                                    <option>Baltimore</option>
                                                                    <option>Boston</option>
                                                                    <option>Buenos Aires</option>
                                                                    <option>Calgary</option>
                                                                    <option>Chicago</option>
                                                                    <option>Denver</option>
                                                                    <option>Dubai</option>
                                                                    <option>Frankfurt</option>
                                                                    <option>Hong Kong</option>
                                                                    <option>Honolulu</option>
                                                                    <option>Houston</option>
                                                                    <option>Kuala Lumpur</option>
                                                                    <option>London</option>
                                                                    <option>Los Angeles</option>
                                                                    <option>Melbourne</option>
                                                                    <option>Mexico City</option>
                                                                    <option>Miami</option>
                                                                    <option>Minneapolis</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-envelope-o fa-lg fa-fw"></i></span>
                                                                <input class="form-control input-lg" placeholder="Postal Code" type="text" name="postal" id="postal">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-phone fa-lg fa-fw"></i></span>
                                                                <input class="form-control input-lg" data-mask="+99 (999) 999-9999" data-mask-placeholder= "X" placeholder="+1" type="text" name="wphone" id="wphone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-mobile fa-lg fa-fw"></i></span>
                                                                <input class="form-control input-lg" data-mask="+99 (999) 999-9999" data-mask-placeholder= "X" placeholder="+01" type="text" name="hphone" id="hphone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <ul class="pager wizard no-margin">
                                                            <!--<li class="previous first disabled">
                                                            <a href="javascript:void(0);" class="btn btn-lg btn-default"> First </a>
                                                            </li>-->
                                                            <li class="previous disabled">
                                                                <a href="javascript:void(0);" class="btn btn-lg btn-default"> Previous </a>
                                                            </li>
                                                            <!--<li class="next last">
                                                            <a href="javascript:void(0);" class="btn btn-lg btn-primary"> Last </a>
                                                            </li>-->
                                                            <li class="next">
                                                                <a href="javascript:void(0);" class="btn btn-lg txt-color-darken"> Next </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                        <!-- end widget content -->
    
                    </div>
    
                    <!-- widget div-->
                </div>
            </article>
        </div>
    </setion>
<div class="tramite-lic-construccion-form">


    

   

    

</div>
