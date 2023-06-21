<?php
// https://www.w3schools.com/php/php_mysql_update.asp
include "hlavicka.php";
require "db.php";
echo "<h1>ULOŽENÝ UPRAVENÝ ZÁZNAM | Evidencia výdavkov | webová aplikácia</h1>";
// Získanie údajov z formulára
$id = $_POST['id'];
$nazov = $_POST['nazov'];
$kategoria = $_POST['kategoria'];
$cena = $_POST['cena'];
$datum = $_POST['datum'];

// SQL query na aktualizaciu, upravu zaznamu, teda (U)PDATE
$sql = "UPDATE vydavky SET nazov='$nazov', cena='$cena', kategoria='$kategoria', datum='$datum' WHERE id=$id"; // Umyselne vynechanie stlpca kategoria
//echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "Záznam bol úspešne aktualizovaný!";
} else {
    echo "Chyba pri aktualizácii záznamu: " . mysqli_error($conn);
}

mysqli_close($conn);
include "spat.php";
include "pata.php";