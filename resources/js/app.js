require('./bootstrap');
require('bootstrap');

$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll <= 0) {
        $('.navigation').removeClass('header--white');
    } else {
        $('.navigation').addClass('header--white');
    }
});

$(document).on('click', '.scroll-icon', function () {
    $('html, body').animate(
        { scrollTop: $('.article').offset().top - 68 },
        1200
    );
});

$(document).on('click', '.navigation__wrapper-hamburger', function () {
    $('.navigation__dropdown').toggleClass('active');
    $('.navigation').addClass('header--white');
    $(this).toggleClass('opened');
});
