<?php 
$quantite=50; 
$cout=0; 

// elaborer le test en changeant la valeur de $qantité 


if($quantite<10){
    $cout=150; 
}else if($quantite>= 10 && $quantite<= 49 ){
    $cout=135;
}else if ($quantite>49){
    $cout=110;
}
echo "quantité :" . $quantite . "<br>"; 
echo "prix :" . $cout . "<br>"; 

echo "Le montant total = ". $cout*$quantite; 


