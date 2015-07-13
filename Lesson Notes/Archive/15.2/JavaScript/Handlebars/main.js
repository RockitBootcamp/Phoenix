$(function() {

    var users = {
        users: [
            {name: 'Brad', age: 23},
            {name: 'Brad', age: 23},
            {name: 'Brad', age: 23},
            {name: 'Brad', age: 23},
            {name: 'Brad', age: 23},
            {name: 'Brad', age: 23}
        ]
    }

    var template = Handlebars.compile($('.user_template').html());
    var output = template(users);

    $('.users').html(output);

});