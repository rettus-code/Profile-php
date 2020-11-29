$(function(){
    $(".owl-carousel").owlCarousel({
        center:true,
        loop:true,
        margin:20,
        nav:true,
        dotsEach: true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            }
        },
    });
});