<?php 
/* 
Total = Prix unitaire TTC * Quantité
 Prix unitaire TTC = Prix unitaire HT + Montant TVA
 Montant TVA = Prix unitaire HT * Taux TVA
 Taux TVA = 7%
*/ 

/* [nom_client] => ldll
    [produits] => Ordinateur
    [gsm] => +216
    [quantite] => 1
    [adresse] => 22
    [prixunitaire] => 
    [afficher] => Afficher la facture
    */ 

    $montant_TVA= $_POST['prixunitaire'] * 0.07 ; 
    $prix_unitaireTTC= ($montant_TVA + $_POST['prixunitaire'])  ; 
    $total=$prix_unitaireTTC* $_POST['quantite']; 
?>


            
    <fieldset>
        <center><h3>Facture</h3></center>
        <b>Produit:</b> <?=$_POST['produits']; ?><br>
        <b>Quantité:</b> <?=$_POST['quantite']; ?><br><br>
    Merci,  <?=$_POST['nom_client']; ?>  pour votre confiance 
    <div style="float:right">Le total à payer:  <?=$total; ?></div> 
    </fieldset>