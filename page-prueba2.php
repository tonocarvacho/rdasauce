<?php
/**
 *Template Name: Page-prueba
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RDASauce
 */

get_header();
?>



    <style>
        h1 {
            color: red;
            font-size: 45px;

        }
        p {
            color: blue;
        }
        #LISTA1 {
            color: yellow;
            font-size: 45px;
        }
        .clase1 {
            color: green;
            font-size: 45px;
        }


    </style>


    <h1>titulo pribcipal</h1>
    <h2>subtitulo</h2>
    <h3>subtitulo</h3>
    <h4>subtitulo</h4>
    <h5>subtitulo</h5>
    <h6>subtitulo</h6>
    <p>este es el texto de parrafo</p>
    <a href="#">este es un link</a>
    <ul>
        <li id="LISTA1">lista1</li>
        <li class="clase1">lista2</li>
        <li class="clase1">lista3</li>
        <li class="clase1">lista4</li>

    </ul>

 <?php
$args = array (
    'category_name' => 'CAT1',
    'post_type' => 'post',
    'posts_per_page' => 4, 
);
$category_block_query = new WP_Query( $args );
    if ( $category_block_query->have_posts() ) : 
        ?><ul class="clean-list"><?php
        while ( $category_block_query->have_posts() ) : $category_block_query->the_post(); 
           ?> <li class="clean-list"><?php
            the_post_thumbnail('wisdomlabs-post-featured');?>
            <div class="entry-info">
            <?php windowslabs_the_category_list(); ?>
           
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_excerpt(); ?>
            </div></li>
            <?php
        endwhile; wp_reset_postdata(); ?> </ul> <?php
    else: 
    endif; 
?>

<?php
get_footer();