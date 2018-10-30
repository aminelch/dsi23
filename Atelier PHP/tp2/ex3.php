<?php 
$date_dejour=date("H:m:i");
echo "Heure de système: " . $date_dejour;

$temps= explode($date_dejour,":");
echo $temps[1];


