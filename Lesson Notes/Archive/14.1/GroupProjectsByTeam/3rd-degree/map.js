;(function($) {

  //--------geocoder turns location search value into lat/long for maps api-----------
  var geocoder;
  var map;
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(33.433702, -111.941948);
    var mapOptions = {
      zoom: 13,
      center: latlng
    };
    map = new google.maps.Map(document.getElementById('map_div'), mapOptions);
  };

  google.maps.event.addDomListener(window, 'load', initialize);

})(jQuery);




