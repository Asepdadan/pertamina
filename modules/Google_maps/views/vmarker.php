<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      // function initMap() {
      //   var uluru = {lat: -25.363, lng: 131.044};
      //   var map = new google.maps.Map(document.getElementById('map'), {
      //     zoom: 4,
      //     center: uluru
      //   });
      //   var marker = new google.maps.Marker({
      //     position: uluru,
      //     map: map
      //   });
      // }
      // var map;
      // function initMap() {
      //   map = new google.maps.Map(document.getElementById('map'), {
      //     center: {lat: -34.397, lng: 150.644},
      //     zoom: 8
      //   });
      //   var marker = new google.maps.Marker({
      //     position: {lat: -34.397, lng: 150.644},
      //     map: map
      //   });


      // }


      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 18,
          mapTypeId:google.maps.MapTypeId.HYBRID
        });
        var infoWindow = new google.maps.InfoWindow({map: map});


        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            //obj = JSON.parse(pos);
            //console.log(pos.lat);

           

            //infoWindow.setPosition(pos);
            //infoWindow.setContent("location found");
            google.maps.event.addListener(map, 'click', function(event) {
              placeMarker(map, event.latLng);
            });
            

            map.setCenter(pos);
            var marker = new google.maps.Marker({
              position: pos,
              map: map
            });
            marker.addListener('click', function() {
              infowindow.open(map, marker);
            });
            var infowindow = new google.maps.InfoWindow;
            infowindow.setContent(""+marker.getPosition()+"");

          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }
      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }

    //   function initMap() {
    //   var mapCanvas = document.getElementById("map");
    //   var myCenter=new google.maps.LatLng(51.508742,-0.120850);
    //   var mapOptions = {center: myCenter, zoom: 5};
    //   var map = new google.maps.Map(mapCanvas, mapOptions);
    //   google.maps.event.addListener(map, 'click', function(event) {
    //     placeMarker(map, event.latLng);
    //   });
    // }

    function placeMarker(map, location) {
      var marker = new google.maps.Marker({
        position: location,
        map: map
      });
      var infowindow = new google.maps.InfoWindow({
        content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
      });
      infowindow.open(map,marker);
    }


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr-z4cwwfYRd4kofmzNGtCm_BqKUF7Wus&callback=initMap">
    </script>
  </body>
</html>
