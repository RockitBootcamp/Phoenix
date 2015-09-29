// console.log('Hello world from index.js');

// variable DECLARATION
var foo;

// variable ASSIGNMENT
foo = 'bar';

if () {
  let baz = 'asdf'; // block scoped
}

const neverChanges = 6; // can't be changed
Math.PI; // built-in constant

// both decl and assn
var foo = 'bar';

// valid characters (numbers cannot start names)
var $_qwertyuiopasdfghjklzxcvbnm1234567890;

foo = 5;

// strings

foo = "boo"; // use single or double, depending on your hipster level

// foo = `string interpolation ${foo}`; // ${foo} will be replaced by the value of foo
// foo = `this
//         is
//         a
//         multiline
//         string
//         booyah`; // eat your heart out PHP

/* "multiline" comment */


// Primitives

'string'; // string
5; // number
null; // null
true; // boolean
undefined; // undefined
// Symbol

// Objects

[]; // Array
{}; // Object
function name() {}; // Function

// Object Literal
var obj = {
  property: 'value',
  nextProperty: null,
  'this is totally 💩': 5
}

// Concat

var string = 'hello' + ' world';

var test = 'hello' + 5;

// console.log(test)

var string2 = 'hello';
string2 = 'world';
string2 = 'hello';

// coercion
var five = 5;
var string3 = string2 + five

// console.dir(string3)
// console.dir(five)

// console.log(true + 5)


// Local vs Global

// function name() {
//   var bar = 'baz';
// }
// name();
// console.log(bar);



var a = 42;
function beep() {
  var a = 56;
}
beep();
console.log(a);
