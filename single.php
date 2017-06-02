<?php
/* Template Name: Single Page */

get_header(); ?>
<div class="content">
    <?php

    get_sidebar(); ?>
    <div class="content-main">

      <?php 

        if ( have_posts() ) {
          while (have_posts() ) {
            the_post(); 
            get_template_part( "template-parts/single-post"); 
            //
            // Post Content here
            //
          } // end while
        } // end if

        wp_reset_query();
      ?>


      <div class="comment-form">
        <div class="comment-form__inner">
          <h1 class="comment-form__title">Share your thoughts</h1>
          <input type="text" class="comment-form__info" placeholder="Name">
          <input type="text" class="comment-form__info" placeholder="E-mail">
          <input type="text" class="comment-form__info" placeholder="Website url">
          <textarea name="" id="" class="comment-form__info" placeholder="Message"></textarea>
          <div class="comment-form__btn-wrapper"><button class="btn  btn--wide  comment-form__btn">Post comment</button></div>
        </div>
      </div>
      <div class="comments">
        <div class="comments__inner">
          <h1 class="comments__title">Comments <span href="#" class="comments__number">(8)</span></h1>
          <div class="comments__wrapper">
            <article class="comments__item">
              <div class="comments__header">
                <div class="comments__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-post-lilian.jpg" alt="photo" class="comments__img"></div>
                <div class="comments__about">
                  <p class="comments__name">lilian richardson</p>
                  <p class="comments__time">15 minutes ago</p>
                </div>
              </div>
              <p class="comments__text">Really nice article. I would love to go there sometime. And the picture looks awesome!</p>
            </article>
            <article class="comments__item">
              <div class="comments__header">
                <div class="comments__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-post-Kenny.jpg" alt="photo" class="comments__img"></div>
                <div class="comments__about">
                  <p class="comments__name">Kenny Wood</p>
                  <p class="comments__time">28 minutes ago</p>
                </div>
              </div>
              <p class="comments__text">What kind of sharks are there?</p>
            </article>
            <article class="comments__item">
              <div class="comments__header">
                <div class="comments__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-post-Nora.jpg" alt="photo" class="comments__img"></div>
                <div class="comments__about">
                  <p class="comments__name">nora scott</p>
                  <p class="comments__time">33 minutes ago</p>
                </div>
              </div>
              <p class="comments__text">I did visit Ocean World last year. I took my kids as well, they were really content. Especially my daughter.</p>
            </article>
            <article class="comments__item">
              <div class="comments__header">
                <div class="comments__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-post-Terry.jpg" alt="photo" class="comments__img"></div>
                <div class="comments__about">
                  <p class="comments__name">Anna Thomson</p>
                  <p class="comments__time">41 minutes ago</p>
                </div>
              </div>
              <p class="comments__text">I heard they might close it somewhere soon. I could be wrong, though.</p>
            </article>
            <article class="comments__item">
              <div class="comments__header">
                <div class="comments__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-post-Susan.jpg" alt="photo" class="comments__img"></div>
                <div class="comments__about">
                  <p class="comments__name">susan Bruna</p>
                  <p class="comments__time">43 minutes ago</p>
                </div>
              </div>
              <p class="comments__text">Did you take this photo? So beautiful!</p>
            </article>
            <article class="comments__item">
              <div class="comments__header">
                <div class="comments__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-post-Viola.jpg" alt="photo" class="comments__img"></div>
                <div class="comments__about">
                  <p class="comments__name">Viola Smith</p>
                  <p class="comments__time">56 minutes ago</p>
                </div>
              </div>
              <p class="comments__text">Ocean World is one of my favourite places. Always happy to visit.</p>
            </article>
            <article class="comments__item">
              <div class="comments__header">
                <div class="comments__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-post-Sophie.jpg" alt="photo" class="comments__img"></div>
                <div class="comments__about">
                  <p class="comments__name">Sophie Bass</p>
                  <p class="comments__time">one hour ago</p>
                </div>
              </div>
              <p class="comments__text">Cool. I wanna go there already.</p>
            </article>
            <article class="comments__item">
              <div class="comments__header">
                <div class="comments__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-post-Terry.jpg" alt="photo" class="comments__img"></div>
                <div class="comments__about">
                  <p class="comments__name">terry moss</p>
                  <p class="comments__time">two hours ago</p>
                </div>
              </div>
              <p class="comments__text">Cool. I wanna go there already.</p>
            </article>
          </div>
        </div>
      </div>
      <div class="blog-nav">
        <div class="blog-nav__link-wrapper"><a class="blog-nav__link" href="#"><< newer posts</a></div>
        <div class="blog-nav__link-wrapper"><a class="blog-nav__link" href="#">older posts >></a></div>
      </div>
    </div>
  </div>
<?php

get_footer();
