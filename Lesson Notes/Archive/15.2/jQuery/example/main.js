$(function() {

    $('input').on('focus', function() {
        $(this).val('I got focused');
    });

    $('input').on('blur', function() {
        $(this).val('I got blurred');
    });

});