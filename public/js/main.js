$(document).ready(function(){
    $(window).bind('scroll', function() {
        var navHeight = $("#head").height();
        ($(window).scrollTop() > navHeight) ? $('nav').addClass('goToTop') : $('nav').removeClass('goToTop');
    });
});
