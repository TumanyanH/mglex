$(document).ready(function () {

    /* See password or hide start */

    $(document).on('click', '.show_pass', function () {
        if ($(this).hasClass('clicked')) {
            $(this).removeClass('clicked');
            $(this).parent('div').children('.password_input').attr('type', 'password');
        } else {
            $(this).addClass('clicked');
            $(this).parent('div').children('.password_input').attr('type', 'text');
        }
    });

    /* See password or hide end */

    /* sign in modal start */

    $('.sign_in_btn').click(function () {
        $('.sign_in_popup').css('display', 'block');
        $('.sign_in_popup').addClass('show');

        var body = $("html, body");
        body.stop().animate({scrollTop: 0}, 500);
    });

    $('.sign_in_close').click(function () {
        $('.sign_in_popup').css('display', 'none');
        $('.sign_in_popup').removeClass('show');
    });

    $('.sign_in_popup').click(function (e) {
        if ($(e.target).closest('.sign_in_popup_body').length === 0) {
            $('.sign_in_popup').css('display', 'none');
            $('.sign_in_popup').removeClass('show');
        }
    });

    $('.see_on_map').click(function () {
        $('.map_popup').css('display', 'block');
        $('.map_popup').addClass('show');
    });

    $('.map_close').click(function () {
        $('.map_popup').css('display', 'none');
        $('.map_popup').removeClass('show');
    });

    $('.map_popup').click(function (e) {
        if ($(e.target).closest('.map_popup').length === 0) {
            $('.map_popup').css('display', 'none');
            $('.map_popup').removeClass('show');
        }
    });

    /*Sign_up Start*/
    $(document).on('click', '.sign_up_btn_p', function () {
        $('.sign_up_popup').css('display', 'block');
        $('.sign_up_popup').addClass('show');

        $('body').addClass('overflow_hidden');
        $('body').css('overflow-y', 'auto');

        $('.sign_up_popup_body').css('max-height', window_heigh - 80);
        var body = $("html, body");
        body.stop().animate({scrollTop: 0}, 500);
    });

    $('.sign_up_close').click(function () {
        $('.sign_up_popup').css('display', 'none');
        $('.sign_up_popup').removeClass('show');
    });

    $('.sign_up_popup').click(function (e) {
        if ($(e.target).closest('.sign_up_popup_body').length === 0) {
            $('.sign_up_popup').css('display', 'none');
            $('.sign_up_popup').removeClass('show');
        }
    });
    /*Sign_up End*/


    /*tez Start*/
    $(document).on('click', '.tez_open', function () {
        console.log('qweqwe');
        $('.tez_popup').css('display', 'block');
        $('.tez_popup').addClass('show');

        $('body').addClass('overflow_hidden');
        $('body').css('overflow-y', 'auto');

        $('.tez_popup_body').css('max-height', window_heigh - 80);
        var body = $("html, body");
        body.stop().animate({scrollTop: 0}, 500);
    });

    $('.tez_close').click(function () {
        $('.tez_popup').css('display', 'none');
        $('.tez_popup').removeClass('show');
    });

    $('.tez_popup').click(function (e) {
        if ($(e.target).closest('.tez_popup_body').length === 0) {
            $('.tez_popup').css('display', 'none');
            $('.tez_popup').removeClass('show');
        }
    });

    /*tez End*/

    /*tez1 Start*/
    $(document).on('click', '.tez1_open', function () {
        console.log('qweqwe');
        $('.tez1_popup').css('display', 'block');
        $('.tez1_popup').addClass('show');

        $('body').addClass('overflow_hidden');
        $('body').css('overflow-y', 'auto');

        $('.tez1_popup_body').css('max-height', window_heigh - 80);
        var body = $("html, body");
        body.stop().animate({scrollTop: 0}, 500);
    });

    $('.tez1_close').click(function () {
        $('.tez1_popup').css('display', 'none');
        $('.tez1_popup').removeClass('show');
    });

    $('.tez1_popup').click(function (e) {
        if ($(e.target).closest('.tez1_popup_body').length === 0) {
            $('.tez1_popup').css('display', 'none');
            $('.tez1_popup').removeClass('show');
        }
    });

    /*tez1 End*/


    $('.forget_btn').click(function () {
        $('.forget_popup').css('display', 'block');
        $('.forget_popup').addClass('show');
    });

    $('.forget_close').click(function () {
        $('.forget_popup').css('display', 'none');
        $('.forget_popup').removeClass('show');
    });

    $('.forget_popup').click(function (e) {
        if ($(e.target).closest('.forget_popup').length === 0) {
            $('.forget_popup').css('display', 'none');
            $('.forget_popup').removeClass('show');
        }
    });

    $('.li_question').each(function () {
        if ($(this).hasClass('li_question_active')) {
            $(this).children('p').css('display', 'block');
        }
    });

    $('.li_question').click(function (e) {
        if (!$(this).hasClass('li_question_active')) {

            $('.li_question').each(function () {
                $(this).removeClass('li_question_active');
                $(this).children('.hth_question_title').children('img').css('transform', 'rotate(0deg)');
                $(this).children('p').slideUp('slow');
            })
        }

        $(this).addClass('li_question_active');
        $(this).children('.hth_question_title').children('img').css('transform', 'rotate(180deg)');
        $(this).children('p').slideDown('slow');

    });

    var window_heigh = $(window).height();

    $('.modal_gallery_body').css('max-height', window_heigh - 80);
    $('.map_body').css('max-height', window_heigh - 80);

});