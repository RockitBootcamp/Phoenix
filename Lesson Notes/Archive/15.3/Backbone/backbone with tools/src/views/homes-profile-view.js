App.Views.HomeProfile = Backbone.View.extend({
  el: 'main',

  render: function(id) {

    var _this = this
    var templateString = $('#template-home-profile').html()
    var tmpl = Handlebars.compile(templateString)


    var home = new App.Models.Home({
      id: id
    })

    home.fetch()
      .done(function (home) {
        console.log(home)
        _this.$el.html(tmpl(home))
      })
      .fail(function () {
        console.log('something went wrong (that ID probably didn\'t exist)')
        router.navigate('/not-found', true);
      })

  }

});
