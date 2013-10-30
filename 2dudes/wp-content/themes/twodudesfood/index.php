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
      <li>
        <img src="stylesheets/slide.png">
        <div class="orbit-caption"><h3 style="color:white;">TODO</h3><h5>OCTOBER 29ST, 2013</h5><p>&bull; Make the navbar RESPONSIVE...</p></div>
      </li>
      <li>
        <img src="stylesheets/slide.png">
        <div class="orbit-caption">...</div>
      </li>
      <li>
        <img src="stylesheets/slide.png">
        <div class="orbit-caption">...</div>
      </li>
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