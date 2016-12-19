<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 29-11-2016
 * Time: 11:57
 */
session_start();
session_destroy();


header('Location: index.php');

?>