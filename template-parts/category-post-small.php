<article class="category">
  <div class="category__img-wrapper"><a href="#" class="category__img-link">
          <?php 
            the_post_thumbnail("small");
          ?>
            
          </a></div>
  <div class="category__inner">
    <a href="<?php the_permalink(); ?>" class="category__img-link">
      <h1 class="category__title"><?php the_title(); ?></h1>

      <p class="category__text">

        <?php 
        if (is_single()) {
          echo get_the_content();

        }
        else {
          echo get_the_excerpt();
        }
         ?>
        
      </p>
    </a>
    <footer class="category__footer">
      <div class="category__date-day"><?php the_time('j M Y, D'); ?></div>
      <div class="category__comments"><a href="#" class="category__comments-link">17 comments</a></div>
    </footer>
    <div class="category__tag-list">
      <span class="category__tag"><a href="#" class="category__tag-link">places</a></span>
      <span class="category__tag"><a href="#" class="category__tag-link">aquarium</a></span>
    </div>
  </div>
</article>