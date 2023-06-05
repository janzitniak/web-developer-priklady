<?php
include "hlavicka.php";
include "menu.php";
if (isset($_GET["id"])) {
	$id = $_GET["id"];
	if ($id == 1) {
		include "prva.php";
	}
	elseif ($id == 2) {
		include "druha.php";
	}
	else {
		include "uvod.php";
	}
}
else {
	include "uvod.php";
}
include "pata.php";
?>