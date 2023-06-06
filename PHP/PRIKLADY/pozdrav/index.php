<?php
date_default_timezone_set("Europe/Bratislava"); // Nahraďte 'Your_Timezone' vašou časovou zónou

$aktualnyCas = date('H'); // Získa aktuálny čas hodiny (vo formáte 0-24)

if ($aktualnyCas >= 5 && $aktualnyCas < 12) {
    echo "Dobré ráno!";
} elseif ($aktualnyCas >= 12 && $aktualnyCas < 18) {
    echo "Dobrý deň!";
} else {
    echo "Dobrý večer!";
}
?>





