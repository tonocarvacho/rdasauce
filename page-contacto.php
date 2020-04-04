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
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
					<div class="contacts-form row">
						<div class="send-result"></div>
						<form name="contact-form" id="contact-form" method="POST" action="javascript:void(null);" onsubmit="sendmail_2();">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacts-form-item">
								<input type="text" name="contact-name" placeholder="Nombre Completo" />
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacts-form-item">
								<input type="text" name="contact-email" placeholder="E-mail" />
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacts-form-item">
								<input type="text" name="contact-phone" placeholder="Teléfono" />
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacts-form-item">
								<input type="text" name="contact-site" placeholder="Página Web" />
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contacts-form-item">
								<textarea name="contact-message" placeholder="¿Como te podemos ayudar?"></textarea>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contacts-form-item contacts-form-button">
								<button><span class="my-btn my-btn-grey">
									<span class="my-btn-bg-top"></span>
									<span class="my-btn-bg-bottom"></span>
									<span class="my-btn-text">
										ENVIAR MENSAJE
									</span>
								</span></button>
							</div>
						</form>
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
						+ 56 34 2373900<br>informaciones@rdaelsauce.cl
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
        map = new google.maps.Map(document.getElementById('contact-map'), {
          center: {lat: -32.8415713, lng: -70.539112},
          zoom: 8
	</div>
	<!-- =========================
		END CONTACTS MAP
	============================== -->
	
<?php
get_footer();