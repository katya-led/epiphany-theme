<?php
/* Template Name: About Page */

get_header(); ?>

<div class="content">
<?php
get_sidebar();?>

  <div class="content-main">
      <article class="single-post">
        <div class="single-post__img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-image.jpg" alt="photo" class="single-post__img"></div>
        
        <div class="single-post__inner">

          <h1 class="single-post__title"></h1>

          <div class="single-post__text">  </div>

          <footer class="single-post__footer">
            <div class="single-post__date-day">14.05.2016, thursday</div>
            <div class="single-post__socials">
              <p class="single-post__socials-text">share:</p>
              <div class="single-post__socials-wrapper">
                <a class="single-post__socials-link  single-post__socials-link--tw" href="#"><svg class="icon" width="18" height="18"><use xlink:href="#menu-twitter"></use></svg></a>

                <a class="single-post__socials-link  single-post__socials-link--fb" href="#"><svg class="icon" width="18" height="18"><use xlink:href="#menu-facebook"></use></svg></a>

                <a class="single-post__socials-link  single-post__socials-link--pin" href="#"><svg class="icon" width="18" height="18"><use xlink:href="#menu-pinterest"></use></svg></a>

                <a class="single-post__socials-link  single-post__socials-link--vimeo" href="#"><svg class="icon" width="18" height="18"><use xlink:href="#menu-vimeo"></use></svg></a>

                <a class="single-post__socials-link  single-post__socials-link--inst" href="#"><svg class="icon" width="18" height="18"><use xlink:href="#menu-instagram"></use></svg></a>
              </div>
            </div>
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
    </div>
</div>
<?php
get_footer();
