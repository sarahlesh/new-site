<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<section class="contact-form none">
	<div class="internal">
	<div class="contact-form-internal">
		<div class="container">
				<button class="exit">
					<img src="<?php bloginfo('template_directory'); ?>/images/exit.png" alt="exit button">
					<span class="aural-only">exit</span>
				</button>
					<h1><?php echo get_the_title(211) ?></h1>
					
				  <?php $my_postid = 211;//This is page id or post id
		            $content_post = get_post($my_postid);
		            $content = $content_post->post_content;
		            $content = apply_filters('the_content', $content);
		            $content = str_replace(']]>', ']]&gt;', $content);
		        echo $content; ?>
		</div>
	</div>
		<div class="contact-footer">
				<div class="container flexed">
			<?php if( have_rows('contact_form_footer_item', 211) ): while ( have_rows('contact_form_footer_item', 211) ) : the_row(); ?>
			<?php 
			 		$image = get_sub_field('image'); 
						$title = get_sub_field('location_name');
			    	$address = get_sub_field('address');
			    ?>
			    <div class="hjc-location">
							<img src="<?php  echo $image['url'] ?>" alt="<?php  echo $image['alt'] ?>">
							<h2><?php echo $title ?></h2>
							<div class="address">	
									<?php echo $address  ?>
							</div>
			    </div>
				<?php endwhile; endif; ?>	
				</div>
		</div>

		<div class="contact-social foot-item social-links">
			<a href="https://www.facebook.com/hjcnewmedia" target="_blank" class="fa fa-facebook"></a>

			<a href="https://twitter.com/hjcnewmedia" target="_blank" class="fa fa-twitter"></a>

			<a href="https://www.linkedin.com/company/hjc" target="_blank" class="fa fa-linkedin"></a>
		</div>

	</div>
</section>
<?php endwhile; endif; ?>