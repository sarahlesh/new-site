<footer class="full">
  <div class="content">

  	<?php if( is_front_page() ) { require('frontfoot.php'); }?>
    <p>&copy; Copywright <?php echo date('Y'); ?>. All rights reserved. All images and content property of <strong>hjc</strong>.</p>
  </div>
</footer>
<script src='http://code.jquery.com/jquery-latest.min.js'></script>
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