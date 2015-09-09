<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\USUARIOS;
use app\models\UsuariosRoles;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		 <?= Html::csrfMetaTags() ?>
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> Desarrollo Urbano </title>
		<meta name="description" content="">
		<meta name="author" content="">

			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<?php $this->head() ?>
		<!-- FAVICONS -->
		<!-- <link rel="shortcut icon" href="<?php echo \Yii::$app->request->baseUrl; ?>/img/favicon/favicon.ico" type="image/x-icon"> -->
		<!-- <link rel="icon" href="<?php echo \Yii::$app->request->baseUrl; ?>/img/favicon/favicon.ico" type="image/x-icon"> -->
		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/touch-icon-ipad-retina.png">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/iphone.png" media="screen and (max-device-width: 320px)">
		<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/jquery202.js"></script>
	  <script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/jquery1.10.3.js"></script>
	 	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
	  <script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/plugin/x-editable/moment.min.js"></script>
<!-- 	  <script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/bootstrap/bootstrap.min.js"></script> -->
	</head>

	<?php $usuarioActual = UsuariosRoles::find()->where('usuarioId = :id',['id'=>Yii::$app->user->id])->all();?>
	
	<body class="menu-on-top pace-done">
		<header id="header">
			<div id="logo-group">
				<span style="margin-left: 20px"><h6><strong>Desarrollo Urbano</strong></h6></span>				
			</div>
			<div class="pull-right">
				
				
				<div id="hide-menu" class="btn-header pull-right">
					<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
				</div>
				
				<?php if(!\Yii::$app->user->isGuest){ ?>

	        <div class="btn-header pull-right">
	            <span>
	            	<?= Html::a('<i class="fa fa-sign-out"></i>', array("site/logout"), array("title"=>"Cerrar Sesión","data-logout-msg"=>"Mejora la seguridad cerrando el navegado después de haber cerrado sesión")); ?>
	            	
	            </span>
	        </div>
        <?php } ?>
				
				<div id="fullscreen" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
				</div>	
			</div>

		</header>
		<aside id="left-panel">

			<div class="login-info">
				<span> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="<?php echo \Yii::$app->request->baseUrl; ?>/img/avatars/sunny.png" alt="me" class="online" /> 
						<span>
							john.doe 
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
			</div>
			
			<nav>
				<ul>
					<?php if(!Yii::$app->user->isGuest){
						foreach($usuarioActual as $ur){?>
					<?php if($ur->roles->nombre == 'Escuelas'){?>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Escuelas</span>', array("escuelas/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Visitas escuelas</span>', array("visitas-escuelas/index")); ?></li>
					<?php } elseif($ur->roles->nombre == 'Proyectos'){?>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Proyectos</span>', array("proyectos/index")); ?></li>
					<?php } elseif($ur->roles->nombre == 'Dev'){?>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Proyectos</span>', array("proyectos/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Empleados</span>', array("empleado/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Tipos de Tramite</span>', array("tipos-tramite/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Roles</span>', array("roles/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Zonificación</span>', array("tramite-zonificacion/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Uso de Suelo</span>', array("tramite-uso-de-suelo/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Relotificacion</span>', array("tramite-relotificacion/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Fusion de Predios</span>', array("tramite-fusion-predio/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Requisitos</span>', array("requisitos/index")); ?></li>
					<?php } elseif($ur->roles->nombre == 'Educacion'){?>
						<li><a href="#"><i class="fa fa-lg fa-fw fa-tasks"></i> <span class="menu-item-parent">Catálogos</span></a>
							<ul>
								<li><?= Html::a('Escuelas', array("escuelas/index")); ?></li>
								<li><?= Html::a('Lugares', array("lugares/index")); ?></li>		              
							</ul>               
							<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Visitas escuelas</span>', array("visitas-escuelas/index")); ?></li>
							<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Recolección pilas</span>', array("visitas-lugares/index")); ?></li>
							<ul>
								<li><?= Html::a('Roles', array("roles/index")); ?></li>
								<li><?= Html::a('Usuarios', array("site/signup")); ?></li>
							</ul>
						</li>		
					<?php } elseif($ur->roles->nombre == 'Educacion'){?>
						<li>
							<a href="#"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">Catálogos</span></a>
							<ul>
								<li><?= Html::a('Escuelas', array("escuelas/index")); ?></li>
								<li><?= Html::a('Lugares', array("lugares/index")); ?></li>
							</ul>
						</li>	
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Visitas Escuelas</span>', array("visitas-escuelas/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Recolección pilas</span>', array("visitas-lugares/index")); ?></li>
					<?php } elseif($ur->roles->nombre == 'Uso de Suelo'){?>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Zonificación</span>', array("tramite-zonificacion/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Uso de Suelo</span>', array("tramite-uso-de-suelo/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Relotificación</span>', array("tramite-relotificacion/index")); ?></li>
						<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Fusión de Predios</span>', array("tramite-fusion-predio/index")); ?></li>
					<?php }}}?>
					<!--
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Requi</span></a>
						<ul>
							<li>
								<a href="flot.html">Pendientes</a>
							</li>
							<li>
								<a href="morris.html">En Proceso</a>
							</li>
							<li>
								<a href="inline-charts.html">Surtidas</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">Solicitudes</span></a>
						<ul>
							<li>
								<a href="flot.html">Pendientes</a>
							</li>
							<li>
								<a href="morris.html">En Proceso</a>
							</li>
							<li>
								<a href="inline-charts.html">Cotizadas</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Coti</span></a>
						<ul>
							<li>
								<a href="flot.html">Pendientes</a>
							</li>
							<li>
								<a href="morris.html">En Proceso</a>
							</li>
							<li>
								<a href="inline-charts.html">Aceptadas</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Orden Compra</span></a>
						<ul>
							<li>
								<a href="flot.html">Pendientes</a>
							</li>
							<li>
								<a href="morris.html">En Proceso</a>
							</li>
							<li>
								<a href="inline-charts.html">Surtidas</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">Inventario</span></a>
						<ul>
							<li>
								<a href="flot.html">Pendientes</a>
							</li>
							<li>
								<a href="morris.html">En Proceso</a>
							</li>
							<li>
								<a href="inline-charts.html">Surtidas</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">Orden de Entrega</span></a>
						<ul>
							<li>
								<a href="flot.html">Pendientes</a>
							</li>
							<li>
								<a href="morris.html">En Proceso</a>
							</li>
							<li>
								<a href="inline-charts.html">Pagada</a>
							</li>
						</ul>
					</li>
					<li><?= Html::a('<i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Zonificacion</span>', array("tramite-zonificacion/index")); ?></li>
					-->
					<?php ?>

				</ul>
			</nav>
			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

		</aside>
		<div id="main" role="main">
<!--			
			<div id="ribbon">				
				<span class="ribbon-button-alignment"> 			
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>
				<ol class="breadcrumb">
					<li>Inicio</li><li>Cuadro de Mando</li>
				</ol>
			</div>
-->			
			<div id="content">
				<section id="widget-grid" class="">
					<div class="row">
						<article class="col-sm-12">
							 <?= Breadcrumbs::widget([
	                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	            ]) ?>
	           
						</article>
					</div>

				</section>
				 <?= $content ?>
			</div>
		</div>
		<div id="shortcut">
			<ul>
				<li>
					<a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Clientes <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
				</li>
				<li>
					<a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Proveedores</span> </span> </a>
				</li>
				<li>
					<a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
				</li>
				<li>
					<a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
				</li>
				<li>
					<a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
				</li>
				<li>
					<a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
				</li>
			</ul>
		</div>
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php echo \Yii::$app->request->baseUrl; ?>/js/plugin/pace/pace.min.js"></script>
		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
		<script>
			if (!window.jQuery) {
				document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
			}
		</script>

		 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>	
		<?php $this->endBody() ?>
			<script type="text/javascript">
					$('.tabla').DataTable({
				        "lengthMenu": [[-1,10, 25, 50], ["Todos", 10, 25, 50]],
           
						
				        "language": {
				            "lengthMenu": "Mostrar _MENU_ registros por página",
				            "zeroRecords": "No se encontró coincidencia",
				            "info": "_PAGE_ de _PAGES_",
				            "infoEmpty": "No hay registros",
				            "infoFiltered": "(Filtrar _MAX_ registros totales)",
				            'search':'Buscar',
				        },
				        responsive: {
				            details: {
				                type: 'column'
				            }
				        },
			    	});

					$('.tabla2').DataTable({
						"paging":   false,
						"ordering": false,
						"info":     false,
						"bLengthChange" : false,
				        "bFilter" : false,               
						
				        "language": {
				            "lengthMenu": "Mostrar _MENU_ registros por página",
				            "zeroRecords": "No se encontró coincidencia",
				            "info": "_PAGE_ de _PAGES_",
				            "infoEmpty": "No hay registros",
				            "infoFiltered": "(Filtrar _MAX_ registros totales)",
				            'search':'Buscar',
				        },
				        responsive: {
				            details: {
				                type: 'column'
				            }
				        },
				        columnDefs: [ {
				            className: 'control',
				            orderable: false,
				            targets:   0
				        } ],
			    	});
			    	
					
				  $('.select2').select2({
					  placeholder: "Seleccione",
					  allowClear: true
					});		

				  $('.select2tag').select2({
					  placeholder: "Seleccione",
					  allowClear: true,
					  tags: true
					});

					$('.select2min1').select2({
					  minimumInputLength: 1,
					  placeholder: "Seleccione",
					  allowClear: true
					});
					
					$('.select2min4').select2({
					  minimumInputLength: 4,
					  placeholder: "Seleccione",
					  allowClear: true
					});
				  

				  $(function() {
				    $( ".datepicker" ).datepicker();
				  });

				  $(document).ready(function(e) {	
				<?php 
					foreach(Yii::$app->session->getAllFlashes() as $key => $message) { 
						$key = explode("-", $key);
						$key = $key[0];
						if($key == "danger"){ ?>
							$.smallBox({
										title : "<?php echo $message[0]; ?>" ,
										content : "<?php echo $message[1]; ?>",
										color : "#a90329",
										iconSmall : "fa fa-thumbs-down bounce animated",
										timeout : 4000
									});
						<?php } else if($key == "info"){ ?>
							$.smallBox({
										title : "<?php echo $message[0]; ?>",
										content : "<?php echo $message[1]; ?>",
										color : "#57889c",
										iconSmall : "fa fa-thumbs-up bounce animated",
										timeout : 4000
									});						
						<?php } else if($key == "success"){ ?>
							$.smallBox({
										title : "<?php echo $message[0]; ?>",
										content : "<?php echo $message[1]; ?>",
										color : "#739E73",
										iconSmall : "fa fa-thumbs-up bounce animated",
										timeout : 4000
									});		
									
						<?php } else if($key == "warning"){ ?>
							$.smallBox({
										title : "<?php echo $message[0]; ?>",
										content : "<?php echo $message[1]; ?>",
										color : "#c79121",
										iconSmall : "fa fa-thumbs-down bounce animated",
										timeout : 4000
									});				
						<?php } else if($key == "primary"){  ?>
							$.smallBox({
										title : "<?php echo $message[0]; ?>",
										content : "<?php echo $message[1]; ?>",
										color : "#296191",
										iconSmall : "fa fa-thumbs-up bounce animated",
										timeout : 4000
									});														
						<?php }
					} ?>
		     });
				$(document).ready( function () {
				    $('#datatable').dataTable( {
				        "sDom": 'T<"clear">lfrtip',
				        "oTableTools": {
				            "sSwfPath": "<?= Yii::$app->getUrlManager()->getBaseUrl() . '/tabletools/swf/copy_csv_xls_pdf.swf' ?>"
				        }
				    } );
				} );

				$('#myTabs a').click(function (e) {
				  e.preventDefault()
				  $(this).tab('show')
				});
		</script>
	</body>

</html>
<?php $this->endPage() ?>