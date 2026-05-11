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
    <div class="container">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'depth'          => 2, // 1 = no dropdowns, 2 = with dropdowns.
			'container'      => false,
			'menu_class'     => '',
			'items_wrap'     => '<ul id="bootscore-navbar" class="nav flex-column col-12 col-md-auto menu-footer mt-4 mb-2 text-center mb-md-0 %2$s">%3$s</ul>',
			'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
			'walker'         => new WP_Bootstrap_Navwalker(),
		) );
		?>
        <div class="col-12 mt-3">
            <p>© <?php echo date( "Y" ); ?> DIVERGENTES. Todos los derechos reservados. Esta publicación puede ser
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
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 100) {
            $("header").addClass("bg-header");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("header").removeClass("bg-header");
        }
    });
</script>
<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1193199667679233');
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1"
         src="https://www.facebook.com/tr?id=1193199667679233&ev=PageView
  &noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</body>
</html>
