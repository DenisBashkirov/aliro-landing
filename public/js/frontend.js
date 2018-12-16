$(document).ready(function () {

    /*
    INPUT MASKS
     */
    var $inputPhone = $('.js-mask_phone');
    $inputPhone.mask("8(999)999-99-99");

    console.log($inputPhone);


    /*
    ПЛАВЫНЙ СКРОЛЛ
     */
    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: ($(_href).offset().top)+"px"}, 1200, 'easeInOutQuart');
        return false;
    });

});