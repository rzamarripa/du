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
		<link rel="shortcut icon" href="<?php echo \Yii::$app->request->baseUrl; ?>/img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo \Yii::$app->request->baseUrl; ?>/img/favicon/favicon.ico" type="image/x-icon">
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
				<a href="http://culiacan.gob.mx">
            		<img src="http://culiacan.gob.mx/wp-content/themes/rosales/assets/images/logos/ayuntamiento.svg" style="width: auto; height: 40px;margin-left: 30px;" >
          		</a>			
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
							Invitado
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
			</div>
			
			<nav>
				<ul>
					<?php if(Yii::$app->user->isGuest){?>	
					<li><?= Html::a('<span class="menu-item-parent">Iniciar Sesión</span>', array("site/login")); ?></li>
					<?php }?>
					<?php if(!Yii::$app->user->isGuest){
						$reportes = false;
					?>
					<li class="pull-right"><a href="#"><span style="text-transform:capitalize;" class="menu-item-parent"><span class="fa fa-user"></span> <?= Yii::$app->user->identity->username ?></span></a></li>
					<?php
						foreach($usuarioActual as $ur){?>
					<?php if($ur->roles->nombre == 'Escuelas'){?>
					<li><?= Html::a('<span class="menu-item-parent">Escuelas</span>', array("site/index")); ?></li>
					<li><?= Html::a('<span class="menu-item-parent">Visitas escuelas</span>', array("visitas-escuelas/index")); ?></li>

					<?php } elseif($ur->roles->nombre == 'Proyectos'){?>
					<li><?= Html::a('<span class="menu-item-parent">Proyectos</span>', array("proyectos/index")); ?></li>
					<?php } elseif($ur->roles->nombre == 'Fraccionamiento'){?>
					<li><?= Html::a('<span class="menu-item-parent">Autorización</span>', array("tramites-autorizacion/index")); ?></li>
					<li><?= Html::a('<span class="menu-item-parent">Recepción</span>', array("tramites-recepcion/index")); ?></li>
					<li><?= Html::a('<span class="menu-item-parent">Relotificación</span>', array("tramites-relotificacion-fracc/index")); ?></li>
					<li><?php $reportes = true;?></li>					
					<?php } elseif($ur->roles->nombre == 'Dev'){?>
					<li><?= Html::a('<span class="menu-item-parent">Empleados</span>', array("empleado/index")); ?></li>
					<li><?= Html::a('<span class="menu-item-parent">Tipos de Trámite</span>', array("tipos-tramite/index")); ?></li>
					<li><?= Html::a('<span class="menu-item-parent">Información del Documento</span>', array("informacion-documentos/index")); ?></li>		
					<li><a href="#"><span class="menu-item-parent">Soporte</span></a>
						<ul>
							<li><?= Html::a('<span class="menu-item-parent">Proyectos</span>', array("proyectos/index")); ?></li>
							<li><a href="#"><span class="menu-item-parent">Uso de Suelo</span></a>
								<ul>
									<li><?= Html::a('Constancia de Zonificación', array("tramite-zonificacion/index")); ?></li>
									<li><?= Html::a('Licencia de Uso de Suelo', array("tramite-uso-de-suelo/index")); ?></li>
									<li><?= Html::a('Relotificación', array("tramite-relotificacion/index")); ?></li>
									<li><?= Html::a('Fusión de Predios', array("tramite-fusion-predio/index")); ?></li>
									<li><?php $reportes = true;?></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-item-parent">Conservación RN</span></a>
								<ul>
									<li><?= Html::a('Anuncios Permanentes', array("tramites-espectaculares/index")); ?></li>
									<li><?= Html::a('Anuncios Temporales', array("tramites-anuncios-temporales/index")); ?></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-item-parent">Educación</span></a>
								<ul>
			            <li><?= Html::a('<span class="menu-item-parent">Inicio</span>', array("site/escuelas")); ?></li>
									<li><a href="#"><span class="menu-item-parent">Educación</span></a>
										<ul>
											<li><?= Html::a('Escuelas', array("escuelas/index")); ?></li>
											<li><?= Html::a('Lugares', array("lugares/index")); ?></li>
											<li><?= Html::a('Empresas', array("empresas/index")); ?></li>

										</ul>
									</li>
	                <li><?= Html::a('<span class="menu-item-parent">Visitas Escuelas</span>', array("visitas-escuelas/index")); ?></li>
	                <li><?= Html::a('<span class="menu-item-parent">Recolección Pilas</span>', array("visitas-lugares/index")); ?></li>
									<li><?= Html::a('<span class="menu-item-parent">Vistas a Empresas</span>', array("visitas-empresas/index")); ?></li>
	                <li><?= Html::a('<span class="menu-item-parent">Recolección Desechos Electrónicos</span>', array("rec-electronicos/index")); ?></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-item-parent">Derribo de Árboles</span></a>
								<ul>
									<li><?= Html::a('<span class="menu-item-parent">Dictámenes</span>', array("dictamenes/index")); ?></li>
                  <li><?= Html::a('<span class="menu-item-parent">Derribo de árboles</span>', array("der-arboles/index")); ?></li>
                  <li><?= Html::a('<span class="menu-item-parent">Quejas</span>', array("quejas/index")); ?></li>
								</ul>
							</li>							
							<li><a href="#"><span class="menu-item-parent">Fraccionamiento</span></a>
								<ul>
									<li><?= Html::a('Autorización', array("tramites-autorizacion/index")); ?></li>
									<li><?= Html::a('Recepción', array("tramites-recepcion/index")); ?></li>
									<li><?= Html::a('Relotificación', array("tramites-relotificacion-fracc/index")); ?></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-item-parent">Construcción</span></a>
								<ul>
									<li><?= Html::a('Alineamiento', array("tramites-alineamiento/index")); ?></li>
									<li><?= Html::a('Número Oficial', array("tramites-numero-oficial/index")); ?></li>
									<li><?= Html::a('Deslinde', array("tramites-deslinde/index")); ?></li>
									<li><?= Html::a('Mat en Vía Pública', array("tramites-material-via/index")); ?></li>
									<li><?= Html::a('Régimen en Condominio', array("tramites-regimen-condominio/index")); ?></li>
									<li><?= Html::a('Certificado de Ocupación', array("tramites-certificado-ocupacion/index")); ?></li>
									<li><?= Html::a('Apertura de Cepas', array("tramites-apertura-cepas/index")); ?></li>
									<li><?= Html::a('Licencia de Construcción', array("tramites-licencia-construccion/index")); ?></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-item-parent">Usuarios</span></a>
								<ul>
									<li><?= Html::a('Roles', array("roles/index")); ?></li>
									<li><?= Html::a('Usuarios', array("site/signup")); ?></li>
								</ul>
							</li>
						</ul>
					</li>
					<?php } elseif($ur->roles->nombre == 'Direccion'){?>		
					<li><a href="#"><span class="menu-item-parent">Soporte</span></a>
						<ul>
							<li><?= Html::a('<span class="menu-item-parent">Proyectos</span>', array("proyectos/index")); ?></li>
							<li><a href="#"><span class="menu-item-parent">Uso de Suelo</span></a>
								<ul>
									<li><?= Html::a('Constancia de Zonificación', array("tramite-zonificacion/index")); ?></li>
									<li><?= Html::a('Licencia de Uso de Suelo', array("tramite-uso-de-suelo/index")); ?></li>
									<li><?= Html::a('Relotificación', array("tramite-relotificacion/index")); ?></li>
									<li><?= Html::a('Fusión de Predios', array("tramite-fusion-predio/index")); ?></li>
									<li><?php $reportes = true;?></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-item-parent">Conservación RN</span></a>
								<ul>
									<li><?= Html::a('Anuncios Permanentes', array("tramites-espectaculares/index")); ?></li>
									<li><?= Html::a('Anuncios Temporales', array("tramites-anuncios-temporales/index")); ?></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-item-parent">Educación</span></a>
								<ul>
			            <li><?= Html::a('<span class="menu-item-parent">Inicio</span>', array("site/escuelas")); ?></li>
									<li><a href="#"><span class="menu-item-parent">Educación</span></a>
										<ul>
											<li><?= Html::a('Escuelas', array("escuelas/index")); ?></li>
											<li><?= Html::a('Lugares', array("lugares/index")); ?></li>
											<li><?= Html::a('Empresas', array("empresas/index")); ?></li>

										</ul>
									</li>
	                <li><?= Html::a('<span class="menu-item-parent">Visitas Escuelas</span>', array("visitas-escuelas/index")); ?></li>
	                <li><?= Html::a('<span class="menu-item-parent">Recolección Pilas</span>', array("visitas-lugares/index")); ?></li>
									<li><?= Html::a('<span class="menu-item-parent">Vistas a Empresas</span>', array("visitas-empresas/index")); ?></li>
	                <li><?= Html::a('<span class="menu-item-parent">Recolección Desechos Electrónicos</span>', array("rec-electronicos/index")); ?></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-item-parent">Derribo de Árboles</span></a>
								<ul>
									<li><?= Html::a('<span class="menu-item-parent">Dictámenes</span>', array("dictamenes/index")); ?></li>
                  <li><?= Html::a('<span class="menu-item-parent">Derribo de árboles</span>', array("der-arboles/index")); ?></li>
                  <li><?= Html::a('<span class="menu-item-parent">Quejas</span>', array("quejas/index")); ?></li>
								</ul>
							</li>							
							<li><a href="#"><span class="menu-item-parent">Fraccionamiento</span></a>
								<ul>
									<li><?= Html::a('Autorización', array("tramites-autorizacion/index")); ?></li>
									<li><?= Html::a('Recepción', array("tramites-recepcion/index")); ?></li>
									<li><?= Html::a('Relotificación', array("tramites-relotificacion-fracc/index")); ?></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-item-parent">Construcción</span></a>
								<ul>
									<li><?= Html::a('Alineamiento', array("tramites-alineamiento/index")); ?></li>
									<li><?= Html::a('Número Oficial', array("tramites-numero-oficial/index")); ?></li>
									<li><?= Html::a('Deslinde', array("tramites-deslinde/index")); ?></li>
									<li><?= Html::a('Mat en Vía Pública', array("tramites-material-via/index")); ?></li>
									<li><?= Html::a('Régimen en Condominio', array("tramites-regimen-condominio/index")); ?></li>
									<li><?= Html::a('Certificado de Ocupación', array("tramites-certificado-ocupacion/index")); ?></li>
									<li><?= Html::a('Apertura de Cepas', array("tramites-apertura-cepas/index")); ?></li>
									<li><?= Html::a('Licencia de Construcción', array("tramites-licencia-construccion/index")); ?></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-item-parent">Usuarios</span></a>
								<ul>
									<li><?= Html::a('Roles', array("roles/index")); ?></li>
									<li><?= Html::a('Usuarios', array("site/signup")); ?></li>
								</ul>
							</li>
						</ul>
					</li>
					<?php } elseif($ur->roles->nombre == 'educacion'){?>
				            <li><?= Html::a('<span class="menu-item-parent">Inicio</span>', array("site/escuelas")); ?></li>
		                  <li><a href="#"><span class="menu-item-parent">Catálogos</span></a>
			                	<ul>
				                	<li><?= Html::a('Escuelas', array("escuelas/index")); ?></li>
													<li><?= Html::a('Lugares', array("lugares/index")); ?></li>	
													<li><?= Html::a('Empresas', array("empresas/index")); ?></li>	              
			                  </ul>  
			                </li>            
											<li><?= Html::a('<span class="menu-item-parent">Visitas escuelas</span>', array("visitas-escuelas/index")); ?></li>
											<li><?= Html::a('<span class="menu-item-parent">Recolección pilas</span>', array("visitas-lugares/index")); ?></li>
											<li><?= Html::a('<span class="menu-item-parent">Vistas a empresas</span>', array("visitas-empresas/index")); ?></li>
											<li><?= Html::a('<span class="menu-item-parent">Recolección desechos electrónicos</span>', array("rec-electronicos/index")); ?></li>
										</li>
					<?php } elseif($ur->roles->nombre == 'Construccion'){?>
<!-- 								<li><?= Html::a('<span class="menu-item-parent">Información de Documentos</span>', array("informacion-documentos/index")); ?></li> -->
                    <li><?= Html::a('<span class="menu-item-parent">Alineamiento</span>', array("tramites-alineamiento/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Asignación de Número</span>', array("tramites-numero-oficial/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Deslinde</span>', array("tramites-deslinde/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Material en Vía Pública</span>', array("tramites-material-via/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Régimen en Condominio</span>', array("tramites-regimen-condominio/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Certificado de Ocupación</span>', array("tramites-certificado-ocupacion/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Apertura de Cepas</span>', array("tramites-apertura-cepas/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Licencia de Construcción</span>', array("tramites-licencia-construccion/index")); ?></li>
                    
					<?php } elseif($ur->roles->nombre == 'Uso de Suelo'){?>
                    <li><?= Html::a('<span class="menu-item-parent">Constancia de Zonificación</span>', array("tramite-zonificacion/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Licencia de Uso de Suelo</span>', array("tramite-uso-de-suelo/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Relotificación</span>', array("tramite-relotificacion/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Fusión de Predios</span>', array("tramite-fusion-predio/index")); ?></li>
                    <li><?php $reportes = true;?></li>
					<?php } elseif($ur->roles->nombre == 'eduardo'){?>
                    <li><?= Html::a('<span class="menu-item-parent">Dictámenes</span>', array("dictamenes/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Derribo de árboles</span>', array("der-arboles/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Quejas</span>', array("quejas/index")); ?></li>

					<?php } elseif($ur->roles->nombre == 'pedro'){?>
                    <li><?= Html::a('<span class="menu-item-parent">Permanentes</span>', array("tramites-espectaculares/index")); ?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Temporales</span>', array("tramites-anuncios-temporales/index")); ?></li>
                     <li><?php $reportes = true;?></li>
                    <?php } elseif($ur->roles->nombre == 'Sistemas'){?>
                    <li><?= Html::a('<span class="menu-item-parent">Tramites</span>', array("tipos-tramite/index"));?></li>
                    <li><?= Html::a('<span class="menu-item-parent">Usuarios</span>', array("site/signup")); ?></li>
					<?php }}
					if($reportes){?>
					<li><?= Html::a('<span class="menu-item-parent">Reportes</span>', array("reportes/reportes"));?></li>	
					<?php }}?>
					<?php /*
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
					*/ ?>
				

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
						 "sDom": 'T<"clear">lfrtip',
				        "oTableTools": {
				            "sSwfPath": "<?= Yii::$app->getUrlManager()->getBaseUrl() . '/tabletools/swf/copy_csv_xls_pdf.swf' ?>"
				        },
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


var closePrintView = function(e) {
    if(e.which == 27) {
        printViewClosed(); 
    }
};
     
function printViewClosed() {
    datatable.fnSetColumnVis(5, true);
    $(window).unbind('keyup', closePrintView);
}
				$(document).ready( function () {
					
				   var datatable = $('#datatable').dataTable( {
				    	
				    	"sScrollY": "350px",
                      "bPaginate": false,
				      "sDom": 'T<"clear">lfrtip',
				        "oTableTools": {
				            //"sSwfPath": "<?= Yii::$app->getUrlManager()->getBaseUrl() . '/tabletools/swf/copy_csv_xls_pdf.swf' ?>",
				            
             "sSwfPath": "<?= Yii::$app->getUrlManager()->getBaseUrl() . '/tabletools/swf/copy_csv_xls_pdf.swf' ?>",
        "aButtons": [
            {
                "sExtends": "copy",
                "mColumns": [0, 1, 2, 3, 4]
            },
            {
                "sExtends": "csv",
                "mColumns": [0, 1, 2, 3, 4]
            },
            {
                "sExtends": "pdf",
                "mColumns": [0, 1, 2, 3, 4,]
            },
            {
            "sExtends": "print",
            "bHeader": true,



            
           "fnClick": function (nButton, oConfig, oFlash) {
           	$('div.dataTables_scrollHead').show();
           		/*"oConfig":{
           			"sMessage":'<img src="<?= Yii::$app->getUrlManager()->getBaseUrl() ?> /img/ayuntamiento.png"  style="margin-right: 1000px; margin-top: -40px;" width="250" height= "150"  >' 
           		}*/
           		
           		oConfig.sMessage='<img src="<?= Yii::$app->getUrlManager()->getBaseUrl() ?> /img/ayuntamiento.png"  style="margin-right: 1000px; margin-top: -40px;" width="250" height= "150"> ';
           		
    			console.log(oConfig);
               datatable.fnSetColumnVis( 5, false );

               this.fnPrint( true, oConfig );


}
                   //"sMessage":'<img src="<?= Yii::$app->getUrlManager()->getBaseUrl() ?> /img/ayuntamiento.png"  style="margin-right: 1000px; margin-top: -40px;" width="250" height= "150"  >',   
               
          }, 
          ]
        }
    } );
});
        </script>

               
                    
                    

		<script>


				$('#myTabs a').click(function (e) {
				  e.preventDefault()
				  $(this).tab('show')
				});
		</script>
	</body>

</html>
<?php $this->endPage() ?>