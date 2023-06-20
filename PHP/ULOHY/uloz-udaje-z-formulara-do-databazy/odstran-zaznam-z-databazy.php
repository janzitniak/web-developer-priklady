<?php
// https://www.w3schools.com/php/php_mysql_delete.asp
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

// SQL query na odstranenie zaznamu, teda (D)ELETE
$sql = "DELETE FROM vydavky WHERE id = 1";

if ($conn->query($sql)) {
    echo "Záznam bol úspešne odstránený";
} else {
    echo "Chyba pri odstraňovaní záznamu: " . mysqli_error($conn);
}

$conn->close();