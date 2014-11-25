
$(document).ready(function() {

  function initialize() {

    var markers = [];
    var map = new google.maps.Map(document.getElementById('map-canvas'), {
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    });

    var defaultBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(43.6382, -79.4377),
        new google.maps.LatLng(43.6764, -79.3000));
    map.fitBounds(defaultBounds);

    var input = /** @type {HTMLInputElement} */(
        document.getElementById('pac-input'));
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var searchBox = new google.maps.places.SearchBox(
      /** @type {HTMLInputElement} */(input));

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(43.6542, -79.3900),
        map: map,
        title: 'Testing marker - We can use here any image we want, this is just a static marker, but it is possible to make it dynamic and I will work on it this week.'
    });

    google.maps.event.addListener(searchBox, 'places_changed', function() {
      var places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      }
      for (var i = 0, marker; marker = markers[i]; i++) {
        marker.setMap(null);
      }

      // For each place, get the icon, place name, and location.
      markers = [];
      var bounds = new google.maps.LatLngBounds();
      for (var i = 0, place; place = places[i]; i++) {
        var image = {
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25)
        };

        // Create a marker for each place.
        var marker = new google.maps.Marker({
          map: map,
          icon: image,
          title: place.name,
          position: place.geometry.location
        });

        markers.push(marker);

        bounds.extend(place.geometry.location);
      }

      map.fitBounds(bounds);
    });

    google.maps.event.addListener(map, 'bounds_changed', function() {
      var bounds = map.getBounds();
      searchBox.setBounds(bounds);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);

  $('h1.title').fadeIn();
  
  
});


