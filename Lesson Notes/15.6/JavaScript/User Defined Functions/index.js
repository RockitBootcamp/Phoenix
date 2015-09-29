// Boolean()

function sayHello() {
  console.log('Hello');
}

// sayHello();
// sayHello();
// sayHello();
// sayHello();

function add(a, b) {
  // add numbers and return the result
}

function reciteShakespear() {
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
  console.log('..........')
}




// function declaration
function greet() {};
// statement begins with "function" keyword
// does NOT get assigned anywhere

// console.log(greet());

// function expression
// var greet = function () {};
// statement begins with the "var" keyword
// the function is being assigned
// the function doesn't (necessarily) have a name
// var greet = function greet() {};




function greet() {
  console.log('Hello');
}

// greet();


function greet(name) {
  console.log('Hello ' + name);
}

// greet('John');
// greet('Bob');



function add(a, b) {
  return a + b;
}

// console.log(add('1', 2));

function add(a, b) {
  // console.log(a + b);
  return a + b;
}

// var result = add(23432, 2234424)


function greet(name) {
  return 'Hello ' + name;
}

var greetJoe = greet('Joe');
var greetBob = greet('Bob');

console.log(greetJoe);
console.log(greetBob);
console.log(greetJoe);
console.log(greetBob);


function greet(name) {
  return 'How\'s it going, ' + name + '?';
}

// use "return"
// write a function that divides 2 numbers

// write a function that gives the square of a number

// write a function that gives the cube of a number

// write a function that takes a base and exponent and return the result

function divide(a, b) {
  return divide(a, b);
}

var divide = function () {}


function fact(n) {
  if (n) {
    return n * fact(n - 1);
  } else {
    return 1;
  }
}

console.log(fact(5))


function square(n) {
  return n * n;
}


function cube(n) {
  return n * n * n;
  return Math.pow(n, 3)
}

