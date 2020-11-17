<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RDASauce
 */

?>

<!-- ===================================
		SUBSCRIBE SECTION
	======================================== -->
	<div class="def-section home-subscribe">
		<div class="container">
			<div class="row">
				
				<!-- === SUBSCRIBE TEXT === -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-text animated wow fadeInUp" data-wow-duration=".5s" data-wow-offset="100">
					<span class="home-subscribe-icon"><i class="flaticon-email114"></i></span>
					ENVÍANOS TU CORREO PARA SOLICITAR INFORMACIÓN
				</div>
				
				<!-- === SUBSCRIBE FORM === -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-form animated wow fadeInUp formuhome subscri" data-wow-duration=".5s" data-wow-delay=".3s" data-wow-offset="100">
					<?php echo do_shortcode( '[contact-form-7 id="206" title="subscribete"]' ); ?>
				</div>
				
			</div>
		</div>
	</div>
	<!-- ===================================
		END SUBSCRIBE SECTION
	======================================== -->
	
	<!-- ===================================
		FOOTER
	======================================== -->
	<footer class="def-section footer">
		<div class="container">
			<div class="row">
				
				<!-- === FOOTER COLUMN === -->
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-1">
					<div class="logo with-border-bottom">
						<div class="logo-image">
							<img src="<?php echo bloginfo('template_url');?>/img/logob.png" alt="" />
						</div>
						
					
					</div>
					<div class="footer-1-text">
						<p>Recinto de Depósito Aduanero con Servicios de Apoyo Logístico para mercancías de Importación, Exportación y Tránsito. </p>
					</div>
					<div class="footer-1-button">
						<a href="nosotros"><div class="my-btn my-btn-primary">
							<div class="my-btn-bg-top"></div>
							<div class="my-btn-bg-bottom"></div>
							<div class="my-btn-text">
								QUIENES SOMOS
							</div>
						</div></a>
					</div>
				</div>
				
				<!-- === FOOTER COLUMN === -->
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-2">
					<h4 class="with-square with-border-bottom">ENLACES</h4>
					<div class="footer-2-links">
						<div class="footer-2-links-1">
							<ul>
								<li><a href="https://rdaelsauce.cl">INICIO</a></li>
							<li><a href="https://www.rdaelsauce.cl/tourvirtual">TOUR 360°</a></li>

								<li><a href="parqueo">SERVICIOS</a></li>
								<li><a href="nosotros">NOSOTROS</a></li>
							
							</ul>
						</div>
						<div class="footer-2-links-2">
							<ul>
								<li><a href="manuales">DOCUMENTOS</a></li>
								<li><a href="noticias">NOTICIAS</a></li>
								<li><a href="contacto">CONTACTO</a></li>
							</ul>
						</div>
					</div>
				</div>
				
	<!-- === FOOTER COLUMN === -->
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-3">
					<h4 class="with-square with-border-bottom">CONTACTO</h4>
					<div class="footer-3-phone footer-3-item">
						<span class="footer-3-icon"><i class="fa fa-phone"></i></span>+56 9 5788 6514
					</div>
			
					<div class="footer-3-mail footer-3-item">
						<span class="footer-3-icon"><i class="fa fa-envelope"></i></span>
					informaciones@rdaelsauce.cl
					</div>
					<div class="footer-3-adress footer-3-item">
						<span class="footer-3-icon"><i class="fa fa-map-marker"></i></span>
					Carretera Los Libertadores<br>&ensp;&emsp; km 79 N°410 Los Andes,<br>&ensp;&emsp; V Región, Chile.
					</div>
				</div>
				
				<!-- === FOOTER COLUMN === -->
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-4">
					<h4 class="with-square with-border-bottom">HORARIOS</h4>
					<div class="footer-3-phone footer-3-item">
					    <div class="footer-3-mail footer-3-item">
						<span class="footer-3-icon"><i class="fa fa-envelope"></i></span>RECEPCIÓN DE CARGA:<br>&ensp;&emsp;24 Hrs de Lunes a Domingo</div>
						<div class="footer-3-fax footer-3-item">
						<span class="footer-3-icon"><i class="fa fa-fax"></i></span>CAJA:<br>&ensp;&emsp;Lunes a Viernes&ensp;<br>&ensp;&emsp;9:30 a 14:00 Hrs - 15:00 a 17:30 Hrs
					</div>
						<span class="footer-3-icon"><i class="fa fa-phone"></i></span>ADMINISTRACIÓN Y DESPACHO:<br>&ensp;&emsp;Lunes a Viernes&ensp;8:00 a 22:00 Hrs<br>&ensp;&emsp;Sábado&ensp;8:00 a 21:00 Hrs<br>&ensp;&emsp;Domingo&ensp;8:00 a 16:00 Hrs </div>
					
				</div>

			</div>
		</div>
	</footer>
	
	<!-- ===================================
		END FOOTER
	======================================== -->


	<!-- ===================================
		BOTTOM SECTION
	======================================== -->
	<div class="bottom">
		<div class="container">
			<div class="row">
				
				<!-- === BOTTOM LEFT === -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-1">
					Derechos Reservados | 2019 <span class="color-primary">Extraportuario El Sauce</span>
				</div>
				
			<!-- === BOTTOM CENTER === -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-2">
					<a href="https://www.linkedin.com/company/extraportuarioelsauce" target="_blank"><div class="my-btn my-btn-grey">
						<div class="my-btn-bg-top"></div>
						<div class="my-btn-bg-bottom"></div>
						<div class="my-btn-text">
							<i class="fa fa-linkedin"></i>
						</div>
					</div></a>
					<a href="https://www.youtube.com/channel/UCULy6PlJIV2mc8fz--gVCfA" target="_blank"><div class="my-btn my-btn-grey">
						<div class="my-btn-bg-top"></div>
						<div class="my-btn-bg-bottom"></div>
						<div class="my-btn-text">
							<i class="fa fa-youtube"></i>
						</div>
					</div></a>
				
				</div>
				
				<!-- === BOTTOM RIGHT === -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-3">
					<a href="#">Desarrollo</a> | 
				    Diseño <a href="http://micentro.cl">por <span class="color-primary">MiCentro</span></a>
				</div>
				
			</div>
		</div>
	</div>
	<!-- ===================================
		END BOTTOM SECTION
	======================================== -->
	
	
	<!-- =========================
	   SLIDE MENU
	============================== -->
		<aside id="slide-menu" class="slide-menu">
		
		<!-- === CLOSE MENU BUTON === -->	
		<div class="close-menu" id="close-menu">
			<i class="fa fa-close"></i>
		</div>
		
		<!-- === SLIDE MENU === -->	
		<ul id="left-menu" class="left-menu">
			
				<!-- === SLIDE MENU ITEM === -->	
			<li> <a href="https://rdaelsauce.cl">INICIO</a></li>
				
			<li><a href="https://www.rdaelsauce.cl/tourvirtual">TOUR 360°</a></li>
						<!-- === SLIDE MENU ITEM === -->	
			<li> 
				<a href="parqueo">SERVICIOS <i class="fa fa-plus arrow"></i></a>
				
						<!-- === slide menu child === -->	
				<ul class="slide-menu-child">
					<li><a href="almacenaje">ALMACENAJE</a></li>
					<li><a href="almacenaje-comercial">ALMACENAJE COMERCIAL</a></li>
					<li><a href="parqueo">PARQUEO</a></li>
					<li><a href="parqueo-comercial">PARQUEO COMERCIAL</a></li>
					<li><a href="complementariosl">SERVICIOS COMPLEMENTARIOS</a></li>
					<li><a href="cargatransito">CARGA EN TRÁNSITO</a></li>
					<li><a href="desrremonta">IZAJE PSM</a></li>
					
					<li><a href="procesosmenores">PROCESOS MENORES</a></li>
					
					<li><a href="tarifas">TARIFAS</a></li>
				</ul>
			</li>
			
			<!-- === SLIDE MENU ITEM === -->	
			
			
			<!-- === SLIDE MENU ITEM === -->	
			<li> 
				<a href="manuales">EMPRESA <i class="fa fa-plus arrow"></i></a>
				
				<!-- === slide menu child === -->	
				<ul class="slide-menu-child">
					<li><a href="nosotros">NOSOTROS</a></li>
					<li><a href="manuales">MANUALES</a></li>
					<li><a href="certificaciones">CERTIFICACIONES</a></li>
					<li><a href="glosario">GLOSARIO</a></li>
				</ul>
			</li>
			
			<!-- === SLIDE MENU ITEM === -->	
			<li>
				<a href="noticias">NOTICIAS</a>
				
			
			
			<!-- === SLIDE MENU ITEM === -->	
			<li>
				<a href="contacto">CONTACTO</a>
			</li>
					<li><a href="tarifas">TARIFAS</a></li>
			<li>
				<a href="asesoria" class="asesoriabtn">SOLICITAR ASESORIA</a>
			</li>
			
		</ul>
		
	</aside>
	<!-- =========================
	   END SLIDE MENU
	============================== -->
	
	
	<!-- =========================
	   BLACK OVERLAY
	============================== -->
	<div class="black-overlay" id="black-overlay"></div>
	<!-- =========================
	   END BLACK OVERLAY
	============================== -->

<?php wp_footer(); ?>

</body>
</html>
