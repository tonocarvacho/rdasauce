<?php
/**
 * RDASauce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RDASauce
 */ 

if ( ! function_exists( 'rdasauce_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rdasauce_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on RDASauce, use a find and replace
		 * to change 'rdasauce' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'rdasauce', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'rdasauce-home-featured', 270, 231, true );
		add_image_size( 'rdasauce-sidebar', 125, 95, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'rdasauce' ),
		) );

		register_nav_menus( array(
			'menu-2' => esc_html__( 'Secondary', 'rdasauce' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'rdasauce_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 90,
			'width'       => 90,
			'flex-width'  => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'rdasauce_setup' );



/**
 * Register custom fonts with translator.
 */
function rdasauce_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Lato, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$Lato = _x( 'on', 'Lato font: on or off', 'rdasauce' );

	$font_families = array();

	if ( 'off' !== $Lato ) {
		$font_families[] = 'Lato:300,400,700';
	}

	if ( in_array( 'on', array($Lato)) ) {

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}


/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function rdasauce_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'rdasauce-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'rdasauce_resource_hints', 10, 2 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rdasauce_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'rdasauce_content_width', 640 );
}
add_action( 'after_setup_theme', 'rdasauce_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rdasauce_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rdasauce' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'rdasauce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rdasauce_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rdasauce_scripts() {
	wp_enqueue_style( 'rdasauce-style', get_stylesheet_uri() );

	wp_enqueue_style( 'rdasauce-master', get_template_directory_uri() . '/css/master.css' );

	wp_enqueue_script( 'rdasauce-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20200101', true );

	wp_enqueue_script( 'rdasauce-smoothscroll', get_template_directory_uri() . '/js/smoothscroll.min.js', array('jquery'), '20200101', true );

	wp_enqueue_script( 'rdasauce-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), '20200101', true );

	wp_enqueue_script( 'rdasauce-slider-pro', get_template_directory_uri() . '/assets/slider-pro/js/jquery.sliderPro.min.js', array('jquery'), '20200101', true );

	wp_enqueue_script( 'rdasauce-scrollspy', get_template_directory_uri() . '/js/scrollspy.min.js', array('jquery'), '20200101', true );

	wp_enqueue_script( 'rdasauce-wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '20200101', true );

	wp_enqueue_script( 'rdasauce-owl-carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.min.js', array('jquery'), '20200101', true );

	wp_enqueue_script( 'rdasauce-metisMenu', get_template_directory_uri() . '/js/metisMenu.min.js', array('jquery'), '20200101', true );

	wp_enqueue_script( 'rdasauce-theme', get_template_directory_uri() . '/js/theme.min.js', array('jquery'), '20200101', true );

	wp_enqueue_script( 'rdasauce-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'rdasauce-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	/**
	 * Enqueue Google map api.
	 */
	wp_enqueue_script( 'rdasauce-google-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAajl8nx6e-P3bTcBg5GqJbv8jRYm9r-zU&callback=initMap', array(), null, true );
	/**
	 * ---->>
	 */


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rdasauce_scripts' );

/** ----->>
* Enqueue Google map api 2 (add async & defer).
*/
function rdasauce_add_async_defer_attribute($tag, $handle) {
	if ( 'googleapis' !== $handle )
	return $tag;
	return str_replace( ' src', ' async defer src', $tag );
}
add_filter('script_loader_tag', 'rdasauce_add_async_defer_attribute', 10, 2);
/**
* 
*/


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/****************************************************************
 * Custom excerpts.
 *****************************************************************/
/**
 * Customize ellipsis at end of excerpts.
 */
function basetheme_excerpt_more( $more ) {
    return "…";
}
add_filter( 'excerpt_more', 'basetheme_excerpt_more' );

/**
 * Filter default excerpt length to # words.
 */
function basetheme_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'basetheme_excerpt_length');

/**
 * Custom excerpt length. "echo get_excerpt(80);"
 */
function get_excerpt( $count ) {
$excerpt = get_the_excerpt();
$lenght  = strlen($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, $count);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
if ($lenght<$count) {
    $excerpt = '<p>'.$excerpt.'</p>';
} else {
    $excerpt = '<p>'.$excerpt.'...</p>';
}
return $excerpt;
}
/****************************************************************
 * END Custom excerpts.
 *****************************************************************/

/************************
    Add Custom Posts
*************************/
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Jefe Turno', 'Post Type General Name', 'rdasauce' ),
        'singular_name'       => _x( 'Jefe Turno', 'Post Type Singular Name', 'rdasauce' ),
        'menu_name'           => __( 'Jefes Turno', 'rdasauce' ),
        'parent_item_colon'   => __( 'Parent Jefe', 'rdasauce' ),
        'all_items'           => __( 'Todos', 'rdasauce' ),
        'view_item'           => __( 'Ver', 'rdasauce' ),
        'add_new_item'        => __( 'Agregar', 'rdasauce' ),
        'add_new'             => __( 'Agregar', 'rdasauce' ),
        'edit_item'           => __( 'Editar', 'rdasauce' ),
        'update_item'         => __( 'Actualizar', 'rdasauce' ),
        'search_items'        => __( 'Buscar', 'rdasauce' ),
        'not_found'           => __( 'Not Found', 'rdasauce' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'rdasauce' ),
    );
// Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Jefes Turno', 'rdasauce' ),
        'description'         => __( 'Listado jefes con datos', 'rdasauce' ),
        'labels'              => $labels,
        'show_in_rest'        => true,
        'supports'            => array( 'title', 'thumbnail', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 3,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        // This is where we add taxonomies to our CPT
    );
    // Registering your Custom Post Type
    register_post_type( 'Jefe Turno', $args );
}
 
function namespace_add_custom_types( $query ) {
  if( (is_category() || is_tag()) && $query->is_archive() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'Jefe Turno'
        ));
    }
    return $query;
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );
/**************************
  * END Add Custom Posts *
***************************/



add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
	global $post;
    // Use your post type key instead of 'product'
    if ($post->ID == 26) return false;
    return $current_status;
}

