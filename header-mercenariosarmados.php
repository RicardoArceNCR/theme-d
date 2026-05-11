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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="175" class="d-inline-block align-top" alt="Divergentes">
                    </a>
                </div>
                <div class="col-sm-2 col-md-4 d-flex justify-content-center align-items-center">

                </div>
            </div>
        </div>
    </header>