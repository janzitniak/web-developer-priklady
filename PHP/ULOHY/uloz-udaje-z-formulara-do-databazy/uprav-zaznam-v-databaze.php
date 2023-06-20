<?php
// https://www.w3schools.com/php/php_mysql_update.asp
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

// SQL query na aktualizaciu, upravu zaznamu, teda (U)PDATE
$sql = "UPDATE vydavky SET nazov='Pepsi cola', cena=3.8, datum='2023-06-01' WHERE id=2"; // Umyselne vynechanie stlpca kategoria

if (mysqli_query($conn, $sql)) {
    echo "Záznam bol úspešne aktualizovaný";
} else {
    echo "Chyba pri aktualizácii záznamu: " . mysqli_error($conn);
}

mysqli_close($conn);