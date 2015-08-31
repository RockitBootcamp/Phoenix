// 'use strict'

var thing = 'thing'

var anotherThing
anotherThing = 'anotherThing'

function someFunction() {
  var thirdThing = 'stuff'
  console.log(anotherThing)

  function innerFunction() {
    var fourthThing = 'more stuff'
    console.log(thing, thirdThing)
  }

  innerFunction()
}

// console.log(thirdThing)
someFunction()

var obj = {
  name: 'Kevin',
  method: function () {
    console.log(this.name)
    // console.log(this.other())
    var _this = this;

    [1,3,4,56].forEach(function (item) {

      console.log(_this.name + item)
    })
  }
}
obj.method()

function usingThis() {
  console.log('hello', this)
}

usingThis()


// function doSomething() {
//   var j = 1000

//   for (i = 0; i < 1000; i++) {
//     (function (iteration) {
//       setTimeout(function () {
//         console.log('iteration ' + iteration)
//       }, 10)
//     }(i))
//   }


//   console.log('I like the number ' + j)
// }

// doSomething()


// (function ($, document, window) {
//   $(function () {

//   })
// }(jQuery, document, window))

// jQuery = function stealsYourData() {
//   // steal data
//   return jQuery() // proxy the real jquery
// }

var number = 0

function doSomething() {
  number = 9
  console.log(number)
}

function doAnotherThing() {
  var number = 42
  console.log(number)
}

doAnotherThing()
doSomething()
console.log(number)





