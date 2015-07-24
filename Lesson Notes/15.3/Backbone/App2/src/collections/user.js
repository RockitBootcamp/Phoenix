var App = App || {};

App.Collections.User = Backbone.Collection.extend({
    model: App.Models.User,
    url: 'http://localhost:3000/users'
});