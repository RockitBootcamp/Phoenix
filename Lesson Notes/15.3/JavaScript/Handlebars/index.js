$(function () {
  var user = {
    name: 'Kevin',
    img: 'http://www.gstatic.com/tv/thumb/tvbanners/184854/p184854_b_v7_aa.jpg'
  }

  var threadString = $('#thread-template').html()
  var threadTmpl = Handlebars.compile(threadString)

  var tweetString = $('#tweet-template').html()
  var tweetTmpl = Handlebars.compile(tweetString)

  function renderThread(user, message) {
    var tweetHtml = renderTweet(user, message)
    var fields = {
      user: user,
      tweet: tweetHtml
    }

    return threadTmpl(fields)
  }

  function renderTweet(user, message) {
    return tweetTmpl({ message: message })
  }

  $('button').on('click', function () {
    // console.log('click!')

    // this is what we would have to do without handlebars
    // fields.forEach(function (field) {
    //   // console.log(field.name, field.value)
    //   // call some generate function, creates a div with the input value
    // })

    // One way to build your Handlebars data
    //
    // var fields = {
    //   firstName: $('input[name=firstName]').val(),
    //   lastName: $('input[name=lastName]').val(),
    //   food: $('input[name=food]:checked').toArray().map(function (input) {
    //     return input.value
    //   }),
    //   password: $('input[type=password]')
    // }
    // console.log(fields)
    // $('body').append(userTmpl(fields))

    // An alternate way to build your Handlebars data
    //
    // var fields = $('form').serializeArray()
    // console.log(fields)

    // var simpleFields = {}

    // use with only second-to-last template
    // fields.forEach(function (field) {
    //   if (simpleFields[field.name]) {
    //     simpleFields[field.name] = [].concat(simpleFields[field.name], field.value)
    //   } else {
    //     simpleFields[field.name] = field.value
    //   }
    // })

    // use with all but second-to-last template
    // fields.forEach(function (field) {
    //   simpleFields[field.name] = field.value
    // })

    // use with last template
    // $('body').append(userTmpl({
    //   user: simpleFields,
    //   hello: 'Hi everyone!'
    // }))

    // use with all other templates
    // $('body').append(userTmpl({
    //   firstName: $('#firstName').val(),
    //   lastName: 'Doe'
    // }))

    // var threadCompiled = userTmpl({ name: 'Kevin', tweet: userCompiled })
    // var tweetCompiled = tweetTmpl({ message: 'I am hardcoded' })

    // $('body').append(threadCompiled)

    $('body').append(renderTweet(user, 'I am hardcoded'))

    return false
  })
})
