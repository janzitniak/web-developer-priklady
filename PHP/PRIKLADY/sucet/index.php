<?php
// http://localhost/sucet/index.php?a=5&b=20

include "hlavicka.php";
echo "<h1>Súčet dvoch číslic:</h1>";
if (isset($_GET["a"]) && isset($_GET["b"])) {
	$a = $_GET["a"];
	$b = $_GET["b"];
	$a = strip_tags($a);
	$b = strip_tags($b);
	settype($a, "float");
	settype($b, "float");
	
	$c = $a + $b;
	echo $a . " + " . $b . " = " . $c;
} else {
	echo "Hodnota nebola zadaná.";
}
include "pata.php";
?>