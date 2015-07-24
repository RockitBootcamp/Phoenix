var App = App || {};

App.Models.User = Backbone.Model.extend({
    url: function() {
        var base = 'http://localhost:3000/users/';

        if (this.isNew()) {
            return base;
        } else {
            return base + this.id;
        }

    }
});