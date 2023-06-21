<?php
session_start();
include "hlavicka.php";
require "db.php";
echo "<h1>OVERENIE ÚDAJOV| Evidencia výdavkov | webová aplikácia</h1>";

$login = $_POST['login'];
$heslo = $_POST['heslo'];

// SQL query na overenie pouzivatela
$sql = "SELECT id FROM pouzivatelia WHERE login='$login' AND heslo='$heslo'";
//echo $sql;

$result = mysqli_query($conn, $sql); // Vykoname sql vyssie

if (mysqli_num_rows($result) > 0) {
    if ($row = mysqli_fetch_assoc($result)) {
        echo "Používateľ je prihlásený. Vráťte sa prosím na úvodnú stránku.";
        $_SESSION['pouzivatel_id'] = $row['id']; // Ak pouzivatel existuje, tak nastavime SESSION
    }
} else {
    echo "Taký používateľ s prístupovými údajmi neexistuje!";
}
include "spat.php";
include "pata.php";