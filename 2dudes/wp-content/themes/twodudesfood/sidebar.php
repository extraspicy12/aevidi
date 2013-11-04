<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package TwoDudesFood
 */
?>
  </main>

<div id="secondary" class="sidebar large-3 columns" role="complementary">
        <div class="row social-media collapse">
          <div class="small-3 columns"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/2dudesfood/stylesheets/facebook.png" alt="facebook" ></a>
          </div>
          <div class="small-3 columns"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/2dudesfood/stylesheets/twitter.png" alt="twitter" ></a>
          </div>
          <div class="small-3 columns"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/2dudesfood/stylesheets/instagram.png" alt="instagram" ></a>
          </div>
          <div class="small-3 columns"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/2dudesfood/stylesheets/youtube.png" alt="youtube" ></a>
          </div>
        </div>
        <div class="row user-area-logged-out">
          <div class="large-12 columns">
            <div class="section-container accordion">
              <section class="active">
              <p class="title"><a href="#" id="login">Login</a></p>
              <div class="content">
                <div class="login">
                  <form>
                    <div class="row">
                      <div class="large-12 columns">
                        <input type="text">
                        <label>USERNAME</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-12 columns">
                        <input type="password">
                        <label>PASSWORD</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-12 columns" style="text-align:center;">
                        <a href="#" class="button">asdasd</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
            <section>
              <p class="title"><a href="#" id="register">Register</a></p>
              <div class="content">
                <div class="register">
                  <form>
                    <div class="row">
                      <div class="large-12 columns">
                        <input type="text">
                        <label>USERNAME</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-12 columns">
                        <input type="password">
                        <label>PASSWORD</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-12 columns" style="text-align:center;">
                        <a href="#" class="button">asdasd</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

	<div id="secondary" class="sidebar large-3 columns widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>

		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'twodudesfood' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'twodudesfood' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
