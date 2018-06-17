<!DOCTYPE html>
<html>
  <head>
   <?php include("head.php");?>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Waypoints in directions</title>
    <style>
      #right-panel {
        font-family: 'Arial','sans-serif';
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
        width: 100%;
        height: 100%;
        background-color: #ffffff;

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
        background-color: #ffffff;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <?php
      include("navbar_usuario.php");
    ?>
        <div class="wrapper row1" >
          <br>
          <h1 style="text-align: center;">Rutas de los lugares turisticos</h1>
    <br>
  </div>
    <div id="map" class="wrapper row1" >
    <br>
    </div>
    
    <div id="directions-panel" style="width: 670px;height: 665px;" ></div>

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
    
    <div class="wrapper row1" >
          <br>
          <div class="form-group ">
            <br>
          <div style="text-align: center;">
            <div class="form-group">
          <h2 style="text-align: center;" class="text-danger">Ver información: </h2>
            <div class=" col-md-4 " style="text-align: center;">
              <select class="form-control btn" id="sel1" name="sellist1">
                <option value="1"> Bar Chavelazo </option>
                 <option value="2"> Rawlings </option>
                 <option value="3"> Cafetería y Panadería latteña </option>
                 <option value="4"> Rikaste </option>

              </select>
                          <input type="button" class="btn btn-success col-md-8" value="Ver información" onclick="location='InformacionLugar.php'" id="BtnGuardar">

            </div>

          </div>
          <br>
          </div>
  </div>
    <br>
  </div>
    
    <?php
  include("footer.php");
  ?>
  </body>
</html>