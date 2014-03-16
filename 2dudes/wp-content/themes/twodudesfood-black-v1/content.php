<?php
/**
 * @package TwoDudesFood
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
  <div class="large-12 columns">
  	<header class="entry-header">
  		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
  		<?php if ( 'post' == get_post_type() || 'review' == get_post_type() ) : ?>
  		<div class="entry-meta">
    		<ul>
    			<?php if ( 'review' == get_post_type() ) :
            global $post;
            $custom = get_post_custom($post->ID);
            $terms = get_the_terms( $post->ID, 'rating' );
          	$arr = array();
          	foreach ( $terms as $term )
          		$arr[] = $term->name;
          	$rating = join( ", ", $arr );
/*             $rating = get_the_term_list( $post->ID, 'rating', '', ' | ', ' ' ); */
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
          ?>
          <li class="rating-header">Rating: <span class="<?php echo $class; ?>"><?php echo $rating; ?></span></li>
    			<?php endif; ?>
    			<li style="margin-bottom: 0;"><?php twodudesfood_posted_on(); ?></li>
    		</ul><!-- .entry-meta -->
  		</div>
  		<?php endif; ?>
  	</header><!-- .entry-header -->

  	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
  	<div class="entry-summary">
  		<?php the_excerpt(); ?>
  	</div><!-- .entry-summary -->
  	<?php else : ?>
  	<div class="entry-content">
  		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twodudesfood' ) ); ?>
  		<?php
  			wp_link_pages( array(
  				'before' => '<div class="page-links">' . __( 'Pages:', 'twodudesfood' ),
  				'after'  => '</div>',
  			) );
  		?>
  	</div><!-- .entry-content -->
  	<?php endif; ?>

  	<footer>
    	<div class="divider"></div>
  		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
  			<?php
  				/* translators: used between list items, there is a space after the comma */
  				$categories_list = get_the_category_list( __( ', ', 'twodudesfood' ) );
  				if ( $categories_list ) :
  			?>
  			<span class="cat-links">
  				<?php printf( __( 'Posted in %1$s', 'twodudesfood' ), $categories_list ); ?>
  			</span> |
  			<?php endif; // End if categories ?>

  			<?php
  				/* translators: used between list items, there is a space after the comma */
  				$tags_list = get_the_tag_list( '', __( ', ', 'twodudesfood' ) );
  				if ( $tags_list ) :
  			?>
  			<span class="tags-links">
  				<?php printf( __( 'Tagged %1$s', 'twodudesfood' ), $tags_list ); ?>
  			</span> |
  			<?php endif; // End if $tags_list ?>
  		<?php endif; ?>
  		<?php if ( 'review' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
  			<?php
  				/* translators: used between list items, there is a space after the comma */
  				$categories_list = get_the_term_list( $post->ID, 'cuisine', '', ', ', ' ' );
  				if ( $categories_list ) :
  			?>
  			<span class="cat-links">
  				<?php printf( __( 'Posted in %1$s', 'twodudesfood' ), $categories_list ); ?>
  			</span> |
  			<?php endif; // End if categories ?>

  			<?php
  				/* translators: used between list items, there is a space after the comma */
  				$tags_list = get_the_tag_list( '', __( ', ', 'twodudesfood' ) );
  				if ( $tags_list ) :
  			?>
  			<span class="tags-links">
  				<?php printf( __( 'Tagged %1$s', 'twodudesfood' ), $tags_list ); ?>
  			</span> |
  			<?php endif; // End if $tags_list ?>
  		<?php endif; ?>
  		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
  		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment ', 'twodudesfood' ), __( '1 Comment', 'twodudesfood' ), __( '% Comments', 'twodudesfood' ) ); ?></span>
  		<?php endif; ?>

  		<?php edit_post_link( __( 'Edit', 'twodudesfood' ), ' | <span class="edit-link">', '</span>' ); ?>
  	</footer><!-- .entry-meta -->
  </div>
</article><!-- #post-## -->
