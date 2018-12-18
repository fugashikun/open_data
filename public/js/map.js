function initMap() {
    var data = {lat: '35.384118',lng: '139.955796',url: '/info'};

    navigator.geolocation.getCurrentPosition(function(position){
      latLng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
      map = new google.maps.Map(document.getElementById("map"),{
        center: latLng,
        zoom: 14,
        disableDefaultUI: true,
      });

      var markers = new google.maps.Marker({
        position: new google.maps.LatLng(data.lat, data.lng),
        map: map
      });

      google.maps.event.addListener(markers, 'click', (function(url){
        return function(){ location.href = url; };
      })(data.url));
    });
}