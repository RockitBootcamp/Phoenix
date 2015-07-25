var App = App || {};

App.Views.ListUsers = Backbone.View.extend({

    el: $('main'),

    template: Handlebars.compile( $('#list-user').html() ),

    render: function() {

        var users = new App.Collections.User();
        var _this = this;

        users.fetch().done(function() {
            var output = _this.template(users.toJSON());
            _this.$el.html(output);
        });

    }

});