<?php get_header(); ?>

<article class="main container single-post-section" role="main">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      	<div class="social-bar">
      		<a href="<?php bloginfo('url'); ?>/blog"><i class="fa fa-arrow-left arrow-direction"></i></a>

      		<div class="social">
      			<a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title() ?>" class="fa fa-facebook" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars'); return false;"><span class="aural-only">Click to share this on facebook</span></a>
      			<a href="https://twitter.com/intent/tweet?status=<?php echo get_the_title() ?>%20<?php echo get_the_permalink(); ?>" class="fa fa-twitter"><span class="aural-only">Click to share this on twitter</span></a>
      		</div>
      	</div>
    		<div class="blog-header">
					<h1><?php echo get_the_title() ?></h1>
					<?php if ( has_post_thumbnail()): ?>
						<?php  the_post_thumbnail($size = 'blog'); ?>
					<?php endif ?>
				</div>
				<div class="blogcontent">
					<?php
					$some_long_text = // Start Text
					get_the_content()
					// end text ?>
					 
					<?php echo wpautop( $some_long_text );
					?>
				</div>
      

      <?php endwhile; // end of the loop. ?>
</article> <!-- /.main -->

<?php get_footer(); ?>