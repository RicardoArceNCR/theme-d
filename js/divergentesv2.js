$("[data-trigger]").on("click", function(e){
    e.preventDefault();
    e.stopPropagation();
    var offcanvas_id =  $(this).attr('data-trigger');
    $(offcanvas_id).toggleClass("show");
    $('body').toggleClass("offcanvas-active");
    $(".screen-overlay").toggleClass("show");
});


$(".btn-close, .screen-overlay").click(function(e){
    $(".screen-overlay").removeClass("show");
    $(".offcanvas").removeClass("show");
    $("body").removeClass("offcanvas-active");
});

///////////////// fixed menu on scroll for desktop
if ($(window).width() > 992) {
    $(window).scroll(function(){
        if ($(this).scrollTop() > 40) {
            $('#navbar_top').addClass("fixed-top");
            // add padding top to show content behind navbar
            $('body').css('padding-top', $('.smart-scroll').outerHeight() + 'px');
        }else{
            $('#navbar_top').removeClass("fixed-top");
            // remove padding top from body
            $('body').css('padding-top', '0');
        }
    });
} // end if