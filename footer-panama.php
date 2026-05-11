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
        <p>©️ TODOS LOS DERECHOS RESERVADOS. MANAGUA, NICARAGUA. OCTUBRE 2020. Esta publicación puede ser utilizada, total o parcialmente, con previa autorización de la dirección del medio, se deben respetar los créditos de producción y adjuntar un enlace
            a la publicación original. Envíe una solicitud a info@divergentes.com</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer_logosvg.svg" alt="Divergentes" class="my-3" width="175" />
        <p>Todos los derechos reservados ©️ 2020</p>
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
<script src="https://cdn.jsdelivr.net/npm/swiper@6.8.1/swiper.cjs.min.js"></script>
<!-- Jarallax -->
<script src="https://unpkg.com/jarallax@1/dist/jarallax.min.js"></script>

<script type="text/javascript">
$("#pinata").click(function() {
    console.log('click quebrar')
    $(this).attr("src", "https://www.divergentes.com/wp-content/themes/divergentes/img/panama/pinata-quebrada2.svg");
});


function Utils() {

}

Utils.prototype = {
    constructor: Utils,
    isElementInView: function (element, fullyInView) {
        var pageTop = $(window).scrollTop();
        var pageBottom = pageTop + $(window).height();
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return ((pageTop < elementTop) && (pageBottom > elementBottom));
        } else {
            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        }
    },
    isElementInView2: function (element, fullyInView) {
        var pageTop = $(window).scrollTop();
        var pageBottom = pageTop + $(window).height();
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return ((pageTop < elementTop) && (pageBottom > elementBottom));
        } else {
            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        }
    }
};

var Utils = new Utils();



    var a = document.getElementById("alphasvg");

    // It's important to add an load event listener to the object,
    // as it will load the svg doc asynchronously
    a.addEventListener("load", function() {

        // get the inner DOM of alpha.svg
        var svgDoc = a.contentDocument;
        // get the inner element by id
        var deltaa = svgDoc.getElementById("EDIFICIO_2");
        var deltab = svgDoc.getElementById("EDIFICIO_3");
        var edificioa = 930;
        var edificiob = 301;


        window.addEventListener("scroll", function() {
            let pageY = window.pageYOffset;
            pageY = pageY / 5;
            pageA = pageY + edificioa;
            pageB = edificiob - pageY ;
            $(deltaa).attr('transform', "translate("+pageA+", 130.2)");
            $(deltab).attr('transform', "translate("+pageB+", 38.86)");
            //delta.style.webkitTransform = "translate("+pageY+"px)";
          
var isElementInView = Utils.isElementInView($('#edificio-quiebra'), false);  
if (isElementInView) {
    setTimeout('$("#edificio-quiebra").attr("src", "https://www.divergentes.com/wp-content/themes/divergentes/img/panama/EDIFICION-QUIEBRA.svg");',500); 
    console.log('in view');
} else {
    console.log('out of view');
    setTimeout('$("#edificio-quiebra").attr("src", "https://www.divergentes.com/wp-content/themes/divergentes/img/panama/EDIFICION-FULL.svg");',500); 
}
var isElementInView2 = Utils.isElementInView2($('#pinata-quebrar'), false);  
if (isElementInView2) {
    setTimeout('$("#pinata").attr("src", "https://www.divergentes.com/wp-content/themes/divergentes/img/panama/pinata-quebrada2.svg");',500); 
    console.log('in view2');
} else {
    console.log('out of view2');
    setTimeout('$("#pinata").attr("src", "https://www.divergentes.com/wp-content/themes/divergentes/img/panama/pinata.svg");',500); 
}

        })



        // add behaviour
        //     var $w = $(window);
        // $w.scroll(function(){
        //   $(delta).style.msTransform = "translate('+ +')";
        // });
        // function formula400(){
        //   return Math.sin($w.scrollTop()/100)*100
        // }
        //     // delta.addEventListener("mousedown",function(){
        //         alert('hello world!')
        // }, false);
    }, false);
</script>
<script type="text/javascript">
(function() {

'use strict';

// define variables
var items = document.querySelectorAll(".timeline-panama li");

// check if an element is in viewport
// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function callbackFunc() {
  for (var i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      items[i].classList.add("in-view");
    }
  }
}

// listen for events
window.addEventListener("load", callbackFunc);
window.addEventListener("resize", callbackFunc);
window.addEventListener("scroll", callbackFunc);

})();
</script>
<script>
    $('.back-to-top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    new WOW().init();
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