$(function () {

  // NOTE these URLs are only TEMPORARY and will stop working at
  // some point because I can't leave my laptop on forever
  // If you want one that you can play with use
  // http://jsonplaceholder.typicode.com/users
  // http://jsonplaceholder.typicode.com/todos
  // http://jsonplaceholder.typicode.com/photos
  // etc...
  // See http://jsonplaceholder.typicode.com/ for more details

  //
  // $.ajax method
  //

  // bare minimum GET request to http://390e7b1b.ngrok.com/users
  // $.ajax({
  //   url: 'http://390e7b1b.ngrok.com/users'
  // })
  //
  // This is fine, but we threw away the response

  // Let's handle the response
  // $.ajax({
  //   url: 'http://390e7b1b.ngrok.com/users'
  // }).done(function (data) {
  //   console.log(data)
  // })
  //
  // See how we add the .done() method after the $.ajax() call
  // .done() and .then() are synonymous, they handle the "success"
  // condition

  // Alternatively, you can use the shorthand version when using GET
  // $.get('http://390e7b1b.ngrok.com/users')
  //   .done(function (data) {
  //     console.log(data)
  //   })
  //
  // Hurray for less typing!

  // If we want to send data (i.e. create new records) to the server we need to POST
  // typically you'll be sending some data as well, as you'll see here
  // $.ajax({
  //   url: 'http://390e7b1b.ngrok.com/users',
  //   type: 'POST',
  //   data: {
  //     id: 923845098,
  //     handle: '@therealklanni',
  //     realName: 'Kevin Lanni',
  //     img: 'something.png'
  //   }
  // }).done(function (data) {
  //   console.log(data)
  // })

  // And here's the shorthand version... much better right?
  // $.post('http://390e7b1b.ngrok.com/users', {
  //   id: 234523452345,
  //   handle: 'whatever',
  //   realName: 'batman',
  //   img: 'blah.png'
  // }).done(function (data) {
  //   // do something
  // })


  // PUT is for updating existing records, typically
  // $.ajax({
  //   url: 'http://390e7b1b.ngrok.com/users/1',
  //   type: 'PUT',
  //   data: {
  //     img: 'west.png'
  //   }
  // }).then(function (data) {
  //   console.log(data)
  // }).fail(function (xhr, error) {
  //   console.log(xhr.status)
  // }).always(function () {
  //   console.log('AJAX is done man')
  // })
  //
  // You can see we also include .fail() to handle errors



  // $.ajax({
  //   url: 'http://390e7b1b.ngrok.com/users/0',
  // }).then(function (data) {
  //   console.log(data)
  // })
  // $.get('http://390e7b1b.ngrok.com/tweets')
  //   .done(function (data) {
  //     console.log(data)
  //   })


// $.get('http://390e7b1b.ngrok.com/tweets')
//   .done(function (data) {
//     console.log(data)
//   })
//   // when it fails, yell at the user
//   // because clearly it was their fault, not the server ;)
//   .fail(function ()  {
//     console.log(' You screwed up. Please try again.')
//   })
//   .always(function () {
//     console.log('credit card information here')
//   })



  // $.ajax({
  //   url: 'http://390e7b1b.ngrok.com/tweets',
  //   type: 'POST',
  //   data: {
  //    something: 234
  //   }
  // }).then(function (data) {
  //   console.log(data)
  // })


  // $.post('http://390e7b1b.ngrok.com/tweets', {
  //   id: Date.now() + 42,
  //   userId: 2,
  //   message: 'Don\'t forget to bring a towel'
  // }).done(function (data) {
  //   console.log(data)
  // }).fail(function () {
  //   console.error('FAILED!')
  // })


  // $.getJSON('http://390e7b1b.ngrok.com/tweets')
  //   .done(function (data) {
  //     data.forEach(function (tweet) {
  //       console.log(tweet.message)

  //       var message = $('<div>').text(tweet.message)
  //       $('body').append(message)
  //     })
  //   })




  //   $.post('http://390e7b1b.ngrok.com/tweets', {
  //     id: 23245,
  //     userId: 3,
  //     message: 'hello'
  //   }).done(function (data){
  //     console.log(data)
  //   }).fail(function(){
  //     console.log('uhhh ohhhh')
  //   })


// POST http://390e7b1b.ngrok.com/tweets
// { id: unique, userId: your user id, message }

// PUT http://390e7b1b.ngrok.com/tweets/:ID
// { whatever property you're updating: the new value }

// POST http://390e7b1b.ngrok.com/replies
// { id: unique, tweetId: some existing id }

// POST http://390e7b1b.ngrok.com/users
// { id: unique number, handle, realName, img }

// GET view replies, tweets, users









// $.ajax({
//   url: 'http://390e7b1b.ngrok.com/tweets'
// }).then(function(data) {
//   console.log(data);
// });




// $.ajax ({
//   url: 'http://390e7b1b.ngrok.com/replies'
// }).then(function (data) {
//   console.log(data)
// })





// $.ajax({
// url: 'http://390e7b1b.ngrok.com/users/1/tweets'
// }).then(function (data) {
//   console.log(data)
// })

// // associate each user with all the tweets they created
// $.getJSON('http://390e7b1b.ngrok.com/users')
//     .done(function (users) {
//       users.forEach(function (user) {
//         $.getJSON('http://390e7b1b.ngrok.com/users/' + user.id +'/tweets')
//           .done(function (userTweets) {
//             console.log(user.handle)
//             user.tweets = userTweets
//             userTweets.forEach(function (userTweet) {
//               console.log(userTweet.message)
//             })
//           })
//       })
//     })



// // associate each tweet to a user (who created it)
// $.getJSON('http://390e7b1b.ngrok.com/users')
//   .done(function (tweets) {
//     tweets.forEach(function (tweet) {
//       $.getJSON('http://390e7b1b.ngrok.com/users' + tweet.userId)
//         .done(function (tweetUser) {
//           console.log('tweet ' + tweet.id + ' belongs to ' + user.handle)
//           tweet.user = tweetUser

//           renderTweet(tweet)
//           // {{user.handle}}
//         })
//     })
//   })





})
