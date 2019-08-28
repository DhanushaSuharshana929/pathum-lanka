$('.testimonial-slider-2').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    dots: false,
    infinite: true,
    speed: 3000,
    slide: 'div',
    cssEase: 'linear',
    slidesToShow: 1,
    loop: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 3,
                infinite: true,
                speed: 1000,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
$('.destination-slider').slick({
    autoplay: true,
    autoplaySpeed: 1500,
    dots: false,
    infinite: true,
    speed: 1000,
    slide: 'div',
    cssEase: 'linear',
    slidesToShow: 3,
    loop: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                speed: 500,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
$('.tour-package-slider').slick({
    autoplay: true,
    autoplaySpeed: 1500,
    dots: false,
    infinite: true,
    speed: 1000,
    loop: true,
    slidesToShow: 3,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                speed: 500,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
$('.things-to-do-view-slider').slick({
    autoplay: true,
    autoplaySpeed: 1500,
    dots: false,
    infinite: true,
    speed: 1000,
    loop: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});
$('.home-slider').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    dots: false,
    infinite: true,
     fade: true,
    speed: 1500,
    slidesToShow: 1,
    loop: true
});

l = $(".wrapper");
l.append($("<div class='scroll-top'><i class='icon icon-chevron-up'><\/i><\/div>"));
n = $(".scroll-top");
$(document).on("ready scroll", function () {
    var t = $(document).scrollTop(),
            i = $(window).scrollTop() + $(window).height() === $(document).height();
    t >= 150 ? n.addClass("visible") : n.removeClass("visible");
    i ? n.addClass("active") : n.removeClass("active")
});
n.on("click", function () {
    return $("html,body").animate({
        scrollTop: $("body").offset().top
    }, 1e3), !1
});
a = $(".stretcher-item");
a.on({
    mouseenter: function () {
        $(this).addClass("active");
        $(this).siblings().addClass("inactive")
    },
    mouseleave: function () {
        $(this).removeClass("active");
        $(this).siblings().removeClass("inactive")
    }
});