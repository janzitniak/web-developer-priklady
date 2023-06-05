<?php
include "hlavicka.php";
echo "Dobrý deň, presný čas ako timestamp: ";
date_default_timezone_set("Europe/Bratislava");
echo time(); 
include "pata.php";
?>