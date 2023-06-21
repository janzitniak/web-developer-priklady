<?php
// https://www.w3schools.com/php/php_mysql_delete.asp
include "hlavicka.php";
require "db.php";
echo "<h1>ODSTRÁNENÝ ZÁZNAM | Evidencia výdavkov | webová aplikácia</h1>";

$id = $_GET['id'];

// SQL query na odstranenie zaznamu, teda (D)ELETE
$sql = "DELETE FROM vydavky WHERE id = $id";

if ($conn->query($sql)) {
    echo "Záznam s id=$id bol úspešne odstránený!";
} else {
    echo "Chyba pri odstraňovaní záznamu:" . mysqli_error($conn);
}

$conn->close();
include "spat.php";
include "pata.php";