<?php
echo "Vous avez commandé  ". $_POST['nombre_commande']." ".  $_POST['liste_produits'] . "  auprès du ". $_POST['liste_vendeurs']; 

?>
<br>
<button name="retour" onclick="history.back();">Retour</button>