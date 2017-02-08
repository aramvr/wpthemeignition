jQuery(document).ready(function($){
    AOS.init();

    $('.stepicon').click(function (event) {
        var step = $(this).data('step');
        var activestep = $('.activeStep').data('step');
        $('.activeStep div').removeClass('step-'+activestep+'-img-active');
        $('.activeStep div').addClass('step-'+activestep+'-img');
console.log(activestep);
        $('.activeStep').removeClass('activeStep');
        $('.step-'+step).addClass('animated pulse');
        $('.step-'+step).addClass('activeStep');
        $(this).addClass('activeStep');

        $(this).children().removeClass('step-'+step+'-img');
        $(this).children().addClass('step-'+step+'-img-active');
        event.preventDefault();
    })
});