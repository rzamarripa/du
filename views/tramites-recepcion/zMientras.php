Solicitud
 																					
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
																									</div>
																								</div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																								<div class="panel panel-default">
																									<div class="panel-heading">
																										<h3 class="panel-title">Uso de Suelo</h3>
																									</div>
																									<div class="panel-body">
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
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
																							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
																								<div class="panel panel-default">
																									<div class="panel-heading">
																										<h3 class="panel-title">Datos del Predio</h3>
																									</div>
																									<div class="panel-body">
																										<div class="row">
																											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
																											</div>
																											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																												<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">																											
																													<br>
																													<h3> Colindancias:</h3>
																													<br>
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
																												</div>
																												<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																													<br>
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
								                                                   <?= $form->field($model,'p1NorOrientePredio',[ 'showLabels'=>true,
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
								                                                   <?= $form->field($model,'p1SurOrientePredio',[ 'showLabels'=>true,
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
								                                                   <?= $form->field($model,'p1NorPonientePredio',[ 'showLabels'=>true,
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
								                                                   <?= $form->field($model,'p1SurPonientePredio',[ 'showLabels'=>true,
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
																												</div>
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
																										<h3 class="panel-title">Propietario</h3>
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
																									</div>
																								</div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
																								<div class="panel panel-default">
																									<div class="panel-heading">
																										<h3 class="panel-title">Superficies</h3>
																									</div>
																									<div class="panel-body">        
																										<div class="row">
																											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
																											</div>
																											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
																										<h3 class="panel-title">Gestor</h3>
																									</div>
																									<div class="panel-body">
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
																									</div>
																								</div>
																							</div>
																						</div>
 																					</div>
 																					
----------------->


Supervision

																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Supervisor')->checkbox([
		                                                                                                            'name'=>'p3Supervisor',
		                                                                                                            'id'=>'p3Supervisor'
		                                                    ]); ?>                                                   <a href='javascript:void(0);' id='verp3Supervisor' >ver</a> 
		                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p3Observaciones',[  'showLabels'=>true,
		                                                                                        'showErrors'=>false,
		                                                                                        //'addon' => ['prepend' => ['content'=>'<i class="fa fa-envelope fa-lg fa-fw"></i>']],
		                                                                                        'options'=>['class' => 'form-group']]
		                                                                                        )->textarea([
		                                                                                                            'class' => 'form-control input-lg',
		                                                                                                            'placeholder'=>$model->getAttributeLabel('p3Observaciones'),
		                                                                                                            'name'=>'p3Observaciones',
		                                                                                                            'id'=>'p3Observaciones'
		                                                                                                        ]
		                                                                                        );?> 
		                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
																								<div class="row">
		                                               <div class="col-sm-12">
		                                                   <?= $form->field($model,'p3Expediente',[
		                                                   'options'=>['class' => 'form-group']]
		                                                   )->fileInput( [ 'accept' => 'application/pdf',
		                                                                       'name'=>'p3Expediente',
		                                                                       'id'=>'p3Expediente'       
		                                                   ]);?>                                                   
		                                                   <?php if(!$model->isNewRecord): ?>
		                                                           <a href='javascript:void(0);' id='verp3Expediente' >ver</a>
		                                                       <?php endif; ?>                                               </div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
--------------->


Documentos


																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5SolicitudPresidenteMuni',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5SolicitudPresidenteMuni',
		                                                                        'id'=>'p5SolicitudPresidenteMuni'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5SolicitudPresidenteMuni' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5CertificadoCabildo',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5CertificadoCabildo',
		                                                                        'id'=>'p5CertificadoCabildo'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5CertificadoCabildo' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoLotificacion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
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
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5RecepcionJapac',
		                                                                        'id'=>'p5RecepcionJapac'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5RecepcionJapac' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5ActaRecepcion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5ActaRecepcion',
		                                                                        'id'=>'p5ActaRecepcion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5ActaRecepcion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5MemoriaTecno',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5MemoriaTecno',
		                                                                        'id'=>'p5MemoriaTecno'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5MemoriaTecno' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoAgua',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoAgua',
		                                                                        'id'=>'p5PlanoAgua'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoAgua' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoAlcantarillado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoAlcantarillado',
		                                                                        'id'=>'p5PlanoAlcantarillado'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoAlcantarillado' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5RecepcionCfe',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5RecepcionCfe',
		                                                                        'id'=>'p5RecepcionCfe'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5RecepcionCfe' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5ActaRecepcionCfe',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5ActaRecepcionCfe',
		                                                                        'id'=>'p5ActaRecepcionCfe'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5ActaRecepcionCfe' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5CartaCompromiso',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5CartaCompromiso',
		                                                                        'id'=>'p5CartaCompromiso'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5CartaCompromiso' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5MemoriaTecnoCfe',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5MemoriaTecnoCfe',
		                                                                        'id'=>'p5MemoriaTecnoCfe'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5MemoriaTecnoCfe' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoCfe',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoCfe',
		                                                                        'id'=>'p5PlanoCfe'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoCfe' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5RecepcionAlumbrado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5RecepcionAlumbrado',
		                                                                        'id'=>'p5RecepcionAlumbrado'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5RecepcionAlumbrado' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5OficioRecepcion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5OficioRecepcion',
		                                                                        'id'=>'p5OficioRecepcion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5OficioRecepcion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5MemoriaTecnoAlumbrado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5MemoriaTecnoAlumbrado',
		                                                                        'id'=>'p5MemoriaTecnoAlumbrado'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5MemoriaTecnoAlumbrado' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoAlumbrado',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoAlumbrado',
		                                                                        'id'=>'p5PlanoAlumbrado'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoAlumbrado' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5RecepcionCivil',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5RecepcionCivil',
		                                                                        'id'=>'p5RecepcionCivil'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5RecepcionCivil' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5ActaTecnica',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5ActaTecnica',
		                                                                        'id'=>'p5ActaTecnica'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5ActaTecnica' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5MemoriaTecnoCivil',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5MemoriaTecnoCivil',
		                                                                        'id'=>'p5MemoriaTecnoCivil'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5MemoriaTecnoCivil' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoObras',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoObras',
		                                                                        'id'=>'p5PlanoObras'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoObras' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5Donaciones',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5Donaciones',
		                                                                        'id'=>'p5Donaciones'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5Donaciones' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5EscriturasPublica',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5EscriturasPublica',
		                                                                        'id'=>'p5EscriturasPublica'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5EscriturasPublica' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p5PlanoPoligono',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p5PlanoPoligono',
		                                                                        'id'=>'p5PlanoPoligono'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp5PlanoPoligono' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																						</div>
																					</div>
																				</div>
																				
----------------->

Revision

																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
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
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
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
																							</div>
																						</div>
																					</div>
																				</div>
																				
---------------->

Guardar

 																				<div class="panel panel-default">
																					<div class="panel-heading">
																					</div>
																					<div class="panel-body">
																						<div class="row">
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
		                                            <div class="row">
		                                                <div class="col-sm-12">
		                                                    <?= $form->field($model,'p7Recepcion',[
		                                                    'options'=>['class' => 'form-group']]
		                                                    )->fileInput( [ 'accept' => 'application/pdf',
		                                                                        'name'=>'p7Recepcion',
		                                                                        'id'=>'p7Recepcion'        
		                                                    ]);?>                                                    
		                                                    <?php if(!$model->isNewRecord): ?>
		                                                            <a href='javascript:void(0);' id='verp7Recepcion' >ver</a>
		                                                        <?php endif; ?>                                                </div>
		                                            </div>
																							</div>
																							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
																								<div class="col-sm-6">
		                                            <button  id="btnConstancia" type="button" class="btn btn-primary  active">Guardar Recepción</button>
																								</div>
																							</div>
																							</div>
																						</div>
																					</div>
																				</div>
