<?php

session_start();
if(isset($_SESSION['id'])){
    $pais = ($_SESSION['id']);
}

?>


<script>

var url = 'http://newsapi.org/v2/top-headlines?' +
          'country=<?php echo $pais;  ?>&' +
          'apiKey=a101c9a4c11d4572b28d55c234765218';
var req = new Request(url);
fetch(req)
    // .then(function(response) {
    //   return response.json();
    //   })
      .then((response) => { 
      if (!response.ok) {
        throw Error("ERROR RESPONSE!");
      }
      return response.json();
    })
    .then((data) => {
     
      for (i = 0; i < data.articles.length; i++) {

        var string= `
      
        <div style="border-top: 1px solid black; padding-top:30px; padding-bottom:30px;">
       <a href="${data.articles[i].url}" > <h3> ${data.articles[i].title}  </h3></a>
       <br>
      <p> ${data.articles[i].description}  </p>
       <br>
       <a href="${data.articles[i].url}" ><img src="${data.articles[i].urlToImage}" style="width: 300px;"></a>
        </div>

        `;

        $("#noticias").append(string);
      
      }
      //document.getElementById('imagem').appendChild(div);

      
      //$("#imagem").append(img);
     
      

     

  
   
      })
</script>



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
<h1>Notícias</h1>
<img src="https://www.countryflags.io/<?php echo $pais;?>/flat/64.png">
<br>
<div id="noticias"> </div>



    </body>
</html>