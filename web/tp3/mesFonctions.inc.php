<?php 
/*
    Cette fonction reçoit en paramètre une chaîne de caractères représentant un numéro de {
    sécurité sociale et
    renvoie un booléen : TRUE si le paramètre contient exactement 13
    //Liste des instructions;
    caractères et commence soit par 1, soit par un 2 et FALSE sinon
    sinon.
*/ 
function verifNumero(string $nss):bool{
    if(strlen($nss)!==13 )return false ; 
    return true; 
}


/* 
Reçoit deux paramètres, une température et un entier n, et qui retourne la conversion Celsius Fahrenheit (n = 1), ou Fahrenheit  Celsius (n = 2).
Rappel : T F = 32 + 1.8 * T C
*/ 
function conv($celsius){
	return (32+ (1.8*$celsius));
}

/* 
**Retourne le Factorielle d'un entier n  
*/
function Factoriel($n) {
    return $n > 1 ? $n * Factoriel($n-1):1;
   }
 
   
/*
Retourne la somme de la série de terme général u n = x 2n + 1 /n!
*/ 
function sommeSerie ($n, $d) {
	$resultat= pow(2,$d)* (2*$n)+1 / (Factoriel($n)) ;
return $resultat;
}