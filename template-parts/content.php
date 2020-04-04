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
						<div class="single-post">
							<div class="single-post-date">
								<div class="single-post-date-number">02</div>OCT
							</div>
							<div class="single-post-image">
								<?php rdasauce_post_thumbnail(); ?>
							</div>
							<div class="single-post-info">
								<span class="author-icon"><i class="fa fa-user"></i></span>
								<a href="#"><?php rdasauce_posted_by(); ?></a>
								<span class="date-icon"><i class="fa fa-calendar"></i></span>
								<a href=""><?php rdasauce_posted_on(); ?></a>
							</div>
							<div class="single-post-title">
								<?php the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
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
