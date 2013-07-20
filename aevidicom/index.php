<?php
$title = "Home";
include_once "includes/header.php"
?>

<div class="page-container">
	<div class="row">
		<div class="large-12 small-centered">
			<div class="preloader"></div>
			<div data-stellar-background-ratio="0.5" class="jumbotron" id="home-hero"></div>
		</div>
	</div>
</div>
<div class="row band bg-band" id="services">
  <div class="container">
    <div class="large-12 columns small-centered row h-centered" id="featured-text">
    	aeVidi is a website development firm located in Baltimore, MD
    </div>
    <div class="large-12 columns small-centered row" id="featured-line">
			<div class="small-3 columns dotted-line left"></div>
			<div class="small-6 columns"><div class="centered-box h-centered">HERE'S WHAT WE DO</div></div>
			<div class="small-3 columns dotted-line right"></div>
    </div>
		<div class="large-12 columns small-centered row">
			<div class="large-4 columns white-box"> <img src="img/html5.png"/>
				<h3>Basic</h3>
				<hr>
				<p>
				<ul>
					<li>HTML/PHP based website</li>
					<li>Static pages</li>
					<li>Responsive layout</li>
					<li>Continued support</li>
				</ul>
				</p>
				<a href="#template-modal" data-reveal-id="template-modal" class="button fancy">Learn More</a> </div>
			<div class="large-4 columns white-box"> <img src="img/wordpress.png"/>
				<h3>Dynamic</h3>
				<hr>
				<p>
				<ul>
					<li>Wordpress CMS</li>
					<li>Easily managed</li>
					<li>Responsive layout</li>
					<li>Best for small businesses</li>
				</ul>
				</p>
				<a href="#dynamic-modal" data-reveal-id="dynamic-modal" class="button fancy">Learn More</a> </div>
			<div class="large-4 columns white-box"> <img src="img/search.png">
				<h3>SEO</h3>
				<hr>
				<p>
				<ul>
					<li>Optimize for Google</li>
					<li>Marketing advantages</li>
					<li>Efficient organization</li>
					<li>Prevent unwanted crawling</li>
				</ul>
				</p>
				<a href="#seo-modal" data-reveal-id="seo-modal" class="button fancy">Learn More</a> </div>
		</div>
	</div>
</div>
<div class="row band contact-band" id="contact-us">
	<div class="container">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-6 columns small-centered large-uncentered">
					<h3 class="fancy-header">Let's Get In Touch</h3>
					<p> Now that you've had a chance to take a look at our services, go ahead and examine our <a href="about.php#process">process</a> so that you can get a feel for our personalization for each individual client. You can start this process off by filling out this
						contact form and describing your needs and vision for your individualized website. We hope to hear from you soon! </p>
				</div>
				<div class="large-6 columns">
					<div class="content panel rounded" data-slug="contact-form" id="contact-form-div">
						<form id="contact-form" class="no-margin" method="" target="" id="contact-form">
							<div class="row collapse">
								<div class="row form-element-holder">
									<div class="large-2 columns">
										<label class="inline" for="yourName">Name</label>
									</div>
									<div class="large-10 columns">
										<input type="text" id="yourName" placeholder="Your Name">
									</div>
								</div>
								<div class="row collapse error-row" id="yourName-error-row">
									<div class="large-offset-2 large-10 columns" id="yourName-error">
									</div>
								</div>
							</div>
							<div class="row collapse">
								<div class="row form-element-holder">
									<div class="large-2 columns">
										<label class="inline" for="yourNumber">Phone Number (opt.)</label>
									</div>
									<div class="large-10 columns">
										<input type="text" id="yourNumber" placeholder="(000) 000-0000">
									</div>
								</div>
								<div class="row collapse error-row" id="yourNumber-error-row">
									<div class="large-offset-2 large-10 columns" id="yourNumber-error">
									</div>
								</div>
							</div>
							<div class="row collapse">
								<div class="row form-element-holder">
									<div class="large-2 columns">
										<label class="inline" for="yourEmail">Email</label>
									</div>
									<div class="large-10 columns">
										<input type="text" id="yourEmail" placeholder="your@email.com">
									</div>
								</div>
								<div class="row collapse error-row" id="yourEmail-error-row">
									<div class="large-offset-2 large-10 columns" id="yourEmail-error">
									</div>
								</div>
							</div>
							<div class="row collapse">
								<div class="row form-element-holder">
									<div class="large-2 columns">
										<label class="inline" for="yourMessage">Message</label>
									</div>
									<div class="large-10 columns">
										<textarea id="yourMessage" rows="6"></textarea>
									</div>
								</div>
								<div class="row collapse error-row" id="yourMessage-error-row">
									<div class="large-offset-2 large-10 columns" id="yourMessage-error">
									</div>
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="button fancy top-margin">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<script>
$(document).ready(function() {
	parallax(768);
	
	$('#menu-home').addClass('active');
});
</script>

<?php include_once "includes/footer.php" ?>
