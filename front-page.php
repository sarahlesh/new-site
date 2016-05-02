
<!-- Display Header -->

<?php get_header(); ?>

<!-- Who is HJC section -->
<span id="about" class="anchor"></span>
<section class="whoIs container section panel">
	<h1>Who is <span class="green hjc">hjc?</span></h1>
	<p>We’re a digital fundraising agency that has been serving nonprofits like yours for over two decades. From the largest charities in the world, to the “little guys” just around the corner – we’ve helped raise over a billion dollars for clients across the globe. </p>

	<button class="green button">Tell us about your goals</button>
</section>

<span id="weDo" class="anchor"></span>
<section class="weDo container clearfix section panel">
	<h1>What do we do?</h1>
	<div class="carousel">
		<div class="carousel-cell">
			<img src="<?php bloginfo('template_directory'); ?>/images/spec1.png" alt="">
		</div>

		<div class="carousel-cell">
			<img src="<?php bloginfo('template_directory'); ?>/images/spec2.png" alt="">
		</div>

		<div class="carousel-cell">
			<img src="<?php bloginfo('template_directory'); ?>/images/spec3.png" alt="">
		</div>

		<div class="carousel-cell">
			<img src="<?php bloginfo('template_directory'); ?>/images/spec5.png" alt="">
		</div>

		<div class="carousel-cell">
			<img src="<?php bloginfo('template_directory'); ?>/images/spec6.png" alt="">
		</div>

	</div>

		
		
	<div class="right">
		<ul class="specialties">
			<li class="nav-for is-selected">We <span>Fundraise.</span></li>
			<li class="nav-for">We <span>Tell your story.</span></li>
			<li class="nav-for">We <span>take a holistic approach.</span></li>
			<li class="nav-for">We <span>engage.</span></li>
			<li class="nav-for">We <span>innovate.</span></li>
		</ul>

		<a href="" class="green button">Learn More</a>
	</div>
</section>

<!-- Who is Case Study section -->
<section class="case-studies panel">
	<div class="studies clearfix">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php while( has_sub_field('case_studies') ): ?>
			<?php $image = get_sub_field('image'); 
				$alt = $image['alt'] ?>
			<a href="#" class="study square">
				<img src="<?php echo $image['sizes']['case-study'] ?>" alt="<?php echo $alt ?>">
					<div class="study-content">
						<div class="study-content-title bounceInUp">
								<div class="left">
										<h3><?php the_sub_field('client_name'); ?></h3>
										<p><?php the_sub_field('case_study_title'); ?></p>
								</div>
								<i class="fa fa-arrow-right"></i>
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

			<?php require('quote.php') ?>


		<?php endwhile; ?>
		
		<?php wp_reset_postdata(); ?>
		
	<?php else:  ?>
		[stuff that happens if there aren't any posts]
	<?php endif; ?>
</section>

<!-- Who we've helped -->

<section class="helped container section panel">
	<h1>Who we've helped</h1>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php while( has_sub_field('clients_helped') ): ?>
			<?php $logo = get_sub_field('logo');
			$alt = $logo['alt'];  ?>
				<div class="client-logo">
					<img src="<?php echo $logo['sizes']['client-logo'] ?>" alt="<?php echo $alt ?>">
				</div>
		<?php endwhile; // end the loop?>
	<?php endwhile; // end the loop?>
	<?php wp_reset_query(); ?>
</section>

<section class="team section panel">
	<h1>Our Team</h1>

	<div class="team-photo clearfix">
		<div class="container">
			<div class="meet">
				<h2>Meet the Team.</h2>
				<p>together we'll do amazing thinfs for the world. It's only fair you get to know us.</p>
				<a href="<?php bloginfo('url') ?>/team-member" class="button">see the whole crew</a>
			</div>
		</div>
		
	</div>

</section>

<!-- Footer -->

<?php get_footer(); ?>


