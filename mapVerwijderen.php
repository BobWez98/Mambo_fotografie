<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 19-12-2016
 * Time: 13:14
 */

$album = $_POST['albumVerwijder'];


rmdir("./assets/images/".$album);

header('Location: adminPaneel.php');

?>