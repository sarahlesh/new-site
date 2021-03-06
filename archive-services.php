<?php get_header(); ?>
<div class="main services-archive archive case-studies-archive">
	<div class="top-section">
		<div class="container">
			<h1>Our Services</h1>

			<h2 class="green">One size doesn't fit all</h2>
			<p>With over two decades working with all types of clients, if there’s one thing we’re sure of, it’s that no two organizations are the same. That’s why when you work with us, you can always expect unique solutions to match your needs, budget, and supporters. </p>

			<button class="green button contact-button">Dare to do incredible work today</button>
		</div>
	</div>
	<div class="container clearfix section services-desc-section">
		<div class="left">
			<ul>
			 <?php if ( have_posts() ) the_post(); ?>

			<?php $servicesQuery = new WP_Query( 
						array( 
							'post_type' => 'services',   
							) 
					); ?> 
				<?php if ( $servicesQuery->have_posts() ) : ?>

					<?php while ($servicesQuery->have_posts()) : $servicesQuery->the_post(); ?>
						<?php $title = get_the_title();
						 ?>

						 <li class="service-type" data-search="<?php the_field("services_slug"); ?>"><?php echo $title ?></li>
				
					<?php endwhile; ?>
				<?php endif; ?>
						
			<?php wp_reset_postdata(); ?>
			</ul>
		</div>

		<select class="mobile-only" name="" id="">
		<?php if ( $servicesQuery->have_posts() ) : ?>

			<?php while ($servicesQuery->have_posts()) : $servicesQuery->the_post(); ?>
				<?php $title = get_the_title();
				 ?>

				 <option class="service-type" data-search="<?php the_field("services_slug"); ?>" value="<?php the_field("services_slug"); ?>"><?php echo $title ?></option>
		
			<?php endwhile; ?>
		<?php endif; ?>
		</select>
		<div class="right" id="desc">	
	 	<?php if ( have_posts() ) the_post(); ?>

		<?php $servicesQuery = new WP_Query( 
				array( 
					'post_type' => 'services',   
					) 
			); ?>
		<?php if ( $servicesQuery->have_posts() ) : ?>

		<?php while ($servicesQuery->have_posts()) : $servicesQuery->the_post(); ?>
		<?php $title = get_the_title(); ?>
			<div data-id="<?php the_field("services_slug"); ?>" class="desciption service-desc none bounceInUp">
				<h3><?php echo $title ?></h3>
				<p><?php the_field('service_description') ?></p>
				<?php if( have_rows('benefits') ):?>
				<h4 class="bold ">The Benefits</h4>

				<?php while( have_rows('benefits') ) : the_row(); ?>
				<ul>
					<li class="benefit"><?php the_sub_field('benefit'); ?></li>
				</ul>
				<?php endwhile; endif; ?> <!-- end benefits loop -->

			</div>  <!-- end description  -->

						
		<?php endwhile; endif; ?>
			

		</div>
	</div>
</div>
				
	<?php wp_reset_postdata(); ?>


<?php get_footer(); ?>