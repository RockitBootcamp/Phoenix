$(function() {

    var getUsers = function() {
    
        $.get('data.json').done(function(data) {
            
            data = JSON.parse(data)

            console.log(data);

        });

    }

    $('button').on('click', function() {

        getUsers();

    });

});
