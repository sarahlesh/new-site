<?php get_header(); ?>

<div class="main careers-archive archive">
	<div class="container">
		<h1>Careers</h1>
		<p>Single-origin coffee tattooed VHS swag irony. Etsy ennui aesthetic fingerstache slow-carb, pickled VHS fanny pack Truffaut chambray food truck brunch post-ironic dreamcatcher.</p>
	</div>
	<ul>
	<?php $projectQuery = new WP_Query( 
				array( 
					'post_type' => 'careers',   
					) 
			); ?>
		<?php if ( $projectQuery->have_posts() ) : ?>

			<?php while ($projectQuery->have_posts()) : $projectQuery->the_post(); ?>
				
					<li><a href="<?php echo the_permalink() ?>"><?php echo get_the_title() ?></a></li>
				

			<?php endwhile; ?>
		<?php endif; ?>



 	<?php wp_reset_postdata(); ?>
 	</ul>
</div>

<?php get_footer(); ?>