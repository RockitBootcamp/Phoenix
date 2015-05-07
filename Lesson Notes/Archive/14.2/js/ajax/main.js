$(function() {

	$.ajaxSetup({
		type: 'POST',
		dataType: 'json',
		cache: false,
	});



	$('a').click(function(e) {
		e.preventDefault();
		var user_id = $(this).attr('href').substr('1');


		$.ajax({
			url: 'data.php',
			data: {user_id: user_id},
			success: function(data) {
				
				console.log(data);

			}
		});

	});


});
