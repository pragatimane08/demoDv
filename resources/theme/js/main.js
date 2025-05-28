(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

    // Modal Video
    var $videoSrc;
    $('.btn-play').click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);
    $('#videoModal').on('shown.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    });
    $('#videoModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc);
    });

    // Project, Header, and Testimonial carousels
    $(".project-carousel, .testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    $(".header-carousel").owlCarousel({
        autoplay: false,
        animateOut: 'fadeOutLeft',
        items: 1,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });

    // // Facts counter
    // $('[data-toggle="counter-up"]').counterUp({
    //     delay: 10,
    //     time: 2000
    // });

    // // Date and time picker
    // $('.date').datetimepicker({
    //     format: 'L'
    // });
    // $('.time').datetimepicker({
    //     format: 'LT'
    // });
    // Facts counter
    if ($.fn.counterUp && $('[data-toggle="counter-up"]').length > 0) {
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 2000
        });
    } else {
        console.warn("counterUp plugin is not loaded or no counter elements found");
    }

    // Date and time picker with fallback
    if ($.fn.datetimepicker && ($('.date').length > 0 || $('.time').length > 0)) {
        if ($('.date').length > 0) $('.date').datetimepicker({ format: 'L' });
        if ($('.time').length > 0) $('.time').datetimepicker({ format: 'LT' });
    } else {
        console.warn("datetimepicker plugin is not loaded - using native inputs");
        if ($('.date').length > 0) $('.date').attr('type', 'date');
        if ($('.time').length > 0) $('.time').attr('type', 'time');
    }

    // Add the smooth scroll-based golden curve effect only in the service section
    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        const goldenCurve = document.querySelector('.golden-curve');
        const serviceSection = document.querySelector('.service-container');

        // Get the position of the service section relative to the viewport
        const serviceSectionTop = serviceSection.getBoundingClientRect().top + window.scrollY;
        const serviceSectionHeight = serviceSection.offsetHeight;

        // Only apply the scroll effect if the user is within the service section
        if (scrollPosition >= serviceSectionTop && scrollPosition <= serviceSectionTop + serviceSectionHeight) {
            const relativeScrollPosition = scrollPosition - serviceSectionTop;
            goldenCurve.style.transform = `translateY(${relativeScrollPosition * 0.5}px) rotate(360deg)`;
        }
    });

})(jQuery);