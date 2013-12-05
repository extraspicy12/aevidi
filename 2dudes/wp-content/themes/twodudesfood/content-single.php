<?php
/**
 * @package TwoDudesFood
 */
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
      $category_list = get_the_category_list()( $post->ID, 'reviews', '', ' | ', ' ' );

			$tag_list = get_the_tag_list( '', __( ', ', 'twodudesfood' ) );

			if ($category_list != "") {
  				// If this post has a 1+ categories
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s.<br> Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'twodudesfood' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s.<br> Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'twodudesfood' );
				}

			} else {
  			// Else post was not placed in any category even though categories exist
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s.<br> Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'twodudesfood' );
				} else {
					$meta_text = __( '<br>Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'twodudesfood' );
				}
			}

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php
/*
  		$meta_text = __( 'This entry was posted on %1$s. Bookmark the <a href="%2$s" rel="bookmark">permalink</a>.', 'twodudesfood' );
  		printf(
				$meta_text,
				get_the_date(),
				get_permalink()
			);
			edit_post_link( __( 'Edit', 'twodudesfood' ), '<br><br><span class="edit-link">', '</span>' );
*/
		?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
