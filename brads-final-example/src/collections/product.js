var Backbone = require('backbone');
var ProductModel = require('../models/product');

var ProductCollection = Backbone.Collection.extend({
    model: ProductModel,
    url: function() {
        return '/api/product'
    }
})

module.exports = ProductCollection;