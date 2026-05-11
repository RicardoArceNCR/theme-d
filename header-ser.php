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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <style>
body.post-template-divergentes-ser {
    margin-top: 0px !important;
}
.ser {
    background: #000 url(https://www.divergentes.com/wp-content/uploads/2022/06/fondo.jpg) no-repeat top center;
    -webkit-background-size: contain;
    -moz-background-size: contain;
    -o-background-size: contain;
    background-size: contain;
    min-height: 100vh;
    height: auto;
    margin: 0;
    padding-top: 90px;
    width: 100%;
    height: auto;
    min-height: 100vh;
}
.img-fluid {
    max-width: 90%;
    height: auto;
    float: right;
}
.texto-ser p {
    font-family: 'Montserrat', sans-serif !important;
    color: #FFFFFF;
    font-size: 1rem !important;
    line-height: 1.4rem;
}
.linea-textoser {
    width: 100%;
    height: 10px;
    background: #E83347;
}
.videos-ser p {
    font-family: 'Montserrat', sans-serif !important;
    color: #FFFFFF;
    margin-top: 9px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.1rem !important;
}
.modal.modal-fullscreen2 .modal-dialog {
    width: 75%;
    max-width: 937px !important;
    height: auto;
    margin: 0 auto;
    padding: 0;
    max-width: none;
}
.modal.modal-fullscreen2 .modal-body {
    padding: 0;
}
#servideos p {
    color: white;
}
.videos-ser .col-md-4 {
    cursor: pointer;
}
.videos-ser .col-md-4 img{
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
}
.videos-ser .col-md-4 img:hover{
    transform: scale(1.1);
}
.btn-ser {
    font-family: 'Montserrat', sans-serif !important;
    font-weight: bolder;
    color: #FFFFFF;
    text-transform: uppercase;
    background:none;
    border: none;
}
.btn-ser-cerrar {
    font-family: 'Montserrat', sans-serif !important;
    font-weight: bolder;
    color: #FFFFFF;
    text-transform: uppercase;
    border-radius: 26px;
    border: solid 1px #FFFFFF;
    padding: 2px 12px;
    background: none;
}
.bg-header-ser {
    background: #FFFFFF;
}
@media (min-width: 1200px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl {
        max-width: 1000px;
    }
}
@media (min-width: 768px) {
    .col-md-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
        padding: 22px;
    }
}
@media (max-width: 575.98px) {
    .container {
        width: 100%;
        padding-right: 40px;
        padding-left: 40px;
        margin-right: auto;
        margin-left: auto;
    }
    .col-md-4 {
        margin-top: 24px;
    }
    header.serhead{
        background-color: #FFFFFF !important;
    }
    .serhead .logo {
        padding-top: .2rem;
        padding-bottom: 1.2rem;
    }
    .btn-ser, .btn-ser-cerrar {
        font-size: 12px;
    }
}
        </style>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="serhead fixed-top" id="header">
        <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center nav-top">
                <div class="col-sm-3 col-md-4 pt-1 social-i">
                      </div>
                <div class="col-sm-7 col-md-4 logo text-center">
                    <a class="" href="<?php echo get_site_url(); ?>">
                        <img src="https://www.divergentes.com/wp-content/themes/divergentes/img/v2/logo_diver.svg" width="242" class="d-inline-block align-top" alt="Divergentes">
                    </a>
                </div>
                <div class="col-sm-2 col-md-4 d-flex justify-content-center align-items-center">

                </div>
            </div>
        </div>
    </header>