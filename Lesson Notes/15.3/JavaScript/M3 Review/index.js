// M2 Review

// Objects

var obj = {
  firstName: 'Batman',
  lastName: 'Batman',
  prop: 234,
  subObj: {

  },
  arr: [{

  }, {

  }]
}

console.log(obj.firstName)
console.log(obj['firstName'])

for (var prop in obj) {
  obj['firstName']
}

// JSON
// null, undefined, numbers, strings, arrays, (JSON) objects
var obj = {
  "propertyName": "string",
  "function": "function () { .... }"
}

// Arrays
var array = [[], {}, function() {}, true, 123, null, undefined]

console.log(array.length)

// Loops

for (var i = 0; i < 10; i + 1) {
  // do something
}

while (/* some condition is true */) {
  // do something
}

// {
//   0: 'something',
//   1: 123,
//   2: {}
// }

for (var prop in object) {

}

// array.forEach(function (item, i, array) {
array.forEach(function (item) {

})

// Logic
if () {}

if () {
} else {}

if () {
} else if {}

// conditionals
if (false || true) {}
if (false && true) {}
if (true && false) {}
if (true && true) {}

if (true && false || true) {}
if (false || (false && true)) {}


// Builtins & DOM methods
array.length
array.push()
array.pop()
array.shift()
array.unshift()
array.slice()
array.splice()

// document object methods
document.getElementById('id') // a single element (if one is found)
document.getElementsByClassName('class') // multiple (array)
document.getElementsByTagName('div') // multiple (array)

document.querySelector('div .foo > a') // single element (if found)
document.querySelectorAll('.hero') // all matching elements (array)

// destructive
array.push('new thing') // adds to the end
array.unshift('new thing') // adds to beginning, shifting the other down 1
array.pop() // get one off the end
array.shift() // get one off the beginning

// non destructive
array.slice(4, 6) // starting and ending index
// destructive
array.splice(4, 6, 'new item') // second arg means how many places, arg 3 optional

// destructive
array.sort() // sorts the array

// sorting numbers
array.sort(function (elementA, elementB) {
  return elementA - elementB
})

array.join() // convert to string "joined" on either , (default) or whatever string you decide


// CSS Flow and floats (media elements)
<body>
  <div class="container">
    <div class="graphic"></div>
    <div class="content"></div>
  </div>
</body>
<style>
  .container {
    overflow: hidden;
    background-color: green;
  }
  .container .graphic {
    float: left;
    width: 100px;
    height: 100px;
    background-color: magenta;
  }
  .container .content {
    margin-left: 100px;
    background-color: cyan;
  }
</style>

// CSS Positioning
<div>
  <div class="stop-here">
    <div>
      <div class="hero"></div>
    </div>
  </div>
</div>
<style>
  .stop-here {
    position: relative;
  }
  .hero {
    position: absolute;
    top: 0;
    right: 0;
  }

</style>

// CSS Patterns



// userLoggedIn === true // userLoggedIn = true
// // user is logged in

// userIsPretty === true // userIsPretty = false
// // user is ugly

// // Do not continue unless BOTH conditions are true
// userLoggedIn && userIsPretty
