$( function() {
    'use strict';
    var isSending = false;
    $("input[name='voice_text']").webkitSpeech = true;
    if (document.createElement('input').webkitSpeech === undefined) {
// Не поддерживается
        console.log('+');
    } else {

// Поддерживается!
        console.log('-');
    }

    $('.main-form').on('submit', function (event) {
        event.preventDefault();

        var $thisForm = $(this);

        if(isSending) return;

        isSending = true;

        $.ajax({
            url: $thisForm.attr('action'),
            method: $thisForm.attr('method'),
            data: $thisForm.serialize()
        }).done(function (data) {
            $("textarea[name='text_out']").val(data);
            isSending = false;
        }).fail(function (err) {
            //alert(err);
            isSending = false;
        })
    })
});