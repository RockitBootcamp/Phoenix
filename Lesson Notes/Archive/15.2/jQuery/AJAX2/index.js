
// wrapped in a timeout, to demonstrate how data will
// load after the page is already loaded
setTimeout(function () {
  // This is the main jQuery AJAX method
  $.ajax({
    // GET'ing data from the /users endpoint
    url: 'http://localhost:3000/users'
  }).then(function (users) {

    // iterate over each user in the response
    users.forEach(function (user) {
      // create a new <li> for each user with their real name
      var $user = $('<li>').text(user.realName);

      // append the new element to the #users ul
      $('#users').append($user);
    });

  });
}, 2000);

// call this function with a user object to create a new user
function createUser(userData) {
  // example $.post() shorthand
  $.post('http://localhost:3000/users', userData)
    .then(function (user) {
      console.log(user);
    }).fail(function (err) {
      console.log('oops, there was an error!');
    }).always(function () {
      console.log('complete');
    });
}

function getComments(start) {
  // this example shows using query params in the URL
  // What is needed to complete this example?
  $.get('http://localhost:3000/comments?limit=100&start=' + start);
}

function renameUser(newName) {
  // for PUT we need to use $.ajax() since there's no shorthand method available
  // PUT is typically used for updating existing records
  // That's why this failed when I initially tried to use POST :)
  $.ajax({
    url: 'http://localhost:3000/users/1',
    method: 'PUT',
    data: {
      realName: newName
    }
  }).then(function (user) {
    console.log(user.realName);
  })
}
