// play around with different types of functions
//
// type out your own functions and call them different ways
// (with different args or do different things inside the function)


// define
var func = function () {}
function func() {}

// call
func()

// function with parameters
function funcWithParams(a, b, c, d, e) {
  // my params ---------^--^--^--^--^
  beep()
  console.log(a,b,c,d,e)
}


// funcWithParams(1, 2, 3, 4, 5)
// arguments -----^--^--^--^--^
// funcWithParams(1,2)


// order of operations

// function with parameters that calls another function
// do demonstrate "order of operations"
// function funcWithParams(a, b, c, d, e) {
//   // my params ---------^--^--^--^--^
//   beep()
//   console.log(a,b,c,d,e)
// }
// console.log(funcWithParams(1,2,3,4,5))

// funcWithParams('Hello', 'World')
// console.log(funcWithParams('Hello', 'world'))

function beep() {
  console.log('beep')
}

// console.log(funcWithParams(1,'hello',3,4,5))



// function returning values

function funcWithReturn() {
  // return true
  // return []
  // return {}
  // return funcWithReturn
  // return function () {}
  // return 45
  return 'hello'
}

// var returnValue = funcWithReturn()
// console.log(returnValue)

// console.log(funcWithReturn())

// $('.tweets').append(tweetTmpl({ name: '...' }))



// callbacks

function funcTakesCallback(callback) {
  // console.log(callback)
  console.log('blah blah blah')
  console.log(1,2,3,4,5,6,7,8,9,10)
  console.log(callback())
}

funcTakesCallback(beep)
funcTakesCallback(function () {
  console.log('Hello')
})

// DOM-ready takes a callback, too!
// $(function () {

// })

// event methods (like "click") take callbacks, too!
// $('button').click(function () {
//   // click!
// })

// rules of a callback
// 1. function must be passed as an argument to another function
// 2. the function receiving the callback must call it later, giving it control

// callbacks style is formally known as "continuation passing style"
//
// review the User Defined Functions material!
