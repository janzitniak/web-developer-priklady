<?php
session_start();
//echo "pouzivatel_id: ".$_SESSION['pouzivatel_id'];
if (!isset($_SESSION['pouzivatel_id'])) {
    header('Location: prihlasenie.php');
    exit;
}
