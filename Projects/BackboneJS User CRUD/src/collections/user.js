var Backbone = require('backbone');


/****************************************
  App
*****************************************/

var App = require('../app');
App.Models.User = require('../models/User');


/****************************************
  Collection: User
*****************************************/

var UserCollection = Backbone.Collection.extend({
  url: App.Settings.apiRoot + '/users',
  model: App.Models.User
});

App.Collections.user = new UserCollection;

module.exports = App.Collections.user;
