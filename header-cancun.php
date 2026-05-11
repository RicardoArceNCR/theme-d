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
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php //wp_head(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infierno en la estancia migratoria de Cancún. Casos de extorsión y violencia</title>
    <meta name="description" content="Es común que ambos, turistas y migrantes, sean víctimas de detenciones arbitrarias y encierros largos y tortuosos en la estancia migratoria que el Instituto Nacional de Migración tiene en Cancún" />
    <meta name="keywords" content="Connectas, ICFJ, ruta migrante, INM Méxoco, migrantes, Cancún" />
    <meta name="author" content="@ConnectasOrg" />
    <meta itemprop="name" content="Infierno en la estancia migratoria de Cancún. Casos de extorsión y violencia" />
    <meta itemprop="description" content="Es común que ambos, turistas y migrantes, sean víctimas de detenciones arbitrarias y encierros largos y tortuosos en la estancia migratoria que el Instituto Nacional de Migración tiene en Cancún" />
    <meta itemprop="image" content="https://www.connectas.org/especiales/infierno-en-la-estancia-migratoria-de-cancun/media//images/social.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@ConnectasOrg" />
    <meta name="twitter:title" content="Infierno en la estancia migratoria de Cancún. Casos de extorsión y violencia" />
    <meta name="twitter:description" content="Es común que ambos, turistas y migrantes, sean víctimas de detenciones arbitrarias y encierros largos y tortuosos en la estancia migratoria que el Instituto Nacional de Migración tiene en Cancún" />
    <meta name="twitter:image" content="https://www.connectas.org/especiales/infierno-en-la-estancia-migratoria-de-cancun/media//images/social.jpg">
    <meta property="og:title" content="Infierno en la estancia migratoria de Cancún. Casos de extorsión y violencia" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.connectas.org/especiales/infierno-en-la-estancia-migratoria-de-cancun/" />
    <meta property="og:image" content="https://www.connectas.org/especiales/infierno-en-la-estancia-migratoria-de-cancun/media//images/social.jpg" />
    <meta property="og:description" content="Es común que ambos, turistas y migrantes, sean víctimas de detenciones arbitrarias y encierros largos y tortuosos en la estancia migratoria que el Instituto Nacional de Migración tiene en Cancún" />
    <meta property="og:site_name" content="Infierno en la estancia migratoria de Cancún. Casos de extorsión y violencia" />
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/4e5a4c96dc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martel:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="https://connectas.org/wp-content/uploads/2015/02/favicon-2.ico" />

    <link href="https://www.divergentes.com/wp-content/themes/divergentes/infierno-en-la-estancia-migratoria-de-cancun/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://www.divergentes.com/wp-content/themes/divergentes/infierno-en-la-estancia-migratoria-de-cancun/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-P2MB746CNJ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-P2MB746CNJ');
    </script> -->
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
                    <img src="https://www.divergentes.com/wp-content/uploads/2021/08/logo-divergentes.svg" width="175" class="d-inline-block align-top" alt="Divergentes">
                </a>
            </div>
            <div class="col-sm-2 col-md-4 d-flex justify-content-center align-items-center">
            </div>
        </div>
    </div>
</header>