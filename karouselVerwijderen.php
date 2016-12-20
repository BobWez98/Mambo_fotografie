<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 19-12-2016
 * Time: 13:14
 */

$album = $_POST['karouselVerwijder'];


unlink("assets/carousel-item/". $album ."");

header('Location: adminPaneel.php');

?>