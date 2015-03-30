<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" />
<title>connexion a la platforme </title>
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
   <div></div>
   <div id="central_inscription">
      <form method="post" action="selection.php">
         <fieldset >
            <legend>Vos informations</legend>
          <label>Nom et prenom:</label><input type="text" name="nom" width="20%" required /><br/><br/>
          <label> Matricule :</label><input type="text" width="20%"  required/> <br/><br/> 
          <label>Niveau  :</label><input type="text" width="20%"  required/><br/><br/>    
          <label>Adresse email :</label><input type="text" width="20%"  required/><br/><br/> 
         </fieldset>  
     
      <input type="submit" value="Connexion"/>
      <input type="reset" value="Recommencer" />
    </form> 
   </div>
  
</body>
</html>