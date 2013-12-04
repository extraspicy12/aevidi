<?php
/**
 * @package TwoDudesFood
 */
?>
<?php
  global $post;
  $custom = get_post_custom($post->ID);
  $rating = $custom["rating"][0];
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
  $address = $custom["address"][0];
  $phone = $custom["phone"][0];
  ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

	  <div class="row">
	    <div class="large-9 columns">
    		<h1 class="entry-title"><?php the_title(); ?></h1>
    		<div class="entry-meta">
    		<ul>
      		<li>Reviewed on <?php echo the_date(); ?></li>
      		<li><?php echo $address; ?></li>
      		<li><?php echo $phone; ?></li>
      		<li><?php the_terms( $post->ID, 'reviews', '', ' | ', ' ' ); ?></li>
    		</ul>
    		</div><!-- .entry-meta -->
  	  </div>
	    <div class="large-3 columns rating">
	      <h1 class="<?php echo $class; ?>"><?php echo $rating; ?></h1>
  	  </div>
	  </div>

    <div class="row" style="margin-bottom: 24px;">
      <div class="small-12 columns">
              <?php if ( has_post_thumbnail() ): ?><img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php
                $image_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($image_id,'full');
                echo $image_url[0];
                ?>&w=698&zc=1&q=100&c=1&a=t"
                alt="<?php the_title(); ?>"
              /><?php endif; ?>
      </div>
    </div>

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
		<?php
/*
  		$meta_text = __( 'This entry was posted on %1$s. Bookmark the <a href="%2$s" rel="bookmark">permalink</a>.', 'twodudesfood' );
  		printf(
				$meta_text,
				get_the_date(),
				get_permalink()
			);
*/
		?>

		<?php edit_post_link( __( 'Edit', 'twodudesfood' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
