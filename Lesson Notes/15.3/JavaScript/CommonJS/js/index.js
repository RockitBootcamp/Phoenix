// CommonJS Modules
//

// "import" from a package
// var _ = require('lodash')
// console.log(_)

// "import" from a file
// var add = require('./add') // in the same dir
// console.log('1 + 2 =', add(1, 2))

// var sub = require('../sub') // in the parent dir
// console.log('5 - 3 =', sub(5, 3))

// var mult = require('./math/multiply') // in subdir
// console.log('6 * 4 =', mult(6, 4))

var math = require('./math') // require the whole folder, needs to have index.js
// console.log(math)
console.log('6 * 4 =', math.mult(6, 4))
console.log('5 - 3 =', math.sub(5, 3))
console.log('1 + 2 =', math.add(1, 2))
