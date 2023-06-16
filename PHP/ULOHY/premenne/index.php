<?php
/*
Úloha č.1: Príklad na prácu s premennými
Vypíšte na stránku nasledujúci text:
Študent Jozef Mrkvička sa narodil 03.04.2000, z maturitnej skúšky má známku 1.5 a od septembra 2022 nastúpi do nového zamestnania ako PHP programátor.
V Bratislave dňa 18.06.2022
Poznámka: Dátum narodenia, známku a rok + aktuálny dátum nastavte tak, aby sa dali meniť v zdrojovom kóde (t.j. cez premenné).
*/
//setlocale(LC_ALL, null);
//setlocale(LC_ALL, 'sk_SK', 'Slovak');// Zmeni desatinne cisla akceptovatelne pre slovenskeho pouzivatela
//var_dump(setlocale(LC_ALL, 'sk_SK'));

$datum_narodenia = "03.04.2000";
$znamka = 1.5;
$znamka = str_replace('.', ',', $znamka); // Nahradi desatinnu bodku za ciarku
$od_kedy = "septembra 2022";

echo "Študent Jozef Mrkvička sa narodil ".$datum_narodenia;
echo ", z maturitnej skúšky má známku ".$znamka;
echo " a od ".$od_kedy;
echo " nastúpi do nového zamestnania ako PHP programátor.";
echo "<br>V Bratislave dňa ".date("d.m.Y");


echo "<br>Študent Jozef Mrkvička sa narodil ".$datum_narodenia.", z maturitnej skúšky má známku ".$znamka." a od ".$od_kedy." nastúpi do nového zamestnania ako PHP programátor.<br>V Bratislave dňa ".date("d.m.Y");

