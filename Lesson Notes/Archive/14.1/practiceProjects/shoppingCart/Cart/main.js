$(function() {

	var cart = {
		'fish': 0,
		'cow': 0
	}

	$('.products button').on('click', function() {
		var parentListItem = $(this).parent();
		var className = $(parentListItem).attr('class');
		cart[className]++;
		renderOutput(className);
	});

	var renderOutput = function(className) {
		
		// If it exists, find it and change it
		if ($('.cart .' + className).length) {
			console.log('Change it');
			
		// If it doesn't exist, make it
		} else {
			console.log('Make it');
		}

	}

});