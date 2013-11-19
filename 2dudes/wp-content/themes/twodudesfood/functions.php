<?php
/**
 * TwoDudesFood functions and definitions
 *
 * @package TwoDudesFood
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'twodudesfood_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function twodudesfood_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on TwoDudesFood, use a find and replace
	 * to change 'twodudesfood' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twodudesfood', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions
}

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twodudesfood' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'twodudesfood_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // twodudesfood_setup
add_action( 'after_setup_theme', 'twodudesfood_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function twodudesfood_widgets_init() {
	register_sidebar(array(
		'name'          => __( 'Sidebar', 'twodudesfood' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));
	register_sidebar(array(
		'name'          => __( 'Footer Left', 'twodudesfood' ),
		'id'            => 'footer-left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));
	register_sidebar(array(
		'name'          => __( 'Footer Center', 'twodudesfood' ),
		'id'            => 'footer-center',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));
	register_sidebar(array(
		'name'          => __( 'Footer Right', 'twodudesfood' ),
		'id'            => 'footer-right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));
}
add_action( 'widgets_init', 'twodudesfood_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function twodudesfood_scripts() {

	wp_register_style( 'twodudesfood-style', get_template_directory_uri() . '/2dudesfood/stylesheets/app.css', array(), '20120208', 'all' );

  wp_register_script( 'foundation-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.js', array( 'jquery' ) );

  wp_register_script( 'foundation-abide-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.abide.js', array( 'jquery' ) );

  wp_register_script( 'foundation-alerts-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.alerts.js', array( 'jquery' ) );

  wp_register_script( 'foundation-clearing-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.clearing.js', array( 'jquery' ) );

  wp_register_script( 'foundation-cookie-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.cookie.js', array( 'jquery' ) );

  wp_register_script( 'foundation-dropdown-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.dropdown.js', array( 'jquery' ) );

  wp_register_script( 'foundation-forms-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.forms.js', array( 'jquery' ) );

  wp_register_script( 'foundation-interchange-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.interchange.js', array( 'jquery' ) );

  wp_register_script( 'foundation-joyride-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.joyride.js', array( 'jquery' ) );

  wp_register_script( 'foundation-magellan-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.magellan.js', array( 'jquery' ) );

  wp_register_script( 'foundation-orbit-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.orbit.js', array( 'jquery' ) );

  wp_register_script( 'foundation-placeholeder-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.placeholder.js', array( 'jquery' ) );

  wp_register_script( 'foundation-reveal-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.reveal.js', array( 'jquery' ) );

  wp_register_script( 'foundation-section-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.section.js', array( 'jquery' ) );

  wp_register_script( 'foundation-tooltips-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.tooltips.js', array( 'jquery' ) );

  wp_register_script( 'foundation-topbar-script', get_template_directory_uri() . '/2dudesfood/javascripts/foundation/foundation.topbar.js', array( 'jquery' ) );

  wp_register_script( 'coloranimate-script', get_template_directory_uri() . '/2dudesfood/javascripts/vendor/coloranimate.js', array( 'jquery' ) );

  wp_register_script( 'modernizr-script', get_template_directory_uri() . '/2dudesfood/javascripts/vendor/custom.modernizr.js', array( 'jquery' ) );

  wp_register_script( 'custom-script', get_template_directory_uri() . '/2dudesfood/javascripts/vendor/custom.js', array('jquery'), '1.7', true );

  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_template_directory_uri() . '/2dudesfood/javascripts/vendor/jquery.js', array(), null, false );

	wp_enqueue_style( 'twodudesfood-style' );

	wp_enqueue_script( 'foundation-script' );
	wp_enqueue_script( 'foundation-abide-script' );
	wp_enqueue_script( 'foundation-alerts-script' );
	wp_enqueue_script( 'foundation-clearing-script' );
	wp_enqueue_script( 'foundation-cookies-script' );
	wp_enqueue_script( 'foundation-dropdown-script' );
	wp_enqueue_script( 'foundation-forms-script' );
	wp_enqueue_script( 'foundation-interchange-script' );
	wp_enqueue_script( 'foundation-joyride-script' );
	wp_enqueue_script( 'foundation-magellan-script' );
	wp_enqueue_script( 'foundation-orbit-script' );
	wp_enqueue_script( 'foundation-placeholder-script' );
	wp_enqueue_script( 'foundation-reveal-script' );
	wp_enqueue_script( 'foundation-section-script' );
	wp_enqueue_script( 'foundation-tooltips-script' );
	wp_enqueue_script( 'custom-script' );
	wp_enqueue_script( 'modernizr-script' );
	wp_enqueue_script( 'coloranimate-script' );

}
add_action( 'wp_enqueue_scripts', 'twodudesfood_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
