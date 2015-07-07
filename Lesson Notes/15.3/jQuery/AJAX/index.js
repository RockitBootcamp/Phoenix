$(function () {




  // $.ajax({
  //   url: 'http://59607da8.ngrok.com/users/0',
  //   type: 'PUT',
  //   data: {
  //     id: 1,
  //     img: 'brad.png',
  //     handle: '@bradwestfall',
  //     realName: 'Brad Westfall'
  //   }
  // }).then(function (data) {
  //   console.log(data)
  // }).fail(function (xhr, error) {
  //   console.log(xhr.status)
  // }).always(function () {
  //   console.log('AJAX is done man')
  // })



  // $.ajax({
  //   url: 'http://59607da8.ngrok.com/users/0',
  // }).then(function (data) {
  //   console.log(data)
  // })
//   $.get('http://59607da8.ngrok.com/tweets')
//     .done(function (data) {
//       console.log(data)
//     })


// $.get('http://59607da8.ngrok.com/tweets')
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
  //   url: 'http://59607da8.ngrok.com/tweets',
  //   type: 'POST',
  //   data: {
  //    something: 234
  //   }
  // }).then(function (data) {
  //   console.log(data)
  // })


  // $.post('http://59607da8.ngrok.com/tweets', {
  //   id: Date.now() + 42,
  //   userId: 2,
  //   message: 'Don\'t forget to bring a towel'
  // }).done(function (data) {
  //   console.log(data)
  // }).fail(function () {
  //   console.error('FAILED!')
  // })

  // $.get('http://59607da8.ngrok.com/tweets')
  // $.getJSON('http://59607da8.ngrok.com/tweets')
  //   .done(function (data) {
  //     data.forEach(function (tweet) {
  //       console.log(tweet.message)
  //       var message = $('<div>').text(tweet.message)
  //       $('body').append(message)
  //     })
  //   })



  //   $.post('http://59607da8.ngrok.com/tweets', {
  //     id: 23245,
  //     userId: 3,
  //     message: 'hello'
  //   }).done(function (data){
  //     console.log(data)
  //   }).fail(function(){
  //     console.log('uhhh ohhhh')
  //   })


// POST http://59607da8.ngrok.com/tweets
// { id: unique, userId: your user id, message }

// PUT http://59607da8.ngrok.com/tweets/:ID

// POST http://59607da8.ngrok.com/replies
// { id: unique, tweetId: some existing id }

// POST http://59607da8.ngrok.com/users
// { id: unique number, handle, realName, img }

// GET view replies, tweets, users






// $.ajax({
//   url: 'http://59607da8.ngrok.com/tweets'
// }).then(function(data) {
//   console.log(data);
// });




// $.ajax ({
//   url: 'http://59607da8.ngrok.com/replies'
// }).then(function (data) {
//   console.log(data)
// })





// $.ajax({
// url: 'http://59607da8.ngrok.com/users/1/tweets'
// }).then(function (data) {
//   console.log(data)
// })

// associate each user with all the tweets they created
$.getJSON('http://59607da8.ngrok.com/users')
    .done(function (users) {
      users.forEach(function (user) {
        $.getJSON('http://59607da8.ngrok.com/users/' + user.id +'/tweets')
          .done(function (userTweets) {
            console.log(user.handle)
            user.tweets = userTweets
            userTweets.forEach(function (userTweet) {
              console.log(userTweet.message)
            })
          })
      })
    })



// associate each tweet to a user (who created it)
$.getJSON('http://59607da8.ngrok.com/users')
  .done(function (tweets) {
    tweets.forEach(function (tweet) {
      $.getJSON('http://59607da8.ngrok.com/users' + tweet.userId)
        .done(function (tweetUser) {
          console.log('tweet ' + tweet.id + ' belongs to ' + user.handle)
          tweet.user = tweetUser

          renderTweet(tweet)
          // {{user.handle}}
        })
    })
  })





})
