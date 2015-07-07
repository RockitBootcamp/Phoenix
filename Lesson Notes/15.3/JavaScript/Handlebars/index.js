$(function () {
  var tmpl = $('#user-template').html()
  var userTmpl = Handlebars.compile(tmpl)

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
    var fields = $('form').serializeArray()
    console.log(fields)

    var simpleFields = {}

    // use with only second-to-last template
    // fields.forEach(function (field) {
    //   if (simpleFields[field.name]) {
    //     simpleFields[field.name] = [].concat(simpleFields[field.name], field.value)
    //   } else {
    //     simpleFields[field.name] = field.value
    //   }
    // })

    // use with all but second-to-last template
    fields.forEach(function (field) {
      simpleFields[field.name] = field.value
    })

    // use with last template
    // $('body').append(userTmpl({
    //   user: simpleFields,
    //   hello: 'Hi everyone!'
    // }))

    // use with all other templates
    $('body').append(userTmpl({
      firstName: $('#firstName').val(),
      lastName: 'Doe'
    }))

    return false
  })
})
