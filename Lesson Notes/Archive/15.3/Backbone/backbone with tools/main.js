var HomeModel = Backbone.Model.extend({
    url: function() {
        var base = 'http://localhost:3000/homes';
        if (this.isNew()) return base;
        return base + '/' + this.id
    }
});

var HomeCollection = Backbone.Collection.extend({
    url: 'http://localhost:3000/homes',
    model: HomeModel
});






$(function() {

    var map = new GMaps({
        el: '.map',
        lat: 33.4434977,
        lng: -112.0168076,
        zoom: 11
    });


    var homes = new HomeCollection();


    /****************************************
      Build list of homes
    *****************************************/

    homes.fetch().done(function() {
        var template = Handlebars.compile( $('#template-home').html() )
        homes.each(function(homeModel) {

            var output = template({
                id: homeModel.id,
                name: homeModel.get('name'),
                price: homeModel.get('price')
            });

            $('.homes').append( output );

        });

        $('.home input').knob({
            width: '100%',
            displayInput: false,
            max: 500000,
            readOnly: true
        })

    })


    /****************************************
      When a home is clicked
    *****************************************/

    $('.homes').on('click', 'button.add-marker', function() {
        var id = $(this).parents('.home').data('id');
        var home = homes.get(id);

        map.addMarker({
            lat: home.get('lat'),
            lng: home.get('lng'),
            title: home.get('name'),
            click: function(e) {
                alert('You clicked in this marker');
            }
        });

    })

    
});




