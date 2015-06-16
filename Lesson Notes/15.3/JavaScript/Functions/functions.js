// Function Declaration
// Will be hoisted
function foo () {
  console.log('foo')
}

// Function Expression
// Only the NAME will be hoisted! The assignment will not be hoisted
var foo = function () {
  console.log('foo')
}

// Hoisting

// YOU wrote it like this
// (Never call a function before you define it! This is an ANTIPATTERN example)
foo()

var foo = function () {
  bar()

  // Declarations get hoisted to the top, so this will still work!
  function bar() {
    console.log('bar')
  }
  console.log('hi')
}


// INTERPRETER reads it like this
// only the variable name was hoisted!
var foo // => undefined

foo() // => Throws error "foo is not a function"

foo = function () {
  // This declaration was hoisted!
  function bar() {

  }

  bar()
  console.log('hi')
}

// Examples of functions

var add = function (n1, n2) {
  return n1 + n2;
};

var x = 4;
var y = 12;

var sum = add(x, y);

// console.log(add(x, y))
// console.log(sum)

function divide(n1, n2) {
  return n1 / n2
}

var sum = add(3, 4)
var result = divide(6, 3)

console.log(add(divide(6, 3), 6))

function scope() {
  var z = '12'
  var zz

  function foobar() {
    zz = 234
    console.log(z)
  }

  console.log(zz)
  foobar()
}

scope();
console.log(z);

// A simple function

// define foo FIRST
var foo = function () {
  console.log('hi')
}

foo() // call foo LATER

// Another simple function

function weather() {
  // Maybe this function has to do a bunch of stuff
  // that takes several seconds to complete before it can return
  return 'It\'s freakin hot!'
}

// save it's output in a variable so you don't have to
// wait several seconds every time
var currentWeather = weather()

// put the function call where you want the returned value to go
console.log(weather())
