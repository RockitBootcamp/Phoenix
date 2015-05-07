// var goToLunch = function(food) {
// 	console.log( 'We want to eat ' + food() );
// }

// // Anonymous Function
// goToLunch(function(){
// 	return 'pizza';
// });

// // Anpnymous Function
// setInterval(function() {
// 	console.log('hello');
// }, 500);



var person = {
	getName: function(title) {
		console.log( 'Hello ' + title() + ' ' + this.name );
	},
	age: 34,
	name: 'fred'
};

person.getAge = function() {
	console.log( this.age );
}

person.getAge();




