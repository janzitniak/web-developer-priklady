<?php
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
