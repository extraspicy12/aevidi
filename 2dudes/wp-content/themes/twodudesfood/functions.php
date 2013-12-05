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
/* 	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) ); */

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
 * Add custom post type for reviews
 */
function review_register() {

	$labels = array(
		'name' => _x('Reviews', 'post type general name'),
		'singular_name' => _x('Review', 'post type singular name'),
		'add_new' => _x('Add New', 'portfolio item'),
		'add_new_item' => __('Add New Review'),
		'edit_item' => __('Edit Review'),
		'new_item' => __('New Review'),
		'view_item' => __('View Review'),
		'search_items' => __('Search Reviews'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

/*
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
		'rewrite' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','comments','revisions')
	  );
*/

  $rewrite = array(
      'slug'                => 'review',
      'with_front'          => true,
      'pages'               => true,
      'feeds'               => true,
  );

  $args = array(
      'label'               => __( 'review'),
      'description'         => __( 'Reviews' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', ),
      'taxonomies'          => array( 'reviews', 'post_tag'),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => null,
      'menu_icon'           => '',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'query_var'           => 'review',
      'rewrite'             => $rewrite,
      'capability_type'     => 'post',
  );

  register_post_type( 'review' , $args );

}
add_action('init', 'review_register');

function aevidi_build_taxonomies() {
    register_taxonomy( 'reviews', 'reviews', array( 'hierarchical' => true, 'label' => 'Review Categories', "singular_label" => "Review Category", 'query_var' => true, 'rewrite' => true ) );
}
add_action( 'init', 'aevidi_build_taxonomies', 0 );

/**
 * Add reviews to main query
 */
function home_filter($query) {
  if (!is_page() && !is_admin() && $query->is_main_query() )
      $query->set('post_type', array( 'post', 'review' ) );
}
add_action('pre_get_posts','home_filter');


function ucc_getarchives_where_filter( $where , $r ) {
 $post_types = "'post' , 'review'";
  return str_replace( "post_type = 'post'" , "post_type IN ( $post_types )" , $where );
}
add_filter( 'getarchives_where' , 'ucc_getarchives_where_filter' , 10 , 2 );

/*
function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'review'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );
*/

/**
 * Add meta boxes for reviews
 */
function admin_init(){
  add_meta_box("review_information", "Information about the Restaurant", "review_information", "review", "side", "low");
  add_meta_box("review_feedback", "Feedback / Your thoughts about the Restaurant", "review_feedback", "review", "normal", "high");
}
add_action("admin_init", "admin_init");

function review_information(){
  global $post;
  $custom = get_post_custom($post->ID);
  $address = $custom["address"][0];
  $phone = $custom["phone"][0];
  ?>
  <p><label>Address:</label><br />
  <textarea rows="5" style="resize:none;width:100%;" name="address"><?php echo $address; ?></textarea></p>
  <p><label>Phone Number:</label><br />
  <textarea rows="1" style="resize:none;width:100%;" name="phone"><?php echo $phone; ?></textarea></p>
  <?php
}

function review_feedback(){
  global $post;
  $custom = get_post_custom($post->ID);
  $rating = $custom["rating"][0];
  $summary = $custom["summary"][0];
  ?>
  <p><label>Rating (F to A+):</label><br />
  <textarea rows="1" style="resize:none;width:100%;" name="rating"><?php echo $rating; ?></textarea></p>
  <p><label>Feedback (Summarize your review)</label><br />
  <textarea rows="5" style="resize:none;width:100%;" name="summary"><?php echo $summary; ?></textarea></p>
  <?php
}

function review_save_details(){
  global $post;

  update_post_meta($post->ID, "address", $_POST["address"]);
  update_post_meta($post->ID, "phone", $_POST["phone"]);
  update_post_meta($post->ID, "rating", $_POST["rating"]);
  update_post_meta($post->ID, "summary", $_POST["summary"]);
}
add_action('save_post', 'review_save_details');


function review_edit_columns($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => "Review Title",
    "description" => "Description",
    "rating" => "Rating",
    "cuisines" => "Cuisine",
  );

  return $columns;
}

function review_custom_columns($column){
  global $post;

  switch ($column) {
    case "description":
      the_excerpt();
      break;
    case "rating":
      $custom = get_post_custom();
      echo $custom["rating"][0];
      break;
    case "cuisines":
      echo get_the_term_list($post->ID, 'Cuisine', '', ', ','');
      break;
  }
}

add_action("manage_posts_custom_column",  "review_custom_columns");
add_filter("manage_edit-portfolio_columns", "review_edit_columns");



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
