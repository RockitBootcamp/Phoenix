$(function() {

    $('form').on('submit', function() {
    
        var payload = {
            name: $('.name').val(),
            city: $('.city').val()
        }
        
        $.post('http://127.0.0.1:3000/teams', payload).then(function() {
            loadTeams();
        }).fail(function() {
            // handle things not going well
        })

        return false;
    });

    var loadTeams = function() {

        $.get('http://127.0.0.1:3000/teams').then(function(users) {

            var template = Handlebars.compile($('#li-template').text())
            $('ul').empty();

            users.forEach(function(user) {
                var result = template(user)
                $('ul').append(result)
            })

        })

    };

    // Initial Call
    loadTeams();

})