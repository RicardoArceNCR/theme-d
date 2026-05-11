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
        <p>©️ TODOS LOS DERECHOS RESERVADOS. MANAGUA, NICARAGUA. Enero 2021. Esta publicación puede ser utilizada, total o parcialmente, con previa autorización de la dirección del medio, se deben respetar los créditos de producción y adjuntar un enlace a la publicación original. Envíe una solicitud a info@divergentes.com</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer_logosvg.svg" alt="Divergentes" class="my-3" width="175" />
        <p>Todos los derechos reservados ©️ 2020-2021</p>
    </div>
</footer>
<div class="fly-to-top back-to-top">
    <i class="fa fa-angle-up fa-3"></i>
    <span class="to-top-text">Ir Arriba</span>
</div>


<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script type="text/javascript">
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 200) {
            $("header").addClass("bg-header");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("header").removeClass("bg-header");
        }
    });
</script>
<script>
    var clickmas = document.getElementsByClassName('click-mas');
    var openmob = document.getElementsByClassName('no-covid2-2');

    $(clickmas).click(function() {
        console.log('click');
        $(openmob).css("display","block");
    });

    $('.back-to-top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    new WOW().init();
    $('#carouselRX').on('slide.bs.carousel', function(e) {
        /*
            CC 2.0 License Iatek LLC 2018 - Attribution required
        */
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 6;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                } else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });
   
    $(".menu-close").on('click', function() {
        $('.checkbox-toggle').prop("checked", false);
    });
</script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167058458-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167058458-1');
</script>

<script>
    function Utils() {}
    Utils.prototype = {
        constructor: Utils,
        isElementInView: function (element) {

            var pageTop = $(window).scrollTop();
            var pageBottom = pageTop + $(window).height();
            var elementTop = $(element).offset().top;
            var elementBottom = elementTop + $(element).height();

            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        },
    };
    var Utils = new Utils();
    
    var Mapa = document.getElementById("Capa_1");
    var countMap = 1;

    var runNumber_1 = document.getElementById("runNumber_1");
    var runNumber_2 = document.getElementById("runNumber_2");
    var isLoadRunNumber_1 = false;
    var isLoadRunNumber_2 = false;
    window.addEventListener("load", function() {

        window.addEventListener("scroll", function() {
            var scrollTop = $(this).scrollTop();

            if(Utils.isElementInView(Mapa)){
                var fOpacity_1 = Mapa.querySelector("g#fondo-opacity-1");
                let initial = 500;
                for(var i=7; i > countMap; i--){
                    var two = document.getElementById($(Mapa).attr('id')+'_'+i);
                    $(two).delay(initial).queue(function(next){
                        $(this).addClass('covid-intro-arriba');
                        next();
                    });
                    initial = initial+400;
                }
            }

            if(Utils.isElementInView(runNumber_1) && !isLoadRunNumber_1){
                isLoadRunNumber_1 = true;
                runNumber(runNumber_1);
            }
            if(Utils.isElementInView(runNumber_2) && !isLoadRunNumber_2){
                isLoadRunNumber_2 = true;
                runNumber(runNumber_2);
            }
        })
    });
    function runNumber(element){
        let elmentsRunNumber = $(element).children().has("h1.run-number");
        elmentsRunNumber.each(function(){
            let child = this.querySelector("h1.run-number")
            let NUMBER = 0;
            let caracter = "";
            if($(child).data('number') !== undefined){
                NUMBER = $(child).data('number');
                caracter = $(child).data('caracter') !== undefined ? $(child).data('caracter'):"";
            }else{
                NUMBER = $(child).html();
            }
            
            let count = 0;
            let interval = NUMBER > 300 ? 5 : 30;
            var countdown = setInterval(function () {
                if(NUMBER > count){
                    count++;
                    var num = count.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
                    $(child).html(num+caracter);
                }else{
                    clearInterval(countdown);
                }
                
            }, interval);

        });
    }
</script>
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window,document,'script',
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