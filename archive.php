<?php
/**
 * The template for displaying archive pages
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
					<h2>NOTICIAS EXTRAPORTUARIO EL SAUCE</h2>
					
				</div>
				
				
				<!-- === PAGE HEADER BREADCRUMB === -->
				<div class="page-header-breadcrumb">
					<ol class="breadcrumb">
						<li><a href="<?php echo home_url(); ?>">Inicio</a></li>
					<li><?php 
					$category = get_the_category();

if ( $category[0]->cat_name == "Destacados") {
    echo '<a href="' . get_category_link( $category[1]->term_id ) . '">' . $category[1]->cat_name . '</a>';
} else {
	the_category('<a>', '</a>');
}
 ?></li>
						
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
    <div class="def-section blog-section">
		<div class="container">
			<div class="row">
								
				<!-- === BLOG ITEMS === -->
				
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 blog-items">
<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				 
			        get_template_part( 'template-parts/content-archive', get_post_type() );
				

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

</div>
				
				<?php get_sidebar(); ?>

			</div>
		</div>
	</div>
	
	
	<!-- ===================================
		PAGINATION SECTION
	======================================== -->
	<!--
	<div class="def-section pagination-section">
		<div class="container">
			
			<ul class="pagination">
				<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
			</ul>
			
		</div>
	</div>
	-->

<?php
get_footer();