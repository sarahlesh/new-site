<section id="clients" class="full">
    <div class="content">

     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 
        <h2><?php echo get_the_title(24); ?></h2>

        <?php $field = get_field("h1_heading", 24); ?>
        <h2><?php echo $field ?></h2>

 
      <?php endwhile; // end the loop?>
        
    </div>
    
</section>