<?php
/**
 * PR Digital Main functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PR_Digital_Main
 */

if ( ! function_exists( 'prdigital_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function prdigital_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on PR Digital Main, use a find and replace
	 * to change 'prdigital' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'prdigital', get_template_directory() . '/languages' );

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
     *Add support for a custom logo on the brand of the navbar. 
     *The header image is that collage or whatever picture you 
     *choose that comes under the bio.
     *
     */
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 50,
        'flex-height' => true,
    ) );
    
	
	
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
    //set_post_thumbnail_size( 150 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'prdigital' ),
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
	add_theme_support( 'custom-background', apply_filters( 'prdigital_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'prdigital_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function prdigital_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'prdigital_content_width', 640 );
}
add_action( 'after_setup_theme', 'prdigital_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
*
*Testimonial echo on homepage
*
*/
//function my_home_category( $query ) { if ( $query->is_home() && $query->is_main_query() ) { $query->set( 'cat', '6'); } } add_action( 'pre_get_posts', 'testimonials' );

/**
 * Enqueue scripts and styles.
 */
function prdigital_scripts() {
	
    wp_enqueue_style('prdigital-bs', get_template_directory_uri() . '/bootstrap.css');
    
    wp_enqueue_style( 'prdigital-style', get_stylesheet_uri() );
    
    wp_enqueue_script('prdigital-bs-js', get_template_directory_uri() . '/js//bootstrap.js', array(), '20151215', true);
	
	wp_enqueue_script('prdigital-masonry-js', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '20151215', true);
    
    wp_enqueue_script('jquery');
    
    wp_enqueue_script('prdigital-app', get_template_directory_uri() . '/js/app.js', array(), '20151215', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'prdigital_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
