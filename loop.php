
<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p></p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>


<div class="boxes clearfix">
<?php while ( have_posts() ) : the_post(); ?>
		
		<?php if ( has_post_thumbnail()): ?>
			<a href="<?php echo get_post_permalink() ?>" id="post-<?php the_ID(); ?>" class="study square blog-post post has-thumb" style="background-image: url(<?php the_post_thumbnail_url('large'); ?> )">
				<?php else: ?> 
			<a href="<?php echo get_post_permalink() ?>" id="post-<?php the_ID(); ?>" class="study square blog-post post has-no-thumb" >
				<?php endif ?>
								<div class="study-content">
								<div class="study-content-title  bounceInUp">
								<h3><?php echo get_the_title(); ?></h3>
										<div class="left">
								</div>
								<i class="fa fa-arrow-right"></i>
							</div>
						</div>
			</a>           
<?php endwhile; // End the loop. Whew. ?>
</div>


