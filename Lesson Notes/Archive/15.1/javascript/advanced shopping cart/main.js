$(function() {

	var cart = {
		'bird': 0,
		'cat': 0,
		'dog': 0
	}

	$('.inventory button').on('click', function() {

		// Get our buttons parent list itme
		var li = $(this).parents('li');

		// use the li to get the text of the span and the id
		var id = li.data('id');
		var text = li.find('span').text();

		// Adding to the real cart
		cart[id]++;

		// Add new thing to cart mode
		if (cart[id] == 1) {

			// New DOM
			var span = $('<span>').text(text);
			var button = $('<button>').text('Remove');
			$('<li>').append(span).append(button).prependTo('.cart');

		// else, update mode
		} else {

			console.log('update');
		}

	});

	$('.cart').on('click', 'button', function() {
		$(this).parents('li').remove();
	});

});