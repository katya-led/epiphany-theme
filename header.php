<?php
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link href="https://fonts.googleapis.com/css?family=Lato|Ubuntu:400,500" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

  <!--DEV <meta name="viewport" content="width=1000"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Document</title>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header class="page-header">
  <div class="page-header__inner">
    <div class="main-nav">
      <nav id="menudown" class="main-nav__nav">
        <ul class="main-nav__list">
          <li class="main-nav__item main-nav__item--active"><a class="main-nav__link" href="#">Home</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="index.html">Pages</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="interior.html">Interior</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="arch.html">Architecture</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="travel.html">Travel</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="food.html">Food</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="about.html">About me</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="contacts.html">Contact</a></li>
        </ul>
      </nav>
    </div>
    <div class="page-header__socials">
      <a class="page-header__socials-link  page-header__socials-link--tw" href="#"><svg class="icon" width="18" height="18"><use xlink:href="#menu-twitter"></use></svg></a>

      <a class="page-header__socials-link  page-header__socials-link--fb" href="#"><svg class="icon" width="18" height="18"><use xlink:href="#menu-facebook"></use></svg></a>

      <a class="page-header__socials-link  page-header__socials-link--pin" href="#"><svg class="icon" width="18" height="18"><use xlink:href="#menu-pinterest"></use></svg></a>

      <a class="page-header__socials-link  page-header__socials-link--vimeo" href="#"><svg class="icon" width="18" height="18"><use xlink:href="#menu-vimeo"></use></svg></a>

      <a class="page-header__socials-link  page-header__socials-link--inst" href="#"><svg class="icon" width="18" height="18"><use xlink:href="#menu-instagram"></use></svg></a>
    </div>
  </div>
  <div id="menutrigger" class="main-nav__toggle"><a href="" class="main-nav_toggle-link"><span class="main-nav__hamburger"></span></a></div>
</header>

<div class="logo">
  <div class="logo__inner">
    <div class="logo__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo"></div>
  </div>
</div>