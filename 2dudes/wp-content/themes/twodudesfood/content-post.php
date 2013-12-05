<?php
/**
 * @package TwoDudesFood
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title().edit_post_link( __( 'Edit', 'twodudesfood' ), ' <small class="edit-link">', '</small>' ); ?>
    </h1>

		<div class="entry-meta">
		  <ul>
  			<li style="margin-bottom: 0;"><?php twodudesfood_posted_on(); ?></li>
  		<?php

  			$category_list = get_the_category_list( __( ' | ', 'twodudesfood' ) );

  			if ($category_list != "") : ?>
  			<li>Categories: <?php echo $category_list; ?></li>
  			<?php
        endif;

  			$tag_list = get_the_tag_list( '', __( ' | ', 'twodudesfood' ) );

        if ($tag_list != "") : ?>
        <li>Tags: <?php echo $tag_list; ?></li>
        <?php endif; ?>
		  </ul>
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
    <?php twodudesfood_posted_on(); ?>
    <?php edit_post_link( __( 'Edit', 'twodudesfood' ), ' | <span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
