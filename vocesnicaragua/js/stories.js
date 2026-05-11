var vw = $(window).width(),
    vh = $(window).height();

$(() => {

  if(vw >= 768) {
    $(".story-wrapper").width(function() {
      let h = $(".story-wrapper").height();
      return h/16*9+'px';
    });
  }

  // var player = videojs('my-player');

  // var options = {techOrder: ['vimeo']};

  // var player = videojs('my-player', options, function onPlayerReady() {
  //   videojs.log('Your player is ready!');

  //   // In this context, `this` is the player that was created by Video.js.
  //   this.play();

  //   // How about an event listener?
  //   this.on('ended', function() {
  //     videojs.log('Awww...over so soon?!');
  //   });
  // });
  
  $(".story").slick({
    dots: true,
    arrows: true,
    infinite: false,
    speed: 100,
    fade: true,
    cssEase: 'linear',
    centerMode: true
  });

  $(".story").on("beforeChange", function(event, slick, currentSlide, nextSlide) {
    $("video").each(function() {
      $(this).get(0).pause();
    });
  });

  $(".story").on("afterChange", function(event, slick, currentSlide) {
    if($(".story .slick-current").find("video").length !== 0) {
      $(".story .slick-current video")[0].play();
    }
  });
  
  $("video").each(function(ind, el) {
    $(el).on("ended", function() {
      $(".story").slick("slickNext");
    })
  });
  
})