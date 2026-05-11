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
    <p>Todos los derechos reservados ©️ 2020</p>
  </div>
</footer>
<div class="fly-to-top back-to-top">
  <i class="fa fa-angle-up fa-3"></i>
  <span class="to-top-text">Ir Arriba</span>
</div>


<?php wp_footer(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.slotmachine.css" type="text/css" media="screen" />
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/slotmachine.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slotmachine.js"></script>

<script>
  $('.back-to-top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
  $(document).ready(function() {
    var machine1 = $("#machine1").slotMachine({
      active: 0,
      delay: 500
    });
    var machine2 = $("#machine2").slotMachine({
      randomize() {
        return resultsfinal;
      },
      active: 1,
      delay: 500,
      direction: "down"
    });
    var machine3 = $("#machine3").slotMachine({
      randomize() {
        return resultsfinal;
      },
      active: 3,
      delay: 500,
      direction: "up"
    });

    var audioplayer = document.getElementById("audio_maquina");
    var results;

    var resultsfinal;
    function onComplete(active) {
      results = getMachineResult($('#machine1'), this.active);
      resultsfinal = results - 1;
      let miObjecto = $('#' + results);
      let imagen = miObjecto.data('image');
      setTimeout(function() {
        
        $("#modal-licitaciones-imagen").attr('src', imagen);

        $('#modal-licitaciones').modal('show')
      }, 3200);
    }

    function getMachineResult(i_jqMachine, i_iActive) {
      return i_jqMachine.find('span.option > span').eq(i_iActive + 1).attr("id");
    }
    $("#casinoShuffle").click(function() {
      results = [];
      audioplayer.play();
      machine1.shuffle(5, onComplete);
      machine2.shuffle(8);
      machine3.shuffle(12);
    });
  });
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

</body>

</html>