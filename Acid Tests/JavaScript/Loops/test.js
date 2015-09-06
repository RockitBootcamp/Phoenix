'use strict'

var chai = require('chai')
var sinon = require('sinon')
chai.use(require('sinon-chai'))
var expect = chai.expect
var proxy = require('proxyquire')

var spies = {
  function1: function () {},
  function2: function () {},
  function3: function () {},
  function4: function () {}
}

function proxify() {
  proxy('./solve', {
    './spies': spies
  })
}

describe('Loops', function () {
  describe('for loop', function () {
    var mock = sinon.mock(spies)

    before(function () {
      mock.expects('function1').withArgs(sinon.match(function (value) {
        if (typeof value === 'number' && value >= 0 && value <= 100) {
          return true
        } else {
          return false
        }
      })).exactly(100)

      proxify()
    })

    it('should be able to iterate 100 times', function () {
      mock.verify()
    })
  })

  describe('while loop', function () {
    var mock = sinon.mock(spies)

    before(function () {
      mock.expects('function2').withArgs(sinon.match(function (value) {
        if (typeof value === 'number' && value >= 0 && value <= 100) {
          return true
        } else {
          return false
        }
      })).exactly(100)

      proxify()
    })

    it('should be able to iterate 100 times', function () {
      mock.verify()
    })
  })

  describe('for..in loop', function () {
    var mock = sinon.mock(spies)

    before(function () {
      var values = [1, 2, 3, 4, 5, 6, 'a', 'b', 'c', 'd', 'e', 'f']

      mock.expects('function3').withArgs(sinon.match(function (value) {
        return values.indexOf(value) > -1
      })).exactly(6)

      proxify()
    })

    it('should be able to iterate over an object', function () {
      mock.verify()
    })
  })

  describe('forEach loop', function () {
    var mock = sinon.mock(spies)

    before(function () {
      var values = [1, 2, 3, 'foo', 'bar', 'baz']

      mock.expects('function4').withArgs(sinon.match(function (value) {
        return values.indexOf(value) > -1
      })).exactly(6)

      proxify()
    })

    it('should be able to iterate over an array', function () {
      mock.verify()
    })
  })
})
