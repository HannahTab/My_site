<?php get_header(); ?>




			
	<img class="frontpage" src="http://hannah.tabram.com/wp-content/themes/html5blank-stable/img/homepage3.png">

		<div class="frontpage_text_wrapper">

				<h1 class="frontpage_main">Bring your ideas to life</h1>

				<p class="frontpage_main">Looking for some help with your website? Whether you're looking for fresh copy, an editor and proofreader, 
				search engine optimisation or a whole new site, you're in the right place.<br />
				</p>

				<div class="frontpage_button"><a href="#Copy">Find out more</a></div>
		
		</div>

	
	
		
	<div class="clear"></div>
		
			
		<div class="card-container">
		
			<section class="info-card-left">
			
			<a id="Copy"></a>
			
				<div class="card-left-content">
					
					<h2><i class="fas fa-pen-alt"></i>  Copy and SEO</h2>
					<p>Struggling with writer's block? Your words are one of the most important aspects of your site, but getting the copy right can be challenging. If you're struggling to find the right words for your site, 
					or you'd like to push your site up the search engine rankings, I can help. Or maybe you'd just like an editor and proofreader to cast an eye over your copy? I can help with that, too.
					</p>
					
				</div>
				
				<img class="card-left-image"src="/wp-content/themes/html5blank-stable/img/wordpress-265132_640.jpg" alt="Image of text">
				
			</section>
			
			
			
			<section class="info-card-right">
			
			
			<img class="card-right-image"src="/wp-content/themes/html5blank-stable/img/code-1839406_640.jpg" alt="code on a screen">
				<div class="card-right-content">
				
					
					<h2><i class="fas fa-laptop"></i> Web Design</h2>
					<p>The web moves quickly - has your site kept up? If it's time to invest in a website for your business, or you're ready for a fresh new look, get in touch to talk about web design!</p>
				</div>
				
			</section>
			
				
						
			<section class="info-card-left">
			
				<div class="card-left-content">
				
				<h2><i class="far fa-envelope"></i> Get in touch</h2>
				<p>Looking for a quote, more information, or just a chat about your business needs? Get in touch - I'd love to hear from you!</p>
					
			
				</div>
				
					
				<img class="card-left-image"src="/wp-content/themes/html5blank-stable/img/post-box-2691454_640.jpg" alt="Image of post box">
			
			</section>
			
			
		
		</div>
	
	
	
	<div class="clear"></div>

<?php get_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
