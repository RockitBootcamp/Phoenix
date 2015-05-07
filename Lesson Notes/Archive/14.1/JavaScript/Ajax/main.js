$(function() {

	$.ajaxSetup({
		type: 'POST',
		dataType: 'JSON',
		cache: false
	});

	$('.state').on('change', function() {

		var state = $('.state').find(':selected').val();
		
		$.ajax({
			url: 'cities.php',
			data: {'state': state},
			success: function(data) {
				
				$('.city').html('');
				for (i in data.cities) {
					$('.city').append('<option>' + data.cities[i] + '</option>');
				}

			}
		});

	});




});