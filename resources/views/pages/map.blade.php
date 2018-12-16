@extends('layouts.index')
@section('content')
<<<<<<< HEAD
  <div id="map"></div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
    <script>
      function initMap() {
        navigator.geolocation.getCurrentPosition(function(position){
          latLng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
          map = new google.maps.Map(document.getElementById("map"),{
            center: latLng,
            zoom: 14,
            disableDefaultUI: true,
          });
          marker = new google.maps.Marker({
            position: latLng,
            map: map
          });
        });
      }
    </script>
=======
    <h1>Map</h1>
>>>>>>> origin/master
@endsection