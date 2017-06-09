<?php
/* Template Name: About Page */

get_header(); ?>

<div class="content">
<?php
get_sidebar();?>

  <div class="content-main">
      
      <?php 

        if ( have_posts() ) {
          while (have_posts() ) {
            the_post(); 
            get_template_part( "template-parts/about-post");
            //
            // Post Content here
            //
          } // end while
        } // end if

        wp_reset_query();
      ?>
    </div>
</div>
<?php
get_footer();
