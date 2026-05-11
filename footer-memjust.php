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



<?php wp_footer(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.slotmachine.css" type="text/css" media="screen" />
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
  

$(':root').css('--steps',((1000+400)/25).toString());


let content = document.getElementById("content");
let randoms = []
for(let i=0 ; i<140; i++){
  randoms.push(Math.random());
  let column = document.createElement("div");
  column.className= 'column';
  let veil = document.createElement("veil");
  //let veil2 = document.createElement("veil");
  veil.className= 'veil';
  //veil2.className= 'veil';
  column.appendChild(veil);
  //column.appendChild(veil2);
  for(let j=0; j<60; j++){
    let letter = document.createElement("div");
    letter.className= 'letter';
    letter.innerHTML = String.fromCharCode(Math.round(Math.random()*92 +33))
    column.appendChild(letter);
    
  }
  content.appendChild(column);
}

//setInterval(()=> {
//  console.log('interval');
//  initColumns();
//},15000)
function initElement(index,element){
      let $element = $(element);
      $element.css('--veil-space', (25* Math.round(Math.random()*12 +6)).toString() + "px")
      let n = randoms[index]*10000;
      setTimeout(() =>{
        $element.addClass('animate');
      },n);
      setTimeout(() =>{
        $element.removeClass('animate');
      },n+14500); 
}
function initColumns(){
  $('.veil').each((index,element)=>{
    initElement(index,element);
    setInterval(() => {
        initElement(index,element);
      },15000)
  });
}
initColumns();
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