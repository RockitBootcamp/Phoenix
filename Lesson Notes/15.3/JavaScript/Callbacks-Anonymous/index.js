function foo(callback) {
  // do some stuff

  // when finished
  callback()
}

foo(bar())

function bar(str) {
  console.log(str)
}
