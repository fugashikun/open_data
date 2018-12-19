function initMap() {
    var data = {lat: '35.384118',lng: '139.955796',url: '/info'};

    navigator.geolocation.getCurrentPosition(function(position){
      latLng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
      map = new google.maps.Map(document.getElementById("map"),{
        center: latLng,
        zoom: 14,
        disableDefaultUI: true,
      });
      marker = new google.maps.Marker({
        position: latLng,
        map: map,
        icon: {
          url: 'assets/razuppi.gif',
          scaledSize: new google.maps.Size(70, 70),
        }
      });


      var markers = new google.maps.Marker({
        position: new google.maps.LatLng(data.lat, data.lng),
        map: map,
        icon: {
          url: 'assets/pin.png',
          scaledSize: new google.maps.Size(50,50),
        }
      });

      google.maps.event.addListener(markers, 'click', (function(url){
        return function(){ location.href = url; 
        };
      })(data.url));
    });
}