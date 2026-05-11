<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package divergentes
 */

?>
<footer class="diverv2-footer" style="padding: 10px;">
    <div  class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center pt-3">
                <?php echo do_shortcode('[Sassy_Follow_Icons social_networks="facebook=https://www.facebook.com/DivergentesCA,twitter=https://twitter.com/DivergentesCA,instagram=https://www.instagram.com/divergentes_ca,tiktok=https://www.tiktok.com/@divergentes_ca,youtube=https://www.youtube.com/@DivergentesCA,whatsapp=https://whatsapp.com/channel/0029VaOKFBhDDmFaVGp8Ox1m" shape="round"]') ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'depth'          => 2, // 1 = no dropdowns, 2 = with dropdowns.
			'container'      => false,
			'menu_class'     => '',
			'items_wrap'     => '<ul id="bootscore-navbar" class="nav col-12 col-md-auto justify-content-center  menu-footer ocultar-movil mt-4 mb-2 mb-md-0 %2$s">%3$s</ul>',
			'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
			'walker'         => new WP_Bootstrap_Navwalker(),
		) );
		?>
    </div>
    <div class="container">
        <div class="col-12 mt-3">
            <p>© 2020 - <?php echo date( "Y" ); ?> DIVERGENTES. Todos los derechos reservados. Esta publicación puede ser
                utilizada, total o parcialmente, con previa autorización de la dirección del medio, se deben respetar
                los créditos de producción y adjuntar un enlace a la publicación original. Envíe una solicitud a <a href="mailto:info@divergentes.com">info@divergentes.com</a>
            </p>
        </div>
    </div>
</footer>
<!--<div class="fly-to-top back-to-top">
    <i class="fa fa-angle-up fa-3"></i>
    <span class="to-top-text">Ir Arriba</span>
</div>-->



<?php wp_footer(); ?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/divergentesv2.js"></script>

<script>
    window.onscroll = function () {
        let scroll = window.scrollY;

        if (scroll > 180 && window.innerWidth > 992) {
            document.querySelector('.stickytop').classList.add('sticky-top', 'top-nav');
            document.querySelector('.logo-sticky').classList.remove('d-none');
        } else if(scroll < 160){
            document.querySelector('.stickytop').classList.remove('sticky-top', 'top-nav');
            document.querySelector('.logo-sticky').classList.add('d-none');
        }
    }

    window.onresize = function () {
        let width = window.innerWidth;

        if (width < 992) {
            //document.querySelector('.stickytop').classList.add('fixed-top');
            //document.querySelector('.logo-sticky').classList.add('d-none');
        }
    }



/*    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 100) {
            $("#top-menu-sticky").addClass("activar-sticky");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("#top-menu-sticky").removeClass("activar-sticky");
        }
    });*/
</script>

<!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1297655074675286');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1297655074675286&ev=PageView&noscript=1"
    /></noscript>
<!-- End Meta Pixel Code -->

</body>
</html>
