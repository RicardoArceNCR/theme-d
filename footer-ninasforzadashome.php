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
(function() {

'use strict';

// define variables
var items = document.querySelectorAll(".timeline-ormu li");

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
  
</script>
<script>
  wow = new WOW(
		{
			offset: 400,          // default
		}
	)
	wow.init();


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
    
    // var Mapa = document.getElementById("Capa_1");
    // var countMap = 1;

    var runNumber_1 = document.getElementById("runNumber_1");
    //var runNumber_2 = document.getElementById("runNumber_2");
    var isLoadRunNumber_1 = false;
    //var isLoadRunNumber_2 = false;
    window.addEventListener("load", function() {

        window.addEventListener("scroll", function() {
            var scrollTop = $(this).scrollTop();

            // if(Utils.isElementInView(Mapa)){
            //     var fOpacity_1 = Mapa.querySelector("g#fondo-opacity-1");
            //     let initial = 500;
            //     for(var i=7; i > countMap; i--){
            //         var two = document.getElementById($(Mapa).attr('id')+'_'+i);
            //         $(two).delay(initial).queue(function(next){
            //             $(this).addClass('covid-intro-arriba');
            //             next();
            //         });
            //         initial = initial+400;
            //     }
            // }

            if(Utils.isElementInView(runNumber_1) && !isLoadRunNumber_1){
                isLoadRunNumber_1 = true;
                runNumber(runNumber_1);
            }
            // if(Utils.isElementInView(runNumber_2) && !isLoadRunNumber_2){
            //     isLoadRunNumber_2 = true;
            //     runNumber(runNumber_2);
            // }
        })
    });
    function runNumber(element){
        let elmentsRunNumber = $(element).children().has("span.run-number");
        console.log(element)
        console.log(elmentsRunNumber)
        elmentsRunNumber.each(function(){
            let child = this.querySelector("span.run-number")
            console.log(child)
            let NUMBER = 0;
            let caracter = "";
            if($(child).data('number') !== undefined){
                NUMBER = $(child).data('number');
                caracter = $(child).data('caracter') !== undefined ? $(child).data('caracter'):"";
            }else{
                NUMBER = $(child).html();
            }
            
            let count = 0;

            let interval = (NUMBER > 300) ? (NUMBER > 1000) ? 0.1:3 : 20;
            var countdown = setInterval(function () {
                if(NUMBER > count){
                  if(NUMBER > 10000)
                    count = count+800;
                  else
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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167058458-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167058458-1');
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

<?php wp_footer(); ?>
</body>

</html>
