<?php
/* Template Name: Category Page */

get_header();
?>
<div class="content">
  <?php

  get_sidebar(); ?>
  <div class="content-main">


    <div class="content-category">
<!-- category-post-small.php -->

      <?php 
        $query = new WP_Query( array ( 'post_type' => 'post', 'order' => 'date', 'posts_per_page' => -1, 'offset' => 0) );

        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post(); 
            get_template_part( "template-parts/category-post", "small" ); 
            //
            // Post Content here
            //
          } // end while
        } // end if

        wp_reset_query();
      ?>

    </div>
    <div class="blog-nav">
      <div class="blog-nav__link-wrapper"><a class="blog-nav__link" href="#"><< newer posts</a></div>
      <div class="blog-nav__link-wrapper"><a class="blog-nav__link" href="#">older posts >></a></div>
    </div>
  </div>
</div>
<?php

get_footer();
