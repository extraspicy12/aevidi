
<footer class="row footer" id="footer">
	<div class="large-12 small-centered columns no-pad">
		<div class="container">
			<div class="row">
				<div class="large-4 columns"> 
					<!-- WIDGET TITLE --> 
				</div>
				<div class="large-4 columns"> 
					<!-- WIDGET TITLE --> 
				</div>
				<div class="large-4 columns"> 
					<!--  WIDGET TITLE --> 
				</div>
			</div>
			<div class="row">
				<div class="small-centered small-12 tagline columns">
					<div class="small-5 columns"> <span class="pull-right">Seeing is Believing.</span> </div>
					<div class="small-2 columns"><img src="img/grey-eye.png"></div>
					<div class="small-5 columns"> <span class="pull-left">&copy; aeVidi, LLC</span> </div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- MODALS -->

<div id="template-modal" class="reveal-modal">
	<div class="row">
		<div class="large-10 small-centered columns"> <img >
			<h3>Basic</h3>
			<hr>
			<p> HTML websites are still in high demand all over the world. For those who want a website to display their portfolio or run their club and don't want to
				pay the premium for a content management system, and static HTML site is the way to go. By selecting the "Basic" package, you are getting a website that
				designed around a gorgeous and responsive HTML layout. We will support your site with our own custom developed jQuery and PHP plugins. In addition,
				all our code will be well-documented for your viewing pleasure and ease. </p>
		</div>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>

<div id="dynamic-modal" class="reveal-modal">
	<div class="row">
		<div class="large-10 small-centered columns"> <img >
			<h3>Dynamic</h3>
			<hr>
			<p> Our dynamic websites are based on the Wordpress content management system. This allows us to develop a fantastic custom
				website for our clients, giving them everything they could ever need. We use the latest, up-to-date plugins and scripts to make your website an
				interactive destination on the internet. </p>
			<p> Here at aeVidi, we will keep the customer involved in every step and every decision made. By choosing  us, you will get a beautifully designed website
				with a responsive layout that is scalable to every platform imaginable. Our content management setups give you an easy to navigate interface that will
				allow you to post all the content you want. </p>
			<p>Features include:
			<ul>
				<li>E-Commerce</li>
				<li>Social media integration</li>
				<li>Mobile development</li>
			</ul>
			</p>
		</div>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>

<div id="seo-modal" class="reveal-modal">
	<div class="row">
		<div class="large-10 small-centered columns"> <img >
			<h3>SEO</h3>
			<hr>
			<p> Marketing is one of the most important aspects of any business. In today's world, the internet is at the forefront of marketing. The best way to get
				your business noticed is through search engine optimization. At aeVidi we will organize your website in ways that make it easy for search engines such as
				Google to retrieve your site's pages and point potential vistors in your direction. </p>
		</div>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>

<script src="js/vendor/jquery.js" type="text/javascript"></script> 
<script src="js/foundation.min.js" type="text/javascript"></script> 
<script type="text/javascript">
		$(document).foundation();

		$('#contact-modal').on('opened', function () {
		  $(this).foundation('section', 'reflow');
		});

		function updateHero() {
				var imgs = {
					small : 'img/hero-450.png',
					medium : 'img/hero-770.png',
					large : 'img/hero.png'
				};
				var width = $(window).width();
				if (width < 450) {
					$(".jumbotron div div #hero").attr('src', imgs['small'])
				} else if (width < 769) {
					$(".jumbotron div div #hero").attr('src', imgs['medium'])
				} else {
					$(".jumbotron div div #hero").attr('src', imgs['large'])
				}
		};

		$(window).resize(function(){
				updateHero();
		});

		$(document).ready(function() {

			updateHero();

			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
			});
		});
  </script>
</body>
</html>
