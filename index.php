<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="top-section main">
		<div class="container main archive">
			<div class="header">
	      <h1>Blog</h1>
	    </div>
		</div>
</div>

    		<?php get_template_part( 'loop', 'index' );	?>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>