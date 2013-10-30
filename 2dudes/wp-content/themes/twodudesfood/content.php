<?php
/**
 * @package TwoDudesFood
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
  <div class="large-12 columns">
  	<header class="entry-header">
  		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
  		<?php if ( 'post' == get_post_type() ) : ?>
  		<h5>
  			<?php twodudesfood_posted_on(); ?>
  		</h5><!-- .entry-meta -->
  		<?php endif; ?>
  	</header><!-- .entry-header -->

  	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
  	<div class="entry-summary">
  		<?php the_excerpt(); ?>
  	</div><!-- .entry-summary -->
  	<?php else : ?>
  	<div class="entry-content">
  		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twodudesfood' ) ); ?>
  		<?php
  			wp_link_pages( array(
  				'before' => '<div class="page-links">' . __( 'Pages:', 'twodudesfood' ),
  				'after'  => '</div>',
  			) );
  		?>
  	</div><!-- .entry-content -->
  	<?php endif; ?>

  	<footer class="entry-meta">
    	<div class="divider"></div>
  		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
  			<?php
  				/* translators: used between list items, there is a space after the comma */
  				$categories_list = get_the_category_list( __( ', ', 'twodudesfood' ) );
  				if ( $categories_list && twodudesfood_categorized_blog() ) :
  			?>
  			<span class="cat-links">
  				<?php printf( __( 'Posted in %1$s', 'twodudesfood' ), $categories_list ); ?>
  			</span>
  			<?php endif; // End if categories ?>

  			<?php
  				/* translators: used between list items, there is a space after the comma */
  				$tags_list = get_the_tag_list( '', __( ', ', 'twodudesfood' ) );
  				if ( $tags_list ) :
  			?>
  			<span class="tags-links">
  				<?php printf( __( 'Tagged %1$s', 'twodudesfood' ), $tags_list ); ?>
  			</span>
  			<?php endif; // End if $tags_list ?>
  		<?php endif; // End if 'post' == get_post_type() ?>

  		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
  		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twodudesfood' ), __( '1 Comment', 'twodudesfood' ), __( '% Comments', 'twodudesfood' ) ); ?></span>
  		<?php endif; ?>

  		<?php edit_post_link( __( 'Edit', 'twodudesfood' ), '<span class="edit-link">', '</span>' ); ?>
  	</footer><!-- .entry-meta -->
  </div>
</article><!-- #post-## -->
