var Backbone = require('backbone');

var ProductModel = Backbone.Model.extend({
    url: function() {
        var base = '/api/product';
        if (this.isNew()) return base;
        return base + '/' + this.id
    }
})

module.exports = ProductModel;