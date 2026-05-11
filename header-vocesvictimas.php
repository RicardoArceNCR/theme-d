<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package divergentes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/divergentes.css">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/4e5a4c96dc.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/vientos-eta.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/img/eta/stylesheet.css" rel="stylesheet">
    <style>
        .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet::before, .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet, [class^=swiper-button-] {
  transition: all 0.3s ease;
}

*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.swiper-container {
  width: 100%;
  height: auto;
  transition: opacity 0.6s ease;
}
.swiper-container.swiper-container-coverflow {
  padding-top: 2%;
}
.swiper-container.loading {
  opacity: 0;
  visibility: hidden;
}
.swiper-container:hover .swiper-button-prev,
.swiper-container:hover .swiper-button-next {
  transform: translateX(0);
  opacity: 1;
  visibility: visible;
}

.swiper-slide {
    width: 276px;
    height: auto;
    position: relative;
}
.swiper-slide .entity-img {
  width: 100%;
  height: auto;
}
.swiper-slide .content {
  font-family: "Gotham Pro" !important;
  color: #fff;
}
.swiper-slide .content .title {
    padding: 8px 0;
    background-color: #D83850;
    font-size: 1.2em;
    text-align: center;
    margin-bottom: 4px;
}
.swiper-slide .content .caption {
  font-size: 14px;
  color: white;
  padding: 6px;
}

[class^=swiper-button-] {
  width: 44px;
  opacity: 0;
  visibility: hidden;
}

.swiper-button-prev {
  transform: translateX(50px);
}

.swiper-button-next {
  transform: translateX(-50px);
}

.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 0 9px;
  position: relative;
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 0.4;
}
.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  width: 18px;
  height: 18px;
  transform: translate(-50%, -50%);
  border: 0px solid #fff;
  border-radius: 50%;
}
.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet:hover, .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active {
  opacity: 1;
}
.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active::before {
  border-width: 1px;
}

@media (max-width: 559px) {
    .swiper-slide {
    width: 50% !important;
}
.swiper-container {
  width: 90%;
}
.swiper-slide .content .title {
    font-size: 0.8em;
    padding: 4px 8px;
}
.swiper-slide .content .caption {
    font-size: 13px;
    color: white;
    padding: 6px;
    text-align: left;
}
}

        </style>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="eta fixed-top" id="header">
        <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center py-4 nav-top">
                <div class="col-sm-3 col-md-4 pt-1 social-i">
                    <a href="<?php echo get_site_url(); ?>" title="Home"><i class="fas fa-home"></i></a>
                    <a href="https://www.facebook.com/DivergentesCA/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/DivergentesCA" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="col-sm-7 col-md-4 logo text-center">
                    <a class="" href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.svg" width="175" class="d-inline-block align-top" alt="Divergentes">
                    </a>
                </div>
                <div class="col-sm-2 col-md-4 d-flex justify-content-center align-items-center">

                </div>
            </div>
        </div>
    </header>