$(function(){

	$('input[name="phone"]').focusout(function() {
		phoneCheck();

  });

  function phoneCheck() {
	// 	var oldValue = $('input[name="phone"]').val();
	// 	var newValue = "(" + "oldValue.subString(0,3)" + ")" +
	// 					"oldValue.subString(3,3)" + "-" +
	// 					"oldValue.subString(6,4)";
	// 	// var intRegex = .replace(/\D/g, "")

	// 	if (oldValue.length == 10) {

	// 	$('input[name="phone"').onFocus(function() {
	// 		oldValue.replace(/\D/g, "");

	// 	});
	// };

  	var phoneNumber = $('input[name="phone"]').val();
		var intRegex = /(\(?\d{3}\)?(-|\.)?\d{3}(-|\.)\d{4})|(\d{10})/;
		
		if (phoneNumber.length < 10) {
			// alert("Please input number with 10 digits");
			$('input[name="phone"]').css('background-color', '#F6CED8');
		};

		if(intRegex.test(phoneNumber)) {
			if (phoneNumber.length == 10) {
				$('input[name="phone"]').val("(" + Math.round(phoneNumber/10000000) + ")"
												+ Math.round(phoneNumber/10000)%1000 + "-" 
												+ phoneNumber%10000);
			} else if (phoneNumber.length > 10) {
				var charRegex = /(\(?\d{3}\)?(-|\.)?\d{3}(-|\.)\d{4})/;
				if (!charRegex.test(phoneNumber)) {
					// alert("Please input number only or \".\", \"-\", \"()\".");
					console.log("hello")
				};
			};			
		};
  };

  // function firstNameCheck() {
  // 	var firstNameInput = $('input[name="first_name"]').val();


		// if (firstNameInput.length < 3) {

		// 	event.preventDefault();
		// 	$('input[name="first_name"]').css('background-color', '#F6CED8');
		
		// };

  // };

  function lastNameCheck () {
	var lastNameInput = $('input[name="last_name"]').val();


		if (lastNameInput.length < 3) {

			event.preventDefault();
			$('input[name="last_name"]').css('background-color', '#F6CED8');
			$('input[name="last_name"]').attr('title', 'Please input name more than 3 characters.');
		
		};

  }

	// validation
	function verify() {

		// firstName check
		verifyFirstName();

		// // lastName check
		// verifyLastName();

		// // email check
		// verifyEmail();

		// //phone check
		// verifyPhone();
	}

	var alertMsg = "";

	function verifyFirstName() {

		alertMsg = "Please enter more than 3 letters.";

  	var firstNameInput = $('#first_name').val();

		if (firstNameInput.length < 3) {

			event.preventDefault();
			$('#first_name').css('border', '1px solid red');
			$('#l_first_name').text(alertMsg);
			$('#l_first_name').css('color', 'red');
		
		};

  };


	$('.save').on("click", function(event){
		verify();
		event.preventDefault();
	})


});

