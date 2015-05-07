$(function() { 

	

	var reset = function(event) {
		event.preventDefault();
		$('input').val('');
		$('.error').text(''); 
		// $('.userSignIn').show();
		// $('.userPopUp').hide();
	}

	var forgotPassword = function() {
		$('.modal registerModal container').hide();
		$('.loginFields').hide();
	}

	var signInClicked = function() {
		$('.loginButton').hide();
		$('.email').val('');
		$('.password').val('');		
		$('.loginFields').show();		
		$('.signInButton').addClass('active');
		$('.registerButton').removeClass('active');
		$('.email').focus();
		$('.error').text('');
		$('.signUpTab').hide();
		$('.signInTab').show();
	}

	var registerClicked = function() {
		//$('.userPopUp').show();
		$('.registerModal').show();
		$('.loginFields').hide();
		$('.signUpTab').show();
		$('.signInTab').hide();
		$('.firstName').text('');
		$('.lastName').text('');
		$('.email').text('');
		$('.password').text('');
		$('.userSignUp').show();
		$('.userSignIn').hide();
		$('.registerButton').addClass('active');
		$('.signInButton').removeClass('active');
		$('.firstName').focus();
	}

	//error function inserts error message and makes a red box
	errorMessage = function(el, inputType, err) {
		var error = $('.error', $(el).parent()[0]);
		error.append('<span class="fa  fa-exclamation"> ' +' </span> '+ inputType + ' is ' + err + '.');
		console.log(inputType + ' is ' + err + '.');
	}


	//signin tab clicked ()function
	$('.loginButton').on('click', signInClicked);

	//signup tab clicked function
	$('.registerButton').on('click', registerClicked);

	// Password hover function 
	// $('.password').hover('handlerin', 'handlerout');

	// Validate input fields for entry on blur fi rregister
	$('.submitButtonRegi').on('click', function() {

		var isValid = true;	

		// Clears the error div
		$('.error').text('');

		var firstName = $(".userSignUp .firstName").val();
		if (firstName == '') {
			errorMessage(this, "First Name", 'required');
			isValid = false;
		}

		var lastName = $(".userSignUp .lastName").val();
		if (lastName == '') {
			errorMessage(this, "Last Name", 'required');
			isValid = false;
		}

		var password = $(".userSignUp .password").val();
		if (password == '') {
			errorMessage(this, "Password", 'required');
			isValid = false;
		}

		var email = $(".userSignUp .email").val();
		if (email == '') {
			errorMessage(this, "Email", 'required');
			isValid = false;
		} else {
			var re = /^[a-zA-Z0-9\.\_\-\~!\^\(){}\'\:\,\|\$]+@[a-zA-Z0-9_\-\+\~!#\^\(){}\'\:\,\|\$]+\.[a-zA-Z0-9\._\-\+\~!#\^\(){}\'\:\,\|\$]+$/;    		
			if (!re.test(email)) {
				errorMessage(this, 'Email', 'invalid');
				isValid = false;
			}
		}

		return isValid;

		
	});
	//valdition for sign in 
	$('.submitButtonSign').on('click', function() {
		var errorMessageR = function(el, inputType, err) {
			var error = $('.error', $(el).parent()[0]);
			error.append('<span class="fa  fa-exclamation"> ' +' </span> '+ inputType + ' is ' + err + '.' + '<p>');
			console.log(inputType + ' is ' + err + '.');
		}

		var isValid = true;	

		// Clears the error div
		$('.error').text('');

		
		var password = $(".userSignIn .password").val();
		if (password == '') {
			errorMessageR(this, "Password", 'required');
			isValid = false;
		}

		var email = $(".userSignIn .email").val();
		if (email == '') {
			errorMessageR(this, "Email", 'required');
			isValid = false;
			//return isValid;
		} else {
			var re = /^[a-zA-Z0-9\.\_\-\~!\^\(){}\'\:\,\|\$]+@[a-zA-Z0-9_\-\+\~!#\^\(){}\'\:\,\|\$]+\.[a-zA-Z0-9\._\-\+\~!#\^\(){}\'\:\,\|\$]+$/;    		
			if (!re.test(email)) {
				errorMessageR(this, 'Email', 'invalid');
				isValid = false;
				
			 }
		}
		
		
	});

	// Cancel clicked function
	$('.cancelButton').on('click', reset);

	// Function for the centered popups
	$('.forgotPasswordButton').on('click', function() {
		$('.userPopUp').hide();
		$('.signInButton').removeClass('active');
		$('.forgotPassword').show();
		$("body").append('<div class="modalOverlay">');
		$("body").append($('.forgotPassword'));
	});
	///valadtion for profileAccountView form 

	$('.profileAccount .btnSave').on('click', function(){
		var errorMessages = function(el, inputType, err) {
			var errors = $('.errorReset');
			errors.append('<span class="fa  fa-exclamation"> ' +' </span> '+ inputType + '<br>');
			console.log(inputType + '.');
		}
		var isValid = true;	

		// Clears the error div
		$('.errorReset').text('');

		var email = $('#inputEmail').val();
		if (email == '') {
			errorMessages(this, "Email", 'required');
			$('#inputEmail').addClass('inputError');
			isValid = false;
		} else {
			var re = /^[a-zA-Z0-9\.\_\-\~!\^\(){}\'\:\,\|\$]+@[a-zA-Z0-9_\-\+\~!#\^\(){}\'\:\,\|\$]+\.[a-zA-Z0-9\._\-\+\~!#\^\(){}\'\:\,\|\$]+$/;    		
			if (!re.test(email)) {
				errorMessages(this, 'Email', 'invalid');
				$('#inputEmail').addClass('inputError');
				isValid = false;
			}
		}

		return isValid;
		
	});
	//form validation for name datil page 
	$('.profileName  .btnSaveNameDetail').on('click', function() {
		errorMessageName = function(el, inputType, err) {
			var errors = $('.errorReset');
			errors.append('<span class="fa  fa-exclamation"> ' +' </span> '+ inputType +  '<br>');
			console.log(inputType +  '.');
		}
		var isValid = true;	

		// Clears the error div
		$('.errorReset').text('');

		var firstName = $("#first_name").val();
		if (firstName == '') {
			$('#first_name').addClass('inputError');
			errorMessageName(this, "First Name", 'required');
			isValid = false;
		}

		var lastName = $("#last_name").val();
		if (lastName == '') {
			$('#last_name').addClass('inputError');
			errorMessageName(this, "Last Name", 'required');
			isValid = false;
		}

		var gender = $("#gender").val();
		if (gender){	
			femaleM=/^(female)|(male)/g;
			if (!femaleM.test(gender)){
				$('#gender').addClass('inputError');
				errorMessageName(this, "not a valid gender");
				isValid = false;
			}
		}

		var age = $("#age").val();
		if (age){
			ageReg=/^[0-9]/g;
			if (ageReg.test(age)) {
				if(age < 5 || age > 120){
					$('#age').addClass('inputError');
					errorMessageName(this, "not a valid age");
					isValid = false;
				}
			}
		}

		var website = $("#website").val();
		if (website) {
			websiteReg=/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+[A-Za-z0-9.-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#?(?:[\w]*))?)/;
			if (websiteReg.test(website)) {
				theLeng = website.length;
				if(theLeng < 10 || theLeng > 2083){
					$('#website').addClass('inputError');
					errorMessageName(this, "not a valid website");
					isValid = false;
				}
			}else {
				$('#website').addClass('inputError');
				errorMessageName(this, "please submit a full url (http)");
				isValid = false;
			}
		}

		return isValid;
 
 	});
	
	//this is valdation for change password 
	$('.btnSaveChangepassword').on('click', function() {

		errorMessagePassword = function(el, inputType, err) {
			var errors = $('.errorResetPassword');
			errors.append('<span class="fa  fa-exclamation"> ' +' </span> '+ inputType +  '<br>');
			console.log(inputType +  '.');
		}

		var isValid = true;	

		// Clears the error div
		$('.errorResetPassword').text('');

		var oldPassword = $("#oldPassword").val();
		if (oldPassword == '') {
			$('#oldPassword').addClass('inputError');
			errorMessagePassword(this, "Old Password nedded", 'required');
			isValid = false;
		}

		var newPassword = $("#newPassword").val();
		if (newPassword == '') {
			$('#newPassword').addClass('inputError');
			errorMessagePassword(this, "New password", 'required');
			isValid = false;
		}else if(newPassword === oldPassword) {
				$('#newPassword').addClass('inputError');
				$('#oldPassword').addClass('inputError');
				errorMessagePassword(this, "can not reuse old password", 'required');
				isValid = false;
				
		}

		var retypeNewPassword = $("#retypeNewPassword").val();

		if (retypeNewPassword != newPassword){	
			$('#retypeNewPassword').addClass('inputError');
			errorMessagePassword(this, "password not matching");
			isValid = false;
		}
		
		return isValid;
	});	
	
	//this is valdation for change password 
	$('.profileProfile .btnSave').on('click', function() {

		errorMessageProfile = function(el, inputType, err) {
			var errors = $('.errorProfile');
			errors.append('<span class="fa  fa-exclamation"> ' +' </span> '+ inputType +  '<br>');
			console.log(inputType +  '.');
		}

		var isValid = true;	

		// Clears the error div
		$('.errorProfile').text('');

		var school = $("#school").val();
		if (school !== '') {
			schoolLeng = school.length;
				if(schoolLeng  > 200){
					$('#school').addClass('inputError');
					errorMessageProfile(this, " Scool name to long ", 'required');
					isValid = false;
				} 
		}else {
			$('#school').addClass('inputError');
			errorMessageProfile(this, " Must input Scool name ", 'required');
			isValid = false;
		}
		
		var bio = $('#bio').val();
		biolen = bio.length;
		if (biolen > 2000){
			$('#bio').addClass('inputError');
			errorMessageProfile(this, "Filed must be between 1-200 ", 'required');
			isValid = false;

		}
		
		return isValid;
	});
	
	//School Autocomplete
	$('#school').autocomplete({
		source: appPath + "/index.php/api/schools",
		select: function(event, ui){
			console.log(event);
		}

	});

	/// calling the carosul
	$('.carousel').carousel({
  		interval: 3000
	});
	///when over on games popup screen/////
	$('.gameImag').hover(function(){
		$(this).css('position','relative');
		$(this.lastChild).show();

	},
	function(){
		$(this.lastChild).hide();
		// $(this).siblings().hide();
		$(this).css('position','static');
	});



});