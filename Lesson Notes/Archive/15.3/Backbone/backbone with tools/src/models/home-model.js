App.Models.Home = Backbone.Model.extend({
    url: function() {
        var base = 'http://localhost:3000/homes';
        if (this.isNew()) return base;
        return base + '/' + this.id
    }
});