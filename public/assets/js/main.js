/*global $, jQuery, console, alert, prompt */
$(window).on('load', function () {
    "use strict";
    $(".se-pre-con,.pre-loader").delay(500).fadeOut("slow");
    new WOW().init(
        {
            mobile: false,
            live: true
        });
    $('#openMenu').click(function (e) {
        e.preventDefault();
        $('.side-menu').css("right", 0).css("opacity", 1);
        $('.side-overlay').fadeIn();
        $('body, html').css("overflow-y", "hidden");
        $('.side-overlay, #closeMenu').click(function () {
            $('.side-menu').css("right", "-900px").css("opacity", 0);
            $('.side-overlay').fadeOut();
            $('body, html').css("overflow-y", "auto");
        });
    });
});

$(document).ready(function () {
    "use strict";

    $('[placeholder]').focus(function () { // Placeholder
        $(this).attr('data-place', $(this).attr('placeholder'));
        $(this).attr('placeholder', '');
    }).blur(function () {
        $(this).attr('placeholder', $(this).attr('data-place'));
    });
    $(document).on('scroll', function () {
        if ($(document).scrollTop() > 200) {
            $('.main-header').addClass('pos-fixed').removeClass('pos-absolute');
        } else {
            $('.main-header').addClass('pos-absolute').removeClass('pos-fixed');
        }
    });

    // partners-slider
    $('.partners-slider').owlCarousel({
        center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 500,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 30,
        smartSpeed: 100,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            481: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 4,
            },
            // breakpoint from 768 up
            992: {
                items: 6,
            },
            // breakpoint from 768 up
            1200: {
                items: 7,
            }
        }
    });

    $('.clients-slider').owlCarousel({
        center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: true,
        autoplay: false,
        navSpeed: 500,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 40,
        smartSpeed: 100,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            481: {
                items: 1,
                center: false,
            },
            // breakpoint from 768 up
            768: {
                items: 1.2,

            },
            // breakpoint from 768 up
            992: {
                items: 1.2,
            },
            // breakpoint from 768 up
            1024: {
                items: 1.2,
            }
        }
    });
    // services-slider
    $('.services-slider').owlCarousel({
        center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: true,
        autoplay: false,
        navSpeed: 500,
        autoplaySpeed: 1500,
        margin: 20,
        smartSpeed: 100,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            481: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 2.3,
            },
            // breakpoint from 768 up
            992: {
                items: 3.2,
            },
            // breakpoint from 768 up
            1024: {
                items: 3.4,
            }
        }
    });


}); 