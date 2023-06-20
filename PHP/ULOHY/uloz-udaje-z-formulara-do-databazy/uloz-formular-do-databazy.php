<?php
// https://www.w3schools.com/php/php_mysql_insert.asp
$servername = "localhost";
$username = "root";
$password = ""; // Heslo nesmie byt prazdne!
$dbname = "vydavky_schema";

// Vytvárame konekciu na databázu
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Kontrola konekcie
if (!$conn) {
    die("Neúspešné pripojenie do databázy: " . mysqli_connect_error());
}


// Získanie údajov z formulára
$nazov = $_POST['nazov'];
$kategoria = $_POST['kategoria'];
$cena = $_POST['cena'];
$datum = $_POST['datum'];
$timestamp = strtotime($datum);
$preformatovany_datum = date("Y-m-d", $timestamp);

// SQL query na ulozenie zaznamu, teda (C)REATE
$sql = "INSERT INTO vydavky (nazov, kategoria, cena, datum) VALUES ('$nazov', '$kategoria', $cena, '$preformatovany_datum')";
//echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "Záznam bol úspešne uložený!";
} else {
    echo "Chyba!: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();