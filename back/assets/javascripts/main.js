$(document).ready(function() {

    $('.menu-btn').click(function() {
        $(this).toggleClass('active');
        $('#main-navigation .main-menu').slideToggle();
        return false;
    });

    $('.carousel').carousel()

    objectFitImages();
});