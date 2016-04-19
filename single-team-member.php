<?php get_header(); ?>

<div class="main">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="social-bar">
			<a href="<?php bloginfo('url'); ?>/team-member"><i class="fa fa-arrow-left arrow-direction"></i></a>

			<div class="social">
				<?php if(get_field("team_member_email")) : ?>
					<a href="<?php the_field('team_member_email')?>" class="fa fa-envelope"></a>
				<?php endif ?>
				<?php if(get_field("team_member_linkedin")) : ?>
					<a href="<?php the_field('team_member_linkedin')?>" class="fa fa-linkedin"></a>
				<?php endif ?>
			</div>
		</div>

		<h2 class="green"><?php the_field("job_title") ?></h2>
		<h1><?php echo get_the_title() ?></h1>
		<div class="team-member-image">
			<?php $teamimage = get_field('team_member_image'); 
			    $alt = $teamimage['alt']; ?>
			<img src="<?php echo $teamimage['sizes']['team-member'] ?>" alt="<?php echo $alt ?>">
		</div>
		
		<?php if(get_field("team_member_description")) : ?>
			<div class="history">
				<h3 class="bold">The History</h3>
				<p><?php the_field("team_member_description") ?></p>
			</div>
		<?php endif ?>
	</div>

	<div class="interesting-things">
		<div class="container clearfix">
			<div class="interesting">
			<?php if(get_field("current_jam")) : ?>
				<i class="fa fa-headphones" aria-hidden="true"></i>
				<h3 class="bold">Current jam</h3>
				<p><?php the_field("current_jam") ?></p>
			<?php endif ?>
			</div>
			<div class="interesting">
				<?php if(get_field("beverage")) : ?>
					<i class="fa fa-coffee" aria-hidden="true"></i>
					<h3 class="bold">Beverage of choice</h3>
					<p><?php the_field("beverage") ?></p>
				<?php endif ?>
			</div>
			<div class="interesting">
				<?php if(get_field("fun_fact")) : ?>
					<i class="fa fa-info-circle" aria-hidden="true"></i>
					<h3 class="bold">Fun Fact</h3>
					<p><?php the_field("fun_fact") ?></p>
				<?php endif ?>
			</div>
		</div>
	</div>





    <?php endwhile; ?>
       	          
    <?php wp_reset_postdata(); ?>
    </div>
</div> <!-- /.main -->

<?php get_footer(); ?>