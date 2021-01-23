<?php

session_start();
if(isset($_SESSION['id'])){
$pais = $_SESSION['id'];
}

    $url = "https://corona.lmao.ninja/v2/countries/$pais?yesterday=true&strict=true&query=";
    $urlJSON = file_get_contents($url);
    $urlPHP = json_decode($urlJSON);
    $casos = $urlPHP->active;
    $hoje = $urlPHP->todayCases;
    $mortes = $urlPHP->todayDeaths;
    $recuperadosTotal=  $urlPHP->recovered;
    $testes =  $urlPHP->tests;
    $totalMortes = $urlPHP->deaths;
    $recuperadosDiarios = $urlPHP->todayRecovered;

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

<br>


<div class="covid">
<h1>Covid-19 em <?php echo $pais;?></h1>
<img src="https://www.countryflags.io/<?php echo $pais;?>/flat/64.png">





<h2 style="font-family:'Courier New'"> Casos detetados nas últimas 24h: <?php echo $hoje;?></h2>


<br>

<h2 style="font-family:'Courier New'">Mortes nas últimas 24h: <?php echo $mortes;?></h2>

<br>


<h2 style="font-family:'Courier New'">Total de recuperados nas últimas 24h: <?php echo $recuperadosDiarios;?></h2>

<br>

<h2 style="font-family:'Courier New'">Total de casos ativos: <?php echo $casos;?></h2>

<br>

<h2 style="font-family:'Courier New'">Total de recuperados: <?php echo $recuperadosTotal;?></h2>

<br>


<h2 style="font-family:'Courier New'">Total de mortes: <?php echo $totalMortes;?></h2>

<br>
<h2 style="font-family:'Courier New'">Total de testes efetuados: <?php echo $testes;?></h2>






</div>



    </body>
</html>