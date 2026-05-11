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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

    <script type="text/javascript">
        jQuery(document).ready(function($){
     $(window).on("scroll", function() {
            if ($(window).scrollTop() > 100) {
                $("header").addClass("bg-header");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $("header").removeClass("bg-header");
            }
        });
        });
    </script>

<link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
<script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>
<script>
    const players = Plyr.setup('.plyr__video-embed', {
        youtube: { noCookie: false, rel: 0, showinfo: 0, iv_load_policy: 3, modestbranding: 1 }
    });
    $.fn.isElementInView = function (){
        let element = this;
        let pageTop = $(window).scrollTop();
        let pageBottom = pageTop + $(window).height();
        let elementTop = $(element).offset().top;
        let elementBottom = elementTop + $(element).height();

        return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
    }

    window.addEventListener("scroll", function (keyframes, options) {
        //if (window.innerWidth > 575) {
            if ($('#vm-video-1').isElementInView()) {
                if (players[0].paused) {
                    players[0].play();
                }
            } else {
                if (players[0].playing)
                    players[0].pause();
            }
            if ($('#vm-video-2').isElementInView()) {
                if (players[1].paused) {
                    players[1].play();
                }
            } else {
                if (players[1].playing)
                    players[1].pause();
            }
        //}
    })
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
</body>
</html>
