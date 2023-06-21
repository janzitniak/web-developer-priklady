<?php
// https://www.w3schools.com/php/php_mysql_select.asp
include "hlavicka.php";
require "kontrola-prihlasenia.php";
require "db.php";
echo "<h1>ZOBRAZ VŠETKY ZÁZNAMY | Evidencia výdavkov | webová aplikácia</h1>";
// SQL query na zobrazenie vsetkych udajov, teda (R)EAD
$sql = "SELECT id, nazov, kategoria, cena, datum FROM vydavky";
$result = mysqli_query($conn, $sql); // mysqli_query mi dane SQL vykona

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Názov</th><th>Kategória</th><th>Cena</th><th>Dátum</th><th>Akcia</th><th>Akcia</th>";
    echo "</tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row["nazov"]."</td>";
        echo "<td>".$row["kategoria"]."</td>";

/*        $timestamp = strtotime($row["datum"]);
        $preformatovany_datum = date("d.m.Y", $timestamp);
        echo "<br>Preformátovaný dátum: ".$preformatovany_datum;*/

        echo "<td>".$row["datum"]."</td>";

/*        $cena = str_replace(".", ",", $row["cena"]);
        echo "<br>Preformátovaná cena: ".$cena;*/

        echo "<td>".$row["cena"]."</td>";
        echo "<td><a href='uprav-zaznam.php?id=".$row["id"]."'>Uprav</td>";
        echo "<td><a href='odstran-zaznam-z-databazy.php?id=".$row["id"]."'>Odstráň</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Žiadne výsledky!";
}
mysqli_close($conn);
include "spat.php";
include "pata.php";