<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload des fichiers</title>
<link rel="stylesheet" href="../css/style.css" />
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
  <div id="formulaire">
     <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" >
       <h3>Vous etez enseignant et vous voulez deposer le test pour vos etudiants.veillez remplir ces informations pour 
       permettre a vos etudiants d'acceder a votre test.</h3>
        <fieldset id="infos">
           <br/>
          <legend>Uploaded votre devoir sur la platforme</legend>
            <label>Votre nom :</label><input type="text" name="nom" required placeholder="votre nom ici"/><br/><br/>
            <label>Nom de examen</label><input type="text" name="examen" required placeholder="le nom de votre exament" /><br/><br/>
            <label>Adresse email :</label><input type="text" name="email" required placeholder="votre adresse email"/><br/><br/>
            <label>Questionnaire</label><input type="file" name="questionnaire" placeholder="le fichier de vos questions"/><br/><br/>
       </fieldset>
       <input type="submit" value="Envoyer" name="Envoyer"/>
       <input type="reset" value="Reprendre"/>
     </form>
  </div>
  <?php
    if(isset($_POST['Envoyer']))
	{
  $nomFichier=$_FILES['questionnaire']['name'];
  $nomTmp=$_FILES['questionnaire']['tmp_name'];
  $erreur;
  $repertoire="../fichier/";
  //extension du fichier
  $type_fichier=$_FILES['questionnaire']['type'];
  
  if(!strstr($type_fichier,'text/plain'))
   { 
     exit("le fichier n'ext au format txt");
   }
  //on copie les fichiers dans notre repertoire
  if(! move_uploaded_file($nomTmp,$repertoire.$nomFichier))
   exit("la copie s est mal passées");
   	
}
		
  ?>
</body>
</html>
