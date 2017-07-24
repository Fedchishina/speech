$( function() {
    'use strict';
    var isSending = false;

    init();

    function init() {
        initSearchResult();
    }

    function initSearchResult() {
        var $translateForm = $('.main-form');
        var $translateFormField = $translateForm.find("textarea[name='text_in']");
        var $resultFormField = $translateForm.find("textarea[name='text_out']");


        var isSend = false;

        $translateFormField.on("input propertychange", function (event) {

            if(isSend) return;

            isSend = true;
            $.ajax({
                url: $translateForm.attr('action'),
                method: $translateForm.attr('method'),
                data: $translateForm.serialize()
            }).done( function(data) {
                $resultFormField.val(data);
                isSend = false;
            }).fail( function(er)  {
                console.error();
                isSend = false;
            });
        });


        $translateForm.on('submit', function() {

        });
    }


});