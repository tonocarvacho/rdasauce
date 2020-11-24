<?php
/**
 * The header for our theme

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
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K23P8S6');</script>
<!-- End Google Tag Manager -->
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
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K23P8S6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>


<div class="title-group barrablanca">

	<?php $value = get_field( "jefe_de_turno", 26 );
	$jefe_nombre = $value->post_title;
	$jefe_telefono = get_field( "telefono", $value->ID );
	$jefe_email = get_field( "email", $value->ID );
	?>
	
					<h6 class=""><strong class="naranja">Jefe turno: </strong><a class="colornegro mgr" href="mailto:<?php echo $jefe_email; ?>"> <?php echo $jefe_nombre; ?> </a> <a class="tel-jefeturno" href="Tel:+<?php echo $jefe_telefono; ?>"> <i class="fa fa-phone naranja"></i> <span class="colornegro">+<?php echo $jefe_telefono; ?></span></a></h6>
					<div>
						<strong><a href="Tel:+56957886514" class="mgr"><i class="fa fa-phone"></i> <span>+56 9 5788 6514</span> </a> </strong>
						 <strong> <a href=""> <i class="fa fa-envelope"></i> <span>informaciones@rdaelsauce.cl</span></a></strong>
						</div>
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
					<div class="logo-image"><a href="https://rdaelsauce.cl/">
						<img src="<?php echo bloginfo('template_url');?>/img/logo.png" alt="" /></a>
					</div>
					<div class="logo-text">
						EXTRAPORTUARIO<span class="color-primary"><br>El Sauce</span>
					</div>
				</div>
				 
				 
				<!-- === TOP SEARCH === -->
				 <!--
				<div class="main-search-input" id="main-search-input">
					<form>
						<input type="text" id="main-search" name="main-search" placeholder="Buscar..." />
					</form>
				</div>
				 
				<div class="search-control">
					<a id="show-search" class="show-search latest" href="#">
						<div class="my-btn my-btn-primary">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-search"></i>
                            </div>
						</div>
					</a>
					<a id="close-search" class="close-search latest" href="#">
						<div class="my-btn my-btn-primary">
							<div class="my-btn-bg-top"></div>
							<div class="my-btn-bg-bottom"></div>
							<div class="my-btn-text">
								<i class="fa fa-close"></i>
							</div>
						</div>
					</a>
				</div>-->
				
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
									<a href="<?php echo home_url(); ?>/almacenaje">ALMACENAJE</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/almacenaje-comercial">ALMACENAJE COMERCIAL</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/parqueo">PARQUEO</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/parqueo-comercial">PARQUEO COMERCIAL</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/complementarios">SERVICIOS COMPLEMENTARIOS</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/cargatransito">CARGA EN TR&#193;NSITO</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/desrremonta">IZAJE PSM</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/procesosmenores">PROCESOS MENORES</a>
								</li>
								
								<li>
									<a href="<?php echo home_url(); ?>/tarifas">TARIFAS</a>
								</li>
							</ul>
					
							
						</li>
						<li class="main-menu-separator"></li>
						<!-- === top menu item === -->
						
						<li class="main-menu-separator"></li>
							<!-- === top menu item === -->
						<li class="dropdown">
							<a data-toggle="dropdown">EMPRESA</a>
							
							
							<ul class="dropdown-menu" role="menu">
								<li>
							<a href="<?php echo home_url(); ?>/nosotros">NOSOTROS</a>
						</li> 
								<li>
									<a href="<?php echo home_url(); ?>/manuales">MANUALES</a>
								</li>
									<li>
									<a href="<?php echo home_url(); ?>/certificaciones">CERTIFICACIONES</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/glosario">GLOSARIO</a>
								</li>
							</ul>
							
						
							
						</li> 
						<li class="main-menu-separator"></li>
						<!-- === top menu item === -->
						<li class="dropdown">
							<a class="latest" href="<?php echo home_url(); ?>/tarifas">TARIFAS</a>
							
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
						<li >
							<a class="latest" href="<?php echo home_url(); ?>/contacto">Contacto</a>
						</li>

						<!-- === top menu item === -->
						<li >
							<a class="latest asesoria" href="<?php echo home_url(); ?>/asesoria">Solicitar Asesoría</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	 
	 <!-- =========================
		END TOP MAIN NAVBAR
	============================== -->


	
