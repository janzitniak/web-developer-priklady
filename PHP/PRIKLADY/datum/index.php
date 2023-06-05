<?php
include "hlavicka.php";
echo "Dobrý deň, presný čas: ";
date_default_timezone_set("Europe/Bratislava");
// echo date("H:i:s"); //to isté ako echo date("H:i:s", time());
echo date("F j, Y, g:i a"); 
include "pata.php";
?>