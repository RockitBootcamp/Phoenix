App.Models.Realtor = Backbone.Model.extend({
    url: function() {
        var base = 'http://localhost:3000/realtors';
        if (this.isNew()) return base;
        return base + '/' + this.id
    }
});
