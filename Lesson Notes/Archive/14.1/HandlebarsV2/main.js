$(function() {

	var data = {
		products: [
			{'title': 'Car', 'description': 'asd asdf as df dsa fsad f asdfa'},
			{'title': 'Truck', 'description': 'asd asdf as df dsa fsad f asdfa'},
			{'title': 'Van', 'description': 'asd asdf as df dsa fsad f asdfa'},
			{'title': 'JetSki', 'description': 'asd asdf as df dsa fsad f asdfa'},
			{'title': 'Bike', 'description': 'asd asdf as df dsa fsad f asdfa'},
			{'title': 'Boat', 'description': 'asd asdf as df dsa fsad f asdfa'},
			{'title': 'ATV', 'description': 'asd asdf as df dsa fsad f asdfa'}
		]
	};


	// Prepare the Template
	var source = $("#product-template").html();

	var template = Handlebars.compile(source);

	$('.products').append(  template( data )  );
		
	








	//

	// for (i in products) {
	// 	$('.products').append(template(products[i]));
	// }


	//$('.products').append(template(products));

});