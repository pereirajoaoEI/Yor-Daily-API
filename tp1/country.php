<!-- <button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script> -->





<?php


session_start();

$id = isset( $_POST['pais'])?$_POST['pais']:$_SESSION['cidade'];

  if(isset($id)){
    $_SESSION['cidade'] = $id;
    


        
        $geo_url = "http://www.mapquestapi.com/geocoding/v1/address";
        $geo_key = "XFNxQ82etHEFDAjhOSzhE4hozjwbRq45";
        $geo_url_api = "$geo_url?key=$geo_key&location=$id";

        $geoJSON = file_get_contents($geo_url_api);
        $geoPHP = json_decode($geoJSON);

        $lat = $geoPHP->results[0]->locations[0]->latLng->lat;
        $lng = $geoPHP->results[0]->locations[0]->latLng->lng;

        $localidade = $geoPHP->results[0]->locations[0]->adminArea5;
        $pais = $geoPHP->results[0]->locations[0]->adminArea1;

        /*******************************************/


        $meteo_url = "https://api.darksky.net/forecast";
        $meteo_key = "814e5b27d87937feb926c8b0178f77c3";
        $params = "units=si";
        $meteo_url = "$meteo_url/$meteo_key/$lat,$lng?$params";

        $meteoJSON = file_get_contents($meteo_url);
        $meteoPHP = json_decode($meteoJSON);

        $temperatura = $meteoPHP->currently->temperature;
        $icon = $meteoPHP->currently->icon;
        $icon_url = "https://darksky.net/images/weather-icons/$icon.png";
        
        
        $_SESSION['id'] = $pais;
      }

?>




<!DOCTYPE html>
<html lang="en">
    <head>
      <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Your Daily API</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    </head>
    <body>


<?php require("menu.php");?>


    <?php
            echo"
            <br>
            <h1>Meteorologia</h1>
            <h2> $localidade, $pais </h2>
            <img src='https://www.countryflags.io/$pais/flat/64.png'>
            <h4> Temperatura: $temperatura ºC </h4>
            <img src='$icon_url'  />
            ";

            
    ?>

    </body>
</html>