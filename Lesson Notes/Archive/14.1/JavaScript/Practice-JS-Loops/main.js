
// We'll start by making four objects

var h1 = {
	style: 'Tract Home',
	rooms: 4,
	garage: false,
	bathrooms: 2.5,
	squareFootage: 2300,
	city: 'Phoenix',
	state: 'AZ'
};

var h2 = {
	style: 'Victorian',
	rooms: 1,
	garage: true,
	bathrooms: 3.5,
	squareFootage: 2900,
	city: 'Mesa',
	state: 'AZ'
};

var h3 = {
	style: 'Ranch',
	rooms: 5,
	garage: false,
	bathrooms: 2.5,
	squareFootage: 1700,
	city: 'Mesa',
	state: 'CA'
};

var h4 = {
	style: 'Log Castle',
	rooms: 2,
	garage: true,
	bathrooms: 4,
	squareFootage: 4500,
	city: 'Scottsdale',
	state: 'AZ'
};

// Store each of our objects in this array called MLS
var mls = [h1, h2, h3, h4];

/**
 * Practice: Below are comments instructing you to complete a task. The first
 * one is done for you as a guide. The instruction will tell you what type
 * of homes we want to output. Just do a console log to ensure you're getting
 * the correct output
 */

 // Loop the MLS and output all homes that have 2 or more homes
 for (i in mls) {
 	if (mls[i].rooms >= 2) {
 		console.log(mls[i].style);
 	}
 }

 // Loop the MLS and output all homes from Arizona


 // Loop the MLS and output all homes from Mesa


 // Loop the MLS and output all homes from Mesa, Arizona


 // Loop the MLS and output all homes with over 2 bathrooms and 2000 square feet


 // Loop the MLS and output all homes with exactly 1700 square feet


 // Loop the MLS and output all homes from Arizona with more than two rooms


 // Loop the MLS and output all homes from Arizona with a grarage


 // Loop the MLS and output all homes with more bathrooms than they have bedrooms

