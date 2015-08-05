var HomesView = Backbone.View.extend({

    el: 'main',

    events: {
        'click .view-profile': 'clickViewProfile'
    },

    render: function() {

        this.$el.html('<div class="homes"></div>');

        homeCollection.fetch().done(function() {
            var template = Handlebars.compile( $('#template-home').html() )
            homeCollection.each(function(homeModel) {

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

    },

    clickViewProfile: function(e) {

        // Note that we do $(e.target) instead of $(this)
        var id = $(e.target).parents('.home').data('id');
        console.log(id);

        // uncomment this to do a backbone redirect to a new "page"
        router.navigate('homes/' + id, true);

        // Note that the above .navigate() method will change the
        // URL path, but the router is currently setup to do
        // nothing but a console log for visinging the home/:id
        // route. So you'll have to develop that view to
        // replace the contents of the <main> tag to feel like the
        // page changed
    }

});
