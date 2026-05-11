$(function() {

  var vw = $(window).width(),
      vh = $(window).height();

  $.fn.isOnScreen = function(){

    var win = $(window);
  
    var viewport = {
      top : win.scrollTop(),
      left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
  
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
  
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
  
  };


  // cover video
  $(".background-video video source").attr("src", vw > 1008 ? 'https://www.divergentes.com/wp-content/themes/divergentes/infierno-en-la-estancia-migratoria-de-cancun/media/animaciones/portada.mp4' : 'https://www.divergentes.com/wp-content/themes/divergentes/infierno-en-la-estancia-migratoria-de-cancun/media/animaciones/portada-m.mp4');
  $(".background-video video")[0].load();


  // init controller
  var controller = new ScrollMagic.Controller();

  // Fade imágenes
  $(".irec").each(function(i, n) {
    $(n).contents().wrapAll('<div class="irec-cont"></div>');
    var appear = new ScrollMagic.Scene({
        triggerElement: "#infoReconocer",
        duration: vh * 0.4,
        offset: 0 + (vw <= 767 ? i * 300 : i * 100)
      })
      .triggerHook(vw <= 767 ? 0.8 : 1)
      .setTween($(n).find(".irec-cont"), {
        opacity: 1,
        y: 0
      })
      // .addIndicators({name: "Lazy: " + i})
      .addTo(controller);
  });



  // Audio Testimonio
  // Fade de colores audios
  // var isBlack = false,
  //     divOn = [];
  // $(window).scroll(function(){
  //   $(".audio-wrapper").each(function() {
  //     divOn[$(document).find($(".audio-wrapper")).index(this)] = $(this).isOnScreen();
  //     if(!isBlack && (divOn[0] || divOn[1] || divOn[2] || divOn[3])) {
  //       isBlack = true;
  //       $("body").css({
  //         backgroundColor: "#111"
  //       });
  //     }
  //     if(isBlack && (!divOn[0] && !divOn[1] && !divOn[2] && !divOn[3])) {
  //       isBlack = false;
  //       $("body").css({
  //         backgroundColor: "#fdfdf8"
  //       });
  //     }
  //   });
  // });

  // var is_playing_testimonio = false;
  // var audioTestimonio;
  // audioTestimonio = WaveSurfer.create({
  //   container: document.querySelector('#audio_testimonio'),
  //   waveColor: 'rgba(255,255,255,0.65)',
  //   progressColor: '#FFF',
  //   backend: 'MediaElement',
  //   mediaControls: false
  // });
  // audioTestimonio.load('media/audios/testimonio.mp3');

  // $("#play_pause_testimonio").on("click", function() {
  //   audioTestimonio.playPause();
  // })

  // audioTestimonio.on('pause', function () {
  //   is_playing_testimonio = false;
  // });

  // audioTestimonio.on('play', function () {
  //   is_playing_testimonio = true;
  // });

  // $(window).scroll(function(){
  //   if(!is_playing_testimonio && $('#audio_testimonio').isOnScreen()) {
  //     audioTestimonio.play();
  //   }
  //   if(is_playing_testimonio && !$('#audio_testimonio').isOnScreen()) {
  //     audioTestimonio.pause();
  //   }
  // });


  // Infographies
  $(".fs-infography").each(function(is, ns) {
    var steps = $(ns).find(".info-step");
    var prbar = $(ns).find(".progress-bar");
    var pininfography = new ScrollMagic.Scene({
        triggerElement: ns,
        duration: vh * (steps.length - 0.5),
        offset: 0
      })
      .triggerHook(0)
      .setPin(ns)
      .on("progress", function(e) {
        var wd = e.progress * 100;
        prbar.width(wd + '%')
      })
      // .addIndicators({name: "Pin info: "})
      .addTo(controller);

    for(var i=0; i<steps.length; i++) {
      var showsteps = new ScrollMagic.Scene({
          triggerElement: ns,
          duration: vh * 0.5,
          offset: vh * i
        })
        .triggerHook(0)
        .setTween($(steps[i]), {opacity: 1})
        // .addIndicators({name: "Step: "})
        .addTo(controller);
    }
  });

  $(".fs-infography-reverse").each(function(is, ns) {
    var steps = $(ns).find(".info-step");
    var prbar = $(ns).find(".progress-bar");
    var pininfography = new ScrollMagic.Scene({
        triggerElement: ns,
        duration: vh * (steps.length - 0.5),
        offset: 0
      })
      .triggerHook(0)
      .setPin(ns)
      .on("progress", function(e) {
        var wd = e.progress * 100;
        prbar.width(wd + '%')
      })
      // .addIndicators({name: "Pin info: "})
      .addTo(controller);

    for(var i=0; i<steps.length; i++) {
      var hidesteps = new ScrollMagic.Scene({
          triggerElement: ns,
          duration: vh * 0.5,
          offset: vh * i
        })
        .triggerHook(0)
        .setTween($(steps[i]), {opacity: 0})
        // .addIndicators({name: "Step: "})
        .addTo(controller);
      if(i === steps.length - 2) {
        var colorize = new ScrollMagic.Scene({
            triggerElement: ns,
            duration: vh * 0.5,
            offset: vh * i
          })
          .triggerHook(0)
          .setTween($(steps[i + 1]), {color: "#7FD4E2"})
          // .addIndicators({name: "Step: "})
          .addTo(controller);
      }
    }
  });

  $(".lazy").each(function(i, n) {
    $(n).contents().wrapAll('<div class="l-cont"></div>');
    var lazyUp = new ScrollMagic.Scene({
        triggerElement: n,
        duration: vh * 0.4,
        offset: 0
      })
      .triggerHook(0.7)
      .setTween($(n).find(".l-cont"), {
        opacity: 1,
        y: 0
      })
      // .addIndicators({name: "Lazy: " + i})
      .addTo(controller);
  });

  // Full screen galleries
  $(".fs-gallery").each(function(is, ns) {
    var photos = $(ns).find(".frame");
    var pingallery = new ScrollMagic.Scene({
        triggerElement: ns,
        duration: vh * (photos.length - 0.5),
        offset: 0
      })
      .triggerHook(0)
      .setPin(ns)
      // .addIndicators({name: "Pin gallery"})
      .addTo(controller);
    for(var i=1; i<photos.length; i++) {
      var showframe = new ScrollMagic.Scene({
          triggerElement: ns,
          duration: vh * 0.5,
          offset: vh * (i - 0.5)
        })
        .triggerHook(0)
        .setTween($(photos[i]), {opacity: 1})
        // .addIndicators({name: "Reveal " + i})
        .addTo(controller);
    }
  });


})
