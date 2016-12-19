<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 28-11-2016
 * Time: 15:17
 */

session_start();
include ('db.php');


$email = $_POST['E-Mail'];
$wachtwoord = $_POST['Wachtwoord'];


$sql = "SELECT * FROM users WHERE Email='$email' AND Wachtwoord='$wachtwoord'";

$result = mysqli_query($conn, $sql);

if(!mysqli_fetch_assoc($result)){
    Echo "Email or password is wrong";
}else{
    $_SESSION['Id'] = $row['Id'];
    $_SESSION['Voornaam'] = $row['Voornaam'];
    $_SESSION['Ingelogd'] = true;

    header('Location: adminPaneel.php');
}


?>