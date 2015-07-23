var Backbone = require('backbone');


/****************************************
  App
*****************************************/

var App = require('../app');


/****************************************
  Model: User
*****************************************/

var UserModel = Backbone.Model.extend({
  url: function() {
    var base = App.Settings.apiRoot + '/users';
    if (this.isNew()) return base;
    return base + '/' + this.id
  }
});

module.exports = UserModel;
