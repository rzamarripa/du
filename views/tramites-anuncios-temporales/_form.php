

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
/* @var $model app\models\TramitesAnunciosTemporales */
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
                    <h2> Anuncios Temporales</h2>
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
                                                <a id="btntab3" href="#tab3" data-toggle="tab" disabled="disabled"> <span class="step">3</span> <span class="title">Revisión</span> </a>
                                            </li>
                                            <li   data-target="#step4" style="width:16.666666666667%">
                                                <a id="btntab4" href="#tab4" data-toggle="tab" disabled="disabled"> <span class="step">4</span> <span class="title">Pago</span> </a>
                                            </li>
                                            <li   data-target="#step5" style="width:16.666666666667%">
                                                <a id="btntab5" href="#tab5" data-toggle="tab" disabled="disabled"> <span class="step">5</span> <span class="title">Supervisión</span> </a>
                                            </li>
                                            <li   data-target="#step6" style="width:16.666666666667%">
                                                <a id="btntab6" href="#tab6" data-toggle="tab" disabled="disabled"> <span class="step">6</span> <span class="title">Permiso</span> </a>
                                            </li>
                                           
                                            
                                        </ul>
                                        <?= $form->field($model,'id')->input('hidden',['name'=>'id','id'=>'idTramite'])->label(false);?>                                         
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <br>
                                        <?php if($permisos[30][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 1 </strong> - Solicitud</h3>*/?>
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1NoOficioTemporal',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p1NoOficioTemporal'),
		                                                                                                            'name'=>'p1NoOficioTemporal',
		                                                                                                            'id'=>'p1NoOficioTemporal'
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
		                                                    <?= $form->field($model,'p1DirigidoTemporal',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p1DirigidoTemporal'),
		                                                                                                            'name'=>'p1DirigidoTemporal',
		                                                                                                            'id'=>'p1DirigidoTemporal'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1RelacionTemporal',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p1RelacionTemporal'),
		                                                                                                            'name'=>'p1RelacionTemporal',
		                                                                                                            'id'=>'p1RelacionTemporal'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p1FirmaTemporal',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p1FirmaTemporal'),
		                                                                                                            'name'=>'p1FirmaTemporal',
		                                                                                                            'id'=>'p1FirmaTemporal'
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
                                        <div class="tab-pane " id="tab2">
                                            <br>
                                            <br>
                                        <?php if($permisos[31][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 2 </strong> - Documentos</h3>*/?>
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p2SolicitudTemporal',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p2SolicitudTemporal',
		                                                                        'id'=>'p2SolicitudTemporal'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp2SolicitudTemporal' >ver</a>
		                                                        <?php endif; ?>                                                
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
                                        <?php if($permisos[32][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 3 </strong> - Revision</h3>*/?>
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3SolicitudTemporal')->checkbox([
		                                                                                                            'name'=>'p3SolicitudTemporal',
		                                                                                                            'id'=>'p3SolicitudTemporal'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp3SolicitudTemporal' >ver</a> 
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
                                        <?php if($permisos[33][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 4 </strong> - Pago</h3>*/?>
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4ReciboPagoTemporal',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p4ReciboPagoTemporal',
		                                                                        'id'=>'p4ReciboPagoTemporal'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp4ReciboPagoTemporal' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4FolioTemporal',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4FolioTemporal'),
		                                                                                                            'name'=>'p4FolioTemporal',
		                                                                                                            'id'=>'p4FolioTemporal'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4EmpresaTemporal',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4EmpresaTemporal'),
		                                                                                                            'name'=>'p4EmpresaTemporal',
		                                                                                                            'id'=>'p4EmpresaTemporal'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4EventoTemporal',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4EventoTemporal'),
		                                                                                                            'name'=>'p4EventoTemporal',
		                                                                                                            'id'=>'p4EventoTemporal'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                	<?= $form->field($model, 'p4FechaExpedicionTemporal')->widget(\yii\jui\DatePicker::classname(),[
															      'dateFormat' => 'yyyy-MM-dd',
															       ])->textInput(['name'=>'p4FechaExpedicionTemporal']) ?>
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4UbicacionTemporal',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->textarea([
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4UbicacionTemporal'),
		                                                                                                            'name'=>'p4UbicacionTemporal',
		                                                                                                            'id'=>'p4UbicacionTemporal'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4CantidadTemporal',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4CantidadTemporal'),
		                                                                                                            'name'=>'p4CantidadTemporal',
		                                                                                                            'id'=>'p4CantidadTemporal'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p4MontoPagarTemporal',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->input('text',[
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p4MontoPagarTemporal'),
		                                                                                                            'name'=>'p4MontoPagarTemporal',
		                                                                                                            'id'=>'p4MontoPagarTemporal'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                	<?= $form->field($model, 'p4VigenciaPagoTemporal')->widget(\yii\jui\DatePicker::classname(),[
															      'dateFormat' => 'yyyy-MM-dd',
															       ])->textInput(['name'=>'p4VigenciaPagoTemporal']) ?>
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
                                        <?php if($permisos[34][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 5 </strong> - Supervisor</h3>*/?>
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5SupervisorTemporal')->checkbox([
		                                                                                                            'name'=>'p5SupervisorTemporal',
		                                                                                                            'id'=>'p5SupervisorTemporal'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp5SupervisorTemporal' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5ObservacionesTemporal',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->textarea([
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p5ObservacionesTemporal'),
		                                                                                                            'name'=>'p5ObservacionesTemporal',
		                                                                                                            'id'=>'p5ObservacionesTemporal'
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
                                        <div class="tab-pane " id="tab6">
                                            <br>
                                            <br>
                                        <?php if($permisos[35][USUARIOS::$LEER]){ ?>
																				<div class="panel panel-default">
																					<div class="panel-heading">
																						<?php /*<h3><strong>Paso 6 </strong> - Permiso</h3>*/?>
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p6PermisoTemporal',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p6PermisoTemporal',
		                                                                        'id'=>'p6PermisoTemporal'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp6PermisoTemporal' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																								<div class="col-sm-6">
			                                            <button  id="btnConstancia" type="button" class="btn btn-primary  active">Guardar Permiso Temporal</button>
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

                
               <?= Html::dropDownList('pasoatras', null,[1=>'Paso 1: Solicitud',2=>'Paso 2: Documentos',], ['prompt' => '--- Seleccionar Paso ---','id'=>'pasoatras']) ?>            </div>
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
                                url: '".Yii::$app->homeUrl."//tramites-anuncios-temporales/atras', // point to server-side PHP script 
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

  

  

  

  

  
            \$('#verp2SolicitudTemporal').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p2SolicitudTemporal')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p2SolicitudTemporal').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp3SolicitudTemporal').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p3SolicitudTemporal')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p3SolicitudTemporal').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  
            \$('#verp4ReciboPagoTemporal').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p4ReciboPagoTemporal')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p4ReciboPagoTemporal').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  

  

  

  

  

  

  

  

  
            \$('#verp5SupervisorTemporal').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p5SupervisorTemporal')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p5SupervisorTemporal').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
                return false;
            });

  

  
            \$('#verp6PermisoTemporal').click(function() {
                \$('#dialog_simple').dialog('open');
                \$('#dialog_simple').dialog('option', 'title', '{$model->getAttributeLabel('p6PermisoTemporal')}');
                \$('#dialog_simple').html('<object type=\"application/pdf\" data=\"{$basepath}/'+\$('#p6PermisoTemporal').attr('value')+'\" width=\"100%\" height=\"500\">Sin Informacion</object>');
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

                  p1NoOficioTemporal: {
                    required: true
                    ,digits: true
                    ,min: 1
                    ,max: 2147483647



                  },

                  p1FechaTemporal: {
                    required: true



                  },

                  p1DirigidoTemporal: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1RelacionTemporal: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p1FirmaTemporal: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p2SolicitudTemporal: {
                    required: true



                  },

                  p3SolicitudTemporal: {
                    required: true



                  },

                  p4ReciboPagoTemporal: {
                    required: true



                  },

                  p4FolioTemporal: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p4EventoTemporal: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p4CantidadTemporal: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p4UbicacionTemporal: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p4EmpresaTemporal: {
                    required: true
                    
                    ,minlength: 1
                    ,maxlength: 50


                  },

                  p4FechaExpedicionTemporal: {
                    required: true



                  },

                  p4MontoPagarTemporal: {
                    required: true
                    ,number: true
                    ,min: 0



                  },

                  p4VigenciaPagoTemporal: {
                    required: true



                  },

                  p5SupervisorTemporal: {
                    required: true



                  },

                  p5ObservacionesTemporal: {
                    required: true
                    
                    ,minlength: 1



                  },

                  p6PermisoTemporal: {
                    required: true



                  },
                },
                
                messages: {
                p1NoOficioTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1NoOficioTemporal')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p1NoOficioTemporal')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p1NoOficioTemporal')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p1NoOficioTemporal')} es demasiado grande',


                },

                p1FechaTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1FechaTemporal')}',


                },

                p1DirigidoTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1DirigidoTemporal')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1DirigidoTemporal')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1DirigidoTemporal')} excede el numero de caracteres permitidos',


                },

                p1RelacionTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1RelacionTemporal')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1RelacionTemporal')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1RelacionTemporal')} excede el numero de caracteres permitidos',


                },

                p1FirmaTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p1FirmaTemporal')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p1FirmaTemporal')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p1FirmaTemporal')} excede el numero de caracteres permitidos',


                },

                p2SolicitudTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p2SolicitudTemporal')}',


                },

                p3SolicitudTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p3SolicitudTemporal')}',


                },

                p4ReciboPagoTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4ReciboPagoTemporal')}',


                },

                p4FolioTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4FolioTemporal')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p4FolioTemporal')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p4FolioTemporal')} excede el numero de caracteres permitidos',


                },

                p4EventoTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4EventoTemporal')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p4EventoTemporal')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p4EventoTemporal')} excede el numero de caracteres permitidos',


                },

                p4CantidadTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4CantidadTemporal')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p4CantidadTemporal')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p4CantidadTemporal')} excede el numero de caracteres permitidos',


                },

                p4UbicacionTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4UbicacionTemporal')}',


                },

                p4EmpresaTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4EmpresaTemporal')}',
                  minlength: 'El Valor de {$model->getAttributeLabel('p4EmpresaTemporal')} debe contener al menos 1 caracter ',
                  maxlength: 'El Valor de {$model->getAttributeLabel('p4EmpresaTemporal')} excede el numero de caracteres permitidos',


                },

                p4FechaExpedicionTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4FechaExpedicionTemporal')}',


                },

                p4MontoPagarTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4MontoPagarTemporal')}',
                  digits: 'El Valor de {$model->getAttributeLabel('p4MontoPagarTemporal')} debe ser entero',
                  min: 'El Valor de {$model->getAttributeLabel('p4MontoPagarTemporal')} debe ser mayor que 0',
                  max: 'El Valor de {$model->getAttributeLabel('p4MontoPagarTemporal')} es demasiado grande',


                },

                p4VigenciaPagoTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p4VigenciaPagoTemporal')}',


                },

                p5SupervisorTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5SupervisorTemporal')}',


                },

                p5ObservacionesTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p5ObservacionesTemporal')}',


                },

                p6PermisoTemporal: {
                  required: 'Por favor especificar {$model->getAttributeLabel('p6PermisoTemporal')}',


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
                                                                form_data.append('TramitesAnunciosTemporales['+item.name +']',item.value);
                                                            return obj;
                                                        }, {});
                    
                    datos['_csrf']=csrfToken;
                    form_data.append('paso',index);
                    try {
                        console.log('Buscando Archivos');
                        var p2SolicitudTemporal = $('#p2SolicitudTemporal').prop('files')[0];
                        form_data.append('TramitesAnunciosTemporales[p2SolicitudTemporal]', p2SolicitudTemporal);


                        var p4ReciboPagoTemporal = $('#p4ReciboPagoTemporal').prop('files')[0];
                        form_data.append('TramitesAnunciosTemporales[p4ReciboPagoTemporal]', p4ReciboPagoTemporal);


                        var p6PermisoTemporal = $('#p6PermisoTemporal').prop('files')[0];
                        form_data.append('TramitesAnunciosTemporales[p6PermisoTemporal]', p6PermisoTemporal);



                    }
                    catch(err) {
                        console.log('No se cargaron los archivos'+ err.message);
                    }
                    \$.ajax({
                                url: '".Yii::$app->homeUrl."/tramites-anuncios-temporales/salvar', // point to server-side PHP script 
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
                                            if(data.p2SolicitudTemporal!==undefined)
                                                \$('#p2SolicitudTemporal').attr('value',data.p2SolicitudTemporal);
                                            if(data.p4ReciboPagoTemporal!==undefined)
                                                \$('#p4ReciboPagoTemporal').attr('value',data.p4ReciboPagoTemporal);
                                            if(data.p6PermisoTemporal!==undefined)
                                                \$('#p6PermisoTemporal').attr('value',data.p6PermisoTemporal);

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
