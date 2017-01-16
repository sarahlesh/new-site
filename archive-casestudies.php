<?php get_header(); ?>

<div class="main case-studies-archive archive">
	<div class="top-section">
		<div class="container archive-copy">
			<h1>Case Studies</h1>
			<p>What happens when you put us in a room with daring clients? Inspiring work we’re proud to share.</p>
			<button class="green button contact-button">Dare to do incredible work today</button>
		</div>
	</div>
	<div class="boxes clearfix">

	      <?php if ( have_posts() ) the_post(); ?>

	     <?php $projectQuery = new WP_Query( 
	     			array( 
	     				'post_type' => 'casestudies',   
	     				) 
	     		); ?>
	     	<?php if ( $projectQuery->have_posts() ) : ?>

	     		<?php while ($projectQuery->have_posts()) : $projectQuery->the_post(); ?>
	     			<?php $image = get_field('image'); 
	     					$alt = $image['alt']; ?>
	     			<a href="<?php echo get_post_permalink() ?>" class="study square">
	     				<img src="<?php echo $image['sizes']['case-study'] ?>" alt="<?php echo $alt ?>">
	     				<div class="study-content">
	     					<div class="study-content-title  bounceInUp">
	     							<div class="left">
	     									<h3><?php the_field('client'); ?></h3>
	     									<p><?php echo get_the_title() ?></p>
	     							</div>
	     							<i class="fa fa-arrow-right"></i>
	     					</div>
	     				</div>
	     			</a>
	     		<?php endwhile; ?>
	     	<?php endif; ?>
	     		
	     	<?php wp_reset_postdata(); ?>
	</div>
</div> <!-- /.main -->

<?php get_footer(); ?>