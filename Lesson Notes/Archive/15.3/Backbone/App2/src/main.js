var App = App || {};

App.Views = {};
App.Models = {};
App.Collections = {};

$(function() {

    App.Views.listUsers = new App.Views.ListUsers();
    App.Views.userProfile = new App.Views.UserProfile();

    var AppRouter = Backbone.Router.extend({
        
        routes: {
            "": "index",
            "users(/)": 'users',
            "user/:id": 'userProfile',
            "*actions": "defaultRoute"
        },

        index: function() {
            console.log('Homepage');
        },

        users: function() {
            App.Views.listUsers.render();
        },

        userProfile: function(id) {
            App.Views.userProfile.render(id);
        },

        defaultRoute: function() {
            console.log('404');
        }

    });

    var appRouter = new AppRouter;

    Backbone.history.start();

})