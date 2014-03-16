<?php
/**
 * @package TwoDudesFood
 */
?>
<?php
  global $post;
  $custom = get_post_custom($post->ID);
  $terms = get_the_terms( $post->ID, 'rating' );
	$arr = array();
	foreach ( $terms as $term )
		$arr[] = $term->name;
	$rating = join( ", ", $arr );
	$price = get_the_term_list( $post->ID, 'price', '', ' | ', ' ' );
  $atmosphere = get_the_term_list( $post->ID, 'atmosphere', '', ' | ', ' ' );
  $cuisine = get_the_term_list( $post->ID, 'cuisine', '', ' | ', ' ' );
  $lettergrade = substr($rating, 0, 1);
  $class;
  if (strtolower($lettergrade) == "a")
    $class = "great";
  else if (strtolower($lettergrade) == "b")
    $class = "good";
  else if (strtolower($lettergrade) == "c")
    $class = "average";
  else if (strtolower($lettergrade) == "d")
    $class = "bad";
  else
    $class = "poor";
  $summary = $custom["summary"][0];
  $phone = $custom["phone"][0];
  $address = $custom["address"][0];
  ?>
<article id="review-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

	  <div class="row">
	    <div class="large-9 columns">
    		<h1 class="entry-title"><?php the_title().edit_post_link( __( 'Edit', 'twodudesfood' ), ' <small class="edit-link">', '</small>' ); ?>
        </h1>
        <div class="entry-meta">
      		<ul>
        		<li>Reviewed on <?php echo the_date(); ?></li>
        		<?php if ($address != "") : ?>
        		<li class="review-address"><?php echo $address; ?></li>
        		<?php endif; if ($phone != "") : ?>
        		<li class="review-phone"><?php echo $phone; ?></li>
        		<?php endif; if ( $cuisine != "" ) : ?>
        		<li class="review-cuisines">Cuisine: <?php echo $cuisine; ?></li>
        		<?php endif; if ( $atmosphere != "" ) : ?>
        		<li class="review-atmosphere">Atmosphere: <?php echo $atmosphere; ?></li>
        		<?php endif; if ( $price != "" ) : ?>
        		<li class="review-price">Price: <?php echo $price; ?></li>
        		<?php endif; ?>
      		</ul>
    		</div><!-- .entry-meta -->
  	  </div>
	    <div class="large-3 columns rating">
	      <h1 class="<?php echo $class; ?>"><?php echo $rating; ?></h1>
  	  </div>
	  </div>

    <?php if ( has_post_thumbnail() ): ?>
    <div class="row" style="margin-bottom: 24px;">
      <div class="small-12 columns">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php
                $image_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($image_id,'full');
                echo $image_url[0];
                ?>&w=698&zc=1&q=100&c=1&a=t"
                alt="<?php the_title(); ?>"
              />
      </div>
    </div>
    <?php endif; ?>

	  <div class="row" class="featured-quote">
  	  <div class="large-12 columns">
    	  <blockquote><p class="<?php echo $class; ?>"><?php echo $summary; ?></p></blockquote>
  	  </div>
	  </div>

	</header><!-- .entry-header -->

	<div class="entry-content row">
	  <div class="large-12 columns">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twodudesfood' ),
				'after'  => '</div>',
			) );
		?>
	  </div>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
    <?php  if (($tags = get_the_tag_list( '', __( ' | ', 'twodudesfood' ) )) != "" ) : ?>
        		<li class="review-tags">Tagged as: <?php echo $tags; ?></li>
            <?php endif; ?>
    <?php twodudesfood_posted_on(); ?>
    <?php edit_post_link( __( 'Edit', 'twodudesfood' ), ' | <span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
