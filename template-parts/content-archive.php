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

<div class="blog-item blog-item-mark">
	<div class="blog-item-date">
		<div class="blog-item-date-number">10</div>MARZO
	</div>
	<div class="blog-item-image">
		<a href="<?php the_permalink(); ?>"><?php rdasauce_post_thumbnail(); ?>
	</div>
	<div class="blog-item-info">
		<span class="author-icon"><i class="fa fa-user"></i></span>
		<a href=""><?php rdasauce_posted_by(); ?></a>
		<span class="date-icon"><i class="fa fa-calendar"></i></span>
		<a href="<?php the_permalink(); ?>"><?php rdasauce_posted_on(); ?></a>
	</div>
	<div class="blog-item-title">
		<?php the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
	</div>
	<div class="blog-item-text">
		<p>
			<?php the_excerpt(); ?>
		</p>
	</div>
	<div class="blog-item-button">
		<a href="<?php echo esc_url( get_permalink() ) ?>"><div class="my-btn my-btn-primary">
			<div class="my-btn-bg-top"></div>
			<div class="my-btn-bg-bottom"></div>
			<div class="my-btn-text">
				LEER MÁS
			</div>
		</div></a>
	</div>
</div>

