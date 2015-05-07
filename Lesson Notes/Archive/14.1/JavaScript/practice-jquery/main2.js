$(function() {

	// all anchor text yellow
	$('a').css("color", "yellow");

	// All div solid red border 5px
	$('div').css("border", "solid 5px red");

	// All nav text = "WHAT????"
	$('nav').text("WHAT???");


	// all anchors text = "WHAT???"

	// all anchor text color Chocolate 
	$('a').css("color", "Chocolate");


	// all anchor background color MediumOrchid 
	$('a').css("background-color", "MediumOrchid");

	// Change span to 3.

	// Change span to 4 ... then 3 sec later, change to 5
	
	// $( "span" ).text("4")
	// 	.delay(3000)
	// 	.queue(function(){
	// 		$( "span" ).text("5");
	// 	});

	// When you click the mouse change page background 
	//	to OliveDrab 
	// $("body").click(function(){
	// 	$(this).css("background-color", "OliveDrab");
	// });


	// When I click the body
	// change the text in span
	// to 7
	// $("body").click(function(){
	// 	$("span").text(7);
	// });









	// When you click body, 
	// increment the value in span by 1
	$("body").click(function(){

		var x = $("span").text();
		$("span").text(++x);


		x++ // return value ... then increment

		++x // inc.. then return value

	});
	

	console.log("1" + 10);













});