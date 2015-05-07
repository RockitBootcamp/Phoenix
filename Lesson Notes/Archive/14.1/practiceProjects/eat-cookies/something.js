

var jar = {
	'chocoCookie': {
		'shape': 'circle',
		'candy': true,
		'qty': 7
	},
	'christmas': {
		'shape': 'tree',
		'candy': false,
		'qty': 4
	},
	'oreo': {
		'shape': 'circle',
		'candy': false,
		'qty': 40
	}
}

var eatCookies = function(cookie) {
	//jar.chocoCookie.qty--;
	//jar['chocoCookie'].qty--;
	jar[cookie].qty--;
	console.log('how many ' + cookie + "? " + jar[cookie].qty);
}

eatCookies('oreo');

eatCookies('chocoCookie');










