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
					<h2>NOTICIAS Y ACTUALIZACIONES</h2>
					
				</div>
				
				
				<!-- === PAGE HEADER BREADCRUMB === -->
				<div class="page-header-breadcrumb">
					<ol class="breadcrumb">
						<li><a href="index.php">Inicio</a></li>
						<li><a href="noticias.php">Noticias</a></li>
					</ol>
				</div>
				<br>
				
			</div>
		</div>
	</div>
	<!-- ===================================
		END PAGE HEADER
	======================================== -->

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
				
				<?php get_sidebar(); ?>

			</div>
		</div>
	</div>
	<?php
get_footer();
