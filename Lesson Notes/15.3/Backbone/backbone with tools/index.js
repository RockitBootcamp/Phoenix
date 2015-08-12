
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

    homeProfile: function(id) {
        homesProfileView.render(id);
    },

    default: function() {
        console.log('404');
        $('main').html('<h1>That home doesn\'t exist</h1>')
    }

});

var router = new Router();

Backbone.history.start();
