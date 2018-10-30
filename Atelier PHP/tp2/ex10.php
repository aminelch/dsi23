<?php 
$tab1=array(); // contient des nombres entre 1 et 63 
$tab2=array(); // contient des nombres entre 0 et 6.3 
$tab3=array();
for($i=0;$i<=10;$i++){
    $r=rand(1,63);

    $tab1[]=$r;
    $tab2[]=$r/10; 

}

foreach($tab3 as $element){
    $e=$tab1[$element];
    $tab3[$e] =sin($tab2[$element]);   
    // $tab3[$k]=

}


print_r($tab3); 

// print_r($tab12); 
// die();
echo "<pre>". print_r($tab2,true) . "</pre>";
