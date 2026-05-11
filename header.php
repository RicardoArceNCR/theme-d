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

	<?php wp_head(); ?>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--     <script src="https://kit.fontawesome.com/4e5a4c96dc.js" crossorigin="anonymous"></script>-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martel:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/36f1d044004de5b291dd6bdcf/091fca8d2501f1c0fffedaac0.js");</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container text-center my-4">
    <div class="d-none d-lg-block">
        <a href="https://www.divergentes.com/complices/" title="Complices Divergentes">
            <img src="https://www.divergentes.com/wp-content/uploads/2025/03/banner-home.jpg" alt="Complices Divergentes" class="img-fluid">
        </a>
    </div>
    <div class="d-block d-lg-none">
        <a href="https://www.divergentes.com/complices/" title="Complices Divergentes">
            <img src="https://www.divergentes.com/wp-content/uploads/2025/03/mobile.png" alt="Complices Divergentes" class="img-fluid">
        </a>
    </div>
</div>

<header class="nav-sticky-movil">
    <div class="container">
        <div class="row justify-content-md-center nav-top">
            <div class="col col-lg-4 d-flex justify-content-start align-items-center">
                <button type="button" class="btn" data-trigger="#sidenavmenu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <span class="date-top ocultar-movil"><?php setlocale( LC_ALL, "es_ES" );
					echo ucfirst( date_i18n( 'l j \d\e F \d\e Y' ) ); ?></span>

            </div>
            <div class="col-6 col-lg-4 p-0 text-center">
                <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/v2/logo_diver.svg"
                            alt="logo" class="logo_v2 md" width="242"></a>
            </div>
            <div class="col col-lg-4 d-flex justify-content-end align-items-center">
                <div class="d-block d-sm-none">
                    <a class="btn" data-toggle="collapse" href="#collapseSearch" role="button" aria-expanded="false"
                   aria-controls="collapseExample">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
                </div>
                <div class="d-none d-lg-block">
                <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
                </div>
            </div>
        </div>
<!--        <div class="row mt-1">
            <div class="d-sm-block d-md-none col cintillo-top d-flex align-items-center py-1">
<span class="date-top"><?php //setlocale( LC_ALL, "es_ES" );
	//echo ucfirst( date_i18n( 'l j \d\e F \d\e Y' ) ); ?></span>
            </div>
        </div>-->
        <div class="row mb-2 d-sm-block d-md-none collapse" id="collapseSearch">
            <div class="col-md-12">
				<?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
            </div>
        </div>
   </div>
</header>
<nav class="navbar navbar-expand-sm stickytop mt-4 mb-2 ">
    <div class="container">
        <li class="list-unstyled me-5">
            <a href="https://www.divergentes.com" title="Divergentes" >
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/v2/logoMenuSticky.svg" width="40px" height="37" class="d-none logo-sticky" alt="Divergentes"/>
            </a>
        </li>
		<?php
		wp_nav_menu( array(
			'theme_location'  => 'primary',
			'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
			'container'       => false,
			'menu_class'      => '',
			'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav col-12 col-md-auto menu-header justify-content-center ocultar-movil  %2$s">%3$s</ul>',
			'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			'walker'          => new WP_Bootstrap_Navwalker(),
		) );
		?>

<ul class="navbar-nav"></ul>
    </div>
</nav>

<b class="screen-overlay"></b>

<!-- offcanvas panel -->
<aside class="offcanvas" id="sidenavmenu">
    <header class="border-bottom text-center">
        <span class="btn-close btn-cerrarnav"> &times</span>
        <img
                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/v2/logo_diver.svg"
                alt="logo" class="logo_v2 md" width="242">
    </header>
    <div class="p-2 d-flex justify-content-center">
	<?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
    </div>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary-lateral',
		'depth'          => 2, // 1 = no dropdowns, 2 = with dropdowns.
		'container'      => false,
		'menu_class'     => '',
		'items_wrap'     => '<ul id="bootscore-navbar" class="nav flex-column col-12 col-md-auto menu-sidenav mt-4 mb-2 mb-md-0 %2$s">%3$s</ul>',
		'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
		'walker'         => new WP_Bootstrap_Navwalker(),
	) );
	?>
</aside>
<!-- offcanvas panel .end -->
