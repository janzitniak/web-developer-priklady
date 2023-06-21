<?php
// https://www.w3schools.com/php/php_mysql_delete.asp
include "hlavicka.php";
require "db.php";
echo "<h1>ODSTRÁNENÝ ZÁZNAM | Evidencia výdavkov | webová aplikácia</h1>";

$id = $_GET['id'];

// SQL query na odstranenie zaznamu, teda (D)ELETE
$sql = "DELETE FROM vydavky WHERE id = $id";
//echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "Záznam s id=$id bol úspešne odstránený!";
} else {
    echo "Chyba pri odstraňovaní záznamu:" . mysqli_error($conn);
}

mysqli_close($conn);
include "spat.php";
include "pata.php";