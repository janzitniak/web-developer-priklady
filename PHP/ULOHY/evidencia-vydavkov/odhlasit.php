<?php
session_start();
unset($_SESSION['pouzivatel_id']); // Odstranili $_SESSION pouzivatel_id
header('Location: index.php'); // Automaticke presmerovanie na uvodnu stranku
?>