var $ = require('jquery');
var Backbone = require('backbone');
var formTemplate = require('../templates/user-form.hbs');


/****************************************
  App
*****************************************/

var App = require('../app');
var User = require('../models/user');

/****************************************
  View: Add User
*****************************************/

var AddUser = Backbone.View.extend({
  el: $("main"),
  editMode: false,

  render: function (userId) {
    var _this = this;
    this.editMode = !!userId;

    // Add Mode
    if (!this.editMode) {
      var output = formTemplate();
      this.$el.html(output);

    // Edit Mode
    } else {
      var user = this.user = new User({ id: userId });

      user.fetch().done(function () {
        var output = formTemplate(user.toJSON());
        _this.$el.html(output);
      });
    }

  },

  events: {
    "submit form.user": "submitForm"
  },

  submitForm: function () {

    // Collect Form Data
    var formData = {
      name: $('form').find('input[name="name"]').val(),
      hobby: $('form').find('input[name="hobby"]').val()
    };

    // Add Mode (Save new User)
    if (!this.editMode) {

      // Only set the image on add mode
      formData.img = 'http://robohash.org/'+ Date.now().toString(16) + '.png'

      App.Collections.User.create(formData, {
        success: function (user) {
          App.router.navigate('/', { trigger: true });
        }
      });
      
    // Edit Mode (Edit User)
    } else {
      this.user.set(formData);
      this.user.save().done(function () {
        App.router.navigate('/', { trigger: true });
      });
    }

    // Prevent Default
    return false;

  }
});

module.exports = AddUser;
