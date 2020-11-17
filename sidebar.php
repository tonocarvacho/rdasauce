<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RDASauce
 */


?>
<!-- === BLOG RIGHT BAR === -->
				
				
						
						<?php 
						if ( in_category( 'documentos' ) || in_category( 'servicios' ) ) {?>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<ul class="service-menu">
<?php foreach((get_the_category()) as $category){
        $category = $category->name;
        }	?>
								<?php

$args = array (
    'category_name' => $category,
    'post_type' => 'post',
    'posts_per_page' => 15, 
);
$category_block_query = new WP_Query( $args );
    if ( $category_block_query->have_posts() ) : 
        ?><?php
        while ( $category_block_query->have_posts() ) : $category_block_query->the_post(); 
           ?> 
			
									<li class="active">
										<?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?>
									</li>
									

								          
            <?php
        endwhile; wp_reset_postdata(); ?> <?php
    else: 
    endif; 
?>	</ul>
							</div> 
							
						<?php } 
							else { ?>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="blog-right-bar">
						<div class="blog-right-bar-item">
							<h3>NOTICIAS RECIENTES</h3>
							<div class="recent-posts">
								<?php
$args = array (
    'category_name' => 'Destacados',
    'post_type' => 'post',
    'posts_per_page' => 2, 
);
$category_block_query = new WP_Query( $args );
    if ( $category_block_query->have_posts() ) : 
        ?>
								<?php
        while ( $category_block_query->have_posts() ) : $category_block_query->the_post(); 
           ?> 
			<div class="recent-post">
									<div class="recent-post-image">
										<a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail('rdasauce-sidebar'); ?>
							</a>
									</div>
									<div class="recent-post-title">
										<a href="<?php the_permalink() ?>">
							<?php $title = the_title('','',FALSE); echo substr($title, 0, 40); ?>...
							</a>
								
									</div>
									<div class="recent-post-date">
										<span class="date-icon"><i class="fa fa-calendar"></i></span>
										<a href="<?php the_permalink(); ?>"><?php rdasauce_posted_on(); ?></a>
									</div>
								</div>          
            <?php
        endwhile; wp_reset_postdata(); ?> <?php
    else: 
    endif; 
?>	
								
								
							</div>
						</div>
						
						<div class="blog-right-bar-item">
							<h3>ENLACES</h3>
							<ul class="blog-categories">
								<li class="first">
									<a href="https://www.aduana.cl/">Aduana</a>
								</li>
								<li class="">
									<a href="http://www.pasosfronterizos.gov.cl/">Pasos Fronterizos</a>
								</li>
								<li>
									<a href="https://www.tgr.cl/">Tesorería General</a>
								</li>
								<li>
									<a href="https://www.sag.gob.cl/">Servicio Agrícola y Ganadero</a>
								</li>
								<li>
									<a href="http://www.meteochile.cl/">Meteorología</a>
								</li>
								<li class="latest">
									<a href="https://www.puertoterrestre.cl">Puerto Terrestre</a>
								</li>
							</ul>
						</div>
						
						<div class="blog-right-bar-item">
							<h3>SOBRE NOSOTROS</h3>
							<p class="blog-about">
								El Almacén Extraportuario El Sauce S.A. es una zona destinada al almacenamiento, parqueo y servicio a la mercancía, que aún no ha sido internada por el Servicio Nacional de Aduanas. Este recinto provee servicios básicos, complementarios y comerciales dentro de sus áreas, contando con presencia física de las entidades fiscalizadoras.
. 
							</p>
						</div>
						</div>


				</div>
				<!-- === END BLOG RIGHT BAR === -->
							<?php } ?>
						
						
						
						
					

