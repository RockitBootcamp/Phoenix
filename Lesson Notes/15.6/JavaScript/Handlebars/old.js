$(function () {
  var divTmpl = $('#div-template').text()
  var createDiv = Handlebars.compile(divTmpl)

  $('body').append(createDiv({ text: 'Hellooooo' }))
  $('body').append(createDiv({ text: 'world!' }))


})
