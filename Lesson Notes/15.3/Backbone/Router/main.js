// Template
// Its our template based on what we want, but its also
// with the full power of a backbone router
var AppRouter = Backbone.Router.extend({
    init: function() {
        Backbone.history.start();
    }
    routes: {
        "users/": "getUsers",
        "user/:id/delete/": "deleteUser"
    }
});

// Initiate the router
var appRouter = new AppRouter;

appRouter.on('route:getUsers', function(actions) {
    console.log('Get users');
});

appRouter.on('route:deleteUser', function(id) {

    console.log('You want to delete user ' + id);

});





