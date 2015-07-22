var App = App || {};

App.Models = {};
App.Views = {};
App.Collections = {};


$(function() {

    App.Router = Backbone.Router.extend({
        routes: {
            "": "index",
            "users(/)": "getUsers",
            "user/save(/)": "saveUser",
            "user/:id/delete(/)": "deleteUser",
            "*actions": 'default'
        }
    });

    // Initiate the router
    App.router = new App.Router;

    App.router.on('route:index', function() {
        console.log('Home Page');
    });

    App.router.on('route:getUsers', function(actions) {

        var users = new App.Collections.User();
        users.fetch().done(function() {
            console.log( users );
        });

    });

    App.router.on('route:saveUser', function() {

        // var user = new App.Models.User();
        // user.set('name', 'Brad');
        // user.set('hobby', 'JavaScript and CSS');
        // user.save();

        var user = new App.Models.User({
            'name': 'Brad',
            'hobby': 'Going to Phillys'
        });
        user.save();

        // var user = new App.Models.User();
        // user.save({
        //     'name': 'Brad',
        //     'hobby': 'Going to Phillys'   
        // });

    });

    App.router.on('route:deleteUser', function(id) {
        
        var user = new App.Models.User({id: id});
        user.destroy();

    });

    App.router.on('route:default', function() {
        console.log('404');
    });

    Backbone.history.start();

});
