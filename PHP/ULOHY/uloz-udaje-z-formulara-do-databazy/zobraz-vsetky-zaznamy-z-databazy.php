<?php
// https://www.w3schools.com/php/php_mysql_select.asp
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

// SQL query na zobrazenie vsetkych udajov, teda (R)EAD
$sql = "SELECT nazov, kategoria, cena, datum FROM vydavky";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Názov: ".$row["nazov"];
        echo "<br>Kategória: ".$row["kategoria"];

/*        $timestamp = strtotime($row["datum"]);
        $preformatovany_datum = date("d.m.Y", $timestamp);
        echo "<br>Preformátovaný dátum: ".$preformatovany_datum;*/

        echo "<br>Dátum: ".$row["datum"];

/*        $cena = str_replace(".", ",", $row["cena"]);
        echo "<br>Preformátovaná cena: ".$cena;*/

        echo "<br>Cena: ".$row["cena"];
        echo "<br><br>";
    }
} else {
    echo "Žiadne výsledky!";
}

mysqli_close($conn);