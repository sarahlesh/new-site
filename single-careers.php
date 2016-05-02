<?php get_header(); ?>

<div class="main">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<div class="social-bar">
				<a href="<?php bloginfo('url') ?>/careers" class="fa fa-arrow-left arrow-direction"></a>

				<div class="social">
					<a class="fa fa-facebook" href="http://www.facebook.com/share.php?u=<?php echo the_permalink() ?>&title=<?php echo get_the_title() ?>" target="_blank" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars') ;return false;"></a>

					<a href="https://twitter.com/intent/tweet?status=HJC%20is%20hiring!%20Click%20to%20learn%20more%20and%20apply.%20<?php echo the_permalink() ?>" target="_blank" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars') ;return false;" class="fa fa-twitter"></a>
				</div>
			</div>
			
			<h1><?php echo get_the_title() ?></h1>
			<div class="apply-button">
				<button class="green button apply">apply for this position</button>
			</div>
			


		<div class="job-info">

			<p class="bold">Position Type: <span class="position-deets"><?php the_field("position_type") ?></span></p>
			<p class="bold">Job Region: <span class="position-deets"><?php the_field("job_region") ?></span></p>
		</div>

		<div class="job-info">

			<p><?php the_field("job_desciption") ?></p>
		</div>

		<?php if( get_field('we_are_looking_for') ):?>
		<div class="job-info">
				<p class="bold">We are looking for:</p>
				<p><?php the_field('we_are_looking_for'); ?></p>
		</div>
			<?php endif; ?>

		<div class="job-info">
			<p class="bold">This position entails, but is not limited to:</p>
				 
			<p><?php the_field('skills_qualifications'); ?></p>
		</div>
		<div class="job-info">	
			<p class="bold">Position Responsibilities:</p>
				<p><?php the_field('position_responsibilities'); ?></p>
		</div>

		<?php if(get_field("work_environment")) : ?>
				

		<div class="job-info environment">
				<p class="bold">Work Environment:</p>
					<?php the_field("work_environment") ?>
		</div>
		<?php endif; ?>

		<?php if(get_field("more_info")) : ?>		

		<div class="job-info info">
			
			<?php the_field("more_info") ?>
		</div>
		<?php endif; ?>


		<div class="job-info">

			<p class="bold">Please Use Subject Line: <?php the_field("email_subject_line") ?></p>
			<p class="bold">We thank everyone for their interest but only those selected for interview will be contacted.</p>

		</div>
    <?php endwhile; ?>  	          
    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>