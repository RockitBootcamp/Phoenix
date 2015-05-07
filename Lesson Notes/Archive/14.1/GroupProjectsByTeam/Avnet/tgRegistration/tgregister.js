$(function() { 

var userButtonClicked = function() {
	$('.userPopUp').show();
	$('.userSignIn').show();
	$('.userSignUp').hide();
	$('.error').text("");
	$('.email').focus();
	$('.signUpTab').hide();
	$('.signInTab').show();
}	

var reset = function(event) {
	event.preventDefault();
	$('input').val('');
	$('.error').text(''); 
	$('.userSignIn').show();
	$('.userPopUp').hide();
}

var forgotPassword = function() {
	$('.forgotPassword').show();
	$('.signIn').hide();
	$('.signUp').hide();
}

var signInClicked = function() {
	$('.email').val("");
	$('.password').val("");
	$('.userSignIn').show();
	$('.userSignUp').hide();
	$('.signInTab').addClass('.activeTab');
	$('.signUpTab').removeClass('.activeTab');
	$('.email').focus();
}

var signUpClicked = function() {
	$('.userPopUp').show();
	$('.userSignIn').show();
	$('.userSignUp').hide();
	$('.signUpTab').show();
	$('.signInTab').hide();
	$('.firstName').text("");
	$('.lastName').text("");
	$('.email').text("");
	$('.password').text("");
	$('.userSignUp').show();
	$('.userSignIn').hide();
	$('.signUpTab').addClass('.activeTab');
	$('.signInTab').removeClass('.activeTab');
	$('.firstName').focus();
}

//error function inserts error message and makes a red box
var errorMessage = function(inputType, err) {
	$('.error').text(inputType + " is " + err + ".");

}
//event handlers

//signin/up button clicked (signInClicked)
$('.signinButton').on('click',userButtonClicked);

//signin tab clicked ()function
$('.signInTab').on('click',signInClicked);

//signup tab clicked function
$('.registerButton').on('click',signUpClicked);

// //forgot pw clicked function
// $('a.password').on('click', forgotPassword);

// Password hover function 
// $('.password').hover('handlerin', 'handlerout');

// Validate input fields for entry on blur
$('input').on('blur', function() {
	var input = $(this).val();
	var inputClass = $(this).attr('class');
	if ($(this).hasClass('email')) {
		var email = $('.email').val();
		var re = /^(.)+(\@)+(.)+(\.)+(.{1,64})$/;
		if (!re.test(email)) {
			errorMessage("email", "invalid");
		} else {
			$('.error').text("");
		}
	}
	else if (input == '') {
		errorMessage(inputClass, 'required');
	} else {
		console.log('Uncaught Error! In the input fields.');
	}
});

// //cancel clicked function
$('.cancelButton').on('click', reset);


});

// New