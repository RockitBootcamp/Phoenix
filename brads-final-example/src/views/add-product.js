var $ = require('jquery')
var Backbone = require('backbone');
var pageTemplate = require('../templates/add-product.hbs');

// App
var App = require('../app');


var AddProductView = Backbone.View.extend({
    el: 'main',

    events: {
        "submit form.add-product": "submitForm"
    },
    
    render: function() {
        var result = pageTemplate()
        this.$el.html(result)
    },

    submitForm: function() {
        
        var formData = {
            name: $('form.add-product .name').val(), 
            sku: $('form.add-product .sku').val()
        }

        $.post('/api/product', formData).then(function(productUrl) {
            var parts = productUrl.split('/');
            productId = parts.pop();

            App.router.navigate('product/' + productId, true)

        })


        return false
    }

})

module.exports = AddProductView;