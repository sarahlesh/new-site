<?php get_header(); ?>

<div class="main">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<div class="topbar">
				<a href="<?php bloginfo('url') ?>/careers" class="fa fa-arrow-left arrow-direction"></a>

				<div class="social">
					<a class="fa fa-facebook" href="http://www.facebook.com/share.php?u=<?php echo the_permalink() ?>&title=<?php echo get_the_title() ?>" target="_blank" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars') ;return false;"></a>

					<a href="https://twitter.com/intent/tweet?status=HJC%20is%20hiring!%20Click%20to%20learn%20more%20and%20apply.%20<?php echo the_permalink() ?>" target="_blank" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars') ;return false;" class="fa fa-twitter"></a>
				</div>
			</div>

			<h1><?php echo get_the_title() ?></h1>
			<button class="green button apply">apply for this position</button>

			<p class="bold">Position Type: <?php the_field("position_type") ?></p>
			<p class="bold">Job Region: <?php the_field("job_region") ?></p>

			<p><?php the_field("job_desciption") ?></p>

			<?php if( have_rows('we_are_looking_for') ):?>
				<p class="bold">We are looking for:</p>
				<ul>
				<?php while( have_rows('we_are_looking_for') ) : the_row(); ?>
							
					<li class="ISO"><?php the_sub_field('we_are_looking_for'); ?></li>
							
				<?php endwhile; ?>
				</ul>
			<?php endif; ?> <!-- end we are looking for loop -->
			<p class="bold">This position entails, but is not limited to:</p>
				<ul>
				<?php if( have_rows('skills_qualifications') ): while( have_rows('skills_qualifications') ) : the_row(); ?>
				<li><?php the_sub_field('skill'); ?></li>
				<?php endwhile; endif; ?>
				</ul>
			<p class="bold">Position Responsibilities:</p>
				<ul>
				<?php if( have_rows('position_responsibilities') ): while( have_rows('position_responsibilities') ) : the_row(); ?>
				<li><?php the_sub_field('responsibility'); ?></li>
				<?php endwhile; endif; ?>
				</ul>
			<?php if(get_field("work_environment")) : ?>
				<div class="environment">
				<p class="bold">Work Environment:</p>
					<?php the_field("work_environment") ?>
				</div>
			<?php endif; ?>

			<?php if(get_field("more_info")) : ?>
				<div class="info">
					<?php the_field("more_info") ?>
				</div>
			<?php endif; ?>

			<p class="bold">Please Use Subject Line: <?php the_field("email_subject_line") ?></p>
			<p class="bold">We thank everyone for their interest but only those selected for interview will be contacted.</p>






		</div>
    <?php endwhile; ?>
       	          
    <?php wp_reset_postdata(); ?>

</div>

<?php get_footer(); ?>