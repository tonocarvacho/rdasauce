<?php
/**
 *Template Name: Page-Contacto
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RDASauce
 */

get_header();
?>
 
	<!-- ===================================
		PAGE HEADER
	======================================== -->
	<div class="page-header">
		<div class="page-header-overlay"></div>
		<div class="container">
			<div class="row">
				
				<!-- === PAGE HEADER TITLE === -->
				<div class="page-header-title">
					<h2>CONTACTO</h2>
				</div>
				
				<!-- === PAGE HEADER BREADCRUMB === -->
				<div class="page-header-breadcrumb">
					<ol class="breadcrumb">
						<li><a href="index.html">Inicio</a></li>
						<li class="active">Contacto</li>
					</ol>
				</div>
				
				<!-- === PAGE HEADER BUTTON === -->
				<div class="page-header-button">
					<a href="tel:56342373900">
						<div class="my-btn my-btn-primary">
							<div class="my-btn-bg-top"></div>
							<div class="my-btn-bg-bottom"></div>
							<div class="my-btn-text">
								LLÁMANOS
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- ===================================
		END PAGE HEADER
	======================================== -->
	
	<!-- =========================
		CONTACTS
	============================== -->
    <div class="def-section">
		<div class="container">
			<div class="row">
				
				<!-- === CONTACTS INFO === -->
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<div class="contacts-info">
						<div class="contacts-info-title">
							<div class="contacts-info-title-icon">
								<i class="fa fa-comments"></i>
							</div>
							<h3>Estamos aquí<br>para ayudarte</h3>
						</div>
						<div class="contacts-info-text">
							   "Somos una empresa dedicada a la entrega de servicios de almacenaje y bodegaje a todos aquellos clientes que pretendan nacionalizar su mercancía proveniente del extranjero ofrecer una amplia gama de servicios operacionales en el mercado COMEX, expandiendo nuestros servicios de manera rápida y eficaz". 
						</div>
						<div class="contacts-info-people">
							<div class="contacts-info-people-avatar">
								<img src="<?php echo bloginfo('template_url');?>/media/avatars/avatar1.png" alt="" />
							</div>
							<div class="contacts-info-people-name">
								HECTOR CARVACHO
							</div>
							<div class="contacts-info-people-company">
								GERENTE GENERAL
							</div>
						</div>
					</div>
				</div>
				
					<!-- === CONTACTS FORM === -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="fondoform marginauto formmensaje">
                          <h3 class="titform"><i class="fa fa-check naranja"></i> Envíenos sus consultas</h3>
                          <p class="subtform">Te contactaremos a la brevedad.</p>
                          <?php echo do_shortcode( '[contact-form-7 id="175" title="Formulario de contacto 3"]' ); ?>
                  
            </div>
				</div>
				
				
			</div>
		</div>
	</div>
	
		<!-- =========================
		CONTACTS DETAILS
	============================== -->
    <div class="def-section contact-details">
		<div class="container">
			<div class="row">
				
				<!-- === CONTACTS DETAILS ITEM === -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-detail">
					<div class="contact-detail-icon">
						<i class="flaticon-map58"></i>
					</div>
					<div class="contact-detail-title">
						<h3>UBICACIÓN</h3>
					</div>
					<div class="contact-detail-text">
						Carretera Los Libertadores km 79 N°410,<br>Los Andes V Región de Valparaíso, Chile 2100000.
					</div>
				</div>
				
				<!-- === CONTACTS DETAILS ITEM === -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-detail contact-detail-mark">
					<div class="contact-detail-icon">
						<i class="flaticon-telephone5"></i>
					</div>
					<div class="contact-detail-title">
						<h3>TELÉFONO | E-MAIL</h3>
					</div>
					<div class="contact-detail-text">
						+56 9 5788 6514<br>informaciones@rdaelsauce.cl
					</div>
				</div>
				
				<!-- === CONTACTS DETAILS ITEM === -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-detail">
					<div class="contact-detail-icon">
						<i class="flaticon-clock96"></i>
					</div>
					<div class="contact-detail-title">
						<h3>HORARIO DE TRABAJO</h3>
					</div>
					<div class="contact-detail-text">
						LUNES A DOMINGO : <br> ABIERTO LAS 24 HORAS DEL DÍA
					</div>
				</div>
			
			</div>
		</div>
	</div>
	<!-- =========================
		END CONTACTS DETAILS
	============================== -->

		<!-- =========================
		CONTACTS MAP
	============================== -->
    <div class="contact-map" id="contact-map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13408.600963330335!2d-70.5433256!3d-32.8412735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6fd43c6ffd815330!2sAlmac%C3%A9n%20Extraportuario%20El%20Sauce%20S.A.!5e0!3m2!1sen!2scl!4v1591980065354!5m2!1sen!2scl" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<!-- =========================
		END CONTACTS MAP
	============================== -->
	
<?php
get_footer();