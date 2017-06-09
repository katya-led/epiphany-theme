<?php
/* Template Name: Category Page */

get_header();
?>
<div class="content">
  <?php

  get_sidebar(); ?>
  <div class="content-main">
    <article class="new-category">
      <div class="new-category__img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/big-post-arch.jpg" alt="photo" class="new-category__img"></div>
      <div class="new-category__inner">
        <h1 class="new-category__title">Brick houses photohunt</h1>
        <p class="new-category__text">In addition to its attractive appeal, durability makes brick siding a popular choice. Under normal conditions, brick siding will last the life of the building with little more than an occasional wash with the hose. Brick siding is generally not a structural part of a house but rather a veneer constructed on the outside. The bricks are held together with a mixture of Portland cement or lime, sand, and water that is referred to as mortar. </p>
        <div class="new-category__btn-wrapper"><a href="#" class="btn  new-category__link">continue reading</a></div>
        <footer class="new-category__footer">
          <div class="new-category__date-day">14.05.2016, thursday</div>
          <div class="new-category__comments"><a href="#" class="new-category__comments-link">15 comments</a></div>
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
    <div class="content-category">
<!-- category-post-small.php -->

      <?php 
        $query = new WP_Query( array ( 'post_type' => 'post', 'order' => 'date', 'posts_per_page' => 8) );

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
