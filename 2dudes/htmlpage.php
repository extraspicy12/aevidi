<!--
* Make navbar responsive (maybe remove coloranimation?)
* Add color band to navbar on slideDown?
* Remove rounding?
* add searchbar to navbar
-->

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

  <title>2 Dudes Who Love Food</title>
  <link rel="stylesheet" href="stylesheets/app.css" type="text/css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="js/vendor/custom.modernizr.js" type="text/javascript">
</script>
</head>

<body>
  <div class="container">
    <header>
      <div class="row block" id="header">
        <div class="large-4 columns centered logo">
          <h1>LOGO</h1>
        </div>

        <div class="large-6 large-offset-2 columns hide-for-small">
          <div class="top-nav">
            <ul>
              <li><a href="#">HOME</a></li><li><a href="#">ABOUT</a></li><li><a href="#">CONTACT</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bottom"></div>
    </header>

    <div class="page-container row">
      <nav>
        <ul>
          <li><a href="#">Find Restaurants</a></li>
          <li><a href="#">Write Reviews</a></li>
          <li><a href="#">Learn Recipes</a></li>
          <li><a href="#">Watch Videos</a></li>
          <li><a href="#">Kindness</a></li>
          <li><a href="#">Swag</a></li>
        </ul>
        <div class="search"><a href="#"></a></div>
      </nav>

      <div class="sidebar large-3 large-offset-1 push-8 columns">
        <div class="row search-toggle" style="display:none;">
          <div class="row collapse">
            <div class="small-9 columns">
              <input type="text" placeholder="Search Query">
            </div>
            <div class="small-3 columns">
              <a href="#" class="button prefix">Search</a>
            </div>
          </div>
        </div>
        <div class="row collapse social-media">
          <div class="small-3 columns"><a href="#"><img src="stylesheets/facebook.png" alt="facebook" ></a>
          </div>
          <div class="small-3 columns"><a href="#"><img src="stylesheets/twitter.png" alt="twitter" ></a>
          </div>
          <div class="small-3 columns"><a href="#"><img src="stylesheets/instagram.png" alt="instagram" ></a>
          </div>
          <div class="small-3 columns"><a href="#"><img src="stylesheets/youtube.png" alt="youtube" ></a>
          </div>
        </div>
        <div class="row user-area-logged-out">
          <div class="section-container accordion" data-section="accordion">
          <section class="active">
              <p class="title" data-section-title><a href="#">Login</a></p>
              <div class="content" data-section-content>
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
              <p class="title" data-section-title><a href="#">Register</a></p>
              <div class="content" data-section-content>
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

      <div class="body large-8 pull-4 columns">
        <div class="row slider">
          <ul data-orbit>
            <li>
              <img src="stylesheets/slide.png">
              <div class="orbit-caption">...</div>
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
        <div class="row post">
          <h2>TODO</h2>
          <h5>October 29st, 2013</h5>
          <p>
            <ul>
              <li>Make the navbar RESPONSIVE</li>
              <li>OPTIMIZE the footer</li>
              <li>FINISH form</li>
            </ul>
          </p>
          <div class="divider"></div>
          <h5>Tag1, Tag2, Tag3, Tag4</h5>
        </div>
<div class="row post">
          <h2>This is a title.</h2>
          <h5>January 1st, 2009</h5>
          <p>Bacon ipsum dolor sit amet shank pastrami venison ball tip sausage. Ribeye doner pancetta pork loin short ribs tri-tip fatback. Rump pancetta pork chop sausage sirloin beef turkey tenderloin ball tip doner flank. Spare ribs tail pork chop turducken, tongue bresaola chuck strip steak meatball kielbasa pancetta short ribs. Andouille short ribs t-bone meatloaf, tongue cow short loin ribeye shankle kielbasa ground round. Ribeye hamburger fatback, chicken kielbasa corned beef tail leberkas bresaola flank t-bone prosciutto.<br><br>

Tenderloin bacon venison, pork fatback tongue swine ham hock doner spare ribs filet mignon. Ham ribeye swine rump. Sirloin shoulder short ribs, pig filet mignon ham meatball. Pork loin jerky boudin bresaola beef, tenderloin prosciutto ground round pork pig fatback turkey andouille meatloaf drumstick. Salami frankfurter kielbasa pork tenderloin. Doner kielbasa tenderloin brisket rump, ribeye jerky tail. Tenderloin jerky capicola sirloin sausage, chicken corned beef shankle spare ribs frankfurter kevin bacon turkey ham hock brisket.</p>
          <div class="divider"></div>
          <h5>Tag1, Tag2, Tag3, Tag4</h5>
        </div>
