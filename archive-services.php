<?php get_header(); ?>
<div class="main services-archive archive">
	<div class="container">
		<h1>Our Services</h1>

		<h2 class="green">One size doesn't fit all</h2>
		<p>With over two decades working with all types of clients, if there’s one thing we’re sure of, it’s that no two organizations are the same. That’s why when you work with us, you can always expect unique solutions to match your needs, budget, and supporters. </p>
	</div>
	<div class="container">
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
	 <?php if ( have_posts() ) the_post(); ?>

	<?php $servicesQuery = new WP_Query( 
				array( 
					'post_type' => 'services',   
					) 
			); ?>
		<?php if ( $servicesQuery->have_posts() ) : ?>

			<?php while ($servicesQuery->have_posts()) : $servicesQuery->the_post(); ?>
				<?php $title = get_the_title(); ?>

				 <div data-id="<?php the_field("services_slug"); ?>" class="desciption service-desc none">
				 	<h3><?php echo $title ?></h3>
				 	<p><?php the_field('service_description') ?></p>

				 	<?php if( have_rows('benefits') ):

				 	    while( have_rows('benefits') ) : the_row(); ?>
				 	    <ul>
				 	    	<li class="benefit"><?php the_sub_field('benefit'); ?></li>
				 	    </ul>
	
				 	    <?php endwhile; ?>

				 	<?php endif; ?>
				 </div>
						
			<?php endwhile; ?>
		<?php endif; ?>
				
	<?php wp_reset_postdata(); ?>

	</div>
</div>
<?php get_footer(); ?>