
function addItem(name, quantity){

	cart[name] = cart[name] + quantity;

}

function removeItem(name, quantity){

	cart[name] = cart[name] - quantity;

}

var cart = {
	"bananas":0,
	"apples":0,
	"pears":0,
	add: addItem,
	remove: removeItem
};




$(function(){



	function onProductClick(event){
		
		var productName = this.parentElement.className;

		// Update Model
		cart.add(productName, 1);

		// Get The Banana LI
		var bananaLI = $("ul.cart .bananas");
		if(bananaLI.length == 0 ){
			bananaLI = $("<li></li>");
			bananaLI.addClass("bananas");
			bananaLI.text(cart["bananas"]);
			cartElement.append(bananaLI);
		}
		
		bananaLI.text(cart["bananas"]);

		// Show that the cart was 
		// indeed updated 
		console.log(cart);
	}

	// UI Stuff
	var cartElement = $(".cart");

	var productButtons = $("ul.products button");
	
	// Events
	productButtons.click(onProductClick);
	

});






