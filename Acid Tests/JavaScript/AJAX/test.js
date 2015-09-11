'use strict'

var chai = require('chai')
var sinon = require('sinon')
chai.use(require('sinon-chai'))
var expect = chai.expect
var proxy = require('proxyquire').noCallThru()

var $promise = {}

$promise.done = sinon.stub().returns($promise)
$promise.done
  .onCall(0)
    .yields(['dog', 'cat', 'frog'])
  .onCall(1)
    .yields(123)

$promise.then = sinon.stub().returns($promise)

$promise.fail = sinon.stub().returns($promise)
$promise.fail
  .onCall(0)
    .yields('You broke it')

$promise.always = sinon.stub().returns($promise)
$promise.always
  .onCall(0)
    .yields('Good job!')

var $methods = {
  ajax: sinon.stub().returns($promise),
  get: sinon.stub().returns($promise),
  post: sinon.stub().returns($promise),
}

proxy('./solve', {
  'jquery': $methods
})

describe('AJAX', function () {
  it('should be able to use GET shorthand method', function () {
    expect($methods.get.withArgs('http://animals.com/api/v1/pets')).to.have.been.called
    expect($methods.get.firstCall).to.have.been.calledWith('http://animals.com/api/v1/pets')
    expect($promise.done).to.have.been.calledWith(sinon.match.func)
  })

  it('should be able to use POST shorthand method', function () {
    expect($methods.post.withArgs('http://pizzapalace.com/api/v1/order')).to.have.been.called
    expect($methods.post.firstCall).to.have.been.calledWithMatch('http://pizzapalace.com/api/v1/order', {
      toppings: ['pepperoni', 'anchovies']
    })
    expect($promise.done).to.have.been.calledWith(sinon.match.func)
  })

  it('should be able to use AJAX method', function () {
    expect($methods.ajax.withArgs(sinon.match({
      url: 'http://toolbox.com/api/v1/tools'
    }))).to.have.been.called
    expect($methods.ajax.firstCall).to.have.been.calledWithMatch({
      url: 'http://toolbox.com/api/v1/tools'
    })
    expect($promise.done).to.have.been.calledWith(sinon.match.func)
  })

  it('should be able to handle failed requests', function () {
    expect($methods.get.withArgs('http://oops.com/api/v1/broken')).to.have.been.called
    expect($methods.get.secondCall).to.have.been.calledWith('http://oops.com/api/v1/broken')
    expect($promise.done).to.have.been.calledWith(sinon.match.func)
    expect($promise.fail).to.have.been.calledWith(sinon.match.func)
  })

  it('should be able to use then', function () {
    expect($methods.post.withArgs('http://yetanotherapi.com/api/v1/yay')).to.have.been.called
    expect($methods.post.secondCall).to.have.been.calledWith('http://yetanotherapi.com/api/v1/yay')
    expect($promise.then).to.have.been.calledWith(sinon.match.func, sinon.match.func)
  })

  it('should be able to use always', function () {
    expect($methods.ajax.withArgs(sinon.match({
      url: 'http://ilovejavascript.com/api/v1/post/1',
      method: 'PUT',
      data: { likes: 42 }
    }))).to.have.been.called
    expect($methods.ajax.secondCall).to.have.been.calledWithMatch({
      url: 'http://ilovejavascript.com/api/v1/post/1',
      method: 'PUT',
      data: { likes: 42 }
    })
    expect($promise.always).to.have.been.calledWith(sinon.match.func)
  })
})

after('summary', function () {
  expect($promise.done.callCount).to.equal(3)
  expect($promise.fail.callCount).to.equal(1)
  expect($promise.then.callCount).to.equal(1)
  expect($promise.always.callCount).to.equal(1)
})
