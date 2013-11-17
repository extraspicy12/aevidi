<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TwoDudesFood
 */
?>

	</div><!-- .page-container -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="row" id="footer">
    <div class="large-3 medium-6 columns">
      <?php if (!dynamic_sidebar('footer-far-left')):  ?>
      NULL
      <?php endif; ?>
    </div>
    <div class="large-3 medium-6 columns">
      <?php if (!dynamic_sidebar('footer-slight-left')):  ?>
      NULL
      <?php endif; ?>
    </div>
    <div class="large-3 medium-6 columns">
      <?php if (!dynamic_sidebar('footer-slight-right')):  ?>
      NULL
      <ul><li><a>asdasd</a>asd</li></ul>
      <?php endif; ?>
    </div>
    <div class="large-3 medium-6 columns">
      <?php if (!dynamic_sidebar('footer-far-right')):  ?>
      NULL
      <?php endif; ?>
    </div>
  </div>
  <div class="copyright">
    <div class="row">
			<?php do_action( 'twodudesfood_credits' ); ?>
			<?php printf( __( 'Theme for %1$s created by %2$s.', 'twodudesfood' ), '<i>Two Dudes Who Love Food</i>', '<a href="http://aeVidi.com/" rel="designer">aeVidi</a>' ); ?>
  		</div>
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
