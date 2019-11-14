(function($, window) {
    $('.owl-vitrine').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('.owl-depoimentos').owlCarousel({
        loop: false,
        autoplay: true,
        margin: 60,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });
})(jQuery, window);