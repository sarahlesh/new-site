<section id="team" class="full">

     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="content">
 
        <h2><?php echo get_the_title(27); ?></h2>

        <?php $field = get_field("h1_heading", 27); ?>
        <h2><?php echo $field ?></h2>

         <?php  $thumb_id = get_post_thumbnail_id(27);
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'background');
          $thumb_url = $thumb_url_array[0];
       ?>
       </div>
		
		<div id="team-desc" class="full" style="background:url(<?= $thumb_url ?>); background-attachment: fixed; background-repeat:no-repeat; background-size:cover; height:600px">
			<div class="content">
				<?php $field = get_field("team_page_tagline", 27); ?>
				<p><?php echo $field ?></p>	
		         <?php $field = get_field("description", 27); ?>
		        <p><?php echo $field ?></p>
	        </div>
	     </div>
 
      <?php endwhile; // end the loop?>
         
</section>

