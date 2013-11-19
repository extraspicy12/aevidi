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
    <div class="medium-4 columns">
      <?php if (!dynamic_sidebar('footer-left')):  ?>
      NULL
      <?php endif; ?>
    </div>
    <div class="medium-4 columns">
      <?php if (!dynamic_sidebar('footer-center')):  ?>
      NULL
      <?php endif; ?>
    </div>
    <div class="medium-4 columns">
      <?php if (!dynamic_sidebar('footer-right')):  ?>
      NULL
      <?php endif; ?>
    </div>
  </div>
  <div class="copyright">
    <div class="row">
      <div class="large-12 columns">
			<?php do_action( 'twodudesfood_credits' ); ?>
      &copy; Two Dudes Who Love Food 2013. Theme designed by <a href="http://aevidi.com" target="_blank">aeVidi</a>
  		</div>
    </div>
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
