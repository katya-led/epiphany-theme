<?php
/* Template Name: Main Page */

get_header(); ?>

<div class="content">
  <?php


  get_sidebar(); ?>
  <div class="content-main">
    <article class="new-post  js-new-post">
      <div class="new-post__img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-post-img.jpg" alt="photo" class="new-post__img"></div>
      <div class="new-post__inner">
        <h1 class="new-post__title">Under the sea in an Ocean World</h1>
        <p class="new-post__text">Ocean World is more than just an aquarium; it is entertainment for the whole family. You will be taken on a fully guided tour by our highly trained staff who will show you and tell you about the creatures of the sea. The tour lasts about 45 minutes and it is fun, educational and entertaining. These tours are intimate with many unique and one of a life time experiences waiting for you...</p>
        <div class="new-post__btn-wrapper"><a href="single-post.html" class="btn  new-post__link">continue reading</a></div>
        <footer class="new-post__footer">
          <div class="new-post__date-day">14.05.2016, thursday</div>
          <div class="new-post__comments"><a href="#" class="new-post__comments-link">15 comments</a></div>
        </footer>
      </div>
      <div class="single-post__tag-list">
        <span class="single-post__tag"><a href="#" class="single-post__tag-link">places</a></span>
        <span class="single-post__tag"><a href="#" class="single-post__tag-link">aquarium</a></span>
        <span class="single-post__tag"><a href="#" class="single-post__tag-link">ocean</a></span>
        <span class="single-post__tag"><a href="#" class="single-post__tag-link">world</a></span>
        <span class="single-post__tag"><a href="#" class="single-post__tag-link">photography</a></span>
        <span class="single-post__tag"><a href="#" class="single-post__tag-link">where to go</a></span>
        <span class="single-post__tag"><a href="#" class="single-post__tag-link">weekend</a></span>
      </div>
    </article>
    <div class="content-main-small">
<!-- main-post-small.php -->

      <?php 
        $query = new WP_Query( array ( 'post_type' => 'post', 'order' => 'date', 'posts_per_page' => 8) );

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
