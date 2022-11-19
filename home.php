<?php
require("povezivanje_baza.php");
require("Modeli/korisnik.php");

session_start();
if (!isset($_SESSION['korisnik_id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Pozz
</body>
</html>