// module requiring another module
var mult = require('./multiply')
var add = require('../add')
var sub = require('../../sub')

// Export technique A
module.exports = {
  mult: mult,
  add: add,
  sub: sub
};

// Export technique B
// exports.mult = mult;
// exports.add = add;
// exports.sub = sub;
