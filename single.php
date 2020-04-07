<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
			    <?php if ( in_category( 'documentos' ) ) {?>
			    	<h2>DOCUMENTOS</h2>
				<?php } else if ( in_category( 'servicios' ) ) { ?>
					<h2>SERVICIOS</h2>
				<?php } else { ?>
					<h2>NOTICIAS Y ACTUALIZACIONES</h2>
				<?php } ?>
				
				
			</div>
			
			
			<!-- === PAGE HEADER BREADCRUMB === -->
			<div class="page-header-breadcrumb">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>">Inicio</a></li>
					<li><?php the_category('<a>', '</a>'); ?></li>
				</ol>
			</div>
			<br>
			<?php if ( in_category( 'documentos' ) || in_category( 'servicios' ) ) {?>
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
				<?php } ?>
					
			
		</div>
	</div>
</div>
<!-- ===================================
	END PAGE HEADER
======================================== -->
<?php if ( in_category( 'documentos' ) || in_category( 'servicios' ) ) { ?>
<!-- =========================
	BLOG ITEMS
============================== -->
<div class="def-section services-detail">
	<div class="container">
		<div class="row">
		<?php get_sidebar(); ?>				
			<!-- === BLOG ITEMS === -->
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

				<?php
				while ( have_posts() ) :
					the_post();
					 	get_template_part( 'template-parts/content', 'leftsidebar' );
					  
					the_post_navigation();
				endwhile; // End of the loop.
				?>
			</div>
<?php
$post = $wp_query->post;


  

?>
			<?php 
			 ?>
		</div>
	</div>
</div>
<!-- =========================
	END BLOG ITEMS
============================== -->
<?php } else { ?>
<!-- =========================
	BLOG ITEMS
============================== -->
<div class="def-section single-blog-section">
	<div class="container">
		<div class="row">				
			<!-- === BLOG ITEMS === -->
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<?php
				while ( have_posts() ) :
					the_post();
					  	get_template_part( 'template-parts/content', get_post_type() );
					
					the_post_navigation();
				endwhile; // End of the loop.
				?>
			</div>
<?php
$post = $wp_query->post;


  get_sidebar();

?>
			<?php 
			 ?>
		</div>
	</div>
</div>
<!-- =========================
	END BLOG ITEMS
============================== -->
<?php }  ?>

<?php
get_footer();
