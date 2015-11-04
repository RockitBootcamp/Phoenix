$(function() {

    $('form').on('submit', function() {
    
        var payload = {
            name: $('.name').val(),
            city: $('.city').val()
        }
        
        if ($('.teamId').val() === '') {

            $.post('http://127.0.0.1:3000/teams', payload).then(function() {
                loadTeams();
            }).fail(function() {
                // handle things not going well
            })

        } else {

            $.ajax({
                url: 'http://localhost:3000/teams/' + $('.teamId').val(),
                data: payload,
                type: 'PUT'
            }).then(function() {
                loadTeams();
            })

        }

        $('.name').val('');
        $('.city').val('');
        $('.teamId').val('');

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


    $('ul').on('click', 'button.delete', function() {

        var id = $(this).parents('li').data('id')

        $.ajax({
            url: 'http://localhost:3000/teams/' + id,
            type: 'DELETE'
        }).then(function() {
            loadTeams();
        })

    });



    $('ul').on('click', 'button.update', function() {

        var id = $(this).parents('li').data('id')

        $.get('http://localhost:3000/teams/' + id).then(function(team) {

            $('.name').val(team.name)
            $('.city').val(team.city)
            $('.teamId').val(team.id)

        })


    });

})