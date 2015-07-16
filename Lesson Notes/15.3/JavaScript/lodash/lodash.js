$(function () {
  var baseUrl = 'http://jsonplaceholder.typicode.com'

  // $.get(baseUrl + '/posts')
  //   .done(function (posts) {
  //     // console.log(posts)
  //     // console.log(_.find(posts, { id: 2 }))
  //     // var ourUser = posts.filter(function (user) {
  //     //   return user.id === 2
  //     // })
  //     // console.log(ourUser)

  //     // console.log(_.take(posts, 2))

  //     // console.log(_.sortBy(posts, 'id'))
  //     // posts.sort(function (post1, post2) {
  //     //   return post1.date < post2.date
  //     // })

  //     // var aPost = _.sample(posts)
  //     // console.log(_.pick(aPost, ['body', 'userId']))
  //     // {
  //     //   id: 1,
  //     //   body: '...',
  //     //   etc: 'etc'
  //     // }
  //     // {
  //     //   body: '...'
  //     // }

  //     // console.log(_.pluck(posts, 'body'))

  //     // console.log([1,2,3].map(function (e) {
  //     //         return e + 1
  //     //       }))
  //     // console.log(posts.map(function (post, i) {
  //     //         post.iteration = i
  //     //         return post
  //     //       }))
  //     // _.map(posts, function (post) {
  //     //   post.stuff = 123
  //     //   return post
  //     // })

  //     // console.log(_.where(posts, { userId: 2 }))

  //     console.log(_.assign({}, { id: 2 }))

  //     var tweetsToAppend = _.map(tweets, function (tweet) {
  //       var relUser = _.find(users, { id: tweet.userId })
  //       var details = {
  //         tweetId: tweet.id,
  //         handle: relUser.handle,
  //         img: relUser.img
  //       }
  //       return _.assign({}, tweet, details)
  //     })

  //     // _.defaults({ name: 'bob '}, { new obj })


  //     // _.get({ name: '123'}, 'name') // => 123

  //   })


  async.auto({
    users: function (cb) {
      $.get(baseUrl + '/users').done(function (users) {
        cb(null, users)
      })
    },
    posts: ['users', function (cb, results) {
      $.get(baseUrl + '/posts').done(function (posts) {
        cb(null, posts)
        console.log(users)
      })
    }],
    comments: ['users', function (cb) {
      $.get(baseUrl + '/comments').done(function (comments) {
        cb(null, comments)
      })
    }]
  }, function (err, results) {
    console.log(results.users)
  })



  // function (id) {
  //   return $.get(base....)
  // }

  // var getUser = $.get(baseUrl + '/users')
  //   .done(function () {
  //     console.log('this is the done when it was actually done')
  //   })

  // setTimeout(function () {
  //   getUser.done(function () {
  //     console.log('this is the done from the timeout')
  //   })
  // }, 2000)
})
