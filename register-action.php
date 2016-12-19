<?php
Session_start();
//database connectie
include ('db.php');


//query registreren

$Voornaam = $_POST['Voornaam'];
$Achternaam = $_POST['Achternaam'];
$Email = $_POST['E-mail'];
$Wachtwoord = $_POST['Wachtwoord'];
$Adres = $_POST['Adres'];
$huisnummer = $_POST['Huisnummer'];
$postcode = $_POST['Postcode'];
$woonplaats = $_POST['Woonplaats'];



 var_dump($_POST);
$sql = "INSERT INTO users (Voornaam, Achternaam, Email, Wachtwoord, Adres, Huisnummer, Postcode, Woonplaats)
VALUES ('$Voornaam', '$Achternaam', '$Email', '$Wachtwoord', '$Adres', '$huisnummer', '$postcode', '$woonplaats')";

header('Location: index.php');



?>