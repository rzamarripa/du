
				<!-- widget grid -->
				<section id="widget-grid" class="">
				
					<!-- row -->
					<div class="row">
				
						<!-- NEW WIDGET START -->
						<article class="col-sm-12 col-md-12 col-lg-6">
				
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
									<h2>Very Basic Wizard Example </h2>
				
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
											<form id="wizard-1" novalidate="novalidate">
												<div id="bootstrap-wizard-1" class="col-sm-12">
													<div class="form-bootstrapWizard">
														<ul class="bootstrapWizard form-wizard">
															<li class="active" data-target="#step1">
																<a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Inicio</span> </a>
															</li>
															<li data-target="#step2">
																<a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Fase 2</span> </a>
															</li>
															<li data-target="#step3">
																<a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Proceso Completo</span> </a>
															</li>
														</ul>
														<div class="clearfix"></div>
													</div>
													<div class="tab-content">
														<div class="tab-pane active" id="tab1">
															<br>
															<h3><strong>Step 1 </strong> - Inicio</h3>
				

															<div class="row">
																<div class="col-sm-6">
																	<div class="form-group">
																		<div class="input-group">
																			<span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
																			<input class="form-control input-lg" placeholder="Nombre" type="text" name="nombre" id="fname">
																			<input class="form-control input-lg" placeholder="idTramite" type="hidden" name="id" id="idTramite">
				
																		</div>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group">
																		<div class="input-group">
																			<span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
																			<input class="form-control input-lg" placeholder="Edad" type="text" name="edad" id="lname">
				
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
				
																<div class="col-sm-12">
																	<div class="form-group">
																		<div class="input-group">
																			<span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
																			<input class="form-control input-lg" placeholder="Direccion" type="text" name="direccion" id="direccion">
				
																		</div>
																	</div>
				
																</div>
				
															</div>
				
				
														</div>
														<div class="tab-pane" id="tab2">
															<br>
															<h3><strong>Step 2</strong> - Fase 2</h3>
				
															<div class="row">
																<div class="col-sm-4">
																	<div class="form-group">
																		<div class="input-group">
																			
																		</div>
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="form-group">
																		<div class="input-group">
																			
																		</div>
																	</div>
																</div>
																<div class="col-sm-4">
																	<div class="form-group">
																		<div class="input-group">
																			
																		</div>
																	</div>
																</div>
															</div>
															
														</div>
													
														<div class="tab-pane" id="tab3">
															<br>
															<h3><strong>Step 3</strong> - Proceso Completo</h3>
															<br>
															<h1 class="text-center text-success"><strong><i class="fa fa-check fa-lg"></i> Complete</strong></h1>
															<h4 class="text-center">Click next to finish</h4>
															<br>
															<br>
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
											</form>
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

<?php

$this->registerJsFile( 'http://10.10.1.182/du/js/prueba.js',['depends' => [\yii\web\JqueryAsset::className()]]);

?>