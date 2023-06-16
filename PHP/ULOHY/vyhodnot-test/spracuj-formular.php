<?php
/*Vytvorte prostredníctvom vstupu z formulára (alebo premennej) rozhodovací test, ktorý vypíše známku A, B alebo C podľa týchto kritérií:
Použite metódu pre rozhodovanie.
Ak je percento nad 90, tak vypíše známku A
Ak je percento nad 75, tak vypíše známku B
Ak je percento nad 65, tak vypíše známku C
V opačnom prípade  nespravil.*/

function vyhodnot_body_a_zobraz_vysledok($body) {
    echo "<br>"; // Dalsi riadok
    if ($body > 90) {
        echo "Dostal si známku A";
    } else if ($body > 75) {
        echo "Dostal si známku B";
    } else if ($body > 65) {
        echo "Dostal si známku C";
    } else {
        echo "Neprešiel si!";
    }
}

function vyhodnot_body_a_vrat_vysledok($body) {
    $vysledok = "";
    if ($body > 90) {
        $vysledok = "Výborný";
    } else if ($body > 75) {
        $vysledok = "Chválitebný";
    } else if ($body > 65) {
        $vysledok = "Dobrý";
    } else {
        $vysledok = "Si úplne zlý!";
    }
    return $vysledok;
}


$body = $_GET["body"];
echo "Zadal si počet bodov: ".$body;
vyhodnot_body_a_zobraz_vysledok($body); // Zavolame metodu vyhodnot_body
echo "<br>Výsledok testu je: ".vyhodnot_body_a_vrat_vysledok($body);
echo "<br>Znovu vypisuje výsledok testu: ".vyhodnot_body_a_vrat_vysledok($body);

// TODO Prerobit formular, aby pouzivatel mohol zadat znamky len v rozsahu od 0 do 100