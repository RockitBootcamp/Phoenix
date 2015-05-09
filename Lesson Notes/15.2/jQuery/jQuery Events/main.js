$(function() {

    $('button').on('click', function() {
        var button = $('<div>');
        button.text('new div');
        button.appendTo('body');
    });


    // Find all the divs that are on the page
    // RIGHT NOW, and add an event handler to them

    $('div').on('click', function() {
        console.log('div is clicked');
    });

    // Delegated event

    $('body').on('click', 'div', function() {
        console.log('div is clicked');

    });



});