<?php
/**
 * @package TwoDudesFood
 */
?>
<?php
  global $post;
  $custom = get_post_custom($post->ID);
  $rating = $custom["rating"][0];
  $summary = $custom["summary"][0];
  $address = $custom["address"][0];
  $phone = $custom["phone"][0];
  echo $rating.$summary.$address.$phone;
  ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php twodudesfood_posted_on(); ?>
		</div><!-- .entry-meta -->

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

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twodudesfood' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php

			$category_list = get_the_term_list( $post->ID, 'reviews', '', ', ', ' ' );

      if ($category_list != "")
  			$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%2$s" rel="bookmark">permalink</a>.', 'twodudesfood' );
  		else
  			$meta_text = __( 'Bookmark the <a href="%2$s" rel="bookmark">permalink</a>.', 'twodudesfood' );
  		printf(
				$meta_text,
				$category_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'twodudesfood' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
