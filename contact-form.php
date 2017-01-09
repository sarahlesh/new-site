<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<section class="contact-form">
	<div class="container contact-form-internal">
		<button class="exit">
			<i class="fa fa-times-circle" aria-hidden="true"></i>
			<span class="aural-only">exit</span>
		</button>
				<h1><?php echo get_the_title(211) ?></h1>
				<div class="clearfix">
			  <?php $my_postid = 211;//This is page id or post id
	            $content_post = get_post($my_postid);
	            $content = $content_post->post_content;
	            $content = apply_filters('the_content', $content);
	            $content = str_replace(']]>', ']]&gt;', $content);
	        echo $content; ?>
        </div>


		
	</div>
	
</section>
<?php endwhile; endif; ?>