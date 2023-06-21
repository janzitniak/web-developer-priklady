<?php
// https://www.w3schools.com/php/php_mysql_select.asp
include "hlavicka.php";
require "kontrola-prihlasenia.php";
require "db.php";
echo "<h1>UPRAV ZÁZNAM | Evidencia výdavkov | webová aplikácia</h1>";

$id = $_GET['id'];

// SQL query na zobrazenie konkretneho udaju
// $sql = "SELECT id, nazov, kategoria, cena, datum FROM vydavky WHERE id=".$id;
//$sql = "SELECT * FROM vydavky WHERE id=".$id;
$sql = "SELECT id, nazov, kategoria, cena, datum FROM vydavky WHERE id=$id";
//echo $sql;

//$meno = "Ján Žitniak";
//echo "Meno administrátora je: ".$meno;
//echo "Meno administrátora iným spôsobom je: $meno";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    if ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $nazov = $row["nazov"];
        $kategoria = $row["kategoria"];
        $cena = $row["cena"];
        $datum = $row["datum"];
    }
}
?>
<form action="uloz-upraveny-zaznam-do-databazy.php" method="POST">
    Zadaj názov výdavku:
    <input type="text" name="nazov" value="<?php echo $nazov; ?>"><br>
    Kategória výdavku
    <select name="kategoria">
        <option value="Potraviny" <?php echo $kategoria == "Potraviny" ? "selected": ""; ?> >Potraviny</option>
        <option value="Zábava" <?php echo $kategoria == "Zábava" ? "selected": ""; ?> >Zábava</option>
        <option value="Oblečenie" <?php echo $kategoria == "Oblečenie" ? "selected": ""; ?> >Oblečenie</option>
        <option value="PHM" <?php echo $kategoria == "PHM" ? "selected": ""; ?> >PHM</option>
    </select>
    <br>
    Zadaj cenu: <input type="number" name="cena" step="0.1" value="<?php echo $cena; ?>"><br>
    Vyber dátum záznamu:<input type="date" name="datum" value="<?php echo $datum; ?>"><br>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit">Ulož upravený</button>
</form>
<?php
include "spat.php";
include "pata.php";