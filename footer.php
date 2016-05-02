<footer>
<section class="clocks-container section">

	<div class="clocks container clearfix">
		<div class="LA clock">
			<div class="clock-circle">
			  <div class="clock-face">
			  	 <div id="hour-la" class="clock-hour"></div>
			  	 <div id="minute-la" class="clock-minute"></div>
			  </div>
			</div>
			<h2><span class="hjc">hjc</span> Los Angeles</h2>
		</div>

		<div class="toronto clock">
			<div class="clock-circle toronto">
				<div class="clock-face">
				   <div id="hour" class="clock-hour"></div>
				   <div id="minute" class="clock-minute"></div>
				 </div>
				</div>
				 <h2><span class="hjc">hjc</span> Toronto</h2>
		</div>
			
		<div class="spain clock">
			<div class="clock-circle spain">
				 <div class="clock-face">
				   	<div id="hour-spain" class="clock-hour"></div>
				   	<div id="minute-spain" class="clock-minute"></div>
				</div>
			</div>
			<h2><span class="hjc">hjc</span> Spain</h2>
		</div>
	</div>
</section>

<section class="footer">

	<div class="foot-item contact">
		<button class="contact">Contact us <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" style="enable-background:new 0 0 100 100;" xml:space="preserve" fill="#fff" stroke="#fff" width="22px"><g><g><polygon points="0,99.937 28.262,92.363 7.685,71.785   "/></g><g><rect x="10.61" y="37.063" transform="matrix(-0.707 0.7072 -0.7072 -0.707 119.1844 53.8499)" width="75.655" height="29.1"/></g><g><path d="M89.589,31.032l9.055-9.052c1.809-1.812,1.809-4.773,0-6.587L84.652,1.403c-1.81-1.809-4.773-1.809-6.591,0l-9.047,9.058    L89.589,31.032z"/></g></g></svg></button>
	</div>
	
	<div class="foot-item signup">
		<button class="signup">Sign up for our monthly enewsletter</button>
	</div>
	<div class="foot-item facebook">
		<a href="https://www.facebook.com/hjcnewmedia" target="_blank" class="fa fa-facebook"></a>
	</div>

	<div class="foot-item twitter">
		<a href="https://twitter.com/hjcnewmedia" target="_blank" class="fa fa-twitter"></a>
	</div>

	<div class="foot-item linkedin">
		<a href="https://www.linkedin.com/company/hjc" target="_blank" class="fa fa-linkedin"></a>
	</div>

	<div class="foot-item copyright">
		<p>Copyright <?php echo date("Y"); ?>. All rights reserved. All images and content property of <span class="hjc">hjc</span>.</p>
	</div>
	
</section>



</footer>
<script src='http://code.jquery.com/jquery-latest.min.js'></script>
<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="wp-content/themes/hjc/node_modules/moment-timezone/moment-timezone.js"></script>


<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>