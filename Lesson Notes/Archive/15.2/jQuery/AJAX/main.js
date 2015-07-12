$(function() {

    // The newer way with promises
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {id: 5},
        url: 'foo.php'
    }).done(function(data) {
        console.log(data.name);
    }).fail(function() {
        console.log('we failed');
    });

    // The older way with callbacks
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {id: 5},
        url: 'foo.php',
        success: function(data) {
            console.log(data.name);
        },
        error: function() {
            console.log('we failed');
        }
    });



    // Shortcut promises
    $.post('path/').done(function() {

    }).fail(function() {

    });


    // Shortcut callback way
    $.post('path/', {data: data}, function() {

    }, function() {

    });

});