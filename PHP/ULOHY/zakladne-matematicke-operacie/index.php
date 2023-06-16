<?php
/*Vytvorte jednoduchý program, ktorého cieľom bude výpočet 5 základných matematických operácií a to sčítanie (+), odčítanie (-), násobenie (*) a delenie (/), modulo (%).
Matematické operácie budú “narábať” s dvoma hodnotami, ktoré budú zadané v premenných, napr. cislo1  a cislo2.
    Pozn.: Nezabúdať na to, že sa môže jednať o desatinné čísla.
Program nám zároveň vypíše takýto text:
Výsledkom sčítania hodnôt 2 a 3 je 5.
Výsledkom odčítania hodnôt 2 a 3 je -1.*/

function sucet($cis1, $cis2) {
    // Tu sa mozu pouzit dalsie PHP prikazy, ktore rozsiruju aplikacnu logiku
    return $cis1 + $cis2;
}

function rozdiel($cis1, $cis2) {
    return $cis1 - $cis2;
}

function sucin($cis1, $cis2) {
    return $cis1 * $cis2;
}

function podiel($cis1, $cis2) {
    return $cis1 / $cis2;
}

function modulo($cis1, $cis2) {
    return $cis1 % $cis2;
}



$cislo1 = 12;
$cislo2 = 5;

echo "Výsledkom sčítania hodnôt ".$cislo1." a ".$cislo2." je ".sucet($cislo1, $cislo2);
echo "<br>Výsledkom odčítania hodnôt ".$cislo1." a ".$cislo2." je ".rozdiel($cislo1, $cislo2);
echo "<br>Výsledkom násobenia hodnôt ".$cislo1." a ".$cislo2." je ".sucin($cislo1, $cislo2);
echo "<br>Výsledkom delenia hodnôt ".$cislo1." a ".$cislo2." je ".podiel($cislo1, $cislo2);
echo "<br>Výsledkom zvyšku po delení (modulo) hodnôt ".$cislo1." a ".$cislo2." je ".modulo($cislo1, $cislo2);