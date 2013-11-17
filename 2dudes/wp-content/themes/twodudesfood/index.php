<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package TwoDudesFood
 */

get_header(); ?>

<!-- Implement slider -->

  <div class="row slider">
  <div class="large-12 columns">
    <ul data-orbit>

  <?php query_posts('showposts=5');
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      if (has_post_thumbnail()): ?>
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
  wp_reset_postdata();
  ?>
    </ul>
  </div>
  </div>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php twodudesfood_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>