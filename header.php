<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RDASauce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php //body_class(); ?>>
<?php wp_body_open(); ?>


<div class="title-group">
					<h6>Jefe de turno:<a href="mailto:plillo@rdaelsauce.cl"> Patricio Lillo Tapia </a><a href="Tel:+56976525320"> ✆ +56976525320</a></h6>
				</div>


	<!-- =========================
     PRE LOADER       
	============================== -->
	
	    <div class="preloader" id="preloader">
        <div class="cssload-container">
        	<div class="cssload-whirlpool"></div>
        </div>
    </div>
	<!-- =========================
     END PRE LOADER       
	============================== -->
	
	
	<!-- =========================
		TOP MAIN NAVBAR
	============================== -->
	


	
	
	<div class="main-navbar main-navbar-1" id="main-navbar">
		<div class="container">
			<div class="row">
                 
                 
                 
				<!-- === TOP LOGO === -->
				 
				<div class="logo" id="main-logo">
					<div class="logo-image"><a href="index.php">
						<img src="<?php echo bloginfo('template_url');?>/img/logo.png" alt="" /></a>
					</div>
					<div class="logo-text">
						EXTRAPORTUARIO<span class="color-primary"><br>El Sauce</span>
					</div>
				</div>
				 
				 
				<!-- === TOP SEARCH === -->
				 
				<div class="main-search-input" id="main-search-input">
					<form>
						<input type="text" id="main-search" name="main-search" placeholder="Buscar..." />
					</form>
				</div>
				 
				<div class="search-control">
					<!-- === top search button show === -->
					<a id="show-search" class="show-search latest" href="#">
						<div class="my-btn my-btn-primary">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-search"></i>
                            </div>
						</div>
					</a>
					<!-- === top search button close === -->
					<a id="close-search" class="close-search latest" href="#">
						<div class="my-btn my-btn-primary">
							<div class="my-btn-bg-top"></div>
							<div class="my-btn-bg-bottom"></div>
							<div class="my-btn-text">
								<i class="fa fa-close"></i>
							</div>
						</div>
					</a>
				</div>
				
				<div class="show-menu-control">
					<!-- === top search button show === -->
					<a id="show-menu" class="show-menu" href="#">
						<div class="my-btn my-btn-primary">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-bars"></i>
                            </div>
						</div>
					</a>
				</div>
				 
				<!-- === TOP MENU === -->
								 
				<div class="collapse navbar-collapse main-menu main-menu-1" id="main-menu">
					<ul class="nav navbar-nav">
											
						<!-- === top menu item === -->
						<li class="dropdown">
							<a class="latest" href="https://www.rdaelsauce.cl/tourvirtual">TOUR 360º</a>
							</li>
							<!--
							<ul class="dropdown-menu" role="menu">
								<li class="active">
									<a href="index.php">Home 1</a>
								</li>
								<li>
									<a href="02_home.php">Home 2</a>
								</li>
							</ul>
							-->
						
						<li class="main-menu-separator"></li>
						<!-- === top menu item === -->
						<li class="dropdown">
								<a data-toggle="dropdown">SERVICIOS</a>
							
						
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="parqueo.php">PARQUEO SEGURO</a>
								</li>
								<li>
									<a href="almacenamiento.php">ALMACENAJE COMERCIAL</a>
								</li>
								<li>
									<a href="desrremonta.php">IZAJE DE CAMIONES</a>
								</li>
								
									<li>
									<a href="cargatransito.php">CARGA EN TRÁNSITO</a>
								</li>
								<li>
									<a href="procesosmenores.php">PROCESOS MENORES</a>
								</li>
								<li>
									<a href="complementarios.php">SERVICIOS COMPLEMENTARIOS</a>
								</li>
								<li>
									<a href="tarifas.php">TARIFAS</a>
								</li>
							</ul>
					
							
						</li>
						<li class="main-menu-separator"></li>
						<!-- === top menu item === -->
						<li>
							<a href="nosotros.php">NOSOTROS</a>
						</li> 
						<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
						<li class="dropdown">
							<a data-toggle="dropdown">DOCUMENTOS</a>
							
							
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="manuales.php">MANUALES</a>
								</li>
									<li>
									<a href="certificaciones.php">CERTIFICACIONES</a>
								</li>
								<li>
									<a href="glosario.php">GLOSARIO</a>
								</li>
							</ul>
							
						
							
						</li> 
						<li class="main-menu-separator"></li>
						<!-- === top menu item === -->
						<li class="dropdown">
							<a class="latest" href="noticias.php">NOTICIAS</a>
							
							<!--
							
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="11_blog.php">Blog items</a>
								</li>
								<li>
									<a href="12_blog_detail.php">Single Post</a>
								</li>
							</ul>
							
							-->
							
						</li> 
						<li class="main-menu-separator"></li>
						<!-- === top menu item === -->
						<li >
							<a class="latest" href="#contacto">CONTACTO</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	 
	 <!-- =========================
		END TOP MAIN NAVBAR
	============================== -->


	