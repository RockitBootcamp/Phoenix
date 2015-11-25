Views = {};

$(function() {

  Views.contactView = new ContactView();
  Views.usersView = new UsersView();
  Views.userProfileView = new UserProfileView();

  var AppRouter = Backbone.Router.extend({
    // Routes
    routes: {
      '(/)': 'index',
      'contact(/)': 'contact', 
      'users(/)': 'listUsers',
      'users/:id': 'userProfile' 
    },

    // Controllers
    index: function () {
      console.log('index');
    },

    contact: function () {
      Views.contactView.render()
    },

    listUsers: function () {
      Views.usersView.render()
    },

    userProfile: function (id) {
      Views.userProfileView.render()
    }

  })

  var appRouter = new AppRouter()

  // Start Backbone history a necessary step for bookmarkable URL's
  Backbone.history.start();


})