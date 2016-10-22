/* 
 Created on : Jan 23, 2016, 9:22:22 PM
 Author     : gregzorb
 */

$('document').ready(function () {
//    col-lg-3 col-xs-3 col-sm-1
    var mistakeLink = '<div id="send-mistake-report" class="send-mistake-report btn btn-warning ">'+
            'Повідомити про помилку'+
            '</div>';
    
    $('#wrapper').before(mistakeLink);
    

    
    $('.send-mistake-report').on('click', function () {
        $('#mistake-modal').modal();
    });

    $('#mistake-modal .modal-send').on('click', sendMistake);
    $('#mistake-modal .modal-close').on('click', function(){
        $('#mistake-modal').modal('close');
    });
});


function sendMistake() {
    //ajax
    console.log('sendModal');
    $('#mistake-modal').modal('close');
}

