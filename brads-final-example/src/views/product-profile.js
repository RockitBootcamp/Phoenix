var $ = require('jquery')
var Backbone = require('backbone');
var pageTemplate = require('../templates/product-profile.hbs');

// Models
var ProductModel = require('../models/product');

var ProductProfileView = Backbone.View.extend({
    
    el: 'main',

    render: function(id) {
        var _this = this

        var productModel = new ProductModel({id: id})
        productModel.fetch().done(function(product) {
            var result = pageTemplate(product[0])
            _this.$el.html(result)
        });

    }

})

module.exports = ProductProfileView;