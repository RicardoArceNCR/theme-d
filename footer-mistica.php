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
        <p>©️ TODOS LOS DERECHOS RESERVADOS. MANAGUA, NICARAGUA. MAYO 2021. Esta publicación puede ser utilizada, total o parcialmente, con previa autorización de la dirección del medio, se deben respetar los créditos de producción y adjuntar un enlace
            a la publicación original. Envíe una solicitud a info@divergentes.com</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer_logosvg.svg" alt="Divergentes" class="my-3" width="175" />
        <p>Todos los derechos reservados ©️ 2020-2021</p>
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

<script src="<?php echo get_template_directory_uri(); ?>/js/jarallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fixto.min.js"></script>
<script type="text/javascript">

	$(function() {
		if (window.innerWidth > 575) {
			jarallax(document.querySelectorAll('.jarallax'), {
				speed: 0.2
			});
			//hljs.initHighlightingOnLoad();
			$('#videoportada').fixTo('.portada-mistica', {
					top: 0
				}

			);
			$('#videoportada2').fixTo('.portada-mistica', {
					top: 0
				}

			);

		}

	});
	var sectionFirst = new vidbg('#videoportada', {
		mp4: 'https://www.divergentes.com/wp-content/uploads/2021/05/por.mp4',
		poster: 'https://www.divergentes.com/wp-content/uploads/2021/05/video-protada@3x-80-scaled.jpg',
	})

	var sectionTwo = new vidbg('#videoportada2', {
		mp4: 'https://www.divergentes.com/wp-content/uploads/2021/05/video_2.mp4',
		poster: 'https://www.divergentes.com/wp-content/uploads/2021/05/video-protada@3x-80-scaled.jpg',
	})
	var video1 = document.getElementById("player1-mistica");
	var video2 = document.getElementById("player2-mistica");
	video1.autoplay = true;
	video1.muted = true;
	video1.play();
	video2.autoplay = true;
	video2.muted = true;
	video2.play();



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