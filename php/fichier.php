<?php
mb_internal_encoding("UTF-8");
  class Fichier{
	 private $nomFichier;
	 private $inforFichier=array();
	 private $question=array();  
	  
	   public function chargerFichier($fichier){
		   $this->nomFichier=fopen($fichier,"a+");
		   }
	  
	  public function affiche(){
		  for($i=0;$i<25;$i++){
			 if($i <4) 
			      $this->inforFichier[$i]=fgets($this->nomFichier);
             if($i >3)
			    $this->question[$i-4]=fgets($this->nomFichier);			    	  
		  }
	    }
		
	 public function getInforFichier(){
		   return($this->inforFichier);
		 }	
     public function getQuestion(){
		 return($this->question);
		 }	
     	 	 
  }
?>