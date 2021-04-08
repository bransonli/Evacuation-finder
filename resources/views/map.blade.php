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
        const myLatLng = { lat: -25.363, lng: 131.044 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: myLatLng,
        });
        new google.maps.Marker({
          position: myLatLng,
          map,
          title: "Hello World!",
        });
      }
    </script>
  </head>
  <body>

    <div class="w3-top">
        <div class="w3-bar w3-red w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="/home_page" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
            <a href="/map" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Map</a>
            <a href="/login" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log-in</a>
            <a href="/signup" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign-up</a>
            <a href="/about" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="/home_page" class="w3-bar-item w3-button w3-padding-large">Home</a>
            <a href="/login" class="w3-bar-item w3-button w3-padding-large">Log-in</a>
            <a href="/about" class="w3-bar-item w3-button w3-padding-large">About</a>
            <a href="/map" class="w3-bar-item w3-button w3-padding-large">Map</a>
            <a href="/signup" class="w3-bar-item w3-button w3-padding-large">Sign-up</a>
        </div>
    </div>

    <br>
    <br>
    <br>


    <h1><b>Suggestion: </b></h1>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAslehPIAvH85Xx9imHwVFgX4OOiaN7NjY&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html>
