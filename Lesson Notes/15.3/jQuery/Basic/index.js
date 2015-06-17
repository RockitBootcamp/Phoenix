// the jQuery global variables are
// jQuery
// $

// jQuery()

// "DOM-ready" callback

$(function () {
  var $head = $('h1')
  var $foo = $('.foo')

  $foo.addClass('hello').appendTo($head)

  // $foo.html('<div class="blue">I\'m blue</div>')

  $foo.text('Words')

  console.log($foo)
})
