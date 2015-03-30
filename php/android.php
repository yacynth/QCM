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
   <?php session_start();?>
   <script>
   $(document).ready(function(e) {
    $("#welcome").html("<b><?php echo "Welcome ".$_SESSION["nom"]; ?></b>");
	$("#option_connexion").css({display:'block'});
	$("#deconnexion").css({display:'block'});
   });
   </script>
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
         
         <form method="post" action="android1.php">
         <?php 
		   $cmp=1;
		   for($i=0;$i<20;$i=$i+4){
              echo "<fieldset class='cadre'>".
			       "<legend>Question ".$cmp."</legend>".
			       "<h3>".htmlentities($question[$i])."</h3>".
				   " <input type='hidden' name='enonce".$cmp."' value='".htmlentities($question[$i])."' />".
				   "<input type='checkbox' class='choix' name='question".$cmp."1' value='".$question[$i+1]."'>".$question[$i+1]."</input><br/>".
				   "<input type='checkbox' class='choix' name='question".$cmp."2' value='".$question[$i+2]."'>".$question[$i+2]."</input><br/>".
				   "<input type='checkbox' class='choix' name='question".$cmp."3' value='".$question[$i+3]."'>".$question[$i+3]."</input><br/>".   
			       "</fieldset>";
				   $cmp++;
		   }
		  ?><br/><br/>
           <input type="submit" value="ENVOYER" />
           <input type="reset" value="RECOMMENCER" />	
          </form>
     </div> 
</body>
</html>