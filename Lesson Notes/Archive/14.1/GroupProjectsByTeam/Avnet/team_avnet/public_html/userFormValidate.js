$(function(){
	var error = [];

	$('#bread').click(function() {
		if ($('.userName input').val().length > 5){
			
		}
		// console.log("yes")
	 	error.push("please fill up user name") ;
	 	
	 	var emailReg =/^[a-zA-Z0-9\.\_\-\~!\^\(){}\'\:\,\|\$]+@[a-zA-Z0-9_\-\+\~!#\^\(){}\'\:\,\|\$]+\.[a-zA-Z0-9\._\-\+\~!#\^\(){}\'\:\,\|\$]+$/g;
	 	
	 	if (emailReg.test($('.email input').val())){
			
			console.log("yes2");
		}else {
			// console.log("no2");
	 		error.push("please provied a working Email") ;
		}
		$("input[type='radio'][name='Gender']:checked");
		if ($("fieldset input").val()){
			console.log("its set");
		}
		
	 	// error.push("please fill up user name");
	
	});	
		console.log(error[0]);

		// return fulse;
});















// var users = {
		// 	'firstName': $('#userName').val(),
		// 	'lastName': $().val(),
		// 	'gender': 'm'
		// }
		// $('input[type="radio"')


		// // var addUserName = $('#userName').val();
		// // var addEmail = $('#email')[0].value;
		// // var addName = $('#name')[0].value;
		// // users.push(addUserName);
		// // users.push(addEmail);
		// // users.push(addName);
		// // console.log(addUserName);
		// console.log(users);

		// if (the form is not good to go) {
			// return false;