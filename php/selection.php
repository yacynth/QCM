<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" />
<title>Bienvenue sur notre platforme des tests </title>
<script type="text/javascript" src="../js/jquery.js"></script>
</head>
<body>
  <?php
  session_start();
    $nom=$_POST["nom"];
	$_SESSION["nom"]=$nom;
	$dossier=opendir("../fichier");
    $nb_fichier=0;
     $liste_liste=array();
    while($fichier=readdir($dossier)){
       if($fichier !='.' && $fichier !='..')
      {
          $liste_liste[$nb_fichier]=$fichier;
          $nb_fichier++;  
      }
     }
  ?>
  <script>
   $(document).ready(function(e) {
    $("#welcome").html("<b><?php echo "Welcome ".$nom; ?></b>");
	$("#liste").append("<tr><td>Android</td><td>ndonna</td><td>janvier</td><td>10</td><td><img class='img_composer' src='../images/qcm.jpg'/></td></tr>");
	$("#option_connexion").css({display:'block'});
	$("#deconnexion").css({display:'block'});
});
  </script>
   
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
          <button id="deconnexion"><a href="../php/acceuil.php">Deconnexion</a></button>
      </div>    
   </div>
   <div></div>
   <div id="central_selection">
      <h1>Selectionner votre Examen</h1>
      <table id="liste">
        <caption>la liste des examens disponibles</caption>
       <tr><th>Examen</th><th>Enseignants</th><th>Session</th><th>Durée(mn)</th><th>Composer</th></tr>
	   
     <tr><td>Android</td><td>ndonna</td><td>janvier</td><td>1</td><td><a href="android.php"><img class='img_composer' src='../images/qcm.jpg' /></a></td></tr>;
     <tr><td>GoogleExam</td><td>Jeminatu</td><td>janvier</td><td>1</td><td><a href="googleexam.php"><img class='img_composer' src='../images/qcm.jpg'/></a></td></tr>;
      
       </table>  
   </div>
  
</body>
</html>