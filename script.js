/* Initialize Owl Carousel*/
jQuery(document).ready(function () {
    $(".services-carousel.owl-carousel").owlCarousel({
        loop: true,
        margin: 40,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });
});
