<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 15-12-2016
 * Time: 09:34
 */
session_start();

$verwijderen = $_POST['verwijderen'];
$dir = "assets/images/".$_SESSION['dir']."/";

unlink($dir.$verwijderen);
var_dump($verwijderen);
unset($_SESSION['dir']);

header('Location: adminPaneel.php');

?>