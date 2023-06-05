<?php
// http://localhost/premena-kelvin/index.php?kelv=500

include "hlavicka.php";
echo "<h1>Premena jednotiek KELVIN na STUPNE:</h1>";
$kelvin = $_GET["kelv"];
$celsius = $kelvin - 273.15;
echo $kelvin . " v Kelvinoch == " . $celsius . " v stupňoch Celsia";
include "pata.php";
?>