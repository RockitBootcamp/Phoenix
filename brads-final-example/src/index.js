// General Dependencies
var $ = require('jquery');
var Backbone = require('backbone');

// App
var App = require('./app');

// Views
var HomeView = require('./views/home.js');
var homeView = new HomeView();

var AddProductView = require('./views/add-product.js');
var addProductView = new AddProductView();

var ProductProfileView = require('./views/product-profile.js');
var productProfileView = new ProductProfileView();



$(function() {
    
    var AppRouter = Backbone.Router.extend({
        
        routes: {
            "": "index",
            "add-product(/)": "addProduct",
            "product/:id": "productProfile",
            "*actions": "defaultRoute"
        },

        index: function() {
            homeView.render();
        },

        addProduct: function() {
            addProductView.render()
        },

        productProfile: function(id) {
            productProfileView.render(id)
        },

        defaultRoute: function() {
            console.log('404');
        }

    });

    // Instantiate the router
    App.router = new AppRouter;
    
    // Start Backbone history a necessary step for bookmarkable URL's
    Backbone.history.start();

})