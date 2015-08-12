var HomesProfileView = Backbone.View.extend({
  el: 'main',

  render: function(id) {
    console.log('render home profile');
    var _this = this
    var templateString = $('#template-home-profile').html()
    var tmpl = Handlebars.compile(templateString)

    var home = new HomeModel({
      id: id
    })

    home.fetch()
      .done(function (home) {
        console.log(home)
        _this.$el.html(tmpl(home))
      })
      .fail(function () {
        console.log('something went wrong (that ID probably didn\'t exist)')
        router.navigate('/404', true);
      })

  }

});
