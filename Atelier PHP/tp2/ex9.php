<?php 
$nombre=952;
$nombre2=44; 

function pgcd($nombre,$nombre2){

    while($nombre>1){
         $reste = $nombre%$nombre2;
 
         if($reste == 0){
         break; // sorti quand resultat trouvé
         }
 
         $nombre=$nombre2;
         $nombre2=$reste;
     }
 return $nombre2; // retourne le resultat
 }
 
echo "Le PGCD de ". $nombre . " et ". $nombre2. " =  " . pgcd($nombre,$nombre2 ); 





