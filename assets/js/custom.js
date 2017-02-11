jQuery(document).ready(function($){
    AOS.init();

    $('.stepicon').click(function (event) {
        $('.step-round-active').removeClass('step-round-active');
        $(this).children().addClass('step-round-active');
        var step = $(this).data('step');
        var activestep = $('.activeStep').data('step');

        $('.activeStep').removeClass('activeStep');
        $('.step-'+step).addClass('animated pulse');
        $('.step-'+step).addClass('activeStep');
        $(this).addClass('activeStep');

        event.preventDefault();
    });


    $('.main-menu').on('show.bs.collapse', function (e) {
        $('.main-menu').addClass('main-menu-collapsed');
        $('.main-menu').addClass('fadeIn');
        $('#navbarNav').addClass('fadeInUp');
    });


    $('.main-menu').on('hide.bs.collapse', function (e) {
        $('#navbarNav').removeClass('fadeInDown');
        $('#navbarNav').addClass('fadeOut');
    });

    $('.main-menu').on('hidden.bs.collapse', function (e) {
        $('.main-menu').addClass('fadeOut');
        setTimeout(function(){
            $('.main-menu').removeClass('main-menu-collapsed');
            $('#navbarNav').removeClass('fadeOut');
            $('.main-menu').removeClass('fadeOut');
        }, 600);


    });

    $('.header-button a').smoothScroll({
        speed: 1200
    });
});