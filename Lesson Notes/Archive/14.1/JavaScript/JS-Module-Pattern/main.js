// ------ File: map.js -----------------

;var App = App || {};
(function($) {

	App.Map = {
		apikey: 'asdfsadfs90f87sd09',

		init: function() {
		
			$('button').on('click', this.search);

		},

		search: function() {
			//ajax
		},

		render: function() {

		}
	}

})(jQuery);

// ------ File: product.js -----------------

;var App = App || {};
(function($) {

	App.Product = {
		init: function() {

			$('a.search').click(function() {

				App.Map.search();
				App.Map.render();

			});

		}
	}

})(jQuery);

// ------ File: main.js -----------------

(function($) {
	$(function() {

		App.Map.init();
		App.Product.init();

	});
})(jQuery);