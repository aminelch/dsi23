<?php 
$date_actuelle=date("Y");
$date_de_naissance=1995;
// die($date_actuelle);


echo "Année de Naissance :". $date_de_naissance."<br>" ;
echo "Année en cours: " . date("Y") ."<br>";
echo "Votre age : "  . ($date_actuelle - $date_de_naissance);