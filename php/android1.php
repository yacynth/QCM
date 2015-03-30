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
   <?php session_start(); ?>
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
         <?php
		    //le donnee provenant de la zone du test
			$titrequestion = array();
			$tablereponse=array();
			$corre=array();
			 for($i=1;$i<6;$i++){
				$titrequestion[$i]=$_POST["enonce".$i]; 
				for($j=1;$j<4;$j++){
				  	if(isset($_POST["question".$i."".$j])){
					  $tablereponse[$i]=$_POST["question".$i."".$j];
					  }
				}
			 }
			
				if(strcmp(trim($tablereponse[1]),"android"))
				       $corre[1]="faux";else $corre[1]="vrai";
				if(strcmp(trim($tablereponse[2]),"lollip pop"))
				       $corre[2]="faux";else $corre[2]="vrai";
			    if(strcmp(trim($tablereponse[3]),"Android developement tool"))
				       $corre[3]="faux";else $corre[3]="vrai";
			    if(strcmp(trim($tablereponse[4]),"5444"))
				       $corre[4]="faux";else $corre[4]="vrai";	
			    if(strcmp(trim($tablereponse[5]),"Linux"))
				       $corre[5]="faux";else $corre[5]="vrai";	
					   
		        $message=$titrequestion[1].'==>'.$tablereponse[1]."<br/>".
				          $titrequestion[2].'==>'.$tablereponse[2]."<br/>".
						  $titrequestion[3].'==>'.$tablereponse[3]."<br/>".
						  $titrequestion[4].'==>'.$tablereponse[4]."<br/>".
						  $titrequestion[5].'==>'.$tablereponse[5]."<br/>";
				 echo strcmp(trim($tablereponse[1]),"android") ;
				 echo strcmp(trim($tablereponse[2]),"lollip pop");		   	   
				 mail("yacynth@gmail.com","devoir de".$_SESSION["nom"],$message,"from:tp.info@polytechnique.cm");
				 mail("tp.info@polytechnique.cm","devoir de".$_SESSION["nom"],$message,"from:tp.info@polytechnique.cm");	   	   
		 ?>
         
          <div id="resultat">
             <table>
                 <caption>vos resultats</caption>
                 <tr><th>Questions</th><th>Reponse</th><th>Correction</th></tr>
                 <tr><td><?php echo $titrequestion[1];?></td><td><?php echo $tablereponse[1] ?></td><td id="corr1"><?php echo $corre[1];?></td></tr>
                 <tr><td><?php echo $titrequestion[2];?></td><td><?php echo $tablereponse[2] ?></td><td id="corr2"><?php echo $corre[2];?></td></tr>
                 <tr><td><?php echo $titrequestion[3];?></td><td><?php echo $tablereponse[3] ?></td><td id="corr3"><?php echo $corre[3];?></td></tr>
                 <tr><td><?php echo $titrequestion[4];?></td><td><?php echo $tablereponse[4] ?></td><td id="corr4"><?php echo $corre[4];?></td></tr>
                 <tr><td><?php echo $titrequestion[5];?></td><td><?php echo $tablereponse[5] ?></td><td id="corr5"><?php echo $corre[5];?></td></tr>
             </table><br/>
              <h2>ces resultats seront envoyées a l'enseignant</h2>
             <span id="infor"><?php echo $message;?></span>
          </div>
     </div> 
</body>
</html>