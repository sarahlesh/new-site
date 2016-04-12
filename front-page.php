
<!-- Display Header -->

<?php get_header(); ?>

<!-- Who is HJC section -->

<section class="whoIs container">
	<h1>Who is <span class="green hjc">hjc?</span></h1>
	<p>We’re a digital fundraising agency that has been serving nonprofits like yours for over two decades. From the largest charities in the world, to the “little guys” just around the corner – we’ve helped raise over a billion dollars for clients across the globe. </p>

	<button class="green button">Tell us about your goals</button>
</section>

<section class="weDo container">
	<h1>What do we do?</h1>
	<div class="left">
		<!-- <div class="carousel">
		  <div class="carousel-cell">
		  	
		  </div>
		  <div class="carousel-cell">
		  	
		  </div>
		  
		</div>
		
	</div> -->
	<div class="right">
		<ul class="specialties">
			
		</ul>
	</div>
</section>

<!-- Who is Case Study section -->
<section class="case-studies">
	<div class="studies clearfix">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php while( has_sub_field('case_studies') ): ?>
			<?php $image = get_sub_field('image'); ?>
			<a href="#" class="study">
				<img src="<?php echo $image['sizes']['case-study'] ?>" alt="">
					<div class="study-content">
						<div class="study-content-title">
								<div class="left">
										<h3><?php the_sub_field('client_name'); ?></h3>
										<p><?php the_sub_field('case_study_title'); ?></p>
								</div>
								<i class="fa fa-arrow-circle-right"></i>
						</div>
					</div>
			</a>
		<?php endwhile; // end the loop?>
	<?php endwhile; // end the loop?>
	<?php wp_reset_query(); ?>
	</div>
</section>

<!-- quote section -->

<section class="quotes">
	<?php $projectQuery = new WP_Query( 
			array( 
				'posts_per_page' => 4, 
				'post_type' => 'casestudies',   
				) 
		); ?>
	<?php if ( $projectQuery->have_posts() ) : ?>

		<?php while ($projectQuery->have_posts()) : $projectQuery->the_post(); ?>

			<div class="quote container none">
				<blockquote><?php the_field('client_quote'); ?></blockquote>
				<p class="quote_name bold"><?php the_field('quoted_from'); ?></p>
				<p class="quote_title"><?php the_field('quoted_person_title'); ?></p>
				<p class="quote_org bold"><?php the_field('quoted_person_organization'); ?></p>
			</div>


		<?php endwhile; ?>
		
		<?php wp_reset_postdata(); ?>
		
	<?php else:  ?>
		[stuff that happens if there aren't any posts]
	<?php endif; ?>
</section>

<!-- Footer -->

<?php get_footer(); ?>


