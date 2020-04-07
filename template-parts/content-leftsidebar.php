<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RDASauce
 */

?>
 

	
							
						<!-- === BLOG ITEM === -->
						<div class="service-detail">
							
								<?php the_title( '<h2><strong>', '</strong></h2>' ); ?>
							<div class="service-detail-bigimage">
							<?php rdasauce_post_thumbnail(); ?>
						</div>
							
							
							
							<div class="single-post-text">
								<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'rdasauce' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rdasauce' ),
			'after'  => '</div>',
		) );
		?>
						
							
							</div>
							</div>	
