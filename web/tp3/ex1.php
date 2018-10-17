<?php 


/**
 * ****************************************
 * **** TP 3 ATELIER DEVELOPEMENT SERVEUR
 * **** EXERCICE 1 
 * @author Amine L'ch 
 * ****************************************
 */

$consonne=0; 
$voyelle=0;
$mot=strtolower("Je suis un mot") ; 
$voyelle_list=["a","e","i","o","u"];

for($i=0;$i<=strlen($mot);$i++) {
	
	$caractere= substr($mot,$i,1); 
	if(in_array($caractere, $voyelle_list)){
		$voyelle++; 
		}
	else { 
		$consonne++; 
}
}

echo "Le mot  :<b>". $mot . "</b><br>contient ". $voyelle . " voyelles<br> " . "et". $consonne. " consonne" ; 
