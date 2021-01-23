<html lang="eng">
    <head>
      <link rel="stylesheet" href="sports/style.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Your Daily API</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    </head>
    </head>
    <body>
        <?php require("menu.php")?>
    <div class="container">
            <h1>Resultado</h1>
            <div class="title-box">
                <p>Visitado</p>
                <p id="elapsed">45'</p>
                <p>Visitante</p>
            </div>
            <div class="title-box">
                <div class="team">
                    <img  id="homeLogo" >
                    <p id="homeName">Team name</p>
                </div>
                <p id="goals">3  -  1</p>
                <div class="team">
                    <img id="awayLogo">
                    <p id="awayName">Team name</p>
                </div>

            </div>
            <hr>
            <div id="matchTable" class="matches-table">

            </div>
        </div>
       <script src="football.js"></script>
    </body>
</html>