$(document).ready(function () {

    AOS.init();

    var isViewportXl = false;
    var isViewportLg = false;
    var isViewportMd = false;
    var isViewportSm = false;

    var viewportWidth = $(window).width()

    if (viewportWidth >= 1170)
        isViewportXl = true;

    if (viewportWidth >= 992)
        isViewportLg = true;

    if (viewportWidth >= 768)
        isViewportMd = true;

    if (viewportWidth >= 600)
        isViewportSm = true;



    /*
    INPUT MASKS
     */
    var $inputPhone = $('.js-mask_phone');
    $inputPhone.mask("8(999)999-99-99");



    /*
    ПЛАВЫНЙ СКРОЛЛ
     */
    var header = document.querySelector('.header');
    var headerHeight = parseInt(getComputedStyle(header).height) - 1;

    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: ($(_href).offset().top - headerHeight)+"px"}, 1200, 'easeInOutQuart');
        return false;
    });



    /*
    HAMBURGER MENU
     */
    var $btnMenu = $('.js-action_open-nav');
    var $menu = $('nav');
    var $hamburger = $btnMenu.find('.hamburger');

    $btnMenu.on('click', function () {
        $hamburger.toggleClass('is-active');
        $menu.fadeToggle();
    });

    var $navLinks = $('.nav__links a');
    $navLinks.on('click', function () {
        $menu.fadeOut();
        $hamburger.removeClass('is-active');
    });



    /*
    HOVER EFFECTS
     */

    var $categoryItems = $('.categories__item');
    $categoryItems.on('mouseenter', function () {
        var overlay = $(this).find('.categories__item-overlay');
        overlay.addClass('categories__item-overlay_hover');

        var title = $(this).find('.categories__item-title');
        title.addClass('categories__item-title_hover');
    });
    $categoryItems.on('mouseleave', function () {
        var overlay = $(this).find('.categories__item-overlay');
        overlay.removeClass('categories__item-overlay_hover');

        var title = $(this).find('.categories__item-title');
        title.removeClass('categories__item-title_hover');
    });

});