<?php
// http://localhost/premena/index.php?x=1024

include "hlavicka.php";
echo "<h1>Premena jednotiek:</h1>";
$x = $_GET["x"];
echo $x . " B = " . $x / 1024 . " KiB";
include "pata.php";
?>