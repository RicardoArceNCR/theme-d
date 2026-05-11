var vw = $(window).width(),
    vh = $(window).height();

$(() => {
  $(".show-menu").on("click", () => {
    var mtl = gsap.timeline();
    mtl.to(".menu-wrapper", {x: '-100%', duration: 0.3});
    mtl.to(".menu-underlay", {opacity: 0.8, pointerEvents: "all", duration: 0.3}, 0);
    $("html, body").addClass("no-scroll");
  });

  function closeMenu() {
    var mtl = gsap.timeline();
    mtl.to(".menu-wrapper", {x: 0, duration: 0.3});
    mtl.to(".menu-underlay", {opacity: 0, pointerEvents: "none", duration: 0.3}, 0);
    $("html, body").removeClass("no-scroll");
  }

  $(".hide-menu, .menu-underlay").on("click", () => {
    closeMenu();
  });

  $(".menu-link").on("click", (e) => {
    closeMenu();
  });


  // Header logos
  $(".header-logos").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 8000,
    cssEase: 'linear',
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 0
  });


  // Modals
  $(".modal").on($.modal.BEFORE_OPEN, (e,m) => {
    $("html, body").addClass("no-scroll");
  });

  $(".modal").on($.modal.OPEN, (e,m) => {
    if(vw >= 768) {
      m.elm.find(".story-wrapper").width(function() {
        let h = m.elm.find(".story-wrapper").height();
        return h/16*9+'px';
      });
    }
    m.elm.find(".story").slick("setPosition");
  });

  $(".modal").on($.modal.BEFORE_CLOSE, (e,m) => {
    m.elm.find("video").each(function() {
      $(this).get(0).pause();
    });
  });

  $(".modal").on($.modal.AFTER_CLOSE, (e,m) => {
    $("html, body").removeClass("no-scroll");
  });


  // Stories

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
    slick.$slider.find("video").each(function() {
      $(this).get(0).pause();
    });
  });

  $(".story").on("afterChange", function(event, slick, currentSlide, nextSlide) {
    if(slick.$slider.find(".slick-current").find("video").length !== 0) {
      slick.$slider.find(".slick-current video")[0].play();
    }
  });

  $("video").each(function(ind, el) {
    $(el).on("ended", function() {
      $(el).closest(".story").slick("slickNext");
    })
  });
  
})