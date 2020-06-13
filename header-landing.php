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


<div class="title-group barrablanca landinghead">
	
					<!--<div class="montserrat"> <i class="fa fa-home naranja"></i> <strong> <a href="http://rdaelsauce.cl"> <span>Ir a www.rdasauce.cl</span> </a></strong></div>-->
					<div>
						<strong><a href="" class="mgr"><i class="fa fa-phone"></i> <span>+56 34 237 3900</span></a></strong>
						 <strong><a href=""><i class="fa fa-envelope"></i> <span>informaciones@rdaelsauce.cl</span></a></strong>
						</div>
				</div>

	<div class="main-navbar main-navbar-1 landingbar" id="main-navbar">
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
											
					<li >
							<a  class="latest btndocus" href="#">DOCUMENTOS</a>
						</li>
						<li class="main-menu-separator"></li>
						<li >
							<a class="latest btnpreg" href="#">PREGUNTAS</a>
						</li>
						<li class="main-menu-separator"></li>
						<li >
							<a class="latest btncont" href="#">CONTACTO</a>
						</li>

						<!-- === top menu item === -->
						
					</ul>
				</div>

			</div>
		</div>
	</div>
	 
	 <!-- =========================
		END TOP MAIN NAVBAR
	============================== -->


	

	
	


	