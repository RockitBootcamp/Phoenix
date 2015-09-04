var chai = require('chai');
var sinon = require('sinon');
var expect = chai.expect;
chai.use(require('sinon-chai'));

var solutions = require('./solve')

describe('Arrays', function () {
  describe('Literals', function () {
    it('should be able to correctly format', function () {
      expect(solutions.array1).to.deep.equal([1, 2, 3])
    })
  })

  describe('Accessing', function () {
    it('should be able to access values correctly', function () {
      expect(solutions.value1).to.equal(42)
    })

    it('should be able to access values using a variable', function () {
      expect(solutions.index).to.equal(2)
      expect(solutions.value2).to.equal(3)
    })
  })

  describe('Methods and Properties', function () {
    it('should be able to determine the length', function () {
      expect(solutions.value3).to.equal(18)
    })

    it('should be able to get the index of an element', function () {
      expect(solutions.value4).to.equal(3)
    })

    it('should be able to add elements to the array', function () {
      expect(solutions.array3).to.deep.equal(['beep', 'boop', 'biff', 'riff'])
    })

    it('should be able to remove the last element of an array', function () {
      expect(solutions.array4).to.deep.equal(['Hello'])
      expect(solutions.value5).to.equal('world')
    })

    it('should be able to remove the first element of an array', function () {
      expect(solutions.array5).to.deep.equal(['world'])
      expect(solutions.value6).to.equal('Hello')
    })

    it('should be able to add an element to the start of an array', function () {
      expect(solutions.array6).to.deep.equal(['Rockit', 'Bootcamp'])
    })

    it('should be able to get a range of values from an array', function () {
      expect(solutions.value7).to.deep.equal(['x', 1, null])
    })

    it('should be able to remove a range of values from an array', function () {
      expect(solutions.array8).to.deep.equal(['The', 'dog'])
      expect(solutions.value8).to.deep.equal(['quick', 'brown', 'fox', 'jumps', 'over', 'the', 'lazy'])
    })

    it('should be able to add a value at a given index of an array', function () {
      expect(solutions.array9).to.deep.equal(['The', 'quick', 'purple', 'fox', 'jumps', 'over', 'the', 'lazy', 'dog'])
    })

    it('should be able to replace a given value of an array with a new value', function () {
      expect(solutions.array10).to.deep.equal(['The', 'quick', 'brown', 'fox', 'jumps', 'over', 'the', 'crazy', 'dog'])
    })

    it('should be able to convert an array into a string', function () {
      expect(solutions.array11).to.deep.equal(['The', 'quick', 'purple', 'walrus', 'jumps', 'over', 'the', 'crazy', 'dog'])
      expect(solutions.value11).to.deep.equal('The quick purple walrus jumps over the crazy dog')
    })
  })
})
