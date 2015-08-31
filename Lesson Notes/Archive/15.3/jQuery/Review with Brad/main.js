$(function() {

    $('div').on('click', function() {
        $(this).toggleClass('highlight');        
    });

    $('button').on('mouseover', function() {

        // 1
        $('<div>')
            .append('New Div')
            .addClass('highlight')
            .appendTo('body');

        // 2
        var newDiv = $('<div>');
        newDiv.append('NewDiv')
            .addClass('highlight')
            .appendTo('body');

        // 3
        var newDiv = $('<div>')
            .append('New Div')
            .addClass('highlight');

        $('body').append(newDiv);


        // 4
        $('body').append('<div class="highlight">New Div</div>')


        // 5
        var newDiv = $("<div>", {
            'class': 'highlight',
            'text': 'New Div'
            });


        // 6
        var newDiv = $(document.createElement('div'));


    });

});