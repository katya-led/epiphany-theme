<?php
/* Template Name: Contacts Page */

get_header(); ?>
  <div class="content">
    <?php

    get_sidebar(); ?>
    <div class="content-main">
      <div class="comment-form">
        <div class="comment-form__inner">
          <h1 class="comment-form__title">Feel free to contact me!</h1>
          <p class="comment-form__text">For any questions or enquiries, feel free to e-mail me at <a href="mailto:eliscooper@gmail.com">eliscooper@gmail.com</a> or use the contact form.</p>
          <input type="text" class="comment-form__info" placeholder="Name">
          <input type="text" class="comment-form__info" placeholder="E-mail">
          <input type="text" class="comment-form__info" placeholder="Website url">
          <textarea name="" id="" class="comment-form__info" placeholder="Message"></textarea>
          <div class="comment-form__btn-wrapper"><button class="btn  btn--wide  comment-form__btn">Post comment</button></div>
        </div>
      </div>
    </div>
  </div>
<?php

get_footer();
