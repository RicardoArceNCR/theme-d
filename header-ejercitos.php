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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/divergentes.css">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/4e5a4c96dc.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Averia+Sans+Libre&display=swap" rel="stylesheet"
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="fixed-top mb-5">
        <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center py-4 nav-top">
                <div class="col-sm-12 logo text-center">
                    <a class="" href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="175" class="d-inline-block align-top" alt="Divergentes">
                    </a>
                </div>

                </div>
            </div>
    </header>
