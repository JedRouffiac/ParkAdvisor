<!DOCTYPE html>
<html>
	<head>
    		<meta charset="utf-8">

		
   		 <title>Park Advisor</title>
    
    <!-- width:device-width permet de mettre la page aux dimensions de l'appareil l'ouvrant
    intial-scale:1.0 donne le zoom a l'ouverture de la page-->
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
		<!--Auteurs -->
   		<meta name="author" content="Becuwe-Raison-Rouffiac-Vasanthan">
    
		<!--Fichier css associé -->
    		<link href="css/style.css" rel="stylesheet"> 
    
    <!--Font-->
    <style>
    body {font-family: "Playfair Display", Georgia, Serif;text-align: justify;}
    h1,h2,h3,h4,h5,h6 {font-family: "Playfair Display"; letter-spacing: 5px; text-align: center;}
    </style>
      
      
  </head>


  	<body>


		<!--HEADER-->
		<?php include("header.php"); ?>
		<!-- /HEADER ROW -->



    <!-- la page ==============================================-->

        <div class="page">

          <div class="titre">
            <h1>Hôtel Mariott</h1>  
          </br>     
          </div>
      <!-- /. PAGE TITLE-->

  
      <a href="img/hotel-mariott-stg.jpg "> <img class="illustration" alt="" src="img/hotel-mariott-stg.jpg" /></a>
      <p>Hôtel de luxe 5* situé dans le quartier prisé de Las Condes.<br/>
      Vous pourrez apprécier la piscine extérieure, le centre de fitness, les espaces événementiels,
      les restaurants primés et de grandes chambres offrant une vue époustouflante.<br/></p>
      
      <p>Les deux chambres communicantes pour 4 personnes sont à partir de 250.000$.</p>

      <p>Services inclus : petit-déjeuner, spa, parking, Wi-Fi, climatisation, café et thé en illimité.
      </p>

      <p> <strong>Horaires</strong></br>
      Départ avant 12:00.</br>
      Arrivée entre 16:00 et 00:00.</br>
      </p>      
    
<div class="hr-divider"></div>

<h2>Galerie de photos</h2>
 

          <div class='caroussel_diapo1'>
<input checked id="carou_un" name="rotation" type="radio">
<label for="carou_un"></label>
<input id="carou_deux" name="rotation" type="radio">
<label for="carou_deux"></label>
<input id="carou_trois" name="rotation" type="radio">
<label for="carou_trois"></label>
<input id="carou_quatre" name="rotation" type="radio">
<label for="carou_quatre"></label>
<input id="carou_cinq" name="rotation" type="radio">
<label for="carou_cinq"></label>
<input id="carou_six" name="rotation" type="radio">
<label for="carou_six"></label>
<input id="carou_sept" name="rotation" type="radio">
<label for="carou_sept"></label>
<input id="carou_huit" name="rotation" type="radio">
<label for="carou_huit"></label>
<div class="contenu_carou1">
<div class="caroussel1">
<img src="img/hotel-mariott-stg-1.jpg" alt>
<img src="img/hotel-mariott-stg-2.jpg" alt>
<img src="img/hotel-mariott-stg-3.jpg" alt>
<img src="img/hotel-mariott-stg-4.jpg" alt>
<img src="img/hotel-mariott-stg-5.jpg" alt>
<img src="img/hotel-mariott-stg-6.jpg" alt>
<img src="img/hotel-mariott-stg-7.jpg" alt>
<img src="img/hotel-mariott-stg-8.jpg" alt>
</div>
</div>
</div>  

      
  
<div class="hr-divider"></div>
    
      <?php 
        $page = 'mariott';  /* Mettre le nom de l'hotel */
        include("commentaires.php"); 
      ?>
      <div class="hr-divider"></div>

    </div>

    <!--Footer ==========================-->

    <?php include("footer.php"); ?>

    <!--/.Footer-->


  </body>
</html>
