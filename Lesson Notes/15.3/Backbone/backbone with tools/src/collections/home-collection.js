var HomeCollection = Backbone.Collection.extend({
    url: 'http://localhost:3000/homes',
    model: HomeModel
});
