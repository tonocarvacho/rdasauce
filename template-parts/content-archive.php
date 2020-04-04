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
		<a href="012-speed.php"><?php rdasauce_post_thumbnail(); ?>
	</div>
	<div class="blog-item-info">
		<span class="author-icon"><i class="fa fa-user"></i></span>
		<a href=""><?php rdasauce_posted_by(); ?></a>
		<span class="date-icon"><i class="fa fa-calendar"></i></span>
		<a href="012-speed.php"><?php rdasauce_posted_on(); ?></a>
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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				rdasauce_posted_on();
				rdasauce_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php rdasauce_post_thumbnail(); ?>

	<div class="entry-content">
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
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php rdasauce_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
