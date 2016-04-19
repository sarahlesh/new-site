<?php get_header(); ?>

<div class="main">

       <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php $image = get_field('large_image'); 
                $alt = $image['alt']; ?>
           <img class="single-image" src="<?php echo $image['sizes']['background'] ?>" alt="<?php echo $alt ?>">

           <div class="container clearfix section top">
             <a href="<?php bloginfo('url'); ?>/casestudies"><i class="fa fa-arrow-left arrow-direction"></i></a>
             <h1><?php echo get_the_title() ?></h1>

             <div class="left">
                <div class="project-info">
                 <h3 class="bold">Project</h3>
                 <p><?php the_field("project") ?></p>
               </div>
              <div class="project-info">
                 <h3 class="bold">Client</h3>
                 <p><?php the_field("client") ?></p>
               </div>

              <div class="project-info">
                 <h3 class="bold">The Challenge</h3>
                 <p><?php the_field("description") ?></p>
              </div>
              </div>

              <div class="right">
                <a href="<?php the_field('link_to_project') ?>" target="_blank" class="green button">See the project</a>
                <a href="#approach" class="green button approach-button">Our Approach</a>
                <button class="green button contact-us">Let's Start a project</button>
              </div>
           </div>
            <span id="approach" class="spacer" ></span>
           <section class="approach section">
             <div class="container clearfix">
               <h2>Our Approach</h2>
               <div class="left">
                <p><?php the_field('our_approach') ?></p>
               </div>

               <div class="right">
                 <a href="#result">
                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve" fill="#5c5c5c" stroke="#5c5c5c"><g></g><g><path d="M84.256,34.154c-1.137-1.361-3.15-1.545-4.514-0.41L49,59.373L18.258,33.744c-1.361-1.132-3.381-0.947-4.514,0.41   c-1.135,1.358-0.951,3.381,0.408,4.514l32.795,27.338c0.594,0.496,1.324,0.744,2.053,0.744c0.73,0,1.459-0.248,2.053-0.744   l32.795-27.338C85.207,37.535,85.391,35.513,84.256,34.154z"/></g></svg>
                   <p>scroll for results</p>
                 </a>
                </div>
             </div>
           </section>
            <span id="result" class="spacer"></span>
           <section class="result section">
             <div class="container clearfix">
        
                <h2>The Result</h2>

               <div class="left">
                 <p><?php the_field("the_result") ?></p>
               </div>

               <div class="right result-highlight">
                 <?php the_field("result_highlight") ?>
               </div>
             </div>
           </section>
          
          <section class="quotes">
           <?php require('quote.php') ?>
          </section>

            
        
        <?php endwhile; ?>
          
        <?php wp_reset_postdata(); ?>
</div> <!-- /.main -->

<?php get_footer(); ?>