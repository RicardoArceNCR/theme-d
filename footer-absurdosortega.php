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

<footer>
    <div class="container">
        <p>©️ TODOS LOS DERECHOS RESERVADOS. MANAGUA, NICARAGUA. JULIO 2021. Esta publicación puede ser utilizada, total o parcialmente, con previa autorización de la dirección del medio, se deben respetar los créditos de producción y adjuntar un enlace
            a la publicación original. Envíe una solicitud a info@divergentes.com</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer_logosvg.svg" alt="Divergentes" class="my-3" width="175" />
        <p>Todos los derechos reservados ©️ 2020 - 2021</p>
    </div>
</footer>
<div class="fly-to-top back-to-top">
    <i class="fa fa-angle-up fa-3"></i>
    <span class="to-top-text">Ir Arriba</span>
</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<!-- Jarallax -->
<script src="https://unpkg.com/jarallax@1/dist/jarallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fixto.min.js"></script>
<script>
    $('.back-to-top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    $( window ).on( 'scroll', function() {
        if ($( window ).scrollTop() > 10) {
            $( 'header' ).addClass( 'bg-header' );
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $( 'header' ).removeClass( 'bg-header' );
        }
    });
</script>

<script type="text/javascript">

    function Utils() {
    }
    if (window.innerWidth > 575) {
        Utils.prototype = {
            constructor: Utils,
            isElementInView: function (element, fullyInView) {
                var elementParent = $(element).closest('section');
                var absurdosortega_svg = elementParent[0].querySelector("div.absurdosortega-0-svg");
                var nameElement = elementParent[0].querySelector("div.absurdosortega-texto");
                //var nameElement = $(element).attr('id')+'-text';
                //var two = document.getElementById(nameElement);
                element = nameElement;

                var pageTop = $(window).scrollTop();
                var pageBottom = pageTop + $(window).height();
                var elementTop = $(element).offset().top;
                var elementBottom = elementTop + $(element).height();

                if (fullyInView === true) {
                    return ((pageTop < elementTop) && (pageBottom > elementBottom));
                } else {
                    if((elementTop <= pageBottom) && (elementBottom >= pageTop)){
                        //var elementParent = $(element).closest('section');
                        var elementParentHeight = $(absurdosortega_svg).height() + $(nameElement).height() + 200 ;
                        var newHeight = (100 * elementParentHeight) / window.innerHeight;
                        newHeight = newHeight;
                        newHeight = `${newHeight}vh`;
                        $(elementParent).css({
                            height: newHeight,
                        });

                        /*var elementParent = $(element).closest('section');
                        var elementParentHeight = $(element).height() + window.innerHeight;
                        var newHeight = (100 * elementParentHeight) / window.innerHeight;
                        newHeight = 120 + newHeight;
                        newHeight = `${newHeight}vh`;
                        $(elementParent).css({
                            height: newHeight,
                        });*/
                    }
                    return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
                }
            },
            createOpacity: function(element, StartOpacity = false, firstElement = false){
                let OPACITY_MAX = 0.9;
                /*if($(element).attr('id') == "fondo-opacity-5")
                    OPACITY_MAX = 0.6;*/
                let transparencia = window.scrollY / window.innerHeight * 1
                transparencia = transparencia < OPACITY_MAX ? transparencia : OPACITY_MAX;

                var elementParent = $(element).closest('section');
                var absurdosortega_svg = elementParent[0].querySelector("div.absurdosortega-fondo_texto");

                /*var nameElement = $(element).attr('id')+'-text';
                var two = document.getElementById(nameElement);*/
                var two = elementParent[0].querySelector("div.absurdosortega-texto");

                var r = $(two),
                    wh = $(window).height(),
                    dt = $(document).scrollTop(),
                    redView  = wh - (r.offset().top - dt);
                var oP = Math.min(1 / wh * redView, 1);
                var speet = oP*0.30;
                oP = (oP+speet);

                if(!StartOpacity){

                    if(firstElement && (0+transparencia)>OPACITY_MAX )
                        return false;
                    if(!firstElement && oP>OPACITY_MAX )
                        transparencia = OPACITY_MAX; //return false;

                    $(absurdosortega_svg).css({
                        opacity: function(){
                            return oP;
                            /*if(firstElement){
                                return 0 + transparencia;
                            }else{
                                //console.log( oP );
                                return oP;
                            }*/
                        }
                    });
                }else{
                    $(absurdosortega_svg).css({
                        //opacity: OPACITY_MAX
                        opacity: 0
                    });
                }
            },
            validateOpacity: function(element, firstElement = false){
                var isElementInView = Utils.isElementInView(element, false);
                if (isElementInView) {
                    Utils.createOpacity(element, false, firstElement);
                    //console.log('in view');
                } else {
                    Utils.createOpacity(element, true);
                    //console.log(false);
                }
            },
        };



        var Utils = new Utils();

        //var a = document.getElementById("svg-01");
        window.addEventListener("load", function() {

            //var fOpacity_1 = document.getElementById("absurdosortega-1");
            /*var fOpacity_1 = a.querySelector("g#fondo-opacity-1");
            var fOpacity_2 = b.querySelector("g#fondo-opacity-2");*/

            window.addEventListener("scroll", function() {
                var scrollTop = $(this).scrollTop();

                Utils.validateOpacity(document.getElementById("absurdosortega-1"));
                Utils.validateOpacity(document.getElementById("absurdosortega-2"));
                Utils.validateOpacity(document.getElementById("absurdosortega-3"));
                Utils.validateOpacity(document.getElementById("absurdosortega-4"));
                Utils.validateOpacity(document.getElementById("absurdosortega-5"));
                Utils.validateOpacity(document.getElementById("absurdosortega-6"));
                Utils.validateOpacity(document.getElementById("absurdosortega-7"));
                Utils.validateOpacity(document.getElementById("absurdosortega-8"));
                Utils.validateOpacity(document.getElementById("absurdosortega-9"));
                Utils.validateOpacity(document.getElementById("absurdosortega-10"));
            })

        });
    }

    $(function() {
        if (window.innerWidth > 575) {
            //hljs.initHighlightingOnLoad();
            $('.absurdosortega-0-svg').fixTo('.absurdosortega-0', {
                    top: 0
                }

            );
        }

    });
    // $(document).ready(function(){

    //   var height2 = $('.justiciatransicion-0-svg').height();
    //   var height = $('.justiciatransicion-0').height()-height2;
    //   console.log(height);
    //   $( window ).scroll(function() {
    //     if (window.pageYOffset > height) {
    //       $('.justiciatransicion-0-svg').css('position', 'relative');
    //     } else {
    //       $('.justiciatransicion-0-svg').css('position', 'fixed');
    //     }
    //   });
    // })
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167058458-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-167058458-1');
</script>
<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
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
    <img height="1" width="1" src="https://www.facebook.com/tr?id=1193199667679233&ev=PageView
  &noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->

<?php wp_footer(); ?>
</body>

</html>