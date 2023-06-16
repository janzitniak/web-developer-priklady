<?php
$meno_studenta = $_POST["meno"];
echo "Meno študenta je: ".$meno_studenta;

$datum_narodenia = $_POST["datum"];
echo "<br>Dátum narodenia je: ".$datum_narodenia;

$timestamp = strtotime($datum_narodenia);
$formattedDate = date("d.m.Y", $timestamp);
echo "<br>Preformátovaný dátum narodenia je: ".$formattedDate;

$nastup_do_zamestnania = $_POST["nastup"];
echo "<br>Nástup do zamestnania: ".$nastup_do_zamestnania;

// TODO Moznost zadavat znamku vo formulari aj ako desatinne cislo
$znamka_studenta = $_POST["znamka"];
echo "<br>Známka: ".$znamka_studenta;