<?php

function sucet($numbers) {
    $sum = 0;
    for ($j = 0; $j < count($numbers); $j++) {
        //echo "<br>".$numbers[$j];
        //$sum = $sum + $numbers[$j];
        $sum += $numbers[$j];
    }
    return $sum;
}


// https://www.w3schools.com/php/php_arrays.asp
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
echo "Dĺžka poľa cars je: ".count($cars);
echo "<br>";
var_dump($cars); // Vypiseme obsah pola cars, ale je to technicky

echo "<br>Vypisujem obsah poľa čitateľne pre používateľa:";
for ($i = 0; $i < count($cars); $i++) {
    echo "<br>".$cars[$i]; // Vypiseme obsah pola, ktory je zrozumitelny pre pouzivatela
}

$numbers = array(1.2, 5, 8, 9.3, 10);
// TODO Scitanie hodnot pola $numbers
echo "<br>Celkový súčet hodnôt v poli numbers volaním metódy sucet je: ".sucet($numbers);


$vek = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo "<br>Joe is " . $vek["Joe"] . " years old.";
echo "<br>";
foreach($vek as $kluc => $hodnota) {
    echo "Kľúč poľa je: " . $kluc;
    echo " a jeho hodnota je: " . $hodnota;
    echo "<br>";
}

// Zoradovanie pola VZOSTUPNE, cize od najmensieho po najvacsie
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

// Zoradeovanie pola ZOSTUPNE, cize najvacsieho po najmensie
rsort($numbers);
var_dump($numbers);
echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

