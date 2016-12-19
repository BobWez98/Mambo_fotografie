<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 19-12-2016
 * Time: 09:57
 */
session_start();

$newDir = $_POST['album'];

mkdir("./assets/images/".$newDir);


header('Location: adminPaneel.php');






?>