<?php 
$dossier=opendir("../fichier");
$nb_fichier=0;
$liste_liste=array();
while($fichier=readdir($dossier)){
if($fichier !='.' && $fichier !='..')
{
  $nb_fichier++;
  $liste_liste[$nb_fichier]=$fichier;
}
}
echo "</br> le dossier a ".$nb_fichier." fichier";
?>
