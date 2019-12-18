$( document ).ready(function() {

    (function projectSlider(){
        $('.slider-items img').click( function (e) {
            $('.main-slider img').attr('src', $(this).attr('src'))
        } )
    })();

    $('.slick-slider').slick({
        autoplay: true,
        dots: true,
        prevArrow: false,
        nextArrow: false,
        fade: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        swipeToSlide: true,
    });

    $('.slick-dots li button').text('');
});

