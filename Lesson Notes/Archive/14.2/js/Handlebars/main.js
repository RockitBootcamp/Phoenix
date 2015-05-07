$(function() {


	$('button').on('click', function() {

		// jQuery
		var source = $('.product-template').html();

		// Handlebars
		var template = Handlebars.compile(source);

		// Handlebars
		var output = template({
			'title': 'fdsfdsfsd',
			'description': 'sdfdsfdsfsdf'			
		})

		// jQuery
		$('body').append(output);

	});


});


