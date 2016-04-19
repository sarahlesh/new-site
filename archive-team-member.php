<?php get_header(); ?>

<div class="main teammember-archive archive">

	<div class="container archive-copy">
		<h1>Meet the Team</h1>
		<p>Single-origin coffee tattooed VHS swag irony. Etsy ennui aesthetic fingerstache slow-carb, pickled VHS fanny pack Truffaut chambray food truck brunch post-ironic dreamcatcher.</p>
	</div>
	<div class="boxes clearfix">

	      <?php if ( have_posts() ) the_post(); ?>

	     <?php $projectQuery = new WP_Query( 
	     			array( 
	     				'post_type' => 'team-member',   
	     				) 
	     		); ?>
	     	<?php if ( $projectQuery->have_posts() ) : ?>

	     		<?php while ($projectQuery->have_posts()) : $projectQuery->the_post(); ?>
	     			<?php $image = get_field('team_member_image'); 
	     					$alt = $image['alt']; ?>
	     			<a href="<?php echo get_post_permalink() ?>" class="study square">
	     				<img src="<?php echo $image['sizes']['case-study'] ?>" alt="<?php echo $alt ?>">
	     				<div class="study-content">
	     					<div class="study-content-title bounceInUp">
	     									<h3><?php echo get_the_title() ?></h3>
	     									<p><?php the_field("job_title") ?></p>
	     							
	     							<button class="button">Say Hi</button>
	     					</div>
	     				</div>
	     			</a>
	     		<?php endwhile; ?>
	     	<?php endif; ?>
	     		
	     	<?php wp_reset_postdata(); ?>
	</div>
</div> <!-- /.main -->

<?php get_footer(); ?>