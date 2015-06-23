// step 10 reuse code
function showUserDetails() {
  var name = $(this).text() // => this === the username div you clicked
  alert(name)
}

// generator function (step 2)
function generateHtml(user, msg) { // step 5 add params
  var outerDiv = $('<div>', {
    'class': 'logline'
  })

  var username = $('<div>', {
    'class': 'username',
    text: user // step 5
  })

  // step 9 add click event to username, only new chat lines
  username.click(showUserDetails)

  var message = $('<div>', {
    'class': 'message',
    text: msg // step 5
  })

  var html = outerDiv.append(username, message)

  return html
}

// DOM-ready (step 1)
$(function () {

  // click event (step 3)
  $('#btn').click(function () {
    var $textInput = $('#textInput') // step 7 (replace other $('#nameInput') with var $nameInput)
    var username = $('#nameInput').val() // step 4
    var message = $textInput.val() // step 4

    $('#chatlog').append(
      generateHtml(username, message) // pass in values as arguments, returns html
    ) // step 6

    // step 8
    $textInput.val('')

    return false
  })

  // step 11
  $('.username').click(showUserDetails)
})
