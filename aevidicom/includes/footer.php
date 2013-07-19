
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
			      <div class="small-centered large-9 tagline columns">
			        <div class="small-4 columns">
			          <span class="pull-right">Seeing is Believing.</span>
		        </div>
			        <div class="small-4 columns"><img src="img/grey-eye.png"></div>
			        <div class="small-4 columns">
			          <span class="pull-left">&copy; aeVidi, LLC</span>
		        </div>
			      </div>
		      </div>
		    </div>
      </div>
  </footer>

<!-- MODALS -->

<div id="template-modal" class="reveal-modal">
	<div class="row">
		<div class="large-10 small-centered columns"> <img src="img/html5.png">
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
		<div class="large-10 small-centered columns"> <img src="img/wordpress.png">
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
		<div class="large-10 small-centered columns"> <img src="img/search.png">
			<h3>SEO</h3>
			<hr>
			<p> Marketing is one of the most important aspects of any business. In today's world, the internet is at the forefront of marketing. The best way to get
				your business noticed is through search engine optimization. At aeVidi we will organize your website in ways that make it easy for search engines such as
				Google to retrieve your site's pages and point potential vistors in your direction. </p>
		</div>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>

<script src="js/foundation.min.js" type="text/javascript"></script>
  <script type="text/javascript">

  	function validate(id, value) {
  	var pattern, errorMsg;
  	var result = true;
	  	if (id=="yourName") {
        pattern = /^[a-zA-Z -]{1,50}$/;
	      errorMsg = "Please enter your name!";
	      result = pattern.test(value);
	  	} else if (id=="yourNumber") {
        pattern = /^\(?[0-9 ]{3}\)? ?-?[0-9]{3} ?-?[0-9]{4}$/;
	      errorMsg = "Please enter a valid phone number!";
	      result = pattern.test(value);
	  	} else if (id=="yourEmail") {
        pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]+$/;
	      errorMsg = "Please enter a valid email address!";
	      result = pattern.test(value);
	  	} else if (id=="yourMessage") {
	      pattern = /^.{25,10000}$/;
	      errorMsg = "Please enter a message between 25 and 10,000 characters!";
	      result = pattern.test(value);
	  	} else {
		  	result = false;
	  	}
	  	if (result)
	  		return "good";
			else
				return errorMsg;
  	}

  	function invalidate(id, msg) {
	  	$("#"+id+"-error-row").css("display", "inline-block");
	  	$("#"+id+"-error").html(msg);
	  	$("#"+id).css("border", "1px solid red");
  	}

  	function makeValid(id) {
	  	$("#"+id+"-error-row").css("display", "none");
	  	$("#"+id).css("border", "1px solid green");
  	}

	$(document).foundation();

	$(document).ready(function() {
		$('#contact-modal').on('opened', function () {
		  $(this).foundation('section', 'reflow');
		});

		$("#contact-form input, textarea").keyup(function() {
			var validateMsg = validate(this.id, this.value);
			if (validateMsg != "good")
				invalidate(this.id, validateMsg);
			else
				makeValid(this.id);
		});

		$("#contact-form").submit(function() {
			var valid = true;
			var returnMsg;
			$("#contact-form input, textarea").each(function(index){
				returnMsg = validate(this.id, this.value);
				if (returnMsg != "good") {
					invalidate(this.id, returnMsg);
					valid = false;
				}
			});
			if (valid) {
			var name = $("#yourName").val();
			var number = $("#yourNumber").val();
			var email = $("#yourEmail").val();
			var message = $("#yourMessage").val();
		  $('#contact-form').html("Sending...");
			  $.ajax({
				  type: "POST",
				  url: "includes/sendEmail.php",
				  data: {
					  confirm: 'sendEmail',
					  name: name,
					  number: number,
					  email: email,
					  message: message
				  },
				  async: true
			  }).done(function(msg){
				  if (msg = "sent")
					  $('#contact-form').html("Your email has been sent! You will hear back from us promptly.");
				  else
					  $('#contact-form').html("There was a problem sending your email. Please contact us at <a href=\"mailto:contact@aevidi.com\">contact@aevidi.com</a> instead.");
			  });
		  } else {

		  }
		  return false;
		});

		$("a.scroll").click(function(event) {
			event.preventDefault();
			var pos = $(this.hash).offset().top;
			
			if($(this).attr('href') == '#contact-us')
				pos -= $(window).width() < 768 ? 0 : 65;
				
			$('html,body').animate({scrollTop:pos}, 500);
		});

	});
	
	function parallax(toggleWidth) {
		var width = $(window).width();
		
		if(width >= toggleWidth) {
			$.stellar({
				horizontalScrolling: false
			});
		}
			
		$(window).on('resize', function() {
			width = $(this).width();
	
			if(width < toggleWidth) {
				$.stellar('destroy');
			}
			else {
				$.stellar({
					horizontalScrolling: false
				});	
			}
		});	
	}
  </script>
</body>
</html>




