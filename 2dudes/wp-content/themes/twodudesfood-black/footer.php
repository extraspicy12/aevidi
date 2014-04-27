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

	  </div>

	  <footer id="footer" role="contentinfo">
	  <div class="row site-footer">
    <div class="medium-3 columns">
      <?php if (!dynamic_sidebar('footer-left')):  ?>
      NULL
      <?php endif; ?>
    </div>
    <div class="medium-6 columns">
      <?php if (!dynamic_sidebar('footer-center')):  ?>
      NULL
      <?php endif; ?>
    </div>
    <div class="medium-3 columns">
      <?php if (!dynamic_sidebar('footer-right')):  ?>
      NULL
      <?php endif; ?>
    </div>
	  </div>
	  <div class="row site-footer site-map">
      <div class="medium-2 small-6 columns element"><a href="#"><div class="about"></div></a></div>
      <div class="medium-2 small-6 columns element"><a href="#"><div class="reviews"></div></a></div>
      <div class="medium-2 small-6 columns element"><a href="#"><div class="ffoodies"></div></a></div>
      <div class="medium-2 small-6 columns element"><a href="#"><div class="news"></div></a></div>
      <div class="medium-2 small-6 columns element"><a href="#"><div class="deals"></div></a></div>
      <div class="medium-2 small-6 columns element"><a href="mailto:2dudes@something"><div class="contact"></div></a></div>
	  </div>
  </footer>
  <div class="copy">
  <div class="row">
    <div class="small-12 columns">
		<?php do_action( 'twodudesfood_credits' ); ?>
    &copy; Two Dudes Who Love Food 2013. Theme designed by <a href="http://aevidi.com" target="_blank">aeVidi</a>
    </div>
		</div>

  <!--
  Created by Eric Segev, 2013
  -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
