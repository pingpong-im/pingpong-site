$(document).ready(function () {
    $('.js-partners').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        centerMode: true,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
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

    $('.js-accordion').on('click', function () {
        $(this).parent().find('.js-accordion-content').slideToggle();
        $(this).toggleClass('open');
    });

    $('.currency').on('click', function () {
        $(this).parent().find('.active').removeClass('active');
        $(this).addClass('active');
    });
    
    $('#yes').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, "slow");
        return false;
    });

    $('#no').on('click', function () {
        $('#newsletter').fadeIn();
        $('.modal-overlay').fadeIn();
        $('html').addClass('modal-open');
    });

    $('.js-close-modal').on('click', function () {
        $(this).parent().fadeOut();
        $('.modal-overlay').fadeOut();
        $('html').removeClass('modal-open');
    })



});