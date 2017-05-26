<article class="category">
  <div class="category__img-wrapper"><a href="#" class="category__img-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arch-image-5.jpg" alt="photo" class="category__img"></a></div>
  <div class="category__inner">
    <a href="#">
      <h1 class="category__title"><?php the_title(); ?></h1>
      <p class="category__text"><?php echo get_the_content(); ?></p>
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