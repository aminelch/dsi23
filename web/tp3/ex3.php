<?php 
/**
 * ****************************************
 * **** TP 3 ATELIER DEVELOPEMENT SERVEUR
 * **** EXERCICE 3
 * @author Amine L'ch
 * ****************************************
 */

 require "mesFonctions.inc.php";

$tf=[]; //tableau fahrenheit 
$tc=[]; //tableau celcuis 

$i= (-80);
do {
    $tf[]= $i;
    $tc[]=conv($i);
    $i= $i+ 10; 
}while($i<=80);



echo "<br> <b>tableau TF</b><br><pre>";
print_r($tf);
echo "</pre><br> <b>tableau Tc</b><br><pre>";
print_r($tc);
echo "</pre>";