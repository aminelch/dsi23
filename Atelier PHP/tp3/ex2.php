<?php
/**
 * ****************************************
 * **** TP 3 ATELIER DEVELOPEMENT SERVEUR
 * **** EXERCICE 2
 * @author Amine L'ch
 * ****************************************
 */

require "mesFonctions.inc.php";
$num = "2930393112872";
$valid = verifNumero($num);

if ($valid) {

    echo "le numèro <b>" . $num . " </b> est valide";
} else {
    echo "le numèro <b>" . $num . " </b> est invalide";

}
