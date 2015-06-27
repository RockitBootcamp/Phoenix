// DOM builtins
// document.querySelector('.hero') // only returns the first element found
// document.querySelectorAll('div') // returns an Array of everything matching

// document.getElementById('myIdForSomeElement') // returns exactly one element
// document.getElementsByTagName('div') // every matching element
// document.getElementsByClassName('my-class') // every matching element

// var el = document.querySelector('.hero')
// // define the
// el.innerHTML = '<div></div>' // $(el).html()
// el.setAttribute('title', 'My awesome title') // $(el).attr('title', '...')

// var myArray = ['Oh', 'Hello', 'world', '!!!!']
// var originalArray = myArray

// var myArray = myArray.slice(0,3)
// console.log(myArray)

// var myArray = myArray.join(' ')
// console.log(myArray)

// console.log(originalArray)
// var myArray = myArray.concat(originalArray.pop())
// console.log(myArray)
// console.log(originalArray)


// splice

// var myArray = ['It\'s', 123, 423424, 'let\'s party!']
// var whatIsSplicedOut = myArray.splice(1, 0, 'Friday')
// console.log(myArray)

// var myArray = ['It\'s', 123, 423424, 'let\'s party!']
// var whatIsSplicedOut = myArray.splice(1, 2)
// console.log(myArray)


// var myArray = ['It\'s', 123, 423424, 'let\'s party!']
// var whatIsSplicedOut = myArray.splice(1, 2, Math.PI)
// console.log(myArray)

// sort
// var myArray = [1,4,64,2,4423252,0]

// console.log(myArray.sort())

// var myArray = 'the quick red fox jumped over the lazy brown dog'.split('')

// console.log(myArray.sort().join(''))
// console.log(myArray.join(''))

// sorting numbers numerically
// var myArray = [1,4,64,2,4423252,0]

// myArray.sort(function (a, b) {
//   // console.log(a, b)
//   return a - b
// })
// console.log(myArray)


// reverse

// var myArray = [1,'abc',2,5,'sdf',7,46]

// console.log(myArray.reverse())




// loops aka iterators

// var myArray = [1,2,3,4,5,6,7,8,9,0]

// myArray.forEach(function (item) {
//   console.log(item)
// })

// myArray.forEach(function (item) {
//   console.log(item + 1)
// })



// while

var myArray = [1,2,3,4,5,6,7,8,9,0]
var len = myArray.length

// while (len--) {
//   console.log(myArray[len])
// }

// var i = 0
// while (i < len) {
//   console.log(myArray[i++])
// }

// for..in

var obj = {
  nickname: 'Batman',
  firstName: 'Bruce',
  lastName: 'Wayne'
}

var myArray = []
for (var key in obj) {
  // first iteration key = 'nickname'
  myArray.push(key)
  console.log(key + ' = ' + obj[key]) // first iteration = 'Batman'
}

console.log(myArray)
