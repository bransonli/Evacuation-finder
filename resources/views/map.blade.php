<!DOCTYPE html>
<html>
  <head>
    <title>Simple Markers</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
    </style>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 80%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      function initMap() {
        const myLatLng = { lat: {{$latitude}}, lng: {{$longhitude}} };
        const EvacLatLng = { lat: {{$nearest_evac_lat}}, lng:{{$nearest_evac_long}} };
        

        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: myLatLng,
        });


        var evac_icon = {
            url: "evacuation.png", // url
            scaledSize: new google.maps.Size(100, 100), // scaled size
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };

        var home_icon = {
            url: "home.png", // url
            scaledSize: new google.maps.Size(100, 100), // scaled size
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };


        new google.maps.Marker({
          position: EvacLatLng,
          map,
          title: "Evacuation",
          icon: evac_icon,
          
        });

        new google.maps.Marker({
          position: myLatLng,
          map,
          title: "Evacuation",
          icon: home_icon,
          
        });

    
     
       
 
      }
    </script>
  </head>
  <body>

    <div class="w3-top">
            <div class="w3-bar w3-red w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="/home_page" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
                <a href="/find" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Find your evacuation center</a>
                <a href="/signup" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign-up</a>
                <a href="/about" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="/home_page" class="w3-bar-item w3-button w3-padding-large">Home</a>
                <a href="/find" class="w3-bar-item w3-button w3-padding-large">Find your evacuation center</a>
                <a href="/about" class="w3-bar-item w3-button w3-padding-large">About</a>
                <a href="/signup" class="w3-bar-item w3-button w3-padding-large">Sign-up</a>
            </div>
        </div>

    <br>
    <br>
    <br>


    <h2><b>Suggested evacuation center: </b>{{$nearest_evac_name}}</h2>
    <br>
    <br>
   
    
    <div id="map"></div>


    <footer class="w3-container w3-padding-64 w3-center w3-opacity">  
            <div class="w3-xlarge w3-padding-32">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAslehPIAvH85Xx9imHwVFgX4OOiaN7NjY&callback=initMap&libraries=&v=weekly"
      async
    ></script>



  </body>
</html>
