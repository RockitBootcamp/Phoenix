// $(function () {
  // http://jsonplaceholder.typicode.com/

  //http://jsonplaceholder.typicode.com/users

  // $.ajax({
  //   url: 'http://jsonplaceholder.typicode.com/users'
  // }).done(function (data) {
  //   console.log(data)
  // })

  // $.ajax({
  //   url: 'http://jsonplaceholder.typicode.com/users'
  // // }).done(function (data) {
  // }).then(function (data) {
  //   console.log(data)
  // }).fail(function (xhr, errMsg) {
  //   console.log(xhr.status)
  //   // if (xhr.status === 500) {}
  // })


  // $.get
  // $.get('http://jsonplaceholder.typicode.com/users')
  //   .done(function (data) {
  //     console.log(data)
  //   }).fail(function () {
  //     // if (xhr.status === 500) {}
  //   })

  // $.get('http://jsonplaceholder.typicode.com/users')
  //   .done(function (data) {
  //     console.log(JSON.parse(data))
  //   }).fail(function () {
  //     // if (xhr.status === 500) {}
  //   })

  // $.getJSON('http://jsonplaceholder.typicode.com/users')
  //   .done(function (data) {
  //     console.log(data)
  //   }).fail(function () {
  //     // if (xhr.status === 500) {}
  //   })


  // var newUser = {
  //   etc: 123,
  //   name: 'blah'
  // }

  // $.ajax({
  //   url: 'http://jsonplaceholder.typicode.com/users',
  //   type: 'POST',
  //   data: newUser
  // }).then(function (data) {
  //   console.log(data)
  // }).fail(function (xhr, errMsg) {
  //   console.log(xhr.status)
  // })

  // $.post
  // $.post('http://jsonplaceholder.typicode.com/users', newUser)
  //   .done(function (user) {
  //     console.log(user)
  //   })
  //   .fail(function () {
  //     // stuff
  //   })


  // $.ajax({
  //   url: 'http://jsonplaceholder.typicode.com/users',
  //   type: 'PUT',
  //   data: {
  //     name: 'Mr Catwoman',
  //     username: 'leonardo_dicaprio',
  //     asdfaskdfjlkjasdf: 'asdfasdfasdf'
  //   }
  // }).then(function (data) {
  //   console.log(data)
  // }).fail(function (xhr, errMsg) {
  //   console.log(xhr.status)
  // })








  //
  // var userPostsTmpl = Handlebars.compile($('#user-posts').html())

  // $.get('http://jsonplaceholder.typicode.com/users')
  //   .done(function (users) {
  //     // console.log(users)
  //     users.forEach(function (user) {
  //       $.get('http://jsonplaceholder.typicode.com/users/' + user.id + '/posts')
  //         .done(function (userPosts) {
  //           var posts = userPostsTmpl({
  //             user: user,
  //             posts: userPosts
  //           })

  //           $('body').append(posts)
  //         })
  //     })
  //   }).fail(function () {
  //     // if (xhr.status === 500) {}
  //   })









// })



























































































$(function () {
  var baseUrl = 'http://jsonplaceholder.typicode.com'

  function getUsers() {
    return $.get(baseUrl + '/users')
  }

  function getUserPosts(users) {
    users.forEach(function (user) {
      console.log('user data', users)
      $.get(baseUrl + '/users/' + user.name + '/posts')
        .done(function (userPosts) {
          console.log('posts for user ' + user.id, userPosts)
        })
        .fail(function (xhr) {
          console.log('user ' + user.id + ' posts request failed', xhr.status)
        })
    })
  }

  function getUserComments(users) {
    users.forEach(function (user) {
      $.get(baseUrl + '/users/' + user.id + '/comments/')
    })
  }

  getUsers()
    .done(getUserPosts)
    .done(getUserComments)∏
    .done(getUserTodos)
    .fail(function (xhr) {
      console.log('users request failed', xhr.status)
    })



    $.get(....users...)
      .done(function (users) {
          $.get(....posts...)
            .done(function (posts) {
                  $.get(....comments...)
                    .done(function (comments) {

                    })
            })
      })
      .done(function (users) {
        $.get(...todos...)
          .done(function (todos) {
            .....
          })
      })



  $.get('http://jsonplaceholder.typicode.com/posts')
    .done(function (posts) {
      console.log('post data', posts)
    })
    .fail(function (xhr) {
      console.log('users request failed', xhr.status)
    })
})





