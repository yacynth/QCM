<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Question</title>
<link rel="stylesheet" href="../css/style.css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<style>
 .cadre{margin-left:10%;margin-right:10%;}
 #question{margin-left:10%;width:70%;
  border:solid 5px #CCC;}
 .choix{float:left;}
</style>
</head>
<body>
    <div id="option">
      <div>
          <img id="logo" src="../images/logo.png"/>
      </div>
     
      <div id="menu">
          <ul>
              <li><a href="../php/acceuil.php">Acceuil</a></li>
              <li><a href="../php/inscription.php">Examen</a></li>
              <li><a href="../php/upload.php">Upload devoir</a></li>
          </ul>
      </div>
      <div id="option_connexion">
          <p id="welcome"></p> 
          <button id="deconnexion">Deconnexion</button>
      </div>    
   </div>
 <?php
    include_once("fichier.php");
	$fichier=new Fichier();
	$fichier->chargerFichier("../fichier/android.txt");
	$fichier->affiche();
	$infor=$fichier->getInforFichier();
	$question=$fichier->getQuestion();

 ?>
   
     <div id="question">
         <?php echo "<b>".htmlentities($infor[0])."</b><br/>";?>
         <?php echo "<b>".htmlentities($infor[1])."</b><br/>";?>
         <?php echo "<b>".htmlentities($infor[2])."</b><br/>";?>
         <?php echo "<b>".htmlentities($infor[3])."</b><br/>";?>
      </div>
      
      <div id="madate"></div><button id="bouton">Afficher</button>
      <div id="resultat"> 
      <script>
	   $(document).ready(function(e) {
		   var madate=new Date();
		   var heure=60;
		   setTimeout(anima,1000);
		      });
			  function anima(){
				  $("#madate").append("<b>"+heure+"</b>");
				  heure=heure-1;
				  $("#madate").val("");
				  }
	  
	  </script>
      <table>
          <caption> le resultat de votre test android</caption>
       <tr><th>Question</th><th>Enoncé</th><th>Reponse</th><th>Remarque</th></tr> 
       <tr><td>1</td><td>Quel est android</td><td>lollip</td>bon</tr>   
      </table>  
      </div>
</body>
</html>