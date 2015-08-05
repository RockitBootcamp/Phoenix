
/****************************************
  Views
*****************************************/

var homesView = new HomesView();
var homesProfileView = new HomesProfileView();

/****************************************
  Collections
*****************************************/

var homeCollection = new HomeCollection();


/****************************************
  Router
*****************************************/

var Router = Backbone.Router.extend({

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
        homesView.render();
    },

    homeProfile: function() {
        homesProfileView.render();
    },

    default: function() {
        console.log('404');
    }

});

var router = new Router();

Backbone.history.start();