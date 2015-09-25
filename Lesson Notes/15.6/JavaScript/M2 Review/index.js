// <script src="index.js"></script>
// <script></script>

// declaration
var foo;

// assignment
foo = 'bar';

// strings

foo = 'single';
foo = 'double';
foo = `interpolation ${4 + 7}`;
foo = `asdfasdf
asdfasfdasdf
sadfasdfasdf
asdfasfasdf`;

// console.log(foo);

var sum = 5 + '8'
// console.dir(+'8')
// console.dir(Number('8'))
// console.dir(~~'8.2')
// console.dir(-'8.2')
// console.dir(parseInt('09'))
console.dir(parseInt('101', 2))
console.dir(parseInt('9A', 16))

console.dir(parseInt('8.9', 10))

console.dir(parseFloat('8.9', 10))
console.dir(sum)

console.dir((.2 + .1).toFixed(1)) // WAT
console.dir(9999999999999999)

console.dir((2).toFixed(2))
console.dir(Number(2).toFixed(4))

console.dir('hello world'.substr(6, 1))
console.dir('hello world'.slice(6, 7))
console.dir('hello world'.charAt(6))
console.dir(String.fromCharCode(34))

console.log(1 - Infinity)

console.dir('' + 5)
console.dir(Number('5'))
console.dir(String(5))
console.dir(Boolean(-1))

