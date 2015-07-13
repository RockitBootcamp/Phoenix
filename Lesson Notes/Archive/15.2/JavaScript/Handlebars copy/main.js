$(function() {

    // This way takes two lines
    var html = $('.user-template').html();
    var template = Handlebars.compile(html);

    var tweet = {
        username: '@bradwestfall',
        message: $('.compose textarea').val()
    }

    var result = template(tweet);

    $('.threads').append(result);

});