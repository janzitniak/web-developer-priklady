<?php include "hlavicka.php"; ?>
    <h1>PRIDAJ ZÁZNAM | Evidencia výdavkov | webová aplikácia</h1>
    <form action="uloz-formular-do-databazy.php" method="POST">
    Zadaj názov výdavku:
    <input type="text" name="nazov"><br>
    Kategória výdavku
    <select name="kategoria">
        <option value="Potraviny">Potraviny</option>
        <option value="Zábava">Zábava</option>
        <option value="Oblečenie">Oblečenie</option>
        <option value="PHM">PHM</option>
    </select>
    <br>
    Zadaj cenu: <input type="number" name="cena" step="0.1"><br>
    Vyber dátum záznamu:<input type="date" name="datum"><br>
    <button type="submit">Uložiť</button>
</form>
<?php include "spat.php"; ?>
<?php include "pata.php"; ?>