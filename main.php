<?php
/* Template Name: Main Page */

get_header(); ?>

<div class="content">
  <?php


  get_sidebar(); ?>
  <div class="content-main">

        <?php 
        $query = new WP_Query( array ( 'post_type' => 'post', 'order' => 'date', 'posts_per_page' => 1) );

        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post(); 
            get_template_part( "template-parts/category-post", "new" ); 
            //
            // Post Content here
            //
          } // end while
        } // end if

        wp_reset_query();
      ?>

    <div class="content-main-small">
<!-- main-post-small.php -->

      <?php 
        $query = new WP_Query( array ( 'post_type' => 'post', 'order' => 'date', 'posts_per_page' => 8, 'offset' => 1) );

        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post(); 
            get_template_part( "template-parts/main-post", "small" ); 
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
