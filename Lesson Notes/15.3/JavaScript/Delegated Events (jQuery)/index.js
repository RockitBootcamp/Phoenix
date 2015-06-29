// jQuery Delegated Events

function generateTag(tag) {
  return $('<' + tag + '>')
  // .click(function () {
  //   console.log('this is a NEW div')
  // })
}

$(function () {
  // $('main div').on('click', function () {
  //   alert('I\'ve been clicked!')
  // })

  $('main').on('keyup', 'div > input', function (event) {
    console.log(event.which)
    console.log($(this).val())
  })

  $('main').on('click', 'div', function (event) {
    // alert('I\'ve been clicked!')
    if (event.target === this) {
      $(this).append(generateTag('input'))
    }
    // $(this).append(generateDiv())
  })

  // add an input and use a delegated keyup

  // add select with a delegated change event
  // colors - add a new div with the selected color (and select)
  $('main').on('change', 'select', function () {
    // do something
  })



  $('main').delegate('div', 'click') // do not use - deprecated




})
