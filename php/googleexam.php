<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Question</title>
<link rel="stylesheet" href="../css/style.css" />
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
	$fichier->chargerFichier("../fichier/googleexam.txt");
	$fichier->affiche();
	$infor=$fichier->getInforFichier();
	$question=$fichier->getQuestion();

 ?>
   
     <div id="question">
         <?php echo "<b>".htmlentities($infor[0])."</b><br/>";?>
         <?php echo "<b>".htmlentities($infor[1])."</b><br/>";?>
         <?php echo "<b>".htmlentities($infor[2])."</b><br/>";?>
         <?php echo "<b>".htmlentities($infor[3])."</b><br/>";?>
         
         <form method="post" action="">
         <?php 
		   $cmp=1;
		   for($i=0;$i<20;$i=$i+4){
              echo "<fieldset class='cadre'>".
			       "<legend>Question ".$cmp."</legend>".
			       "<h3>".htmlentities($question[$i])."</h3>".
				   "<input type='checkbox' class='choix' id='question'".$i."1".">".$question[$i+1]."</input><br/>".
				   "<input type='checkbox' class='choix' id='question'".$i."2".">".$question[$i+2]."</input><br/>".
				   "<input type='checkbox' class='choix' id='question'".$i."3".">".$question[$i+3]."</input><br/>".   
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