<div class="row post">
          <h2>This is a title.</h2>
          <h5>January 1st, 2009</h5>
          <p>Bacon ipsum dolor sit amet shank pastrami venison ball tip sausage. Ribeye doner pancetta pork loin short ribs tri-tip fatback. Rump pancetta pork chop sausage sirloin beef turkey tenderloin ball tip doner flank. Spare ribs tail pork chop turducken, tongue bresaola chuck strip steak meatball kielbasa pancetta short ribs. Andouille short ribs t-bone meatloaf, tongue cow short loin ribeye shankle kielbasa ground round. Ribeye hamburger fatback, chicken kielbasa corned beef tail leberkas bresaola flank t-bone prosciutto.<br><br>

Tenderloin bacon venison, pork fatback tongue swine ham hock doner spare ribs filet mignon. Ham ribeye swine rump. Sirloin shoulder short ribs, pig filet mignon ham meatball. Pork loin jerky boudin bresaola beef, tenderloin prosciutto ground round pork pig fatback turkey andouille meatloaf drumstick. Salami frankfurter kielbasa pork tenderloin. Doner kielbasa tenderloin brisket rump, ribeye jerky tail. Tenderloin jerky capicola sirloin sausage, chicken corned beef shankle spare ribs frankfurter kevin bacon turkey ham hock brisket.</p>
          <div class="divider"></div>
          <h5>Tag1, Tag2, Tag3, Tag4</h5>
        </div>
<div class="row post">
          <h2>This is a title.</h2>
          <h5>January 1st, 2009</h5>
          <p>Bacon ipsum dolor sit amet shank pastrami venison ball tip sausage. Ribeye doner pancetta pork loin short ribs tri-tip fatback. Rump pancetta pork chop sausage sirloin beef turkey tenderloin ball tip doner flank. Spare ribs tail pork chop turducken, tongue bresaola chuck strip steak meatball kielbasa pancetta short ribs. Andouille short ribs t-bone meatloaf, tongue cow short loin ribeye shankle kielbasa ground round. Ribeye hamburger fatback, chicken kielbasa corned beef tail leberkas bresaola flank t-bone prosciutto.<br><br>

Tenderloin bacon venison, pork fatback tongue swine ham hock doner spare ribs filet mignon. Ham ribeye swine rump. Sirloin shoulder short ribs, pig filet mignon ham meatball. Pork loin jerky boudin bresaola beef, tenderloin prosciutto ground round pork pig fatback turkey andouille meatloaf drumstick. Salami frankfurter kielbasa pork tenderloin. Doner kielbasa tenderloin brisket rump, ribeye jerky tail. Tenderloin jerky capicola sirloin sausage, chicken corned beef shankle spare ribs frankfurter kevin bacon turkey ham hock brisket.</p>
          <div class="divider"></div>
          <h5>Tag1, Tag2, Tag3, Tag4</h5>
        </div>
      </div>

    </div>
    <footer>
      <div class="row" id="footer">
        <div class="large-3 columns">
          MOST POPULAR<BR>
          <BR>
          COLUMN<br>
          COLUMN<br>
          COLUMN<br>
          COLUMN<br>
        </div>

        <div class="large-3 columns">
          RECENT COMMENTS<BR>
          <BR>
          COLUMN<br>
          COLUMN<br>
          COLUMN<br>
          COLUMN<br>
        </div>

        <div class="large-3 columns">
          WIDGET ROOM<BR>
          <BR>
          COLUMN<br>
          COLUMN<br>
          COLUMN<br>
          COLUMN<br>
        </div>

        <div class="large-3 columns">
          SITEMAP<BR>
          <BR>
          COLUMN<br>
          COLUMN<br>
          COLUMN<br>
          COLUMN<br>
        </div>
      </div>

      <div class="copyright">
        <div class="row">
          @copy; aeVidi 2013. LOGO GOES HERE
        </div>
      </div>
    </footer>
  </div>
<script src="javascripts/vendor/coloranimate.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.alerts.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.clearing.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.cookie.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.dropdown.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.forms.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.joyride.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.magellan.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.orbit.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.placeholder.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.reveal.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.section.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.tooltips.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.topbar.js" type="text/javascript">
</script><script src="javascripts/foundation/foundation.interchange.js" type="text/javascript">
</script><script type="text/javascript">
$(document).ready(function() {
  $(document).foundation();
  $(".search").mouseover(function(){
    if ($(".search-toggle").stop().css("display") == "none")
      $(".search, .bottom").stop().animate({backgroundColor: '#92b999'}, 250)
  });
  $(".search").mouseout(function(){
    if ($(".search-toggle").stop().css("display") == "none")
      $(".search, .bottom").stop().animate({backgroundColor: '#47a761'}, 250)
  });
  $(".search").click(function(){
    if ($(".search-toggle").css("display") == "none") {
      $(".search-toggle").slideToggle(250);
      $(".search, .bottom").animate({backgroundColor: '#92b999'}, 250);
    } else {
      $(".search-toggle").slideToggle(250);
      $(".search, .bottom").animate({backgroundColor: '#47a761'}, 250);
    }
  });
});
  </script>
</body>
</html>
