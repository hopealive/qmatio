/* 
 Created on : Jan 23, 2016, 9:22:22 PM
 Author     : gregzorb
 */
$('document').ready(function () {
    $('.send-mistake-report').on('click', function () {
        $('#mistake-modal').modal();
    });

    $('#mistake-modal .modal-send').on('click', sendMistake);
});


function sendMistake() {
    //ajax

    $('#mistake-modal').modal('close');
}


