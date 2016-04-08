

   <?php  $thumb_id = get_post_thumbnail_id(5);
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'background');
          $thumb_url = $thumb_url_array[0];

       ?>
<!-- get background image for header -->
       <style>
        .front-head{
          background-image:url(<?= $thumb_url ?>);
        }
       </style>

<div class="full front-head">

  <div class="logobar">
    <?php require('logobar.php') ?>
  </div>
       
 <!-- require navigation -->
  <?php  require('navigation.php'); ?>

  <div class="container front-head-content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 
        <h1><?php the_title(); ?></h1>

        <?php $field = get_field("tagline", 5); ?>
        <h2><?php echo $field ?></h2>

        <a class="button" href="">See our work</a>
        <a class="button project" href="">Let's start a project</a>

 
      <?php endwhile; // end the loop?>

  </div> <!-- /.content -->
</div><!--/.header-->