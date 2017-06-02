<article class="post">
  <div class="post__img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/list-post-5.jpg" alt="photo" class="post__img"></div>
  <div class="post__inner">
    <a href="#" class="post__link">
      <h1 class="post__title"><?php the_title(); ?></h1>
      <p class="post__text"><?php echo get_the_content(); ?></p>
    </a>
    <footer class="post__footer">
      <div class="post__date-day"><?php the_time('j M Y, D'); ?></div>
      <div class="post__comments"><a href="#" class="post__comments-link">17 comments</a></div>
    </footer>

    <div class="post__tag-list">
      <span class="post__tag"><a href="#" class="post__tag-link">places</a></span>
      <span class="post__tag"><a href="#" class="post__tag-link">aquarium</a></span>
      <span class="post__tag"><a href="#" class="post__tag-link">ocean</a></span>
      <span class="post__tag"><a href="#" class="post__tag-link">world</a></span>
      <span class="post__tag"><a href="#" class="post__tag-link">photography</a></span>
      <span class="post__tag"><a href="#" class="post__tag-link">where to go</a></span>
      <span class="post__tag"><a href="#" class="post__tag-link">weekend</a></span>
    </div>
  </div>
</article>