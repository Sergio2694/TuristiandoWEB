<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("head.php");?>

  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Waypoints in directions</title>
    <style>
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
        float: left;
        width: 70%;
        height: 100%;
      }
      #right-panel {
        margin: 20px;
        border-width: 2px;
        width: 20%;
        height: 400px;
        float: left;
        text-align: left;
        padding-top: 0;
      }
      #directions-panel {
        margin-top: 10px;
        background-color: #FFEE77;
        padding: 10px;
      }
    </style>
  </head>
<body>
<?php
  include("navbar_usuario.php");
?>
<div class="wrapper row1">
  <div class="container border border-success" style="width: 1100px;">    
    <div class="form-group " >
       <div id="map" width="500" height="500"></div>
    
    <div id="directions-panel"></div>
    </div>
    
    </div>
  </div>
</div>
<br>
<script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        
          calculateAndDisplayRoute(directionsService, directionsDisplay);

      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var waypts = [];
        var checkboxArray = document.getElementById('waypoints');
       
          
            waypts.push({
              location: "Cafetería y Panadería latteña, Turrialba",
              stopover: true
            });
      
      waypts.push({
              location: "Rawlings, Turrialba",
              stopover: true
            });
      

      
      

        directionsService.route({
          origin: "Rikaste - Centro De Comercios, Turrialba",
          destination: "Bar Chavelazo, Turrialba",
          waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
            var summaryPanel = document.getElementById('directions-panel');
            summaryPanel.innerHTML = '';
            // For each route, display summary information.
            for (var i = 0; i < route.legs.length; i++) {
              var routeSegment = i + 1;
              summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
                  '</b><br>';
              summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
              summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
              summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
            }
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFEAbnMBORtXTa_9mX1hysPfo7361F9xI&callback&callback=initMap">
    </script>    
  <br>
<?php
  include("footer.php");
  ?>
  </body>
</html>