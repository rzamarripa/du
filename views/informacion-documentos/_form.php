<?php
	use yii\helpers\Html;
	use kartik\widgets\ActiveForm;
	use yii\helpers\ArrayHelper;
	use kartik\select2\Select2;
	use kartik\widgets\FileInput;
	
	if(isset($_GET["n"]) && $_GET["n"] == "v"){
		echo Html::a('Volver', ['view', 'id' => $_GET["id"]], ['class' => 'btn btn-primary']);
	}else{
		echo Html::a('Volver', ['index'], ['class' => 'btn btn-primary']);		                
	}
?>
<br/>
<br/>
<div class="row">
	<?php $form = ActiveForm::begin(); ?>
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
	            	<?= $form->field($model,'correoPropietario',[  'showLabels'=>true,
	              'showErrors'=>false,
	              //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
	              'options'=>['class' => 'form-group']]
	              )->input('text',[
	                                  'class' => 'form-control input-lg',
	                                  'placeholder'=>$model->getAttributeLabel('correoPropietario'),
	                                  'name'=>'correoPropietario',
	                                  'id'=>'correoPropietario'
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
				    <h3 class="panel-title">Propietario</h3>
				  </div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12">
	            <?= $form->field($model,'nombrePropietario',[  'showLabels'=>true,
	            'showErrors'=>false,
	            //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
	            'options'=>['class' => 'form-group']]
	            )->input('text',[
	                                'class' => 'form-control input-lg',
	                                'placeholder'=>$model->getAttributeLabel('nombrePropietario'),
	                                'name'=>'nombrePropietario',
	                                'id'=>'nombrePropietario'
	                            ]
	            );?> 
	        	</div>
	        </div>
	        <div class="row">
						<div class="col-sm-12">
	            <?= $form->field($model,'direccionPropietario',[  'showLabels'=>true,
	            'showErrors'=>false,
	            //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
	            'options'=>['class' => 'form-group']]
	            )->textarea([
	                                'class' => 'form-control input-lg',
	                                'placeholder'=>$model->getAttributeLabel('direccionPropietario'),
	                                'name'=>'direccionPropietario',
	                                'id'=>'direccionPropietario'
	                            ]
	            );?> 
	        	</div>
	        </div>
	        <div class="row">
	        	<div class="col-sm-12">
	            <?= $form->field($model,'telefonoPropietario',[  'showLabels'=>true,
	            'showErrors'=>false,
	            //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
	            'options'=>['class' => 'form-group']]
	            )->input('text',[
	                                'class' => 'form-control input-lg',
	                                'placeholder'=>$model->getAttributeLabel('telefonoPropietario'),
	                                'name'=>'telefonoPropietario',
	                                'id'=>'telefonoPropietario'
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
							<?= $form->field($model,'correoPropietario',[  'showLabels'=>true,
	            'showErrors'=>false,
	            //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
	            'options'=>['class' => 'form-group']]
	            )->input('text',[
	                                'class' => 'form-control input-lg',
	                                'placeholder'=>$model->getAttributeLabel('correoPropietario'),
	                                'name'=>'correoPropietario',
	                                'id'=>'correoPropietario'
	                            ]
	            );?> 
	        	</div>
	      	</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Datos del Predio</h3>
					</div>
					<div class="panel-body">
								<div class="row">
									<div class="col-sm-12">
		              	<?= $form->field($model,'callePredio',[  'showLabels'=>true,
		                'showErrors'=>false,
		                //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                'options'=>['class' => 'form-group']]
		                )->input('text',[
		                                    'class' => 'form-control input-lg',
		                                    'placeholder'=>$model->getAttributeLabel('callePredio'),
		                                    'name'=>'callePredio',
		                                    'id'=>'callePredio'
		                                ]
		                );?> 
		              </div>
		            </div>		
								<div class="row">
		            	<div class="col-sm-12">
		                <?= $form->field($model,'coloniaPredio',[  'showLabels'=>true,
		                'showErrors'=>false,
		                //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                'options'=>['class' => 'form-group']]
		                )->input('text',[
		                                    'class' => 'form-control input-lg',
		                                    'placeholder'=>$model->getAttributeLabel('coloniaPredio'),
		                                    'name'=>'coloniaPredio',
		                                    'id'=>'coloniaPredio'
		                                ]
		                );?> 
		            	</div>
		            </div>
								<div class="row">
		            	<div class="col-sm-12">
		                <?= $form->field($model,'numeroOficialPredio',[  'showLabels'=>true,
		                'showErrors'=>false,
		                //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                'options'=>['class' => 'form-group']]
		                )->input('text',[
		                                    'class' => 'form-control input-lg',
		                                    'placeholder'=>$model->getAttributeLabel('numeroOficialPredio'),
		                                    'name'=>'numeroOficialPredio',
		                                    'id'=>'numeroOficialPredio'
		                                ]
		                );?> 
		              </div>
		            </div>
								<div class="row">
		            	<div class="col-sm-12">
		                <?= $form->field($model,'numeroInteriorPredio',[  'showLabels'=>true,
		                'showErrors'=>false,
		                //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                'options'=>['class' => 'form-group']]
		                )->input('text',[
		                                    'class' => 'form-control input-lg',
		                                    'placeholder'=>$model->getAttributeLabel('numeroInteriorPredio'),
		                                    'name'=>'numeroInteriorPredio',
		                                    'id'=>'numeroInteriorPredio'
		                                ]
		                );?> 
		              </div>
		            </div>													    
								<div class="row">
		            	<div class="col-sm-12">
		                <?= $form->field($model,'pobladoPredio',[  'showLabels'=>true,
		                'showErrors'=>false,
		                //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                'options'=>['class' => 'form-group']]
		                )->input('text',[
		                                    'class' => 'form-control input-lg',
		                                    'placeholder'=>$model->getAttributeLabel('pobladoPredio'),
		                                    'name'=>'pobladoPredio',
		                                    'id'=>'pobladoPredio'
		                              ]
		                );?> 
		              </div>
		           	</div>
							 	<div class="row">
							 		<div class="col-sm-12">
		                <?= $form->field($model,'sindicaturaPredio',[  'showLabels'=>true,
		                'showErrors'=>false,
		                //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                'options'=>['class' => 'form-group']]
		                )->input('text',[
		                                    'class' => 'form-control input-lg',
		                                    'placeholder'=>$model->getAttributeLabel('sindicaturaPredio'),
		                                    'name'=>'sindicaturaPredio',
		                                    'id'=>'sindicaturaPredio'
		                                ]
		                );?> 
		              </div>
		            </div>
								<div class="row">
		              <div class="col-sm-12">
		                <?= $form->field($model,'claveCatastralPredio',[  'showLabels'=>true,
		                'showErrors'=>false,
		                //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                'options'=>['class' => 'form-group']]
		                )->input('text',[
		                                    'class' => 'form-control input-lg',
		                                    'placeholder'=>$model->getAttributeLabel('claveCatastralPredio'),
		                                    'name'=>'claveCatastralPredio',
		                                    'id'=>'claveCatastralPredio'
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
				    <h3 class="panel-title">Observaciones</h3>
				  </div>
				<div class="panel-body">
						<div class="row">
		          <div class="col-sm-12">
		            <?= $form->field($model,'observaciones',[  'showLabels'=>false,
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
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	  <div class="form-group">
	    <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar cambios', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	  </div>
	</div>
	<?php ActiveForm::end(); ?>
</div>