<?php
/**
 *Template Name: Page-Gracias
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
			    <br>
			   
					<h2>GRACIAS POR CONTACTARNOS</h2>
			
				
				
			</div>
			
			
			<!-- === PAGE HEADER BREADCRUMB === -->
			<div class="page-header-breadcrumb">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>">Inicio</a></li>
					
				</ol>
			</div>
			<br>
			
			    	<div class="page-header-button">
					<a href="tel:+56342373900">
						<div class="my-btn my-btn-primary">
							<div class="my-btn-bg-top"></div>
							<div class="my-btn-bg-bottom"></div>
							<div class="my-btn-text">
								LLAMAR
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
	BLOG ITEMS
============================== -->
<div class="">
	<div class="container">
		<div class="row">				
			<!-- === BLOG ITEMS === -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
				
			</div>

		</div>
	</div>
</div>
<!-- =========================
	END BLOG ITEMS
============================== -->

	 

     

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
	<script type="text/javascript">
	(function( $ ) {
		$(document).ready(function(){
			$(".btncontactarse").click(function() {
				event.preventDefault();
    $('html, body').animate({
        scrollTop: $("#contactarse").offset().top
    }, 2000);
});


})



  })( jQuery );
</script>
	
<?php
get_footer();