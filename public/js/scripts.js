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


        $translateFormField.on("input", function () {
            console.log(12);
            $translateFormField.trigger('submit');
        });



        $translateForm.on('submit', function() {
            $.ajax({
                url: $translateForm.attr('action'),
                method: $translateForm.attr('method'),
                data: $translateForm.serialize()
            }).done( function(data) {
                $resultFormField.val(data);
            }).fail( function(er)  {
                console.error();
            });
        });
    }


});