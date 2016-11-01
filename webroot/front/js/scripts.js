(function ($) {

    "use strict";

    var validator = null,
            contactForm = $('.contact-form');

    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 60
    });

    $('#topNav').affix({
        offset: {
            top: 200
        }
    });

    new WOW().init();

    $('a.page-scroll').bind('click', function (event) {
        var $ele = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($ele.attr('href')).offset().top - 60)
        }, 1450, 'easeInOutExpo');
        event.preventDefault();
    });

    $('.navbar-collapse ul li a').click(function () {
        /* always close responsive nav after click */
        $('.navbar-toggle:visible').click();
    });

    $('#galleryModal').on('show.bs.modal', function (e) {
        $('#galleryImage').attr("src", $(e.relatedTarget).data("src"));
    });

    function validateSendMessage() {
        contactForm.validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    phoneUA: true
                },
                message: {
                    required: true
                }
            },
            submitHandler: function () {
                $.ajax({
                    dataType: "json",
                    url: "/message/sendUserRequest",
                    data: contactForm.serialize(),
                    method: "POST",
                    success: function (res) {
                        if (res.result.status == true) {
                            $('.modal-body .success-send-message').removeClass('hidden');
                            $('.modal-body .error-send-message').addClass('hidden');
                            $('#sendMessageModal').modal('show');
                            $('#last').fadeOut('slow');
                        } else {
                            showErrorMessageModal();
                        }
                    },
                    fail: function () {
                        showErrorMessageModal();
                        $('#sendMessageModal').modal('show');
                    }
                });
                return false;
            }
        });
    }

    function showErrorMessageModal() {
        $('.modal-body .success-send-message').addClass('hidden');
        $('.modal-body .error-send-message').removeClass('hidden');
        $('#sendMessageModal').modal('show');
    }

    $('document').ready(function () {
        validateSendMessage();
    });

})(jQuery);