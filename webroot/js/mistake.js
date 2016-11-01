/* 
 Created on : Jan 23, 2016, 9:22:22 PM
 Author     : gregzorb
 */

$('document').ready(function () {
//    col-lg-3 col-xs-3 col-sm-1
    var mistakeLink = '<div id="send-mistake-report" class="send-mistake-report btn btn-warning ">' +
            'Повідомити про помилку' +
            '</div>';

    $('#wrapper').before(mistakeLink);



    $('.send-mistake-report').on('click', function () {
        $('#mistake-modal').modal();
    });

    $('#mistake-modal .modal-send').on('click', sendMistake);
    $('#mistake-modal .modal-close').on('click', function () {
        $('#mistake-modal').modal('close');
    });
});


function sendMistake() {
    $.ajax({
        dataType: "json",
        url: "/message/sendUserRequest",
        data: $('.mistake-input').serialize(),
        method: "POST",
        success: function () {
            $('.modal-content .mistake-result').remove();
            $('.modal-title').after('<p class="mistake-result bg-success">Thanks for your message</p>');
            $('#mistake-modal').modal('close');
        },
        fail: function () {
            $('.modal-content .mistake-result').remove();
            $('.modal-title').after('<p class="mistake-result bg-danger">Error while reporting</p>')
            $('#mistake-modal').modal('close');
        }
    });
}

