
// Primitives
var str = 'string' // String
var num = 5 // Number
var bool = true // Boolean
var nothing = null // null
var undef = undefined // undefined

// Coercion

// long way
var strNum = String(num); // => "5"
var numStr = Number(str); // => NaN
var boolNum = Boolean(num); // => true

// short way
var strNum = '' + num; // => "5"
var numStr = +str; // => NaN (not a number)
var numStr = +bool; // => 1
var boolNum = !!num; // => true

// safest way for numbers
var strNum = parseInt(str, 10) // => 5
var strNum = parseFloat('123.45') // => 123.45

5 === 5.0 // => true

// For everything else, there's
// Object
var emptyObject = {}
var emptyArray = []

var object = {
  property: 5 + 6
}
