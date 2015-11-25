var $ = require('jquery')
var Backbone = require('backbone');
var pageTemplate = require('../templates/home.hbs');
var productListTemplate = require('../templates/product-list.hbs');

// Collections
var ProductCollection = require('../collections/product.js');

var HomeView = Backbone.View.extend({
    
    el: 'main',
    
    render: function() {
        var result = pageTemplate()
        this.$el.html(result)

        var productCollection = new ProductCollection()
    
        productCollection.fetch().done(function(products) {
            
            console.log('here');
            var result = productListTemplate(products)
            $('.products').html(result);

        })

    }
})

module.exports = HomeView;