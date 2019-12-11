$( document ).ready(function() {

    (function productsSlider(){
        $('.slider-items img').click( function (e) {
            console.log($(this).attr('src'));
            $('.main-slider img').attr('src', $(this).attr('src'))
        } )
    })()


});