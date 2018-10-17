<?php 
/* ****************************************
 * **** TP 3 ATELIER DEVELOPEMENT SERVEUR
 * **** EXERCICE 5
 * @author Amine L'ch
 * ****************************************
 */

$tableau_test=["aPlanète", "SaLut" ] ; 
//Mettre le premier lettre en maj 
function Formatteur($chaine){
    return ucfirst(strtolower($chaine));
}

 function LettreMaj (&$tab_chaine=[]){
    // foreach($tab_chaine as $singletab){
    //     echo ucfirst(strtolower($singletab)) ."<br>"; 
    // }

    return array_map("Formatteur", $tab_chaine);
     
     
 }

 var_dump(LettreMaj($tableau_test)); 




 