 

      function initialize(r) { 
      
        var locations = [
          ['La concha de la lora', 47.06976, 15.43154, 1],
          ['Stadtbibliothek dieMediathek', 47.06975, 15.43116, 2],
          ['Stadtbibliothek Gösting', 47.09399, 15.40548, 3],
          ['Stadtbibliothek Graz West', 47.06993, 15.40727, 4],
          ['Stadtbibliothek Graz Ost', 47.06934, 15.45888, 5],
          ['Stadtbibliothek Graz Süd', 47.04572, 15.43234, 6],
          ['Stadtbibliothek Graz Nord', 47.08350, 15.43212, 7],
          ['Stadtbibliothek Andritz', 47.10280, 15.42137, 8]
        ];

        var mapOptions = {
          center: new google.maps.LatLng(3.425675924511549, -76.55270937499995),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
          });
        }

          if (r.length!=0) {
    for(i = 0;i<r.length;i++){
     var marcador=new google.maps.Marker({
      position: new google.maps.LatLng(r[i].lat,r[i].lon),
    });

          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));
        }
      }

       $.ajax({
    url: 'data.php',
    type: 'POST',
    data: { marcador: idAct },
    dataType: 'json',
    success: function(resultado) {
      console.log(resultado);
      initialize(resultado);
    }
  })
    }
