<?php /* Template Name: Storytelling */ 

get_header();  ?>
<?php $i = 1; ?>
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	<div class="top-section main">
		<div class="container main archive">
			<div class="header">
	      <h1><?php the_title(); ?></h1>
	      <p><?php the_content(); ?></p>
	    </div>
		</div>
	</div>
	<main class="storytelling" role="main">
		<div class="container">
	<?php if( have_rows('what_we_do') ): while ( have_rows('what_we_do') ) : the_row(); ?>

	   <?php 
	    		$whatImage = get_sub_field('image'); 
	   			$whatTitle = get_sub_field('name');
	       	$whatDesc = get_sub_field('description');
	       ?>
					
					<div id="story-container<?php echo $i ?>" class="storytelling-item-container">
						<div id="story<?php echo $i ?>" class="storytelling-item">
							<img src="<?php echo $whatImage['url'] ?>" alt="<?php echo $whatImage['alt'] ?>">
		        	<h2><?php echo $whatTitle ?></h2>
		        	<p><?php echo $whatDesc ?></p>
	        	</div>
	        </div>
		<?php $i++ ?>
	   <?php endwhile; endif; ?>
	   </div>

	<a href="<?php bloginfo('template_directory'); ?>/services" class="button">See Our Services</a>

	<section class="storytelling-why">
			<h1>Why should you work with us?</h1>

			<div class="flexed">
				<?php if( have_rows('why_you_should_work_with_us') ): while ( have_rows('why_you_should_work_with_us') ) : the_row(); ?>

				      <?php 
				      $whyTitle = get_sub_field('title');
				       $whyDesc = get_sub_field('description'); ?>

							<div class="story-why-item">
								<h3><?php echo $whyTitle ?></h3>
								<p><?php echo $whyDesc ?></p>
					
							</div>
					<?php endwhile; endif;  ?>
			</div>
		</section>

	</main>
	<?php endwhile; endif;  ?>

	

<?php get_footer(); ?>