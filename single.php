<?php get_header(); ?>

<div class="main">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1><?php echo get_the_title() ?></h1>
      

      <?php endwhile; // end of the loop. ?>
</div> <!-- /.main -->

<?php get_footer(); ?>