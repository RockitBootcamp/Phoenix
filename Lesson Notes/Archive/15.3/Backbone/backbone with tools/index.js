var App = {};
App.Models = {};
App.Views = {};
App.Collections = {};


$(function() {

    /****************************************
      Views
    *****************************************/

    App.Views.home = new App.Views.Homes();
    App.Views.homeProfile = new App.Views.HomeProfile();

    /****************************************
      Collections
    *****************************************/

    App.Collections.home = new App.Collections.Home();


    /****************************************
      Router
    *****************************************/

    App.Router = Backbone.Router.extend({

        routes: {
            '': 'index',
            'homes(/)': 'listHomes',
            'homes/:id': 'homeProfile',
            '*actions': 'default'
        },

        index: function() {
            console.log('index');
        },

        listHomes: function() {
            App.Views.home.render();
        },

        homeProfile: function(id) {
            App.Views.homeProfile.render(id);
        },

        default: function() {
            $('main').html('<h1>That home doesn\'t exist</h1>')
        }

    });

    App.router = new App.Router();

    Backbone.history.start();

});