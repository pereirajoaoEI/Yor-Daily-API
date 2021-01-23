<?php

session_start();



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Your Daily API</title>
<!-- 

Letter Template 

https://templatemo.com/tm-510-letter



Template Re-distribution is NOT allowed.

-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/demo.css" />
  <link rel="stylesheet" href="css/templatemo-style.css">
  
  <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
		
	</head>

	<body>

			<div id="particles-js"></div>
		
			<ul class="cb-slideshow">
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	        </ul>

			<div class="container-fluid">
				<div class="row cb-slideshow-text-container ">
					<div class= "tm-content col-xl-6 col-sm-8 col-xs-8 ml-auto section">
					<header class="mb-5"><h1>Your Daily API</h1></header>
					<P class="mb-5">Um website que torna o seu dia-a-dia mais fácil.</P>
					
                    <form method="POST" action="country.php" class="subscribe-form">
               	    	<div class="row form-section">

							<div class="col-md-7 col-sm-7 col-xs-7">
                                
			                      <input name="pais" type="text" class="form-control" id="pais" placeholder="Pesquise um lugar..." required/>
				  			</div>
							<div class="col-md-5 col-sm-5 col-xs-5">
								<button type="submit" class="tm-btn-subscribe" name="btn">Procurar</button>
							</div>
						
						</div>
                    </form>
                    
                  

					</div>
				</div>	
			
			</div>	
	</body>

	<script type="text/javascript" src="js/particles.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</html>