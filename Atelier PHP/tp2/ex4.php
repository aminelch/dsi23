<?php
 $largeur = 5;
 $longueur = 10;
 $i; /* var de boucle pour la répétition */
 $j; /* idem */

 /* repeter cote fois le bloc suivant */
 for( $i = 1; $i <= $largeur; $i = $i + 1) /* i numero de la ligne */
     for ($j = 1; $j <= $longueur; $j = $j + 1)
     {
         printf("* <br>");
     }
     printf("\n");
 }
