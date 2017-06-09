<article class="new-category">
      <div class="new-category__img-wrapper">
        <?php 
            the_post_thumbnail("big");
          ?>
      </div>
      <div class="new-category__inner">
        <h1 class="new-category__title"><?php the_title(); ?></h1>
        <p class="new-category__text"> 

        <?php 
        if (is_single()) {
          echo get_the_content();

        }
        else {
          echo get_the_excerpt();
        }
         ?>

          </p>
        <div class="new-category__btn-wrapper"><a href="<?php the_permalink(); ?>" class="btn  new-category__link">continue reading</a></div>
        <footer class="new-category__footer">
          <div class="new-category__date-day"><?php the_time('j M Y, D'); ?></div>
          <div class="new-category__comments"><a href="#" class="new-category__comments-link">15 comments</a></div>
        </footer>
      </div>
      <div class="single-post__tag-list">
        <span class="single-post__tag"><a href="#" class="single-post__tag-link">places</a></span>
       <?php
if(get_the_tag_list()) {
    echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
}
?>
      </div>
    </article>