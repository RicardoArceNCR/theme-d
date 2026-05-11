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


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/divergentes.css">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/4e5a4c96dc.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="fixed-top mb-5">
        <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center py-1 nav-top">
                <div class="col-sm-3 col-md-4 pt-1 social-i">
                    <div class="d-none d-md-block">
                    <a href="<?php echo get_site_url(); ?>" title="Home"><i class="fas fa-home"></i></a>
                    <a href="https://www.facebook.com/DivergentesCA/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/DivergentesCA" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-sm-7 col-md-4 logo text-center">
                    <a class="" href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.svg" width="175" class="d-inline-block align-top" alt="Divergentes">
                    </a>
                </div>
                <div class="col-sm-2 col-md-4 d-flex justify-content-center align-items-center">
                    <!-- <div class="outer-menu">
                        <input class="checkbox-toggle" type="checkbox" />
                        <div class="mhonduras hamburger">
                            <div></div>
                        </div>
                        <div class="menu">
                            <div>
                                <div>
                                    <ul>
                                        <li><a href="#fuerte-rumor-funebre" class="menu-close"><span>I.</span> Hay un fuerte rumor fúnebre</a></li>
                                        <li><a href="#welcome-to-nicaragua" class="menu-close"><span>II.</span> “Welcome to Nicaragua!”</a></li>
                                        <li><a href="#marcha-politica" class="menu-close"><span>III.</span> Primera medida:
                                                una marcha política</a></li>
                                        <li><a href="#ortega-el-ausente" class="menu-close"><span>IV.</span> Ortega, el ausente</a></li>
                                        <li><a href="#mundo-magico-rosario" class="menu-close"><span>V.</span> El mundo mágico de Rosario Murillo</a></li>
                                        <li><a href="#rebelion-medica" class="menu-close"><span>VI.</span> Rebelión médica</a></li>
                                        <li><a href="#falso-profeta" class="menu-close"><span>VII.</span> El falso profeta que conjura el virus</a></li>
                                        <li><a href="#trigesimo-cuarto-dia-aparecio" class="menu-close"><span>VIII.</span> Al trigésimo cuarto día, apareció</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <a class="nav-link btn-divergentes ml-2" href="#">SER PARTE</a>
        <a class="nav-link btn-light ml-2" href="#">INICIAR SESIÓN</a> -->

                </div>
            </div>
        </div>
    </header>
