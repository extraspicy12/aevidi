<!-- Single Post Slider -->
<?php get_header(); ?>
<div id="slides">
 <div class="slides_container">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

$args = array(
 'post_type' => 'attachment',
 'numberposts' => -1,
 'orderby'=> 'menu_order',
 'order' => 'ASC',
 'post_mime_type' => 'image',
 'post_status' => null,
 'post_parent' => $post->ID
);

 $attachments = get_posts( $args );
  if ( $attachments ) {
   foreach ( $attachments as $attachment ) {
  echo wp_get_attachment_image($attachment->ID , 'full' );
 }
}
endwhile; endif; ?>
</div>
 <a href="#"><img src="<?php bloginfo('template_directory')?>/images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
 <a href="#"><img src="<?php bloginfo('template_directory')?>/images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
</div>

<?php get_footer(); ?>


<!-- Featured Post Slider -->
<?php query_posts('cat=2&showposts=3'); ?>
<?php if ( have_posts() ) : ?>

<div class="slider-wrap">
<ul class="bxslider">
<?php while ( have_posts() ) : the_post(); ?>
<li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="blog-featured">
<a href="<?php the_permalink(); ?>" rel="bookmark" >
<img src="<?php bloginfo('stylesheet_directory'); ?>/scripts/timthumb.php?src=<?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'full');
echo $image_url[0];
?>&h=230&w=715&zc=1&q=100&c=1&a=t"
alt="<?php the_title(); ?>"
/>
</a>
</div> <!-- END Blog Featured Image -->
<div class="blog-summary alpha60">
<?php the_excerpt(); ?><a href='<?php the_permalink(); ?>' rel="bookmark" >Read More >> </a>
</div> <!-- END Blog Summary -->
</li>
<?php endwhile; ?>
</ul><!-- END Blog Roll -->
</div> <!-- END slider wrap -->
<?php else : ?>
<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php
endif;
wp_reset_postdata();
?>


<!-- Fancy sidebar accordion -->
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