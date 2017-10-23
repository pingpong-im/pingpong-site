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

    $('#yes').on('click', function () {
        $('html, body').animate({scrollTop: 0}, "slow");
        return false;
    });

    $('#no').on('click', function () {
        $('#newsletter').fadeIn();
        $('.modal-overlay').fadeIn();
        $('html').addClass('modal-open');
    });

    $('.modal-overlay').on('click', function () {
        $(this).fadeOut();
        $('#newsletter').fadeOut();
    });

    $('.js-close-modal').on('click', function () {
        $(this).parent().fadeOut();
        $('.modal-overlay').fadeOut();
        $('html').removeClass('modal-open');
    });

    setTimeout(function () {
        $('.presale').fadeIn();
    }, 30000);

    $('.currency').on('click', function () {
        $(this).parent().find('.active').removeClass('active');
        $(this).addClass('active');

        checkClass();
    });

    $('.converter').find('input').on('focus', function () {
        $('.converter').find('.change').removeClass('change');
        $(this).addClass('change');
        checkClass();
    })

});

function checkClass() {
    if ($('#currency').hasClass('change')) {

        switch ($('.converter').find('.active').data('currency')) {
            case 'bit':
                currToToken(0.0014);
                break;
            case 'eth':
                currToToken(0.018);
                break;
            default:
                currToToken(0.0014);
        }

    }
    else if ($('#tokens').hasClass('change')) {

        switch ($('.converter').find('.active').data('currency')) {
            case 'bit':
                tokenToCurr(0.0014);
                break;
            case 'eth':
                tokenToCurr(0.018);
                break;
            default:
                tokenToCurr(0.0014);
        }

    }
}

function currToToken(k) {
    $('#tokens').val(Math.round(($('#currency').val()/k)*10000)/10000);

    $('#currency').on('change paste keyup', function () {
        checkNumbers($(this));
        $('#tokens').val(Math.round(($(this).val()/k)*10000)/10000);

    })
}

function tokenToCurr(k) {
    $('#currency').val(Math.round(($('#tokens').val()*k)*10000)/10000);

    $('#tokens').on('change paste keyup', function () {
        checkNumbers($(this));
        $('#currency').val(Math.round(($(this).val()*k)*10000)/10000);
    })
}

function checkNumbers(input) {
    var value = input.val(),
        test_regex = /(^$)|(^\d+([,.]\d+)?$)/,
        result = test_regex.test(value);

    if(!result){
        input.addClass('error');
    } else {
        input.removeClass('error');
    }
}

