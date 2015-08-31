var App = App || {};

App.Views.UserProfile = Backbone.View.extend({

    el: $('main'),

    render: function(id) {

        var user = new App.Models.User({id: id});
        var _this = this;

        user.fetch().done(function() {
            _this.$el.html( user.get('name') );
        });

    }

});
