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
<!-- Jarallax -->
<script src="https://unpkg.com/jarallax@1/dist/jarallax.min.js"></script>

<script type="text/javascript">
/*    jarallax(document.querySelectorAll('.jarallax'), {
        disableParallax: /iPad|iPhone|iPod|Android/
    });
    $('.alignfull').jarallax({
        speed: 0.2
    });*/
    var sectionFirst = new vidbg('#feat_video', {
        mp4: 'https://www.divergentes.com/wp-content/uploads/2021/12/Indigenas_1-2.mp4',
        poster: 'https://www.divergentes.com/wp-content/uploads/2021/12/DESTCADA-PORTADA.jpg',
    })
</script>
<script>
    jQuery(document).ready(function ($){
        $('.indigenas-mayagnas-cita').on('click', function (e){
            let text = $(this).data('text');
            let url = $(this).data('url');
            if(url === undefined || url === '')
                url = window.location.href
            let new_url = 'https://twitter.com/intent/tweet?url='+url+'&text='+text;
            window.open(new_url, '_blank');
        })
    })
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
