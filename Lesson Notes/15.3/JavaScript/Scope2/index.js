function outer() {
  // // console.log('outer')
  // var foo = 'bar'

  // function inner() {
  //   // console.log('inner')
  //   foo = 'baz'

  //   function core() {
  //     // console.log('core')
  //     var foo = 'hello'
  //     console.log(foo)
  //   }

  //   core()
  //   console.log(foo)
  // }

  // inner()
  // console.log(this)
  // console.log(global)
}

outer()
// console.log(foo)


// this

// obj = {
//   thing: 'stuff',
//   method: function () {
//     // console.log(this)
//     console.log(this.thing)
//   }
// }

// obj.method()

// IIFE
// Immediately-Invoked Function Expression
// "Iffy"

// ;(function ($, doc, undef) {
//   $(function () {

//     console.log($.ajax)

//     setTimeout(function () {
//       console.log($.ajax)
//     }, 10)

//     // console.log('ohai!')

//   })
// }(jQuery, document, undefined))

;(function (x) {
  console.log(x.foo)

  setTimeout(function () {
    console.log(x.foo)
  }, 10)
}(global))

foo = 'bar'
