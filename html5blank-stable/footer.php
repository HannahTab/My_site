
			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. 
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		<!-- /wrapper -->
		</div>
		

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		
		
		
		//Menu toggle
var menu_toggle = document.getElementsByClassName("nav__button")[0], 
    nav_container = document.getElementsByClassName("nav")[0];


menu_toggle.addEventListener("click", function(){

    if (nav_container.classList.contains("nav__toggle")) {
        nav_container.classList.remove("nav__toggle");

    } else {
        nav_container.classList.add("nav__toggle");
    }

}, false);
		</script>
		

	</body>
</html>
