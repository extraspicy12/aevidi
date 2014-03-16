<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package TwoDudesFood
 */

get_header();

?>

	<div id="primary" class="content-area">
    <div id="loader"><img src="<?php echo get_template_directory_uri(); ?>/2dudesfood/stylesheets/495.GIF" alt="495" width="128" height="128" /></div>
		<main id="main" class="site-main" role="main">
      <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div id="restaurant-reviews">
        	<header class="entry-header">
        		<h1 class="entry-title"><?php the_title(); ?></h1>
        	</header><!-- .entry-header -->

          <div class="row slider">
            <ul data-orbit>

          <?php
          $query = new WP_Query( 'post_type=review&nopaging=true&tag=featured' );
          $count = 0;
          if ( $query->have_posts() ) :
            while ( $query->have_posts() && $count < 5 ) : $query->the_post();
              if (has_post_thumbnail()): $count++; ?>
              <li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink(); ?>" rel="bookmark" >
                    	<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php
                        $image_id = get_post_thumbnail_id();
                        $image_url = wp_get_attachment_image_src($image_id,'full');
                        echo $image_url[0];
                        ?>&h=500&w=698&zc=1&q=100&c=1&a=t"
                        alt="<?php the_title(); ?>"
                      />
                    </a>
                <div class="orbit-caption">
                <h3><?php the_title();?></h3><span><?php the_excerpt(); ?></span><a href='<?php the_permalink(); ?>' rel="bookmark" >Read More >> </a>
                </div> <!-- END Blog Summary -->
              </li>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php
          else :
          endif;
          rewind_posts();
          ?>
            </ul>
          </div>
        	<div class="entry-content">
            <div class="row" id="sorting-module">
              <div class="medium-3 columns" id="sort-by-categories">
                <h4>Sort By</h4>
                <ul id="sorting-categories">
                  <li><a href="#" value="atmosphere" id="atmosphere-key">Atmosphere</a></li>
                  <li><a href="#" value="cuisine" id="cuisine-key">Cuisine</a></li>
                  <li><a href="#" value="date" id="date-key">Date</a></li>
                  <li><a href="#" value="location" id="location-key">Location</a></li>
                  <li><a href="#" value="name" id="name-key">Name</a></li>
                  <li><a href="#" value="price" id="price-key">Price</a></li>
                  <li><a href="#" value="rating" id="rating-key">Rating</a></li>
                </ul>
              </div>
              <div class="medium-9 columns" id="sort-by-values">
                <ul class="sort-by-x" id="sort-by-atmosphere">
                </ul>
                <ul class="sort-by-x" id="sort-by-cuisine">
                </ul>
                <ul class="sort-by-x" id="sort-by-date">
                </ul>
                <ul class="sort-by-x" id="sort-by-location">
                </ul>
                <ul class="sort-by-x" id="sort-by-name">
                </ul>
                <ul class="sort-by-x" id="sort-by-price">
                </ul>
                <ul class="sort-by-x" id="sort-by-rating">
                </ul>
              </div>
            </div>
            <div class="row" id="sort-button-holder">
              <div class="small-6 medium-4 columns" id="sort-holder">
                <form action="../" method="GET" id="sort-form">
                  <div id="sort-values"></div>
                  <a class="button" id="sort-submit" value="sortReviews">Search</a>
                </form>
              </div>
              <div class="small-6 medium-4 columns medium-offset-4" id="clear-holder">
                <a class="button" id="clear-values">Clear</a>
              </div>
            </div>
            <div class="row">
              <div class="large-12 columns" id="sorted-reviews">
              </div>
            </div>
        	</div>
        </div>
      </article>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php wp_enqueue_script( 'my-ajax-request', get_template_directory_uri() . '/2dudesfood/javascripts/vendor/ajax.js', array( 'jquery' ) );

// declare the URL to the file that handles the AJAX request (wp-admin/admin-ajax.php)
wp_localize_script( 'my-ajax-request', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
