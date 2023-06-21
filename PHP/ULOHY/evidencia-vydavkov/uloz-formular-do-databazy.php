<?php
// https://www.w3schools.com/php/php_mysql_insert.asp
include "hlavicka.php";
require "db.php";
// Získanie údajov z formulára
$nazov = $_POST['nazov'];
$kategoria = $_POST['kategoria'];
$cena = $_POST['cena'];
$datum = $_POST['datum'];

// SQL query na ulozenie zaznamu, teda (C)REATE
$sql = "INSERT INTO vydavky (nazov, kategoria, cena, datum) VALUES ('$nazov', '$kategoria', $cena, '$datum')";
//echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "Záznam bol úspešne uložený!";
} else {
    echo "Chyba!: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
include "spat.php";
include "pata.php";
