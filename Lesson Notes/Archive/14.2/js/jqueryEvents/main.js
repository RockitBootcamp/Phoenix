$(function() {


	$('form').on('submit', function(e) {

		e.preventDefault();


		console.log('Form Click');
	});


	$('input').on('focus', function() {
		console.log('focus');
	});

	$('input').on('blur', function() {
		console.log('blur');
	});

});
